<?php

/*
Plugin Name: Divi Switch
Plugin URI: http://www.gritty-social.com/
Description: A series of dashboard toggles that make customizing the Divi Theme & Page Builder a breeze.
Version: 1.0
Author: Gritty
Author URI: http://www.gritty-social.com/
*/

function ds_plugin_styles() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'switch-style.css' );
}
add_action( 'wp_enqueue_scripts', 'ds_plugin_styles' );
 
if ( isset($_POST[MD5("DiviSwitch")]) ) {
    foreach ( $_POST as $key => $val ) {
        SS($key, $val);
        exit(1); //No message, just exit --->
    }
}

function SS($key, $val) { update_option( "ds_{$key}", $val ); }

function GS($key, $default = false) { return get_option( "ds_{$key}", $default); }

// Data-matrix

$dsmatrix = Array(
    
    Array(
        "title"         => "Remove the menu bottom line",
        "description"   => "Remove the line and shadow underneath the main menu.",
        "option"        => "menu_line",
        "class"         => "ds_remove_menu_line",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Mobile Menu on Desktop",
        "description"   => "Get the Divi hamburger mobile menu on desktops and other larger devices.",
        "option"        => "hamburger_menu",
        "class"         => "ds_mobile-desktop",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Side Menu - Light",
        "description"   => "Mobile menu slides in from the right. Use this switch for the light version.",
        "option"        => "side_mobile_menu_light",
        "class"         => "ds_mobile_side_light",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Side Menu - Dark",
        "description"   => "Mobile menu slides in from the right. Use this switch for the dark version.",
        "option"        => "side_mobile_menu_dark",
        "class"         => "ds_mobile_side_dark",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "First menu Link fly in on scroll",
        "description"   => "Make your first menu item enter from the left as you scroll down. Combine this option with any of the 'menu CTA' switches for a unique style.",
        "option"        => "left_flyin_menu_item",
        "class"         => "first_link_slide_left",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "'Flat' menu CTA buttons",
        "description"   => "Turn any menu link into a stylish button. Just add one of the following classes to the menu item CSS box in menu options: 'button-dark' 'button-light' 'button-blue' 'button-yellow' 'button-red' 'button-green'",
        "option"        => "flat_menu_buttons",
        "class"         => "ds_flat_buttons",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "'3D' menu CTA buttons",
        "description"   => "Turn any menu link into a stylish 3D button. Just add one of the following classes to the menu item CSS box in menu options: 'button-dark-3d' 'button-light-3d' 'button-blue-3d' 'button-yellow-3d' 'button-red-3d' 'button-green-3d'",
        "option"        => "3d_menu_buttons",
        "class"         => "ds_3d_buttons",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "App style Menu",
        "description"   => "Position the logo and menu a fixed width from the left and right instead of a percentage based change, for a clean 'app style'",
        "option"        => "app_style_menu",
        "class"         => "ds-app-menu",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Remove the dividing sidebar line",
        "description"   => "Get rid of the thin grey line that separates the sidebar from the main content.",
        "option"        => "sidebar_line",
        "class"         => "ds_remove_line",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Center align top header",
        "description"   => "Put the top header items into the middle",
        "option"        => "center_top_header",
        "class"         => "ds_center_top_header",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Hide Bottom Footer",
        "description"   => "Remove the bottom footer, the one with the ET links.",
        "option"        => "footer_hide_option",
        "class"         => "ds_footer_hide_option",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Top Section Separators",
        "description"   => "You can add three different separator styles to the tops of your sections. Just add 'ds_up_arrow_section', 'ds_slant_top' or 'ds_up_circle_section' to your section's custom CSS class box in the custom CSS tab.",
        "option"        => "top_section_separators",
        "class"         => "section_separators",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Bottom Section Separators",
        "description"   => "You can add three different separator styles to the bottom of your sections. Just add 'ds_down_arrow_section', 'ds_slant_bottom' or 'ds_down_circle_section' to your section's custom CSS class box in the custom CSS tab.",
        "option"        => "bottom_section_separators",
        "class"         => "section_separators_down",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "CSS Filters",
        "description"   => "Get beautiful filters. Just add one of the following 'custom CSS classes' in the custom CSS tab of any section, row or module. They work best on images: 'ds_grayscale' 'ds_saturate' 'ds_blur' 'ds_invert' 'ds_brighter' 'ds_sepia'",
        "option"        => "down_arrow_section",
        "class"         => "ds_up_arrow_section",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Replace the toggle plus icon with rotating arrow",
        "description"   => "A mobile style menu on desktops and other larger devices.",
        "option"        => "toggle_arrow_mod",
        "class"         => "ds_toggle_arrow",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Square portfolio images",
        "description"   => "Make portfolio grid images perfectly square",
        "option"        => "square_portfolio_images",
        "class"         => "ds_square_portfolio",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "'Book' portfolio images",
        "description"   => "Make portfolio grid images the same aspect ratio as a book cover",
        "option"        => "book_portfolio_images",
        "class"         => "ds_book_portfolio",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "'Cinema' portfolio images",
        "description"   => "Make portfolio grid images the same aspect ratio as a widescreen. Great for showing off video stills or images.",
        "option"        => "cinema_portfolio_images",
        "class"         => "ds_cinema_portfolio",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Cleaner blog comments",
        "description"   => "Nest replies properly, fix the reply button positioning and clean up the form for logged out users.",
        "option"        => "clean_comments",
        "class"         => "ds_clean_comments",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Blurb icon grow",
        "description"   => "Make blurb icons grow on hover",
        "option"        => "blurb_icon_grow",
        "class"         => "ds_blurb_grow",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Blurb icon spin",
        "description"   => "Make blurb icons spin on hover",
        "option"        => "blurb_icon_spin",
        "class"         => "ds_blurb_spin",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide decription fly in left",
        "description"   => "Change the slider description default transition to fly in left",
        "option"        => "slide_transition_left",
        "class"         => "ds_fade_left",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Slide decription fly in right",
        "description"   => "Change the slider description default transition to fly in right",
        "option"        => "slide_transition_right",
        "class"         => "ds_fade_right",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Slide decription flip on Y axis",
        "description"   => "Change the slider description default transition to flip on Y axis",
        "option"        => "slide_transition_flipY",
        "class"         => "ds_flip_y",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide decription flip on X axis",
        "description"   => "Change the slider description default transition to flip on X axis",
        "option"        => "slide_transition_flipX",
        "class"         => "ds_flip_x",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide image & video fly in left",
        "description"   => "Change the slider image default transition to fly in left",
        "option"        => "slide_image_transition_left",
        "class"         => "ds_slide_fade_left",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide image & video fly in right",
        "description"   => "Change the slider image default transition to fly in left",
        "option"        => "slide_image_transition_right",
        "class"         => "ds_slide_fade_right",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide image & video flip on Y axis",
        "description"   => "Change the slider image default transition to flip on Y axis",
        "option"        => "slide_image_transition_flipY",
        "class"         => "ds_slide_flip_y",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Slide image & video flip on X axis",
        "description"   => "Change the slider image default transition to flip on X axis",
        "option"        => "slide_image_transition_flipY",
        "class"         => "ds_slide_flip_x",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Remove bullet points from footer",
        "description"   => "Remove the footer bullets and reposition the links properly.",
        "option"        => "footer_bullets",
        "class"         => "ds_footer_bullets",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Stop Gallery images opening a lightbox",
        "description"   => "Stop the gallery opening up the lightbox when clicked.",
        "option"        => "no_lightbox",
        "class"         => "ds_no_lightbox",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Enlarge the phone and email info in top header",
        "description"   => "Make the info in the top header bigger.",
        "option"        => "larger_info",
        "class"         => "ds_larger_info",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Hide the logo before scroll",
        "description"   => "Set the logo to appear as the user scrolls down.",
        "option"        => "logo_hide",
        "class"         => "ds_logo_hide",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Remove the border line on top of submenus",
        "description"   => "Get rid of that default blue line on top of submenus",
        "option"        => "no_border_top",
        "class"         => "ds_border_top",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Fixed header on mobile",
        "description"   => "Stop the header scrolling off the page in mobile",
        "option"        => "fixed_mobile_header",
        "class"         => "ds_fixed_mobile_header",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Square buttons",
        "description"   => "An alternative button style if border radiuses aren't your thing.",
        "option"        => "square_buttons",
        "class"         => "ds_square_buttons",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Add Code boxes",
        "description"   => "Switch on and whenever you use the 'pre' font format in your text editor menu, the contents will appear in a code box.",
        "option"        => "pretext_code",
        "class"         => "ds_pretext_code",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Style Contact Form 7",
        "description"   => "Divi styles for CF7 users with one switch!",
        "option"        => "style_cf7",
        "class"         => "ds_style_cf7",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Hide counter when it hits zero",
        "description"   => "Set the timer/counter module to dissappear when it gets to zero.",
        "option"        => "counter_hide",
        "class"         => "ds_counter_hide",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Stop the footer floating on empty pages",
        "description"   => "Pages with little or no content show the bottom footer in the center of the page. Not any more.",
        "option"        => "footer_push",
        "class"         => "ds_footer_push",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Project Overlay - ZOOM",
        "description"   => "Make project overlays zoom on hover. One of three overlay hover effects available in Divi Switch",
        "option"        => "overlay_zoom",
        "class"         => "ds_overlay_zoom",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Project Overlay - SPIN",
        "description"   => "Make project overlays spin on hover. One of three overlay hover effects available in Divi Switch",
        "option"        => "overlay_spin",
        "class"         => "ds_overlay_spin",
        "admin"         => true,
        "client"        => true
    ),
	
    Array(
        "title"         => "Project Overlay - SLIDE UP",
        "description"   => "Make project overlays slide up on hover. One of three overlay hover effects available in Divi Switch",
        "option"        => "overlay_slide_up",
        "class"         => "ds_overlay_slide_up",
        "admin"         => true,
        "client"        => true
    )
	
);

