<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
           <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user"></span>Etudiant & Prof</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-user text-danger"></span>
                                    <a href="<?= site_url('Etudiant/Etudiants') ?>" text-danger>Etudiants <?= $this->session->userdata('niveau') ?> ème année</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-user text-danger"></span>
                                    <a href="<?= site_url('Etudiant/Profs') ?>" >Professeurs</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-book"></span>Cours & TPs</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="<?= site_url('Etudiant/CoursAndTPs') ?>"><span class="glyphicon glyphicon-file"></span>Cours & TPs</a>
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
                                    <a class="active" href=" <?= site_url('User/MonProfile') ?> ">Modifier Mon Profile</a>                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-list-alt">
                            </span>Documents Administratifs</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="<?= site_url('Etudiant/MesDocumentAdministratif') ?>"><span class="glyphicon glyphicon-list-alt">
                                        </span>Mes Documents Administratifs</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-file">
                            </span>Emploi De Temps</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="<?= site_url('Etudiant/EmploiDeTemps') ?>">Emploi de temps</a>
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
                <table class="table table-striped" id="example">
                    <caption><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalAddFile"><span class="glyphicon glyphicon-plus"></span>Demandé Document</button></caption>
                    <thead>
                        <tr>
                            <td>Type</td>
                            <td>CNE</td>
                            <td>Filière</td>
                            <td>Date</td>
                            <td>Validation</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($mesDocs as $doc) : ?>
                           <tr>
                             <td><?= $doc->type; ?></td>
                             <td><?= $doc->cne; ?></td>
                             <td><?= $doc->filiere; ?></td>
                             <td><?= $doc->date_ajout; ?></td>
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
                                <button data-toggle="modal" data-target="#myModalUpdateMyFile" type="button" data-id="<?= $doc->id; ?>" class="btn btn-success btn-sm">
                                   <span class="glyphicon glyphicon-pencil"></span>
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
    <form action="<?= site_url('Etudiant/deleteMyFile') ?>" method="post">
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



<div class="modal fade" id="myModalUpdateMyFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('Etudiant/UpdateMyFile') ?>" enctype="multipart/form-data" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Modifier Ma Demande</center></h4>
      </div>
      <div class="modal-body text-danger">
              <div class="form-group">
               <input type="text" name="nom" id="nom" class="form-control" value="" placeholder="Nom">
           </div>
           <div class="form-group">
               <input type="text" name="prenom" id="prenom" class="form-control" value="" placeholder="Prénom">
           </div>
           <div class="form-group">
               <input type="text" name="cne" id="cne" class="form-control" value="" placeholder="CNE">
           </div>
           <div class="form-group">
               <select class="form-control" id="filiere" name="filiere">
                 <option value="IRM">IRM</option>
                 <option value="IAG">IAG</option>
                 <option value="MSI">MSI</option>
             </select>
         </div>
         <div class="form-group">
           <select class="form-control" id="type" name="type">
            <option value="Attestation Scolarité">Attestation scolarité</option>
            <option value="Attestation d'inscription">Attestation d'inscription</option>
            <option value="Attestation de réussite">Attestation de réussite</option>
            <option value="Convention de stage">Convention de stage</option>
            <option value="Diplôme Bac+3">Diplôme Bac+3</option>
            <option value="Diplôme Bac+5">Diplôme Bac+5</option>
            <option value="Bulletin">Bulletin</option>
        </select>
    </div>
<input type="text" id="id" class="hidden" value="" name="id">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
    <button type="submit" class="btn btn-primary">Modifier</button>
</div>
</div>
</form>
</div>
</div>




<div class="modal fade" id="myModalAddFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form name="fileinfo" action="<?= site_url('Etudiant/DemandeDocument') ?>" enctype="multipart/form-data" method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Demandé Document Administratif</center></h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control"  name="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="cne" placeholder="CNE">
        </div>
        <div class="form-group">
           <select name="filiere" class="form-control">
               <option value="IRM">IRM</option>
               <option value="IAG">IAG</option>
               <option value="MSI">MSI</option>
           </select>
       </div>

       <div class="form-group">
        <select name="type" class="form-control">
           <option>Type</option>
           <option value="Attestation Scolarité">Attestation scolarité</option>
           <option value="Attestation d'inscription">Attestation d'inscription</option>
           <option value="Attestation de réussite">Attestation de réussite</option>
           <option value="Convention de stage">Convention de stage</option>
           <option value="Diplôme Bac+3">Diplôme Bac+3</option>
           <option value="Diplôme Bac+5">Diplôme Bac+5</option>
           <option value="Bulletin">Bulletin</option>
       </select>
   </div>

   <input type="text" class="hidden"  name="id_etudiant" value="<?= $this->session->userdata('id') ?>">
   <input type="text" class="hidden"  name="niveau" value="<?= $this->session->userdata('niveau') ?>">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
</div>
</form>
</div>
</div>