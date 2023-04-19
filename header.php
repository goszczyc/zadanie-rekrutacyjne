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


<body class="bg-d-gray min-h-[2000px]">

	<header class="header flex justify-center px-5 pt-3 pb-[1.125rem] fixed top-0 left-0 w-full bg-white transition-[padding] duration-500 delay-200">
		<div class="flex items-center">
			<a href="<?= esc_url(home_url()); ?>" class="mr-[25px]">
				<img src="<?= THEME_URI . 'dist/images/logo.svg'; ?>" alt="logo" class="w-60">
			</a>
			<?php get_template_part('components/main-menu', '', ['menu' => "main-nav"]); ?>
		</div>
	</header>