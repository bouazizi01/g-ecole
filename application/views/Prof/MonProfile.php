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
           <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Mon Compte</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse in">
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
    <div class="text-danger" style="text-align: center;">
     <h3> Mon Profile</h3>
 </div>
 <div class="well">
    
    <div class="row">
      <div class="col-xs-6 col-md-4 text-danger">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tel</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
        </div>
    </div>
    <div class="col-xs-6 col-md-4 text-primary">
        <div class="form-group">
            <label for="exampleInputEmail1">: <?= $this->session->userdata('nom') ?></label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">: <?= $this->session->userdata('prenom') ?></label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">: <?= $this->session->userdata('tel') ?></label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">: <?= $this->session->userdata('email') ?></label>
        </div>
    </div>
    <div class="col-xs-6 col-md-4">
        <img width="200"  class="img-thumbnail" src="<?php echo base_url(); ?>images/<?= $this->session->userdata('photo') ?>">
    </div>
    <button class="btn btn-primary" type="<button" data-toggle="modal" data-target="#ModelModifierUser">Modifier</button>
</div>

</div>
</div>
</div>
</div>

<!-- Model de modification -->
<div class="modal fade" id="ModelModifierUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('User/ModifierMonProfileAdmin') ?>" method="POST" enctype="multipart/form-data" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><center> Modifier Mon Profile</center></h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?= $this->session->userdata('nom') ?>">
                </div>            
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="<?= $this->session->userdata('prenom') ?>">
                </div> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Tel</label>
                    <input type="text" name="tel" class="form-control" placeholder="Tel" value="<?= $this->session->userdata('tel') ?>">
                </div> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $this->session->userdata('email') ?>">
                </div> 
            </div>
            <div class="col-xs-6">
              <img width="200"  class="img-thumbnail" src="<?php echo base_url(); ?>images/<?= $this->session->userdata('photo') ?>">

              <div class="form-group">
                <label for="exampleInputEmail1">Photo</label>
                <input type="file" name="photo" class="form-control">
            </div> 
        </div>
    </div>
</div>
<div class="modal-footer">
  <input type="text" name="id" class="hidden" value="<?= $this->session->userdata('id') ?>">
  <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</div>

</div>
</form>
</div>
</div>









