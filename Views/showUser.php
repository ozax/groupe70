<?php include "./Views/header.php"; ?>
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
                            <a class="john" href="<?=$repertory ?>/users/add">
                                <button class="btn btn-secondary" >Ajouter</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Nom
                                </th>
                                <th>
                                    Prenom
                                </th>
                                <th>
                                    N° Tel
                                </th>
                                <th>
                                    Email
                                </th>
                                </thead>

                                <tbody>
                                 <?php foreach ($user as $user):?>
                                <tr>
                                    <td>
                                      <?=$user["nom"]?>
                                    </td>
                                    <td>
                                       <?=$user["prenom"]?>
                                    </td>
                                    <td>
                                        <?=$user["phone"]?>
                                    </td>
                                    <td>
                                       <?=$user["email"]?>
                                    </td>
                                    <td>
                                        <div align="right">
                                            <a href="<?=$repertory?>/users/edit/<?=$user["id"]?>">
                                            <button class="btn btn-dark" >Modifier</button>
                                            </a>
                                        </div>
                                    </td>
                                <td>
                                    <div align="right">
                                        <a data-toggle="modal" data-target="#suser<?=$user["id"]?>">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        <button class="btn btn-danger" >Supprimer</button>
                                        </a>
                                    </div>
                                </td>

                                </tr>

                                     <div class="modal fade" id="suser<?=$user["id"]?>" role="dialog" aria-labelledby="myModalLabel">
                                         <div class="modal-dialog" role="document">
                                             <!-- Le contenu du modal-->
                                             <div class="modal-content">
                                                 <form methode='post' action='suparticle.php' enctype="multipart/form-data">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer un article</div></h4>
                                                     </div>
                                                     <div class="modal-body">
                                                         <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                                                         <div class="modal-footer">
                                                             <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                             <a href="<?=$repertory?>/users/delete/<?=$user["id"]?>" type="submit" name='buser' class="btn btn-danger">Supprimer</a>
                                                         </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>

                                 <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?php require "./Views/footer.php";?>