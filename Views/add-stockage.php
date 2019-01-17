
<?php include "./Views/header.php"; ?>
<?php include "./Views/home.php"; ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Stockage</h4>
                        <?php
                        $msg = new \Services\FlashMessages();
                        if (isset($msg))
                            $msg->display();
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>denomination</label>
                                <input  value="<?php if (isset(  $_SESSION['stockage']['denomination'])) echo  $_SESSION['stockage']['denomination'] ?> " type="text" name="denomination"  class="form-control" id="denomination" aria-describedby="Dénomination" placeholder="Enter Dénomination" required="true">
                            </div>

                            <div class="form-group">
                                <label>Lieux</label>
                                <input  value="<?php if (isset(  $_SESSION['stockage']['lieux'])) echo  $_SESSION['stockage']['lieux'] ?> " type="text" name="lieux"  class="form-control" id="lieux" aria-describedby="Lieux" placeholder="Enter Lieux" required="true">
                            </div>

                            <div class="form-group">
                                <label>Quantité</label>
                                <input  value="<?php if (isset(  $_SESSION['stockage']['quantite'])) echo  $_SESSION['stockage']['quantite'] ?> " type="text" name="quantite"  class="form-control" id="quantite" aria-describedby="Quantité" placeholder="Enter Quantité" required="true">
                            </div>

                            <div class="form-group">
                                <label>Entreprise</label>
                                <input  value="<?php if (isset(  $_SESSION['stockage']['entreprise'])) echo  $_SESSION['stockage']['entreprise'] ?> " type="text" name="entreprise"  class="form-control" id="entreprise" aria-describedby="Entreprise" placeholder="Enter Entreprise" required="true">
                            </div>


                            <div class="form-group">
                                <label for="chantier" >Chantier</label>

                                <select class="form-control" id="chantier" name="chantier">

                                    <?PHP foreach ($chantier as $chantier): ?>
                                        <option value="<?php if (isset( $_SESSION['stockage']['Chantier'])) echo  $_SESSION['stockage']['Chantier']; else echo $chantier["nomChantier"] ?>"> <?php echo $chantier["nomChantier"] ?>
                                        </option>
                                    <?php endforeach;?>

                                </select>
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
