<?php

function get_more_posts()
{

    $paged = intval($_POST['page']) + 1;

    $is_more = true;

    // Query args
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged
    );
    // The Query
    $the_query = new WP_Query($args);


    ob_start();
    if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) :
            $the_query->the_post(); ?>
            <div class="rounded-b-[10px] overflow-hidden bg-white shadow-post group/post">
                <div class="relative pb-[56.25%] overflow-hidden">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover transition-transform duration-1000 group-hover/post:scale-105 origin-center">
                </div>
                <h3 class="text-2xl text-white px-5 py-4 bg-primary"><?= get_the_title(); ?></h3>
                <div class="p-5">
                    <p class="mb-5"><?= get_the_excerpt(); ?></p>
                    <a href="<?= get_permalink(); ?>" class="text-secondary inline-block group/link hover:text-secondary-d focus:text-secondary-d transition-colors">
                        Czytaj dalej
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow.svg" alt="" class="inline ml-4 group-hover/link:translate-x-1 group-focus/link:translate-x-1 transition-transform">
                    </a>
                </div>
            </div>
        <?php endwhile; ?>

<?php endif;

    if ($the_query->max_num_pages <= $paged) $is_more = false;
    $html = ob_get_clean();

    $response = json_encode(array(
        'isMore' => $is_more,
        'html' => $html
    ));

    echo $response;
    die();
}

add_action('wp_ajax_nopriv_get_more_posts', 'get_more_posts');
add_action('wp_ajax_get_more_posts', 'get_more_posts');
