<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR-fr">

	<head>
		<title>Tableau de bord</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
	</head>

	<body>
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<!--a href=""><h1><span>Mathilde</span> Blog</h1></a-->
						<a><h1><span>Assistante</span> Clara</h1></a>
					</div>
					<!-- /////// BARRE DE RECHERCHE /////// -->
					<!--div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div-->
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="installation.php">Installation</a></li>
							<li><a href="stores.php">Stores</a></li>
							<!--li id="dropdown"><a href="">XXXXXX</a>
								<ul>
									<li><a href="bin/XXXXXX.php">XXXXXX</a></li>
									<li><a href="bin/XXXXXX.php">XXXXXX</a></li>
								</ul>
							</li-->
							<li id="dropdown"><a href="multimedia.php">Vidéo</a>
								<ul>
									<li><a href="download_vlc.php">VLC</a></li>
									<li><a href="download_kodi.php">Kodi</a></li>
								</ul>
							</li>
							<li><a href="domotique.php">Domotique</a></li>
							<li><a href="tableaudebord.php">Tableau de bord</a></li>
							<li><a href="apropos.php">A propos de nous</a></li>
							<li><a href="contact.php">Contactez nous</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					
					<div class="clearfix content">
						
						<div class="base">
						
							<h1>Tableau de bord</h1>
							
							<div class="clearfix tdb_pagination">
								<nav>
									<a class="newer floatleft" href="">Précédent</a>
									<a class="older floatright" href="">Suivant</a>
								</nav>
							</div>
							
							
							<form>
								<p><label >Veuillez choisir un nom pour l'I.A :</label></p>
									<p><input type="text" id="searchTxt0"  placeholder="Clara" class="searchField"/>
									   <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt0.value,0)"></p>
							
								<p><label >Emplacement principal de vos musiques:</label></p>
									<p><input type="text" id="searchTxt1"  placeholder="C:/Users/famille/Music/" class="searchField"/>
									   <input type="submit" class="wpcf7-submit"  value="Valider" onclick="aa(searchTxt1.value,1)"></p>

								<p><label >IP du Cube Canal + :</label></p>
									<p><input type="text" maxlength="512" id="searchTxt2"  placeholder="C:\Program Files" class="searchField"/>
									   <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt2.value,2)"></p>

								<p><label >Code Alarme :</label></p>
									<p><input type="text" id="searchTxt3"  placeholder="une souris verte" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt3.value,3)"></p>
								 
								<p><label >Nom de la personne qui recois le mail d'alerte :</label></p>
									<p><input type="text" id="searchTxt4"  placeholder="Frédéic" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt4.value,4)"></p>

								<p><label >Numéro de la personne qui recois le mail d'alerte :</label></p>
									<p><input type="text" id="searchTxt5"  placeholder="0638948529" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt5.value,5)"></p>

								<p><label >Nom :</label></p>
								    <p><input type="text" id="searchTxt6"  placeholder="Frédéic" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt6.value,6)"></p>

								<p><label >api key pushbulett :</label></p>
									<p><input type="text" id="searchTxt7"  placeholder="o.xbcxbcxbcxbxcbx" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt7.value,7)">
										<strong><a href="https://www.pushbullet.com/ " target="_blank">https://www.pushbullet.com/</a></strong></p>

								<p><label >Code sms pour lancer des actions depuis un sms:</label></p>
									<p><input type="text" id="searchTxt8"  placeholder="0123456789" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt8.value,8)"></p>

								<p><label >Emplacement du DD de votre dossier programme :</label></p>
									<p><input type="text" id="searchTxt9"  placeholder="C:\Program Files" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt9.value,9)"></p>

								<p><label >Emplacement du DD de votre deuxième dossier programme:</label></p>
									<p><input type="text" id="searchTxt10"  placeholder="c:/program files (x86)" class="searchField"/>
								       <input type="submit" class="wpcf7-submit" value="Valider" onclick="aa(searchTxt10.value,10)"></p>
							</form>

							 
							
						</div>
						
					</div>
					
					
				</div>
				<div class="clearfix sidebar_container floatright">
				
					<div class="clearfix secure">

<div>
</div>
 
