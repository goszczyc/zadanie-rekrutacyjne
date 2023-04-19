<?php
$args = wp_parse_args($args, array(
    'menu' => null,
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'text-secondary' : '';
?>
<ul class="hidden lg:flex items-center list-none">
    <?php foreach ($menu['menus'] as $item) : ?>
        <li class="">
            <a href="<?= $item['url'] ?>" class="block px-[15px] py-3 w-max text-primary text-lg md:text-xl lg:text-2xl transition-colors duration-300 hover:text-secondary <?= $current; ?>">
                <?= $item['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>