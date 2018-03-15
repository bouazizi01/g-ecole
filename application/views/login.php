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
	<script src="<?= base_url(); ?>assets/js/jquery-1.12.4.js"></script>


	<body>
		<div class="navbar-fixed-top bg-primary">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="#" style="color: white;cursor: pointer;"><h4>Espace SUPEMIR</h4></a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<center>



						<div class="panel panel-default" style="margin-top: 150px">

							<?php if(isset($_SESSION)){ ?>
							<h5 class="text-danger">
								<?= $this->session->flashdata('name'); ?>
							</h5>

							<?php	} ?>

							<div class="panel-heading"><center><img src="<?php echo base_url().'images/supemir.png' ?>"></center></div>
							<div class="panel-body">

								<form action="<?= site_url('login') ?>" method="post">

									<div class="form-group">
										<label for="exampleInputEmail1" class="text-danger">Authentification </label>
										<input type="text"  name="matricule" class="form-control" id="exampleInputEmail1" placeholder="matricule">
									</div>
									<button type="submit" class="btn btn-primary btn-sm" style="float: right;">Connexion</button>
								</form>
							</div>
						</div>





						<a style="cursor: pointer;"  data-toggle="modal" data-target="#ModalInscription">
							Inscription
						</a>

						<!-- Modal -->
						<div class="modal fade" id="ModalInscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<form class="form-horizontal" action="<?= site_url('User/addUser') ?>" onsubmit="return false;" enctype="multipart/form-data" method="post">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Inscription</h4>
										</div>
										<div class="modal-body">
											<div id="error_message" class="row alert alert-danger text-center hide">
												<h3>Professeur Existe déja</h3>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Prénom</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Tel</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="tel" name="tel" placeholder="Tel">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">CIN</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="matricule" name="matricule" placeholder="CIN">
												</div>
											</div>		
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Photo</label>
												<div class="col-sm-10">
													<input type="file" class="form-control" id="img_file" name="img_file" placeholder="Photo">
												</div>
											</div>											
											<div>
												<label for="inputEmail3" class="col-sm-2 control-label">Fonction</label>
												<input type="radio" name="role" id="role" value="PROF" checked="checked" onchange="myFunction('forEtd','forPrf')" />
												<label>Professeur</label>
												<input type="radio" name="role" id="role" value="ETUDIANT" onchange="myFunction('forPrf','forEtd')" />
												<label>Etudiant</label>
												
											</div>
											<div class="form-group"  id="forPrf">
												<label for="inputEmail3" class="col-sm-2 control-label">Modules</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="modules" name="modules" placeholder="Modules">
												</div>
											</div>	
											<div class="form-group"  id="forEtd" style="display: none;">
												<label for="inputEmail3" class="col-sm-2 control-label">Niveau</label>
												<div class="col-sm-10">
													<select class="form-control" id="niveau" name="niveau">
														<option  value="0">Niveau</option>
														<option  value="1">1er année</option>
														<option  value="2">2ème année</option>
														<option  value="3">3ème année</option>
														<option value="4">4ème année</option>
														<option value="5">5ème année</option>
													</select>
												</div>
											</div>	
											
											<script>
												function myFunction(divMasquer,divAffiche) {
													document.getElementById(divAffiche).style.display='block';
													document.getElementById(divMasquer).style.display='none';
												}
											</script>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
											<button type="submit" id="addUser" class="btn btn-primary">Inscrivez-Vous</button>
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
          <h4 class="modal-title" id="myModalLabel">Inscription</h4>
        </div>
        <div class="modal-body text-suucess">
          Vous avez été inscrit avec succès. On attendant votre acceptation par l'administrateur dans 24h au maximum.
        </div>
        <div class="modal-footer">
          <a href="<?= site_url('Login') ?>" class="btn btn-success">OK</a>
        </div>
      </div>
  </div>
</div>



					</center>
				</div>
				<div class="col-md-4"></div>
			</div>

		</div>
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/app.js"></script>
	</body>
	</html>

	<div class="navbar-fixed-bottom bg-primary" style="height: 50px;">
		<small><center>@Espace SUPEMIR</center></small>
	</div>