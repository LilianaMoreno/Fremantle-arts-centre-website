<?php
/*
Template Name: News
*/
?>


<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <!--      SECTION 1-->
      <section class="container-fluid events-header"> 
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
              <div>
                    <h1 class="whats-on-events"> NEWS</h1>
                  </div>
          
              </section>
      
      <section class="news-page-background">
      
<!--      SECTION 2-->
      <div class="container-fluid ">
          <div class="container news-grid">
          <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/news-image-one.jpg" class="img-responsive news-image-one" alt="Spacey Jane">
        <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/pink-rectangle.png" class="img-responsive pink-rectanlge" alt="Latest news">
              <p class="latest-news"> LATEST NEWS</p>
              <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/yellow-rectangle.png" class="img-responsive yellow-rectangle-news-page" alt="news article">
              <h2 class="news-article-one-title"> Spacey Jane Tour Announcement</h2>
              <p class="news-article-one-date"> 15TH MARCH 2021</p>
              <p class="news-article-one-description">Local Perth band Spacey Jane are touring their debut album ‘Sunlight’ on a national wide tour following the success of their single “Booster Seat”.</p>
               <a class="read-more-button news-article-one-button">READ MORE <i class="fas fa-angle-right arrow"></i> </a>
      </div>
      </div>
      
<!--      SECTION 3-->
      <div class="container black-rectangle-news">
          <div class="row">
              <div class="col-sm-6">
                    <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/news-image-two.png" class="img-responsive news-image-two" width="500" alt="artist at sunday session">
              </div>
              <div class="col-sm-6">
                        <h2 class="news-article-two-title"> Sunday Sessions: Artists needed!</h2>
          <p class="news-article-two-date">11TH MARCH 2021</p>
          <p class="news-article-two-description">We are looking for local artists to perform at our Sunday sessions on the Front Garden.</p>
          <a class="read-more-button news-article-two-button">READ MORE <i class="fas fa-angle-right arrow"></i> </a>
              </div>
              </div>
      </div>
      
      
<!--      SECTION 4-->
      <div class="container-fluid">
           <div class="container">
               <div class="row news-article-three-section">
               <div class="col-sm-6">
                   <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/news-image-three.jpg" class="img-responsive news-image-two" width="500" alt="death by denim">
               </div>
             <div class="col-sm-6">
                        <h2 class="news-article-two-title"> Local Talent Alert: Death By Denim</h2>
          <p class="news-article-three-date">7TH MARCH 2021</p>
          <p class="news-article-three-description">Death By Denim are a local rock/pop band based in Perth and have just released a single. </p>
          <a class="read-more-button news-article-two-button">READ MORE <i class="fas fa-angle-right arrow"></i> </a>
              </div>    
      </div>
               
              <div class="text-center">
                  <a class="read-more-button page-numbers"> <i class="fas fa-angle-left"></i> Previous</a>
                  <a class="read-more-button page-numbers"> 1</a>
                  <a class="read-more-button page-numbers"> 2</a>
                  <a class="read-more-button page-numbers"> 3</a>
                  <a class="read-more-button page-numbers"> Next <i class="fas fa-angle-right arrow"></i> </a>
              </div>
                               </div>
      </div>
          <div class="container fluid email-rectangle-mobile">
              <div class="container">
              <div class="email-signup-grid">
              <img src="images/http://206.189.45.97/~mesh18/wp-content/themes/fremantle_arts_centre_website/images/email-rectangle.jpg" class="img-responsive email-rectangle" alt="email signup">
                  <p class="email-signup-text">Want to hear the latest news stories first? <br> Enter your email to receive our newsletter!</p>
                   <form class="email-signup-form">
      <input class="email-input" placeholder="Type your email..." type="text" name="email">
        </form>
                  <a class="btn btn-default btn-lg email-button-submit"> SUBMIT</a>
              </div>
</div>
              </div>
      </section>
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
</section>
           
     </div>
    </div>
  </div>
<?php get_footer(); ?>