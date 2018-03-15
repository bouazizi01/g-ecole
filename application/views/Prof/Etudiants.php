<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-3">
      


                  <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;&nbsp;&nbsp;Professeurs & Etudiants</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-open">
                            </span>&nbsp;&nbsp;&nbsp;Fichiers</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
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
       <thead>
        <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Tel</th>
         <th>Email</th>
         <th>Niveau</th>
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
      </tr>
      <?php  endforeach ;?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>