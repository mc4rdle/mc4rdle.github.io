<!DOCTYPE html>
<html lang="en">
	<?php include("inc/head.php"); ?>
<body>

	<!-- Pushy Menu -->
	<nav class="pushy pushy-right">
	    <div class="pushy-content">
	        <ul>
	            <!-- Submenu -->
	            <li class="pushy-submenu">
	            <li class="pushy-link"><a href="#">Item 1</a></li>
	            <li class="pushy-link"><a href="#">Item 2</a></li>
	        </ul>
	    </div>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay"></div>

	<!-- Your Content -->
	<div id="container">

		<div class="fullscreen">
			<?php include("inc/header.php"); ?>

			<div class="content">
				<div class="work">
					<a href="edo.php">Edō</a>
					<a href="4th-wall.php">4th Wall</a>
					<a href="rev-de-cuba.php">Revolución de Cuba</a>
					<a href="wolf.php">Wolf &amp; Whistle</a>
					<a href="scholars.php">Scholars &amp; Scoundrels</a>
					<a href="gavin-james.php">Gavin James Barber</a>
				</div>
			</div>
			<ul class="background" data-vide-bg="mp4: media/bg.mp4, ogv: path/to/video3, poster: img/misc/poster.jpg"
  data-vide-options="posterType: jpg, loop: true, muted: false, position: 0% 0%">
				<div class="overlay"></div>
				<div class="media">
					<li><img src="img/covers/cover1.jpg" alt=""></li>
					<li><img src="img/covers/cover2.jpg" alt=""></li>
					<li><img src="img/covers/cover3.jpg" alt=""></li>
					<li><img src="img/covers/cover4.jpg" alt=""></li>
					<li><img src="img/covers/cover5.jpg" alt=""></li>
					<li><img src="img/covers/cover6.jpg" alt=""></li>
				</div>
			</ul>

			<?php include("inc/footer.php"); ?>
		</div>

	</div><!-- Pushy -->

	<?php include("inc/scripts.php"); ?>

</body>
</html>