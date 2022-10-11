<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Olivia Cros, com&eacute;dienne">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
        <title>Olivia Cros</title>
        <link rel="stylesheet" href="css/gallery.css">
        <link rel="stylesheet" href="css/main.css">    
        <script type="text/javascript" src="js/gallery.js"></script>
        <script type="text/javascript" src="js/swipe.js"></script>
    </head>
    <body>
        <header id="top">
            <nav>
                <!-- Top fixed menu -->
                <ul>
                    <li><a href="#top">Accueil</a></li>
                    <li><a href="#gallery">Photos</a></li>
                    <li><a href="#media">M&eacute;dia</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="accueil">
                <img src="img/logo-text.png" id="logo" alt="logo" />
                <img src="img/photo_accueil.jpg" id="portrait" alt="Portrait" >
            </section>

            <section id="gallery">
                <div id="target" class="contain">
                    <button class="close" onclick="openGallery(); return false;">&nearr;</button>
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
            </section>

            <section id="media">
                <div>
                    <h3>D&eacute;mo vid&eacute;o</h3>
                    <object id="youtube-demo" data="https://www.youtube-nocookie.com/embed/JxkFXJ_pThk"
                            title="Bande démo vidéo, Olivia Cros" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></object>
                </div>
                <div>
                    <h3>D&eacute;mo audio</h3>
                    <audio controls src="./files/bande-demo-olivia-cros.mp3">
                        <p>
                        Votre navigateur n'a pas le support audio HTML5. <br />
                        <a href="./files/bande-demo-olivia-cros.mp3">Cliquez ici</a> pour t&eacute;l&eacute;charger le fichier &agrave; la place.
                        </p></audio>
                </div>
            </section>

            <section id="contact">
				<div class="form">
					<p>Pour me joindre, laissez vos coordonn&eacute;es ci-dessous et je vous recontacterai sous peu.</p>
					<form method="post" action="contact.php">
						<input title="Nom" type="text" size="18" maxlength="60" name="noms" placeholder="Nom et pr&eacute;nom" required> <br />
						<input title="Telephone" type="tel" size="18" maxlength="20" name="tel" title="Chiffres de 0 &agrave; 9, s&eacute;par&eacute;s ou non par un point, un tiret ou un espace. Codes pays accept&eacute;s." placeholder="Num&eacute;ro de t&eacute;l&eacute;phone" required><br />
						<input title="Envoyer" type="submit" value="Envoyer" />
					</form>
				</div>
				<div class="form mobile-hide">
					<p>Si vous pr&eacute;f&eacute;rez m'envoyer un email, utilisez ce formulaire-ci.</p>
					<form method="post" action="contact.php">
						<input type="text" size="18" maxlength="60" name="noms" placeholder="Nom et pr&eacute;nom" required> <br />
						<input type="email" size="18" maxlength="60" name="mail" placeholder="Adresse email" required> <br />
						<textarea cols="30" rows="6" name="txt" placeholder="Votre message" wrap="hard" required></textarea><br />
						<input type="submit" value="Envoyer" />
					</form>
				</div>
            </section>
        </main>

        <footer>
            <!-- Copyright -->
        </footer>
    </body>
</html>