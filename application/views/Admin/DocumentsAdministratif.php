<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
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
                    <div id="collapseFive" class="panel-collapse collapse in">
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
            <div class="well">
                      <table class="table table-striped">
       <thead>
        <tr>
         <th>Nom & Prénom</th>
         <th>Document</th>
         <th>CNE</th>
         <th>Date Demande</th>
         <th>Situation</th>
         <th>Options</th>
       </tr>
     </thead>

     <tbody>
       <?php foreach ($docs as $doc) : ?>
       <tr>
         <td><?= $doc->nom.' '.$doc->prenom; ?></td>
         <td><?= $doc->type; ?></td>
         <td><?= $doc->cne; ?></td>
         <td><?= $doc->date_ajout ?></td>
         <td>
                                  <?php
                                 $validation="Non";
                                 $cls="danger";
                                 if($doc->validation_admin==0){
                                    $validation="En Attent";
                                    $cls="warning";
                                }elseif ($doc->validation_admin==1) {
                                    $validation="Disponible";
                                    $cls="success";
                                }
                                ?>

                                <span class="label label-<?= $cls ?>"><?= $validation ?></span>
         </td>
         <td>
            <button data-toggle="modal" data-target="#myModalUpdateFile" type="button" data-id="<?= $doc->id; ?>" class="btn btn-success btn-sm">
                                   <span class="glyphicon glyphicon-eye-open"></span>
                               </button>
          <button data-toggle="modal" data-target="#myModalDelete" data-id="<?= $doc->id; ?>" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>

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
    <form action="<?= site_url('Admin/deleteMyFile') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Confirmation de suppression</h4>
      </div>
      <div class="modal-body text-danger">
          Voulez vous vraiment supprimer cette document ?
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







<div class="modal fade" id="myModalUpdateFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('Admin/ValiderDocument') ?>" enctype="multipart/form-data" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Demande de document administratif</center></h4>
      </div>
      <div class="modal-body">
              <div class="form-group">
               <label for="exampleInputEmail1">Nom</label>
               <input type="text" name="nom" id="nom" class="form-control" value="" disabled="disabled">
           </div>
           <div class="form-group">
           <label for="exampleInputEmail1">Prénom</label>
               <input type="text" name="prenom" id="prenom" class="form-control" value="" disabled="disabled">
           </div>
           <div class="form-group">
                <label for="exampleInputEmail1">CNE</label>
               <input type="text" name="cne" id="cne" class="form-control" value="" disabled="disabled">
           </div>
           <div class="form-group">
                <label for="exampleInputEmail1">Filière</label>
               <input type="text" name="filiere" id="filiere" class="form-control" value="" disabled="disabled">
           </div>
           <div class="form-group">
                <label for="exampleInputEmail1">Document</label>
               <input type="text" name="type" id="type" class="form-control" value="" disabled="disabled">
           </div>
           <div class="form-group">
                <label for="exampleInputEmail1">Niveau</label>
               <input type="text" name="niveau" id="niveau" class="form-control" value="" disabled="disabled">
           </div>
            <input type="text" id="id" class="hidden" value="" name="id">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
    <button type="submit" class="btn btn-success">Disponible</button>
</div>
</div>
</form>
</div>
</div>