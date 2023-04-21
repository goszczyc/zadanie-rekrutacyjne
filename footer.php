<footer class="bg-primary">
    <div class="container mx-auto grid grid-cols-2 sm:grid-cols-4 gap-16 pt-16 px-5 pb-24  text-white">
        <div>
            <h3 class="text-lg xs:text-xl font-quicksand font-bold mb-4">
                O nas
            </h3>
            <?php get_template_part('components/footer-menu', '', ['menu' => 'footer-about']); ?>
        </div>
        <div>
            <h3 class="text-lg xs:text-xl font-quicksand font-bold mb-4">
                Ubezpieczenia
            </h3>
            <?php get_template_part('components/footer-menu', '', ['menu' => 'footer-insurances']); ?>
        </div>
        <div>
            <h3 class="text-lg xs:text-xl font-quicksand font-bold mb-4">
                Pomoc
            </h3>
            <?php get_template_part('components/footer-menu', '', ['menu' => 'footer-help']); ?>
        </div>
        <div>
            <h3 class="text-lg xs:text-xl font-quicksand font-bold mb-4">
                Infolinia
            </h3>
            <a href="tel: +48223111234" class="text-secondary text-xl font-bold hover:text-secondary-d focus:text-secondary-d transition-colors duration-300">+48 22 311 1234</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>