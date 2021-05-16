<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="<?php bloginfo('charset'); ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
      
      
      
    <title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>


    <!-- Bootstrap -->
      <link rel="stylesheet" href="https://use.typekit.net/cmm1wlf.css">
<link rel="stylesheet" href="https://use.typekit.net/qar4lrs.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      
<?php wp_head(); ?> <!—very important that this is added-->
  </head>
  <body>
      
      
<!--      HEADER-->
      <header class="container-fluid header-image">
          <div class="container">
          <div class="row">
              <div class="col-xs-6">
                  <a href="index.html" class="img-responsive fac-logo"> 
        <img src="images/FAC%20logo.png" Alt="Fremantle Art's Centre Logo" width="350" class="img-responsive">        
        </a>
              </div>
  <div class="col-xs-2">
              </div>
<div class="col-xs-4">
    <form class="search-bar-header">
      <label> <span class="a-labels">search </span> <input class="search-bar-input" name="Search" id="search"> 
      <button class="search-bar-button" type="submit"><span class="fa fa-search"></span></button>
          </label> 
        </form>
           </div>
              <div class="col-xs-6"></div>
              <div class="col-xs-2"></div>
              <div class="col-xs-4">
                  <a class="login">LOGIN</a> <p class="line"> | </p> <a class="sign-up"> SIGN UP</a>
              </div>
               </div>
       <div class="collapsed-navbar">
    <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav collapsed-navbar-size">
        <li class="active">
        <li class="nav-list"><a href="index.html">HOME</a></li>
        <li class="nav-list"><a href="#">ABOUT</a></li> 
        <li class="nav-list"><a href="news.html">NEWS</a></li> 
        <li class="nav-list dropdown">
           <button class="dropdown-toggle dropdown-menu-collapsed" data-toggle="dropdown" disabled> WHATS ON
              </button>
          <ul class="dropdown-menu">
              <li class="dropdown-list"> <a href="events.html">EVENTS</a></li>
              <li class="dropdown-list"> <a href="">MARKETS</a></li>
          </ul>
              </li>
        <li class="nav-list"><a href="#">GALLERY</a></li>
           <li class="nav-list"><a href="#">LOGIN/SIGNUP</a></li>
      </ul>
    </div>
  </div>
</nav>
          </div>
              </div>
              </header>