<?php
  /**
  * 
  */
  class VueConnection extends VueGenerique
  {
    // affichage des formulaires de connection et d'inscription
    public function getaff()
    {
      echo '
      <body>
        <article>
          <div id="box" class="container">
            <div class="row ">
              <div class="col ">
                <h1>Connexion</h1>
                <p>Connectez-vous pour profiter des services communautaires, donner votre avis et gérer vos paramètres personnels.</p>
                <form action="?module=connection&action=connection" method="post">
                  <div class="form-group">
                    <label for="loginmail">Adresse email</label>
                    <input type="email" class="form-control" id="loginmail" name="email" placeholder="Adresse email" required>
                  </div>
                  <div class="form-group">
                    <label for="loginpwd">Mot de passe</label>
                    <input type="password" class="form-control" id="loginpwd" name="mdp" placeholder="Mot de passe" required>
                  </div>
                  <button type="submit" class="btn btn-primary submit" id="submitlog">Connexion</button>
              </form>
              </div>

              <div id="col" class="col ">
                <h1>Inscription</h1>
                <p>Vous n’avez pas encore de compte ? Inscrivez-vous gratuitement.</p>
                <form action="?module=inscription" method="post">
                   <div class="form-group">
                    <label for="signuser">Nom d\'utilisateur</label>
                    <input type="text" class="form-control" id="signuser" name="pseudo" placeholder="Nom d\'utilisateur" required>
                  </div>
                  <div class="form-group">
                    <label for="signmail">Adresse email</label>
                    <input type="email" class="form-control" id="signmail" name="email" placeholder="Adresse email" required>
                  </div>
                  <div class="form-group">
                    <label for="signpwd">Mot de passe</label>
                    <input type="password" class="form-control" id="signpwd" name="mdp" placeholder="Mot de passe" required>
                  </div>
                  <div class="form-group">
                    <label for="signpwdv">Mot de passe (vérification)</label>
                    <input type="password" class="form-control" id="signpwdv" name="mdp2" placeholder="Mot de passe (vérification)" required>
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="signEULA" required>
                    <label class="form-check-label" for="signEULA">J\'ai lu et accepté les conditions générales d\'utilisation</label>
                  </div>
                  <button type="submit" class="btn btn-primary submit" id="submitsign">Inscription</button>
              </form>
              </div>
            </div>
          </div>
        </article>
      </body>';
    }
  }

?>
