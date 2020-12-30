<?PHP
include "C:/wamp64/www/Projet_web/back/core/offreC.php";

$panierC1=new panierC();
if (isset($_POST["id"])){
	$panierC1->supprimerpanier($_POST["id"]);
	header('Location: consulter_panier.php');
}

?>