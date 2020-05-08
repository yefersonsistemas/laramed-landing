<!DOCTYPE html>

<html lang="es" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="theme-color" content="#006fab" />

	<link rel=icon href="img/logos/Logo_Laramed_Favicon.png" type="image/png">

	<title>Laramed - Contact us</title>

	<link rel='stylesheet' id='rgs-css' href='..\css\rgs.css' type='text/css' media='all'>
	<link rel='stylesheet' id='main-styles-css' href='..\css\style.css' type='text/css' media='all'>
	<link rel='stylesheet' id='responsive-css' href='..\css\responsive.css' type='text/css' media='all'>
	<link rel='stylesheet' id='iconsmind-css' href='..\css\iconsmind.css' type='text/css' media='all'>
	<link rel='stylesheet' id='skin-material-css' href='..\css\skin-material.css' type='text/css' media='all'>
	<link rel='stylesheet' id='js_composer_front-css' href='..\css\js_composer.min.css' type='text/css' media='all'>
	<link rel='stylesheet' id='magnific-css' href='..\css\magnific.css' type='text/css' media='all'>
	<!-- <link rel='stylesheet' id='magnific-css' href='..\css\bootstrap-grid.css' type='text/css'> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel='stylesheet' id='redux-google-fonts-salient_redux-css' href='http://fonts.googleapis.com/css?family=Roboto%3A500%2C700%7CNunito%3A300%2C700%2C400%2C400italic%7CMuli%3A600%7CMontserrat%3A500&#038;subset=latin&#038;ver=1535163646' type='text/css' media='all'>

	<script type='text/javascript' src='..\js\jquery\jquery.js'></script>
	<script type='text/javascript' src='..\js\jquery\jquery-migrate.min.js'></script>

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


		:root {
			--border-color: #e0e0e0;
			--border-color-hover: #006fab;
		}

		#label-upload-rif {
			cursor: pointer;
			background: #f6f6f6;
			border-bottom: 2px solid var(--border-color);
			padding: 5px;
			display: block;
			margin-bottom: 15px;
			transition: border-bottom 0.2s ease;
		}

		#label-upload-rif:hover {
			border-bottom: 2px solid var(--border-color-hover);
		}

		#producto {

			height: 50px;
			border-bottom: 2px solid var(--border-color) !important;
			background: #f6f6f6;
			cursor: pointer;
			font-family: Roboto;
			font-weight: 700;
			color: black;
			transition: border-bottom 0.2s ease;
		}

		#producto option {
			background: #f6f6f6;
		}

		#producto:hover {
			border-bottom: 2px solid var(--border-color-hover) !important;
		}

		#cantidad,
		#p-phone,
		#p-cedula {
			width: 100%;
			background: #f6f6f6;
			-webkit-appearance: none;
			border: unset;
			height: 50px;
			padding: 10px;
			border-bottom: 2px solid var(--border-color);
			transition: border-bottom .2s ease;
		}

		#cantidad:focus,
		#p-phone:focus,
		#p-cedula:focus,
		#add-product-container:hover,
		.delete-product-container:hover {
			border-bottom: 2px solid var(--border-color-hover);
		}

		#p-phone::-webkit-outer-spin-button,
		#p-phone::-webkit-inner-spin-button,
		#p-cedula::-webkit-outer-spin-button,
		#p-cedula::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		#add-product-container,
		.delete-product-container {
			position: absolute;
			right: 0;
			z-index: 5;
			border-radius: 1px !important;
			font-weight: bolder;
			font-family: Nunito;
			cursor: pointer;
			border: 0;
			padding: 5px 15px;
			background-color: #f6f6f6;
			border-bottom: 2px solid #e0e0e0;
			transition: border-bottom .2s ease;
		}

		.product-container {
			position: relative;
			display: flex;
			flex-wrap: wrap;
			margin-top: 1.5em;
		}

		.delete-product-container {
			top: 0;
		}
	</style>
</head>

