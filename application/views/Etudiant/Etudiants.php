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
                <div id="collapseOne" class="panel-collapse collapse in">
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
                    <div id="collapseFour" class="panel-collapse collapse">
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
       <thead>
        <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Tel</th>
         <th>Email</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($etudiants as $etudiant) : ?>
       <tr>
         <td><?= $etudiant->nom; ?></td>
         <td><?= $etudiant->prenom; ?></td>
         <td><?= $etudiant->tel; ?></td>
         <td><?= $etudiant->email; ?></td>
      </tr>
      <?php  endforeach ;?>
    </tbody>
  </table>
            </div>
        </div>
    </div>
</div>