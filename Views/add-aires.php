
<?php include "./Views/header.php"; ?>
<?php include "./Views/home.php"; ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Les Aires</h4>
                        <?php
                        $msg = new \Services\FlashMessages();
                        if (isset($msg))
                            $msg->display();
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Dénomination</label>
                                <input type="text" name="immatriculation"  class="form-control" id="immatriculation" aria-describedby="Immatriculation" placeholder="Enter Immatriculation" required="true">
                            </div>



                            <div class="form-group">
                                <label>Abréviation</label>
                                <input type="text" name="denomination"  class="form-control" id="denomination" aria-describedby="Dénomination" placeholder="Enter Dénomination" required="true">
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