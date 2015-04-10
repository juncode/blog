<?php get_header(); ?>
<div id="primary" class="site-content">
	<?php if (get_option('cx_sticky_cat') == 'true') { ?>
		<?php if ( !is_paged() ) { ?><?php get_template_part( 'inc/sticky-cat' ); ?><?php } ?>
	<?php } ?>
	<div class="primary-site">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php if ($wp_query->current_post == 0) : ?>
				<?php if (get_option('cx_g-posts') == 'true') { ?>
				<?php } else { ?>
					<?php get_template_part( 'inc/ad/ad-posts' ); ?>
				<?php } ?>
			<?php endif; ?>

		<?php endwhile; ?>
		<?php else : ?>
		<section class="content">
			<p>目前还没有文章！</p>
			<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/post-new.php">点击这里发布您的第一篇文章</a></p>
		</section>
		<?php endif; ?>
		<?php if (get_option('cx_scroll') == 'true') { ?>
			<?php if ( !is_paged() ) { ?><?php ality_page_nav( 'nav-below' ); ?><?php } ?>
		<?php } ?>
	</div>
	<?php pagenavi(); ?>
</div>
<!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>