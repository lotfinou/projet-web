<?PHP

include "C:/wamp64/www/Projet_web/back/core/offreC.php";

if (isset($_POST['name']) and isset($_POST['prix']) and isset($_POST['duree']) and isset($_POST['description'])){


	$offre1=new offre($_POST['name'],$_POST['description'],$_POST['prix'],$_POST['duree']);



$offre1C=new offreC();

//echo $_POST['duree'];

$offre1C->ajouteroffre($offre1);

//echo"ajout avec success";
header('Location: consulter_offre.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>



