<?php
/**
 * Template Name: Author
 *
 * @package PasanBlogUnderscores
 * @since PasanBlogUnderscores 1.0
 */

get_header(); ?>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
        		<?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <section>
                        <h2 class="main-title"><?php the_title(); ?></h2>
                    </section>
                    <section>
                        <p><?php the_content(); ?></p>
                    </section>
                </article>
                <?php endwhile; ?>

                    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>