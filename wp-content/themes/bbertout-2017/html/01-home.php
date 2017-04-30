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
			<li class="layer" data-depth="0.80">
				<div class="waves waves-first"></div>
			</li>
		</ul>
	</div>
	
	<div class="global-wrapper">
		
		<div class="home-access">
			<div class="home-access__logo">
				<img src="../assets/img/bbertout-logo.svg" width="120" height="150" alt="">
			</div>
			<h1 class="home-access__name">
				<a href="#" class="home-access__link">
					<span class="surname">Benjamin</span>
					<span class="name">Bertout</span>
				</a>
			</h1>
		</div>

	</div>

	<div class="wrapper main-content" id="main-content">

		<div id="main-stars" class="main-stars"></div>

		<header class="header">
			<div class="header__logo">
				<img src="../assets/img/bbertout-logo-black.svg" alt="">
			</div>

			<nav class="menu">
				<ul>
					<li><a href="#works">works</a></li>
					<li><a href="#about">about</a></li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</nav>
		</header>
		
		<!-- WORKS -->
		<section id="works" class="base-section">

			<div class="highlight__project">
				<a href="#"><img src="../assets/img/project-thumb-01.jpg" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">CCI Hauts-de-France</h2>
			</div>
			<div class="highlight__project highlight__project--alt">
				<a href="#"><img src="../assets/img/project-thumb-01.jpg" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">Première Vision Denim</h2>
			</div>
			<div class="highlight__project">
				<a href="#"><img src="../assets/img/project-thumb-01.jpg" alt="" class="highlight__project__img"></a>
				<h2 class="highlight__project__title">Cofel Serta Literie</h2>
			</div>

			<div class="base-bloc">
				<p>Some of the clients for whom I had the chance to work with :</p>
				<div class="clients__list">
					<a href="#" class="client__logo"><img src="http://placehold.it/80x80" alt=""></a>
					<a href="#" class="client__logo"><img src="http://placehold.it/80x80" alt=""></a>
					<a href="#" class="client__logo"><img src="http://placehold.it/80x80" alt=""></a>
					<a href="#" class="client__logo"><img src="http://placehold.it/80x80" alt=""></a>
				</div>
			</div>

		</section>
		
		<!-- ABOUT -->
		<section id="about" class="base-section">

			<div class="base-bloc">
				<p>I'm a french frontend developper from Paris. Currently working for <a href="https://beapi.fr/" class="mask-effect">Be API</a>, I'm also freelance so feel free to contact me if you have small projects !</p>

				<p>Other than that, I'm a hardcore kid (yes, I listen to "<a href="https://www.youtube.com/watch?v=H6wYuhLxXm8" class="mask-effect">screaming people</a>") of 28 years old, traveller, food lover, gamer, brewer, musician... and plenty of others stuff.</p>
			</div>
		
		</section>
		
		<!-- CONTACT -->
		<section id="contact" class="base-section">
		</section>

	</div>


			
<?php include 'footer.php'; ?>