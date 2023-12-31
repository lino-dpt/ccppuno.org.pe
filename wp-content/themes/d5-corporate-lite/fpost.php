<?php 
/* 	Simplify Theme's part for showing blog or page in the front page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplify 1.0
*/

?>
<div id="f-post-page-container" >
<div class="content-ver-sep"></div><br />
<div id="content">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php if (!is_page()): ?><p class="postmetadataw">Posted by: <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p><?php endif; ?>		
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php if (is_page()): the_content('<p class="read-more">'. __('Read the Rest...', 'd5-corporate-lite') .'</p>'); else : the_excerpt();  endif;  ?>
 <div class="clear"> </div>
  <?php if (!is_page()): ?><div class="up-bottom-border">
 <p class="postmetadata"><?php echo __('Posted in', 'd5-corporate-lite'); ?> <?php the_category(', ') ?> | <?php edit_post_link( __('Edit', 'd5-corporate-lite'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'd5-corporate-lite'), __('1 Comment &#187;', 'd5-corporate-lite'), __('% Comments &#187;', 'd5-corporate-lite')); ?> <?php the_tags('<br />'. __('Tags: ', 'd5-corporate-lite'), ', ', '<br />'); ?></p>
 </div><?php endif; ?>	
 </div></div>
 
 <?php endwhile; if (!is_page()): ?>

<div id="page-nav">
	<div class="alignleft"><?php previous_posts_link('&laquo; '. __('Newer Entries', 'd5-corporate-lite')) ?></div>
	<div class="alignright"><?php next_posts_link( __('Older Entries','d5-corporate-lite').'  &raquo;','') ?></div>
	</div>
 
<?php endif; endif; ?>
 
</div>
<?php get_sidebar(); ?>
<div class="clear"></div><div class="lsep"></div></div>