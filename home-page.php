<?php
    /*
    Template Name: Homepage
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--      SECTION 1 -->
      <section class="container-fluid hero-image"<?php if ( get_field(' headerbackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerbackgroundimage ') . ')"'; } ?>> 
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
          <div class="container">
              <div class="tag-grid">
                  <img width="750" class="yellow-circle img-responsive" src="<?php the_field('yellowcircle'); ?>">
                  <h1 class="tag text-center animate__animated animate__slideInRight"><?php the_field('tagline'); ?></h1>
                  <a href="<?php the_field('taglinebutton'); ?>" class="btn btn-default btn-lg explore-music-events-button animate__animated animate__fadeIn">EXPLORE MUSIC EVENTS</a>  
              </div>
            </div>
      </section>
      
<!--      SECTION 2 - ARTICLES-->
<section class="container-fluid articles-background-homepage"<?php if ( get_field(' headerbackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerbackgroundimage ') . ')"'; } ?>>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="featured-news-and-events-title"><?php the_field('titleforfeaturednewsarticles'); ?></h1>
            </div>
             <div class="col-sm-4">
            <a href="<?php the_field('seeallbutton'); ?>" class="see-all-button wow animate__animated animate__fadeInRight">SEE ALL <span class="fas fa-angle-right"></span> </a>
       </div>
        </div>
    <div class="row">
    <div class="col-sm-4">
        <img class="img-responsive article-images" width="500" src="<?php the_field('articleoneimage'); ?>">
        <p class="Article-titles"><?php the_field('articleonetitle'); ?></p>
         <p class="article-body"><?php the_field('articleonedescription'); ?></p>
         <a href="<?php the_field('readmorebutton'); ?>" class="read-more-button">READ MORE <span class="fas fa-angle-right arrow"></span> </a>
            </div>
        <div class="col-sm-4">
        <img class="img-responsive article-images" width="500" src="<?php the_field('articletwoimage'); ?>">
        <p class="Article-titles"><?php the_field('articletwotitle'); ?></p>
         <p class="article-body read-more-button-spacing"><?php the_field('articletwodescription'); ?></p>
         <a href="<?php the_field('readmorebuttontwo'); ?>" class="read-more-button">READ MORE <span class="fas fa-angle-right arrow"></span> </a>  
         </div>
        <div class="col-sm-4">
                    <img class="img-responsive article-images" width="500" src="<?php the_field('articlethreeimage'); ?>">
        <p class="Article-titles"><?php the_field('articlethreetitle'); ?></p>
         <p class="article-body"><?php the_field('articlethreedescription'); ?></p>
         <a href="<?php the_field('readmorebutton'); ?>" class="read-more-button">READ MORE <span class="fas fa-angle-right arrow"></span> </a>
              <a href="<?php the_field('mobileseeallbutton'); ?>" class="btn btn-default btn-lg see-all-button-mobile wow animate__animated animate__fadeInLeft">SEE ALL <span class="fas fa-angle-right arrow"></span> </a>  
        </div>
        </div>
                    </div>
      </section>

      
<!--      SECTION 3 - MARKETS-->
      <section class="container-fluid markets-background markets-black-background-mobile">
          <div class="container markets-black-background">
              <div class="row">
                  <div class="col-sm-6">
                        <img class="markets-title-image img-responsive" width="500" src="<?php the_field('marketstitlegradient'); ?>">
                       <h1 class="index-titles markets-title"><?php the_field('marketstitle'); ?></h1>
                      <img src="<?php the_field('marketsimage'); ?>" width="500" class="markets-image img-responsive">
                        </div>
<div class="col-sm-6">
    <p class="market-body"><?php the_field('marketsdescription'); ?></p>
     <a class="btn btn-default btn-lg markets-button wow animate__animated animate__fadeInRight" href="<?php the_field('marketsbutton'); ?>">EXPLORE</a>
              </div>
              </div>
          </div>
                        </section>

      
<!--      SECTION 4 - ABOUT-->
       <section class="container-fluid about-section">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
<img class="about-rectangle img-responsive" width="400" src="<?php the_field('abouttitlegradient'); ?>">
                       <h1 class="index-titles about-title"><?php the_field('abouttitle'); ?></h1>
                       <p class="about-body"><?php the_field('aboutdescription'); ?></p>
                                                 <a href="<?php the_field('aboutbutton'); ?>" class="btn btn-default btn-lg about-button wow animate__animated animate__fadeInLeft"> FIND OUT MORE</a>
                    </div>
                       <div class="col-sm-6">
                           <img class="img-responsive about-image" src="<?php the_field('aboutimage'); ?>">
                  </div>
              </div>
           </div>
      </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>