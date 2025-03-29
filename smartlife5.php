<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR-fr">

	<head>
		<title>Smart Life</title>
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
						
						<h1>Tutoriel Installer un interrupteur connecté pour volets roulants</h1>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> 16 Fév 2019</span> <span><i class="fa fa-comment"></i> 4 comments</span> <span><i class="fa fa-folder"></i> Smartlife</span></p>
						</div>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-clock-o"></i> Mise à jour : 30 Sep 2021</span></p>
						</div>

						<p>Vous avez déjà automatisé les lumières, les prises, les thermostats, …, il reste les interrupteurs ! Mais ces petites bêtes ne sont pas aussi faciles à installer qu’une petite prise dans défense. Et puis, parler le langage interrupteur n’est pas si simple, d’où ce tuto qui va vous expliquer à la fois le branchement mais aussi les routines pour utiliser votre interrupteur TEEKAR (pouvant servir à d’autres interrupteurs pour volets).</p>
						<br>
						<p>Si vous décidez de faire vous-même les branchements, <font color="red"><strong>attention à bien disjoncter votre installation électrique</strong></font>. C’est bien de se tenir au courant, mais mieux de ne pas y rester accroché…</p>
						<br>
						
						<h2><strong>L’installation physique de l’interrupteur</strong></h2>
						
						<p>Que trouvons nous dans le carton ? L’<strong>interrupteur, deux vis et un guide d’installation rapide</strong> en anglais et allemand. Il est assez succinct sur l’installation physique de l’interrupteur et détaille plus l’installation Wi-Fi. Mais le principal est là : <strong>le schéma de branchement</strong>.</p>
						
						<br><center><img src="images/smartlife/smartlife 5/img 1.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Donc, commençons par le début. Si vous avez déjà un volet roulant automatique (ceux à manivelle ne comptent pas), vous ne devriez pas avoir de problème pour les branchements. Si ce n’est pas le cas, il faut faire arriver 3 fils depuis votre installation : <strong>le neutre, la phase et la terre.</strong></p>
						<br>
						<p>En cas de remplacement d’un interrupteur, le plus difficile sera de <strong>s’assurer du respect du code couleur des fils</strong>. Si comme dans le cas de votre serviteur vous tombez sur les rallonges de fils via des dominos (et bien entendu sans respect du code couleur), le plus simple et de tirer si possible sur l’arrivée des câbles depuis le volet pour voir le câblage initial et ainsi repérer les fils. L’<strong>utilisation d’un multimètre</strong> peut être difficile pour trouver les fils venant du volet si vous débranchez tout (on teste en comparaison avec la terre. <strong>Terre / neutre : peu de tension, phase / neutre : 220 V)</strong>.</p>
						
						<br><center><img src="images/smartlife/smartlife 5/img 2.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Votre volet devrait avoir 4 fils : <strong>la terre, le neutre, et une phase (un retour montée et un retour descente)</strong>. Donc si à l’utilisation votre volet se ferme au lieu de s’ouvrir, et inversement, vous avez inversé les fils de phases (marrons et noir ou autres couleurs, le bleu étant le neutre et le vert / jaune la terre)</p>
						<br>
						<p>Pour faire simple, les fils de terre de votre installation et de votre volet seront rattachés l’un à l’autre via un domino. Les <strong>deux fils de neutre</strong> devront se retrouver tous les deux dans l’<strong>emplacement N</strong> de l’interrupteur afin de l’alimenter, ainsi que le volet. La <strong>phase</strong> de votre installation se branchera <strong>au L de l’interrupteur et celles du volet aux emplacement L1 et L3</strong>.</p>
						
						<br><center><img src="images/smartlife/smartlife 5/img 3.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Pour fixer l’interrupteur, il est nécessaire d’enlever la façade en passant un tournevis plat dans la partie basse. Vous aurez ainsi accès aux deux trous pour venir insérer les vis de fixation dans la boite d’encastrement. Une fois tout raccordé, votre interrupteur se parera de 3 lumières bleues et, ô miracle, celle du haut clignotera aussi en rouge assez rapidement. <strong>C’est le mode appariement</strong>. Si vous avez un problème et que l’interrupteur quitte ce mode par la suite, plutôt que de le débrancher et tout donc tout démonter, <strong>appuyez 20 s sur la touche du haut</strong>.</p>
						<br>
						<p>Un conseil pour voir si tout fonctionne bien avant de tout bien encastrer dans la boite et de remettre la façade : appuyez sur les ressorts pour voir si vos volets montent, descendent et s’arrêtent. En cas de problème, refaite le point sur vos branchements. Si c’est bon, rentrez tout à l’intérieur, vissez et cacher le tout avec la façade ! Attention, comme nous l’avons vu, trois petits ressorts vont faire contact pour enclencher le mécanisme. En appuyant sur la façade, on va venir appuyer sur les ressorts et donc activer la remontée ou la descente du volet. <strong>Cela peut aussi expliquer les problèmes que rencontrent des utilisateurs avec ce type de système</strong>. Si la façade n’est pas bien mise (trop enfoncée par exemple), il peut y avoir un contact permanent ou aléatoire avec l’un des ressorts et donc faire ouvrir ou fermer le volet de façon impromptue.</p>
						
						<br><center><img src="images/smartlife/smartlife 5/img 4.png" width="50%" height="50%" alt=""/></center><br>
						<br><center><img src="images/smartlife/smartlife 5/video 1.mp4" width="50%" height="50%" alt=""/></center><br>
						
						<h2><strong>Appairage avec l’application Smart Life</strong></h2>

						<p><strong>TEEKAR</strong> a décidé de faire confiance à l’application <strong>Smart Life</strong>. Pas de difficulté pour l’installation car cela se fait comme une prise ou une ampoule. Dès qu’il est mis sous tension, l’interrupteur est en mode appariement. Ouvrez <a href=""><font color="blue"><strong>Smart Life</strong></font></a>, <strong>appuyez sur le + et choisissez interrupteur mural</strong> comme le demande le fabriquant (et non interrupteur à rideaux qui à l’heure actuelle ne sont pris en charge que s’ils sont ZigBee (?)). <font color="red"><strong>Mettez vous bien sur votre réseau en 2,4 GHz</strong></font>, <strong>entrez votre mot de passe</strong> et laissez faire (<a href="smartlife1.php"><font color="blue">voir le tuto ampoule pour plus de détails</font></a>). Renommer votre interrupteur pour plus de facilités par la suite.</p>

						<br><center><img src="images/smartlife/smartlife 4/img 5.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Une fois cela fait, quand vous entrez dans le pilotage de l’interrupteur, vous remarquerez que <strong>le visuel repend celui d’une télécommande</strong> permettant de l’ouvrir, le fermer et mettre en pause à distance.</p>

						<br><center><img src="images/smartlife/smartlife 4/img 6.png" width="50%" height="50%" alt=""/></center><br>
						
						<h2><strong>Création de routines sous Clara et de scénario sous SmartLife</strong></h2>
						
						<p>Le fait de le considérer comme un interrupteur mural engendre des subtilités :</p>
						<br>
						<p>&rarr; En natif, pour ouvrir ou fermer le volet, il faut dire allumer ou éteindre. Pas très pratique hein ? Il va donc falloir <a href="routine.php"><font color="blue"><strong>créer des routines sous Clara</strong></font></a> pour utiliser un vocabulaire plus intuitif.</p>
						<br>
						<p>&rarr; A l’heure actuelle, il n’est pas possible, sous Clara, de contrôler la fonction « pause » en cours de descente ou de montée (le bouton du milieu). <strong>Il faudra pour cela passer par un scénario sous Smart Life</strong> et le mettre ensuite dans une routine sous Clara.</p>
						<br>
						<p>Nous allons voir cela ensemble. Bien sûr, avant tout, la mise en place du plugin SmartLife et du plugin Courtoisie est bien entendue nécessaire sur Clara. Et il est aussi obligatoire d'intaller l’interrupteur sur l'application Smart Life.</p>
						<br>
						<p></p>
						<br>
						<p></p>
						<br>
						
						<blockquote>
							<font color="red">PROJET A FINIR</font>
						</blockquote> 

						<br><center><img src="images/smartlife/smartlife 4/img 10.png" width="50%" height="50%" alt=""/></center><br>
						

						<br>
						<br>
						<div class="more_post_container">
							<h2>A lire :</h2>
							<div class="more_post">
								<a href="smartlife.php">Tutoriel d'installation et d'utilisation pour Tuya / Smart Life</a>
								<a href="smartlife1.php">Tutoriel Installer une ampoule avec Smart Life</a>
								<a href="smartlife2.php">LSC Smart Connect Security System : un ensemble accessible et efficace mais ne faisant pas de miracle</a>
								<!--a href="">Lorem Ipsum is simply dummy text of the printing</a-->
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