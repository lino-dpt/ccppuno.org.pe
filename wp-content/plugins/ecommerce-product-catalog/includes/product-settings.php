<?php
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Manages product settings
 *
 * Here product settings are defined and managed.
 *
 * @version		1.1.4
 * @package		ecommerce-product-catalog/includes
 * @author 		impleCode
 */
function register_product_settings_menu() {
	add_submenu_page( 'edit.php?post_type=al_product', __( 'Settings', 'ecommerce-product-catalog' ), __( 'Settings', 'ecommerce-product-catalog' ), apply_filters( 'see_product_settings_cap', 'manage_product_settings' ), basename( __FILE__ ), 'product_settings' );
	do_action( 'product_settings_menu' );
}

add_action( 'admin_menu', 'register_product_settings_menu' );

add_filter( 'option_page_capability_product_settings', 'map_product_settings_capability' );
add_filter( 'option_page_capability_product_attributes', 'map_product_settings_capability' );
add_filter( 'option_page_capability_product_shipping', 'map_product_settings_capability' );
add_filter( 'option_page_capability_product_names_archive', 'map_product_settings_capability' );
add_filter( 'option_page_capability_product_names_single', 'map_product_settings_capability' );
add_filter( 'option_page_capability_product_design', 'map_product_settings_capability' );
add_filter( 'option_page_capability_single_design', 'map_product_settings_capability' );
add_filter( 'option_page_capability_design_schemes', 'map_product_settings_capability' );

function map_product_settings_capability( $cap ) {
	return apply_filters( 'change_product_settings_cap', 'manage_product_settings' );
}

if ( !function_exists( 'ic_catalog_settings_list' ) ) {

	add_action( 'admin_init', 'ic_catalog_settings_list', 20 );

	function ic_catalog_settings_list() {
		do_action( 'product-settings-list' );
		do_action( 'ic-catalog-settings-list' );
	}

}

require_once( AL_BASE_PATH . '/templates/themes/theme-default.php' );
require_once( AL_BASE_PATH . '/templates/themes/theme-classic-list.php' );
require_once( AL_BASE_PATH . '/templates/themes/theme-classic-grid.php' );

