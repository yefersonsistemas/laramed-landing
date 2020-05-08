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

	/* @media (min-width: 992px) and (max-width: 1080px) {
            .idiomas {
                display: grid !important;
                height: 100%;
                border-left: 1px solid #fff;
                padding-left: 5px;
                margin-top: 29px;
                margin-right: 5px;
            }
        } */

/* @media (min-width:1081px) {
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
} */
</style>
<header>
	<meta charset="UTF-8">
</header>

<div id="slide-out-widget-area-bg" class="slide-out-from-right dark"></div>

<div id="slide-out-widget-area" class="slide-out-from-right" data-dropdown-func="separate-dropdown-parent-link" data-back-txt="Back">
	<div class="inner-wrap">
		<div class="inner" data-prepend-menu-mobile="true">
			<a class="slide_out_area_close" href="#">
				<span class="close-wrap">
					<span class="close-line close-line1"></span>
					<span class="close-line close-line2"></span>
				</span>
			</a>

			<div class="off-canvas-menu-container mobile-only">

				<ul class="menu">
					<li>
						<a href="productos-100-laramed.php" class="flashit">Nuevo producto</a>
					</li>
					<li <?= ($activepageresponsive == "index") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 menu-item-17"' : 'class ="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 menu-item-17"' ?>>
						<a href="index.php">Home</a>
					</li>
					<li <?= ($activepageresponsive == "about") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95 current-menu-item"' : 'class ="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"' ?>>
						<a href="about.php">About us</a>
					</li>
					<li <?= ($activepageresponsive == "products") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213 current-menu-item"' : 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"' ?>>
						<a href="productos-100-laramed.php">Products</a>
					</li>
					<li <?= ($activepageresponsive == "contact-us") ? 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216 current-menu-item"' : 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216"' ?>>
						<a href="contact-us.php">Contact us</a>
					</li>
					<!-- <li class="idiomas"> 
						<a href="" class="nav-link text-white py-0 px-0 pr-1" style="display: inline-block;">
							ES <img class="" src="img/banderas_laramed/spain_idioma_jak.webp" alt="">
						</a>
						<a href="usa/index.php" class="nav-link text-white py-0 px-0" style="display: inline-block;">
							EN <img class="" src="img/banderas_laramed/usa_idioma_jak.webp" alt="">
						</a>
					</li> -->
				</ul>

				<ul class="menu secondary-header-items"></ul>
			</div>

			<div id="text-2" class="widget widget_text">
				<h4>Any Concerns?</h4>
				<div class="textwidget">
					<p>Visit us</p>
				</div>
			</div>

			<div id="text-4" class="widget widget_text">
				<div class="textwidget">
					<h4>LOCATE US</h4>
					<div class="textwidget">
						<p>Urb. El Parque<br>
							Edif. El Impulso<br>
							Floor 3 - Office 3<br>
							Barquisimeto, Venezuela</p>
						<p>Telf: <a href="tel:+582518140393">(+58) 251 814 0393 </a><br>
							Email: <a href="mailto:supervisorcv@laramed.net">supervisorcv@laramed.net</a><br>

					</div>
				</div>
			</div>
		</div>
		<div class="bottom-meta-wrap">
			<ul class="off-canvas-social-links"></ul>
		</div>
	</div>
</div>