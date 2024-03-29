<?php require "./Views/header.php";?>
<body class="">
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=$repertory ?>/static/assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="./" class="simple-text logo-normal">
                Groupe 70 <a>Bienvenue, <?=$_SESSION['login_name']?> <!-- le Nom et Prenom de l'utilisateur ou de l'admin --></a>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=$repertory ?>" >
                        <i class="material-icons">calendar_today</i>
                        <p>Planning</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/users">
                        <i class="material-icons">perm_contact_calendar</i>
                        <p>Liste utilisateurs</p>
                    </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/salles">
                        <i class="material-icons">insert_invitation</i>
                        <p>Planning salle</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/moyens">
                        <i class="material-icons">location_ons</i>
                        <p>Moyens</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/aires">
                        <i class="material-icons">library_books</i>
                        <p>Les Aires</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/societe">
                        <i class="material-icons">business</i>
                        <p>Societe</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/chantier">
                        <i class="material-icons">location_city</i>
                        <p>Chantiers</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=$repertory ?>/stockage">
                        <i class="material-icons">library_books</i>
                        <p>Stockage</p>
                    </a>
                </li>


            </ul>
        </div>

    </div>



<?php require "./Views/footer.php";?>