<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-3" >
      <div class="panel-group" id="accordion" style="position:fixed; width: 20%;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span>Gestion Utilsateurs</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user text-primary"></span><a href="<?= site_url('Admin/Etudiants') ?>">Etudiants</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user text-success"></span><a href="<?= site_url('Admin/Professeurs') ?>">Professeurs</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-open">
                            </span>Gestion Des Fichiers</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                         <span class="glyphicon glyphicon-book"></span><a href="<?= site_url('Admin/Cours') ?>">Support Cours & TPs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <span class="glyphicon glyphicon-book"></span><a href="<?= site_url('Admin/MesFichiers') ?>">Mes Fichiers</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Mon Compte</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="active" href=" <?= site_url('User/MonProfile') ?> ">Modifier Mon Profile</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-parent="#accordion" href="#collapseFor"><span class="glyphicon glyphicon-file">
                            </span>Emploi Du Temps</a>
                        </h4>
                    </div>
                    <div id="collapseFor" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="active" href=" <?= site_url('Admin/EmploiDuTemps') ?>">Emploi Du Temps</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-file">
                            </span>Documents Administratif</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="active" href=" <?= site_url('Admin/DocumentsAdministratif') ?>">Documents Administratif</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
   </div>
   <div class="col-sm-9 col-md-9">
    <div class="well" >
      <table class="table table-striped" id="example">
       <thead>
        <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Tel</th>
         <th>Email</th>
         <th>Fonction</th>
         <th>Options</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($etudiants as $etudiant) : ?>
       <tr>
         <td><?= $etudiant->nom; ?></td>
         <td><?= $etudiant->prenom; ?></td>
         <td><?= $etudiant->tel; ?></td>
         <td><?= $etudiant->email; ?></td>
         <td><?= ucfirst($etudiant->role); ?></td>
         <td>
         <button data-toggle="modal" data-target="#myModalUpdate" type="button" data-id="<?= $etudiant->id; ?>" class="btn btn-success btn-sm">
         <span class="glyphicon glyphicon-pencil"></span>
          </button>
          <button data-toggle="modal" data-target="#myModalDelete" data-fullname="<?= $etudiant->prenom.' '.$etudiant->nom; ?>" data-id="<?= $etudiant->id; ?>" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>
          </button>
        </td>
      </tr>
      <?php  endforeach ;?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>




<div class="modal fade" id="myModalDelete" >
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('Admin/DeleteUserEnAttent') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Confirmation de suppression</h4>
        </div>
        <div class="modal-body text-danger">
          Voulez vous vraiment supprimer cette utilisateur ?
          <input type="text" id="hidden_id" class="hidden" value="" name="id"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
          <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </form>
  </div>
</div>





<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('Admin/AccepterUser') ?>" enctype="multipart/form-data" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Vérifiction</center></h4>
        </div>
        <div class="modal-body text-danger">
          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
               <input type="text" name="nom" id="nom" class="form-control" value="" placeholder="Nom" disabled="disabled">
             </div>
             <div class="form-group">
               <input type="text" name="prenom" id="prenom" class="form-control" value="" placeholder="Prénom" disabled="disabled">
             </div>
             <div class="form-group">
               <input type="text" name="tel" id="tel" class="form-control" value="" placeholder="Tel" disabled="disabled">
             </div>
             <div class="form-group">
               <input type="text" name="email" id="email" class="form-control" value="" placeholder="Email" disabled="disabled">
             </div>
             <div class="form-group">
               <input type="text" name="matricule" id="matricule" class="form-control" value="" placeholder="Matricule" disabled="disabled">
             </div>
           </div>
           <div class="col-xs-6">
            <img width="200" id="image_et"  class="img-thumbnail" src="<?php echo base_url(); ?>images/">
          </div>
        </div>
        <input type="text" id="id_et" class="hidden" value="" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
        <button type="submit" class="btn btn-primary">Accepter</button>
      </div>
    </div>
  </form>
</div>
</div>