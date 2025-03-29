<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR-fr">

	<head>
		<title>Domotique</title>
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
						
						<h1>Domotique : Les scénarios</h1>
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> 16 Jan 2019</span> <span><i class="fa fa-folder"></i> Guide</span></p>
						</div>
						
						<p>Attardons-nous à présent sur une fonctionnalité qui est sans doute un pilier de la domotique, j'ai nommé les scénarios. Sans trop m'avancer, je peux affirmer 
						que les scénarios sont l'essence même de la domotique.</p>
						
						<p>En effet, si la domotique est capable d’anticiper vos faits et gestes avec l’allumage d’une lumière sur détection de présence, ouvertures des volets 
						à une heure définie, idem pour la fermeture, avertissement des habitants sur une alarme ou action sur détection. Le scénario est à la domotique ce que 
						le moteur est à la voiture.</p>
						<br>
						<p>Si pendant longtemps la domotique était une affaire de geek, basée sur de lourds blocs de code et d’indigestes algorithmes… C’est toujours 
						d’actualité aujourd’hui! Oui, cela n’a pas changé, simplement les interfaces utilisateurs et le travail conséquent des fabricants de box domotiques 
						ont fait que nous avons oublié ce qu’il y a derrière les interfaces.</p>
						<br>
						<p>C’est pourtant bien de longues pages de codes qui sont définies derrière chaque action que vous faites sur l’interface de configuration de la box. 
						Pour faire simple, le fonctionnement n’a pas changé, mais s’est très grandement simplifié pour le bonheur de tous !</p>
						
						<br><h1>La définition du scénario domotique</h1>
						<center><img src="images/la definition.jpg" alt=""/></center>
						
						<p>Au cinéma, le scénario décrit les différentes scènes d’un film. Le tournage s’appuie sur ce scénario afin que le film corresponde parfaitement 
						aux attentes du réalisateur. En domotique, le scénario décrit les actions à réaliser en fonction d’un événement afin de répondre aux attentes de 
						l’utilisateur. Il est l’essence même de la domotique, le chef d’orchestre de la maison connectée, celui qui donne vie aux automatismes.</p>
						<br>
						<p>Si par le passé la domotique était consacrée à une certaine élite de l’informatique, elle est aujourd’hui accessible au grand publique, et tous, 
						sommes capables de mettre en place de puissants scénarios en quelques minutes</p>
						<br>
						<p>Quel que soit le système domotique, <strong>Jeedom</strong>, <strong>Domoticz</strong>, <strong>Eedomus</strong>, <strong>IPX800</strong>, 
						<strong>Devolo</strong>, <strong>Vera</strong>, <strong>Fibaro</strong>… Toutes les solutions domotiques s’accordent toutes 
						sur un point : la simplicité de mise en oeuvre. Le tout via de simples listes déroulantes et blocs. Simple et efficace, la domotique et ses 
						automatismes prennent vie directement de votre imagination vers le système domotique en quelques clics.</p>
						<br>
						<p>Mais alors, de quoi est constitué un scénario? La réponse est assez simple, un scénario domotique repose essentiellement sur deux leviers.</p>
						
						<br><h1>Les déclencheurs</h1>
						<center><img src="images/les déclencheurs.jpg" alt=""/></center>
						
						<p>Le premier levier d’un scénario domotique est un déclencheur. Le déclencheur se base sur des événements pour démarrer. Une porte ouverte, un 
						mouvement détecté, une température atteinte ou encore un détecteur en alerte… Bref, un changement d’état.</p>
						<br>
						<p>Tous ces événements constituent des conditions de déclenchement de scénarios. C’est bien souvent ce qui est sous l’onglet <strong>SI</strong>
						de votre scénario.</p>
						<br>
						<p>Toutefois le déclencheur peut aussi être horaire ou calendaire. Dans ce cas de figure, ce n’est plus un périphérique qui déclenchera le scénario, 
						mais la notion de temps. Déclenchement à une date ou à un horaire précis. Déclenchement toutes les heures ou tous les deux jours… la notion de temps 
						est donc également un facteur de déclenchement d’un scénario domotique.</p>
						
						<br><h1>Les actions</h1>
						<center><img src="images/les actions.jpg" alt=""/></center>
						
						<p>Le second levier d’un scénario domotique est une action. Derrière les actions, il y a ce que vous souhaitez que la domotique réalise pour vous. 
						Allumer une lumière, démarrer la machine à laver, allumer le chauffage, ouvrir le portail, déclencher une sirène ou encore notifier un utilisateur… 
						L’action résulte de la valeur du déclencheur et se traduit dans le scénario par le terme ALORS.Le second levier d’un scénario domotique est une action. 
						Derrière les actions, il y a ce que vous souhaitez que la domotique réalise pour vous. Allumer une lumière, démarrer la machine à laver, allumer le 
						chauffage, ouvrir le portail, déclencher une sirène ou encore notifier un utilisateur… L’action résulte de la valeur du déclencheur et se traduit dans 
						le scénario par le terme ALORS.</p>
						<br>
						<p><strong>Les actions peuvent être multiples</strong>. Un seul déclencheur peut exécuter plusieurs actions sur son changement d’état. Mais une action peut également 
						être issue d’une combinaison de plusieurs déclencheurs. Ce qui donne une grande souplesse et des combinaisons exponentielles. C’est là toute la magie 
						du scénario et c’est vous qui êtes le chef d’orchestre de ce dernier.</p>
						<br>
						<p>Vous l’aurez compris, <strong>un scénario se base sur un changement d’état ou un repère temporel pour gérer des actions automatiquement</strong>. 
						C’est ainsi que la domotique donne vie à votre maison et vous fait gagner en confort.</p>
						<br>
						<p>En conclusion, qu’il soit simple ou compliqué, un scénario n’est qu’une succession d’événements qui en provoque d’autres.</p>
						
						<br><h1>Le conseil de l’expert</h1>
						<center><img src="images/les conseils.jpg" alt=""/></center>
						
						<p>Si <strong>le scénario s’apparente à un programme informatique</strong>, son approche dans la mise en oeuvre et également la même.</p>
						<br>
						<p>Si un scénario basique est simple à programmer, <strong>certains scénarios peuvent rapidement devenir complexes</strong>. Pas dans la façon de le 
						définir encore une fois, mais plutôt dans la façon de l’orchestrer. Afin de réussir la mise en oeuvre de votre scénario complexe, 
						utilisez la méthode simple des cours d’algorithme dispensés à l’école.</p>
						<br>
						<p>Écrivez littéralement ce que vous désirez faire et selon quelle(s) condition(s):</p>
						<br>
						<li>Si nous sommes samedi ou dimanche et qu’il est entre 8h00 et 11h00</li>
						<li>Et qu’un mouvement est détecté dans la pièce à vivre</li>
						<li>Alors, allumer les lumières du salon et de la cuisine</li>
						<li>Et ouvrir les volets de la cuisine et du salon, mais pas des chambres</li>
						<li>...</li>
						<br>
						<p>L’idée avec cette pratique, et de traduire l’idée que vous vous faites du scénario 
						dans votre tête par de simples phrases. Une fois posée sur une feuille de papier, vous 
						pourrez le relire et dans un premier temps réfléchir si ce que vous venez d’écrire décrit 
						bien ce que vous désirez faire ! Si tel est le cas, vous tenez le déroulé de votre scénario,
						il ne vous reste plus qu’à le mettre en oeuvre depuis l’interface de votre domotique.</p>
						<br>
						<p>Vous verrez qu’en passant par cet exercice, vous aurez une vision bien plus claire de 
						ce vers quoi vous voulez aller et économiserez de longues heures à chercher pourquoi ça ne 
						fonctionne pas…</p>
						
						<br><h1>Conclusion</h1>
						
						<p>Voilà, à présent les scénarios domotiques n’ont plus de secrets pour vous. Lancez-vous
						dans l’automatisation de votre maison et rendez plus simple votre quotidien à l’aide de la domotique !</p>
						<br>
						
						
						<blockquote>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
							<span>Antorjal alin</span>
						</blockquote>
						
						<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a 
						ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class 
						aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos Sed non  mauris vitae erat consequat auctor eu in elit. Class 
						aptent taciti sociosqu</p>
						
						<h3>Feature Options</h3>
						<ul>
							<li>dummy text of the printing and typesetting</li>
							<li>dummy text of the printing and typesetting</li>
							<li>dummy text of the printing and typesetting</li>
							<li>dummy text of the printing and typesetting</li>
							<li>dummy text of the printing and typesetting</li>

						</ul>
						<br>
						<h4>Plugins pour domotiser votre maison</h4>
						<ul>
							<li><a href="">Plugin</a></li>
							<li><a href="">Plugin</a></li>
							<li><a href="">Plugin</a></li>
							<li><a href="">Plugin</a></li>
						</ul>

						<div class="more_post_container">
							<h2>Plugins pour domotiser votre maison :</h2>
							<div class="more_post">
								<a href="">Plugin</a>
								<a href="">Plugin</a>
							
							</div>
						</div>
						
						<div class="more_post_container">
							<h2>Tu pourrais aussi aimer:</h2>
							<div class="more_post">
								<a href="">Lorem Ipsum is simply dummy text of the printing</a>
								<a href="">Lorem Ipsum is simply dummy text of the printing</a>
								<a href="">Lorem Ipsum is simply dummy text of the printing</a>
							</div>
						</div>	

						<div class="advertisement_container">
							<div class="advertisement">
								
							</div>
						</div>	
						
						<a class="btn" href="">Preview</a>
						<a class="btn" href="">Download</a>
					
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
