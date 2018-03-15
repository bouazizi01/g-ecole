<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Espace SUPEMIR</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.dataTables.min.css">

  <script src="<?= base_url(); ?>assets/js/jquery-1.12.4.js"></script>

  <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
        "pagingType": "full_numbers"
      } );
    } );
  </script>
  <nav class="navbar navbar-dark bg-primary navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  style="color: white;" href="<?= site_url('User') ?>">Espace SUPEMIR : <?= strtoupper($this->session->userdata('role')) ?></a>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"  style="color: white;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
              <?php if($nbDocAtt>0 && $this->session->userdata('role')=='ADMIN'){ ?> <span class="label label-danger"><?= $nbDocAtt+$nbUserAttent ?></span> <?php } ?>
              <?= strtoupper($this->session->userdata('nom')).' '.ucfirst($this->session->userdata('prenom')) ?> <img width="30" class="img-circle" src="<?php echo base_url(); ?>images/<?= $this->session->userdata('photo') ?>"> <span class="caret"></span></a>
              <ul class="dropdown-menu" style="width: 300px">
                <center>
                  <li>

                    <img width="150" class="img-circle" src="<?php echo base_url(); ?>images/<?= $this->session->userdata('photo') ?>">

                  </li>
                  <li>
                    <a><?= strtoupper($this->session->userdata('nom')).' '.ucfirst($this->session->userdata('prenom')) ?><br><?= ucfirst($this->session->userdata('role')) ?>
                    </a>
                  </li>

                  <li role="separator" class="divider"></li>
                  <a href="<?= site_url('User/MonProfile') ?>" class="btn btn-success btn-sm">Mon Compte</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= site_url('User/logout') ?>" class="btn btn-warning btn-sm">Déconnexion</a>
                  <br><br>
                  <?php if($nbDocAtt>0 && $this->session->userdata('role')=='ADMIN'){ ?>
                  <li role="separator" class="divider"></li>
                  <a href="<?= site_url('Admin/DocumentsAdministratif') ?>" class="btn btn-info btn-sm"><span class="label label-danger"><?= $nbDocAtt ?></span> Documents En Attent</a>
                  <?php } ?>
                  <?php if($nbUserAttent>0 && $this->session->userdata('role')=='ADMIN'){ ?>
                  <li role="separator" class="divider"></li>
                  <a href="<?= site_url('Admin/UsersEnAttent') ?>" class="btn btn-info btn-sm"><span class="label label-danger"><?= $nbUserAttent ?></span> Utilisateurs En Attent</a>
                  <?php } ?>
                </center>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  <style type="text/css">
    #table-wrapper {
  position:relative;
}
#table-scroll {
  height:500px;
  overflow:auto;  
  margin-top:90px;
}
  </style>
  <div id="table-wrapper">
  <div id="table-scroll">