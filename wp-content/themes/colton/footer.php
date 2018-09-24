<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!---footer start area -->
	<section id="footer_area">
		<div class="container">
			<div class="row">
				<div class="footer_content">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_spacing">
						<div class="single_footer">
							<h2>DUPLEX</h2>
							<p>Lorem Ipsum is simply dummy text of the had a printing and typesetting industry Ipsum  </p> 
							<p>hasbeen the industry's  printing and type seting the industry's</p>
						</div>
						<div class="footer_social">
							<a href="http://www.facebook.com" class="i fa fa-facebook"></a>
							<a href="http://www.twitter.com" class="i fa fa-twitter"></a>
							<a href="http://www.google.com" class="i fa fa-google-plus"></a>
							<a href="http://www.pinterest.com" class="i fa fa-pinterest"></a>
							<a href="http://www.rss.com" class="i fa fa-rss"></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_spacing">
						<div class="column_title">
							<h2>latest news</h2>
							<span></span>
						</div>
						<div class="column-two">
							
							<div class="column_img">
                                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/page/blog/post-3.jpg" alt="img" />
							</div>
							<div class="column_text">
								<a href="#"><p>Lorem Ipsum is simply dumm text of the and useble</p></a>
								<h3>17 jun, 2015</h3>
							</div>
						</div>
						<div class="column-two"> 
							<div class="column_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/latest-1.jpg" alt="img" />
							</div>
							<div class="column_text">
								<a href="#"><p>Lorem Ipsum is simply dumm text of the and useble</p></a>
								<h3>17 jun, 2015</h3>
							</div>
						</div>
						<div class="column-two"> 
							<div class="column_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/page/blog/post-2.jpg" alt="img" />
							</div>
							<div class="column_text">
								<a href="#"><p>Lorem Ipsum is simply dumm text of the and useble</p></a>
								<h3>17 jun, 2015</h3>
							</div>
						</div> 
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_spacing">
						<div class="column-three">
							<h2>Address</h2> 
							<span></span>
							<a href="" class="i fa fa-map-marker"></a> 60 Grant Ave. Carteret NJ 0708<br />
							<a href="" class="i fa fa-phone"></a> (732) 803-01 03, (732) 806-01 04 <br />
							<a href="" class="i fa fa-envelope-o"></a> info@companyname.com <br />
						</div>
						<div class="subcriber">
							<h2>subcriber</h2>
							<span></span>
							<div class="footer-subscriber">
								<form action="#" class="search-form">
									<input type="text" placeholder="Enter you email here">
									<button type="submit"><i class="fa fa-location-arrow"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_spacing">
						<div class="small_gallery">
							<h2>Gallery</h2>
							<span></span>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-2.jpg" alt="img" />
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-3.jpg" alt="img" />
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-4.jpg" alt="img" />
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-5.jpg" alt="img" />
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-6.jpg" alt="img" />
							<img src="<?php echo get_template_directory_uri();?>/assets/img/home-1/laest-7.jpg" alt="img" />
						</div>
					</div>
				</div> 
			</div>
		</div>
		<hr class="horizenal" /> 
		<div class="container">
			<div class="row">
				<div class="copy_right_area">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="copy_left">
							<p>&copy;copyright 2015 <span>Dupplex</span></p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
						<div class="copy_right">
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">FAQ</a></li>
								<li><a href="">About</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php wp_footer(); ?>
</body>
</html>
