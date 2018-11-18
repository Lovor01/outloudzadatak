<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OutLoud_Zadatak
 */

?>	
		<div class="slider"><!-- slider -->
			<div class="slider-content box"><div class="arrows prev"></div><div class="middle-content">
				<div class="inner-content part emphasized-div">
					<h2>Testimonials</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
					</p><p id="postscript">Lorem ipsum</p>
				</div></div><div class="arrows next"></div>				
			</div>
		</div><!-- #slider -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info box">
			<div>
				<div class="footer-left part">
					<div class="emphasized-div space-below">
						<h2>Contact Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
					</div>
					<div class="space-below">
						<div class="call-element">
							<span>Whatsapp:</span>
							<div class="border-around">
								<a href="https://wa.me/123456789">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/whatsapp.png" alt="Whatsapp logo">
									+123456789
								</a>
							</div>
						</div>
						<div class="call-element">
							<span>Viber:</span>	
							<div class="border-around">
								<a href="viber://pa?chatURI=#">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/viber.png" alt="Viber logo">
									+123456789
								</a>
							</div>
						</div>
					</div>
					<div class="mail-and-location space-below">
						<div class="small-space-below"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/email.png" alt="e-mail icon"><a href="mailto:loremipsum@loremipsum.com">loremipsum@loremipsum.com</a></div>
						<div><img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/map.png" alt="map icon"><a href="#">Lorem Ipsum Street 123</a></div>
					</div>
					<div class="space-below">
						<p>
							Working Hours<br>
							Mon, Wed, Fri: 8 AM - 8 PM<br>
							Tue, Thu 8 AM - 6 PM<br>
						</p>
					</div>
					<figure>
						<figcaption>Follow us:</figcaption>
						<img class="social" src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/facebook.png" alt="Facebook logo">
						<img class="social" src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/instagram.png" alt="Instagram logo">
					</figure>
				</div><div class="footer-right part">
					<form action="" method="post">
						<input type="text" name="name">
						<input type="email" name="email" placeholder="Email*" required>
						<input type="tel" name="phone"  placeholder="Phone*" required>
						<textarea name="message" cols="30" rows="10" placeholder="Message*"></textarea>
						<input id="choose-file" type="file" name="afile"><label id="choose-file-lbl" for="choose-file">Upload file*</label>
					</form>
					<a class="a-button" href="#">
						Send
					</a>
				</div>
			</div>
			<div id="copyright">
				<p class="center-text light">
					Copyright @ Lorem ipsum
				</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
