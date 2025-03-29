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
						
						<h1>Tutoriel IFTTT… WTF ?</h1>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> 9 Déc 2019</span> <span><i class="fa fa-comment"></i> 4 comments</span> <span><i class="fa fa-folder"></i> IFTTT</span></p>
						</div>
						
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-clock-o"></i> Mise à jour : 5 Déc 2021</span></p>
						</div>

						<p>Tout le monde, en tout bon Clarien, a entendu parler de IFTTT… Mais saperlipopette (c’est la traduction de « WTF »), qu’est-ce que cela ? Et que veut dire ce barbant acronyme barbare ?</p>
						<br>
						<p>Hé oui, qui n’a pas entendu : « Pas possible de faire de routine, mais on peut passer par IFTTT sans problème »… Ben oui, bien sûr. Et sinon, « pour détruire la flore de surface de la viande, il suffit de mettre sous vide, au risque de sélectionner les bactéries anaérobies voir micro-aérophiles si le vide n’est pas assez poussé »… Ce n’est pas claire hein ? Ben non, enfin si, mais pour ceux qui connaissent. Et ça, c’est agaçant.</p>
						<br>
						<p>Donc pour vous éviter de sortir votre célèbre « Oui, oui », qui veut dire « j’ai rien compris », on va vous expliquer.</p>
						<br>

						<h2><strong>Qu’est-ce que l’IFTTT ?</strong></h2>

						<br><center><img src="images/cmd/ifttt2/img 1.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>IFTTT ne se prononce pas I.F.T.T.T mais If.T.T.T. ou If.ti.ti.ti selon vous parlez franglais ou anglais. C’est l’acronyme de « If This, Then That »… Ce qui peut vouloir dire « Si cela se produit, alors fait ça ». C’est donc, comme l’explication du nom l’indique, un service permettant de créer des chaines d’instructions. C’est comme un petit programme, très simple.</p>
						<br>
						<p>Cela a été créé en 2010, par Linden Tibbets et Jesse Tane. <strong>A l’origine, IFTTT est utilisé pour le Web et ses différents applets</strong> (des mini programmes) qui peuvent par exemple permettre d’envoyer une réponse automatique si votre # ou @ est mentionné dans un commentaire ou directement envoyer sur votre stockage en ligne une photo que vous avez aimé sur les réseaux sociaux.</p>
						<br>
						<p>En 2013 et 2014, des <strong>applications iOs et Android</strong> ont été créées afin de le rendre plus simple d’utilisation. Le système n’a cessé de se bonifier, avec des boutons d’actions préprogrammés comme les boutons Do, Camera ou Notes par exemple.</p>
						<br>
						<p>Mais dès 2012, le service avait déjà permis la prise en compte de la <strong>gestion des objets connectés à Internet</strong>.</p>

						<h2><strong>Mais pour faire quoi et comment ?</strong></h2>

						<p>Dans certains cas, il n’existe pas de possibilité de faire des <strong><a href="routine.php" target="_blank" rel="noopener noreferrer"><font color="blue">routines par Clara</font></a></strong> ou des <strong><a href="smartlife.php"target="_blank" rel="noopener noreferrer"><font color="blue">scénarios par Smart Life ou Tuya</font></a></strong>. Et nous sommes donc bloqué… Mais non, pas forcément.</p>
						<br>
						<p>Comme nous vous l’avons mentionné dans la partie précédente, <strong>IFTTT prend en charge la gestion des objets connectés</strong>… A la condition que le fabricant ait bien intégré cette possibilité. Par exemples, si Smart Life n’avait pas prévu d’utilisation avec IFTTT, vous ne pourriez rien faire avec les objets connectés fonctionnant avec. Idem avec Clara. C’est logique, si vous n’avez pas l’adresse du destinataire, vous ne pouvez pas envoyer d’email et il ne peut donc pas vous répondre en retour.</p>
						<br>
						
						<h2><strong>Mais comment ça fonctionne ? On y vient, calmez-vous.</strong></h2>
						<br><center><img src="images/cmd/ifttt2/img 2.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Tout d’abord, il faut savoir que <strong>tout est en anglais</strong>. Mais c’est assez compréhensible. Ensuite, il y a un vocabulaire particulier à connaitre dans le cas où vous souhaiteriez créer vous-même votre « recette ».</p>
						<br>
						<p>Hé oui, c’est le premier vocabulaire à comprendre : « Applet ». C’est en fait votre programme. Dans cette recette (c’est l’ancien nom), vous mettrez des ingrédients, qui sont en fait les données que le « déclencheur » prendra en compte. <strong>Le « déclencheur » est le This, c’est ce qui va initier le programme et donc déclencher des Actions « That ». The « That » est le résultat de l’action</strong>.</p>

						<br>
						<p><strong><u>Il y a donc 6 étapes :</u></strong></p>
						<br>
						<p><strong>Choisir le service</strong>. C’est la marque que vous cherchez à automatiser, le site internet de votre choix… On y retrouve <strong>Clara</strong> par exemple, mais aussi <strong>Smart Life</strong>.</p>
						
						<br><center><img src="images/cmd/ifttt2/img 3.png" width="50%" height="50%" alt=""/></center><br>
						
						<p><strong>Choisissez ensuite un déclencheur</strong>, le This. C’est ce qui va initier votre action.</p>
						
						<br><center><img src="images/cmd/ifttt2/img 4.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Il y a une liste à la Prévert (pour ceux qui connaissent encore) de déclencheurs possibles : des phrases à dire par exemple. Si vous ne trouvez pas de déclencheur, il est possible d’en suggérer de nouveau, mais vous ne pouvez pas en créer. Il est possible que vous ne passiez pas par le bon déclencheur. Si vous cherchez à piloter un objet connecté, regarder plutôt les déclencheurs liés à l’application qui permet de le contrôler (Smart Life la plupart du temps).</p>
						
						<br><center><img src="images/cmd/ifttt2/img 5.png" width="50%" height="50%" alt=""/></center><br>
					
						<p><strong>Ensuite, passons</strong> au That. Donc à l’action. Même façon de faire, allez choisir le service qui va se mettre en branle.</p>
						
						<br><center><img src="images/cmd/ifttt2/img 6" width="50%" height="50%" alt=""/></center><br>
						
						<p>Il est nécessaire de se connecter au service choisi avec vos identifiants et sélectionnez l’action à faire…</p>

						<br><center><img src="images/cmd/ifttt2/img 7.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Choisissez maintenant quoi faire. Dans notre cas, on a décidé de s’envoyer un email donc le sujet sera notre déclencheur.</p>
						
						<br><center><img src="images/cmd/ifttt2/img 8.png" width="50%" height="50%" alt=""/></center><br>
						
						<p>Vous pouvez ensuite le tester.</p>
						<br>
						<p>Bien entendu, vous n’êtes pas obligé de faire des recettes avec autant de valeur ajoutée que celle de cet exemple. Nous vous avions aidé à en un créer une pour les Blink il y a quelques temps. Il est aussi possible, en déclencheur, de <strong>choisir une localisation GPS pour allumer ou éteindre les lumières</strong> à votre arrivée ou votre départ de chez vous par exemple.</p>
						<br>
						<p>Si vous ne vous sentez pas de faire des programmations complètes, sachez qu’il en existe un certain nombre déjà créées, par marque, où vous pourrez trouver votre bonheur. Par exemple, rien qu’avec la fonction Clara, vous avez des applets pour <strong>lier Clara et Gmail</strong> et recevoir des notifications ou encore <strong>retrouver votre téléphone en le demandant à Clara</strong>. Rien de plus simple dans ce cas que de lier vos comptes et de les activer. Les possibilités sont vraiment immenses.</p>
						
						<br><center><img src="images/cmd/ifttt2/img 9.png" width="50%" height="50%" alt=""/></center><br>
						
						<blockquote>
							<font color="green">Cet article a pour but de vous donner une idée sur ce que qu’est l’IFTTT et à quoi cela sert. Libre à vous ensuite de venir y faire des bidouilles afin de faire vos propres programmes et individualiser votre expérience avec Clara ou suppléer à des possibilités défaillantes de la part des fabricants ou Clara..</font>
						</blockquote> 

						<blockquote>
							<a href="ifttt2.php"target="_blank" rel="noopener noreferrer"><font color="blue">Retrouvez des idées de recettes IFTTT à inclure dans vos routines de Clara dans notre nouveau tutoriel.</font></a>
						</blockquote> 

						<br>
						<br>
						<div class="more_post_container">
							<h2>A lire :</h2>
							<div class="more_post">
								<a href="ifttt2.php">Tutoriel IFTTT & Clara : quelques exemples d’utilisation</a>
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