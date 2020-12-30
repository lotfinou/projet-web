<?php
include "../../entity/type.php";
include "../../controller/typeC.php";

if (isset($_POST['id']) ){

    $typeC = new  typeC();
    $type = new type($_POST['id'],$_POST['nom'],$_POST['description']
    );

    $typeC->ajoutert($type);
    header('Location: listetype.php');
//var_dump($besoin);
}


?>