function ds_classes($classes) {
    global $dsmatrix;
    $ia = is_admin();
    for ( $i = 0; $i < count($dsmatrix); $i++ ) {
        $obj = $dsmatrix[$i];
        $via = $obj['admin'];
        $vic = $obj['client'];
        $opt = isset($obj['option'])?$obj['option']:"unknown_{$n}";
        $enabled = GS($opt, '0');
        
        if ( $ia && $via && $enabled == '1' ) {
            $classes[] = $obj['class'];
        }
        if ( !$ia && $vic && $enabled == '1' ) {
            $classes[] = $obj['class'];
        }
    }
    
    return $classes;
}

function ds_admin_head_scripts() {
?>
<script type="text/javascript" id="Gritty_WidgetLinks">
/* Anonymous function to prevent outside calls */ 
(function($) {
    $(function() {
        $("LABEL[for^=myonoffswitch]")
        .each(function() {
            //Which label was clicked?
            var which = $(this).attr("for");
            var cls = $(this).data("class");
            if ( $("INPUT[id=" + which + "]").is(":checked") ) {
                $("BODY").addClass(cls);
            } else {
                $("BODY").removeClass(cls);
            }
        })
        .on("click", function() {
            //Which label was clicked?
            var which = $(this).attr("for");
            var cls = $(this).data("class");
            
            if ( !$("INPUT[id=" + which + "]").is(":checked") ) {
                $("BODY").addClass(cls);
            } else {
                $("BODY").removeClass(cls);
            }
            
            $.ajax({
                url: './',
                type: "POST",
                data: $("INPUT[id=" + which + "]").attr("name") + "=" + ($("INPUT[id=" + which + "]").is(":checked")?"0":"1") + "&<?php echo MD5("DiviSwitch");?>=1", // Thanks Terry https://www.facebook.com/mizagorn/ //
                success: function(response) {
                    //alert("Setting saved.");
                },
                error: function(jqXhr, e, responseText) {
                    alert("Failed to update: " + responseText);
                }
            })
        });
    });
})(jQuery);
</script>
<?php
}

