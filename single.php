<!-- 記事の詳細ページです。 -->
<?php get_header(); ?>
<main>
  <div class="container single-content">
    <div class="row single-article">
      <div class="col-md-8">
        <article class="contents-list">

          <?php if ( have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

          <?php endwhile;
            endif; ?>

          <?php previous_post_link('%link','古い記事へ'); ?>
          <?php next_post_link('%link','新しい記事へ'); ?>

          <br>
          <br><h3><?php echo get_comments_number().' 件のコメント'; ?></h3>
          <br><?php comments_template(); ?>
        </article>
      </div>
      <div class="col-md-4">  
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>