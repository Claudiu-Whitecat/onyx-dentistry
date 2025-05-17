<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Onyx-Dentistry Mesaj Trimis</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/fonts/styles.css">
	<link rel="stylesheet" href="./assets/reset.css">
	<link rel="stylesheet" href="./assets/main.min.css?v=2">
</head>
<body>
<header>
	<div class="container-header">
		<a href='index.php'>
			<div class="logo-holder">
				<img class="main-logo mobile" src="./assets/images/main-logo-portrait.svg"
					 alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async" />
				<img class="main-logo desktop" src="./assets/images/main-logo-landscape.svg"
					 alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async" />
			</div>
		</a>

		<address class="social-links">
			<ul>
				<li>
					<a class="social-link" href="https://www.facebook.com/profile.php?id=100089030559547" target="_blank">
						<img class="social-link--image" src="./assets/images/icon-social-facebook.svg" alt="Facebook Icon"
							 loading="eager" decoding="async" />
					</a>
				</li>
				<li>
					<a class="social-link" href="https://www.instagram.com/onyxdentistry/" target="_blank"><img
						class="social-link--image" src="./assets/images/icon-social-instagram.svg" alt="Instagram Icon"
						loading="eager" decoding="async" /></a>
				</li>
				<li>
					<a class="social-link" href="https://www.tiktok.com/@onyxdentistry" target="_blank"><img
						class="social-link--image" src="./assets/images/icon-social-tiktok.svg" alt="Tiktok Icon"
						loading="eager" decoding="async" /></a>
				</li>
				<li>
					<a class="social-link" href="https://wa.me/40765928071" target="_blank"><img class="social-link--image"
																								 src="./assets/images/icon-social-whatsapp.svg" alt="Whatsapp Icon" loading="eager"
																								 decoding="async" /></a>
				</li>
			</ul>
		</address>
	</div>
</header>
<main>
	<section class='success'>
		<div class='container container-success'>
			<div class="wrapper-checkmark">
				<?php include('./assets/components/svgs/checkmarkSvg.php') ?>
			</div>
			<h1 class='main-heading main-heading--success'>Îți mulțumim!</h1>
			<p class='main-paragraph main-paragraph--success '>Mesajul a fost trimis cu success. Te vom contacta folosind metoda de contact aleasă în cel mai scurt timp.</p>
			<a href='index.php' class='button'>
				Către prima pagină
			</a>
		</div>
	</section>
</main>
<footer>
	<div class="container">
		<div class="copy">Copyright &#169; <?= date('Y') ?> Onyx Dentistry.</div>
		<p>Toate drepturile rezervate.</p>
	</div>
</footer>
</body>
</html>