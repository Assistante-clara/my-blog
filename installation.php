<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR-fr">

	<head>
		<title>Installation</title>
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
						<div class="content_title"><h2>Installation</h2></div>
						<div class="single_work_page clearfix">
							<div class="work_single_page_feature"><img src="images/face/images6.jpg"/></div>
							<div class="work_meta clearfix">
								<p class="floatleft">Mise à jour le : <span> 14 Jan 2022</span> Tutoriel de : <span>Admin</span></p>
							</div>
							<div class="single_work_page_content">
						<br>
						<p><strong>Installation de Clara</strong></p>
						<br>
						<p>Installation de Clara est vraiment très simple</p>
						<p>Il vous suffit de télécharger le software de Clara par rapport à votre version de Windows</p>
						<br>
						<p>Téléchargez <a href="https://github.com/Assistante-clara/ClaraIA" target="_blank" rel="noopener noreferrer"><font color="blue">ici</font></a>, si votre version Windows est inférieur à Windows 10.</p>
                        <br>
                        <p>Téléchargez <a href="https://github.com/Assistante-clara/ClaraIA2" target="_blank" rel="noopener noreferrer"><font color="blue">ici</font></a>, si votre version Windows est supérieur à Windows 10.</p>
                        <br>

						<p>Dézippez-le et installez-le à la base du Disque Dur C://</p>
						<p>Toute installation sur un disque dur ayant donc un autre nom posera un problème</p>
						<br>
						<p>Il vous suffira d'ouvrir le dossier Clara et de double-cliquer sur l'icône de Clara IA.</p>
						<p>Chrome doit être installer sur le PC.</p>
						<br>
						<p><strong>Le 1ère lancement</strong></p>
						<br>		
						<p>Une autorisation vous sera demander afin d'autoriser le lancement du CMD</p>	
						<p>Puis une page Google Chrome s'ouvrera</p>
						<p>Cliquez sur <strong>Paramètres avancé</strong> afin de pouvoir accéder à la suite de la page</p>
						<br>
						<p><strong>Comme celle-ci :</strong></p>
						<br>
						<center><img src="images/feuille_1.png" alt=""/></center>
						<br>
						<p>Maintenant cliquez sur <strong>Continuer sur la site 127.0.0.1</strong> afin de pouvoir accéder à la page Web de Clara</p>
						<br>
						<center><img src="images/feuille_2.png" alt=""/></center>	
						<br>
						<p>Puis autoriser accés au micro</p>
						<p>Cette manipulation n'est a faire qu'une seule fois.</p>
						<br>
						<p>Maintenant ouvrez une nouvelle page chrome sous :   https://localhost:4300</p>
						<p>Aller sur <img src="images/parametre.png" alt=""/> Personnaliser et controler Google Chrome, puis allez sur <img src="images/parametre2.png" alt=""/> et autoriser "caméra", "micro", "JavaScript", "Appareil MIDI", "Contenu non sécurisé" et "présence de l'utilisateur".</p>
						<p>Ceci afin de permettre à la page d"afficher et de communiquer avec le serveur Node JS Deezer, les musiques, la radio, les images...</p>
						<p>Et ceci n'est valable que pour la page chrome de ClaraIA et ne modifie en rien la sécurité lorsque vous surfez sur internet !</p>
						<p>Maintenant vous pouvez refermer la page.</p>
						<br>
						<br>
						<p>Pour modifier le nom de Clara: il vous suffit d'aller dans le dossier :  ClaraIA/script/wsrnode.js  à la ligne</p>
						<p>ClaraIANom="Clara"</p>
						<p>Modifiez le prénom et surtout n'oubliez pa la Majuscule.</p>
						<br>
						<p>Pour l'ajout des plugins, il vous suffit d'aller sur le <a href="stores.php"><font color="blue"><strong>store</strong></font></a></p>
						<p>Télécharger le plugin voulu</p>
						<p>Dézippez le dossier télécharger et ajouter le dans Clara via ce chemin : ClaraIA/plugins</p>
						<p>Fermez chrome et node.js</p>
						<p>Et relancez le système par l'icone ClaraIA pour qu'il soit pris en compte</p>
						<br>
						<br>
						<p><font color="red">Attention les dossiers doivent être renommés en enlevant <strong>-master</strong> ou <strong>-main</strong></font></p>
						<br>
						<br>
						<p><strong>Le multiroom</strong></p>		
						<br>
						<p><strong>Le principe :</strong></p>		
						<p>Un pc <strong>maitre</strong> là où vous venez d'intaller Clara va servir de serveur</p>
						<p>Et donc les autres <strong>esclaves</strong> pc/windows/linux, tablettes, montres, smartphones, ou autres.............</p>
						<p>sur lesquels on ouvrira une simple page web Google Chrome</p>
						<br>
						<p>Soit si votre pc maitre (serveur) est 192.168.0.10</p>
						<p>l'adresse de la page sera <strong>https://192.168.0.10:4300</strong></p>
						<br>
						<p>Et c'est tout !!!</p>
						<br>
						<p>Votre client <strong>esclave</strong> communique dans les deux sens avec le <strong>maitre</strong></p>
						<br>
						<p>Pour un client pc il suffira alors de parler comme sur le maitre</p> 
						<p>Pour un client smartphone/tablette (ios) il faudra cliquer sur le micro, pour activer la reco ( les smartphones et tablettes étant trop sensible au bruit)</p>
						<br>
						<p>Donc maintenant la voix passe par Google Chrome</p>
						<br>
						<!--
						<p><strong>Certains plugins ont besoin de certains renseignements que le système ne peut deviner</strong></p>
						<br>
						<p><strong>alarme</strong> modifiez votre nom et le code de déactivation ainsi que votre numéro de </p>
						<p>téléphone sur le quel le plugin vous alertera</p>

						<p><strong>courses</strong> modifiez votre nom et votre numéro de téléphone</p>

						<p><strong>courtoisie</strong> regardez comment sont fait les fichier .json pour modifier à votre quise</p>

						<p><strong>deezer</strong> il vous suffira de créer un compte Deezer et de cliquer sur connecter</p> 
						
						<p><strong>interphone</strong> modifiez les IP en fonction de vos pièces</p>

						<p><strong>musique</strong> modifiez le chemin de vos musiques (plus trés utile avec le plugin deezer)</p>

						<p><strong>recupiden</strong> permet une fois votre compte créer pour sms (voir tuto sur smsmathilde),</p> 
						<p>entrez votre clé dans le fichier recupiden.js, enregistrez et relance Clara</p>
						<p>attendez quelques instants et vous obtiendrez vos identifaiant dans le CMD à récuperer et à coller dans le plugin sms</p>

						<p><strong>wificonnect</strong> rentrez vos IP se qui permettra de déclencher des scénarios quand vous</p>
						<p>quand vous vous approchez de votre box et que celle-ci vous détecte</p>
						-->
								
							</div>
							
						</div>
							<div class="more_works">
								<h2>Quelques liens trés utiles  <i class="fa fa-thumbs-o-up"></i></h2>
								<div class="more_works_container">
									<div class="single_more_works floatleft">
										<img src="images\logo\kodi.png" alt=""/>
										<a href="https://kodi.tv/download"><h2><center>KODI</center></h2></a>
									</div>
									<div class="single_more_works floatleft">
										<img src="images\logo\vlc media player.png" alt=""/>
										<a href="https://vlc-media-player.org/modules/telecharge/"><h2><center>VLC</center></h2></a>
									</div>
									<div class="single_more_works floatleft">
										<img src="images\logo\windows media center.png" alt=""/>
										<a href="https://windows-media-player.fr.uptodown.com/windows/telecharger"><h2><center>Windows Média Center</center></h2></a>
									</div>

								</div>
							</div>
					</div>
					
				</div>
				<div class="clearfix sidebar_container floatright">
				
					<!--div class="clearfix newsletter">
						<form>
							<h2>S'INSCRIRE AUX NEWSLETTERS</h2>
							<input type="text" placeholder="Nom" id="mce-TEXT"/>
							<input type="email" placeholder="Email" id="mce-EMAIL"/>
							<input type="submit" value="Envoyer" id="mc-embedded-subscribe"/>
						</form>
					</div-->
					<div class="clearfix sidebar">
						<div class="clearfix single_sidebar">
							<h2>Plugins</h2>
							<ul>
									<li><a href="bin/alarme.php">Alarme</a></li>
									<li><a href="bonjour.php">Bonjour</a></li>
									<li><a href="bin/calcul.php">Calcul</a></li>
									<li><a href="bin/courses.php">Courses</a></li>
									<li><a href="bin/courtoisie.php">Courtoisie</a></li>
									<li><a href="bin/cyrano.php">Cyrano</a></li>
									<li><a href="bin/deezer.php">Deezer</a></li>
									<li><a href="bin/epeler.php">Epeler</a></li>
									<li><a href="bin/horoscope.php">Horoscope</a></li>
									<li><a href="bin/infomathilde.php">Info</a></li>
									<li><a href="bin/interphone.php">Interphone</a></li>
									<li><a href="bin/jarvis.php">Jarvis</a></li>
									<li><a href="bin/lectureenfant.php">Lectureenfant</a></li>
									<li><a href="bin/merci.php">Merci</a></li>
									<li><a href="bin/meteo.php">Meteo</a></li>
									<li><a href="bin/minuteur.php">Minuteur</a></li>
									<li><a href="bin/multimedia.php">Multimédia</a></li>
									<li><a href="bin/musique.php">Musique</a></li>
									<li><a href="bin/navigation.php">Navigation</a></li>
									<li><a href="bin/programme.php">Programme</a></li>
									<li><a href="bin/progtv2.php">Progtv2</a></li>
									<li><a href="bin/radio.php">Radio</a></li>
									<li><a href="bin/receivesms.php">ReceiveSMS</a></li>
									<li><a href="bin/recupiden.php">Recupiden</a></li>
									<li><a href="bin/reveil.php">Reveil1</a></li>
									<li><a href="bin/scribe.php">Scribe</a></li>
									<li><a href="bin/sms.php">Sms</a></li>
									<li><a href="bin/traduction.php">Traduction</a></li>
									<li><a href="bin/wificonnect.php">Wificonnect</a></li>
									<li><a href="bin/wiki.php">Wiki</a></li>
									<li><a href="bin/xbmc.php">Xbmc</a></li>
									<li><a href="bin/yoda.php">Yoda</a></li>
									</ul>

						</div>
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
						<h2>Recent Post</h2>
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
		
	</body>
</html>
