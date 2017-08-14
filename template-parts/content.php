<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deven_Blog
 */

?>

<?php if ( ! is_singular()): ?>
	<?php 
		$classPost = array(
			'col',
			'm6'
		);
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class($classPost); ?>>
		<a href="<?php echo esc_url( get_permalink() ) ?>">
			
			<div class="card">
				<div class="card-image">

					<? if( has_post_thumbnail( $post_id ) ): ?>
					        <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
					<? endif; ?>

					<?php //the_post_thumbnail(); ?>
					<a href="<?php echo esc_url( get_permalink() ) ?>" class="btn-floating btn-large halfway-fab waves-effect waves-light btn-card-blog"><i class="material-icons">chevron_right</i></a>
				</div>
				<header class="card-content">
					<?php the_title( '<span class="card-title">', '</span>' ); ?>

					<?php if ('post' === get_post_type()): ?>
						<span class="grey-text text-lighten-1">
							<?php deven_blog_posted_on(); ?>
						</span>
					<?php endif ?>
				</header>
			</div>
		</a>
	</article>

<?php else: ?>
	<section class="Section Section-light">
        <div class="container">
            <div class="card post">
                <div class="card-image">
                	<? if( has_post_thumbnail( $post_id ) ): ?>
						<img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
					<? endif; ?>
                </div>
                <div class="card-content">
                    <h2 class="card-title post-title"><?php the_title(); ?></h2>

                    <div class="post-meta">
                        <div class="chip"><i class="fa fa-calendar"></i> <?php the_date(); ?></div>
                        <?php deven_blog_author(); ?>
                        <?php deven_blog_category(); ?>
                    </div>

                    <div class="post-content">
                       	<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'deven-blog' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );
						?>

                        <!-- {{ <pre class="hljs php"><code>alert('sisa');</code></pre> }} -->
                    </div>

                    <div class="post-meta-tags">
                    	<?php deven_blog_tags() ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif ?>


<?php if (false): ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php deven_blog_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'deven-blog' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php deven_blog_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
<?php endif ?>
