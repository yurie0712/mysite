<!-- 記事の詳細ページです。 -->
<?php get_header(); ?>
<br>
<div class="article-container">

  <?php if ( have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile;
    endif; ?>

  <?php previous_post_link('%link','古い記事へ'); ?>
  <?php next_post_link('%link','新しい記事へ'); ?>

</div>

<?php get_footer(); ?>