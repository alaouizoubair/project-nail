<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <title>Alaoui Zoubair</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="css/stylesheet.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/materialize.min.css">


  </head>

  <body >
	  <nav>
	    <div class="nav-wrapper top-nav pink  darken-3">
	      <a href="#!" class="brand-logo center">Alaoui Zoubair</a>
      	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

	    </div>
	  </nav>
	    
	 <div class="container">

		<div class="auth-box ">
			<p class="background-line center"> 
				<span>Connexion</span>
			</p>
			<br><br>
			<form>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input " id="email" type="email" class="validate">
					<label for="email">email</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">lock</i>
					<input  id="password" type="password" class="validate">
					<label for="password">Mot de passe</label>
				</div>
				<div class="input-field col s6">
					<a class="waves-effect btn pink darken-1 right">Connecter</a>
				</div>
			</form>
		</div>
	   
	 </div>

    <!-- Jquery Libarary -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angularController.js"></script>

    <script type="text/javascript">
	 // Initialize collapse button
	 $(".button-collapse").sideNav();
	 // Initialize collapsible (uncomment the line below if you use the dropdown variation)
	 //$('.collapsible').collapsible();
    </script>

  </body>
</html>