<body class="page-template-default page page-id-214 material wpb-js-composer js-comp-ver-5.5.2 vc_responsive" data-footer-reveal="false" data-header-format="centered-menu" data-body-border="off" data-boxed-style="" data-header-breakpoint="1000" data-footer-reveal-shadow="none" data-dropdown-style="minimal" data-cae="easeOutQuart" data-megamenu-width="full-width" data-cad="700" data-aie="zoom-out" data-ls="magnific" data-apte="standard" data-hhun="0" data-fancy-form-rcs="default" data-form-style="minimal" data-form-submit="regular" data-is="minimal" data-button-style="rounded_shadow" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="true" data-full-width-header="false" data-slide-out-widget-area="true" data-slide-out-widget-area-style="slide-out-from-right" data-user-set-ocm="1" data-loading-animation="none" data-bg-header="true" data-ext-responsive="true" data-header-resize="1" data-header-color="custom" data-cart="false" data-remove-m-parallax="" data-force-header-trans-color="light" data-smooth-scrolling="0" data-permanent-transparent="false" data-responsive="1">

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
				$activepage = "contact-us";
				require 'header.php';
				?>

			</div>

			<div id="ajax-content-wrap">
				<div class="container-wrap">
					<div class="container main-content">
						<div class="row">
							<div id="fws_5c3e36313670d" data-midnight="dark" data-top-percent="14%" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row top-level full-width-section standard_section   " style="padding-top: calc(100vw * 0.14); padding-bottom: 0px;  z-index: 100;">
								<div class="row-bg-wrap">
									<div class="inner-wrap">
										<div class="row-bg using-image   " style="background-image: url(); background-position: center center; background-repeat: no-repeat; "></div>
									</div>
									<div class="row-bg-overlay" style="background:linear-gradient(to right, rgba(52,156,247,1) 0%, rgba(12,183,245,1) 51%, rgba(145,203,242,1) 100%);"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>

									<div class="vc_col-sm-8 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="fws_5c3e363138206" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 7%; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div style=" color: #ffffff;" class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-cfc="true" data-t-w-inherits="default" data-shadow="none" data-border-radius="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-bg-overlay"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="wpb_text_column wpb_content_element ">
																		<div class="wpb_wrapper">
																			<h2>Generate your quotation</h2>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div id="fws_5c3e3631399cb" data-midnight="" data-column-margin="default" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row standard_section    " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
														<div style="margin-bottom: -25%!important; " class="vc_col-sm-12 wpb_column column_container vc_column_container col has-animation padding-6-percent" data-using-bg="true" data-t-w-inherits="default" data-shadow="x_large_depth" data-border-radius="10px" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="true" data-bg-color="#ffffff" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="grow-in" data-delay="0">
															<div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div role="form" class="wpcf7" id="wpcf7-f5686-p214-o1" lang="en-US" dir="ltr">
																		<div class="screen-reader-response"></div>
																		<form id="formularioContacto" class="wpcf7-form" method="POST" enctype="multipart/form-data">
																			<div class="row">
																				<div class="col span_6">
																					<label for="your-name">Name / Business name</label><br>
																					<span class="wpcf7-form-control-wrap your-name">
																						<input type="text" name="name" id="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="msjname" style="opacity: 0; color: #ff0000"></span>
																				</div>
																				<div class="col span_6">
																					<label for="your-email">Email</label><br>
																					<span class="wpcf7-form-control-wrap your-email">
																						<input type="email" name="email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="msjemail" style="opacity: 0; color: #ff0000"></span>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col">
																					<label for="your-direction">Fiscal address</label><br>
																					<span class="wpcf7-form-control-wrap your-name">
																						<input type="text" name="direccion" id="direccion" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="textdireccion" style="opacity: 0; color: #ff0000"></span>
																				</div>
																			</div>

																			<div class="row">
																				<div class="col span_12">
																					<label for="label-upload-rif">ID</label><br>
																					<span class="wpcf7-form-control-wrap your-name">
																						<input type="file" id="uploadrif" name="uploadrif" hidden class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
																						<label for="uploadrif" id="label-upload-rif">Click to upload ID</label>
																					</span>
																					<span id="textcedula-rif" style="opacity: 0; color: #ff0000"></span>
																				</div>

																			</div>

																			<p>Products</p>
																			<div class="container">
																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox1" value="Antibacterial"><label class="form-check-label">Antibacterial - Laramed</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant1" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class=" form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox2" value="Macrogoteros en Y"><label class="form-check-label"> Macrogoteros en Y - Laramed</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant2" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox3" value="Jeringa de 20cc"><label class="form-check-label"> Jeringa de 20cc - Laramed</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant3" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox4" value="Jeringa de 10cc"><label class="form-check-label"> Jeringa de 10cc - Laramed</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant4" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox5" value="Buretas de 150ml"><label class="form-check-label"> Buretas de 150ml</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant5" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox6" value="Microgoteros en Y"><label class="form-check-label"> Microgoteros en Y</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant6" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox7" value="SealP N° 21 y 23"><label class="form-check-label"> SealP N° 21 y 23</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant7" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox8" value="Soluciones"><label class="form-check-label"> Soluciones</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant8" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox9" value="Jeringas de 5cc"><label class="form-check-label"> Jeringas de 5cc</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant9" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox10" value="Jeringas de 3cc"><label class="form-check-label"> Jeringas de 3cc</label>
																							</div>
																							<div class="col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant10" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-6">
																						<div class="row">
																							<div class="form-check col-5">
																								<input name="cbox" class="form-check-input producto" type="checkbox" id="cbox11" value="Jeringas de 1cc"> Jeringas de 1cc</label>
																							</div>
																							<div class="form-check col-1">
																								<input placeholder="Cantidad de producto" class="hideable" id="cant11" type="number" name="cantidad" step="1" min="1" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																							</div>
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="row">
																							<div class="col-5">

																							</div>
																							<div class="col-1">

																							</div>
																						</div>
																					</div>
																				</div>
																			</div>



																			<!-- <button id="add-product-container" type="button"><i class="fa fa-plus"></i> Agregar Otro Producto</button> -->

																			<p>Reference</p>
																			<div class="row">
																				<div class="col span_6">
																					<label for="name-ref">Name / Business name</label><br>
																					<span class="wpcf7-form-control-wrap your-name">
																						<input type="text" name="p-name" id="p-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="textp-name" style="opacity: 0; color: #ff0000"></span>
																				</div>
																				<div class="col span_6">
																					<label for="tlf-ref">ID</label><br>
																					<span class="wpcf7-form-control-wrap your-email">
																						<input type="number" id="p-cedula" name="p-cedula" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="textp-cedula" style="opacity: 0; color: #ff0000"></span>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col span_6">
																					<label for="tlf-ref">Phone</label><br>
																					<span class="wpcf7-form-control-wrap your-email">
																						<input type="number" id="p-phone" name="p-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="textp-phone" style="opacity: 0; color: #ff0000"></span>
																				</div>
																				<div class="col span_6">
																					<label for="email-ref">Email</label><br>
																					<span class="wpcf7-form-control-wrap your-email">
																						<input type="email" id="p-email" name="p-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																					</span>
																					<span id="textp-email" style="opacity: 0; color: #ff0000"></span>
																				</div>
																			</div>
																			<div id="success" style="padding-top: 5px; padding-bottom: 5px;"></div>
																			<p>
																				<input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" id="enviarContacto">
																			</p>
																			<div class="wpcf7-response-output wpcf7-display-none"></div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_col-sm-2 wpb_column column_container vc_column_container col no-extra-padding" data-t-w-inherits="default" data-border-radius="none" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-bg-overlay"></div>
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="fws_5c3e36313c587" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-content standard_section   " style="padding-top: 0px; padding-bottom: 0px; ">
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
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.11072869967!2d-80.19594528510525!3d25.76690591467408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b684eeadddcf%3A0xf05961ea192900a4!2s78%20SW%207th%20St%20%23500%2C%20Miami%2C%20FL%2033130%2C%20USA!5e0!3m2!1sen!2sve!4v1588962713953!5m2!1sen!2sve" width="1423" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
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
			$activepageresponsive = "contact-us";
			require 'header-responsive.php';
			?>

		</div>



		<a id="to-top" class="mobile-enabled"><i class="fa fa-angle-up"></i></a>

		<link rel='stylesheet' id='animate-css-css' href='css\animate.min.css?ver=5.5.2' type='text/css' media='all'>

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

		<script>
			document.addEventListener('DOMContentLoaded', function() {

				/* script para personalizar el input file */
				var inputFile = document.getElementById('uploadrif');
				var labelInputFile = document.getElementById('label-upload-rif');


				inputFile.addEventListener('change', function(e) {
					var fileName = e.currentTarget.files[0].name;
					labelInputFile.textContent = fileName;
				});

				/* fin script para personalizar el input file */

				/* script para hacer que el input number actue de numero telefonico */

				var inputNumberTlfRef = document.getElementById('p-phone');

				inputNumberTlfRef.addEventListener('wheel', function(e) {
					e.preventDefault();
				});

				inputNumberTlfRef.addEventListener('keydown', function(e) {
					if (e.which == 38 || e.which == 40)
						e.preventDefault();
				});
				/* fin script para hacer que el input number actue de numero telefonico */
			});
		</script>

		<script type='text/javascript' src='..\js\jquery\jquery-2.2.4.min.js'></script>
		<script type='text/javascript' src='..\js\scripts.js?ver=4.9'></script>
		<script type='text/javascript' src='..\js\priority.js?ver=8.6768'></script>
		<script type='text/javascript' src='..\js\modernizr.js?ver=2.6.2'></script>
		<script type='text/javascript' src='..\js\imagesLoaded.min.js?ver=4.1.4'></script>
		<script type='text/javascript' src='..\js\magnific.js?ver=7.0.1'></script>
		<script type='text/javascript' src='..\js\superfish.js?ver=1.4.8'></script>
		<script type='text/javascript' src='..\js\init.js?ver=8.6768'></script>
		<script type='text/javascript' src='..\js\flickity.min.js?ver=1.1.1'></script>
		<script type='text/javascript' src='..\js\jquery.flexslider-min.js?ver=5.5.2'></script>
		<script type='text/javascript' src='..\js\isotope.min.js?ver=7.6'></script>
		<script type='text/javascript' src='..\js\touchswipe.min.js?ver=1.0'></script>
		<script type='text/javascript' src='..\js\wp-embed.min.js?ver=4.9.9'></script>
		<script type='text/javascript' src='..\js\js_composer_front.min.js?ver=5.5.2'></script>
		<script type='text/javascript' src='..\js\jquery.form.js'></script>
		<script type='text/javascript' src='mail-contact-prefactura.js'></script>

		<script>
			$('#add-product-container').on('click', function() {
				$('.product-container:last').clone(true).appendTo($('#wrapper-product'));

				($('#wrapper-product .product-container:last input[type="number"]')).val('');
			});

			$('.delete-product-container').on('click', function() {

				if ($('.product-container').length <= 1) return;
				$(this).parent('.product-container').remove();
			});
		</script>

		<script>
			$(document).ready(function() {
				$(".hideable").hide();
			});
		</script>

		<script>
			$(document).ready(function() {
				$("input[name$='cbox']").click(function() {
					var radio_value = $(this).val();
					if (radio_value == '') {
						$(".hideable").hide();
					} else if (radio_value == 'Antibacterial') {
						$("#cant1").toggle();
					} else if (radio_value == 'Macrogoteros en Y') {
						$("#cant2").toggle();
					} else if (radio_value == 'Jeringa de 20cc') {
						$("#cant3").toggle();
					} else if (radio_value == 'Jeringa de 10cc') {
						$("#cant4").toggle();
					} else if (radio_value == 'Buretas de 150ml') {
						$("#cant5").toggle();
					} else if (radio_value == 'Microgoteros en Y') {
						$("#cant6").toggle();
					} else if (radio_value == 'SealP N° 21 y 23') {
						$("#cant7").toggle();
					} else if (radio_value == 'Soluciones') {
						$("#cant8").toggle();
					} else if (radio_value == 'Jeringas de 5cc') {
						$("#cant9").toggle();
					} else if (radio_value == 'Jeringas de 3cc') {
						$("#cant10").toggle();
					} else if (radio_value == 'Jeringas de 1cc') {
						$("#cant11").toggle();
					}
				});
			});
		</script>
	</div>
	</div>
</body>

</html>