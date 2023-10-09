<?php 
/* D5 CORPORATE Theme's Search Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/

get_header(); ?>
	<?php if (have_posts()) : ?>
		<div id="content">
        <h1 class="page-title fa-search-plus"><?php echo __('Search Results', 'd5-corporate-lite'); ?></h1>
		
		<?php $counter = 0; ?>
		<?php query_posts($query_string . "&posts_per_page=20"); ?>
		<?php while (have_posts()) : the_post();
			if($counter == 0) {
				$numposts = $wp_query->found_posts; // count # of search results ?>
				<h3 class="arc-src"><span><?php echo __('Search Term:', 'd5-corporate-lite');?> </span><?php the_search_query(); ?></h3>
				<h3 class="arc-src"><span><?php echo __('Number of Results:', 'd5-corporate-lite');?> </span><?php echo $numposts; ?></h3><br />
				<?php } //endif ?>
			
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<p class="postmetadataw">Entry Date: <?php the_time('F j, Y'); ?></p>
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<div class="content-ver-sep"></div>
  				<div class="entrytext">
				 <?php the_post_thumbnail('thumbnail'); ?>
				 <?php the_excerpt(); ?>
				 <div class="clear"> </div>
				 <div class="up-bottom-border">
 				<p class="postmetadata"><?php echo __('Posted in', 'd5-corporate-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link( __('Edit', 'd5-corporate-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'd5-corporate-lite'), __('1 Comment &#187;', 'd5-corporate-lite'), __('% Comments &#187;', 'd5-corporate-lite')); ?> <?php the_tags('<br />'. __('Tags: ', 'd5-corporate-lite'), ', ', '<br />'); ?></p>
 				</div></div></div>
				
		<?php $counter++; ?>
 		
		<?php endwhile; ?>
		</div>		
		<?php get_sidebar(); ?>
        <?php else: ?>
		<br /><br /><h1 class="page-title"><?php echo __('Not Found', 'd5-corporate-lite') ?></h1>
	<h3 class="arc-src"><span><?php echo __('Apologies, but the page you requested could not be found. Perhaps searching will help.', 'd5-corporate-lite') ?></span></h3>

	<?php get_search_form(); ?>
	<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; <?php echo __('Or Return to the Home Page', 'd5-corporate-lite') ?></a></p><br /><br />

	<h2 class="post-title-color"><?php echo __('You can also Visit the Following. These are the Featured Contents', 'd5-corporate-lite') ?></h2>
	<div class="content-ver-sep"></div><br />
	<?php get_template_part( 'featured-box' ); ?>

	<?php endif; ?>
	
<?php get_footer(); ?>