<?php include "./Views/header.php"; ?>
<?php include "./Views/home.php"; ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Chantiers</h4>
                        <?php
                        $msg = new \Services\FlashMessages();
                        if (isset($msg))
                            $msg->display();
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nom Chantier</label>
                                <input value="<?php if (isset(  $_SESSION['chantiers']['nomChantier'])) echo  $_SESSION['chantiers']['nomChantier'] ?>" type="text" name="nomChantier"  class="form-control" id="nom" aria-describedby="Chantier name" placeholder="Enter nom Chantier">
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input value= "<?php if (isset(  $_SESSION['chantiers']['adresse'])) echo  $_SESSION['chantiers']['adresse'] ?>" type="text" name="adresse"  class="form-control" id="" aria-describedby="Adresse" placeholder="Enter Adresse">
                            </div>


                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                    </div>
                </div
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION['stockage']);?>