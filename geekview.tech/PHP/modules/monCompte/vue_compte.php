<?php
	include_once './PHP/vue_generique.php';
	
	class VueCompte extends vueGenerique{
	    //les formulaires de modification du compte
		public function getBody($infoUsr){
			echo '
				<body>
				  <article>
                  
				    <button style="border-style: none; background-color: white; color: green;" onclick="myFunction(\'infoPerso\', \'InformationCompte\', \'Suppr\')">Informations Personnelles</button>
				    <button style="border-style: none; background-color: white; color: green;" onclick="myFunction(\'InformationCompte\', \'infoPerso\', \'Suppr\')">Gestion du compte</button>
				    <button style="border-style: none; background-color: white; color: green;" onclick="myFunction(\'Suppr\', \'infoPerso\', \'InformationCompte\')">Supprimer Mon Compte</button>

				    <div id="infoPerso" style="display: block">
				      <h2>Mes informations personnelles</h2>
				        <form action="modif_infoPerso.php" method="post" id="form1">
				        <div class="form-group">
				          <label>Nom</label>
				          <input type="input-group-text" class="form-control" id="Nom" autocomplete=off value="'.$infoUsr[0]['nom'].'">
				        </div>

				        <div class="form-group">
				          <label>Prénom</label>
				          <input type="input-group-text" class="form-control" id="Prenom" autocomplete=off value="'.$infoUsr[0]['prenom'].'">
				        </div>

				        <div class="form-group">
				          <label>Date de naissance</label>
				           <input type="date" class="form-control" id="DatNaiss" autocomplete=off value="'.$infoUsr[0]['dateNaissance'].'">          
				        </div>

				        <div class="form-group">
				          <label>Genre</label>
				          <select class="form-control" id="Genre" placeholder="Genre">
				            <option >Homme</option>
				            <option >Femme</option>
				            <option >Autre </option>
				          </select>
				        </div>

				        <div class="form-group">
				          <label>Pays</label>
				          <select class="form-control" id="Pays" placeholder="Pays">
				            <option>France</option>
				            <option>Belgique</option>
				            <option>Suisse</option>
				            <option>Canada</option>
				            <option>Autre pays (francophone)</option>
				            <option>Autre pays (non francophone)</option>
				          </select>
				        </div>
				        <button type="submit" class="btn btn-primary submit" id="CompteInfoPersoSubmit">Mettre a jour mes informations personnelles</button>
				        </form>
				    </div>
                    
                    
                   
                    
				    <div id="InformationCompte" style="display: none;">
				      <h2>Gestion du compte</h2>
				       <form method="post" action="modif_gesCompte.php" id="form2">  
				        <div class="form-group">
				          <label>Pseudo</label>
				          <input type="input-group-text" class="form-control" id="ComptePseudo" autocomplete=off value="'.$infoUsr[0]['pseudo'].'">
				        </div>

				        <div class="form-group">
				            </br>
				            <label>Bio</label>
				            <textarea class="form-control" aria-label="With textarea" id="CompteBio" >'.$infoUsr[0]['bio'].'</textarea>
				        </div>
				        <div class="form-group">
				            <label>Mail</label>
				            <input type="email" class="form-control" id="contactTitle" autocomplete=on value="'.$infoUsr[0]['mail'].'">
				        </div>
				        <div class="form-group">
				            <label>Mot de passe actuel</label>
				            <input type="password" class="form-control" name="curpwd" current-password minlength="6" id="curpwd" placeholder="Mot de passe(Obligatoire)" required>
				        </div>
				        <div class="form-group">
				            <label>Nouveau mot de passe</label>
				            <input type="password" class="form-control" name="newpwd" new-password minlength="8" id="newpwd" placeholder="Nouveau mot de passe(laissez vide si aucun changement)">
				        </div>
				        <button type="submit" class="btn btn-primary submit" id="CompteInfoCompteSubmit">Mettre a jour mon compte</button>
				      </form>
				    </div>
				    <div id="Suppr" style=" display: none;">
				      <h1>Supprimer Mon Compte</h1>
				      <p>La suppression de votre compte sera instantanée et définitive, vous perdrez toutes vos informations et serez désinscrit de notre programme de newsletter</p>
				      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSuppr">Supprimer mon compte</button>
				     
				      <div class="modal fade" id="ModalSuppr">
				        <div class="modal-dialog modal-dialog-centered" role="document">
				          <div class="modal-content">
				            <div class="modal-header">
				              <h5 class="modal-title" id="exampleModalLongTitle">Supprimer mon compte ?</h5>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>  
				              </button>
				            </div>
				            <div class="modal-body">
				              <p>Etes vous sur de vouloir supprimer votre compte ?</p>
				            </div>
				            <div class="modal-footer">
				              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				              <button id="supp" type="button" class="btn btn-primary" style="background-color: red; border-color: red">Supprimer mon compte</button>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
				     <script type="text/javascript">
				    function myFunction(Aff, Naff, Naff2) {
                        var x = document.getElementById(Aff);
                        var y = document.getElementById(Naff);
                        var z = document.getElementById(Naff2);
                        x.style.display = "block";
                        y.style.display = "none";
                        z.style.display ="none";
                    }
                    </script>
                    <script src="PHP/modules/monCompte/app.js">
				  </article>
				   
				</body> 
				<script>
				      $("input[type=file]").change(function (e){$(this).next(\'.custom-file-label\').text(e.target.files[0].name);})
				    </script>';
		}

	}
?>