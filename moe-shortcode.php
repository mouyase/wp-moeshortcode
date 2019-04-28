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
	wp_enqueue_script('moe-shortcode-github_button', 'https://buttons.github.io/buttons.js', array(), MS_VERSION);
}
add_action('wp_enqueue_scripts', 'ms_scripts');

/*黑幕文字*/
function msheimu($atts, $content = '') {
	return '<span class="ms-heimu" title="你知道的太多了">' . $content . '</span>';
}
add_shortcode('msheimu', 'msheimu');

/*GithubFollow*/
function msgitfollow($atts) {
	extract(shortcode_atts(array("user" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '" data-size="large" data-show-count="true" aria-label="Follow @' . $user . ' on GitHub">Follow @' . $user . '</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '">https://github.com/' . $user . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitfollow', 'msgitfollow');

/*GithubWatch*/
function msgitwatch($atts) {
	extract(shortcode_atts(array("user" => '', "repo" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '/' . $repo . '/subscription" data-icon="octicon-eye" data-size="large" data-show-count="true" aria-label="Watch ' . $user . '/' . $repo . ' on GitHub">Watch</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '/' . $repo . '">https://github.com/' . $user . '/' . $repo . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitwatch', 'msgitwatch');

/*GithubStar*/
function msgitstar($atts) {
	extract(shortcode_atts(array("user" => '', "repo" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '/' . $repo . '" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ' . $user . '/' . $repo . ' on GitHub">Star</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '/' . $repo . '">https://github.com/' . $user . '/' . $repo . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitstar', 'msgitstar');

/*GithubFork*/
function msgitfork($atts) {
	extract(shortcode_atts(array("user" => '', "repo" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '/' . $repo . '/fork" data-icon="octicon-repo-forked" data-size="large" data-show-count="true" aria-label="Fork ' . $user . '/' . $repo . ' on GitHub">Fork</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '/' . $repo . '">https://github.com/' . $user . '/' . $repo . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitfork', 'msgitfork');

/*GithubIssue*/
function msgitissue($atts) {
	extract(shortcode_atts(array("user" => '', "repo" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '/' . $repo . '/issues" data-icon="octicon-issue-opened" data-size="large" data-show-count="true" aria-label="Issue ' . $user . '/' . $repo . ' on GitHub">Issue</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '/' . $repo . '">https://github.com/' . $user . '/' . $repo . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitissue', 'msgitissue');

/*GithubDownload*/
function msgitdownload($atts) {
	extract(shortcode_atts(array("user" => '', "repo" => '', "link" => 'true'), $atts));
	$return .= '<p style="display: flex;align-items: center; flex-wrap: wrap">';
	$return .= '<span style="margin-right:8px">';
	$return .= '<a class="github-button" href="https://github.com/' . $user . '/' . $repo . '/archive/master.zip" data-icon="octicon-cloud-download" data-size="large" aria-label="Download ' . $user . '/' . $repo . ' on GitHub">Download</a>';
	$return .= '</span>';
	if ($link == 'true') {
		$return .= '<a style="margin-bottom:8px" href="https://github.com/' . $user . '/' . $repo . '">https://github.com/' . $user . '/' . $repo . '</a>';
	}
	$return .= '</p>';
	return $return;
}
add_shortcode('msgitdownload', 'msgitdownload');

/*彩色文字*/
$colors = array('aqua', 'black', 'blue', 'fuchsia', 'gray', 'green', 'lime', 'maroon', 'navy', 'olive', 'orange', 'purple', 'red', 'silver', 'teal', 'white', 'yellow',
);
foreach ($colors as $value) {
	add_shortcode('ms' . $value, function ($atts, $content = '') use ($value) {
		return '<span style="color:' . $value . '">' . $content . '</span>';
	});
}
?>
