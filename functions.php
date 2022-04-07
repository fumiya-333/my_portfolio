<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
remove_filter('the_content', 'wpautop');

require_once get_theme_file_path("/constants.php");
require_once get_theme_file_path("/common_util.php");
require_once get_theme_file_path("/bl_helper.php");

function error_message($error, $key, $rule){
  if($key === Constants::KEY_NAME && $rule === "noempty"){
    return Constants::NAME . Constants::INPUT_ERR_MSG;
  }
  if($key === Constants::KEY_EMAIL && $rule === "noempty"){
    return Constants::EMAIL . Constants::INPUT_ERR_MSG;
  }
  return $error;
}

function theme_setup() {
  add_theme_support('post-thumbnails');
}

add_filter("show_admin_bar","__return_false");
add_action('after_setup_theme', 'theme_setup');