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
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse"  data-parent="#accordion" href="#collapseFor"><span class="glyphicon glyphicon-file">
                    </span>&nbsp;&nbsp;&nbsp;Emploi Du Temps</a>
                </h4>
            </div>
            <div id="collapseFor" class="panel-collapse collapse in">
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
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
              <center>Emploi Du Temps 5ème anneé - 1er Semestre - 2016/2017</center>
            </a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
           <center>Emploi Du Temps 4ème anneé - 1er Semestre - 2016/2017</center>
         </a>
       </h4>
     </div>
     <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
         <center>Emploi Du Temps 3ème anneé - 1er Semestre - 2016/2017</center>
       </a>
     </h4>
   </div>
   <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
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




<div class="panel panel-primary">
  <div class="panel-heading" role="tab" id="heading4">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
       <center>Emploi Du Temps 2ème anneé - 1er Semestre - 2016/2017</center>
     </a>
   </h4>
 </div>
 <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
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


<div class="panel panel-primary">
  <div class="panel-heading" role="tab" id="heading5">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
       <center>Emploi Du Temps 1er anneé - 1er Semestre - 2016/2017</center>
     </a>
   </h4>
 </div>
 <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
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
</div>