<?php
/*
Plugin Name: Moe-Shortcode短代码插件
Plugin URI: http://www.paulund.co.uk
Description: 添加一些使用的短代码到你的Wordpress中
Version: 0.0.1
Author: 某亚瑟
Author URI: http://4cy.me
 */
const MS_VERSION = '0.0.1';

/*添加样式文件*/
function ms_scripts() {
	wp_enqueue_style('moe-shortcode', plugins_url('/css/style.css', __FILE__), array(), MS_VERSION);
}
add_action('wp_enqueue_scripts', 'ms_scripts');

function msheimu($atts, $content = '') {
	return '<span class="ms-heimu" title="你知道的太多了">' . $content . '</span>';
}
add_shortcode('msheimu', 'msheimu');
?>