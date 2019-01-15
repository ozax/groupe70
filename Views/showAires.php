
<?php include "./Views/header.php"; ?>
<?php require "./Views/home.php";?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Liste des Aires de déchargement</h4>
                            <div align="right">
                                <a class="john" href="<?=$repertory ?>/aires/add">
                                    <button class="btn btn-secondary" >Ajouter</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Dénomination
                                    </th>
                                    <th>
                                        Abréviation
                                    </th>
                                    <th>
                                        Chantier
                                    </th>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($aires as $aire):?>
                                        <tr>
                                            <td>
                                                <?=$aires["denomination"]?>
                                            </td>
                                            <td>
                                                <?=$aire["abreviation"]?>
                                            </td>
                                            <td>
                                                <?=$aires["Chantier"]?>
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