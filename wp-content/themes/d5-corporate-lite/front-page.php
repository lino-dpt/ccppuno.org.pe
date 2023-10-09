<?php
/*
	Template Name: Front Page
	d5corporate Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/
get_header(); 

$sldimg = esc_url(d5corporate_get_option('banner-image', ''));
if($sldimg) echo '<div id="slide-container"><img src="'.$sldimg.'" /></div>';
$heading = esc_html(d5corporate_get_option('heading_text', ''));
if($heading) echo '<h1 id="heading">'.$heading.'</h1>';
get_template_part( 'featured-box' );
if (esc_html(d5corporate_get_option('lpost', '1'))): get_template_part( 'fpost' ); endif;
$bquote = esc_html(d5corporate_get_option('bottom-quotation', ''));
if($bquote) echo '<div class="content-ver-sep"></div><div id="customers-comment"><blockquote>'.$bquote.'</blockquote></div>';
get_footer();