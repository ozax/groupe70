<?php include "./Views/header.php"; ?>
<?php require "./Views/home.php";?>
    <div class="main-panel">
    <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Liste des Societes</h4>
                    <div align="right">
                        <a class="john" href="<?=$repertory ?>/societe/add">
                            <button class="btn btn-secondary" >Ajouter</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Raison Sociale
                            </th>
                            <th>
                                Telephone
                            </th>
                            <th>
                                Adresse
                            </th>
                            </thead>

                            <tbody>
                            <?php foreach ($societe as $societe):?>
                                <tr>
                                    <td>
                                        <?=$societe["raisonSociale"]?>
                                    </td>
                                    <td>
                                        <?=$societe["telephone"]?>
                                    </td>
                                    <td>
                                        <?=$societe["adresse"]?>
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