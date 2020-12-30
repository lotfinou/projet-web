
<?php

include "../../entity/evenement.php";
include "../../controller/evenementC.php";
$VC = new evenementC();
if (
    isset($_POST["titre"]) &&
    isset($_POST["date"]) &&
    isset($_POST["lieu"]) &&
    isset($_POST["descrip"])&&
    isset($_POST["dateModif"])&&
    isset($_POST["dateAjout"])&&
    isset($_POST["nbPartic"])&&
    isset($_POST["etat"])&&
    isset($_POST["nom"])
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["lieu"]) &&
        !empty($_POST["descrip"]) &&
        !empty($_POST["dateModif"])&&
        !empty($_POST["dateAjout"])&&
        !empty($_POST["nbPartic"])&&

        isset($_POST["etat"])&&
        !empty($_POST["nom"])
    ) {
        $voyage = new evenement(
            $_POST['titre'],
            $_POST['date'],
            $_POST['lieu'],
            $_POST['descrip'],
            $_POST['dateModif'],
            $_POST['dateAjout'],
            $_POST['nbPartic'],

            $_POST['etat'],
            $_POST['nom']
        );
        $VC->ajouter($voyage);
        header('location:listeEvent.php');
        //var_dump( $voyage);
        //console.log($voyage);
    } else
        // header('location:listeVoyage.php');
        echo "problem !!";
}

?>

