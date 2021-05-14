<?php
  class vueContact extends VueGenerique
  {
    
    public function getAffi($success)
    {
        
        echo '
            
            <body>
              <article>
                <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <img id="popupImage" class="img-fluid mx-auto d-block" alt="Image de validation" src="theme/images/validate.gif">
                      </div>
                    </div>
                  </div>
                </div>
        ';
        
        /*affiche le résultat : réussite / echec de l'envoi du mail*/
        if(!empty($_SESSION['response'])){
            if($_SESSION['response']==true){
                echo '<script type="text/javascript"> 
                        popupImage.setAttribute("src", "theme/images/success.gif");
                        $("#popup").modal("show");
                      </script>';
                unset($_SESSION['response']);
            }else{
                echo '<script type="text/javascript"> 
                        popupImage.setAttribute("src", "theme/images/error.gif");
                        $("#popup").modal("show");
                      </script>';
                unset($_SESSION['response']);
            }
        }
        echo '
            <div>
              <h1>Nous contacter</h1>
              <h2>Forum / mail / réseaux sociaux</h2>
              <p>Une question ? Une remarque ? N’hésitez pas à nous contacter par le biais de notre formulaire dédié ou, mieux encore, sur le forum, qui permet à tout le monde de profiter des questions/réponses/avis. Vous pouvez aussi nous adresser un message en nous rejoignant sur Facebook et Twitter.</p>
              <form action="?module=contact&action=sendMail" method="POST">  
                  <div class="form-group">
                    <label>Adresse email</label>
                    <input type="email" class="form-control" name="email" placeholder="Adresse email" required>
                  </div>
                  <div class="form-group">
                    <label>Titre du message</label>
                    <input type="nput-group-text" class="form-control" name="titre" placeholder="Titre" required>
                  </div>
                  <div class="form-group">
                    <label>Corps du message</label>
                    <textarea class="form-control" aria-label="With textarea" name="message" required></textarea>            
                  </div>
                  <button type="submit" class="btn btn-primary submit" id="submitsign">Envoyer</button>
              </form>
            </div>
          </div>
        </article>
       </body>
      </html>';
    }
  }
?>
