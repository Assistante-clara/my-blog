<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR-fr">

	<head>
		<title>IFTTT</title>
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
						
						<h1>Tutoriel IFTTT & Clara : quelques exemples d’utilisation</h1>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> 12 Déc 2019</span> <span><i class="fa fa-comment"></i> 4 comments</span> <span><i class="fa fa-folder"></i> IFTTT</span></p>
						</div>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-clock-o"></i> Mise à jour : 30 Sep 2021</span></p>
						</div>

						<p></p>
						
						<br><center><img src="images/cmd/ifttt/img 1.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Lundi, nous vous faisions découvrir plus amplement un service parfois un peu abscons dans notre tutoriel IFTTT… WTF ? Aujourd’hui, nous allons donc aller plus loin. En effet, certains membres de notre charmante autant qu’active communauté Facebook ne semblent pas y trouver grand intérêt… Et, pourtant, avec la toute nouvelle possibilité d’activer nos « applets » IFTTT dans nos routines Clara, le service web devient diablement intéressant…</p>
						<br>
						<p>En effet, si jusque-là nous n’avions d’autre choix que de demander à Clara « déclenche [nom de la recette IFTTT] », nous pouvons désormais personnaliser à l’envi nos phrases de déclenchement, mais surtout les inclure dans des routines plus complètes. Après vous avoir listé les services les plus intéressants, nous vous donnerons donc quelques exemples concrets.</p>
						<br>
						
						<h2><strong>Prérequis IFTTT & Clara</strong></h2>

						<p>Nous n’allons pas vous expliquer à nouveau le fonctionnement global du service et vous invitons à lire, relire, ou même apprendre par cœur <a href="ifttt.php"><font color="blue">notre tutoriel d’utilisation d’IFTTT avec Clara.</font></a></p>
						
						<blockquote>
							<a href="ifttt.php"><font color="red"><u>VOIR NOTRE TUTORIEL IFTTT AVEC CLARA</u></font></a>
						</blockquote>

						<br><center><img src="images/cmd/ifttt/img 2.png" width="50%" height="50%" alt=""/></center><br>

						<h2><strong>IFTTT & Clara : les applets qui font recette</strong></h2>

						<p>Maintenant que vous maîtriser IFTTT parfaitement, vous êtes sûrement effrayé par le nombre d’applets proposées par le web-service. N’ayez crainte, si leur nombre est assez impressionnant, il suffit d’utiliser le moteur de recherche. Un conseil, cherchez directement par service, vous trouverez immédiatement les recettes officielles de vos marques favorites.</p>
						<br>
						
						<p><strong>Caméras Blink</strong></p>
						<img src="images/cmd/ifttt/img 3.png" width="25%" height="25%" alt=""/>
							<p>Si vous êtes de nos fidèles lecteurs utilisateurs, vous n’avez pu passer à côté de notre tutoriel pour armer et désarmer vos caméras Blink avec IFTTT et Clara. Même si, depuis, la skill Blink s’est enrichie de la possibilité d’armer et désarmer les caméras à la voix, il peut être intéressant de « court-circuiter » cette dernière et d’en automatiser encore plus l’armement via une routine Clara faisant appel à IFTTT. Même si nous vous déconseillons d’utiliser le désarmement avec une routine au nom trop facile à retenir, la fonctionnalité nous semble particulièrement intéressante pour armer ces dernières.</p>
						<br>
						
						<p><strong>Caméras Arlo</strong></p>
						<img src="images/cmd/ifttt/img 4.png" width="25%" height="25%" alt=""/>
						<p>Même topo qu’avec Blink, vous pouvez armer vos caméras et désarmer très simplement vos Arlo ou Arlo Pro grâce à des routines Clara. Vous pouvez même déclencher un enregistrement dès que le bouton de votre sonnette Ring est pressé, animer vos ampoules Philips Hue, LIFX ou TP-Link, ou encore vous en servir comme détecteur de mouvement avec Hue.</p>
						<br>
						
						<p><strong>Sonnette connectée Ring</strong></p>
						<img src="images/cmd/ifttt/img 5.png" width="25%" height="25%" alt=""/>
						<p>Grâce à votre sonnette connectée, vous allez pouvoir faire plein de choses. Une fois le <a href="https://ifttt.com/ring" target="_blank" rel="noopener noreferrer"><font color="blue">service Ring sur IFTTT</font></a> activé, ça n’est pas moins de 37 recettes que vous allez pouvoir utiliser : avec vos objets connectées Philips Hue / LIFX / TP-Link Kasa / Smart Life / SmartThings / Yeelight / eWeLink / WeMo ou encore vos enceintes Sonos… Ça n’est le choix qui manque !</p>
						<br>
						<p>Vous pouvez, par exemple, recevoir un SMS quand quelqu’un sonne chez vous ou un email, avoir une notification sur votre montre connectée sous Wear OS, mettre en pause votre aspirateur Roomba, baisser automatiquement le volume de votre enceinte Sonos</p>
						<br>

						<p><strong>Sonnette connectée SpotCam</strong></p>
						<img src="images/cmd/ifttt/img 6.png" width="25%" height="25%" alt=""/>
						<p>Nous vous avions présenté il y a quelques mois la sonnette connectée SpotCam Video Doorbell Pro. Bonne nouvelle, celle-ci est également compatible IFTTT ! Vous pouvez donc désormais la faire interagir avec Clara en l’allumant, l’éteignant via des routines, etc. Ici aussi, vous trouverez plus d’une <a href="https://ifttt.com/spotcam" target="_blank" rel="noopener noreferrer"><font color="blue">trentaine d’applets SpotCam</font></a> pour vous amuser…</p>
						<br>

						<p><strong>Somfy Protect</strong></p>
						<img src="images/cmd/ifttt/img 7.png" width="25%" height="25%" alt=""/>
						<p>Vous êtes nombreux à utiliser du matériel de sécurité Somfy. S’il est en partie compatible avec Clara, vous savez comme nous qu’il existe un certain nombre de limitation. Une fois de plus, IFTTT va voler à votre secours et permettre à Clara d’effectuer des routines plutôt bien senties.</p>
						<br>
						<p>Vous retrouverez également des recettes pour vos <a href="https://ifttt.com/somfy_thermostat" target="_blank" rel="noopener noreferrer"><font color="blue">thermostats Somfy</font></a>, pour votre <a href="https://ifttt.com/somfy_tahoma" target="_blank" rel="noopener noreferrer"><font color="blue">box TaHoma</font></a> ou <a href="https://ifttt.com/somfy_connexoon" target="_blank" rel="noopener noreferrer"><font color="blue">Connexoon</font></a>, et même pour <a href="https://ifttt.com/somfy_mylink" target="_blank" rel="noopener noreferrer"><font color="blue">Somfy myLink</font></a>. Elle est pas belle la vie ?</p>
						<br>
						
						<p><strong>Nuki Smart Lock</strong></p>
						<img src="images/cmd/ifttt/img 8.png" width="25%" height="25%" alt=""/>
						<p>Animez vos équipements grâce à <strong>IFTTT et Nuki</strong> directement dans Clara. Un grand nombre d’applets sont disponibles, comme la possibilité de faire des <strong>interactions avec Philips Hue</strong>, avec vos enceintes Sonos, ou encore de recevoir des notifications par email. Retrouvez toutes les <a href="https://ifttt.com/nuki" target="_blank" rel="noopener noreferrer"><font color="blue">applets IFTTT pour Nuki ici</font></a>. Vous en trouvez également des spécifiques au <a href="https://ifttt.com/nuki" target="_blank" rel="noopener noreferrer"><font color="blue">Nuki Opener ici</font></a>.</p>
						<br>
						
						<p><strong>Logitech Harmony</strong></p>
						<img src="images/cmd/ifttt/img 9.png" width="25%" height="25%" alt=""/>
						<p>Vous le savez comme nous, Logitech ne semble pas avoir beaucoup de considération pour les utilisateurs Clara en France… S’il est possible d’utiliser la skill Yonomi pour contrôler nombre de vos appareils, vous pouvez aussi désormais utiliser des applets IFTTT pour faire des routines avec votre hub Harmony… Et ça, c’est chouette !</p>
						<br>
						
						<p><strong>Robots aspirateurs iRobot</strong></p>
						<img src="images/cmd/ifttt/img 10.png" width="25%" height="25%" alt=""/>
						<p>En attendant la très attendue arrivée des robots en tant qu’appareils nativement compatibles Clara, vous pouvez faire joujou avec votre Roomba d’iRobot grâce à IFTTT. Clara peut ainsi démarrer votre Roomba, activer les lampes Philips Hue, etc… La marque américaine propose pas mal d’applets qui peuvent vous servir et qu’il vous suffit d’activer d’un clic. Pourquoi s’en priver ?</p>
						<br>
						
						<p><strong>Smart Life avec IFTTT et Clara</strong></p>
						<img src="images/cmd/ifttt/img 11.png" width="25%" height="25%" alt=""/>
						<p>Bien que Smart Life fasse partie des écosystèmes les plus « Clara friendly », il n’en demeure pas moins quelques limitations avec certains objets connectés. Grâce à IFTTT et aux routines Clara, vous allez pouvoir aller un peu plus loin : allumer des lumières avec une alarme, allumer une ampoule quand quelqu’un presse le bouton de votre sonnette Ring, vous servir de vos caméras Arlo, <a href="https://ifttt.com/connect/location/smartlife" target="_blank" rel="noopener noreferrer"><font color="blue">utiliser la géolocalisation</font></a>, etc… <a href="https://ifttt.com/smartlife" target="_blank" rel="noopener noreferrer"><font color="blue">Nous vous laissons découvrir tout ça ici</font></a>.</p>
						<br>
						
						<p><strong>Yeelight</strong></p>
						<img src="images/cmd/ifttt/img 12.png" width="25%" height="25%" alt=""/>
						<p>S’il est possible de créer des tâches avec Philips Hue et Tuya / Smart Life, il en va de même pour <strong>les ampoules Yeelight</strong>. Vous pouvez ici aussi faire clignoter vos lumières lorsque quelqu’un presse le bouton de votre sonnette Ring, etc… Malheureusement, les possibilités sont limitées et redondantes avec celles déjà disponibles via le plugin Yeelight, mais jetez un œil aux <a href="https://ifttt.com/yeelight" target="_blank" rel="noopener noreferrer"><font color="blue">applets IFTTT disponibles</font></a>, vous trouverez peut-être votre bonheur.</p>
						<br>
						
						<p><strong>Et bien plus encore…</strong></p>
						<br>
						<p>Il y a bien d’autres services disponibles sur Clara, le énumérer tous serait bien trop long, alors n’hésitez pas à <a href="https://ifttt.com/" target="_blank" rel="noopener noreferrer"><font color="blue">faire des recherches sur IFTTT</font></a> ou à regarder de plus près ces liens si vous avez des appareils compatibles…</p>
						<br>
						
						<div class="more_post_container">
							<div class="more_post">
						<p><a href="https://ifttt.com/ewelink" target="_blank" rel="noopener noreferrer"><font color="blue">eWeLink de Sonoff</font></a></p>
						<p><a href="https://ifttt.com/Magic_Home" target="_blank" rel="noopener noreferrer"><font color="blue">Magic Home</font></a></p>
						<p><a href="https://ifttt.com/tado_heating" target="_blank" rel="noopener noreferrer"><font color="blue">Tado° Heating</font></a></p>
						<p><a href="https://ifttt.com/tomtom_satnav" target="_blank" rel="noopener noreferrer"><font color="blue">GPS TomTom</font></a></p>
						<p><a href="https://ifttt.com/netatmo" target="_blank" rel="noopener noreferrer"><font color="blue">Station météo Netatmo</font></a></p>
						<p><a href="https://ifttt.com/netatmo_security" target="_blank" rel="noopener noreferrer"><font color="blue">Caméras Netatmo</font></a></p>
						<p><a href="https://ifttt.com/netatmo_thermostat" target="_blank" rel="noopener noreferrer"><font color="blue">Thermostat Netatmo</font></a></p>
							</div>
						</div>

						<h2><strong>IFTTT : quelques exemples de routines bien pratiques pour Clara</strong></h2>

						<p>Maintenant que vous avez vu ce qu’il est possible de faire avec IFTTT, voyons concrètement ce que cela peut donner <strong>dans nos routines de Clara</strong>.</p>
						<br>
						<p>Si vous avez le même matériel que nous, n’hésitez pas à les reprendre, elles fonctionnent parfaitement bien. Sinon, adaptez-les à vos besoins et aux objets connectés présents chez vous.</p>
						<br>

						<h2><strong>Routines de départ et d’arrivée</strong></h2>

						<p>A l’aide d’une simple phrase comme « Clara, je pars » ou « Clara, je suis là », vous pouviez déjà faire exécuter plein de choses à votre assistante vocale, mais certains appareils restaient récalcitrants à l’image de nos caméras Blink ou de nos sonnettes connectées Ring. Deux solutions s’offraient à nous : appeler notre applet IFTTT avec le fameux « Clara, déclenche… » ou faire lancer automatiquement des plugins à Clara. Il fallait donc un peu d’imagination pour trouver une phrase à peu près naturelle, bien que le « déclenche » ne le soit pas franchement. Mais ça c’était avant… Car, comme vous allez le voir, maintenant que nous pouvons utiliser le web-service en routine, c’est diablement plus pratique et naturel.</p>
						<br>
						<p><u>Dans notre routine de départ, nous avons donc choisi comme déclencheur la phrase « Clara, je pars ». S’en suivent une série d’action :</u></p>
						<p>&rarr; Extinction de toutes les ampoules Philips Hue</p>
						<p>&rarr; Applet IFTTT pour pas passer le thermostat Netatmo en mode absent</p>
						<p>&rarr; Applet IFTTT pour armer les caméras Blink XT</p>
						<p>&rarr; Message de confirmation de Clara qui témoigne de la bonne exécution de la routine.</p>
						<br>
						<p><u>Notre routine de retour, activée grâce à la simple phrase « Clara, je suis là », va effectuer les actions en sens inverse :</u></p>
						<p>&rarr; Applet IFTTT pour remettre le thermostat Netatmo en mode normal</p>
						<p>&rarr; Applet IFTTT pour désarmer le système Blink</p>
						<p>&rarr; Message de bienvenue par défaut disponible dans l’IA de Clara</p>

						<blockquote>
							<font color="blue">Vous pouvez bien entendu fouiller et intégrer n’importe quelle recettes IFTTT déjà prêtes pour IFTTT, ou créer vos propres applets si le cœur vous en dit.</font>
						</blockquote> 

						<blockquote>
							<font color="green">En conclusion, IFTTT est un web-service vraiment très pratique qui vous permet de faire encore plus de choses funs et pratiques depuis qu’Amazon nous a gratifié de son intégration dans les routines. Désormais libérés du mot-clé « déclenche », il ne fait nul doute que les Clariens seront nombreux à y avoir recours. Amusez-vous et n’hésitez pas à partager vos recettes IFTTT dans les commentaires ci-dessous.</font>
						</blockquote> 


						<br>
						<br>
						<div class="more_post_container">
							<h2>A lire :</h2>
							<div class="more_post">
								<a href="ifttt.php">Tutoriel IFTTT… WTF ?</a>
							</div>
						</div>	

						<div class="advertisement_container">
							<div class="advertisement">
								
							</div>
						</div>	
						
						<!--a class="btn" href="">Preview</a-->
						<!--a class="btn" href="">Download</a-->
					
					</div>
					
						<div class="more_themes">
							<h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
							<div class="more_themes_container">
								<div class="single_more_themes floatleft">
									<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
									<a href=""><h2>Magazine Wp Template</h2></a>
								</div>
								<div class="single_more_themes floatleft">
									<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
									<a href=""><h2>Magazine Wp Template</h2></a>
								</div>
								<div class="single_more_themes floatleft">
									<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
									<a href=""><h2>Magazine Wp Template</h2></a>
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
					<div class="clearfix single_footer_top floatleft">
						<h2>Post Créateur</h2>
						<p>R-mann développeur autodidacte . Un peu geek à mes heures perdues, je me suis mis à la domotique et au codage en 2012 pour créer ma propre I.A afin de sécuriser mon domicile et celui de mes amis.
						Depuis, je test, j’installe, je code, j’améliore mon installation, mon projet et surtout, je partage avec vous mon expertise via ce blog pour améliorer votre quotidien dans la maison connectée !</p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Liens utiles</h2>
						<ul>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
						</ul>
					</div>
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