function product_settings() {
	?>

	<div id="implecode_settings" class="wrap">
		<h2><?php _e( 'Settings', 'ecommerce-product-catalog' ) ?> - impleCode <?php echo IC_CATALOG_PLUGIN_NAME ?></h2>
		<?php
		do_action( 'ic_settings_top' );
		?>
		<div class="table" style="margin-top: 20px; width: 100%;position:relative;text-align: left;">
			<?php
			$tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : '';

			/* GENERAL SETTINGS */

			if ( $tab == 'product-settings' OR $tab == '' ) {
				?>
				<script>
					jQuery( '.nav-tab-wrapper a' ).removeClass( 'nav-tab-active' );
					jQuery( '.nav-tab-wrapper a#general-settings' ).addClass( 'nav-tab-active' );
				</script>
				<?php
				general_settings_content();
			}

			/* ATTRIBUTES TAB */ else if ( $tab == 'attributes-settings' ) {
				?>
				<script>
					jQuery( '.nav-tab-wrapper a' ).removeClass( 'nav-tab-active' );
					jQuery( '.nav-tab-wrapper a#attributes-settings' ).addClass( 'nav-tab-active' );
				</script>
				<?php
				attributes_settings_content();
			}

			/* SHIPPING TAB */ else if ( $tab == 'shipping-settings' ) {
				?>
				<script>
					jQuery( '.nav-tab-wrapper a' ).removeClass( 'nav-tab-active' );
					jQuery( '.nav-tab-wrapper a#shipping-settings' ).addClass( 'nav-tab-active' );
				</script>
				<?php
				shipping_settings_content();
			}

			/* DESIGN TAB */ else if ( $tab == 'design-settings' ) {
				?>
				<script>
					jQuery( '.nav-tab-wrapper a' ).removeClass( 'nav-tab-active' );
					jQuery( '.nav-tab-wrapper a#design-settings' ).addClass( 'nav-tab-active' );
				</script>
				<?php
				custom_design_content();
			} else if ( $tab == 'names-settings' ) {
				?>
				<script>
					jQuery( '.nav-tab-wrapper a' ).removeClass( 'nav-tab-active' );
					jQuery( '.nav-tab-wrapper a#names-settings' ).addClass( 'nav-tab-active' );
				</script>
				<?php
				custom_names_content();
			}
			do_action( 'settings-content' );
			?>
			<div class="plugin-logo table-row">
				<div class="table-cell"></div>
				<div class="table-cell" style="padding-top: 20px"><?php do_action( 'ic_plugin_logo_container' ) ?></div>
				<div class="table-cell"><a href="https://implecode.com/#cam=catalog-settings-link&key=logo-link"><img class="en" src="<?php echo AL_PLUGIN_BASE_PATH . 'img/implecode.png'; ?>" width="282px" alt="impleCode" /></a></div>
			</div>
		</div>
	</div>


	<script>
		var fixHelper = function ( e, ui ) {
			ui.children().each( function () {
				jQuery( this ).width( jQuery( this ).width() );
			} );
			return ui;
		};

		jQuery( window ).load( function ( ) {
			var cache = jQuery( '.helpers .wrapper, #implecode_settings .settings-submenu h3' );

			var height = jQuery( '.settings-submenu' ).height();
			var helpers_height = jQuery( '.helpers .wrapper' ).height();
			var screen_height = jQuery( window ).height();
			if ( helpers_height + 90 > screen_height ) {
				var cache = jQuery( '#implecode_settings .settings-submenu h3' );
			} else {
				var cache = jQuery( '.helpers .wrapper, #implecode_settings .settings-submenu h3' );
			}
			var top = cache.offset().top - 32;
			function fixDiv() {
				if ( jQuery( window ).scrollTop() > top && jQuery( window ).scrollTop() < height ) {
					cache.css( { 'position': 'fixed', 'top': 20 } );
				} else if ( jQuery( window ).scrollTop() >= height - 20 ) {
					//cache.css( { 'position': 'absolute', 'bottom': '0px', 'top': 'auto' } );
					cache.css( { 'position': 'relative', 'top': 'auto', 'bottom': 'auto' } );
				} else {
					cache.css( { 'position': 'relative', 'top': 'auto', 'bottom': 'auto' } );
				}
			}
			jQuery( window ).scroll( fixDiv );
			fixDiv();
		} );
		jQuery( document ).ready( function () {
			jQuery( '.product-settings-table.dragable tbody' ).sortable( {
				update: function ( event, ui ) {
					jQuery( '.product-settings-table.dragable tbody tr' ).each( function () {
						var r = jQuery( this ).index() + 1;
						jQuery( this ).children( 'td:first-child' ).html( r );
						jQuery( this ).children( 'td:first-child' ).removeClass();
						jQuery( this ).children( 'td:first-child' ).addClass( 'lp-column lp' + r );
						//jQuery( this ).find( '.product-attribute-label-column .product-attribute-label' ).attr( 'name', 'product_attribute_label[' + r + ']' );
						//jQuery( this ).find( 'td .product-attribute' ).attr( 'name', 'product_attribute[' + r + ']' );
						//jQuery( this ).find( 'td .product-attribute-unit' ).attr( 'name', 'product_attribute_unit[' + r + ']' );

						//jQuery( this ).find( '.product-shipping-label-column .product-shipping-label' ).attr( 'name', 'product_shipping_label[' + r + ']' );
						//jQuery( this ).find( 'td .product-shipping-cost' ).attr( 'name', 'product_shipping_cost[' + r + ']' );
						jQuery( this ).find( 'input, textarea' ).each( function () {
							var name = jQuery( this ).attr( 'name' );
							name = name.replace( /[0-9]+/, r );
							jQuery( this ).attr( 'name', name );
						} );
					} )
				},
				helper: fixHelper,
				placeholder: 'sort-placeholder',
			} );
		} );
		//jQuery('.ui-sortable').height(jQuery('.ui-sortable').height());

	</script>
	<?php
}

add_action( 'ic_settings_top', 'ic_product_settings_html', 50 );

function ic_product_settings_html() {
	?>
	<h2 class="nav-tab-wrapper">
	<?php do_action( 'settings-menu' ); ?>
	</h2>
	<?php
}

function doc_helper( $title, $url, $class = null ) {
	$helper = '<div class="doc-helper ' . $class . '"><div class="doc-item">
		<div class="doc-name green-box">' . sprintf(
	__( '%s Settings in Docs', 'ecommerce-product-catalog' ), ic_ucfirst( $title ) ) . '</div>
		<div class="doc-description">' . sprintf(
	__( 'See %s configuration tips in the impleCode documentation', 'ecommerce-product-catalog' ), $title ) . '.</div>
		<div class="doc-button"><a href="https://implecode.com/docs/ecommerce-product-catalog/' . $url . '/?cam=catalog-docs-box&key=' . $url . '"><input class="doc_button classic-button" type="button" value="' . __( 'See in Docs', 'ecommerce-product-catalog' ) . '"></a></div>
		<a title="' . __( 'Click the button to visit impleCode documentation', 'ecommerce-product-catalog' ) . '" href="https://implecode.com/docs/ecommerce-product-catalog/' . $url . '/?cam=catalog-docs-box&key=' . $url . '" class="background-url"></a>
		</div></div>';
	echo $helper;
}

