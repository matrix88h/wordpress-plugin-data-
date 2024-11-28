<?php
/*
Plugin Name: My Custom Plugin
Plugin URI: https://winfinder.io/
Description: A simple custom plugin.
Version: 1.0
Author: mar kona
Author URI: https://windfinder.io/
License: GPL2
*/
?>
<?php
// كود الإضافة الرئيسية
function my_custom_plugin_message() {
    echo '<p style="text-align:center; padding:10px; background-color:#f1f1f1;">Hello from My Custom Plugin!</p>';
}



// ربط الدالة بشريط التذييل
add_action('wp_footer', 'my_custom_plugin_اضافة لتبرع');
?>

function donate_shortcode( $atts, $content = null) {
global $post;extract(shortcode_atts(array(
'account' => 'your-paypal-email-address',
'for' => $post->post_title,
'onHover' => '',
), $atts));
if(empty($content)) $content='Make A Donation';
return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
}
add_shortcode('donate', 'donate_shortcode');

[donate]donat to supports this website[/donate]