<h2>Accès sécurisés</h2>
<form name="form" action="single.php" method="post">
            <p>
            <label for="password">Mot de passe</label> 
            <input type="password" title="Saisissez le mot de passe" name="password" />
            <input type="submit" name="submit" value="Connexion" />
        	</p> 
	</form>

</div>
					<div class="clearfix sidebar">
						<div class="clearfix single_sidebar">
							<div class="popular_post">
								<div class="sidebar_title"><h2>Les plus populaires</h2></div>
								<ul>
									<li><a href="jarvis.php">Plugin Jarvis</a></li>
									<li><a href="coursesmathilde.php">Plugin Coursesmathilde</a></li>
									<li><a href="deezer.php">Plugin Deezer</a></li>
									<li><a href="courtoisie.php">Plugin Courtoisie</a></li>
									<li><a href="wificonnect.php">Plugin Wificonnect</a></li>
								</ul>
							</div>
							</div>
						<div class="clearfix single_sidebar category_items">
							<h2>Catégories</h2>
							<ul>
								<li class="cat-item"><a href="smartlife.php">Smart Connect</a>1</li>
								<li class="cat-item"><a href="domotique.php">Domotique</a>1</li>
								<li class="cat-item"><a href="clara.php">Assitante personnel</a>1</li>
							</ul>
						</div>
						<!--div class="clearfix single_sidebar">
							<h2>Recent Post</h2>
							<ul>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
							</ul>
						</div-->
					</div>
				</div>
			</div>
		</section>
		
		<section id="footer_top_area">
			<div class="clearfix wrapper footer_top">
				<div class="clearfix footer_top_container">
					<div class="clearfix single_footer_top floatleft">
						<h2>Post Clara</h2>
						<p>L’objectif du Projet C.L.A.R.A est la conception d’une maison intelligente et connectée à l’internet un peu dans l’esprit de l'intelligence articielle de <a href="https://fr.wikipedia.org/wiki/Iron_Man_(comics)">Tony Stark</a> avec son fameux <a href="https://fr.wikipedia.org/wiki/Edwin_Jarvis">J.A.R.V.I.S</a> ou même <a href="https://fr.wikipedia.org/wiki/Friday_(comics)">F.R.I.D.A.Y</a> .</p>
					</div>

				<!--	
					<div class="clearfix single_footer_top floatleft">
						<h2>Post Clara</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <a href="">Lorem Ipsum has been the industry</a> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				-->
				<!--	
					<div class="clearfix single_footer_top floatleft">
						<h2>Liens utiles</h2>
						<ul>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
						</ul>
					</div>
				-->	
				</div>
			</div>
		</section>
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>R-mann</span></p>
				</div>
				<div class="clearfix social floatright">
					<ul>
						<li><a class="tooltip" title="Facebook" href=""><i class="fa fa-facebook-square"></i></a></li>
						<li><a class="tooltip" title="Instagram" href=""><i class="fa fa-instagram"></i></a></li>
						<li><a class="tooltip" title="Twitter" href=""><i class="fa fa-twitter-square"></i></a></li>
						<li><a class="tooltip" title="Google+" href=""><i class="fa fa-google-plus-square"></i></a></li>
						<li><a class="tooltip" title="LinkedIn" href=""><i class="fa fa-linkedin-square"></i></a></li>
						<li><a class="tooltip" title="tumblr" href=""><i class="fa fa-tumblr-square"></i></a></li>
						<li><a class="tooltip" title="Pinterest" href=""><i class="fa fa-pinterest-square"></i></a></li>
						<li><a class="tooltip" title="RSS Feed" href=""><i class="fa fa-rss-square"></i></a></li>
						<li><a class="tooltip" title="Sitemap" href=""><i class="fa fa-sitemap"></i> </a></li>
					</ul>
				</div>
			</div>
		</section>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>	
		<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.tooltip').tooltipster();
			});
		</script>
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>		
		<script src="js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider({
					
					intervalDuration: 5000
				
				});
			});
		</script>
		
<!--

This Template is designed by WpFreeware.com Team, You are allowed to change anything you like.
Find out More Awesome template at http://www.WpFreeware.com.

-->		

	</body>
</html>
