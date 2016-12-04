<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <title>Alaoui Zoubair</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Materialize core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="../css/materialize.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  </head>

  <body vocab="http://schema.org/">
  	<ul id="language-dropdown" class="dropdown-content">
	  <li><a href="../">French</a></li>
	  <li class="divider"></li>
	  <li><a href="../jp">Japanese</a></li>
	</ul>
	<nav>
	    <div class="nav-wrapper top-nav purple darken-4">
	      <a href="#!" class="brand-logo center">Alaoui Zoubair</a>
      	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      	  <ul class="right hide-on-med-and-down">
      	  	<li><a class="dropdown-button" href="#!" data-activates="language-dropdown">English<i class="material-icons right">arrow_drop_down</i></a></li>
      	  </ul>

      	  <ul class="side-nav" id="mobile-demo">
      	  	<li onclick="changeTab('test0')"><a><i class="material-icons">account_balance</i>&nbsp;Home</a></br></li>
      	  	<li onclick="changeTab('test1')"><a><i class="material-icons">work</i>&nbsp;Experience</a></br></li>
      	  	<li onclick="changeTab('test2')"><a><i class="material-icons">school</i>&nbsp;Education</a></br></li>
      	  	<li onclick="changeTab('test3')"><a><i class="material-icons">code</i>&nbsp;Projects</a></br></li>
      	  	<li onclick="changeTab('test4')"><a><i class="material-icons">settings</i>&nbsp;Skills</a></br></li>
      	  	<li onclick="changeTab('test5')"><a><i class="material-icons">language</i>&nbsp;Languages</a></br></li>
      	  	<li onclick="changeTab('test6')"><a><i class="material-icons">favorite</i>&nbsp;Typical day</a></br></li>
      	  </ul>
	    </div>
	</nav>
	    
	 <div class="container" typeof="Person">
		<div class="row">
			<div class="col s12 tabs-container hide-on-med-and-down">
				<ul class="tabs">
					<li class="tab col s3"><a href="#test0"><i class="material-icons">account_balance</i>&nbsp;Home</a></li>
					<li class="tab col s3"><a href="#test1"><i class="material-icons">work</i>&nbsp;Experience</a></li>
					<li class="tab col s3"><a href="#test2"><i class="material-icons">school</i>&nbsp;Education</a></li>
					<li class="tab col s3"><a href="#test3"><i class="material-icons">code</i>&nbsp;Projects</a></li>
					<li class="tab col s3"><a href="#test4"><i class="material-icons">settings</i>&nbsp;Skills</a></li>
					<li class="tab col s3"><a href="#test5"><i class="material-icons">language</i>&nbsp;Languages</a></li>
					<li class="tab col s3"><a href="#test6"><i class="material-icons">favorite</i>&nbsp;Typical day</a></li>
				</ul>
			</div>
			<div id="test0" class="col s12">
				<div class="row">
					
					<div id="back-home" class="col s12 m12 l12 center-align " >
						<!--<img src="images/zoubair.png" alt="" class="contact-image circle responsive-img">-->
						<img src="../images/zoubair.jpg" alt="" class="contact-image circle responsive-img" property="image"> 
						<h4 ><span property="familyName">Alaoui</span> <span property="givenName">Zoubair</span></h4>

						<h6><i class="material-icons">email</i>&nbsp;<span property="email">zoubair@alaoui.in</span></h6>
						<h6><i class="material-icons">phone</i>&nbsp;<span property="telephone">+33 615-511-420</span></h6>
						<h6><b>"The pessimist sees difficulty in every opportunity. The optimist sees the opportunity in every difficulty." </b><br/>Winston Churchill</h6>

						<p><b>This portal is HTML5/RDFa Lite valid.</b></p>
						<a href="https://www.w3.org/2012/pyRdfa/extract?uri=http%3A%2F%2Fwww.zoubair.com%2Fen&rdfa_lite=true&vocab_expansion=false&embedded_rdf=true&validate=yes&space_preserve=true&vocab_cache_report=false&vocab_cache_bypass=false" target="_blank"><img src="https://www.w3.org/Icons/SW/sw-horz-w3c.png" /></a>
					</div>
					
					<!-- <div class="col s12 m12 l8 center-align start-image">
						<img src="images/pc.jpg"> 
					</div> -->
				</div>
			</div>
			<div id="test1" class="col s12">
				<div class="col s12 m6" property="worksFor" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img  property="logo" src="../images/cobham-logo.jpg" alt="cobham image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4><span property="legalName">Cobham Aerospace Communications</span></h4>
								<h5 property="description">Software Engineer Intern</h5>
								<p property="description">
									Cobham Aerospace Communications develops and markets ACP (Audio Control Panel) and AMU (Audio Management Unit) to European and international aircraft manufacturers.
									<br/>
									My mission within the IT department is to renovate the CRM application and the intranet used by the SAV of the company. The projects are developed with web technologies <b>(HTML5 / CSS3 / PHP7 / Laravel5.1 / Bootstrap / Materializecss)</b> and implemented on a Linux infrastructure <b>(Debian8.2 / Apache2 / Mysql 5.6)</b>.
									
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2015 - Present day</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Rungis - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 m6" property="worksFor" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img property="logo" src="../images/saham-logo.jpg" alt="cobham image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4><span property="legalName">Saham assurance</span></h4>
								<h5 property="description">Software Developer</h5>
								<p property="description">
									Saham is an intercontinental insurance group whose main activities are in about twenty countries in Africa.
									<br/>
									My mission within the IT department was to ensure the maintenance of the computer equipment and to intervene on the positions of the colaborators for the support. In addition, I attended the multi-risk insurance department for the contracting of clients, which allowed me to analyze the company's CRM.

									
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>07/2013 - 08/2013</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Marrakech - Morocco</b></span>
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
						<div class="card-stacked">
							<div class="card-content">
								<link property="url" href="http://www.sup-galilee.univ-paris13.fr/"/>
								<h4 property="legalName">Institut Sup Galilée</h4>
								<h5 property="description">Computer Engineering degree</h5>
								<p property="description">
									The Institut Sup Galilée is renowned for its pragmatic engineer training, which trains its students to work on large-scale projects and carry out missions of great importance.
								</p>
									<br/><br/>
									<b>Skills</b>
									<ul property="description">
										<li>Data Base Administration (Oracle 11g)</li>
										<li>Linux Administration</li>
										<li>Network Adminsitration</li>
										<li>Compilation</li>
										<li>Graphes - Algorithms</li>
										<li>Web Semantic</li>
										<li>Web Development</li>
										<li>Project Management</li>
										<li>Image Processing</li>
										<li>Computer Architecture</li>
									</ul>
									
								
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2014 - Present day</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 m6" property="alumniOf" typeof="Organization">
					<div class="card ">
						<div class="card-image">
							<img property="logo" src="../images/isga-logo.jpg" alt="isga image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<link property="url" href="http://www.isga.ma/"/>
								<h4 property="legalName">Institut Supérieur de Génie Appliqué</h4>
								<h5  property="description">Classes préparatoires</h5>
								<p  property="description">
									The program of the school allows future engineers to acquire knowledge with respect to their field of specialization while having an axis based on the program of the preparatory classes.
								</p>
									<br/><br/>
									<b>Skills</b>
									<ul property="description">
										<li>Object Oriented Programming (Algorithmic/C++/JAVA)</li>
										<li>Data base Management</li>
										<li>Electronic et Electric Circuit</li>
										<li>Micro-Controlleur - Assembly</li>
										<li>Linux</li>
										<li>Cisco Routeur configuration</li>
									</ul>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2011 - 07/2014</b></span>
									<span class="col s6 m6 right-align purple-text" property="location" typeof="Place"><b property="address">Marrakech - Morocco</b></span>
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
							<img property="image" src="../images/cw-logo.png" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">Comunywear</h4>
								<h5 property="description">Social Network</h5>
								<p property="description">
									A multi-platform social network to manage users' wardrobes and determine the style of each person's clothing in order to propose articles that correspond to the person's profile.
								</p>
									<br/><br/>
									<b>Technologies</b>
									<ul property="description">
										<li>Laravel (Framework PHP)</li>
										<li>Google Cloud (App Engine)</li>
										<li>Bootstrap (User Interface)</li>
										<li>BitBucket (Private Git Repository)</li>
									</ul>
									<br/>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>11/2014 - in dev</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="../images/cobham3-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">eServices</h4>
								<h5 property="description">ERP</h5>
								<p property="description">
									Application developed within the IT department to renovate the service intranet which no longer meets the standards of web portals. The objective is to renew the application of the SAV to facilitate the management of the repairs from an application point of view, and to process the data to extract and analyze the stored information.
								</p>
									<br/><br/>
									<b>Technologies</b>
									<ul property="description">
										<li>Laravel (Framework PHP)</li>
										<li>Google Material Design (User Interface)</li>
										<li>Linux Server/ Apache2 / Mysql5.6</li>
									</ul>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>09/2016 - in dev</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Rungis - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="../images/foxdrone2-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">Fox Drone</h4>
								<h5 property="description">School Drone Club</h5>
								<p property="description">
									In order to develop innovation within the galileo institute, I took the initiation to create a drone club in collaboration with the robotic club of the school in order to encourage the students to reverse their time in the Programming of the future of the aeronotics and the spacial. Today, administrative procedures are in progress for obtaining the flight clearance to test drones built by students on campus.
									<br/><br/>
								</p>
							</div>
							<div class="card-action">
									<span class="col s6 m6 align-left purple-text"><b>10/2016 - in devs</b></span>
									<span class="col s6 m6 right-align purple-text"><b>Villetaneuse - France</b></span>
									<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m6" property="mainEntityOfPage" typeof="CreativeWork">
					<div class="card ">
						<div class="card-image">
							<img property="image" src="../images/cobham3-logo.jpg" alt="sup galilée image"/>
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h4 property="name">eSupport</h4>
								<h5 property="description">CRM</h5>
								<p property="description">
									CRM developed for customer relationship service to handle queries which I was the developer responsible for setting up technical specifications. The application allows to keep a history of the answers sent to the clients and documents allowing to answer their questions. The application also makes it possible to carry out statistics in relation to several criteria.
								</p>
									<br/><br/>
									<b>Technologies</b>
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
								<h5 property="legalName">Web Development</h5>
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
								<h5 property="legalName">Web Sementic</h5>
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
							<img src="../images/linux-logo.jpg" alt="Linux"/>
						</div>
						<div class="card-stacked">
							<div class="card-content" property="memberOf" typeof="Organization">
								<h5 property="legalName">Linux Administration</h5>
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
								<h5 property="legalName">Electonics - IoT</h5>
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
								<h5 property="legalName">Data Base Administration</h5>
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
							<div class="card-content">
								<h4 property="description">English</h4>
								<h5>
									Proficiency:   
									<span class="progress">
										<span class="determinate" style="width: 95%"></span>
									</span>
								</h5>
								<ul property="description">
									<li><b>Favorite Books</b></li>
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
								<h4 property="description">French</h4>
								<h5>
									Proficiency:   
									<span class="progress">
										<span class="determinate" style="width: 100%"></span>
									</span>
								</h5>
								<ul property="description">
									<li><b>Favorite Books</b></li>
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
								<h4 property="description">Arabic</h4>
								<h5>
									Proficiency:   
									<span class="progress">
										<span class="determinate" style="width: 100%"></span>
									</span>
								</h5>
								<ul property="description">
									<li><b>Favorite Books</b></li>
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
								<h4 property="description">German</h4>
								<h5>
									Proficiency:   
									<span class="progress">
										<span class="determinate" style="width: 30%"></span>
									</span>
								</h5>
								<ul property="description">
									<li>Currently learning in Goethe Institut</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="test6" class="col s12">
				<div class="col s12 m12 center-align">
					<img  class="" src="../images/day.jpg" alt="SCRUM"/> 
					
					
				</div>
			</div>
		</div>
	   
	 </div>

    <!-- Jquery Libarary -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

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
