<?php
/*
Template Name: aboutページテンプレート
*/
?>

<?php get_header(); ?>
<main>
  <div id="index-image"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- 記事を探し、1つずつデータを拾って処理を繰り返すループ -->
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <!-- ループ内処理　ここから -->
        <article class="contents-list">
          <h1><?php the_title(); ?></h1>
          <!-- アイキャッチ画像 -->
          <?php if ( has_post_thumbnail() ) : ?>  <!-- 投稿にアイキャッチ画像が割り当てられているかチェックします。-->
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
            <!-- 画像がなかった場合の処理 -->
          <?php endif ; ?>
          <!-- 記事内容 -->
          <?php the_content(); ?>
        </article>
        <!-- ループ内処理　ここまで -->
        <?php endwhile; endif; ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
