<style>
	/* Flash class and keyframe animation */
	.flashit {
		color: #f2f;
		-webkit-animation: flash linear 1s infinite;
		animation: flash linear 1s infinite;
	}

	@-webkit-keyframes flash {
		0% {
			opacity: 1;
		}

		50% {
			opacity: .1;
		}

		100% {
			opacity: 1;
		}
	}

	@keyframes flash {
		0% {
			opacity: 1;
		}

		50% {
			opacity: .1;
		}

		100% {
			opacity: 1;
		}
	}

	@media (min-width: 992px) and (max-width: 1080px) {
		.idiomas {
			display: grid !important;
			height: 100%;
			border-left: 1px solid #fff;
			padding-left: 5px;
			margin-top: 29px;
			margin-right: 5px;
		}
	}

	@media (min-width:1081px) {
		.idiomas {
			border-left: 1px solid #fff;
			padding-left: 5px;
			height: 24px;
			margin-top: 29px;
			margin-right: 8px;
		}

		.idiomas {
			display: inline-block;
			margin-right: 8px;
		}
	}
</style>

<header id="top">
	<meta charset="UTF-8">
	<div class="container">
		<div class="row">
			<div class="col span_3">
				<a id="logo" href="index.php" data-supplied-ml="false">
					<img class="stnd default-logo" alt="Salient Corporate Creative" src="img\logos\Logo_Laramed_Negro.webp">
					<img class="starting-logo default-logo" alt="Salient Corporate Creative" src="img\logos\Logo_Laramed_Blanco.webp">
					<img class="starting-logo dark-version default-logo" alt="Salient Corporate Creative" src="img\logos\Logo_Laramed_Negro.webp">
				</a>
			</div>

			<div class="col span_9 col_last">
				<div class="slide-out-widget-area-toggle mobile-icon slide-out-from-right" data-icon-animation="simple-transform">
					<div>
						<a href="#sidewidgetarea" class="closed">
							<span>
								<i class="lines-button x2">
									<i class="lines"></i>
								</i>
							</span>
						</a>
					</div>
				</div>

				<nav>
					<ul class="sf-menu">
						<li>
							<a href="productos-100-laramed.php" class="flashit">Nuevo producto</a>
						</li>
						<li id="menu-item-17" <?= ($activepage == "index") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-17"' : 'class ="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 menu-item-17"' ?>>
							<a href="index.php">Inicio</a>
						</li>
						<li id="menu-item-95" <?= ($activepage == "about") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95 current_page_item"' : 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"' ?>>
							<a href="about.php">Acerca de Nosotros</a>
						</li>
						<li id="menu-item-213" <?= ($activepage == "products") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213 current_page_item"' : 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"' ?>>
							<a href="products.php">Productos</a>
						</li>
						<li id="menu-item-216" <?= ($activepage == "contact-us") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216 current_page_item"' : 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216"' ?>>
							<a href="contact-us.php">Contáctanos</a>
						</li>
						<li class="idiomas">
							<a href="" class="nav-link text-white py-0 px-0 pr-1" style="display: inline-block;">
								VZLA <img class="" src="img/banderas_laramed/spain-Vzla_idioma_jak.webp" alt="">
							</a>
							<a href="usa/index.php" class="nav-link text-white py-0 px-0" style="display: inline-block;">
								USA <img class="" src="img/banderas_laramed/usa_idioma_jak.webp" alt="">
							</a>
						</li>
					</ul>

					<!-- <div class="idiomas">
						<a href="" class="nav-link text-white py-0 px-0 pr-1" style="display: inline-block;">
							ES <img class="img-fluid" src="img/banderas_laramed/spain_idioma_jak.webp" alt="">
						</a>
						<a href="" class="nav-link text-white py-0 px-0" style="display: inline-block;">
							EN <img class="img-fluid" src="img/banderas_laramed/usa_idioma_jak.webp" alt="">
						</a>
					</div> -->

					<ul class="buttons" data-user-set-ocm="1">
						<li class="slide-out-widget-area-toggle" data-icon-animation="simple-transform">
							<div>
								<a href="#sidewidgetarea" class="closed">
									<span>
										<i class="lines-button x2">
											<i class="lines"></i>
										</i>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</nav>

				<div class="logo-spacing"><img class="hidden-logo" alt="Salient Corporate 2" src="wp-content\uploads\2017\09\logo-robot.png"></div>
			</div>
		</div>
	</div>
</header>
</script>