<?php 

$options = get_option('salient'); 
global $post;
$cta_link = ( !empty($options['cta-btn-link']) ) ? $options['cta-btn-link'] : '#';
$using_footer_widget_area = (!empty($options['enable-main-footer-area']) && $options['enable-main-footer-area'] == 1) ? 'true' : 'false';
$disable_footer_copyright = (!empty($options['disable-copyright-footer-area']) && $options['disable-copyright-footer-area'] == 1) ? 'true' : 'false';
$footer_reveal = (!empty($options['footer-reveal'])) ? $options['footer-reveal'] : 'false'; 
$midnight_non_reveal = ($footer_reveal != 'false') ? null : 'data-midnight="light"';

  
$exclude_pages = (!empty($options['exclude_cta_pages'])) ? $options['exclude_cta_pages'] : array(); 

?>

<div id="footer-outer" <?php echo $midnight_non_reveal; ?> data-using-widget-area="<?php echo $using_footer_widget_area; ?>">
	
	<?php if(!empty($options['cta-text']) && current_page_url() != $cta_link && !in_array($post->ID, $exclude_pages)) {  
		$cta_btn_color = (!empty($options['cta-btn-color'])) ? $options['cta-btn-color'] : 'accent-color'; ?>

		<div id="call-to-action">
			<div class="container">
				<div class="triangle"></div>
				<span> <?php echo $options['cta-text']; ?> </span>
				<a class="nectar-button <?php if($cta_btn_color != 'see-through') echo 'regular-button '; ?> <?php echo $cta_btn_color;?>" data-color-override="false" href="<?php echo $cta_link ?>"><?php if(!empty($options['cta-btn'])) echo $options['cta-btn']; ?> </a>
			</div>
		</div>

	<?php } ?>

	<?php if( $using_footer_widget_area == 'true') { ?>
		
	<div id="footer-widgets">
		
		<div class="container">
			
			<div class="row" id="contact">
				
				<svg class="footer-svg" width="1245" height="200" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
						<linearGradient id="test" x1="0" x2="1">
							<stop stop-color="#ff0000" offset="0"/>
							<stop stop-color="#ff6a00" offset="13%"/>
							<stop stop-color="#fff600" offset="25%"/>
							<stop stop-color="#3aff30" offset="36%"/>
							<stop stop-color="#28fff7" offset="48%"/>
							<stop stop-color="#2848ff" offset="60%"/>
							<stop stop-color="#f728ff" offset="73%"/>
							<stop stop-color="#ff00ae" offset="87%"/>
							<stop stop-color="#ff0004" offset="100%"/>
						</linearGradient>
					</defs>
					<g>
						<text class="footer-lets-talk" id="text" x="50%" y="92%" font-family="Fira Sans" font-size="240" font-weight="bold" stroke-width="2" text-anchor="middle" fill="url(#test)" 
							style="text-anchor: middle;">LET'S TALK</text>
					</g>
				</svg>
				
				<!--<h1 id="contact" class="lets-talk gradient" style="text-align:center; color: #FFF;">LET'S TALK</h1>-->
				<a href="tel:+61415415750"><h2 class="phone-number" style="text-align:center; color: #FFF;"><span>+61415415750</span></h2></a>
				<a href="mailto:contact@mlbdesign.com.au"><h3 class="email" style="text-align:center; color: #FFF;">contact@mlbdesign.com.au</h3></a>
				<h4 class="address" style="text-align:center; color: #FFF;">6/129 Hoddle Street, Richmond VIC 3121, Australia</h4>
			</div><!--/row-->
			
		</div><!--/container-->
	
	</div><!--/footer-widgets-->
	
	<?php } //endif for enable main footer area


	   if( $disable_footer_copyright == 'false') { ?>

	
		<div class="row" id="copyright">
			
			<div class="container">
				
				<div class="col span_5">
					
					<?php if(!empty($options['disable-auto-copyright']) && $options['disable-auto-copyright'] == 1) { ?>
						<p><?php if(!empty($options['footer-copyright-text'])) echo $options['footer-copyright-text']; ?> </p>	
					<?php } else { ?>
						<p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>. <?php if(!empty($options['footer-copyright-text'])) echo $options['footer-copyright-text']; ?> </p>
					<?php } ?>
					
				</div><!--/span_5-->
				
				<div class="col span_7 col_last">
					<ul id="social">
						<?php  if(!empty($options['use-twitter-icon']) && $options['use-twitter-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['twitter-url']; ?>"><i class="icon-twitter"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-facebook-icon']) && $options['use-facebook-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['facebook-url']; ?>"><i class="icon-facebook"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-vimeo-icon']) && $options['use-vimeo-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['vimeo-url']; ?>"> <i class="icon-vimeo"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-pinterest-icon']) && $options['use-pinterest-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['pinterest-url']; ?>"><i class="icon-pinterest"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-linkedin-icon']) && $options['use-linkedin-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['linkedin-url']; ?>"><i class="icon-linkedin"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-youtube-icon']) && $options['use-youtube-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['youtube-url']; ?>"><i class="icon-youtube"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-tumblr-icon']) && $options['use-tumblr-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['tumblr-url']; ?>"><i class="icon-tumblr"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-dribbble-icon']) && $options['use-dribbble-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['dribbble-url']; ?>"><i class="icon-dribbble"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-rss-icon']) && $options['use-rss-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo (!empty($options['rss-url'])) ? $options['rss-url'] : get_bloginfo('rss_url'); ?>"><i class="icon-rss"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-github-icon']) && $options['use-github-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['github-url']; ?>"><i class="icon-github-alt"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-behance-icon']) && $options['use-behance-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['behance-url']; ?>"> <i class="icon-be"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-google-plus-icon']) && $options['use-google-plus-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['google-plus-url']; ?>"><i class="icon-google-plus"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-instagram-icon']) && $options['use-instagram-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['instagram-url']; ?>"><i class="icon-instagram"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-stackexchange-icon']) && $options['use-stackexchange-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['stackexchange-url']; ?>"><i class="icon-stackexchange"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-soundcloud-icon']) && $options['use-soundcloud-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['soundcloud-url']; ?>"><i class="icon-soundcloud"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-flickr-icon']) && $options['use-flickr-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['flickr-url']; ?>"><i class="icon-flickr"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-spotify-icon']) && $options['use-spotify-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['spotify-url']; ?>"><i class="icon-salient-spotify"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-vk-icon']) && $options['use-vk-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['vk-url']; ?>"><i class="icon-vk"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-vine-icon']) && $options['use-vine-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['vine-url']; ?>"><i class="fa-vine"></i></a></li> <?php } ?>
					</ul>
				</div><!--/span_7-->
			
			</div><!--/container-->
			
		</div><!--/row-->
		
		<?php } //endif for enable main footer copyright ?>

