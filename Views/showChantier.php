<?php require "./Views/home.php";?>
    <div class="main-panel">
    <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Liste des utilisateurs</h4>
                    <div align="right">
                        <a class="john" href="<?=$repertory ?>/chantier/add">
                            <button class="btn btn-secondary" >Ajouter</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Nom du chantier
                            </th>
                            <th>
                                Adresse
                            </th>
                            </thead>

                            <tbody>
                            <?php foreach ($chantier as $chantier):?>
                                <tr>
                                    <td>
                                        <?=$chantier["nomChantier"]?>
                                    </td>
                                    <td>
                                        <?=$chantier["adresse"]?>
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

<?php require "./Views/footer.php";?>