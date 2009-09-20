<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
	 	
		<div class="postmeta">
		
			<div class="postmetaleft">
				<p><?php the_time('F j, Y'); ?> | Filed Under <?php the_category(', ') ?></p>
			</div>
			
			<div class="postmetaright">
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?>
			</div>
			
		</div>
			
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		<p><?php posts_nav_link(' &#8212; ', __('&larr; Previous Page'), __('Next Page &rarr;')); ?></p>
	
	</div>
	
<?php include(TEMPLATEPATH."/r_sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>