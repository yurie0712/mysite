<?php get_header(); ?>
  <div class="article-container">
    <br>
    <br>
    <div class="article-lists">
      <h1>記事一覧</h1>
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

      <?php previous_posts_link('新しい投稿ページへ'); ?>
      <?php next_posts_link('古い投稿ページへ'); ?>
    </div>
  </div>
  <div class="archives-lists">
    <br><h2>月別</h2>
    <?php wp_get_archives(); ?>
  </div>
  <div class="category-lists">
    <br><h2>カテゴリー別</h2>
    <?php
$categories = get_categories();
foreach($categories as $category) {
echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
}
?>
  </div>
<?php get_footer(); ?>