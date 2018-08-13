<?php include "./Views/header.php"; ?>
<?php include "./Views/home.php"; ?>
<div class="main-panel">
<div class="content">
    <div class="container-fluid">
        <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Utilisateur</h4>
                        <?php
                        $msg = new \Services\FlashMessages();
                        if (isset($msg))
                            $msg->display();
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom"  class="form-control" id="nom" aria-describedby="familly name" placeholder="Enter nom">
                            </div>

                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" name="prenom"  class="form-control" id="prenom" aria-describedby="last name" placeholder="Enter Prenom">
                            </div>

                            <div class="form-group">
                                <label>Entreprise </label>
                                <input type="text" name="Entreprise"  class="form-control" id="Entrprise " aria-describedby="Entreprise" placeholder="Enter Entreprise">
                            </div>

                            <div class="form-group">
                                <label>phone </label>
                                <input type="number" name="phone"  class="form-control" id="phone" aria-describedby="entrer votre num telephone" placeholder="Enter Phone">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="entrer votre mail" placeholder="Enter mail">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                </div>
            </div
        </div>
    </div>
</div>
</div>