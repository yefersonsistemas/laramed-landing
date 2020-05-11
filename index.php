<!DOCTYPE html>

<html lang="es" class="no-js">

<head>
	<style>
		html,
		body {
			margin: 0;
			padding: 10px;
			background: gainsboro;
		}



		#instafeed {
			max-width: 1080px;
			display: flex;
			flex-direction: column;
			margin: auto;
		}

		#instafeed a {
			background: white;
		}

		.banner-container {
			max-height: 380px !important;
		}


		.banner-container2 {
			max-height: 400px !important;
		}

		.banner-container img {
			width: 100% !important;
			height: 100% !important;
			object-fit: cover;
			max-height: 380px !important;
			max-width: 100% !important;
			border-radius: 5px;
		}

		.banner-container2 img {
			width: 100% !important;
			height: 100% !important;
			object-fit: cover;
			max-height: 400px !important;
			max-width: 100% !important;
			border-radius: 5px;
		}

		.instafeed-container span {
			text-align: center;
		}

		.instafeed-container span a {
			width: 165px;
			display: block;
			margin: auto;
			text-align: center;

		}

		.instafeed-container span a i {
			margin: auto;
			margin-bottom: 15px;
		}

		.instafeed-container span a:hover {
			color: gray;
		}

		.instafeed-container span h2 {
			margin-bottom: 40px;
		}

		.instafeed-container span h3 {
			display: inline-block;
		}

		.instafeed-container #instafeed>div {
			display: flex;

		}

		.instafeed-container #instafeed>div>div {
			/* width: 100%!important; */
			margin-right: 15px;
			position: relative;
		}

		.instafeed-container #instafeed>div>div:hover .overlay-insta {
			opacity: 1;
		}

		.instafeed-container #instafeed .overlay-insta {
			position: absolute;
			background: linear-gradient(135deg, rgba(38, 163, 255, 0.85), rgba(83, 201, 179, 0.85));
			height: 100%;
			width: 100%;
			border-radius: 5px;
			opacity: 0;
			transition: opacity 0.2s ease;
			display: flex;
			align-items: center;
			justify-content: center;
		}


		.instafeed-container #instafeed a img {
			border-radius: 5px;
		}
	</style>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="theme-color" content="#006fab" />

	<link rel=icon href="img/logos/Logo_Laramed_Favicon.webp" type="image/png">

	<title>Laramed - Home</title>

	<link rel='stylesheet' id='rgs-css' href='css\rgs.css' type='text/css' media='all'>
	<link rel='stylesheet' id='main-styles-css' href='css\style.css' type='text/css' media='all'>
	<link rel='stylesheet' id='responsive-css' href='css\responsive.css' type='text/css' media='all'>
	<link rel='stylesheet' id='iconsmind-css' href='css\iconsmind.css' type='text/css' media='all'>
	<link rel='stylesheet' id='skin-material-css' href='css\skin-material.css' type='text/css' media='all'>
	<link rel='stylesheet' id='js_composer_front-css' href='css\js_composer.min.css' type='text/css' media='all'>
	<link rel='stylesheet' id='magnific-css' href='css\magnific.css' type='text/css' media='all'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel='stylesheet' id='redux-google-fonts-salient_redux-css' href='https://fonts.googleapis.com/css?family=Roboto%3A500%2C700%7CNunito%3A300%2C700%2C400%2C400italic%7CMuli%3A600%7CMontserrat%3A500&#038;subset=latin&#038;ver=1535163646' type='text/css' media='all'>

	<script type='text/javascript' src='js\jquery\jquery.js'></script>
	<script type='text/javascript' src='js\jquery\jquery-migrate.min.js'></script>

	<?php
	require 'script-header.php';
	?>

	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1504325323751 {
			margin-bottom: 15px !important;
		}

		.vc_custom_1504286255898 {
			padding-right: 10% !important;
		}

		.vc_custom_1504285427120 {
			margin-top: 50px !important;
			margin-bottom: 2em !important;
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1504285795178 {
			margin-bottom: 50px !important;
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1504285430965 {
			margin-bottom: 2em !important;
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1504286112774 {
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1504286068726 {
			margin-top: 50px !important;
			margin-bottom: 2em !important;
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1504286089409 {
			padding-top: 15% !important;
			padding-right: 15% !important;
			padding-bottom: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1503969123885 {
			margin-bottom: 40px !important;
		}

		.inner h4 {
			text-align: center;
		}
	</style>
	<!-- Smartsupp Live Chat script -->
	<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
		_smartsupp.key = '37f00fc193f8608985f61941001808e1f216a406';
		window.smartsupp || (function(d) {
			var s, c, o = smartsupp = function() {
				o._.push(arguments)
			};
			o._ = [];
			s = d.getElementsByTagName('script')[0];
			c = d.createElement('script');
			c.type = 'text/javascript';
			c.charset = 'utf-8';
			c.async = true;
			c.src = 'https://www.smartsuppchat.com/loader.js?';
			s.parentNode.insertBefore(c, s);
		})(document);
	</script>
</head>

<body class="home page-template-default page page-id-6 material wpb-js-composer js-comp-ver-5.5.2 vc_responsive" data-footer-reveal="false" data-header-format="centered-menu" data-body-border="off" data-boxed-style="" data-header-breakpoint="1000" data-footer-reveal-shadow="none" data-dropdown-style="minimal" data-cae="easeOutQuart" data-megamenu-width="full-width" data-cad="700" data-aie="zoom-out" data-ls="magnific" data-apte="standard" data-hhun="0" data-fancy-form-rcs="default" data-form-style="minimal" data-form-submit="regular" data-is="minimal" data-button-style="rounded_shadow" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="true" data-full-width-header="false" data-slide-out-widget-area="true" data-slide-out-widget-area-style="slide-out-from-right" data-user-set-ocm="1" data-loading-animation="none" data-bg-header="true" data-ext-responsive="true" data-header-resize="1" data-header-color="custom" data-cart="false" data-remove-m-parallax="" data-force-header-trans-color="light" data-smooth-scrolling="0" data-permanent-transparent="false" data-responsive="1">

	<script type="text/javascript">
		if (navigator.userAgent.match(/(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/)) {
			document.body.className += " using-mobile-browser ";
		}
	</script>

	<div class="ocm-effect-wrap">
		<div class="ocm-effect-wrap-inner">
			<div id="ajax-loading-screen" data-disable-mobile="1" data-disable-fade-on-click="0" data-effect="standard" data-method="standard">
				<div class="loading-icon none">
					<div class="material-icon">
						<div class="spinner">
							<div class="right-side">
								<div class="bar"></div>
							</div>
							<div class="left-side">
								<div class="bar"></div>
							</div>
						</div>
						<div class="spinner color-2">
							<div class="right-side">
								<div class="bar"></div>
							</div>
							<div class="left-side">
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="header-space" data-header-mobile-fixed='1'></div>

			<div id="header-outer" data-has-menu="true" data-transparent-header="true" data-transparent-shadow-helper="false" data-remove-border="true" class="transparent" data-has-buttons="yes" data-using-pr-menu="false" data-mobile-fixed="1" data-ptnm="false" data-lhe="animated_underline" data-user-set-bg="#ffffff" data-format="centered-menu" data-permanent-transparent="false" data-megamenu-rt="1" data-remove-fixed="0" data-cart="false" data-transparency-option="1" data-box-shadow="none" data-shrink-num="6" data-full-width="false" data-condense="false" data-using-secondary="0" data-using-logo="1" data-logo-height="24" data-m-logo-height="24" data-padding="30" data-header-resize="1">

				<?php
				$activepage = "index";
				require 'header.php';
				?>

			</div>

			<div id="ajax-content-wrap">
				<div class="container-wrap">
					<div class="container main-content">
						<div class="row">
							<div id="fws_5c3e32c6e40b5" data-midnight="light" data-top-percent="12%" data-bottom-percent="7%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row top-level full-width-section standard_section" style="padding-top: calc(100vw * 0.12); padding-bottom: calc(100vw * 0.07); ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg" style=""></div>
									</div>
									<div class="row-bg-overlay" style="background: #006fab; background: linear-gradient(135deg, #006FAB 0%,#00D1A3 100%);  opacity: 0.8; ">
									</div>
								</div>

								<div class="video-color-overlay" data-color=""></div>

								<div class="mobile-video-image" style="background-image: url(wp-content/uploads/2017/09/blurrypeople.jpeg)"></div>

								<div class="nectar-video-wrap" data-bg-alignment="">
									<video class="nectar-video-bg" width="1800" height="700" preload="auto" loop="" autoplay="true" muted="" playsinline="">
										<source src="videos\producción-laramed.mp4" type="video/mp4">
										<source src="videos\producción-laramed.mp4" type="video/mp4">
									</video>
								</div>

								<div class="nectar-shape-divider-wrap " style=" height:250px;" data-front="" data-style="curve" data-position="bottom">
									<svg class="nectar-shape-divider" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
										<path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z">
										</path>
									</svg>
								</div>

								<div class="col span_12 light left">
									<div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>

									<div class="vc_col-sm-8 wpb_column column_container vc_column_container col centered-text padding-1-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="nectar-split-heading">
													<div class="heading-line">
														<div>
															<h1 style="font-family: monospace;"><img src="img/logos/Logo_Laramed_Blanco.webp" alt="" style="width: 50%;"></h1>
														</div>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504325323751">
													<div class="wpb_wrapper">
														<h4>EXPERIENCIA TRANSFORMADA EN EXCELENCIA</h4>
														<h4>CON MÁS DE 10 AÑOS DE EXPERIENCIA</h4>
													</div>
												</div>
												<a class="nectar-button large see-through-2  wpb_animate_when_almost_visible wpb_slideInUp slideInUp" style="margin-top: 25px; margin-bottom: 85px; border-color: #ffffff; color: #ffffff;" href="#productos" data-color-override="#ffffff" data-hover-color-override="#ffffff" data-hover-text-color-override="#000000">
													<span>PRODUCTOS DESTACADOS</span>
												</a>
												<div id="fws_5c3e32c6e7871" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section" style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div style="margin-bottom: -26%!important; " class="vc_col-sm-12 wpb_column column_container vc_column_container col padding-4-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="left-right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<iframe width="560" height="315" src="https://www.youtube.com/embed/MU5UJhNMRbA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															<!-- <div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-video-box"
																		data-color="default-accent-color"
																		data-play-button-size="larger"
																		data-border-radius="10px" data-hover="defaut"
																		data-shadow="x_large_depth">
																		<div class="inner-wrap">
																			<a href="videos/laramed-producción.mp4"
																				class="full-link pp"></a>
																			<img width="1000" height="667"
																				src="wp-content\uploads\2017\09\fabrica.jpeg"
																				class="attachment-full size-full" alt=""
																				srcset="wp-content\uploads\2017\09\fabrica.jpeg 1000w, wp-content\uploads\2017\09\fabrica.jpeg 300w, wp-content\uploads\2017\09\fabrica.jpeg 768w, wp-content\uploads\2017\09\fabrica.jpeg 900w"
																				sizes="(max-width: 1000px) 100vw, 1000px">
																			<a href="videos/laramed-producción.mp4"
																				data-color="default"
																				class="play_button_2 large nectar_video_lightbox pp">
																				<span class="play">
																					<span class="inner-wrap">
																						<svg version="1.1"
																							xmlns="http://www.w3.org/2000/svg"
																							xmlns:xlink="http://www.w3.org/1999/xlink"
																							width="600px" height="800px"
																							x="0px" y="0px"
																							viewbox="0 0 600 800"
																							enable-background="new 0 0 600 800"
																							xml:space="preserve">
																							<path fill="none"
																								d="M0-1.79v800L600,395L0-1.79z">
																							</path>
																						</svg>
																					</span>
																				</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div> -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>
								</div>
							</div>
							<div id="fws_5c3e32c6ea2d0" data-midnight="dark" data-top-percent="13%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section   " style="padding-top: calc(100vw * 0.13); padding-bottom: 0px; ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg" style=""></div>
									</div>
									<div class="row-bg-overlay"></div>
								</div>
								<div class="col span_12 dark left" style="text-align: center;">
									<span style="font-size: 2em;" class="color-titulos">NUESTROS ALIADOS COMERCIALES</span>
									<div class="vc_col-sm-1 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>

									<div class=" wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="clients no-carousel four-cols " data-he="greyscale_to_color" data-additional_padding="4">
													<div style="width:26%">
														<img src="img/logos/Logo_Grupo_Linarez-01.webp" width="274" height="68" alt="client">
													</div>
													<div style="width:26%">
														<img src="img/logos/Logo_Orquideas.webp" width="313" height="80" alt="client">
													</div>
													<div style="width:26%">
														<img src="img/logos/Logo_Equipromedic.webp" width="315" height="74" alt="client">
													</div>
													<div style="width:26%">
														<img src="img/logos/Logo_SinusandFace_Clinic.webp" width="210" height="141" alt="client">
													</div>
													<div style="width:26%">
														<img src="img/logos/Logo_SinusandFace_Academy.webp" width="253" height="143" alt="client">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-1 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="banner-container2 siema-banner2">
								<img src="img/banners/Gel-Laramed-1.webp" alt="" class="banner-img">
								<img src="img/banners/Gel-Laramed-2.webp" alt="" class="banner-img">
								<img src="img/banners/Gel-Laramed-3.webp" alt="" class="banner-img">
							</div>


							<div id="creative-services" data-midnight="dark" data-top-percent="5%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section  vc_row-o-equal-height vc_row-flex  vc_row-o-content-middle standard_section   " style="padding-top: calc(100vw * 0.05); padding-bottom: 0px; ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg"></div>
									</div>
									<div class="row-bg-overlay"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">

												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h3 class="color-titulos text-align-center">NUESTROS VALORES EMPRESARIALES NOS DEFINEN</h3>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element  vc_custom_1504286255898">
													<div class="wpb_wrapper">
														<p style="text-align: justify;">Hemos cunplido 10 años de
															trayectoria, somos un referente
															a nivel nacional de innovación y cambio
															constante, buscando la excelencia en nuestros
															productos y servicios.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-8 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="fws_5c3e32c6f392d" data-midnight="" data-column-margin="none" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg"></div>
													</div>
													<div class="col span_12  left">
														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-fancy-box   vc_custom_1504285427120 has-animation" data-style="color_box_basic" data-animation="fade-in-from-bottom" data-border="" data-box-color-opacity="0.6" data-delay="0" data-alignment="left" data-color="#2ac4ea" style="color: #ffffff;">
																		<div class="box-bg" style=" background-color: #2ac4ea;"></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-users-cog fa-3x"></i>
																			<h4>TRABAJO EN EQUIPO</h4>
																			<p>Los talentos de los miembros de Laramed, son de suma importancia para garantizar una excelente atención.</p>
																		</div>

																	</div>
																	<div class="nectar-fancy-box   vc_custom_1504285795178 has-animation" data-style="color_box_basic" data-animation="fade-in-from-bottom" data-border="" data-box-color-opacity="1" data-delay="0" data-alignment="left" data-color="accent-color" style="color: #ffffff;">
																		<div class="box-bg" style=""></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-people-carry fa-3x"></i>
																			<h4>COMPROMISO</h4>
																			<p>Nos esmeramos en brindar la mejor atención, comprometiéndonos para fidelizar con quienes nos prefieren.</p>
																		</div>

																	</div>
																</div>
															</div>
														</div>

														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-fancy-box   vc_custom_1504285430965 has-animation"
																		data-style="color_box_basic"
																		data-animation="fade-in-from-bottom"
																		data-border="" data-box-color-opacity="1"
																		data-delay="100" data-alignment="left"
																		data-color="#ff1053" style="color: #ffffff; margin-top: 50px">
																		<div class="box-bg"
																			style=" background-color: #ff1053;"></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-praying-hands fa-3x"></i>
																			<h4>RESPONSABILIDAD</h4>
																			<p>Con seriedad y responsabilidad, al día y a la hora con inmediatez a los requerimientos de nuestros clientes.</p>
																		</div>

																	</div>
																	<div class="nectar-fancy-box   vc_custom_1504286112774 has-animation"
																		data-style="color_box_basic"
																		data-animation="fade-in-from-bottom"
																		data-border="" data-box-color-opacity="1"
																		data-delay="100" data-alignment="left"
																		data-color="#fbbc05" style="color: #ffffff; margin-top: 55px">
																		<div class="box-bg"
																			style=" background-color: #fbbc05;"></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-user-shield fa-3x"></i>
																			<h4>GARANTÍA</h4>
																			<p> Realzamos nuestros valores, estandarizados en los más altos niveles de calidad.</p>
																		</div>

																	</div>
																</div>
															</div>
														</div>

														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-fancy-box   vc_custom_1504286068726 has-animation" data-style="color_box_basic" data-animation="fade-in-from-bottom" data-border="" data-box-color-opacity="1" data-delay="200" data-alignment="left" data-color="#2f88d6" style="color: #ffffff;">
																		<div class="box-bg" style=" background-color: #2f88d6;"></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-check-double fa-3x"></i>
																			<h4>CALIDAD</h4>
																			<p>Ofrecemos un amplio stock de productos, 100% garantizados y lo más importante, de marca Laramed.</p>
																		</div>

																	</div>
																	<div class="nectar-fancy-box   vc_custom_1504286089409 has-animation"
																		data-style="color_box_basic"
																		data-animation="fade-in-from-bottom"
																		data-border="" data-box-color-opacity="1"
																		data-delay="200" data-alignment="left"
																		data-color="#34a853" style="color: #ffffff; margin-top: 85px">
																		<div class="box-bg"
																			style=" background-color: #34a853;"></div>
																		<div class="inner" style="min-height: 0px">
																			<i class="fas fa-shipping-fast fa-3x"></i>
																			<h4>EFICACIA</h4>
																			<p> Optimizamos tiempo para incrementar ganancias a través de nuestros operadores y servicio de logística.</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="explainer" data-midnight="dark" data-top-percent="10%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section  vc_row-o-equal-height vc_row-flex  vc_row-o-content-middle standard_section   " style="padding-top: 50px; padding-bottom: 0px; ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg    " style=""></div>
									</div>
									<div class="row-bg-overlay"></div>
								</div>

								<div class="col span_12 dark left">
									<div class="vc_col-sm-8 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="img-with-aniamtion-wrap " data-max-width="150%" data-border-radius="10px">
													<div class="inner" style="width:100%">
														<img data-shadow="x_large_depth" data-shadow-direction="middle" class="img-with-animation skip-lazy " data-delay="0" height="960" width="1511" data-animation="fade-in-from-right" src="img/another/Imagen_Logistica_770x720.webp" sizes="100vw" alt="" style="transform: translate(61px, 0px);
															margin: 0;
															height: auto;
															width: 100%;
															object-fit: contain;
														">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h3 class="color-titulos text-align-center">PROPÓSITO</h3>
													</div>
												</div>
												<div class="toggles accordion" data-style="minimal_small">
													<div class="toggle default">
														<h3>
															<a href="#">
																<i class="icon-plus-sign"></i>
															</a>
														</h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<p style="text-align:justify">
																		Somos una importadora y exportadora de Insumos Médicos Descartables, hemos logrado 10 años de experiencia, estamos comprometidos en ofrecerle a nuestros clientes, productos de la mejor calidad al mejor precio del mercado. Contamos con un recurso humano profesional, enfocado en la diversidad de productos y calidad de servicio, siempre trabajando con optimismo y dedicación para brindar una excelente atención a nuestros clientes.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col span_12 dark left">
									<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h3 class="color-titulos text-align-center">BRINDANDAMOS TRANQUILIDAD Y SEGURIDAD EN EL SERVICIO</h3>
													</div>
												</div>
												<div class="toggles accordion" data-style="minimal_small">
													<div class="toggle default">
														<h3>
															<a href="#">
																<i class="icon-plus-sign"></i>
															</a>
														</h3>
														<div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<p style="text-align:justify">
																		Laramed es una empresa que ofrece insumos médicos descartables y que se caracteriza en brindar a sus clientes un servicio de logística que no es común, es decir, además del envío de la mercancía requerida a cualquier parte del país, nos aseguramos de empaquetarla con todos sus cuidados, llegando a sus manos en perfectas condiciones.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-8 wpb_column column_container vc_column_container col padding-2-percent" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="img-with-aniamtion-wrap " data-max-width="150%" data-border-radius="10px">
													<div class="inner" style="width:100%">
														<img data-shadow="x_large_depth" data-shadow-direction="middle" class="img-with-animation skip-lazy " data-delay="0" height="960" width="1511" data-animation="fade-in-from-right" src="img/another/Logistica_770x720.webp" sizes="100vw" alt="" style="transform: translate(61px, 0px);
															margin: 0;
															height: auto;
															width: 100%;
															object-fit: contain;
														">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div id="fws_5c3e32c7062f2" data-midnight="dark" data-top-percent="10%" data-bottom-percent="5%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section   " style="padding-top: calc(100vw * 0.10); padding-bottom: calc(100vw * 0.05); ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg    " style=""></div>
									</div>
									<div class="row-bg-overlay"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="vc_col-sm-1 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>

									<div class="vc_col-sm-10 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element " style=" max-width: 500px; display: inline-block;">
													<div class="wpb_wrapper">
														<h3 class="color-titulos">METAS ALCANZADAS</h3>
													</div>
												</div>

												<div id="fws_5c3e32c70767c" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-4-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-milestone " data-symbol="%" data-symbol-alignment="superscript" data-symbol-pos="after" data-symbol-size="40" data-ms-align="default">
																		<div class="number default" data-number-size="92">
																			<h2>
																				<span>87</span>
																			</h2>
																		</div>
																		<div class="subject" style="padding: 2%;">
																			TERRITORIO NACIONAL ABARCADO
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-4-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-milestone " data-symbol="+" data-symbol-alignment="superscript" data-symbol-pos="after" data-symbol-size="42" data-ms-align="default">
																		<div class="number default" data-number-size="92">
																			<h2>
																				<span>420</span>
																			</h2>
																		</div>
																		<div class="subject" style="padding: 2%;">
																			VARIEDAD DE PRODUCTOS
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="vc_col-sm-4 wpb_column column_container vc_column_container col padding-4-percent" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="nectar-milestone " data-symbol="" data-symbol-alignment="superscript" data-symbol-pos="after" data-symbol-size="40" data-ms-align="default">
																		<div class="number default" data-number-size="92">
																			<h2>
																				<span>3800</span>
																			</h2>
																		</div>
																		<div class="subject" style="padding: 2%;">
																			CLIENTES FIDELIZADOS
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-1 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-container siema-banner">
								<img src="img/banners/banner_laramed_1243x380_4.webp" alt="" class="banner-img">
								<img src="img/banners/banner_laramed_1243x380_2.webp" alt="" class="banner-img">
								<img src="img/banners/banner_laramed_1243x380_3.webp" alt="" class="banner-img">
							</div>
							<div id="fws_5c3e32c7094dc" data-midnight="dark" data-top-percent="5%" data-bottom-percent="18%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section   " style="padding-top: calc(100vw * 0.05); padding-bottom: 150px; ">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg    " style=""></div>
									</div>
									<div class="row-bg-overlay"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="fws_5c3e32c709fda" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="wpb_text_column wpb_content_element  vc_custom_1503969123885">
																		<div class="wpb_wrapper" id="productos">
																			<h2 class="color-titulos">PRODUCTOS DESTACADOS</h2>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="banner-container " style="margin-top:25px;">

													<div class="col-12 col-md-12 col-lg-12 d-flex justify-content-center">
														<div class="animated product-types">
															<a href="productos-100-laramed.php"><img src="img/products/Gel-antibacterial.webp" alt="" style="height: 375px;"></a>
														</div>
													</div>

												</div>

												<div class="row" style="padding-bottom: 0; margin-bottom: 0;">
													<div class="post-area col  span_12 col_last masonry auto_meta_overlaid_spaced  " data-ams="16px">
														<div class="posts-container" data-load-animation="none">
															<article id="post-220" class="regular masonry-blog-item post-220 post type-post status-publish format-standard has-post-thumbnail category-fashion category-uncategorized tag-awesome tag-classic tag-funny tag-gaming-tips tag-music tag-photography">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">

																			<a href="productos-100-laramed.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/another/Banner_Productos_Respaldo_Laramed_800x450_Guantes.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							Doing a cross country road
																							trip </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>


															<article id="post-219" class="regular masonry-blog-item post-219 post type-post status-publish format-standard has-post-thumbnail category-music category-uncategorized">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">

																			<a href="productos-100-laramed.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/products/Jeringas-de-5cc.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							We encountered a food
																							paradise </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>

															<article id="post-219" class="regular masonry-blog-item post-219 post type-post status-publish format-standard has-post-thumbnail category-music category-uncategorized">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">

																			<a href="productos-100-laramed.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/products/Jeringas-de-20cc.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							We encountered a food
																							paradise </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="post-area col  span_12 col_last masonry auto_meta_overlaid_spaced  " data-ams="16px">
														<div class="posts-container" data-load-animation="none">
															<article id="post-220" class="regular masonry-blog-item post-220 post type-post status-publish format-standard has-post-thumbnail category-fashion category-uncategorized tag-awesome tag-classic tag-funny tag-gaming-tips tag-music tag-photography">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">
																			<a href="productos-con-respaldo.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/another/Banner_Productos_Respaldo_Laramed_800x450_Solucion.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							Doing a cross country road
																							trip </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>


															<article id="post-219" class="regular masonry-blog-item post-219 post type-post status-publish format-standard has-post-thumbnail category-music category-uncategorized">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">

																			<a href="productos-100-laramed.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/products/Macrogotero.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							We encountered a food
																							paradise </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>


															<article id="post-219" class="regular masonry-blog-item post-219 post type-post status-publish format-standard has-post-thumbnail category-music category-uncategorized">
																<div class="inner-wrap animated">
																	<div class="post-content">
																		<div class="content-inner">

																			<a href="productos-100-laramed.php"></a>
																			<span class="post-featured-img" style="background-image: url(img/products/Jeringas-de-10cc.webp);">
																			</span>

																			<div class="article-content-wrap">

																				<div class="post-header">

																					<!-- <h3 class="title">
																						<a
																							href="">
																							We encountered a food
																							paradise </a>
																					</h3> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</article>
														</div>
													</div>
												</div>


												<div class="banner-container">
													<img src="img/banners/banner_laramed_1243x380_1.webp" alt="" class="banner-img">
												</div>
												<div id="fws_5c3e32c716779" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div style="margin-bottom: 20px!important; " class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div id="fws_5c3e32c717dc5" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section   " style="padding-top: 60px; padding-bottom: 0px; ">

								<div class="col span_12 dark left">
									<div style=" color: #ffffff;" class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="fws_5c3e32c7188c2" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; -webkit-transform:  translateY(-50%); transform:  translateY(-50%);">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div style=" color: #ffffff;margin-top: 15px; " class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text has-animation padding-5-percent" data-cfc="true" data-using-bg="true" data-t-w-inherits="default" data-shadow="x_large_depth" data-border-radius="20px" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="true" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="flip-in-vertical" data-delay="0">
															<div class="column-bg-overlay" style="opacity: 1; background: linear-gradient(to right, rgba(52,156,247,1) 0%, rgba(12,183,245,1) 51%, rgba(145,203,242,1) 100%);">
															</div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="divider-wrap" data-alignment="default">
																		<div style="height: 15px;" class="divider">
																		</div>
																	</div>
																	<h3 style="text-align: center;font-family:Nunito;font-weight:700;font-style:normal" class="vc_custom_heading">¿YA HICISTE TU COTIZACIÓN?
																	</h3>
																	<a class="nectar-button large see-through-2 " style="margin-top: 30px; margin-bottom: 1px; border-color: #ffffff; color: #ffffff;" href="prefactura.php" data-color-override="#ffffff" data-hover-color-override="#ffffff" data-hover-text-color-override="#000000">
																		<span style="text-transform: none;">Genera tu cotización</span>
																	</a>
																	<div class="divider-wrap" data-alignment="default">
																		<div style="height: 15px;" class="divider">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col span_12 instafeed-container" style="margin-bottom: 30px; border-radius: 5px;">
													<span>
														<h2 class="color-titulos">¡SIGUENOS EN NUESTRAS REDES!</h2>
														<a href="https://www.instagram.com/laramed_ca/">
															<i class="fab fa-instagram fa-4x"></i>
															<h3>@Laramed_ca</h3>
														</a>
													</span>
													<div id="instafeed" class="instafeed"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



					</div>
				</div>

				<?php
				require 'footer.php';
				?>

				<?php
				$activepageresponsive = "index";
				require 'header-responsive.php';
				?>

			</div>

			<a id="to-top" class="mobile-enabled"><i class="fa fa-angle-up"></i></a>

			<link rel='stylesheet' id='animate-css-css' href='css\animate.min.css?ver=5.5.2' type='text/css' media='all'>

			<script type='text/javascript'>
				var wpcf7 = {
					"apiSettings": {
						"root": "http:\/\/themenectar.com\/demo\/salient-corporate-2\/wp-json\/contact-form-7\/v1",
						"namespace": "contact-form-7\/v1"
					},
					"recaptcha": {
						"messages": {
							"empty": "Please verify that you are not a robot."
						}
					},
					"cached": "1"
				};
			</script>

			<script type='text/javascript'>
				var nectarLove = {
					"ajaxurl": "http:\/\/themenectar.com\/demo\/salient-corporate-2\/wp-admin\/admin-ajax.php",
					"postID": "6",
					"rooturl": "http:\/\/themenectar.com\/demo\/salient-corporate-2",
					"pluginPages": [],
					"disqusComments": "false",
					"loveNonce": "04203c32a6",
					"mapApiKey": ""
				};
			</script>

			<script type='text/javascript' src='js\scripts.js?ver=4.9'></script>
			<script type='text/javascript' src='js\priority.js?ver=8.6768'></script>
			<script type='text/javascript' src='js\modernizr.js?ver=2.6.2'></script>
			<script type='text/javascript' src='js\imagesLoaded.min.js?ver=4.1.4'></script>
			<script type='text/javascript' src='js\magnific.js?ver=7.0.1'></script>
			<script type='text/javascript' src='js\superfish.js?ver=1.4.8'></script>
			<script type='text/javascript' src='js\init.js?ver=8.6768'></script>
			<script type='text/javascript' src='js\flickity.min.js?ver=1.1.1'></script>
			<script type='text/javascript' src='js\jquery.flexslider-min.js?ver=5.5.2'></script>
			<script type='text/javascript' src='js\isotope.min.js?ver=7.6'></script>
			<script type='text/javascript' src='js\touchswipe.min.js?ver=1.0'></script>
			<script type='text/javascript' src='js\wp-embed.min.js?ver=4.9.9'></script>
			<script type='text/javascript' src='js\js_composer_front.min.js?ver=5.5.2'></script>
			<script type='text/javascript' src="https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
			<script type='text/javascript' src="js/siema.min.js"></script>

			<script>
				var imgInstaFeed = '';
				var userFeed = new Instafeed({
					get: 'user',
					userId: '174598075',
					clientId: '	fd9a8f7d7a9643469f59f1be8dce779c',
					accessToken: '174598075.fd9a8f7.58ff72a6ed484e188510a5b8fe9ab96d',
					resolution: 'standard_resolution',
					template: `<a class="img-insta" href="{{link}}" target="_blank" id="{{id}}">
									<span class="overlay-insta">
										<span class="metrics">
											<i class="fa fa-heart"></i>{{likes}}
											<i class="fa fa-comment fa-flip-horizontal"></i>{{comments}}
										</span>
									</span>
									<img src="{{image}}"/>
								</a>`,
					sortBy: 'most-recent',
					// limit: 5,
					links: false,
					after: function() {

						var carouselInstagram = new Siema({
							selector: '.instafeed',
							perPage: 4,
							onInit: function() {
								imgInstaFeed = this.innerElements;

								imgInstaFeed.forEach(function(img) {

									var wasDraggin = false;
									img.addEventListener('mousedown', function(e) {
										wasDraggin = false;
										// console.log(this);
										this.addEventListener('mousemove', function(e) {
											wasDraggin = true;

											this.addEventListener('click', function(e) {
												aux = wasDraggin;
												wasDraggin = false;
												if (aux) {
													e.preventDefault();
												}
											});
										})


									});


								});
							},
						});
					}
				});
				userFeed.run();
			</script>

			<script>
				var carouselBanner = new Siema({
					selector: '.siema-banner',
					perPage: 1,
					loop: true
				});

				setInterval(() => carouselBanner.next(), 2500)
			</script>

			<script>
				var carouselBanner = new Siema({
					selector: '.siema-banner2',
					perPage: 1,
					loop: true
				});

				setInterval(() => carouselBanner.next(), 2500)
			</script>

		</div>
	</div>
</body>

</html>