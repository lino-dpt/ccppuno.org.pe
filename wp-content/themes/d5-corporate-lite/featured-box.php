<?php
/* D5 CORPORATE Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/

$fbox = '';

foreach (range(1,4) as $fbsinumber) {
	$fboxitem = '';
	$flink = ''; $flink = esc_url(d5corporate_get_option('featured-link'.$fbsinumber, ''));	
	$fimg = ''; $fimg = esc_url(d5corporate_get_option('featured-image'.$fbsinumber));
	$fttl = ''; $fttl = esc_html(d5corporate_get_option('featured-title1', ''));
	$fdes = ''; $fdes = esc_html(d5corporate_get_option('featured-description1', ''));
	if($flink) $fboxitem .= '<a href="'.$flink.'">';
	if($fimg) $fboxitem .= '<img src="'.$fimg.'"/>';
	if($fttl) $fboxitem .= '<h2>'.$fttl.'</h2>';
	if($flink) $fboxitem .= '</a>';
	if($fdes) $fboxitem .= '<p>'.$fdes.'</p>';
	if($fboxitem) $fbox .= '<div class="featured-box">'.$fboxitem.'</div>'; 
}

if($fbox) echo '<div id="featured-boxs">'.$fbox.'</div>';