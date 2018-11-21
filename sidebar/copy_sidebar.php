<div class="wp-tabs-widget">

<ul class="wp-tabs-menu">
  <li class="active" rel="wp-tabs1">Новинки</li>
  <li rel="wp-tabs2">Комменты</li>
  <li rel="wp-tabs3">Популярное</li>
</ul>

<div class="wp-tabs-contener">

         <!-- Новые публикации-->
  <div id="wp-tabs1" class="wp-tabs-content">
    <ul>
    <?php query_posts('showposts=5'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <li>
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail'); ?></a>
    <a class="title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?>        </a><br/>
    </li>
    <?php endwhile; ?>
    </ul>
  </div>

  <!-- Последние комментарии -->
  <div id="wp-tabs2" class="wp-tabs-content">
                        <?php $comments = get_comments('status=approve&number=5'); ?>
                <ul class="widgcomm">
                        <?php foreach ($comments as $comment) { ?>
                <li class="comcont"><?php
        $title = get_the_title($comment->comment_post_ID);
        echo get_avatar( $comment, $size = '35');
        echo '<span class="tecom">' . ($comment->comment_author) . '';
        ?> к посту: </span><a class="auth" href="<?php echo get_permalink($comment->comment_post_ID); ?>"
           rel="external nofollow" title="<?php echo $title; ?>">
           <?php echo $title; ?> </a>
                "<?php
        echo  '<span class="tecom">' . wp_html_excerpt( $comment->comment_content, 35 ) . '</span>'; ?>.."
    </li>
                <?php }  ?>
        </ul>
  </div>

 <!-- Популярные посты (самые комментирующие) -->
  <div id="wp-tabs3" class="wp-tabs-content">
          <ul>
        <?php $pc=new WP_Query('orderby=comment_count&posts_per_page=5');?>
        <?php while($pc->have_posts()):$pc->the_post();?>
        <li>
        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail(array());?></a>
        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
        </li>
        <?php endwhile;?>
</ul>
  </div>
</div>
</div>


<style type="text/css">
  .wp-tabs-widget {
    position: relative;
    width: 300px;
}
.wp-tabs-widget .wp-tabs-menu {
    height: 40px;
    list-style:none;
    margin: 0;
    padding: 0;
}
.wp-tabs-widget .wp-tabs-menu li {
    background:#0d4371;
    color: #fff;
    cursor: pointer;
    display: block;
    float: left;
    font: 400 14px/40px "open sans",sans-serif;
    height: 40px;
    overflow: hidden;
    position: relative;
    text-align: center;
    transition: all 0.5s ease 0s;
    width: 33.3%;
}
.wp-tabs-widget .wp-tabs-menu li:hover {
    background-color: #2c6290;
}
.wp-tabs-widget .wp-tabs-menu li.active {
    background:#f6f6f6;
    color: #0d4371;
}
.wp-tabs-widget .wp-tabs-contener {
    background: #f6f6f6;
    border-bottom: 3px solid #ddd;
    clear: both;
    float: left;
    width: 100%;
}
.wp-tabs-widget .wp-tabs-content {
    display: none;
    padding: 10px;
}

.wp-tabs-content img {
    float: left;
    height: 50px;/*размер миниатюры*/
    margin: 5px 10px 11px 0 !important;
    width: 50px;/*размер миниатюры*/
}

.wp-tabs-content ul{
        margin: 0;
        padding: 10px;
}
.wp-tabs-content li {
    clear: both;
    margin: 0;
    overflow: hidden;
    border-bottom: 1px solid #dae3eb!important;
}
.wp-tabs-content li a:hover {
    text-decoration: underline;
}
.wp-tabs-content a{
        color: #666;
    font: 500 14px arial;
    text-decoration: none;
}
</style>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript">
    $(".wp-tabs-content").hide();
    $(".wp-tabs-content:first").show();
    $(".wp-tabs-menu li").click(function() {
    $(".wp-tabs-content").hide();
    var activeTab = $(this).attr("rel");
    $("#"+activeTab).fadeIn(800);                
    $(".wp-tabs-menu li").removeClass("active");
    $(this).addClass("active");
    });
</script>


Пример - http://wordsmall.ru/demo/widget-tabs-wp/index.html