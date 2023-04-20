<?php

/*************** MENU ***************/
add_action('init', 'register_menu');
function register_menu()
{
  register_nav_menus(array(
    'main-nav' => esc_html__('Menu Główne', 'finanse'),
    'footer-about' => esc_html__('Menu Stopka O Nas', 'finanse'),
    'footer-insurances' => esc_html__('Menu Stopka Ubezpieczenia', 'finanse'),
    'footer-help' => esc_html__('Menu Stopka Pomoc', 'finanse'),
  ));
}
