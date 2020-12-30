<?PHP
include "C:/wamp64/www/Projet_web/back/core/offreC.php";

$offreC1=new offreC();
if (isset($_POST["id"])){
	$offreC1->supprimeroffre($_POST["id"]);
	header('Location: consulter_offre.php');
}

?>