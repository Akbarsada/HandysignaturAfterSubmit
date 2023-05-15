<?php
/**
 * 
 * Our initialisation class
 * Check all the dependancy requirements are met, otherwise fallback and show appropriate user error 
 * 
 * 
 * @package     Handysignatur After Submit
 * @copyright   Copyright (c) 2022, smartcoding.at 
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */




/**
 *
 *
 * @since 1.0
 */
class HAS_Compatibility_Checks {

	/**
	 * The plugin's basename
	 *
	 * @var string
	 *
	 * @since 1.0
	 */
    private $basename;


	/**
	 * The path to the plugin
	 *
	 * @var string
	 *
	 * @since 1.0
	 */
	private $path;

    /**
	 * Holds any blocker error messages stopping plugin running
	 *
	 * @var array
	 *
	 * @since 4.0
	 */
	private $notices = array();


    /**
	 * The plugin's required Gravity Forms version
	 *
	 * @var string
	 *
	 * @since 4.0
	 */
	public $required_gf_version = '2.5';


    /**
	 * The plugin's required Gravity Forms PDF version
	 *
	 * @var string
	 *
	 * @since 1.0
	 */
	public $required_gfpdf_version = '4.0';


    /**
	 * The plugin's required WordPress version
	 *
	 * @var string
	 *
	 * @since 4.0
	 */
	public $required_wp_version = '5.3';

    /**
	 * The plugin's required PHP version
	 *
	 * @var string
	 *
	 * @since 4.0
	 */
	public $required_php_version = '7.3';


    /**
	 * Set our required variables for a fallback and attempt to initialise
	 *
	 * @param string $basename Plugin basename
	 * @param string $path     The plugin path
	 *
	 * @since    4.0
	 */
	public function __construct( $basename = '', $path = '' ) {

		/* Set our class variables */
		$this->basename = $basename;
		$this->path     = $path;
	}


    /**
	 * Load the plugin
	 *
	 * @since 4.0
	 */
	public function init() {
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
	}

    /**
	 * Check if dependencies are met and load plugin, otherwise display errors
	 *
	 * @since 4.0
	 */

    public function plugins_loaded() {

		/* Check minimum requirements are met */
		$this->is_compatible_wordpress_version();
		$this->check_gravity_forms();
        $this->check_gravityPDF();
		$this->check_php();
		$this->check_openssl();
		

		/* Check if any errors were thrown, enqueue them and exit early */
		if ( count( $this->notices ) > 0 ) {
			if ( $this->offer_downgrade ) {
				add_action( 'admin_menu', array( $this, 'admin_rollback_menu' ), 20 );

				/* don't display the notice on the rollback page */
				if ( is_admin() && rgget( 'page' ) === 'gpdf-downgrade' ) {
					return;
				}
			}

			if ( class_exists( 'GFForms' ) && GFForms::is_gravity_page() ) {
				ob_start();
				$this->notice_body_content();
				GFCommon::add_error_message( ob_get_clean() );

				return;
			}

			add_action( 'admin_notices', array( $this, 'display_notices' ) );

			return;
		}

		//require_once $this->path . 'src/bootstrap.php';
	}


    /**
	 * Check if WordPress version is compatible
	 *
	 * @return boolean Whether compatible or not
	 *
	 * @since 1.0
	 */
	public function is_compatible_wordpress_version() {
		global $wp_version;

		/* WordPress version not compatible */
		if ( ! version_compare( $wp_version, $this->required_wp_version, '>=' ) ) {
			$this->notices[] = sprintf( esc_html__( 'WordPress version %1$s is required: upgrade to the latest version. %2$sGet more info%3$s.', 'handysignatur-after-submit' ), $this->required_wp_version, '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#wordpress-version-x-is-required">', '</a>' );

			/* Offer downgrade prompt if WP version is compatible with v5 */
			if ( version_compare( $wp_version, '4.8', '>=' ) ) {
				$this->offer_downgrade = true;
			}

			return false;
		}

		return true;
	}



