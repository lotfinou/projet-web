<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GYM esprit</title>

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

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Boîte de réception</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-sm-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="email-header">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-8 top-action-left">
                                        <div class="float-left">
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Selectionné <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">tous</a>
                                                    <a class="dropdown-item" href="#">aucun</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">lus</a>
                                                    <a class="dropdown-item" href="#">Non lus</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Répondre</a>
                                                    <a class="dropdown-item" href="#">Transférer</a>
                                                    <a class="dropdown-item" href="#">Archiver</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Marquer comme lu</a>
                                                    <a class="dropdown-item" href="#">Marquer comme non lu </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Forum</a>
                                                    <a class="dropdown-item" href="#">Mise à jour</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Spam</a>
                                                    <a class="dropdown-item" href="#">Corbeille</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">nouveau</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Travail</a>
                                                    <a class="dropdown-item" href="#">Famille</a>
                                                    <a class="dropdown-item" href="#">Sociale</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Primaire</a>
                                                    <a class="dropdown-item" href="#">Promotions</a>
                                                    <a class="dropdown-item" href="#">Forum</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-left d-none d-sm-block">
                                            <input type="text" placeholder="Search Messages" class="form-control search-message">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-4 col-4 top-action-right">
                                        <div class="text-right">
                                            <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
                                            <div class="btn-group">
                                                <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-content">
                                <div class="table-responsive">
                                    <table class="table table-inbox table-hover">
                                        <thead>
                                        <tr>
                                            <th colspan="6">
                                                <input type="checkbox" id="check_all">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                            <td class="name">John Doe</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-date">13:14</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">Envato Account</td>
                                            <td class="subject">Important account security update from Envato</td>
                                            <td></td>
                                            <td class="mail-date">8:42</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">Twitter</td>
                                            <td class="subject">HRMS Bootstrap Admin Template</td>
                                            <td></td>
                                            <td class="mail-date">30 Nov</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">Richard Parker</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td></td>
                                            <td class="mail-date">18 Sep</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">John Smith</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td></td>
                                            <td class="mail-date">21 Aug</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">me, Robert Smith (3)</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td></td>
                                            <td class="mail-date">1 Aug</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">Codecanyon</td>
                                            <td class="subject">Welcome To Codecanyon</td>
                                            <td></td>
                                            <td class="mail-date">Jul 13</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">Richard Miles</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-date">May 14</td>
                                        </tr>
                                        <tr class="unread clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                            <td class="name">John Smith</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td></td>
                                            <td class="mail-date">11/11/16</td>
                                        </tr>
                                        <tr class="clickable-row" data-href="mail-view.html">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                            <td class="name">Mike Litorus</td>
                                            <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                            <td></td>
                                            <td class="mail-date">10/31/16</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

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