<?php  
// Preloader
do_action('cosmobit_site_preloader'); 	

// Header Image
do_action('cosmobit_wp_hdr_image'); 
$cosmobit_hs_hdr_sticky = get_theme_mod( 'cosmobit_hs_hdr_sticky','1');
?>
<!--=== / Start: As--Header (Topbar + Navbar (Mobile Menu)) / === -->
<header id="dt__header" class="dt__header header--eleven">
	<div class="dt__header-inner">
		<div class="dt__header-navwrapper">
			<div class="dt__header-navwrapperinner">
				<!--=== / Start: As--Navbar / === -->
				<div class="dt__navbar dt-d-none dt-d-lg-block">
					<div class="dt__navbar-wrapper <?php if($cosmobit_hs_hdr_sticky=='1'): esc_attr_e('is--sticky','arvita'); endif; ?>">
						<div class="dt-container">
							<div class="dt-row">								
								<div class="dt-col-2 dt-my-auto">									
									<div class="site--logo">
										<?php do_action('cosmobit_site_logo'); ?>
									</div>
									<div class="dt__navbar-leftsvg one">
										<svg width="608" height="163" viewBox="0 0 608 163" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" fill="#1d1d1d" d="M607.133 0C607.621 42.822 591.79 84.282 561.784 114.883C524.684 152.718 476.487 162.711 442.869 162.247C402.215 161.686 379.755 145.277 338.063 129.999C310.158 119.773 280.958 112.755 250.388 108.836C190.259 107.829 60.129 107.008 0 106C0.000259042 70.688 -0.000333667 35.5 0 0C178.037 0 429.096 0 607.133 0Z"/>
										</svg>
									</div>
									<div class="dt__navbar-leftsvg two">
										<svg width="608" height="163" viewBox="0 0 608 163" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" fill="#ffffff" d="M607.133 0C607.621 42.821 591.79 84.281 561.784 114.881C524.684 152.717 476.487 162.71 442.869 162.246C402.215 161.685 379.755 145.276 338.062 129.997C310.158 119.773 280.958 112.754 250.388 108.835C190.258 107.827 60.129 107.007 0 106C-6.64312e-05 71 -6.09803e-06 35.5 0 0C178.037 0 429.096 0 607.133 0Z"/>
										</svg>
									</div>
								</div>
								<div class="dt-col-10 dt-my-auto">
									<div class="dt__header-topbar dt-d-lg-block dt-d-none">
										<?php do_action('cosmobit_site_header'); ?>
									</div>
									<div class="dt__navbar-menu">
										<nav class="dt__navbar-nav">
											<?php do_action('cosmobit_site_header_navigation'); ?>
										</nav>
										<div class="dt__navbar-right">
											<ul class="dt__navbar-list-right">
												<?php do_action('cosmobit_woo_cart'); ?>
												<?php do_action('cosmobit_site_main_search'); ?>
												<?php do_action('cosmobit_header_button'); ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--=== / End: As--Navbar / === -->
				<!--=== / Start: As--Mobile Menu / === -->
				<div class="dt__mobilenav <?php if($cosmobit_hs_hdr_sticky=='1'): esc_attr_e('is--sticky','arvita'); endif; ?> dt-d-lg-none">
					<div class="dt__mobilenav-topbar">                              
						<button type="button" class="dt__mobilenav-topbar-toggle"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
						<div class="dt__mobilenav-topbar-content">
							<div class="dt-container">
								<div class="dt-row">
									<div class="dt-col-12">
										<?php do_action('cosmobit_site_header'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dt-container">
						<div class="dt-row">
							<div class="dt-col-12">
								<div class="dt__mobilenav-menu">
									<div class="dt__mobilenav-logo">
										<div class="site--logo">
											<?php do_action('cosmobit_site_logo'); ?>
										</div>
									</div>
									<div class="dt__mobilenav-toggles">
										<div class="dt__mobilenav-right">
											<ul class="dt__navbar-list-right">
												<?php do_action('cosmobit_site_main_search'); ?>
												<?php do_action('cosmobit_header_button'); ?>
											</ul>
										</div>
										<div class="dt__mobilenav-mainmenu">
											<button type="button" class="hamburger dt__mobilenav-mainmenu-toggle">
												<span></span>
												<span></span>
												<span></span>
											</button>
											<div class="dt__mobilenav-mainmenu-content">
												<div class="off--layer"></div>
												<div class="dt__mobilenav-mainmenu-inner">
													<button type="button" class="dt__header-closemenu site--close"></button>
													<?php do_action('cosmobit_site_header_navigation'); ?>
												</div>
											</div>
										</div>                                        
									</div>                                    
								</div>
							</div>
						</div>
					</div>        
				</div>
				<!--=== / End: As--Mobile Menu / === -->
			</div>
		</div>
	</div>
</header>