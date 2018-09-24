<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta charset="UTF-8">
        <title>COLTON</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="motive"> 
        <?php wp_head(); ?>
    </head>

    <body>  
        <div class="preloaderbox"></div>
        <!-- start header --> 
        <div id="header_social">
            <div class="container">
                <div class="row">
                    <!-- company information -->
                    <div class="col-lg-7 col-md-8 col-sm-9 col-xs-12">
                        <div class="company_cell">
                            <ul> 
                                <li><i class="fa fa-envelope-o"></i> <a href="" >companymail@gmail.com </a></li>
                                <li><i class="fa fa-phone"></i><a href="">8801833920054</a></li>
                                <li><i class="fa fa-clock-o"></i><a href="" >Mon - Fri : 9:00 -1700</a></li> 
                            </ul>
                        </div>
                    </div>

                    <!-- social menu -->
                    <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                        <div class="cotact_social top-social pull-right">
                            <div class="footer_social pull-right">
                                <a href="http://www.facebook.com" class="i fa fa-facebook"></a>
                                <a href="http://www.twitter.com" class="i fa fa-twitter"></a>
                                <a href="http://www.google.com" class="i fa fa-google-plus"></a>
                                <a href="http://www.pinterest.com" class="i fa fa-pinterest"></a>
                                <a href="http://www.rss.com" class="i fa fa-rss"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header stricky menu -->
        <header class="header stricky"> 
            <div class="service_page">
                <div class="container">
                    <section id="manu_area" class="manu_service">
                        <h2 class="hide">menu</h2>
                        <div class="navbar" role="navigation"> 
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- logo here -->
                                <a class="navbar-brand" href="index.html">DUPLEX</a>
                            </div>

                            <!-- Main menu aea -->
                            <div class="navbar-collapse collapse">  
                                <!-- Right nav -->
                                <ul class="nav navbar-nav main-menu scroll-menu">	 
                                    <li class=""><a href="index.html">HOME<span class="border"></span><span class="caret caret-home"></span></a> 
                                        <ul class="dropdown-menu submenu">
                                            <li ><a href="index.html">Home V1</a></li> 
                                            <li><a href="index-v2.html">Home V2</a></li>  
                                            <li><a href="index-v3.html">Home V3</a></li>  
                                        </ul>
                                    </li>
                                    <li><a href="about.html ">ABOUT<span class="border"></span></a>
                                        <ul class="dropdown-menu hidesubmenu">  </ul>
                                    </li>
                                    <li><a href="project.html">PROJECT<span class="border"></span><span class="caret caret-home"></span></a>  
                                        <ul class="dropdown-menu submenu">
                                            <li><a href="project.html">Project-v1</a></li>  
                                            <li><a href="project-v2.html">Project-v2</a></li> 
                                            <li><a href="project-v3.html">Project-v3</a></li>  
                                        </ul>
                                    </li>
                                    <li><a href="service.html ">SERVICE<span class="border"></span></a>
                                        <ul class="dropdown-menu hidesubmenu"> </ul>
                                    </li>

                                    <li><a href="#">PAGE<span class="border"></span><span class="caret caret-home"></span></a>
                                        <ul class="dropdown-menu submenu">
                                            <li><a href="blog_fullwidth.html">Full-Width Blog</a></li> 
                                            <li><a href="blog-details.html">Blog details</a></li>  
                                            <li><a href="shop.html">Shop</a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">BLOG<span class="border"></span></a>
                                        <ul class="dropdown-menu hidesubmenu"> </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT US</a>
                                        <ul class="dropdown-menu hidesubmenu"></ul>
                                    </li>
                                </ul> 
                            </div> 
                        </div>  
                    </section>  
                </div>
            </div>  
        </header> 
        <!-- start header -->


