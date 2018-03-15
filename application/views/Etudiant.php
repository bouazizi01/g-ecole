<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3" >
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
                                <span class="glyphicon glyphicon-pencil text-primary"></span>
                                <a href="<?= site_url('Etudiant/Etudiants') ?>">Etudiants <?= $this->session->userdata('niveau') ?> ème année</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-flash text-success"></span>
                                    <a href="<?= site_url('Etudiant/Profs') ?>">Professeurs</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                        </span>Cours & TPs</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="<?= site_url('Etudiant/CoursAndTPs') ?>">Cours & TPs</a>
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-list-alt"></span>Documents Administratifs</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="<?= site_url('Etudiant/MesDocumentAdministratif') ?>"><span class="glyphicon glyphicon-list-alt"></span>Mes Documents Administratifs</a>
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
                    <h1>
                        Espace Etudiant</h1>
                        Bienvenue <strong> <?= strtoupper($this->session->userdata('nom')).' '.ucfirst($this->session->userdata('prenom')) ?></strong> sur votre espace personnel SUPEMIR...
                    </div>
                </div>
            </div>
        </div>
