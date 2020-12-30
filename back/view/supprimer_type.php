<?PHP
include "../../controller/typeC.php";

$besoin=new typeC();
if (isset($_POST["id"])){
    $besoin->supprimert($_POST["id"]);

    header('Location: listetype.php');
}

?>