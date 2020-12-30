<?PHP
include "../../controller/evenementC.php";

$event=new evenementC();
if (isset($_POST["id"])){
    $event->supprimer($_POST["id"]);

    header('Location: ListeEvent.php');
}

?>