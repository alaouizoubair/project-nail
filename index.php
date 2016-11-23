<!DOCTYPE html>

<html lang="fr">

  <head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico"/>

    <title>Alaoui Zoubair</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <!-- Materialize core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
	<link media="all" type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

  </head>

  <body vocab="http://schema.org/">
  	<ul id="language-dropdown" class="dropdown-content">
	  <li><a href="en/">Anglais</a></li>
	  <li class="divider"></li>
	  <li><a href="jp">Japonais</a></li>
	</ul>
	  <nav>
	    <div class="nav-wrapper top-nav purple darken-4">
	      <a href="#!" class="brand-logo center"  >Alaoui Zoubair</a>
      	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      	  <ul class="right hide-on-med-and-down">
      	  	<li><a class="dropdown-button" href="#!" data-activates="language-dropdown">Français<i class="material-icons right">arrow_drop_down</i></a></li>
      	  </ul>

      	  <ul class="side-nav" id="mobile-demo">
      	  	<li onclick="changeTab('test0')"><a  href="#test0"><i class="material-icons">account_balance</i>&nbsp;Accueil</a></li>
      	  	<li onclick="changeTab('test1')"><a href="#test1"><i class="material-icons">work</i>&nbsp;Expérience</a></li>
      	  	<li onclick="changeTab('test2')"><a href="#test2"><i class="material-icons">school</i>&nbsp;Formation</a></li>
      	  	<li onclick="changeTab('test3')"><a href="#test3"><i class="material-icons">code</i>&nbsp;Projet</a></li>
      	  	<li onclick="changeTab('test4')"><a href="#test4"><i class="material-icons">settings</i>&nbsp;Compétence</a></li>
      	  	<li onclick="changeTab('test5')"><a href="#test5"><i class="material-icons">g_translate</i>&nbsp;Langues</a></li>
      	  	<li onclick="changeTab('test6')"><a href="#test6"><i class="material-icons">favorite</i>&nbsp;Un jour</a></li>
      	  </ul>
	    </div>
	  </nav>
	    
	 <div class="container" typeof="Person">
		<div class="row">
			<div class="col s12 tabs-container hide-on-med-and-down">
				<ul class="tabs">
					<li class="tab col s3"><a href="#test0"><i class="material-icons">account_balance</i>&nbsp;Accueil</a></li>
					<li class="tab col s3"><a href="#test1"><i class="material-icons">work</i>&nbsp;Expériences</a></li>
					<li class="tab col s3"><a href="#test2"><i class="material-icons">school</i>&nbsp;Formation</a></li>
					<li class="tab col s3"><a href="#test3"><i class="material-icons">code</i>&nbsp;Projets</a></li>
					<li class="tab col s3"><a href="#test4"><i class="material-icons">settings</i>&nbsp;Compétences</a></li>
					<li class="tab col s3"><a href="#test5"><i class="material-icons">language</i>&nbsp;Langues</a></li>
					<li class="tab col s3"><a href="#test6"><i class="material-icons">favorite</i>&nbsp;Un Jour</a></li>
				</ul>
			</div>

			<div id="test0" class="col s12">
				<div class="row">
					
					<div id="back-home" class="col s12 m12 l12 center-align " >
						<!--<img src="images/zoubair.png" alt="" class="contact-image circle responsive-img">-->
						<img src="images/zoubair.jpg" alt="" class="contact-image circle responsive-img" property="image"> 
						<h4 ><span property="familyName">Alaoui</span> <span property="givenName">Zoubair</span></h4>

						<h6><i class="material-icons">email</i>&nbsp;<span property="email">zoubair@alaoui.in</span></h6>
						<h6><i class="material-icons">phone</i>&nbsp;<span property="telephone">+33 615-511-420</span></h6>
						<h6><b>"Un pessimiste voit la difficulté dans chaque opportunité, un optimiste voit l'opportunité dans chaque difficulté." </b><br/>Winston Churchill</h6>
					</div>
					
					<!-- <div class="col s12 m12 l8 center-align start-image">
						<img src="images/pc.jpg"> 
					</div> -->
				</div>
			</div>
			<div id="test1" class="col s12" >
				<div class="col s12 m6" property="worksFor" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img  property="logo" src="images/cobham-logo.jpg" alt="cobham image"/>
						</div>
						<div class="card-stacked" >
							<div class="card-content">
								<h4><span property="legalName">Cobham Aerospace Communications</span></h4>
								<h5 property="description">Apprenti ingénieur informatique</h5>
								<p property="description">
									Cobham Aerospace Communications développe et commercialise les ACP (Audio Control Panel) et les AMU(Audio Management Unit) aux avionneurs européens et internationals.
									<br/>
									Ma mission au sein du département informatique consiste à rénover l'application CRM et l'intranet utilisé par le SAV de la société. Les projets sont développés avec des technologies webs<b><i>(HTML5/ CSS3/ PHP7/ Laravel5.1/ Bootstrap/ Materializecss)</i></b> et mises en marche sur une infrastructure Linux <b><i>(Debian8.2/ Apache2/ Mysql 5.6)</i></b>.

									
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2015 - Aujourd'hui</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Rungis - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 m6" property="worksFor" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img property="logo" src="images/saham-logo.jpg" alt="cobham image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4><span property="legalName">Saham assurance</span></h4>
								<h5 property="description">Développeur informatique</h5>
								<p property="description">
									Saham est un groupe intercontinental d'assurance dont les activités principales se situent dans une vingtaine de pays en afrique. 
									<br/>
									Ma mission au sein du service informatique consistait d'assurer la maintenance des équipements informatiques et d'intervenir sur les postes des colaborateurs pour le support. Par ailleurs, j'ai assisté le service multi-risque de l'assurance pour l'établissement des contrats des clients ce qui m'a permit d'analyser le CRM de l'entreprise.

									
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>07/2013 - 08/2013</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Marrakech - Maroc</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="test2" class="col s12">
				<div class="col s12 m6" property="alumniOf" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img property="logo" src="http://www.sofyaneabbou.sitew.fr/fs/Root/a4nh3-galilee.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked" >
							<div class="card-content">
								<link property="url" href="http://www.sup-galilee.univ-paris13.fr/"/>
								<h4 property="legalName">Institut Sup Galilée</h4>
								<h5 property="description">Apprentie Informatique Réseau</h5>
								<p property="description">
									L'institut Sup Galilée est renommé pour sa foramtion d'ingénieur pragramatique qui forme ses étudiants pour travailler sur des projets de grandes envergures et d'assurer des missions de grandes importances.
									<br/><br/>
								</p>
									<b>Connaissance acquises</b>
									<ul property="description">
										<li>Administration Base de données (Oracle 11g)</li>
										<li>Administration Système Linux</li>
										<li>Adminsitration Réseau</li>
										<li>Compilation - Théorie des langages</li>
										<li>Théorie des graphes - Algorithmique</li>
										<li>Web Sémantique</li>
										<li>Développement Web</li>
										<li>Gestion de projet</li>
										<li>Traitement d'image</li>
										<li>Système multi-tâche</li>
										<li>Architecture des ordinateurs</li>
									</ul>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2014 - Aujourd'hui</b></span>
									<span class="col s6 m6 right-align purple-text"  property="location" typeof="Place"><b property="address">Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 m6" property="alumniOf" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img property="logo" src="images/isga-logo.jpg" alt="isga image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<link property="url" href="http://www.isga.ma/"/>
								<h4 property="legalName">Institut Supérieur de Génie Appliqué</h4>
								<h5 property="description">Classes préparatoires intégrées</h5>
								<p property="description">
									Le programme de l'école permet aux futures ingénieurs d'acquérir des connaissances vis-à-vis de leur domaine de spécialisation tout ayant un axe qui s'appuie sur le programme des classes préparatoires.
								</p>
								<br/><br/>
								<b>Connaissance acquises</b>
								<ul property="description">
									<li>Programmation Orienté Objet (Algorithmique/C++/JAVA)</li>
									<li>Gestion de base de données</li>
									<li>Electronique et circuit électrique</li>
									<li>Programmation micro-controlleur</li>
									<li>Système Linux</li>
									<li>Programmation routeur cisco</li>
								</ul>
								
								
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2011 - 07/2014</b></span>
									<span class="col s6 m6 right-align purple-text"  property="location" typeof="Place"><b property="address">Marrakech - Maroc</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="test3" class="col s12">
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="images/cw-logo.png" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">Comunywear</h4>
								<h5 property="description">Garde robe virtuelle</h5>
								<p property="description">
									Réseau social multi-plateforme pour gérer les gardes robes des utilisateurs et déterminer le style d'habillment de chacun afin de proposer des articles qui correspondes au profile de la personne.
								</p>
								<br/><br/>
								<b>Technologies utilisées</b>
								<ul property="description">
									<li>Laravel (Framework PHP)</li>
									<li>Google Cloud (App Engine)</li>
									<li>Bootstrap (User Interface)</li>
									<li>BitBucket (Private Git Repository)</li>
								</ul>
								<br/>
								
							
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>11/2014 - en cours</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6"  property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="images/cobham3-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name" >eServices</h4>
								<h5 property="description" >Application Service Après Vente</h5>
								<p property="description">
									Application développé au sein du service informatique pour rénover l'intranet SAV qui ne correspond plus aux normes des portails web. L'objectif est de rénover l'application du SAV pour faciliter la gestion des réparations sur un points de vue applicatif, et de traiter les données pour extraire et analyser l'information stockée.
								</p>
								<br/><br/>
								<b>Technologies utilisées</b>
								<ul property="description">
									<li>Laravel (Framework PHP)</li>
									<li>Google Material Design (User Interface)</li>
									<li>Linux Server/ Apache2 / Mysql5.6</li>
								</ul>
								
							
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2016 - en cours</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Rungis - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="images/foxdrone2-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">Fox Drone</h4>
								<h5 property="description">Club de Drone</h5>
								<p>
									Afin de développer l'innovation au sein de l'institut galilée, j'ai pris l'initive de créer un club de drone en collaboration avec le club robotique de l'école afin d'inciter les étudiants d'inverstir leur temps dans la programmation du future de l'aéronotique et du spacial. Aujourd'hui, des procédures administratives sont en cours pour l'obtention de l'autorisation de vol pour tester les drones construits par les étudiants au sein du campus.
									<br/><br/>
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>10/2016 - en cours</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="images/cobham3-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">eSupport</h4>
								<h5 property="description">Customer Ressource Management</h5>
								<p>
									CRM développé pour le service relation client pour gérer les requêtes dont j'étais le développeur reponsable de la mise en place des spécifications techniques. L'application permet de garder un historique des réponses envoyées aux clients et des documents permettant de répondre à leurs questions. L'application permet aussi de réaliser des statistiques par rapport à plusieurs critères.
								</p>
								<br/><br/>
								<b>Technologies utilisées</b>
								<ul property="description">
									<li>Laravel (Framework PHP)</li>
									<li>Bootstrap (User Interface)</li>
									<li>Linux Server/ Apache2 / Mysql5.6</li>
								</ul>
								
							
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>03/2016 - 06/2016</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Rungis - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="test4" class="col s12">
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="http://www.cayleyconsulting.com/wp-content/uploads/2015/12/D%C3%A9veloppement-web1.jpg" alt="Dev web"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Développement Web</h5>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="http://tomtunguz.com/images/ml_pictogram.png" alt="web sem"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Web Sémentique</h5>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="http://respondr.io/wp-content/uploads/2016/03/machine_learning-1024x724.jpg" alt="machine learning"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Machine Learning</h5>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="images/linux-logo.jpg" alt="Linux"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Administration Linux</h5>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="https://ittrainingsolutions.com/wp-content/uploads/2015/07/Pen-testing-1000x675.jpg" alt="Pen Test"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Penetration Testing</h5>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/4hErJtsClimm6r482/project-management-related-terms_ruinqf7__S0001.jpg" alt="SCRUM"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Agile Scrum</h5>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="http://blog.leapmotion.com/wp-content/uploads/2015/06/arduino_raspberrypi.jpg" alt="SCRUM"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Electonique - IoT</h5>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<img src="http://i.crn.com/images/abstract_blue_data400.jpg" alt="Pen Test"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Administration Base de Données</h5>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="test5" class="col s12">
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<!-- <img src="http://blog.leapmotion.com/wp-content/uploads/2015/06/arduino_raspberrypi.jpg" alt="SCRUM"/> -->
						</div>
						<div class="card-stacked">
							<div class="card-content" >
								<h4 property="description">Anglais</h4>
								<h5>
									Maîtrise:   
									<span class="progress">
										<span class="determinate" style="width: 95%"></span>
									</span>
								</h5>

								<ul property="description">
									<li><b>Oeuvres préférées</b></li>
									<li>Jane Eyre(Charlotte Brontë)</li>
									<li>Great expectations (Charles Dickons)</li>
									<li>To Kill a Mockingbird(Harper Lee)</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<!-- <img src="http://blog.leapmotion.com/wp-content/uploads/2015/06/arduino_raspberrypi.jpg" alt="SCRUM"/> -->
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="description">Français</h4>
								<h5>
									Maîtrise:   
									<span class="progress">
										<span class="determinate" style="width: 100%"></span>
									</span>
								</h5>
							
								<ul property="description">
									<li><b>Oeuvres préférées</b></li>
									<li>Les pensées (Pascal)</li>
									<li>La mémoire d'un roi (Hassane 2)</li>
									<li>La pierre et le sabre (Eiji Yoshikawa)</li>
								</ul>
							
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<!-- <img src="http://blog.leapmotion.com/wp-content/uploads/2015/06/arduino_raspberrypi.jpg" alt="SCRUM"/> -->
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="description">Arabe</h4>
								<h5>
									Maîtrise:   
									<span class="progress">
										<span class="determinate" style="width: 100%"></span>
									</span>
								</h5>
								<ul property="description">
									<li><b>Oeuvres préférées</b></li>
									<li> ألف ليلة وليلة (Najib Mahfouz)</li>
									<li>الأيام (Taha Hussein)</li>
									<li>کـَـلیله وَ دِمـنه (Ibn Al-Muqaffa)</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card ">
						<div class="card-image">
							<!-- <img src="http://blog.leapmotion.com/wp-content/uploads/2015/06/arduino_raspberrypi.jpg" alt="SCRUM"/> -->
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="description">Allemand</h4>
								<h5>
									Maîtrise:   
									<span class="progress">
										<span class="determinate" style="width: 30%"></span>
									</span>
								</h5>

								<ul>
									<li>En cours d'apprentissage à l'insitut Goethe</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="test6" class="col s12">
				<div class="col s12 m12 center-align">
					<img  class="" src="images/jour.jpg" alt="SCRUM"/> 
				</div>
			</div>
		</div>
	   
	 </div>

    <!-- Jquery Libarary -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angularController.js"></script>

    <script type="text/javascript">
	 // Initialize collapse button
	 $(".button-collapse").sideNav();
	 // Initialize collapsible (uncomment the line below if you use the dropdown variation)
	 //$('.collapsible').collapsible();
	 function changeTab(tab){
	 	$('ul.tabs').tabs('select_tab',tab);
	 	$('.button-collapse').sideNav('hide');
	 }
    </script>

  </body>
</html>
