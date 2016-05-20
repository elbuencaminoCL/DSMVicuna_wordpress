<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/**
 * Optiones del tema
 * @file           theme-options.php
 * @package        edsm 
 */
?>
<?php
add_action('admin_init', 'edsm_theme_options_init');
add_action('admin_menu', 'edsm_theme_options_add_page');

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 */
function edsm_admin_enqueue_scripts( $hook_suffix ) {
	wp_enqueue_style('edsm-theme-options', get_template_directory_uri() . '/includes/theme-options.css', false, '1.0');
	//wp_enqueue_script('forestal-theme-options', get_template_directory_uri() . '/includes/theme-options.js', array('jquery'), '1.0');
}
add_action('admin_print_styles-appearance_page_theme_options', 'edsm_admin_enqueue_scripts');

/**
 * Init plugin options to white list our options
 */
function edsm_theme_options_init() {
    register_setting('edsm_options', 'edsm_theme_options', 'edsm_theme_options_validate');
}

/**
 * Load up the menu page
 */
function edsm_theme_options_add_page() {
    add_theme_page(__('Opciones del tema', 'edsm'), __('Opciones del tema', 'edsm'), 'edit_theme_options', 'theme_options', 'edsm_theme_options_do_page');
}
	
/**
 * Create the options page
 */
function edsm_theme_options_do_page() {

	if (!isset($_REQUEST['settings-updated']))
		$_REQUEST['settings-updated'] = false;
	?>
    
    <div class="wrap">
        <?php
        /**
         * < 3.4 Backward Compatibility
         */
        ?>
        <?php $theme_name = function_exists('wp_get_theme') ? wp_get_theme() : get_current_theme(); ?>
        <?php screen_icon(); echo "<h2>" . $theme_name ." ". __('Opciones del tema', 'edsm') . "</h2>"; ?>
        

		<?php if (false !== $_REQUEST['settings-updated']) : ?>
		<div class="updated fade"><p><strong><?php _e('Opciones guardadas', 'edsm'); ?></strong></p></div>
		<?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('edsm_options'); ?>
            <?php $options = get_option('edsm_theme_options'); ?>
            
            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - footer', 'edsm'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Redes Sociales
                         */
                        ?>
                        <div class="grid col-220"><?php _e('Facebook', 'edsm'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="edsm_theme_options[facebook]" class="regular-text" type="text" name="edsm_theme_options[facebook]" value="<?php if (!empty($options['facebook'])) echo esc_attr($options['facebook']); ?>" />
                            <label class="description small-text" for="edsm_theme_options[facebook]"><?php _e('Ingrese enlace facebook', 'edsm'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Twitter', 'edsm'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="edsm_theme_options[twitter]" class="regular-text" type="text" name="edsm_theme_options[twitter]" value="<?php if (!empty($options['twitter'])) echo esc_attr($options['twitter']); ?>" />
                            <label class="description small-text" for="edsm_theme_options[twitter]"><?php _e('Ingrese enlace a twitter', 'edsm'); ?></label>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                    <div class="rwd-block">
                        <?php
                        /**
                         * Textos para footer
                         */
                        ?>
                        <div class="grid col-220"><?php _e('Dirección', 'edsm'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="edsm_theme_options[direccion]" class="regular-text" type="text" name="edsm_theme_options[direccion]" value="<?php if (!empty($options['direccion'])) echo esc_attr($options['direccion']); ?>" />
                            <label class="description small-text" for="edsm_theme_options[direccion]"><?php _e('Ingrese dirección colegio', 'edsm'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Datos Contacto', 'edsm'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="edsm_theme_options[datos_contacto]" class="regular-text" type="text" name="edsm_theme_options[datos_contacto]" value="<?php if (!empty($options['datos_contacto'])) echo esc_attr($options['datos_contacto']); ?>" />
                            <label class="description small-text" for="edsm_theme_options[datos_contacto]"><?php _e('Ingrese datos de contacto', 'edsm'); ?></label>
                            <p class="submit">
                                <input type="submit" class="button-primary" value="<?php _e('Guardar opciones', 'edsm'); ?>" />
                            </p>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                </div><!-- end of .rwd-container -->
            </div><!-- end of .grid col-940 -->
        </form>
    </div>
    <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function edsm_theme_options_validate($input) {

	// checkbox value is either 0 or 1
	foreach (array(
		'breadcrumb',
		'cta_button'
		) as $checkbox) {
		if (!isset($input[$checkbox]))
			$input[$checkbox] = null;
		    $input[$checkbox] = ( $input[$checkbox] == 1 ? 1 : 0 );
	}
	
	$input['subtitulo01'] = wp_kses_stripslashes($input['subtitulo01']);
	
    return $input;
}

/*END*/