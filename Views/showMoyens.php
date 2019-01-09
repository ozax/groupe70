
<?php include "./Views/header.php"; ?>
<?php require "./Views/home.php";?>
    <div class="main-panel">
    <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Liste des Moyens</h4>
                    <div align="right">
                        <a class="john" href="<?=$repertory ?>/moyens/add">
                            <button class="btn btn-secondary" >Ajouter</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Immatriculation
                            </th>
                            <th>
                                Dénomination
                            </th>
                            </thead>

                            <tbody>
                            <?php foreach ($moyens as $moyens):?>
                                <tr>
                                    <td>
                                        <?=$moyens["immatriculation"]?>
                                    </td>
                                    <td>
                                        <?=$moyens["denomination"]?>
                                    </td>
                                    <td>
                                        <div align="right">
                                            <button class="btn btn-dark" >Modifier</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="right">
                                            <button class="btn btn-danger" >Supprimer</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./Views/footer.php"; ?>