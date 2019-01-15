
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
                                <input type="text" name="denomination"  class="form-control" id="denomination" aria-describedby="Dénomination" placeholder="Enter Dénomination" required="true">
                            </div>



                            <div class="form-group">
                                <label>Lieux</label>
                                <input type="text" name="lieux"  class="form-control" id="lieux" aria-describedby="Lieux" placeholder="Enter Lieux" required="true">
                            </div>

                            <div class="form-group">
                                <label>Quantité</label>
                                <input type="text" name="quantite"  class="form-control" id="quantite" aria-describedby="Quantité" placeholder="Enter Quantité" required="true">
                            </div>

                            <div class="form-group">
                                <label>Entreprise</label>
                                <input type="text" name="entreprise"  class="form-control" id="entreprise" aria-describedby="Entreprise" placeholder="Enter Entreprise" required="true">
                            </div>


                            <div class="form-group">
                                <label for="chantier" >Chantier</label>

                                <select class="form-control" id="chantier" name="chantier">
                                    <?PHP foreach ($chantier as $chantier): ?>

                                        <option value="<?=$chantier["nomChantier"]?>"> <?=$chantier["nomChantier"]?>
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