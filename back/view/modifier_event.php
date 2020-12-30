<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ajouter event</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php require_once 'sidebar.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require_once 'topbar.php';
            ?>

            <?php

            include  "../../entity/evenement.php";
            include  "../../controller/evenementC.php";
            if(isset($_GET["id"]))
            {
            $event=new evenementC();
            $result=$event->recuperer($_GET["id"]);
            foreach ($result as $row){


            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div>
                    <form method="post" >
                        
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" name="titre" id="titre" value="<?php echo $row["titre"]?>
                            " >
                        </div>

                        <div class="form-group">
                            <label for="date">Date Evenement</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo $row["date"]?>">
                        </div>
                        <div class="form-group">
                            <label for="lieu">Lieu Evenement</label>
                            <input type="text" class="form-control" name="lieu" id="lieu" value="<?php echo $row["lieu"]?>">
                        </div>

                        <div class="form-group">
                            <label for="nbrPlace">Nombre de participants</label>
                            <input type="number" class="form-control" name="nbrPlace" value="<?php echo $row["nbPartic"]?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Modification</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo $row["dateModif"]?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Ajout</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo $row["dateAjout"]?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description </label>
                            <textarea class="form-control" name="description" > <?php echo $row["descrip"]?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="etat">etat</label>
                            <input type="text" class="form-control" name="etat" value="<?php echo $row["etat"]?>">
                        </div>
                        <?php
                        include "../../controller/typeC.php";
                        $bc=new typeC();
                        $listeB=$bc->affichert();
                        ?>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nom"> nom </label>
                                <div >
                                    <select name="nom">
                                        <?php
                                        foreach ($listeB as $row)
                                        {
                                            ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['nom'];?></option>
                                        <?php }?>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" value="Envoyer" class="btn btn-primary" name="modifier">Submit</button>
                        <input type="hidden" name="id" value="<?PHP echo $row["id"];?>" >

                    </form>

                    <?php

                    }}
                    if (isset($_POST['modifier'])){
                        $evenement = new evenement(
                            $_POST['id'],
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
                        $event->modifier($evenement,$_POST['id']);
                        header('Location: listeEvent.php');
                        // var_dump($_POST['id']);
                        ob_end_flush();
                    }
                    ?>

                </div>






            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>