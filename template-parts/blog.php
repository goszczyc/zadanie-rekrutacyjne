<?php

// Query args
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);
// The Query
$the_query = new WP_Query($args);


if ($the_query->have_posts()) : ?>

    <section class="blog">

        <div class="container mx-auto px-5 py-16">
            <div class="text-center mb-10">
                <h2 class="text-primary font-quicksand font-bold text-5xl sm:text-6xl lg:text-[63px]/[68px] mb-2">
                    Blog
                </h2>
                <p class="text-primary font-quicksand font-bold text-2xl sm:text-3xl lg:text-[34px]/[40px]">Zobacz najnowsze wpisy</p>
            </div>

            <div class="relative mb-8">
                <div id="blog-posts-container" class="blog__posts-container grid gap-8 grid-cols-blog">
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
                </div>
                <div id="loader" class="loader">
                    <div class="loader__bar"></div>
                    <div class="loader__bar"></div>
                    <div class="loader__bar"></div>
                </div>
            </div>

            <?php if ($the_query->max_num_pages > 1) : ?>
                <div class="flex justify-center">
                    <button id="more-posts" data-page="1" class="btn btn--orange">Wczytaj więcej wpisów</button>
                </div>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>