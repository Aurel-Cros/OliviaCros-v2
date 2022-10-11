<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>Olivia Cros - Galerie photos</title>
            <meta name="description" content="Olivia Cros, comedienne">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
			<script type="text/javascript" src="js/gallery.js"></script>
			<script type="text/javascript" src="js/swipe.js"></script>
			<link rel="stylesheet" href="css/gallery.css">
			<style>
				body
				{
					background: black;
				}
				#frame 
				{
					display: flex;
					flex-direction: row;
					justify-content: center;
					align-items: center;
					height: 80vh;
				}
				.contain
				{
					max-height: 81vh !important;
					margin-top: 0 !important;
				}
			</style>
	<body>
		<div id="frame">
		<!-- Container for the image gallery -->
			<div id="target" class="contain">
			<button class="close" onclick="self.close();">&times;</button>
				<!-- Full-width images with number text -->
				<div class="mySlides" style="display: flex;"> <!-- Init with image 1 -->
					<img src="img/slidshw1.jpg" alt="Photo Olivia 1" />
					<!-- Next and previous buttons -->
					<div class="prev" onclick="plusSlides(-1)">&#10094;</div>
					<div class="next" onclick="plusSlides(1)">&#10095;</div>
				</div>
			
				<?php
				$files = glob('img/slidshw*.jpg');
				$nb = count($files) + 1;
				for ($i=2 ; $i<$nb ; $i++)
				{
					echo
'				<div class="mySlides">
					<img src="img/slidshw'.$i.'.jpg" alt="Photo Olivia '.$i.'" />
					<!-- Next and previous buttons -->
					<div class="prev" onclick="plusSlides(-1)">&#10094;</div>
					<div class="next" onclick="plusSlides(1)">&#10095;</div>
				</div>
';
				}
				?>
			</div>

			<!-- Thumbnail images -->
			<div class="row">
				<img class="demo cursor active" src="img/slidshw1.jpg" onclick="currentSlide(1)" alt="Olivia Cros" />
				<?php
				for ($i=2 ; $i<$nb ; $i++)
				{
					echo '<img class="demo cursor" src="img/slidshw'.$i.'.jpg" onclick="currentSlide('.$i.')" alt="Olivia Cros - Photo '.$i.'" />
						';
				}
				?>
			</div>
		</div>
	</body>
</html>