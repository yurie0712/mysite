<?php get_header(); ?>
<main>
  <div id="top-image"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php query_posts('showposts=5'); ?>
        <?php if ( have_posts() ) : ?>
        <!-- 記事を探し、1つずつデータを拾って処理を繰り返すループ -->
        <?php while ( have_posts() ) : the_post(); ?>
        <!-- ループ内処理　ここから -->
        <article class="contents-list">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <!-- アイキャッチ画像 -->
          <?php if ( has_post_thumbnail() ) : ?>  <!-- 投稿にアイキャッチ画像が割り当てられているかチェックします。-->
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
            <!-- 画像がなかった場合の処理 -->
          <?php endif ; ?>
          <!-- 記事内容 -->
          <?php the_content(); ?>
          <?php the_time('投稿日時： Y年n月j日 H:i'); ?><br/>
        </article>
        <!-- ループ内処理　ここまで -->
        <?php endwhile;?>
        <?php else : ?>
          <!-- 記事が1件も見つからなかった時に表示される -->
          お探しの記事は見つかりませんでした。<br/>
        <?php endif; ?>

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
</main>
<?php get_footer(); ?>