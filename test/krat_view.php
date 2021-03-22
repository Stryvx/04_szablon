<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon solid fa-home"><span>Home</span></a>
						<a href="#work" class="icon solid fa-folder"><span>Kalkulator</span></a>

					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Agata Pawluś</h1>
									<p>PAW1</p>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon solid fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<h2>Kalkulator</h2>
								</header>
								<section>
									<div class="row">
										<form action="<?php print(_APP_URL);?>/krat.php" method="get">
										<label for="id_x">Kwota zaciągniętego kredytu: </label>
										<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
										<label for="id_y">Liczba lat: </label>
										<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
										<label for="id_y">Oprocentowanie: </label>
										<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
										<input type="submit" value="Oblicz ratę" style="margin-top:1em" />
										
										</form>	
										<?php
										//wyświeltenie listy błędów, jeśli istnieją
										if (isset($messages)) {
											if (count ( $messages ) > 0) {
												echo '<ol style="margin: 2em; padding: 1em 1em 1em 2em; border-radius: 5px; background-color: #E97451; width:10em; height:auto; color:white; font-weight:bold;">';
												foreach ( $messages as $msg ) {
													echo '<li>'.$msg.'</li>';
												}
												echo '</ol>';
											}
										}
										?>

										<?php if (isset($result)){ ?>
										<div style="margin: 2em; padding: 1em; border-radius: 5px; background-color: #E97451; width:10em; height:5.5em; color:white; font-weight:bold; text-align: center;">
										<?php echo 'Wynik: '.$result; ?>
										</div>
										<?php } ?>
									</div>
								</section>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; AP</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>