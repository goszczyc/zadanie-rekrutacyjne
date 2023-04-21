<?php
$about_heading = get_field('about_heading');
$about_subheading = get_field('about_subheading');
$about_content = get_field('about_content');
?>
<?php if ($about_heading && $about_content) : ?>
    <section class="about relative max-w-[1920px] mx-auto">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/about-bg.jpg" alt="" class="hidden xs:block absolute bottom-0 right-0 w-full -z-10">
        <div class="container grid grid-cols-4 gap-4 px-4 mx-auto">
            <div class="col-span-full md:col-span-3 pt-[4.5rem] pb-24 text-center xs:text-left">
                <div class="mb-6">
                    <h2 class="text-primary font-quicksand font-bold text-5xl sm:text-6xl lg:text-[63px]/[68px] mb-2">
                        <?= $about_heading ?>
                    </h2>
                    <p class="text-primary font-quicksand font-bold text-2xl sm:text-3xl lg:text-[34px]/[40px]"><?= $about_subheading; ?></p>
                </div>
                <div class="mb-14 prose max-w-none prose-headings:text-primary prose-headings:font-quicksand prose-p:text-[17px]/[28px] prose-p:text-black prose-p:mb-6 prose-p:mt-0">
                    <?= $about_content; ?>
                </div>
                <a href="#" class="btn btn--orange btn--secondary mx-auto xs:mx-0">Zamów ubezpieczenie</a>
            </div>
        </div>
    </section>

<?php endif; ?>