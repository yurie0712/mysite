記事の詳細ページです。

<?php if ( have_posts() ) :
  while (have_posts() ) : the_post(); ?>

  <?php the_title(); ?>
  <?php the_content(); ?>

<?php endwhile;
  endif; ?>