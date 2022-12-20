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
<title>Contact réalisé par Yasmine Triki</title>
<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<header>

  <img src="../img/log.png" alt="logo" title="logo" class="logo" width="160" height="170" />
  <center><h1 id="titre_principal">My fitness</h1></center> 

<center>
<nav>
	 <ul>

  
  <li><a href="../view/activites.php">Activites</a> </li>
 
  <li><a href="../view/planning.php">Planning</a></li> 

  <li><a href="../view/contact.php">Contact</a></li>
  <li><a href="../view/evaluation.php">Evaluation</a></li>
     
     </ul>
</nav></center>
<hr>
</header>

 <article>
 	<center><h2 id="contact">CONTACTEZ-NOUS</h2></center>
 	<hr class="separateur">
 	<form action="../controller/ContactController.php?action=add" method="post">
   <center><fieldset>
 <legend><strong>Entrez en contact avec notre équipe</strong></legend>
 	 <div>
 	 	<label for="nom&prenom"></label>
 	 	<input type="text" name="nom&prenom" placeholder="Nom & Prénom" required/ >
 	 </div> <br/>
 	 <div>
 	 	<label for="email"></label>
        <input type="e-mail" name="email" id="email" placeholder="Email" required /> 
 	 </div> <br/>
 	 <div>
        <label for="tel" ></label>
        <input name="tel" type="tel"  maxlength="8"  placeholder="téléphone"  pattern="[0-9]{8}" />
     </div> <br/>
 	 <div> 
 	 	<label for="objet"></label>
 	 	<input type="text" name="objet" placeholder="Objet" required/ >
 	 </div> <br/>
 	 <div>
 	 	<label for="comm"></label> 
        <textarea name="comm" id="comm" rows="7" cols="40" placeholder="Ecrivez votre message"></textarea> 
 	 </div> <br/>
 	 <div>
 	 <button type="submit" class="bt" name="bt1">Envoyer</button>
 	 </div> </center> </fieldset></form>
 </article> 
  <div class="location">
   <h2 id="loc">Contact</h2>
    <div class="ctc-content">
      <p><strong>Tél :</strong>  +216 71 297 519 </p>
      <p> <strong>Adresse : </strong> 16 Rue Ibn Abi Dhiaf Z I, Megrine. <br/> </p> </section> 
                
   <hr>
  
    <h2 id="heure">Horaires</h2>
      <ul>
       <li>
        <p>Lundi - Vendredi : 07:00 – 22:00</p> </li>
       <li> <p>Samedi : 09:00 – 17:00</p></li>
       <li><p>Dimanche : 09:00 – 14:00</p></li>
      </ul>
   
  </div>
   </div>
 </center>
</article>

<footer>
   <button type="submit" class="bt" name="deconns"><a href="../connexion/destroy.php">Deconnexion</a></button>

 <center>My Fitness&copy;2019-2020</center>
 </footer>

</body>
</html>