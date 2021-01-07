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
	<div class="inner">
		<div class="logo">
			<h1><a href="<?php echo home_url(); ?>">盆栽さんの盆栽日記</a></h1>
			こんにちは。盆栽さんの盆栽日記です。
			<br>盆栽日記といいながら、日常のことやエンジニアのことが中心になるかと思います。
		</div>
		<input type="checkbox" class="check" id="checked">
				<label class="menu-btn" for="checked">
					<span class="bar top"></span>
					<span class="bar middle"></span>
					<span class="bar bottom"></span>
				</label>
				<label class="close-menu" for="checked"></label>
				<nav class="drawer-menu">
					<!--↓WordPressに設定されているメニュー項目を呼び出す。消して自由に書きかえてもOK-->	
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top',
							'menu_id'        => 'top-menu',
						)
					);
					?>
					<!--↑WordPressに設定されているメニュー項目を呼び出す。消して自由に書きかえてもOK-->	
				</nav>
	</div>

	</header>