</div><!--/footer-outer-->


<?php 

$mobile_fixed = (!empty($options['header-mobile-fixed'])) ? $options['header-mobile-fixed'] : 'false';
$has_main_menu = (has_nav_menu('top_nav')) ? 'true' : 'false';

$sideWidgetArea = (!empty($options['header-slide-out-widget-area'])) ? $options['header-slide-out-widget-area'] : 'off';
$userSetSideWidgetArea = $sideWidgetArea;
if($has_main_menu == 'true' && $mobile_fixed == '1') $sideWidgetArea = '1';

$fullWidthHeader = (!empty($options['header-fullwidth']) && $options['header-fullwidth'] == '1') ? true : false;
$sideWidgetClass = (!empty($options['header-slide-out-widget-area-style'])) ? $options['header-slide-out-widget-area-style'] : 'slide-out-from-right';
$sideWidgetOverlayOpacity = (!empty($options['header-slide-out-widget-area-overlay-opacity'])) ? $options['header-slide-out-widget-area-overlay-opacity'] : 'dark';
$prependTopNavMobile = (!empty($options['header-slide-out-widget-area-top-nav-in-mobile'])) ? $options['header-slide-out-widget-area-top-nav-in-mobile'] : 'false';

if($sideWidgetArea == '1') { 

	if($sideWidgetClass == 'fullscreen') echo '</div><!--blurred-wrap-->'; ?>

	<div id="slide-out-widget-area-bg" class="<?php echo $sideWidgetClass . ' '. $sideWidgetOverlayOpacity; ?>"></div>
	<div id="slide-out-widget-area" class="<?php echo $sideWidgetClass; ?>" data-back-txt="<?php echo __('Back', NECTAR_THEME_NAME); ?>">

		<?php if($sideWidgetClass == 'fullscreen') echo '<div class="inner-wrap">'; ?>

		<div class="inner">

		  <a class="slide_out_area_close" href="#"><span class="icon-salient-x icon-default-style"></span></a>


		   <?php  

		   if($userSetSideWidgetArea == 'off' || $prependTopNavMobile == '1' && $has_main_menu == 'true') { ?>
			   <div class="off-canvas-menu-container mobile-only">
			  		<ul class="menu">
					   <?php 
					  		////use default top nav menu if ocm is not activated
					  	     ////but is needed for mobile when the mobile fixed nav is on
					   		wp_nav_menu( array('theme_location' => 'top_nav', 'container' => '', 'items_wrap' => '%3$s')); 
					   ?>
		
					</ul>
				</div>
			<?php } 
		 
		  if(has_nav_menu('off_canvas_nav') && $userSetSideWidgetArea != 'off') { ?>
		 	 <div class="off-canvas-menu-container">
				<ul class="menu">
					<li>
						<a href="<?php if (stripos($_SERVER['REQUEST_URI'], 'portfolio')){ echo '/mlbdesign/#portfolio'; } else { echo '#portfolio'; } ?>">
							<svg class="large" viewBox="0 0 335 90" width="335" height="90" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<linearGradient id="gradient" x1="0" x2="1">
										<stop stop-color="#ff0000" offset="0"/>
										<stop stop-color="#ff6a00" offset="13%"/>
										<stop stop-color="#fff600" offset="25%"/>
										<stop stop-color="#3aff30" offset="36%"/>
										<stop stop-color="#28fff7" offset="48%"/>
										<stop stop-color="#2848ff" offset="60%"/>
										<stop stop-color="#f728ff" offset="73%"/>
										<stop stop-color="#ff00ae" offset="87%"/>
										<stop stop-color="#ff0004" offset="100%"/>
									</linearGradient>
								</defs>
								<g>
									<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" fill="white" 
									style="letter-spacing:-2px;text-anchor: middle;height:100px;">WORK</text>
									<text id="text-gradient" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="letter-spacing:-2px;text-anchor: middle;">WORK</text>
								</g>
							</svg>
						</a>
					</li>	
					<li>
						<a href="<?php if (stripos($_SERVER['REQUEST_URI'], 'portfolio')){ echo '/mlbdesign/#clients'; } else { echo '#clients'; } ?>">
							<svg class="large" viewBox="0 0 442 90" width="442" height="90" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<linearGradient id="gradient" x1="0" x2="1">
										<stop stop-color="#ff0000" offset="0"/>
										<stop stop-color="#ff6a00" offset="13%"/>
										<stop stop-color="#fff600" offset="25%"/>
										<stop stop-color="#3aff30" offset="36%"/>
										<stop stop-color="#28fff7" offset="48%"/>
										<stop stop-color="#2848ff" offset="60%"/>
										<stop stop-color="#f728ff" offset="73%"/>
										<stop stop-color="#ff00ae" offset="87%"/>
										<stop stop-color="#ff0004" offset="100%"/>
									</linearGradient>
								</defs>
								<g>
									<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" fill="white" 
									style="letter-spacing:-2px;text-anchor: middle;">CLIENTS</text>
									<text id="text-gradient" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="letter-spacing:-2px;text-anchor: middle;">CLIENTS</text>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php if (stripos($_SERVER['REQUEST_URI'], 'portfolio')){ echo '/mlbdesign/#about'; } else { echo '#about'; } ?>">
							<svg class="large" viewBox="0 0 371 90" width="371" height="90" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<linearGradient id="gradient" x1="0" x2="1">
										<stop stop-color="#ff0000" offset="0"/>
										<stop stop-color="#ff6a00" offset="13%"/>
										<stop stop-color="#fff600" offset="25%"/>
										<stop stop-color="#3aff30" offset="36%"/>
										<stop stop-color="#28fff7" offset="48%"/>
										<stop stop-color="#2848ff" offset="60%"/>
										<stop stop-color="#f728ff" offset="73%"/>
										<stop stop-color="#ff00ae" offset="87%"/>
										<stop stop-color="#ff0004" offset="100%"/>
									</linearGradient>
								</defs>
								<g>
									<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" fill="white" 
									style="letter-spacing:-2px;text-anchor: middle;">ABOUT</text>
									<text id="text-gradient" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="letter-spacing:-2px;text-anchor: middle;">ABOUT</text>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php if (stripos($_SERVER['REQUEST_URI'], 'portfolio')){ echo '/mlbdesign/#about-arrow'; } else { echo '#about-arrow'; } ?>">
							<svg class="large" viewBox="0 0 501 90" width="501" height="90" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<linearGradient id="gradient" x1="0" x2="1">
										<stop stop-color="#ff0000" offset="0"/>
										<stop stop-color="#ff6a00" offset="13%"/>
										<stop stop-color="#fff600" offset="25%"/>
										<stop stop-color="#3aff30" offset="36%"/>
										<stop stop-color="#28fff7" offset="48%"/>
										<stop stop-color="#2848ff" offset="60%"/>
										<stop stop-color="#f728ff" offset="73%"/>
										<stop stop-color="#ff00ae" offset="87%"/>
										<stop stop-color="#ff0004" offset="100%"/>
									</linearGradient>
								</defs>
								<g>
									<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" fill="white" 
									style="letter-spacing:-2px;text-anchor: middle;">CONTACT</text>
									<text id="text-gradient" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="letter-spacing:-2px;text-anchor: middle;">CONTACT</text>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="./login">
							<svg class="large" viewBox="0 0 337 90" width="337" height="90" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<linearGradient id="gradient" x1="0" x2="1">
										<stop stop-color="#ff0000" offset="0"/>
										<stop stop-color="#ff6a00" offset="13%"/>
										<stop stop-color="#fff600" offset="25%"/>
										<stop stop-color="#3aff30" offset="36%"/>
										<stop stop-color="#28fff7" offset="48%"/>
										<stop stop-color="#2848ff" offset="60%"/>
										<stop stop-color="#f728ff" offset="73%"/>
										<stop stop-color="#ff00ae" offset="87%"/>
										<stop stop-color="#ff0004" offset="100%"/>
									</linearGradient>
								</defs>
								<g>
									<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" fill="white" 
									style="letter-spacing:-2px;text-anchor: middle;">LOGIN</text>
									<text id="text-gradient" x="50%" y="97%" font-family="Fira Sans" font-size="120" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="letter-spacing:-2px;text-anchor: middle;">LOGIN</text>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<svg class="medium" viewBox="0 0 337 51" width="337" height="51" xmlns:xlink="http://www.w3.org/1999/xlink">
							<defs>
								<linearGradient id="gradient" x1="0" x2="1">
									<stop stop-color="#ff0000" offset="0"/>
									<stop stop-color="#ff6a00" offset="13%"/>
									<stop stop-color="#fff600" offset="25%"/>
									<stop stop-color="#3aff30" offset="36%"/>
									<stop stop-color="#28fff7" offset="48%"/>
									<stop stop-color="#2848ff" offset="60%"/>
									<stop stop-color="#f728ff" offset="73%"/>
									<stop stop-color="#ff00ae" offset="87%"/>
									<stop stop-color="#ff0004" offset="100%"/>
								</linearGradient>
							</defs>
							<g>
								<text id="text" x="50%" y="92%" font-family="Fira Sans" font-size="62" font-weight="bold" stroke-width="2" stroke="url(#gradient)" fill="url(#gradient)" 
									style="text-anchor: middle;">LET'S TALK</text>
							</g>
						</svg>
					</li>
					<li>
						<svg class="small" viewBox="0 0 337 29" width="337" height="29" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<text id="text" x="50%" y="97%" font-family="Fira Sans" font-size="36" font-weight="bold" fill="white" 
									style="text-anchor: middle;">0415415750</text>
							</g>
						</svg>
					</li>
					<li class="email-li">
						<svg class="small move-up" viewBox="0 0 337 22" width="337" height="22" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<text id="text" x="50%" y="78%" font-family="Fira Sans" font-size="21" font-weight="bold" fill="white" 
								style="text-anchor: middle;">contact@mlbdesign.com.au</text>
							</g>
						</svg>
					</li>
					<li class="copyright-li" style="margin-top: -5px!important;">
						<svg class="tiny move-up" viewBox="0 0 337 14" width="337" height="14" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<text id="text" x="50%" y="80%" font-family="Fira Sans" font-size="12" font-weight="300" fill="white" 
								style="text-anchor: middle;">© 2015 MLB Design</text>
							</g>
						</svg>
					</li>
				</ul>
		    </div>

		  <?php } 
		  
		   //widget area
		   if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Slide Out Widget Area') ) : elseif(!has_nav_menu('off_canvas_nav') && $userSetSideWidgetArea != 'off') : ?>	
		      <div class="widget">			
			 	 <h4 class="widgettitle">Side Widget Area</h4>
			 	 <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign widgets to this area.</a></p>
		 	  </div>
		 <?php endif; ?>

		</div>

		<?php

			$usingSocialOrBottomText = (!empty($options['header-slide-out-widget-area-social']) && $options['header-slide-out-widget-area-social'] == '1' || !empty($options['header-slide-out-widget-area-bottom-text'])) ? true : false;
			
			if($usingSocialOrBottomText == true) echo '<div class="bottom-meta-wrap">';
			
		 	/*social icons*/
			 if(!empty($options['header-slide-out-widget-area-social']) && $options['header-slide-out-widget-area-social'] == '1') {
			 	$social_link_arr = array('twitter-url','facebook-url','vimeo-url','pinterest-url','linkedin-url','youtube-url','tumblr-url','dribbble-url','rss-url','github-url','behance-url','google-plus-url','instagram-url','stackexchange-url','soundcloud-url','flickr-url','spotify-url','vk-url','vine-url');
			 	$social_icon_arr = array('icon-twitter','icon-facebook','icon-vimeo','icon-pinterest','icon-linkedin','icon-youtube','icon-tumblr','icon-dribbble','icon-rss','icon-github-alt','icon-be','icon-google-plus','icon-instagram','icon-stackexchange','icon-soundcloud','icon-flickr','icon-salient-spotify','icon-vk','fa-vine');
			 	
			 	echo '<ul class="off-canvas-social-links">';

			 	for($i=0; $i<sizeof($social_link_arr); $i++) {
			 		
			 		if(!empty($options[$social_link_arr[$i]]) && strlen($options[$social_link_arr[$i]]) > 1) echo '<li><a target="_blank" href="'.$options[$social_link_arr[$i]].'"><i class="'.$social_icon_arr[$i].'"></i></a></li>';
			 	}

			 	echo '</ul>';
			 }

			 /*bottom text*/
			 if(!empty($options['header-slide-out-widget-area-bottom-text'])) {
			 	echo '<p class="bottom-text">'.$options['header-slide-out-widget-area-bottom-text'].'</p>';
			 }

			if($usingSocialOrBottomText == true) echo '</div><!--/bottom-meta-wrap-->';

			if($sideWidgetClass == 'fullscreen') echo '</div> <!--/inner-wrap-->'; ?>

	</div>
<?php } ?>


