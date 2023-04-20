<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title><?php echo wp_title(); ?></title>
	<?php wp_head(); ?>

</head>


<body>

	<header class="header sticky top-0 left-0 w-full px-5 pt-3 pb-[1.125rem] bg-white transition-[padding] duration-500 delay-200 z-[1000] isolate">
		<div class="flex justify-between lg:justify-normal items-center max-w-[1260px] mx-auto">
			<a href="<?= esc_url(home_url()); ?>" class="mr-[25px]">
				<img src="<?= THEME_URI . 'dist/images/logo.svg'; ?>" alt="logo" class="w-60">
			</a>

			<?php /* Desktop menu */ get_template_part('components/main-menu', '', ['menu' => "main-nav"]); ?>
			<?php /* Burger menu */ get_template_part('components/burger-menu', '', ['menu' => "main-nav"]); ?>
			<?php get_template_part('components/burger'); ?>
		</div>
	</header>