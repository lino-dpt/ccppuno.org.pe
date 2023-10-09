<?php 
/* D5 CORPORATE Theme's Archive Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/

get_header(); ?>
<div id="content">
	<?php if (have_posts()) : ?>
		<h1 class="arc-post-title"><?php $post = $posts[0]; echo the_archive_title(); ?></h1>
		<?php while (have_posts()) : the_post(); ?>		
			<div <?php post_class(); ?>>
				<p class="postmetadataw"><?php echo __('Posted by:', 'd5-corporate-lite'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<div class="content-ver-sep"> </div>	
				<div class="entrytext"><?php the_post_thumbnail('thumbnail'); ?>
  <?php d5corporate_content(); ?>
				</div>
				<div class="clear"> </div>
                <div class="up-bottom-border">
				<p class="postmetadata"><?php echo __('Posted in', 'd5-corporate-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link( __('Edit', 'd5-corporate-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'd5-corporate-lite'), __('1 Comment &#187;', 'd5-corporate-lite'), __('% Comments &#187;', 'd5-corporate-lite')); ?> <?php the_tags('<br />'. __('Tags: ', 'd5-corporate-lite'), ', ', '<br />'); ?></p>
				</div>
            
		                
                </div><!--close post class-->
	
		<?php endwhile; ?>
			
	<div id="page-nav">
	<div class="alignleft"><?php previous_posts_link('&laquo; '. __('Newer Entries', 'd5-corporate-lite')) ?></div>
	<div class="alignright"><?php next_posts_link( __('Older Entries','d5-corporate-lite').'  &raquo;','') ?></div>
	</div>

	<?php else : ?>

	<h1 class="page-title"><?php echo __('Not Found', 'd5-corporate-lite') ?></h1>
	<h3 class="arc-src"><span><?php echo __('Apologies, but the page you requested could not be found. Perhaps searching will help.', 'd5-corporate-lite') ?></span></h3>

	<?php get_search_form(); ?>
	<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; <?php echo __('Or Return to the Home Page', 'd5-corporate-lite') ?></a></p><br /><br />

	<h2 class="post-title-color"><?php echo __('You can also Visit the Following. These are the Featured Contents', 'd5-corporate-lite') ?></h2>
	<div class="content-ver-sep"></div><br />
	<?php get_template_part( 'featured-box' ); ?>

	<?php endif; ?>

</div><!--close content id-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>