<?php
  /**
  * 
  */
  class VueNlAbo extends VueGenerique
  {
      
    /*Confirme la réussite de l'abonnement*/
    public function afficheOk($var)
    {
      echo '<!DOCTYPE html>
      
      <body>
      <article>
       
        <h1>'; echo $var; echo'</h1>
        <img class="img-fluid mx-auto " alt="Image de validation" src="https://cdn.dribbble.com/users/1551941/screenshots/6346538/thankyoudribble.gif">
        <form action="https://projet-geekview.000webhostapp.com/index.php">
            <button type="submit" class="btn btn-primary submit">Continuer</button>
        </form>
      </article>
      </body>';
    }
    
    /*Confirme l'echec de l'abonnement*/
    public function afficheErreur($var)
    {
      echo '<!DOCTYPE html>
      
      <body>
      <article>
       
        <h1>'; echo $var; echo'</h1>
        <img class="img-fluid mx-auto d-block" alt="Image de validation" src="https://img.buzzfeed.com/buzzfeed-static/static/2016-02/1/11/enhanced/webdr07/anigif_enhanced-21255-1454345675-2.gif">
        <form action="https://projet-geekview.000webhostapp.com/index.php">
            <button type="submit" class="btn btn-primary submit">Continuer</button>
        </form>
      </article>
      </body>';
    }
  }

?>