     /**
	 * Check if Gravity Forms version is compatible
	 *
	 * @return boolean Whether compatible or not
	 *
	 * @since 4.0
	 */
	public function check_gravity_forms() {

		/* Gravity Forms version not compatible */
		if ( ! class_exists( 'GFCommon' ) ) {
			$this->notices[] = sprintf( esc_html__( '%1$sGravity Forms%2$s is required to use Handysignatur After Submit. %4$sGet more info%5$s.', 'handysignatur-after-submit' ),  '<a href="https://rocketgenius.pxf.io/c/1211356/445235/7938">', '</a>', $this->required_gf_version, '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#gravity-forms-is-required">', '</a>' );

			return false;
		}

		if ( ! version_compare( GFCommon::$version, $this->required_gf_version, '>=' ) ) {
			$this->notices[] = sprintf( esc_html__( '%1$sGravity Forms%2$s version %3$s or higher is required. %4$sGet more info%5$s.', 'handysignatur-after-submit' ),  '<a href="https://rocketgenius.pxf.io/c/1211356/445235/7938">', '</a>', $this->required_gf_version, '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#gravity-forms-is-required">', '</a>' );

			/* Offer downgrade prompt if GF version is compatible with v5 */
			if ( version_compare( GFCommon::$version, '2.3.1', '>=' ) ) {
				$this->offer_downgrade = true;
			}

			return false;
		}
   
	}


         /**
	 * Check if Gravity Forms version is compatible
	 *
	 * @return boolean Whether compatible or not
	 *
	 * @since 4.0
	 */
	public function check_gravityPDF() {

		/* Gravity Forms version not compatible */
		if ( ! class_exists( 'GFPDF_Major_Compatibility_Checks' ) ) {
			$this->notices[] = sprintf( esc_html__( '%1$sGravity PDF%2$s is required to use Handysignatur After Submit. %4$sGet more info%5$s.', 'handysignatur-after-submit' ), '<a href="https://wordpress.org/plugins/gravity-forms-pdf-extended/">', '</a>', $this->required_gf_version, '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#gravity-forms-is-required">', '</a>' );

			return false;
		}


	}


    /**
	 * Check if PHP version is compatible
	 *
	 * @return boolean Whether compatible or not
	 *
	 * @since 4.0
	 */
	public function check_php() {

		/* Check PHP version is compatible */
		if ( ! version_compare( phpversion(), $this->required_php_version, '>=' ) ) {
			$this->notices[] = sprintf( esc_html__( 'You are running an %1$soutdated version of PHP%2$s. Contact your web hosting provider to update. %3$sGet more info%4$s.', 'handysignatur-after-submit' ), '<a href="https://wordpress.org/support/update-php/">', '</a>', '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#you-are-running-an-outdated-version-of-php">', '</a>' );

			/* Offer downgrade prompt if PHP version is compatible with v5 */
			if ( version_compare( phpversion(), '5.6', '>=' ) ) {
				$this->offer_downgrade = true;
			}

			return false;
		}

		return true;
	}


    /**
	 * Check if PHP openssl enabled
	 *
	 * @return boolean Whether compatible or not
	 *
	 * @since 4.0
	 */
	public function check_openssl() {

		/* Check MB String is installed */
		if ( ! extension_loaded( 'openssl' ) ) {
			$this->notices[] = sprintf( esc_html__( 'The PHP Extension openssl could not be detected. Contact your web hosting provider to fix. %1$sGet more info%2$s.', 'handysignatur-after-submit' ), '<a href="https://docs.gravitypdf.com/v6/users/activation-errors#the-php-extension-mb-string-could-not-be-detected">', '</a>' );

			return false;
		}

		return true;
	}

    /**
	 * Helper function to easily display error messages
	 *
	 * @since 4.0
	 */
	public function display_notices() {
		?>
		<div class="error">
			<?php $this->notice_body_content(); ?>
		</div>
		<?php
	}

	/**
	 * @since 6.0
	 */
	public function notice_body_content() {
		?>
		<p><strong><?php esc_html_e( 'Handysignatur After Submit Installation Problem', 'gravity-forms-pdf-extended' ); ?></strong></p>

		<p><?php esc_html_e( 'The minimum requirements for Gravity PDF have not been met. Please fix the issue(s) below to use the plugin:', 'gravity-forms-pdf-extended' ); ?></p>
		<ul style="padding-bottom: 0">
			<?php foreach ( $this->notices as $notice ): ?>
				<li style="padding-left: 20px;list-style: inside"><?php echo $notice; ?></li>
			<?php endforeach; ?>
		</ul>

		
		<?php
	}

}

/*
 * Initialise the software
 */
$handysignaturAfterSubmit = new HAS_Compatibility_Checks(
	HANDYSIGNATUR_PLUGIN_BASENAME,
	HANDYSIGNATUR_PLUGIN_DIR
);

$handysignaturAfterSubmit->init();