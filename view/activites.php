<?php
   session_start();
   if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
   {
		header("location: ../view/Index.php");
   }
if(($_SESSION['role']==1))
{
	header("location: ../view/admin.php");
}



?>
<!DOCTYPE html>
<html lang="fr">
<head> 
 <meta charset="utf-8"/>
 <meta name="description" content=" Site de salle de sport My fitness" />
<meta name="keywords" content="santé, sport, fitness, healthy, salle de sport,musculation,entrainement,Myfitness, sallede gym "/>
<title>page des Activités réalisée par Yasmine triki</title>
<link rel="stylesheet" href="../css/style.css"/>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header>
<a id="haut"></a>
  <img src="../img/log.png" alt="logo" title="logo" class="logo" width="160" height="170" />

<h1 id="titre_principal"><strong>My fitness</strong></h1> 

<!-- menu -->
<center>
<nav>
	<ul>
  
  <li><a class="active" href="../view/activites.php">Activites</a> </li>
  
  <li><a href="../view/planning.php">Planning</a></li> 
  
 <li><a href="../view/contact.php">Contact</a></li>
 <li><a href="../view/evaluation.php">Evaluation</a></li>
     </ul>
</nav>
</center>
<hr>
<!-- end menu -->
</header>

<section class="cours" >
	<div class="container">
		
			<h2 id="activites" > Nos Cours </h2>
			<hr class="separateur">
			<div class="row">
	<article class="col " >
		<h2 id=description > Body Pump</h2>
		<div> <img src="../img/bodypump.png" alt="body pump" title="body pump" class="body pump"  /></div><br/>
			<p><strong>Le Body Pump </strong>est  un cours pour toutes les personnes qui souhaitent s’affiner, se tonifier et se remettre en forme rapidement. En faisant un grand nombre de répétitions avec des poids légers à moyens, barre individuelle, step. Poussé par un coach, motivé par la musique, vous pourrez rapidement sentir le fruit de vos efforts ! </p>
	</article>
	<article  class="col " >
		<h2 id=description>Spinning</h2>
		<div><img src="../img/spin.png" alt="Spinning" title="Spinning" class="Spinning"  /></div><br/>
			<p><strong>Le Spinning </strong>est une pratique super aérobic de vélo en rythme d’une musique motivante. Il permet d’améliorer votre capacité cardiovasculaire, votre condition physique et votre densité osseuse.</p>
	</article>
	<article  class="col">
		<h2 id=description>CAF</h2>
		<div><img src="../img/caf.png" alt="CAF" title="CAF" class="CAF"  /> </div>
		<br/>
			<p><strong> Le CAF </strong>est un cours de renforcement musculaire basé sur le centre et le bas du corps. Le CAF permet d’affiner les Cuisses, améliorer l’endurance et le tonus musculaire, renforcer la sangle Abdominale et galber les Fessiers.</p>
	</article>
	<article  class="col">
		<h2 id=description>Zumba</h2>
		<div><img src="../img/zumba.png" alt="Zumba" title="Zumba" class="Zumba"  /> </div><br/>
			<p><strong> Zumba® </strong>est un mélange de danse et de fitness accessible à tous, composé de chorégraphies faciles à suivre et qui sculptent votre corps au son des derniers hits internationaux (Salsa, Reggaeton, Hip Hop, House, Dancehall…). Elle est pratiquée régulièrement par plus de 14 millions de personnes dans 185 pays !</p>
	</article>
	<article  class="col">
		<h2 id=description>Boxe</h2>
		<div><img src="../img/boxe.png" alt="Boxe" title="Boxe" class="Boxe"  /></div><br/>
			<p><strong> La Boxe </strong> est un sport dynamique qui présente des atouts pour la forme et le mental.Ce sport de combat permet  d’améliorer le cardio vasculaire, l’endurance et la respiration, développe les réflexes, l’agilité et la coordination,fait travailler les muscles et tonifie le corps.Au fil des entraînements, elle aide à mieux se sentir et favorise la confiance et le maîtrise de soi.</p>
	
	</article>
	<article  class="col">
		<h2 id=description>Pilates</h2>
		<div><img src="../img/pilates.png" alt="Pilates" title="Pilates" class="Pilates"  /></div><br/>
			<p><strong>Le Pilates </strong>est un programme permettant de rééquilibrer les muscles du corps et améliorer votre posture. La méthode est simple : se concentrer sur les muscles principaux qui déterminent votre équilibre et le maintien de la colonne vertébrale. Il dure en moyenne 60 minutes et aide à bruler entre 330 et 450 calories par cours. 
        </p>
	</article>
	<article  class="col">
		<h2 id=description>Yoga</h2>
		<div><img src="../img/yoga.png" alt="Yoga" title="Yoga" class="Yoga"  /></div><br/>
			<p><strong> Le YOGA </strong>est une discipline originaire de l’Inde fondée sur un système qui permet de développer l’union et l’harmonie entre le corps, le mental et l’esprit. Résultats : Améliore la force et la souplesse Bénéﬁces sur le corps et l’esprit Sensation de sérénité et de détente après le cours</p>
	</article>
	<article  class="col">
		<h2 id=description>AGA Dance</h2>
		<div><img src="../img/aga.png" alt="AGA Dance" title="AGA Dance" class="aga"  /></div><br/>
			<p><strong>AGA Dance Fit</strong> est le dernier concept de l'industrie du fitness dans la danse, incorporant des rythmes de danse du continent africain avec des variations de fitness pour créer l'expérience aérobique ultime !
        Inspiré des styles de danse africaine, ce programme est unique en son genre et se concentre sur tous les aspects du conditionnement cardiovasculaire et musculaire.
        </p>
	</article>
	<article  class="col">
		<h2 id=description>Cross Training</h2>
		<div><img src="../img/cross.png" alt="Cross Training" title="Cross Training" class="cross"  /></div><br/>
			<p><strong>Le Cross Training </strong>est une méthode d’entrainement qui permet d'obtenir une amélioration de la force physique et une endurance de qualité. Le type de nombre d’exercices, les temps d’effort et de récupération, ainsi que le nombre de tours de circuit réalisé sont variables.</p>
	</article>
	<article  class="col">
		<h2 id=description>Cardio Boxing</h2>
		<div><img src="../img/cardioboxing.png" alt="cardio Boxing" title="Cardio Boxing" class="cardio Boxing"  /></div><br/>
			<p><strong> Le Cardio Boxing </strong>est une nouvelle pratique, qui combine les arts martiaux et l’aérobic. C'est un cours cardio vasculaire, de renforcement musculaire qui allie des mouvements de déplacements, mouvements permettant de solliciter toutes les parties du corps. Il Travaille de nombreux groupes musculaires, notamment au niveau des bras et des cuisses, brûle des calories pour amincir le corps, tonifie et sculpte,..
		</p>
	</article>
	<article  class="col">
		<h2 id=description>Body Combat</h2>
		<div><img src="../img/bodycombat.png" alt="body Combat" title="body Combat" class="body Combat"  /></div><br/>
			<p><strong> Le Body Combat </strong>est un cours à haute intensité inspiré des arts martiaux est sans contact et il n’y a pas de mouvements compliqués à maîtriser. Un instructeur vous poussera à augmenter l'intensité et vous permettra d'en tirer la meilleure de chaque partie. Libérerez-vous du stress, amusez-vous et sentez-vous l’âme d’un combattant.</p>
	</article>
	<article  class="col">
		<h2 id=description>Dance Orientale</h2>
		<div><img src="../img/DO.png" alt="Dance Orientale" title="Dance Orientale" class="Dance Orientale"  /></div><br/>
			<p><strong> La Dance Orientale </strong> permet d’apprendre la technique et les enchaînements de manière très accessible tout en développant le plaisir de la danse, la connaissance culturelle et l’épanouissement de chacun dans une ambiance conviviale et joyeuse.
		Ses bienfaits de la danse orientale sont autant physiques et psychologique. Elle redonne de la souplesse et muscle le corps.</p>
	</article>
	<article  class="col">
		<h2 id=description>Step</h2>
		<div><img src="../img/step.png" alt="Step" title="Step" class="Step"  /></div><br/>
			<p><strong> Le Step </strong>est une activité cardio-vasculaire (endurance) qui consiste à apprendre puis à répéter une chorégraphie à base de pas plus ou moins difficiles à l'aide d'un step ; cela permet d'améliorer sa condition physique, de s'affiner, voire de modeler son corps.
		</p>
	</article>
	<article  class="col">
		<h2 id=description>TRX</h2>
		<div><img src="../img/trx.png" alt="TRX" title="TRX" class="TRX"  /></div><br/>
			<p><strong>Le cours collectifs de TRX "Training Under Suspension”,</strong> C'est une activité très complète. On peut travailler l'ensemble des muscles de son corps à travers les différents exercices du TRX : abdominaux, dos, jambes, épaules, fessiers, bras... Une telle intensité permet de brûler de nombreuses calories. Un effet rendu possible par le mélange d'exercices de cardio et de renforcement musculaire.
        Un cours où l'on travaille ses muscles de façon vraiment différente !	</p>
	</article>
</div>
</div>
 </section>
<div><a href="#haut">haut de page</a></div>
<footer>
	 <button type="submit" class="bt" name="deconns"><a href="../connexion/destroy.php">Deconnexion</a></button>

 <center>My Fitness&copy;2019-2020</center>
 </footer>
</body>
</html>