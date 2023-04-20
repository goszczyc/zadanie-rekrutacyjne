<?php
$hero_bg_image = get_field('hero_bg') ? get_field('hero_bg') : get_template_directory_uri() . '/dist/images/hero-bg.jpg';
$hero_heading = get_field('hero_heading') ? get_field('hero_heading') : 'Ubezpieczenia majątkowe';
$hero_subheading = get_field('hero_subheading') ? get_field('hero_subheading') : 'Skontaktuj się z nami i skorzystaj ze specjalnej oferty!';
$form_heading = get_field('form_heading') ? get_field('form_heading') : 'Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę';
?>

<section class="bg-cover bg-center bg-no-repeat" style="background-image: url(<?= $hero_bg_image; ?>);">
    <div class="max-w-[100vw] overflow-hidden">
        <div class="container mx-auto grid grid-cols-1 xs:grid-cols-10  md:grid-cols-2 lg:grid-cols-12 gap-4 px-5 items-end">
            <div class="relative w-full col-span-full md:col-span-1 lg:col-span-7 before:absolute before:bottom-0 before:left-1/2 before:w-[300vw] before:-translate-x-1/2 before:bg-primary before:opacity-75 before:h-full">
                <div class="relative py-16 text-center md:text-left">
                    <h1 class="text-4xl sm:text-[52px]/[56px] text-secondary font-bold font-quicksand mb-2">
                        <?= $hero_heading; ?>
                    </h1>
                    <p class="text-xl sm:text-3xl text-white font-bold font-quicksand max-w-lg mx-auto md:mx-0">
                        <?= $hero_subheading; ?>
                    </p>
                </div>
            </div>
            <div class="w-full  xs:col-span-8 xs:col-start-2 sm:col-start-3 sm:col-span-6 md:col-span-1 lg:col-span-5 py-16">
                <div class="contact-form bg-white rounded-[10px] p-8">
                    <h2 class="text-xl text-center md:text-left sm:text-2xl text-primary font-bold font-quicksand mb-5">
                        <?= $form_heading; ?>
                    </h2>
                    <?= do_shortcode('[contact-form-7 id="18" title="Contact-form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>