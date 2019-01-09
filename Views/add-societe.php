<?php include "./Views/header.php"; ?>
<?php include "./Views/home.php"; ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Societes</h4>
                        <?php
                        $msg = new \Services\FlashMessages();
                        if (isset($msg))
                            $msg->display();
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Raison Sociale</label>
                                <input type="text" name="raisonSociale"  class="form-control" id="raisonSociale" aria-describedby="Raisn sociale" placeholder="Enter la raison sociale">
                            </div>




                            <div class="form-group">
                                <label>Telephone </label>
                                <input type="number" name="telephone"  class="form-control" id="telephone" aria-describedby="entrer votre num telephone" placeholder="Enter le num telePhone">
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse"  class="form-control" id="adresse" aria-describedby="entrer votre adresse" placeholder="Enter Adresse">
                            </div>


                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                    </div>
                </div
            </div>
        </div>
    </div>
</div>