<?php
	include_once './PHP/vue_generique.php';
	
	class Vue extends vueGenerique{
		public function getBody($articles, $categorie){
			
			/*Récupère le titre de la page, en fonction de l'acceuil ou de la catégorie*/
			if(!isset($categorie)){
			    $Une="Articles à la une";
			   
			}
			else{
			    $Une = $categorie;
			    
			}
			echo '
                
                <body id="Une'.$Une.'">
                    <article >
                        
                        <h1 id="categ">'.$Une.'</h1>
                        <script type="text/javascript">var indiceArticles= 9; categorie = document.getElementById("categ").innerHTML;</script>';
                        /*Fait le chargement des images en fonction du nombre d'article avec un max de 9 article, le tout avec des groupe de max 3 articles */
                        if(sizeof($articles)!=0){
                            $this->AfficheCarousel($articles);
                        if(sizeof($articles)>=3)
                            $this->afficheSmallGroup($articles, 3);
                        if(sizeof($articles)>=6)
                            $this->afficheCardGroup($articles,6);
                        }
                        
                        /*Permet de faire la fonction charger plus d'articles, avec max +3 articles*/
                        echo'<div id="more"></div>';
                        echo'

            			<input type="button" id="btnrm" class="btnrm" name="id_classe" value="Plus d\'articles"/>
                    	
            			<div id="info"></div>
            			
            			<script type="text/javascript">
            				$("document").ready(function(){
            					$(":button[name=\'id_classe\']").click(function(){
            						$.ajax({
            							dataType: "json",
            							url: "ajax_recup_donnees_classe.php", 
            							data: { indice:indiceArticles, categ: categorie}, 
            							method: \'GET\'
            						}).done(function(data){
                						    
                                        if(data ==0 || data==\'undefined\'){
            						        console.log(data.length);
                                            document.getElementById(\'btnrm\').parentNode.removeChild(document.getElementById(\'btnrm\'));
                                            document.getElementById(\'more\').innerHTML += \'<p id="paa" >il n’y a plus d’articles à charger ...</p>\';
            						    }else{
                                        for (index in data) { 
                    						document.getElementById(\'more\').innerHTML += \'<div class="card-group smallGroup"><div class="card up"><a href="?module=article&article=\'+data[index][0]+\'"><img class="card-img-top" src="\'+data[index][3]+\'" alt="image de couverture :\'+data[index][3]+\'"><p class="category" id="\'+data[index][6]+\'">\'+data[index][6]+\'</p><div class="card-img-overlay d-flex flex-column justify-content-end"><p>\'+data[index][4]+\'</p><h3 class="card-title">\'+ data[index][2]+\'</h3><p>\'+data[index][5].replace(/<[^>]*>?/gm, \'\').substring(0,200)+\' ...</></div></a></div></div>\';
                						}}
            					        indiceArticles+=3;
            						}).fail((data) => {
            							console.log("ERROR",data);
            						});
            					});
            				})	
            			</script>
                		</div>
                    </article>
                </body>';
		}
		
		/*Fonction générant le caroussel du haut de la page*/
		public function AfficheCarousel($articles){
		    if(sizeof($articles)>0){
		        
		        $text= filter_var($articles[0][5], FILTER_SANITIZE_STRING) ;
		        $text = strlen($text) > 400 ? substr($text,0,400)."..." : $text;
                $date = date("d/m/Y", strtotime($articles[0][4]));
		        echo'<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="?module=article&article='.$articles[0][0].'"><img class="d-block w-100" src="'.$articles[0][3].'" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="carouselArticleTitle">'.$articles[0][2].'</h2>
                                        <p class="carouselArticleText">'.$text.'</p>
                                        <p>Catégorie : '.$articles[0][6].' Écris le : '.$date.'</p>
                                    </div></a>
                                </div>';
		        if(sizeof($articles)>=3){
		            $max=3;
		        }else{ $max=sizeof($articles);}
		        
		        for($i=1; $i<$max;$i++){
                    $text= filter_var($articles[$i][5], FILTER_SANITIZE_STRING) ;
    		        $text = strlen($text) > 400 ? substr($text,0,400)."..." : $text;
                    $date = date("d/m/Y", strtotime($articles[$i][4]));
		            echo'<div class="carousel-item">
                                    <a href="?module=article&article='.$articles[$i][0].'"><img class="d-block w-100" src="'.$articles[$i][3].'" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="carouselArticleTitle">'.$articles[$i][2].'</h2>
                                        <p class="carouselArticleText">'.$text.'</p>
                                        <p>Catégorie : '.$articles[$i][6].' Écris le : '.$date.'</p>
                                    </div></a>
                                </div>';
		        }
		        echo' <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>';
		    }
		}
		
		
		/*Le card group est un groupe de carte qui sera affiché sous le carousel, il prend les 3 prochains article*/
		public function afficheCardGroup($articles, $indice){
		    if(sizeof($articles)>0){
                if(sizeof($articles)-$indice >3){
		            $max=$indice+3;
                }
                else{
                    $max=sizeof($articles);
                    $max-=$indice;
                }
		        echo'<div id="g1" class="card-group">';
		        for($i=0;$i<$max;$i++){
        		    echo '<div class="card">';
                        $this->innerCard($articles[$indice+$i]);
                    echo'</div>';
		        }
    		    echo'</div>';
		    }
		}
		
		/*Le small group est une variation du card group, il prend les 3 derniers articles*/
		public function afficheSmallGroup($articles, $indice){
		    echo'
		    <div class="card-group smallGroup">
            ';
            $max=sizeof($articles)-$indice;
            if($max>=3){
                echo'<div class="card left">';
                    $this->innerCard($articles[$indice]);
                echo'</div>
                <div class="card right">';
                    $this->innerCard($articles[$indice+1]);
                echo'</div>
                <div class="card up">';
                    $this->innerCard($articles[$indice+2]);
                echo'</div>';

            }
            else{
                for($i=0;$i<$max;$i++){
                    echo'<div class="card up">';
                        $this->innerCard($articles[$indice+$i]);
                    echo'</div>';
                }
            }
            echo'</div>';
		}
		
		/*Fonction de remplissage des éléments des card group*/
		public function innerCard($article){
		    $text= filter_var($article[5], FILTER_SANITIZE_STRING) ;
		    $text = strlen($text) > 80 ? substr($text,0,80)." ..." : $text;
            $date = date("d/m/Y", strtotime($article[4]));
		    echo'
		    <a href="?module=article&article='.$article[0].'">
                <img class="card-img-top" src="'.$article[3].'" alt="image de couverture : '.$article[3].'">
                <p class="category" id="'.$article[6].'">'.$article[6].'</p>
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h6>Date : '.$date.'</h6>
                    <h3 class="card-title">'.$article[2].'</h3>
                    <p class="card-text">'.$text.'</p>
                </div>
            </a>';
		}
	}
?>