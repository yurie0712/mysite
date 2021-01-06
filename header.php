<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="logo">
			<h1><a href="<?php echo home_url(); ?>">盆栽さんの盆栽日記</a></h1>
		</div>
    <br>こんにちは。盆栽さんの盆栽日記です。
		<br>盆栽日記といいながら、日常のことやエンジニアのことが中心になるかと思います。
	</header>