<?php
/**
 * @package Duster
 */

get_header(); ?>

<div id="primary" class="image-attachment">
	<div id="content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<nav id="nav-single">
		<span class="nav-previous"><?php previous_image_link( false, __( '&larr; Previous' , 'duster' ) ); ?></span>
		<span class="nav-next"><?php next_image_link( false, __( 'Next &rarr;' , 'duster' ) ); ?></span>
	</nav><!-- #nav-single -->

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-meta">
					<?php
						$metadata = wp_get_attachment_metadata();
						printf( __( '<span class="meta-prep meta-prep-entry-date">Published </span> <span class="entry-date"><abbr class="published" title="%1$s">%2$s</abbr></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%7$s</a>', 'duster' ),
							esc_attr( get_the_time() ),
							get_the_date(),
							wp_get_attachment_url(),
							$metadata['width'],
							$metadata['height'],
							get_permalink( $post->post_parent ),
							get_the_title( $post->post_parent )
						);
					?>
					<?php edit_post_link( __( 'Edit', 'duster' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-meta -->

			</header><!-- .entry-header -->

			<div class="entry-content">

				<div class="entry-attachment">
					<div class="attachment">
<?php
	/**
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
	 * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
	 */
	$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
	foreach ( $attachments as $k => $attachment ) {
		if ( $attachment->ID == get_the_ID() )
			break;
	}
	$k++;
	// If there is more than 1 attachment in a gallery
	if ( count( $attachments ) > 1 ) {
		if ( isset( $attachments[ $k ] ) )
			// get the URL of the next image attachment
			$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
		else
			// or get the URL of the first image attachment
			$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
	} else {
		// or, if there's only 1 image, get the URL of the image
		$next_attachment_url = wp_get_attachment_url();
	}
?>
						<a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
						$attachment_size = apply_filters( 'theme_attachment_size', 848 );
						echo wp_get_attachment_image( get_the_ID(), array( $attachment_size, 1024 ) ); // filterable image width with 1024px limit for image height.
						?></a>

						<?php if ( has_excerpt() ) : ?>
						<div class="entry-caption">
							<?php the_excerpt(); ?>
						</div>
						<?php endif; ?>
					</div><!-- .attachment -->

				</div><!-- .entry-attachment -->

				<div class="entry-description">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'duster' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-description -->

			</div><!-- .entry-content -->

			<footer class="entry-meta">
				<?php if ( comments_open() && pings_open() ) : // Comments and trackbacks open ?>
					<?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'duster' ), get_trackback_url() ); ?>
				<?php elseif ( ! comments_open() && pings_open() ) : // Only trackbacks open ?>
					<?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'duster' ), get_trackback_url() ); ?>
				<?php elseif ( comments_open() && ! pings_open() ) : // Only comments open ?>
					<?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'duster' ); ?>
				<?php elseif ( ! comments_open() && ! pings_open() ) : // Comments and trackbacks closed ?>
					<?php _e( 'Both comments and trackbacks are currently closed.', 'duster' ); ?>
				<?php endif; ?>
				<?php edit_post_link( __( 'Edit', 'duster' ), ' <span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-## -->

		<?php comments_template(); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>