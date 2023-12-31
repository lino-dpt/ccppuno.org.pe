<?php
/*
	Template Name: Full Width
 	D5 CORPORATE Theme's Full Width Page to show the Pages Selected Full Width
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/
get_header(); ?>
<div id="content-full">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 
 <h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php the_content('<p class="read-more">'. __('Read the Rest...', 'd5-corporate-lite') .'</p>'); ?>
 </div><div class="clear"> </div>
 <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
 <?php comments_template( '', true ); ?>
 <?php endwhile; endif; ?>
 



</div>
<?php get_footer(); ?>