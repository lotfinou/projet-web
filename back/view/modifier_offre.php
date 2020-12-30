<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GYM esprit - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- side bar -->
    <?php require_once "sidebar.php"; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once "topbar.php"; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">


   <div class="row">
    <div class="col-md-4">
      <h3 class="text-center text-info">modifier Offre</h3>
            <hr>
                            
            <?PHP
include "C:/wamp64/www/Projet_web/back/core/offreC.php";

if (isset($_GET['id'])){
    $offre1C=new offreC();
    $result=$offre1C->recupereroffre($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $name=$row['name'];
        $prix=$row['prix'];
        $duree=$row['duree'];
        $description=$row['description'];
?>


<form class="was-validated" method="POST" >


<div class="form-group">
<input type="text" name="name" class="form-control" required pattern="[0-9a-zA-Z,/.]{3,12}" placeholder="Enter Name Of the Offre" value="<?PHP echo $name ?>" >
</div>
<div class="form-group">
<input type="text" name="duree" class="form-control" required pattern="{1,12}" placeholder="Enter duree Of the Offre" value="<?PHP echo $duree ?>" >
</div>


                <div class="form-group">
<input type="price" name="prix" class="form-control" required pattern="[0-9]{1,12}" placeholder="Enter your price" value="<?PHP echo $prix ?>" >
</div>
<div class="form-group">
<input type="text"  class="form-control" required pattern="[0-9a-zA-Z,/.]{3,12}" placeholder="description About the offer" name="description" value="<?PHP echo $description ?>">
</div>





            <div class="form-group">
<input  class="btn btn-success btn-block" type="submit" name="modifier" value="Update">
</div>

<div class="form-group">
<input  type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
</div>

</form>
<?PHP
    }}
if (isset($_POST['modifier'])){
	$offre1=new offre($_POST['name'],$_POST['description'],$_POST['prix'],$_POST['duree']);
    $offre1C->modifieroffre($offre1,$_POST['id_ini']);
    echo $_POST['id_ini'];
    echo ("<script> window.location.replace(\"consulter_offre.php\")</script>");
}
?> 
</div>

    </div>


     </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>