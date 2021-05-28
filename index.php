<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--      SECTION 1 -->
      <section class="container-fluid hero-image"> 
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
        <li class="active">
        <li class="nav-list"><a href="index.php">HOME</a></li>
        <li class="nav-list"><a href="#">ABOUT</a></li> 
        <li class="nav-list"><a href="news.php">NEWS</a></li> 
        <li class="nav-list dropdown">
           <button class="dropdown-toggle" data-toggle="dropdown" disabled> WHATS ON
              </button>
          <ul class="dropdown-menu">
              <li class="dropdown-list"> <a href="events.php">EVENTS</a></li>
              <li class="dropdown-list"> <a href="">MARKETS</a></li>
          </ul>
              </li>
        <li class="nav-list"><a href="#">GALLERY</a></li>
      </ul>
    </div>
  </div>
</nav>
              </div>
          <div class="container">
              <div class="tag-grid">
          <img class="yellow-circle img-responsive" src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/yellow-circle.png" width="750" alt="yellow circle">
               <h1 class="tag text-center">HOME OF FREMANTLE'S BEST MUSIC EVENTS </h1>
                <a href="events.php" class="btn btn-default btn-lg explore-music-events-button">EXPLORE MUSIC EVENTS</a>
              </div>
            </div>
      </section>
      
      
<!--      SECTION 2 - ARTICLES-->
<section class="container-fluid articles-background-homepage">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                  <h1 class="featured-news-and-events-title">FEATURED NEWS AND EVENTS</h1>
            </div>
             <div class="col-sm-4">
        <a href="news.php" class="see-all-button">SEE ALL <span class="fas fa-angle-right"></span> </a>
        </div>
        </div>
    <div class="row">
    <div class="col-sm-4">
       <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/article-image-one.jpg" class="img-responsive article-images" width="500" alt="Spacey Jane">
       <p class="Article-titles">Spacey Jane Tour Announcement! </p>
        <p class="article-body">Local Perth band Spacey Jane are touring their debut album ‘Sunlight’on a national wide tour! </p>
        <a class="read-more-button">READ MORE <span class="fas fa-angle-right arrow"></span> </a>
            </div>
        <div class="col-sm-4">
          <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/article-image-two.jpg" class="img-responsive article-images" width="500" alt="Atist singing at a sunday session">
          <p class="Article-titles">Sunday Sessions: Artists needed! </p>
             <p class="article-body read-more-button-spacing">We are looking for local artists to perform at out Sunday sessions on the Front Garden. </p>
        <a class="read-more-button ">READ MORE <span class="fas fa-angle-right arrow"></span> </a>
         </div>
        <div class="col-sm-4">
 <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/article-image-three.jpg" class="img-responsive article-images" width="500" alt="Death By Denim">
         <p class="Article-titles">Local Talent Alert: Death By Denim</p>
            <p class="article-body">The Death by Denim are a local rock/pop band based in Perth and have just released a new single. <br></p>
        <a class="read-more-button">READ MORE <span class="fas fa-angle-right arrow"></span> </a>
                    <a class="btn btn-default btn-lg see-all-button-mobile">SEE ALL</a>
        </div>
        </div>
    </div>  
      </section>

      
<!--      SECTION 3 - MARKETS-->
      <section class="container-fluid markets-background markets-black-background-mobile">
          <div class="container markets-black-background">
              <div class="row">
                  <div class="col-sm-6">
                       <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/markets-title-image.jpg"  width="500" alt="title gradient" class="markets-title-image img-responsive">
                        <h1 class="index-titles markets-title"> MARKETS</h1>
                    <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/markets-image.png" width="500" alt="Markets at the Fremantle Arts Centre" class="markets-image img-responsive">
                  </div>
<div class="col-sm-6">
    <p class="market-body"> We have a range of food and craft markets that run alongside our music events. Find out what activities you, your friends and family can do while attending these events.</p>
  <a class="btn btn-default btn-lg markets-button">EXPLORE</a>
              </div>
              </div>
          </div>
                        </section>
      
      
<!--      SECTION 4 - ABOUT-->
       <section class="container-fluid about-section">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/about-rectangle.jpg" width="400" class="about-rectangle img-responsive" alt="title gradient">
                      <h1 class="index-titles about-title"> ABOUT</h1>
                           <p class="about-body"> Used as an convict establishment, asylum and museum, the historic Fremantle Arts centre is now a music venue, hosting live acts from local, national and international artists. </p>
                           <a class="btn btn-default btn-lg about-button"> FIND OUT MORE</a>
                    </div>
                       <div class="col-sm-6">
                           <img src="http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/about-image.jpg" width="500" class="img-responsive about-image" alt="Fremantle Arts Centre">
                  </div>
              </div>
           </div>
      </section>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>