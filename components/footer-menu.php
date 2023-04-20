<?php
$args = wp_parse_args($args, array(
    'menu' => null,
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'text-secondary' : '';
?>
<ul class="flex flex-col list-none">
    <?php foreach ($menu['menus'] as $item) : ?>
        <li class="mb-1 last:mb-0">
            <a href="<?= $item['url'] ?>" class="leading-tight inline-block transition-colors duration-300 hover:text-secondary focus:text-secondary  <?= $current; ?> ">
                <?= $item['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>