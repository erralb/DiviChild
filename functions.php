<?php


// //Example to develop custom Divi Module

// function DS_Custom_Modules(){
//  if(class_exists("ET_Builder_Module")){
//  include("edm_custom_modules.php");
//  }
// }

// function Prep_DS_Custom_Modules(){
//     global $pagenow;

//     $is_admin = is_admin();
//     $action_hook = $is_admin ? 'wp_loaded' : 'wp';
//     $required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' ); // list of admin pages where we need to load builder files
//     $specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
//     $is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
//     $is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
//     $is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
//     $is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];

//     if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
//         add_action($action_hook, 'DS_Custom_Modules', 9789);
//     }
// }

// Prep_DS_Custom_Modules();



// //Example to enqueue script for specific template

// add_action('wp_enqueue_scripts','load_js_for_custom_template', 1000);
// function load_js_for_custom_template($template){
//     if ( is_page_template('page-horaires.php') ) {
//         wp_enqueue_script('masonry', 'js/masonry.pkgd.min.js');
//     } 
//     return $template;
// }

// // Pretty var php printing
// function pprint($var)
// {
//     print("<pre>".print_r($var,true)."</pre>");
// }

// //Debug code for page denied error

// add_action('admin_page_access_denied', 'debug_page_access');
// function debug_page_access() {
//     global $pagenow;
//     global $menu;
//     global $submenu;
//     global $_wp_menu_nopriv;
//     global $_wp_submenu_nopriv;
//     global $plugin_page;
//     global $_registered_pages;
 
//     $parent = get_admin_page_parent();
//     $hookname = get_plugin_page_hookname($plugin_page, $parent);
 
//     echo "Pagenow = " . $pagenow . "<br/>";
//     echo "Parent = " . $parent . "<br/>";
//     echo "Hookname = " . $hookname . "<br/>";
     
//     echo "Menu = " . $menu . "<br/>";
//     echo "Submenu = " . $submenu[$parent] . "<br/>";
//     echo "Menu nopriv = " . $_wp_menu_nopriv . "<br/>";
//     echo "Submenu nopriv = " . $_wp_submenu_nopriv[$parent][$plugin_page] . "<br/>";
//     echo "Plugin page = " . $plugin_page . "<br/>";
//     echo "Registered pages = " . $_registered_pages[$hookname] . "<br/>";
// }
