<div id="comments">
	<?php if( have_comments() ):?>
		<!-- <h3>コメント</h3> -->
		<ul>
			<?php wp_list_comments( 'avater_size=0&max_depth=1&format=html5' );?>	
		</ul>
	<?php endif; ?>

<?php comment_form('format=html5&title_reply=コメント&label_submit=送信'); ?>
</div>