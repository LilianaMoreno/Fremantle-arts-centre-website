<?php
/*
Template Name: Whats On - Events
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--      SECTION 1-->
      <section class="container-fluid events-header"<?php if ( get_field(' eventsheader ') ) { echo 'style="background: url(' . get_field(' eventsheader ') . ')"'; } ?>>
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
          <h1 class="whats-on-events animate__animated animate__fadeIn"><?php the_field('eventspagetitle'); ?></h1>
            </section>
      
      
<!--SECTION 2-->
              <div class="container-fluid events-image img-responsive"<?php if ( get_field('eventspageimage') ) { echo 'style="background: url(' . get_field('eventspageimage') . ');
              background-repeat:no-repeat;
              background-size:cover"'; } ?>>
                  <div class="container events-grid">
            <img class="events-yellow-rectangle img-responsive" src="<?php the_field('yellowrectangle'); ?>">
                        <p class="filters-caption  wow animate__animated animate__fadeInUp"><?php the_field('filterscaption'); ?></p>
                  </div>
      </div>
      
<!--      SECTION 3-->
      <section class="events-background-image"<?php if ( get_field(' eventsbackgroundimage ') ) { echo 'style="background: url(' . get_field(' eventsbackgroundimage ') . ')"'; } ?>>
          <div class="container-fluid">
          <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-6 events">
                                                <img src="<?php the_field('eventoneimage'); ?>" class="img-responsive ocean-alley-image" width="700">
                 <div class="events-black-rectangle">
                     <h2 class="artist-name"><?php the_field('artistone'); ?></h2>
                  <p class="event-details"><?php the_field('eventonedetails'); ?><br><?php the_field('eventtimeone'); ?></p>
                                  <a href="<?php the_field('eventonefindoutmorebutton'); ?>" class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  
                  <a href="<?php the_field('eventonebuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
         </div>
              <div class="col-md-4 col-sm-6 events">
                                 <img src="<?php the_field('eventtwoimage'); ?>" class="img-responsive ocean-alley-image" width="700">
                 <div class="events-black-rectangle">
                 <h2 class="artist-name"><?php the_field('eventtwoartistname'); ?></h2>
                  <p class="event-details"><?php the_field('eventtwodetails'); ?><br><?php the_field('eventtimetwo'); ?></p>
                                  <a href="<?php the_field('eventtwofindoutmorebutton'); ?>" class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  <a href="<?php the_field('eventtwobuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 events">
                          <img src="<?php the_field('eventthreeimage'); ?>" width="700" class="img-responsive ocean-alley-image">
                 <div class="events-black-rectangle">
                 <h2 class="artist-name"><?php the_field('eventthreeartistname'); ?></h2>
                  <p class="event-details"><?php the_field('eventthreedetails'); ?><br><?php the_field('eventtimethree'); ?></p>
                                  <a href="<?php the_field('eventthreefindoutmorebutton'); ?>"class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  <a href="<?php the_field('eventthreebuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 events">
                                                <img src="<?php the_field('eventfourimage'); ?>" class="img-responsive ocean-alley-image" width="700">
                 <div class="events-black-rectangle">
                 <h2 class="artist-name"><?php the_field('eventfourartistname'); ?></h2>
                  <p class="event-details"><?php the_field('eventfourdetails'); ?><br><?php the_field('eventtimefour'); ?></p>
                                  <a href="<?php the_field('eventfourfindoutmorebutton'); ?>" class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  <a href="<?php the_field('eventfourbuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
         </div>
              <div class="col-md-4 col-sm-6 events">
                                 <img src="<?php the_field('eventfiveimage'); ?>" class="img-responsive ocean-alley-image" width="700">
                 <div class="events-black-rectangle">
                 <h2 class="artist-name"><?php the_field('eventfiveartistname'); ?></h2>
                  <p class="event-details"><?php the_field('eventfivedetails'); ?><br><?php the_field('eventtimefive'); ?></p>
                                  <a href="<?php the_field('eventfivefindoutmorebutton'); ?>" class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  <a href="<?php the_field('eventfivebuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 events">
                          <img src="<?php the_field('eventsiximage'); ?>" class="img-responsive ocean-alley-image" width="700">
                 <div class="events-black-rectangle">
                 <h2 class="artist-name"><?php the_field('eventsixartistname'); ?></h2>
                  <p class="event-details"><?php the_field('eventsixdetails'); ?><br><?php the_field('eventtimesix'); ?></p>
                                  <a href="<?php the_field('eventsixfindoutmorebutton'); ?>" class="read-more-button find-out-more-button">FIND OUT MORE <i class="fas fa-angle-right arrow"></i> </a>
                  <a href="<?php the_field('eventsixbuyticketsbutton'); ?>" class="read-more-button buy-tickets-button">BUY TICKETS <i class="fas fa-angle-right arrow"></i> </a>
                  </div>
              </div>
                       </div>
              </div>
              <div class="text-center">
                  <a href="<?php the_field('pagenumberbuttonsone'); ?>" class="read-more-button page-numbers"> <i class="fas fa-angle-left"></i> Previous</a>
                  <a href="<?php the_field('pagenumberbuttonstwo'); ?>" class="read-more-button page-numbers"> 1</a>
                  <a href="<?php the_field('pagenumberbuttonsthree'); ?>" class="read-more-button page-numbers"> 2</a>
                  <a href="<?php the_field('pagenumberbuttonsfour'); ?>" class="read-more-button page-numbers"> 3</a>
                  <a href="<?php the_field('pagenumberbuttonsfive'); ?>" class="read-more-button page-numbers"> Next <i class="fas fa-angle-right arrow"></i> </a>
              </div>
              </div> 
          <div class="container-fluid email-rectangle-mobile"<?php if ( get_field(' emailrectanglemobile ') ) { echo 'style="background: url(' . get_field(' emailrectanglemobile ') . ')"'; } ?>>
              <div class="container email-signup-grid ">
                  <p class="email-signup-text"><?php the_field('emailsignupdescription'); ?><br><?php the_field('emailsignuptextlinetwo'); ?></p>
                   <form class="email-signup-form">
      <input class="email-input" placeholder="Type your email..." type="text" name="email">
        </form>
                  <a href="<?php the_field('emailsignupbutton'); ?>" class="btn btn-default btn-lg email-button-submit wow animate__animated animate__fadeIn"> SUBMIT</a>
              </div>
                 </div>
      </section>
<?php get_footer(); ?>