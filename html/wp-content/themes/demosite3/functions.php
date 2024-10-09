<?php

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

/*YubinBangoライブラリの読み込みをフック内で実行*/
add_action('wp_enqueue_scripts', 'enqueue_yubinbango_script');
function enqueue_yubinbango_script() {
    wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);
}

?>
