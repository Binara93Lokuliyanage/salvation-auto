<?php
/**
 * Single post template.
 *
 * @package SalvationAuto
 */

get_header();
?>

<section class="section-padding-top section-padding-bottom">
    <div class="container single-post-container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>


                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>


                    <div class="post-content">
                        
                    <h1 class="h2 single-post-title">
                        <?php the_title(); ?>
                    </h1>
                        <?php the_content(); ?>
                    </div>

                    <div class="blog-post-details">

                            <span class="blog-post-author">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/user.svg"
                                    alt="User Icon" class="user-icon">
                                <?php the_author(); ?>
                            </span>
                            <span class="blog-post-date">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/calendar.svg"
                                    alt="Calendar Icon" class="calendar-icon">
                                <?php the_date(); ?>
                            </span>

                        </div>


            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>


<?php
get_footer();
?>