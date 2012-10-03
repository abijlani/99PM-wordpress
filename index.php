<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package notfromconcentrate
 * @since notfromconcentrate 1.0
 */

get_header(); ?>
<div class="header-post">
                    <?php
                        $args = array( 'numberposts' => '1');
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){ ?>

                    <h2 class="header-episode-details">Episode #<?php the_id(); ?> - <?php the_time('F j, Y'); ?></h2>
                    <h3 class="header-episode-name clearfix"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo do_shortcode("[powerpress]"); ?></p>
                    <?php }?>   
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="99pmobile">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h2 class="main-title">Episodes</h2>
                    </header>
                    <ul class="episodes">
                    <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <section>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <i class="ss-icon">date</i>
                                <span class="date"><?php the_date(); ?></span>
                                <i class="ss-icon">time</i>
                                <span class="duration">33:47</span>
                            </section>
                        </li>
                    </ul>
                    <?php endwhile; ?>

                    <?php endif; ?>
                    <div class="light pagination">
                        <?php wp_pagenavi(); ?>
                    </div>
                </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>