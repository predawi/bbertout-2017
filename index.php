<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Stars -->
	<div id="stars" class="stars"></div>

	<!-- Waves -->
	<div class="waves__wrapper">
		<ul class="waves__parallax" id="waves__parallax">
			<li class="layer" data-depth="0.20">
				<div class="waves waves-fourth"></div>
			</li>
			<li class="layer" data-depth="0.40">
				<div class="waves waves-third"></div>
			</li>
			<li class="layer" data-depth="0.60">
				<div class="waves waves-second"></div>
			</li>
		</ul>
	</div>

	<!-- Global intro -->
	<div class="global-wrapper">
		<!-- Home Access -->
		<div class="home-access">
			<div class="home-access__logo">
				<img src="assets/img/bbertout-logo.svg" width="120" height="150" alt="">
			</div>
			<h1 class="home-access__name">
				<a href="#" class="home-access__link">
					<span class="surname">Benjamin</span>
					<span class="name">Bertout</span>
				</a>
			</h1>
		</div>
	</div>

	<!-- Main content -->
	<div class="wrapper main-content" id="main-content">
		<!-- Stars -->
		<div id="main-stars" class="main-stars"></div>
		<!-- Header -->
		<header class="header">
			<div class="header__logo">
				<img src="assets/img/bbertout-logo-black.svg" alt="">
			</div>
			<!-- Main nav -->
			<nav class="menu">
				<ul>
					<li><a href="#works" class="active">works</a></li>
					<li><a href="#about">about</a></li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</nav>
		</header>

		<!-- WORKS -->
		<section id="works" class="base-section">
			<div class="highlight__project highlight__project--alt">
				<a href="http://clement-lemaire.com/" target="_blank"><img src="../assets/img/clement-lemaire-thumb.jpg" data-img="clement-lemaire-thumb" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">
					<span class="highlight__project__word">Clément</span>
					<span class="highlight__project__word">Lemaire</span>
					<span class="highlight__project__word">Photo</span>
					<span class="highlight__project__panel"></span>
				</h2>
			</div>
			<div class="highlight__project">
				<a href="https://askafrenchgirl.com/" target="_blank"><img src="../assets/img/askafrenchgirl-thumb.jpg" data-img="askafrenchgirl-thumb" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">
					<span class="highlight__project__word">Ask</span>
					<span class="highlight__project__word">A</span>
					<span class="highlight__project__word">French Girl</span>
					<span class="highlight__project__panel"></span>
				</h2>
			</div>
			<div class="highlight__project highlight__project--alt">
				<a href="http://marcreidiboym.com/" target="_blank">
					<img src="assets/img/marc-reidiboym-thumb.jpg" data-img="marc-reidiboym-thumb" alt="" class="highlight__project__img">
					<h2 class="highlight__project__title">
						<span class="highlight__project__word">Marc</span>
						<span class="highlight__project__word">Reidiboym</span>
						<span class="highlight__project__word">Architecte</span>
						<span class="highlight__project__panel"></span>
					</h2>
				</a>
			</div>
			<div class="highlight__project">
				<a href="http://uncppd.com/" target="_blank"><img src="../assets/img/uncppd-thumb.jpg" data-img="uncppd-thumb" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">
					<span class="highlight__project__word">UNCPPD</span>
					<span class="highlight__project__panel"></span>
				</h2>
			</div>
			<div class="highlight__project highlight__project--alt">
				<a href="https://hautsdefrance.cci.fr/" target="_blank">
					<img src="assets/img/cci-hauts-de-france-thumb.jpg" data-img="cci-hauts-de-france-thumb" alt="" class="highlight__project__img">
					<h2 class="highlight__project__title">
						<span class="highlight__project__word">CCI</span>
						<span class="highlight__project__word">Hauts-de-France</span>
						<span class="highlight__project__panel"></span>
					</h2>
				</a>
			</div>
			<div class="highlight__project">
				<a href="https://sapeurs-pompiers35.fr/" target="_blank">
					<img src="assets/img/sdis-35-thumb.jpg" data-img="sdis-35-thumb" alt="" class="highlight__project__img">
					<h2 class="highlight__project__title">
						<span class="highlight__project__word">SDIS 35</span>
						<span class="highlight__project__panel"></span>
					</h2>
				</a>
			</div>

			<!-- div class="base-bloc">
				<p>Some of the clients for whom I had the chance to work with :</p>
				<div class="clients__list">
					<a href="#" class="client__logo"><img src="assets/img/brands/client-orange.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-produits-laitiers.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-intersport.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-bnp.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-mondadori.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-ipsen.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-national-geographic.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-airbus.png" alt=""></a>
					<a href="#" class="client__logo"><img src="assets/img/brands/client-premierevision.png" alt=""></a>
				</div>
			</div -->

		</section>

		<!-- ABOUT -->
		<section id="about" class="base-section">

			<div class="base-bloc">
				<p>I'm a french frontend freelance developper from Paris. Feel free to contact me if you need me for your projects !</p>

				<p>Other than that, I'm a hardcore kid (yes, I listen to "<a href="https://www.youtube.com/watch?v=Lei58UXZzUQ" target="_blank" class="mask-effect">screaming people</a>") of 29 years old, traveller, food lover, gamer, brewer, musician... and plenty of others stuff.</p>
			</div>

		</section>

		<!-- CONTACT -->
		<section id="contact" class="base-section">
			<div class="contact__links">
				<a href="mailto:bertout.benjamin@gmail.com" class="contact__link">
					<svg class="icon icon-envelope" aria-hidden="true" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope"></use>
					</svg>
				</a>
				<a href="https://www.linkedin.com/in/benjamin-bertout-04634441/" target="_blank" class="contact__link">
					<svg class="icon icon-linkedin" aria-hidden="true" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-linkedin"></use>
					</svg>
				</a>
				<a href="https://www.instagram.com/bbertout/" target="_blank" class="contact__link">
					<svg class="icon icon-instagram" aria-hidden="true" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
					</svg>
				</a>
				<a href="https://twitter.com/bbertout" target="_blank" class="contact__link">
					<svg class="icon icon-twitter" aria-hidden="true" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
					</svg>
				</a>
			</div>
		</section>

	</div>

<?php include 'footer.php'; ?>