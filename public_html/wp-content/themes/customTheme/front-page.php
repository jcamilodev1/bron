
<?php get_header('wordpress'); ?>

<?php // ↓↓↓ Loop Example  ?>
<?php if ( have_posts() ) : the_post(); ?>
    <!-- LOADER -->
		<div class="loader">
		<div class="loader__container">
			<svg class="loader__content" viewBox="25 25 50 50">
				<circle class="loader__circular" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
			</svg>
		</div>
	</div>
	<!-- END LOADER -->


    <!-- GENERAL CONTAINER -->
	<div class="container container--general">

		<!-- HEADER -->
		<header class="header">
			<div class="header__container">
				<!-- LOGO -->
				<a href="#" class="logo">
					<span class="logo__text">
						Bronquisol
					</span>
				</a>
				<!-- END LOGO -->
				<!-- NAV -->
				<nav class="nav">
					<ul class="nav__list">
						<!-- NAV ITEM -->
						<li class="nav__list__item">
							<a href="#home" class="nav__list__link anchor">
								Home
							</a>
						</li>
						<!-- END NAV ITEM -->
						<!-- NAV ITEM -->
						<li class="nav__list__item">
							<a href="#products" class="nav__list__link anchor">
								Producto
							</a>
						</li>
						<!-- END NAV ITEM -->
						<!-- NAV ITEM -->
						<li class="nav__list__item">
							<a href="#" class="nav__list__link">
								Legal
							</a>
						</li>
						<!-- END NAV ITEM -->
						<!-- NAV ITEM -->
						<li class="nav__list__item">
							<a href="#" class="nav__list__link">
								Compra
							</a>
						</li>
						<!-- END NAV ITEM -->
						<!-- NAV ITEM -->
						<li class="nav__list__item">
							<a href="#maps" class="nav__list__link anchor">
								<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav__list__icon">
									<path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#00A3E6"/>
								</svg>
							</a>
						</li>
						<!-- END NAV ITEM -->
					</ul>
				</nav>
				<!-- END NAV -->
				<!-- HAMBURGER -->
				<a href="#" class="hamburgerBtn">
					<span class="hamburgerBtn__line"></span>
					<span class="hamburgerBtn__line"></span>
					<span class="hamburgerBtn__line"></span>
				</a>
				<!-- END HAMBURGER -->
			</div>
		</header>
		<!-- HEADER -->


		<!-- BANNER -->
		<section class="banner" id="home">
			<div class="banner__container">
				<div class="banner__info">
					<h2 class="banner__title" data-aos="fade-up" data-aos-delay="250">
						Encuentra la tos
					</h2>
					<h3 class="banner__subtitle banner__subtitle--arrows">
						DESLiza
					</h3>
				</div>
			</div>
			<!-- PANORAMIC -->
			<section class="panoramic">
				<img src="./img/panoramic" usemap="#image-map" class="panoramic__img">
				<img src="img/panoramic/panoramic-1b.jpg" alt="" class="panoramic__img panoramic__img--back hide">

				<map name="image-map">
					<area target="" alt="" title="" href="#" coords="654,212,832,495" shape="rect" class="panoramic__link">
				</map>
			</section>
			<!-- END PANORAMIC -->
			<!-- CURSOR -->
			<div class="cursor">
				<img src="img/icons/hand--1.svg" alt="" class="cursor__icon">
			</div>
			<!-- END CURSOR -->
		</section>
		<!-- END BANNER -->

		<!-- CONTAINER BOXES -->
		<div class="container container--boxes">
			<div class="container__wrapper">
				<div class="container__left">
					<div class="container__square">
						<h2 class="container__title">
							no le tengas miedo a la tos, <span class="dBlue"> combátela con bronquisol. </span>
						</h2>
					</div>
				</div>
				<div class="container__right">
					<div class="container__mini">
						<p class="container__mini__text">
							Expulsa las flemas
						</p>
						<span class="container__mini__divider"></span>
						<p class="container__mini__text">
							Alivia la tos
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTAINER BOXES -->

		<!-- CONTAINER PRODUCTS -->
		<div class="container container--products" id="products">
			<div class="container__wrapper">
				<div class="container__left">
					<!-- CAROUSEL -->
					<section class="swiper-container carousel carousel--products">
						<div class="swiper-wrapper carousel__wrapper">
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-1">
									<img src="img/products/product-1.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-2">
									<img src="img/products/product-2.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-3">
									<img src="img/products/product-3.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-4">
									<img src="img/products/product-1.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-5">
									<img src="img/products/product-2.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
							<!-- CAROUSEL ITEM -->
							<article class="swiper-slide carousel__item">
								<picture class="carousel__item__picture" data-info="product-6">
									<img src="img/products/product-3.png" alt="" class="carousel__item__img">
								</picture>
							</article>
							<!-- END CAROUSEL ITEM -->
						</div>
						<div class="swiper-button-next"></div>
    					<div class="swiper-button-prev"></div>
					</section>
					<!-- END CAROUSEL -->
				</div>
				<div class="container__right">
					<!-- INFO BOXES -->
					<section class="infoBoxes">
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-1">
							<h3 class="infoBox__title">
								Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur gravida facilisis. In aliquam quis id diam, ac nibh lobortis. Imperdiet donec posuere sagittis ultrices sed a non. Orci amet suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-2">
							<h3 class="infoBox__title">
								2 Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-3">
							<h3 class="infoBox__title">
								3 Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur gravida facilisis. In aliquam quis id diam, ac nibh lobortis. Imperdiet donec posuere sagittis ultrices sed a non. Orci amet suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-4">
							<h3 class="infoBox__title">
								4 Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur gravida facilisis. In aliquam quis id diam, ac nibh lobortis. Imperdiet donec posuere sagittis ultrices sed a non. Orci amet suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-5">
							<h3 class="infoBox__title">
								5 Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur gravida facilisis. In aliquam quis id diam, ac nibh lobortis. Imperdiet donec posuere sagittis ultrices sed a non. Orci amet suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
						<!-- INFO BOX -->
						<article class="infoBox" data-info="product-6">
							<h3 class="infoBox__title">
								6 Id ac aliquet elementum nisl sed
							</h3>
							<h4 class="infoBox__subtitle">
								Purus porta.
							</h4>
							<p class="infoBox__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. At amet sed id morbi commodo vulputate gravida. Cursus ut lorem vel et ut consectetur gravida facilisis. In aliquam quis id diam, ac nibh lobortis. Imperdiet donec posuere sagittis ultrices sed a non. Orci amet suspendisse.
							</p>
							<!-- PSEUDO TABLE -->
							<section class="pTable mt30">
								<div class="pTable__body">
									<div class="pTable__row">
										<div class="pTable__cell">
											adolescentes y adultos
										</div>
										<div class="pTable__cell">
											+12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 2 a 6 años
										</div>
										<div class="pTable__cell">
											2 - 6
										</div>
										<div class="pTable__cell">
											2.5 ml a 5 ml cada 8 horas
										</div>
									</div>
									<div class="pTable__row">
										<div class="pTable__cell">
											niños de 6 a 12 años
										</div>
										<div class="pTable__cell">
											6 - 12
										</div>
										<div class="pTable__cell">
											5 ml a 10 ml cada 8 horas
										</div>
									</div>
								</div>
							</section>
							<!-- END PSEUDO TABLE -->
						</article>
						<!-- END INFO BOX -->
					</section>
					<!-- END INFO BOXES -->
				</div>
			</div>
		</div>
		<!-- END CONTAINER PRODUCTS -->

		<!-- CONTAINER TEXT -->
		<div class="container container--text">
			<div class="container__wrapper">
				<p class="container__text max1000">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et euismod felis, facilisis consectetur vitae consectetur bibendum aliquet. Vulputate laoreet enim blandit placerat. Semper ornare ornare viverra amet. At in consequat diam hac. Sagittis gravida pretium eget facilisis ornare vulputate. Vitae phasellus risus, feugiat arcu id habitasse. Aenean convallis et sit gravid ulrmiea et.
				</p>
			</div>
		</div>
		<!-- END CONTAINER TEXT -->

		<!-- CONTAINER MAP -->
		<div class="container container--map" id="maps">
			<div class="container__wrapper">
				<h2 class="container__title max800 ml0">
					Encuentra EL ALIVIO DE BRONQUISOL EN TU <span class="blue"> DROGUERÍA DE CONFIANZA </span>
				</h2>
				<div class="container dF">
					<div class="container__left">
						<!-- MAP -->
						<section class="map" id="map"></section>
						<!-- END MAP -->
					</div>
					<div class="container__right">
						<!-- CAROUSEL -->
						<section class="swiper-container carousel carousel--columns">
							<div class="swiper-wrapper">
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												1 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												2 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												3 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												4 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												5 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
								<!-- CAROUSEL ITEM -->
								<article class="swiper-slide carousel__item">
									<!-- CARD -->
									<a href="https://www.farmatodo.com.co/" class="card">
										<div class="card__top">
											<picture class="card__picture">
												<img src="img/places/place-1.jpg" alt="" class="card__img">
											</picture>
										</div>
										<div class="card__content">
											<h3 class="card__title">
												6 Farmatodo
											</h3>
											<p class="card__text">
												Cra 000 # 00 - 00
											</p>
											<p class="card__text">
												Horario de atención: <span class="mlA"> 8am - 5pm </span>
											</p>
											<span class="card__link">
												www.farmatodo.com.co
											</span>
											<span class="card__go">
												<picture class="card__go__picture">
													<img src="img/icons/arrow--turned.svg" alt="" class="card__go__icon">
												</picture>
												<p class="card__go__text">
													Ruta
												</p>
											</span>
										</div>
									</a>
									<!-- END CARD -->
								</article>
								<!-- END CAROUSEL ITEM -->
							</div>
							<div class="swiper-pagination"></div>
						</section>
						<!-- END CAROUSEL -->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTAINER MAP -->


		<!-- FOOTER -->
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__left">
					<!-- LOGO -->
					<a href="#" class="logo">
						<span class="logo__text">
							Bronquisol
						</span>
					</a>
					<!-- END LOGO -->
				</div>
				<div class="footer__right">
					<span class="footer__goUp">
						Volver arriba
					</span>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->


	</div>
	<!-- END GENERAL CONTAINER -->
	
<?php endif; ?>

<?php get_footer(); ?>