</div> <!--/ajax-content-wrap-->

<?php if(!empty($options['boxed_layout']) && $options['boxed_layout'] == '1') { echo '</div>'; } ?>

<?php if(!empty($options['back-to-top']) && $options['back-to-top'] == 1) { ?>
	<a id="to-top"><i class="icon-angle-up"></i></a>
<?php } ?>

<?php if(!empty($options['google-analytics'])) echo $options['google-analytics']; ?> 

<?php wp_footer(); ?>	

<!-- SCRIPTS -->
<script type="text/javascript">
if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
	//jQuery('#slide-out-widget-area').css('display', 'block');
	//jQuery('#slide-out-widget-area').addClass("open");
		jQuery('.vert-center').bind('inview', function (event, visible) {
			if (visible == true) {
				jQuery(this).css({transition: "opacity 2s", opacity: "1"});
				jQuery(this).parent().siblings('.work-info-bg').css({transition: "opacity 2s", opacity: "0.8"});
			} else {
				jQuery(this).css({transition: "opacity .5s", opacity: "0"});
				jQuery(this).parent().siblings('.work-info-bg').css({transition: "opacity .5s", opacity: "0"});
			}
		});
	}
</script>
<script type="text/javascript">
	jQuery('.slide-out-widget-area-toggle, ul.menu li a').click(function () {
		jQuery('.closed, .open').toggleClass('active');
	});
</script>
<script type="text/javascript">
if( navigator.userAgent.match(/iPad/i)){
	 jQuery('svg text.footer-lets-talk').attr('x', '27%');
 }
 </script>
</body>
</html>