function ds_dash_widget() {
 	global $wp_meta_boxes;

	wp_add_dashboard_widget(
		'divi-switch',
		'Divi Switch by Gritty',
		'ds_widget_display'
	);

 	$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	$my_widget = array( 'divi-switch' => $dashboard['divi-switch'] );
 	unset( $dashboard['divi-switch'] );

 	$sorted_dashboard = array_merge( $my_widget, $dashboard );
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

function ds_widget_display() {
    global $dsmatrix;
    for ( $i = 0; $i < count($dsmatrix); $i++ ) {
        $obj = $dsmatrix[$i];
        $n = ($i+1);
        $opt = isset($obj['option'])?$obj['option']:"unknown_{$n}";
    ?>
	
<div class="divi-switch">
    <div class="title-container">
        <h3><?php echo isset($obj['title'])?$obj['title']:"Unkown";?></h3>
    </div>
    <div class="onoffswitch">
        <input type="checkbox" name="<?php echo $opt;?>" class="onoffswitch-checkbox" id="myonoffswitch-<?php echo $n;?>" value="1"<?php echo (GS($opt, '0') == '0' ? "" : " checked='checked'");?> /> 
        <label class="onoffswitch-label" for="myonoffswitch-<?php echo $n;?>" data-class="<?php echo $obj['class'];?>">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
    <div class="info-container">
        <p><?php echo isset($obj['description'])?$obj['description']:"No description";?></p>
        <a href="https://divi.space/knowledge-base/divi-switch">Knowledge Base</a>
    </div>
</div>

    <?php
    }
?>

<style type="text/css">
.onoffswitch {
	width: 60px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    position: absolute;
    right: 14px;
    margin-top: -8px;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    height: 24px; padding: 0; line-height: 24px;
    border: 2px solid #CCCCCC; border-radius: 4px;
    background-color: #CCCCCC;
    transition: background-color 0.3s ease-in;
}
.onoffswitch-label:before {
    content: "";
    display: block; width: 24px; margin: 0px;
    background: #fff;
    position: absolute; top: 0; bottom: 0;
    right: 34px;
    border: 2px solid #CCCCCC; border-radius: 4px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label {
    background-color: #6C2EB9;
}
.onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
   border-color: #6C2EB9;
}
.onoffswitch-checkbox:checked + .onoffswitch-label:before {
    right: 0px; 
}

input.onoffswitch-checkbox {
    visibility: hidden;
}

label.onoffswitch-label {
    margin-top: -18px;
}

.divi-switch {
    padding: 18px 4px;
    border-bottom: 3px solid #f7f7f7;
}

.divi-switch:last-of-type {
    border-bottom: none;
}

.divi-switch h3 {
    font-weight: bold !important;
    text-transform: uppercase;
}

#divi-switch h2.hndle.ui-sortable-handle {
    background: #6C2EB9;
    color: #fff;
    font-size: 14px;
    padding-left: 46px;
    text-transform: uppercase;
}

#divi-switch h2.hndle.ui-sortable-handle:before {
    position: absolute;
    content: "";
    font-family: dashicons;
    left: 12px;
    font-size: 20px;
    top: 4px;
}

#divi-switch .title-container {
    float: left;
    width: calc(100% - 80px);
}

#divi-switch .info-container {
    margin-top: 32px;
}

#divi-switch.postbox .inside {
    max-height: calc(100vh - 180px);
    overflow-y: scroll;
    margin-top: 0px;
    padding-top: 10px;
}

@media  (max-width: 782px) {
  label.onoffswitch-label {    
    margin-top: -21px !important;
  }
  #divi-switch .info-container {    
    margin-top: 62px;
  }
}

</style>
<?php
}

/**
 * Hooks
 */
add_action( 'admin_head', 'ds_admin_head_scripts' );
add_action( 'wp_dashboard_setup', 'ds_dash_widget' );
add_filter( 'body_class', 'ds_classes' );
?>