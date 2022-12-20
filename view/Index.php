<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="../js/controle.js">
</script>

<meta name="description" content=" Site de salle de sport My fitness" />
<meta name="keywords" content="santé, sport, fitness, healthy, salle de sport,musculation,entrainement,Myfitness, sallede gym "/>
<title>Page d'Accueil réalisée par Yasmine triki</title>
<link rel="stylesheet" href="../css/style.css"/>

</head >

<body>
	<header> 
		<a id="haut"></a>
		<img id="logo" src="../img/log.png" width="150" height="150" alt="logo de Myfitness" title="logoMyfitness" />
		<h1 id="titre_principal"><strong>My fitness</strong></h1> 
		<!--  Menu -->
		<center>
 <nav>
	<ul>

  <li><a href="../view/activites.php">Activites</a> </li>
 
  <li><a href="../view/planning.php">Planning</a></li> 

  <li><a href="../view/contact.php">Contact</a></li>
  <li><a href="../view/evaluation.php">Evaluation</a></li>
    </ul>
 </nav>
         </center>


</header>
<!-- <center><h1 id="titre_principal">My Fitness</h1></center> -->
 <figure>
<img src="../img/img2.png" alt>
<img src="../img/img10.jpg" alt>
<img src="../img/img9.jpg" alt>
<img src="../img/img3.jpg" alt>
<img src="../img/img2.png" alt>

</figure> 
<section>
	  <div class="msg-back">
  	<h1> Bienvenue sur My Fitness </h1>
  	<button type="button" class=" btn-costum" onclick="document.f.email.focus()"> Connectez-Vous </button>
  </div>
 <!-- <h2>Bienvenue à My Fitness</h2> -->
 <article>
 <h3 id=titre ><strong>Salle de sport et de fitness</strong></h3>
  <blockquote><strong>My fitness</strong> est une salle de <em> sport </em> et de <em>fitness</em> qui vous propose des cours variés dans un espace de Fitness destiné aux adultes, ados et enfants. Vous trouverez tous ce qu'il vous faut dans nos espaces de musculation,Cardio Training... avec un matériel de qualité,un cadre agréable, des espaces aérés et climatisés, des équipements de pointe pour vous encadrer, vous motiver et vous soutenir. Des coachs professionnels seront à votre écoute et vous accompagneront durant votre exercice. Nous proposons des programmes multi-activités alliant remise en forme, sport et détente qui vous permettront d'affiner, muscler et faire du bien à votre corps. 
  Notre salle et notre équipe vous invitent à vivre un quotidien spécial ayant pour mission votre bien-être.</blockquote>
 </article>
</section>

	<h2>Se Connecter</h2>
<form name="f" method="post" action="../connexion/connect.php" >
<fieldset>
	<legend>Connexion</legend>
<div> 
<label for="Login">Login:</label>
<input type="email" name="email" id="Adresse e-mail" size="40" maxlength="50" autofocus /> 
</div> <br/>
<div>
<label for="pass">Mot de passe:</label>
<input type="password" name="pass" id="pass" size="30" maxlength="30" required />
</div><br/>
<a>Mot de passe oublié?</a> <br/><br/>
<div>
<button type="submit" class="bt" onclick="verif()">Se connecter</button>
<button type="reset"  class="bt" >Annuler</button>
</div> 
<br/><a href="../view/inscription.php">Si vous etes nouveau,cliquez ici</a>

</fieldset> </form> </article>
<br/><a href="#haut">haut de page</a>
<footer>
 <center>My Fitness&copy;2018-2019
 </footer>
</body>
</html>
