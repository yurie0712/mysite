<?php get_header(); ?>
<main>
  <div id="index-image"></div>
  <div class="container">
    <p>＜<?php single_cat_title(); ?>カテゴリー記事の一覧＞</p>
    <div class="row">
      <div class="col-md-8">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
  
        <article class="contents-list">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <p><?php the_category(', '); ?></p>
        <p><?php the_content('Read more'); ?></p>
        <br>
        </article>
        <?php endwhile; endif; ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>