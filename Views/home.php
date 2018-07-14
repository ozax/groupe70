<?php require "./Views/header.php";?>
<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=$repertory ?>/static/assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="./" class="simple-text logo-normal">
                Groupe 70
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$repertory ?>/users/add">
                        <i class="material-icons">person</i>
                        <p>Ajouter utilisateur</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/users">
                        <i class="material-icons">content_paste</i>
                        <p>Liste utilisateurs</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">content_paste</i>
                        <p>Planning</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">library_books</i>
                        <p>Historique</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">bubble_chart</i>
                        <p>Planning salle</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">location_ons</i>
                        <p>Moyens</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">library_books</i>
                        <p>Societe</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">library_books</i>
                        <p>Chantier</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">library_books</i>
                        <p>Stockage</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>



<?php require "./Views/footer.php";?>