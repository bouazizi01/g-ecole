<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            


            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;&nbsp;&nbsp;Professeurs & Etudiants</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user text-success"></span><a href="<?= site_url('Prof/Professeurs') ?>">&nbsp;&nbsp;&nbsp;Professeurs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user text-primary"></span><a href="<?= site_url('Prof/Etudiants') ?>">&nbsp;&nbsp;&nbsp;Etudiants</a>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-open">
                            </span>&nbsp;&nbsp;&nbsp;Fichiers</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                               <tr>
                                <td>
                                   <span class="glyphicon glyphicon-book"></span><a href="<?= site_url('Prof/MesFichiers') ?>">&nbsp;&nbsp;&nbsp;Mes Fichiers</a>
                               </td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Mon Compte</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a class="active" href=" <?= site_url('User/MonProfile') ?> "><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Modifier Mon Profile</a>
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
                    </span>&nbsp;&nbsp;&nbsp;Emploi Du Temps</a>
                </h4>
            </div>
            <div id="collapseFor" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a class="active" href=" <?= site_url('Prof/EmploiDuTemps') ?>"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Emploi Du Temps</a>
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
       <caption><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalAddFile"><span class="glyphicon glyphicon-plus"></span>Ajouter</button></caption>
       <thead>
        <tr>
         <th>Titre</th>
         <th>Type</th>
         <th>Module</th>
         <th>Niveau</th>
         <th>Date Ajoute</th>
         <th>Options</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($docs as $doc) : ?>
       <tr>
         <td><?= $doc->titre; ?></td>
         <td><?= $doc->type; ?></td>
         <td><?= $doc->module; ?></td>
         <td><?= $doc->niveau; ?>ème année</td>
         <td><?= $doc->date_ajout; ?></td>
         <td>
         <a href="<?= base_url(); ?>docs/<?= $doc->docs; ?>"  target="_blank" class="btn btn-success btn-sm">
         <span class="glyphicon glyphicon-eye-open"></span>
          </a>
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
    <form action="<?= site_url('Prof/DeleteFile') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Confirmation de suppression</h4>
        </div>
        <div class="modal-body text-danger">
          Voulez vous vraiment supprimer cette fichier ? 
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



<div class="modal fade" id="myModalAddFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form name="fileinfo" action="<?= site_url('Prof/AddFile') ?>" enctype="multipart/form-data" method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><center>Ajout Cours & TPs</center></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control"  name="titre" placeholder="Titre">
          </div>
          <div class="form-group">
            <select name="type" class="form-control">
             <option>Type</option>
             <option value="Cours">Cours</option>
             <option value="TP">TP</option>
           </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="module" placeholder="Module">
          </div>
          <div class="form-group">
            <select name="niveau" class="form-control">
             <option>Niveau</option>
             <option value="1">1er année</option>
             <option value="2">2ème année</option>
             <option value="3">3ème année</option>
             <option value="4">4ème année</option>
             <option value="5">5ème année</option>
           </select>
         </div>

         <div class="form-group">
          <input type="file" class="form-control" name="doc">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </form>
</div>
</div>