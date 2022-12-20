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
<title>Planning de la semaine réalisé par Yasmine Triki</title>
<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<header>
 
  <img src="../img/log.png" alt="logo" title="logo" class="log" width="160" height="170"   />

  <h1 id="titre_principal"><strong>My fitness</strong></h1> 

<!-- menu -->
<center>
<nav>
	<ul>

  <li><a href="../view/activites.php">Activites</a> </li>
 
  <li><a class="active" href="../view/planning.php">Planning</a></li> 

  <li><a href="../view/contact.php">Contact</a></li>
  <li><a href="../view/evaluation.php">Evaluation</a></li>
     </ul>
</nav>
</center>
<hr>
<!-- end menu -->
</header>
<center>
<h2 id="planning"> Planning  </h2>
<hr class="separateur">
<table>
 <thead>
     <tr> 
	   <th>Lundi</th>
	   <th>Mardi</th>
	   <th>Mercredi</th>
	   <th>Jeudi</th>
	   <th>Vendredi</th>
	   <th>Samedi</th>
	   <th>Dimanche</th>
	 </tr>
 </thead>	 
  <tbody>
   <tr> 
      <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td> <p> Cross <br/> 
	          Training <br/>
	         11h30 </p> </td>
	  <td> CAF <br/> 
	      12h30 </td>   
   </tr>
   <tr> 
      <td> Body <br/>
           Pump <br/>
            12h30 </td>
	  <td> Cross <br/> 
	       Training <br/>
	         12h30  </td>
	  <td>  CAF <br/> 
	      12h30 </td>
	  <td> Circuit <br/>
	       Training <br/>
	        12h30 </td>
	  <td> CAF <br/> 
	      12h30 </td>
	  <td>CAF <br/> 
	      12h30 </td>
	  <td> Spinning <br/>
	        12h30</td>   
   </tr>
   <tr> 
      <td>Spinning <br/> 
          Cross Training <br/>
           18h </td>
	  <td> D.Orientale <br/>
	        Pilates <br/> 
	        Spinning <br/>
	          18h</td>
	  <td> Body Pump <br/>
	       18h</td>
	  <td> Yoga <br/>
	        18h</td>
	  <td>Spinning <br/>
	        18h</td>
	  <td> </td>
	  <td>  </td>   
   </tr>
   <tr> 
      <td>Body Pump <br/>
          19h</td>
	  <td> CAF <br/>
	      Spinning <br/>
	        19h</td>
	  <td>Body Combat <br/> 
	       Boxe <br/>
	         19h </td>
	  <td>CAF <br/>
	       19h</td>
	  <td> Cardio Boxing <br/>
	     Spinning <br/>
	      19h </td>
	  <td></td>
	  <td></td>   
   </tr>
   <tr> 
      <td></td>
	  <td>Zumba <br/>
	      19h30</td>
	  <td> </td>
	  <td> AGA Dance <br/>
	         19h30</td>
	  <td> </td>
	  <td></td>
	  <td></td>   
   </tr>
   <tr> 
      <td> CAF <br/> 
            20h</td>
	  <td> Cross <br/> 
	       Training <br/>
	         20h</td>
	  <td> Pilates <br/>
	       20h </td>
	  <td> Coss <br/>
	      Training <br/>
	         + <br/>
	       TRX <br/>
	         20h</td>
	  <td>Body <br/>
	     Pump <br/>
	      20h</td>
	  <td></td>
	  <td></td>   
   </tr>
  </tbody>
</table>
</center>
<footer>
 <center>My Fitness&copy;2019-2020</center>
 </footer>
</body>
</html>

 

