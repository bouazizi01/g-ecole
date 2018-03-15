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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-dashboard">
                            </span>Emploi De Temps</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="<?= site_url('Etudiant/EmploiDeTemps') ?>"><span class="glyphicon glyphicon-dashboard">
                                        </span>Emploi de temps</a>
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
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Emploi De Temps 5ème anneé - 1er Semestre - 2016/2017</center></div>
                <div class="panel-body">
                 <table class="table table-bordered" style="text-align: center;">
                    <tr>
                      <th>#</th><th>8h 45 - 10h 15</th><th>10h 30 - 12h 00</th><th>-</th><th>13h 00 - 14h 30</th><th>14h 45 - 16h 15</th>
                  </tr>
                  <tr><th>Lundi</th><td colspan="2">Programmation Mobile En Android</td><td></td><td colspan="2">Infographie : 3D Max</td></tr>


                  <tr><th>Mercredi</th><td colspan="2">Base de données - Oracle</td><td></td><td colspan="2">Activités Parascolaires</td></tr>
                  <tr><th>Jeudi</th><td colspan="2">Administration - UNIX</td><td></td><td >TEC De Recrutement</td><td >Anglais</td></tr>
                  <tr><th>Vendredi</th><td>Marketing Des Services</td><td>Destions Des Réseaux De Vente</td><td></td><td >Vo IP</td><td >Réseaux HD / Réseaux Mobile</td></tr>
                  <tr><th>Samedi</th><td colspan="2">Sécurité Internet</td><td></td><td colspan="2"></td></tr>
              </table>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>