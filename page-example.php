<?php 
/*
Template Name: Страница вывода записи
*/ 
get_header(); ?>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-12">

          <!-- blog post -->
          <?php while ( have_posts() ) : the_post(); ?>
          
          <ul class="randompost">
          <!-- из какой рубрики выводить (можно убрать, если не нужно), количество постов-->
              <?php $the_query = new WP_Query('cat=&showposts=5&orderby=rand'); ?>
              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <li>
          <!--миниатюра поста -->
              <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail'); ?></a>
          <!--вывод название категории -->
             <span class="namecat"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>:</span><br/>
          <!--заголовок поста -->
             <a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_title(); ?></a>
          <!--дата поста -->
             <p class="randate">
                  <span class=""><?php echo get_the_date('Y-m-d'); ?></span>
             </p>
             </li>
             <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </ul>

          <?php endwhile; ?>

          <!-- pagination -->
          <div class="blog_pagination wow fadeInUp">
            <?php kama_pagenavi(); ?>
          </div>
        </div><!-- end col -->
            
  <?php get_sidebar(); ?>

  <?php get_footer(); ?>

  <style type="text/css">
    ul.randompost li {
    overflow: hidden;
    overflow-wrap: break-word;
    background-color: grey;
    padding: 5px;
}

ul.randompost img {
    float: left;
    margin: 5px 10px 10px 0;
    display: block;
    width: 55px;
    height: 55px;
}

.randate {
    color: #999;
    font: 500 11px arial;
}
span.namecat {
    color: #3f444c;
    font: 600 13px arial;
}
  </style> 
