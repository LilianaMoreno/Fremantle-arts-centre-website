<?php
/*
Template Name: News
*/
?>


<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <!--      SECTION 1-->
      <section class="container-fluid events-header"<?php if ( get_field(' newsheader ') ) { echo 'style="background: url(' . get_field(' eventsheader ') . ')"'; } ?>> 
                 <div class="main-nav">
     <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<?php wp_nav_menu(array(
        'menu' => 'Main Nav',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
      </ul>
    </div>
  </div>
</nav>
              </div>
              <div>
                    <h1 class="whats-on-events animate__animated animate__fadeIn"><?php the_field('pagetitle'); ?></h1>
                  </div>
          
              </section>
      
      <section class="news-page-background"<?php if ( get_field(' newspagebackground ') ) { echo 'style="background: url(' . get_field(' newspagebackground ') . ')"'; } ?>>
      
<!--      SECTION 2-->
      <div class="container-fluid ">
          <div class="container news-grid">
                      <img src="<?php the_field('pinkrectangle'); ?>" class="img-responsive pink-rectanlge">
              <p class="latest-news"><?php the_field('latestnews'); ?></p>
                 <img src="<?php the_field('yellowrectangle'); ?>" class="img-responsive yellow-rectangle-news-page">
<?php $post_id =453;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'news-image-one img-responsive')); ?>
<h2 class="news-article-one-title wow animate__animated animate__fadeInLeft"><?php echo $queried_post->post_title; ?></h2>
              <p><?php echo $queried_post->post_content; ?></p>
<?php echo '<a class="read-more-button news-article-one-button" href="'.get_permalink($queried_post).'">READ MORE <i class="fas fa-angle-right arrow wow animate__animated animate__fadeInRight"></i> </a>';?>     
      </div>
      </div>
      
<!--      SECTION 3-->
      <div class="container black-rectangle-news"<?php if ( get_field(' blackrectangle ') ) { echo 'style="background: url(' . get_field(' blackrectangle ') . ')"'; } ?>>
          <div class="row">
              <div class="col-sm-6">
<?php $post_id =455;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive news-image-two')); ?>
              </div>
              <div class="col-sm-6">    
<h2 class="news-article-two-title"><?php echo $queried_post->post_title; ?></h2>
              <p><?php echo $queried_post->post_content; ?></p>
<?php echo '<a class="read-more-button news-article-two-button" href="'.get_permalink($queried_post).'">READ MORE <i class="fas fa-angle-right arrow wow animate__animated animate__fadeInRight"></i> </a>';?>  
              </div>
              </div>
      </div>
      
      
<!--      SECTION 4-->
      <div class="container-fluid">
           <div class="container">
               <div class="row news-article-three-section">
               <div class="col-sm-6">
<?php $post_id =457;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive news-image-two')); ?>
              </div>
              <div class="col-sm-6">    
<h2 class="news-article-two-title"><?php echo $queried_post->post_title; ?></h2>
              <p><?php echo $queried_post->post_content; ?></p>
<?php echo '<a class="read-more-button news-article-two-button" href="'.get_permalink($queried_post).'">READ MORE <i class="fas fa-angle-right arrow wow animate__animated animate__fadeInRight"></i> </a>';?>  
              </div>    
      </div>
               
              <div class="text-center">
                  <a href="<?php the_field('pagenumberbuttonone'); ?>" class="read-more-button page-numbers"> <i class="fas fa-angle-left"></i> Previous</a>
                  <a href="<?php the_field('pagenumberbuttontwo'); ?>" class="read-more-button page-numbers"> 1</a>
                  <a href="<?php the_field('pagenumberbuttonthree'); ?>" class="read-more-button page-numbers"> 2</a>
                  <a href="<?php the_field('pagenumberbuttonfour'); ?>" class="read-more-button page-numbers"> 3</a>
                  <a href="<?php the_field('pagenumberbuttonfive'); ?>" class="read-more-button page-numbers"> Next <i class="fas fa-angle-right arrow"></i> </a>
              </div>
                               </div>
      </div>
          <div class="container-fluid email-rectangle-mobile"<?php if ( get_field(' emailrectangle ') ) { echo 'style="background: url(' . get_field(' emailrectangle ') . ')"'; } ?>>
              <div class="container">
                  <p class="email-signup-text"><?php the_field('emailsignuptextnews'); ?><br><?php the_field('emailsignuptextnewslinetwo'); ?></p>
                   <form class="email-signup-form">
      <input class="email-input" placeholder="Type your email..." type="text" name="email">
        </form>
                  <a href="<?php the_field('emailsignupbutton'); ?>" class="btn btn-default btn-lg email-button-submit wow animate__animated animate__fadeIn"> SUBMIT</a>
              </div>
</div>
      </section>
<?php get_footer(); ?>