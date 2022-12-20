function verif() {
a=document.f.email.value;
if (a==""){
alert('Veuillez saisir votre email svp!');
return false;
}
else{
	return true;
}
}

function verif1(){
x=document.f1.nom.value;
y=document.f1.prenom.value;

a=document.f1.mdp.value;
b=document.f1.vmdp.value;

c=document.f1.abonnement[0].checked;
d=document.f1.abonnement[1].checked;
e=document.f1.abonnement[2].checked;
if(x=="" || z==""){
alert('Veuillez saisir votre nom et prenom svp vous plait');
return false;
}
else{
	return true;
}

 if(document.f1.nom.value.length<3){
	alert('La taille du nom doit etre superieur a 3');
	return false;
}
else{
	return true;
}
 if((document.f1.nom.value.charAt(0).toUpperCase()!=document.f1.nom.value.charAt(0))
	||(document.f1.prenom.value.charAt(0).toUpperCase()!=document.f1.prenom.value.charAt(0))){
   alert('Le premier caractere doit etre majuscule');
  return false;
	}
	else{
	return true;
 }

 if(document.f1.mdp.value != document.f1.vmdp.value){
  alert('Verifier votre mot de passe') ;
  return false;
}
else{
	return true;
}
 if((c==0) && (d==0) && (e==0)){
	alert('Il faut choisir un abonnement');
	return false;
}
else{
	return true;
}
 if(isNaN(document.f1.tel.value)==true){
	alert('Le numero de telephone doit etre numerique');
	return false;
}
else{
	return true;
}
 if(document.f1.email.value.indexOf("@")==-1){
	alert('Email doit contenir le caractere"@"');
	return false;
}
else{
	return true;
}
else {
alert('Bienvenue ' +document.f1.nom.value);
}

}




function verif2(){
if(document.f2.cours.options.selectedIndex==-1){
	alert('Il faut selectionner une activite');
}




ss
}
