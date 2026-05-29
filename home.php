<?php
/**
 * Blogs page template.
 *
 * @package SalvationAuto
 */

get_header();

$selected_category = isset($_GET['blog_category']) ? sanitize_title(wp_unslash($_GET['blog_category'])) : '';
$blog_page_id = get_option('page_for_posts');
$blog_page_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/');
$posts_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
);

if (!empty($selected_category)) {
    $posts_query_args['category_name'] = $selected_category;
}

$blog_posts = new WP_Query($posts_query_args);
?>

<section class="section-padding-top section-padding-bottom bg-gradient">
    <div class="container page-hero-container">
        <h2 class="title">Auto Care Blog</h2>
        <h4>Expert tips, guides, and insights to help you maintain your vehicle and stay informed</h4>
    </div>
</section>

<section class="section-padding-top section-padding-bottom">
    <div class="container blog-category-container">
        <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true,
        ));
        ?>

        <a href="<?php echo esc_url($blog_page_url); ?>"
            class="blog-category<?php echo empty($selected_category) ? ' active' : ''; ?>">
            All
        </a>

        <?php
        foreach ($categories as $category):
            $is_active = $selected_category === $category->slug;
            ?>
            <a href="<?php echo esc_url(add_query_arg('blog_category', $category->slug, $blog_page_url)); ?>"
                class="blog-category<?php echo $is_active ? ' active' : ''; ?>">
                <?php echo esc_html($category->name); ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="section-padding-top section-padding-bottom bg-secondary">
    <?php if ($blog_posts->have_posts()): ?>
        <div class="container blog-posts-container cards-3">
            <?php while ($blog_posts->have_posts()):
                $blog_posts->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="card blog-post">
                    <div class="blog-post-img-wrapper">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-category-wrapper">
                            <?php

                            $categories = get_the_category();

                            foreach ($categories as $category):
                                ?>

                                <span class="blog-post-category bg-gradient">
                                    <?php echo esc_html($category->name); ?>
                                </span>

                            <?php endforeach; ?>
                        </div>
                        <h4 class="blog-post-title"><?php the_title(); ?></h4>
                        <div class="blog-post-excerpt">
                            <?php the_excerpt(); ?>
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
                                <?php echo esc_html(get_the_date()); ?>
                            </span>

                        </div>
                    </div>

                    <p class="blog-post-read-more">Read More</p>
                </a>
            <?php endwhile ?>
        </div>
    <?php else: ?>
        <div class="container blog-posts-container">
            <p>No posts found.</p>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</section>

<?php
get_footer();
?>
