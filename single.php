<?php
/**
 * The Template for displaying all single posts.
 *
 * @package notfromconcentrate
 * @since notfromconcentrate 1.0
 */

get_header(); ?>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

        <article> <!--All posts go in here -->

        	<section>
        		<?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <i class="ss-icon">date</i>
                <span class="date"><?php the_time('F j, Y'); ?></span>
                <i class="ss-icon">time</i>
                <span class="duration">33:47</span>
                <p><?php echo do_shortcode("[powerpress]"); ?></p>
            </section>
            <section>
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="99pmobile">Tweet</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <?php the_content(); ?>
            </section>
                <?php endwhile; // end of the loop. ?>
        </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>