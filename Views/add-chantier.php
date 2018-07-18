<?php include "./Views/home.php"; ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter Chantiers</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nom Chantier</label>
                                <input type="text" name="nomChantier"  class="form-control" id="nom" aria-describedby="Chantier name" placeholder="Enter nom Chantier">
                            </div>

                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse"  class="form-control" id="" aria-describedby="Adresse" placeholder="Enter Adresse">
                            </div>


                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                    </div>
                </div
            </div>
        </div>
    </div>
</div>