<?php get_header(); ?>
  <br>
  <br><b>記事一覧</b>
    <?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
      <br><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
      作成日時：<?php the_time('Y年n月j日'); ?>
    <?php 
        endwhile;
    endif;
    ?>
<?php get_footer(); ?>