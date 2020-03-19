<?php
////////////////////////////////////////functions.php//////////////////////////////////////////////////////
function registraciya_oblasti_widgeta() {
	register_sidebar( array(
		'name'          => 'Нова область віджетів',
		'id'            => 'mesto-dlya-reklami',
		'description'   => 'Опис: Це нова область для віджетів, в котрій ми будемо потім показувати віджет з рекламою.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'registraciya_oblasti_widgeta' );
////////////////////////////////////sidebar.php/////////////////////////////////////////////////////////////
<!-- Далі йде підключення нашої нової області -->
<?php if ( is_active_sidebar( 'mesto-dlya-reklami' ) ) : ?>
			<div class="widget-s-reklamoy">
				<?php dynamic_sidebar( 'mesto-dlya-reklami' ); ?>
			</div>
		<?php endif; ?>
....
////////////////////////////////////plagins/////////////////////////////////////////////////////////////////
<?php
/*
Plugin Name: Рекламний віджет
Description: Віджет для показу рекламного блоку 300x600 Google AdSense в бічній колонці сайту
Version: 1.0
Author: SebWeo
Author URI: https://sebweo.com
*/

/* Клас віджета. Цей клас обробляє все те, що повинно бути оброблено для віджета: налаштування, форму, відображення в Front-end і оновлення налаштувань */
class Reklamniy_Widget extends WP_Widget {

  function __construct() {
    parent::__construct(

     /* унікальний ID віджета */
     'sebweo_reklamniy_widget',

     /* заголовок віджета - відображається в налаштуваннях в меню Віджети */
     __('Reklamniy Blok', 'sebweo-loc-domen' ),

     /* опції віджета, тут ми передаємо клас CSS, і опис для даного віджету */
     array (
       'classname' => 'reklamniy-widget',
       'description' => __( 'This widget displays the ads in the site sidebar', 'sebweo-loc-domen' )
     )

   );
  }


  /* функція для відображення віджета у фронтенді сайту */
  function widget($args, $instance) {
   extract($args);
   /* заголовок */
   $title = apply_filters ('widget_title', $instance ['title']);

   /* унікальний код рекламодавця, в форматі ca-pub-xxxxxxxxxxxxxxxx */
   $data_ad_client = $instance['data_ad_client'];

   /* обраний слот для рекламного коду */
   $data_ad_slot = $instance['data_ad_slot'];

   echo $before_widget;

   if ( $title ){
     echo '<aside class="widget reklamniy-widget">'."\n";
     echo '<h4 class="widget-title">'.$title.'</h4>';
   } else {
     echo '<aside class="widget reklamniy-widget">';
   }
   /* нижче виводимо код рекламного оголошення */
   ?>

   <div class="google-ad-300x600">
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <!-- Ads300x600 -->
     <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px"
       data-ad-client="<?php echo $data_ad_client; ?>"
       data-ad-slot="<?php echo $data_ad_slot; ?>">
     </ins>
     <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
   </div>

   <?php
   echo $after_widget;
  }


   /* функція відображає форму для збереження налаштувань віджета в меню Віджети */
   function form($instance) {
    /* налаштування за замовчуванням */
    $defaults = array(
      'title' => __( 'Zagolovok', 'sebweo-loc-domen' ),
      'data_ad_client' => 'ca-pub-xxxxxxxxxxxxxxxx',
      'data_ad_slot' => '1234567890'
    );
    $instance = wp_parse_args((array) $instance, $defaults);

    /* нижче йде html-розмітка форми */
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' , 'sebweo-loc-domen' ); ?></label>
      <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('data_ad_client'); ?>"><?php _e('Google ad-client number:', 'sebweo-loc-domen'); ?></label>
      <input type="text" id="<?php echo $this->get_field_id( 'data_ad_client' ); ?>" name="<?php echo $this->get_field_name( 'data_ad_client' ); ?>" value="<?php echo esc_attr( $instance['data_ad_client'] ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('data_ad_slot'); ?>"><?php _e('Google ad-slot number:', 'sebweo-loc-domen'); ?></label>
      <input type="text" id="<?php echo $this->get_field_id( 'data_ad_slot' ); ?>" name="<?php echo $this->get_field_name( 'data_ad_slot' ); ?>" value="<?php echo esc_attr( $instance['data_ad_slot'] ); ?>" />
    </p>
    <?php
   }


    /* функція для збереження змін в налаштуваннях віджету */
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['title'] = strip_tags( $new_instance['title'] );
      $instance['data_ad_client'] = strip_tags($new_instance['data_ad_client']);
      $instance['data_ad_slot'] = strip_tags($new_instance['data_ad_slot']);
      return $instance;
    }

}

/* функція реєстрації нового примірника віджета */
function registraciya_widgeta_function() {
  register_widget('Reklamniy_Widget');
}
/* за допомогою хука widgets_init викликаємо функцію реєстрації віджета */
add_action( 'widgets_init', 'registraciya_widgeta_function' );

?> 
