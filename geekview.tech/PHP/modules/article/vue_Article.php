<?php
  /**
  * 
  */
  class VueArticle extends VueGenerique
  {
    
    public function afficheArticle($content, $auteur, $commentaires)
    {
        
      $_SESSION['idA'] = $_GET['article'];
      echo '<!DOCTYPE html>
      <html>
      <head>
        <title>GeekView</title>
        <link rel="stylesheet" href="css/article.css">
      </head>
      <body>
      <article>
      <h1 id="titre">'.$content[0][2].'</h1>
      <div id="infos">
          <img id="note" src="./theme/images/rating/'.$content[0][6].'stars.png">
          <p id="auteur" class="inl">Écris par : '.$auteur.'</p>
          <p id="date" class="inl"> date de mise en ligne : '.$content[0][4].'</p>
          <p class="inl">partager : </p>
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="share">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
              <a class="a2a_button_reddit"></a>
              <a class="a2a_button_linkedin"></a>
          </div>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
      </div>
      <image class="img-fluid" id="enAvant" src="./'.$content[0][3].'">
      '.$content[0][5].'
     
      <div id="comments">
      <h2>Commentaires</h2>
      ';for($i=0;$i<sizeof($commentaires);$i++){
        echo'<div class="commentdiv">';
            echo '<p id="commmentAuhtor">'.$commentaires[$i][4].'</p>';
            echo '<p id="commentDate">posté le : '.$commentaires[$i][2].'</p>';
            echo '<p class="pcomment">'.$commentaires[$i][3].'</p>'; 
            echo'</div>';
        }
        echo'</div>';
        echo '<script type="text/javascript">var min = 15</script>';
        
        /*Ajax pour charger plus de commentaires*/
        echo'
            <button class="btnrm" id="commentMore">Plus de commentaires ! </button>
            <script type="text/javascript">
				$("document").ready(function(){
					$(":button[id=\'commentMore\']").click(function(){
					$.ajax({
							dataType: "json",
							url: "PHP/modules/article/ajax_ChargeCommentaire.php", 
							data: { indice :min}, 
							method: \'GET\'
						}).done(function(data){
                            console.log(data);
                            min+=5;
                            if(data ==0 || data==\'undefined\'){
						        console.log(data.length);
                                document.getElementById(\'commentMore\').parentNode.removeChild(document.getElementById(\'commentMore\'));
                                document.getElementById(\'comments\').innerHTML += "<hp>Fin des commentaires ...</p>"
                            }  
                            else{
                                for(ind in data){
                                    document.getElementById(\'comments\').innerHTML += "<div class=\"commentdiv\"><p id=\"commmentAuhtor\">"+data[ind][4]+"</p><p id=\"commentDate\">posté le : "+data[ind][2]+"</p><p class=\"pcomment\">"+data[ind][3]+"</p></div>";
                                }
                            }
                            }).fail((data) => {
						});
					});
				})
				
			</script>
        ';
        
    /*Ajax pour écrire un commentaire*/
    if(isset($_SESSION['pseudo'])){
        echo'<textarea class="autoExpand" id="commentText"></textarea> 
             <button class="btnrm" id="commentButton">Commentez ! </button>
             <script>$(\'textarea\').autoResize();</script>
             <script type="text/javascript">
				$("document").ready(function(){
					$(":button[id=\'commentButton\']").click(function(){
					$.ajax({
							dataType: "json",
							url: "PHP/modules/article/ajax_AjoutCommentaire.php", 
							data: { texte :document.getElementById(\'commentText\').value.replace(/\'/g, \'’\')}, 
							method: \'GET\'
						}).done(function(data){
                            document.getElementById(\'commentText\').value="";
                            if(data!=null){
                                document.getElementById(\'comments\').innerHTML += "<div class=\"commentdiv\"><p id=\"commmentAuhtor\">"+data[0][6]+"</p><p id=\"commentDate\">posté le : "+data[0][2]+"</p><p class=\"pcomment\">"+data[0][3]+"</p></div>";
                            }
                                
                            }).fail((data) => {
						});
					});
				})
			</script>
        ';
      } 
      echo'
      </article>
      </body>
      </html>';
    }
 }
?>
