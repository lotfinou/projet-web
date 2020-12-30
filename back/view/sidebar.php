<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GYM esprit<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


    <!--START Gestion coach.php-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVoyage" aria-expanded="true" aria-controls="collapseVoyage">
            <i class=""></i>
            <span>Coachs</span>
        </a>
        <div id="collapseVoyage" class="collapse" aria-labelledby="headingVoyage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Coach:</h6>
                <a class="collapse-item" href="AjouterEvent.php">Consulter Coach</a>
                <a class="collapse-item" href="AjouterEvent.php">Ajouter Compte Coach</a>
                <a class="collapse-item" href="ModifierEvenet.php">Modifier Compte Coach</a>
                <a class="collapse-item" href="ModifierEvenet.php">Supprimer Compte Coach</a>
            </div>
        </div>
    </li>

    <!--END Gestion voyage.php-->

    <!--STARt Gestion Clients.php-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClients" aria-expanded="true" aria-controls="collapseClients">
            <i class=""></i>
            <span>Clients</span>
        </a>
        <div id="collapseClients" class="collapse" aria-labelledby="headingClients" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Clients:</h6>
                <a class="collapse-item" href="Consulterclient.php">Consulter Clients</a>
                <a class="collapse-item" href="Consultersuggestions.php">Ajouter Compte Client</a>
                <a class="collapse-item" href="StatistiquesClient.php">Modifier Compte Client</a>
                <a class="collapse-item" href="StatistiquesClient.php">Supprimer Compte Client</a>
            </div>
        </div>
    </li>
    <!--END Gestion Clients.php-->

    <!--Start Gestion Annonce.php-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnnonce" aria-expanded="true" aria-controls="collapseAnnonce">
            <i class=""></i>
            <span>Annonce</span>
        </a>
        <div id="collapseAnnonce" class="collapse" aria-labelledby="headingAnnonce" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> Annonce:</h6>
                <a class="collapse-item" href="afficherAnnonceB.php">Consulter annonce</a>
                <a class="collapse-item" href="afficherAnnonceB.php">Ajouter annonce</a>
                <a class="collapse-item" href="afficherAnnonceB.php">Supprimer annonce</a>
            </div>
        </div>
    </li>

    <!--end Gestion Annonce.php-->



    <!--Go Gestion Events.php-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseEvents">
            <i class=""></i>
            <span>Evenement</span>
        </a>
        <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> Evenement:</h6>
                <a class="collapse-item" href="ajouter_event.php">Ajouter Evenement</a>
                <a class="collapse-item" href="listeEvent.php">Liste Evenement</a>
                <a class="collapse-item" href="ajouttype.php">Ajouter  type Evenement</a>
                <a class="collapse-item" href="listetype.php">Liste  des types </a>

            </div>
        </div>
    </li>

    <!--END Gestion event.php-->

    <!--START Gestion blog.php-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="true" aria-controls="collapseBlogs">
            <i class=""></i>
            <span>Abonnement</span>
        </a>
        <div id="collapseBlogs" class="collapse" aria-labelledby="headingBlogs" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Offre:</h6>
                <a class="collapse-item" href="checkout_offre.php">Ajouter Offre</a>
                <a class="collapse-item" href="consulter_offre.php">Consulter Offre</a>
                <h6 class="collapse-header">Panier:</h6>
                <a class="collapse-item" href="consulter_panier.php">Consulter Pannier</a>


            </div>
        </div>
    </li>

    <!--END Gestion blog.php-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmails" aria-expanded="true" aria-controls="collapseEmails">
            <i class=""></i>
            <span>Emails</span>
        </a>
        <div id="collapseEmails" class="collapse" aria-labelledby="headingEmails" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Email</h6>
                <a class="collapse-item" href="compose.php">Ecrire Mail</a>
                <a class="collapse-item" href="inbox.php">Boite de Récéption</a>


            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true" aria-controls="collapseForms">
            <i class=""></i>
            <span>Forms</span>
        </a>
        <div id="collapseForms" class="collapse" aria-labelledby="headingForms" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Forms</h6>
                <a class="collapse-item" href="formHorizaontale.php">Form Horizontale</a>
                <a class="collapse-item" href="formVerticale.php">Form Verticale</a>


            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTabs" aria-expanded="true" aria-controls="collapseTabs">
            <i class=""></i>
            <span>Tabs</span>
        </a>
        <div id="collapseTabs" class="collapse" aria-labelledby="headingTabs" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tabs</h6>
                <a class="collapse-item" href="basicTab.php">Tableaux basiques</a>
                <a class="collapse-item" href="dataTab.php">Tableaux de données</a>


            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>



            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->