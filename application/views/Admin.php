<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
           <?php include'Admin/Menu.php'; ?>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>
                    Espace Administrateur</h1>
                     Bienvenue <strong> <?= strtoupper($this->session->userdata('nom')).' '.ucfirst($this->session->userdata('prenom')) ?></strong> sur votre espace personnel SUPEMIR...
            </div>
        </div>
    </div>
</div>