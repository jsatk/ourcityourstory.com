<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> ot_get_option('featured-posts-count'),
		'cat'						=> ot_get_option('featured-category')
	)
);
?>

<?php if ( is_home() && !is_paged() && ( ot_get_option('featured-posts-count') =='1') ): // No slider if 1 post is featured ?>
	
	<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
	<div class="featured">
		<div <?php post_class('post-hover'); ?>>
			
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('thumb-large'); ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
				</a>
				<?php if ( !ot_get_option( 'comment-count' ) ): ?>
					<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
				<?php endif; ?>
			</div><!--/.post-thumbnail-->

			<div class="post-meta group">
				<p class="post-category"><?php the_category(' / '); ?></p>
				<p class="post-date"><?php the_time('j M, Y'); ?></p>
			</div><!--/.post-meta-->
			
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<?php if (ot_get_option('excerpt-length') != '0'): ?>
			<div class="entry excerpt">				
				<?php the_excerpt(); ?>
			</div><!--/.entry-->
			<?php endif; ?>
			
		</div>
	</div>
	<?php endwhile; ?>	
	
<?php elseif ( is_home() && !is_paged() && ( ot_get_option('featured-posts-count') !='0') ): // Show slider if posts are not 1 or 0 ?>
	
	<script type="text/javascript">
		// Check if first slider image is loaded, and load flexslider on document ready
		jQuery(document).ready(function(){
		 var firstImage = jQuery('#flexslider-featured').find('img').filter(':first'),
			checkforloaded = setInterval(function() {
				var image = firstImage.get(0);
				if (image.complete || image.readyState == 'complete' || image.readyState == 4) {
					clearInterval(checkforloaded);
					jQuery('#flexslider-featured').flexslider({
						animation: "slide",
						useCSS: false, // Fix iPad flickering issue
						slideshow: false,
						directionNav: true,
						controlNav: true,
						pauseOnHover: true,
						slideshowSpeed: 7000,
						animationSpeed: 400,
						smoothHeight: true,
						touch: false
					});
				}
			}, 20);
		});
	</script>
		
	<div class="flexslider featured" id="flexslider-featured">
		<ul class="slides">				
			<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
			<li <?php post_class('post-hover'); ?>>
				
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if ( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail('thumb-large'); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title(); ?>" />
						<?php endif; ?>
						<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-play"></i></span>'; ?>
						<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
						<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
					</a>
					<?php if ( !ot_get_option( 'comment-count' ) ): ?>
					<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
					<?php endif; ?>
				</div><!--/.post-thumbnail-->

				<div class="post-meta group">
					<p class="post-category"><?php the_category(' / '); ?></p>
					<p class="post-date"><?php the_time('j M, Y'); ?></p>
				</div><!--/.post-meta-->
				
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2><!--/.post-title-->
				
				<?php if (ot_get_option('excerpt-length') != '0'): ?>
				<div class="entry excerpt">				
					<?php the_excerpt(); ?>
				</div><!--/.entry-->
				<?php endif; ?>

			</li>
			<?php endwhile; ?>			
		</ul>
	</div><!--/.flexslider-->
	
<?php endif; ?>
