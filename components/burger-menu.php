<?php
$args = wp_parse_args($args, array(
    'menu' => null,
));
$menu = wp_get_menu_array($args['menu']);
?>
<ul id="burger-menu" aria-hidden="true" class="flex flex-col lg:hidden items-end fixed top-0 right-0 pt-24 px-5 w-full h-full list-none bg-primary transition-transform duration-200 aria-hidden:translate-x-full">
    <?php foreach ($menu['menus'] as $item) : ?>
        <li>
            <a href="<?= $item['url'] ?>" class="block px-[15px] py-3 text-white text-2xl font-bold transition-colors duration-300 hover:text-secondary <?= $current; ?>">
                <?= $item['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>