function did_know_helper( $name, $desc, $url, $class = null ) {
	$helper = '<div class="doc-helper ' . $class . '"><div class="doc-item">
		<div class="doc-name green-box">' .
	__( 'Did you know?', 'ecommerce-product-catalog' ) . '</div>
		<div class="doc-description">' . $desc . '.</div>
		<div class="doc-button"><a href="' . $url . '?cam=catalog-know-box&key=' . $name . '"><input class="doc_button classic-button" type="button" value="' . __( 'See Now', 'ecommerce-product-catalog' ) . '"></a></div>
		<a title="' . __( 'Click the button to visit impleCode website', 'ecommerce-product-catalog' ) . '" href="' . $url . '?cam=catalog-docs-box&key=' . $name . '" class="background-url"></a>
		</div></div>';
	echo $helper;
}

function text_helper( $title, $desc, $class = null ) {
	$helper = '<div class="doc-helper text ' . $class . '"><div class="doc-item">
		<div class="doc-name green-box">' . $title . '</div>
		<div class="doc-description">' . $desc . '</div>
		</div></div>';
	echo $helper;
}

function review_helper() {
	$helper = '<div class="doc-helper review"><div class="doc-item">
		<div class="doc-name green-box">' . __( 'Rate this Plugin!', 'ecommerce-product-catalog' ) . '</div>
		<div class="doc-description">' . sprintf( __( 'Please <a href="%s">rate</a> this plugin and tell us if it works for you or not. It really helps development.', 'ecommerce-product-catalog' ), 'https://wordpress.org/support/view/plugin-reviews/ecommerce-product-catalog#postform' ) . '</div>
		</div></div>';
	echo $helper;
}

function main_helper() {
	$helper = '<div class="doc-helper main"><div class="doc-item">
		<div class="doc-name green-box">' . __( 'Need Help?', 'ecommerce-product-catalog' ) . '</div>
		<div class="doc-description">
			<form role="search" method="get" class="search-form" action="https://implecode.com/docs/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="hidden" value="al_doc" name="post_type">
					<input type="search" class="search-field" placeholder="Search Docs …" value="" name="s" title="Search for:">
				</label>
				<input type="submit" class="button-primary" value="Search">
			</form>
		</div>
		</div></div>';
	echo $helper;
}

/**
 * Generates a bug report box
 *
 */
function ic_bug_report() {
	$helper = '<div class="doc-helper bug-report"><div class="doc-item">
		<div class="doc-name green-box">' .
	__( 'Do you have a problem?', 'ecommerce-product-catalog' ) . '</div>
		<div class="doc-description">' . __( 'All bug reports and support tickets are tracked on a daily basis.', 'ecommerce-product-catalog' ) . '</div>
			<div class="doc-description">' . sprintf( __( 'Feel free to submit a ticket if you think that you found a bug or you have a problem while using %s.', 'ecommerce-product-catalog' ), IC_CATALOG_PLUGIN_NAME ) . '</div>
		<div class="doc-button"><a href="https://wordpress.org/support/plugin/ecommerce-product-catalog"><input class="doc_button classic-button" type="button" value="' . __( 'Report a Problem', 'ecommerce-product-catalog' ) . '"></a></div>
		<a title="' . __( 'Click the button to visit support forum.', 'ecommerce-product-catalog' ) . '" href="https://wordpress.org/support/plugin/ecommerce-product-catalog" class="background-url"></a>
		</div></div>';
	echo $helper;
}

/**
 * Returns all eCommerce Product Catalog option names
 * (needs optimisation)
 * @return type
 */
function all_ic_options( $which = 'all' ) {
	$options = array( 'product_adder_theme_support_check', 'product_attributes_number', 'al_display_attributes', 'product_attribute', 'product_attribute_label', 'product_attribute_unit', 'archive_template', 'modern_grid_settings', 'classic_grid_settings', 'catalog_lightbox', 'catalog_magnifier', 'multi_single_options', 'default_product_thumbnail', 'design_schemes', 'archive_names', 'single_names', 'product_listing_url', 'product_currency', 'product_currency_settings', 'product_archive', 'enable_product_listing', 'archive_multiple_settings', 'product_shipping_options_number', 'display_shipping', 'product_shipping_cost', 'product_shipping_label', 'product_archive_page_id' );
	$tools	 = array( 'ic_epc_tracking_last_send', 'ic_epc_tracking_notice', 'ic_epc_allow_tracking', 'ic_delete_products_uninstall', 'ecommerce_product_catalog_ver', 'sample_product_id', 'al_permalink_options_update', 'custom_license_code', 'implecode_license_owner', 'no_implecode_license_error', 'license_active_plugins', 'product_adder_theme_support_check', 'implecode_hide_plugin_review_info_count', 'hide_empty_bar_message', 'ic_hidden_notices', 'ic_hidden_boxes', 'old_sort_bar', 'first_activation_version', 'ic_allow_woo_template_file', 'ic_block_woo_template_file' );
	if ( $which == 'all' ) {
		return array_merge( $options, $tools );
	} else if ( $which == 'tools' ) {
		return $tools;
	} else {
		return $options;
	}
}
