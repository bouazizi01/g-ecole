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
                    <div id="collapseOne" class="panel-collapse collapse in">
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
       <caption><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Ajouter</button></caption>
       <thead>
        <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Tel</th>
         <th>Email</th>
         <th>Niveau</th>
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
         <td><?= $etudiant->niveau; ?>ème année</td>
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



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <form name="fileinfo" action="<?= site_url('Admin/AddEtudiant') ?>" onsubmit="return false;" enctype="multipart/form-data" method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Ajout Etudiant</center></h4>
        </div>
        <div class="modal-body">
          <div id="error_message" class="row alert alert-danger text-center hide">
            <h3>Matricule Existe déja</h3>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule">
          </div>
          <div class="form-group">
            <select name="niveau" id="niveau" class="form-control">
             <option>Niveau</option>
             <option value="1">1er année</option>
             <option value="2">2ème année</option>
             <option value="3">3ème année</option>
             <option value="4">4ème année</option>
             <option value="5">5ème année</option>
           </select>
         </div>

         <div class="form-group">
          <input type="file" class="form-control" id="img_file" name="img" accept="image/*">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
        <button type="button" id="addEtudiant" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </form>
</div>
</div>







<div class="modal fade" id="myModalDelete" >
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('Admin/DeleteEtudiant') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Confirmation de suppression</h4>
        </div>
        <div class="modal-body text-danger">
          <span id="dispaly_messsage">Voulez vous vraiment supprimer l'etudiant </span> ?
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
    <form action="<?= site_url('Admin/UpdateEtudiant') ?>" enctype="multipart/form-data" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Modifier Etudiant</center></h4>
        </div>
        <div class="modal-body text-danger">

          
          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
               <input type="text" name="nom" id="nom" class="form-control" value="" placeholder="Nom">
             </div>
             <div class="form-group">
               <input type="text" name="prenom" id="prenom" class="form-control" value="" placeholder="Prénom">
             </div>
             <div class="form-group">
               <input type="text" name="tel" id="tel" class="form-control" value="" placeholder="Tel">
             </div>
             <div class="form-group">
               <input type="text" name="email" id="email" class="form-control" value="" placeholder="Email">
             </div>
             <div class="form-group">
               <input type="text" name="matricule" id="matricule" class="form-control" value="" placeholder="Matricule">
             </div>
             <div class="form-group">
               <select class="form-control" id="niveau" name="niveau">
                 <option value="1">1er année</option>
                 <option value="2">2ème année</option>
                 <option value="3">3ème année</option>
                 <option value="4">4ème année</option>
                 <option value="5">5ème année</option>
               </select>
             </div>

           </div>
           <div class="col-xs-6">
      <img width="200" id="image_et"  class="img-thumbnail" src="<?php echo base_url(); ?>images/">
            <input type="file" class="form-group" name="img" accept="image/*">
          </div>
        </div>
        <input type="text" id="id_et" class="hidden" value="" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
        <button type="submit" class="btn btn-primary">Confirmer</button>
      </div>
    </div>
  </form>
</div>
</div>






<div class="modal fade" id="myModalValidateAdd" >
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Etudiant Ajouté</h4>
        </div>
        <div class="modal-body text-suucess">
          Etudiant a été ajouté avec succès.
        </div>
        <div class="modal-footer">
          <a href="<?= site_url('Admin/Etudiants') ?>" class="btn btn-success">OK</a>
        </div>
      </div>
  </div>
</div>