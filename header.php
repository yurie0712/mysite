<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript">
    jQuery(window).on('scroll', function(){

		var scrollTop = jQuery(window).scrollTop();
		var bgPosition = scrollTop / 2; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

		if(bgPosition){
			jQuery('#top-image').css('background-position', 'center top -'+ bgPosition + 'px');
		}
		});
	</script>
</head>
<body>
	<header>
	<div class="inner">
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><img width="350" src="<?php echo get_template_directory_uri(); ?>/images/logo_bonsai-down.png"  alt="トップページ画像"></a>
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