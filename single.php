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
        <div class="top-container">
          <div class="article-container">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>