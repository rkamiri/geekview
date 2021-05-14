

<footer class="page-footer font-small pt-4">
    
    <section id="chat">
        <div class="messages" id="msg">
                     
        </div>
        <div class="user-inputs">
            <form action="chat/handler.php?task=write" method="POST" id="msgform">
                <?php 
                    if(isset($_SESSION['pseudo'])){
                        echo'<input type="hidden"" name="author" id="author" value="'.$_SESSION['pseudo'].'">
                            <input type="text" id="content" name="content" placeholder="Tapez votre message : " required >
                            <button  id="sendChat" type="submit">Envoyer ! &#10148</button>';
                    }
                    else{
                        echo'<button id="needConn" type="submit"><a href="?module=connection"> Vous devez vous connecter pour écrire dans le chat</a></button>';
                    }
                ?>
            </form>
        </div>
    </section>
    <script src="chat/app.js"></script>
    </section>
    <button onclick="affiche()" id="back2Top" title="Back to top" ">&#128172</button>
        <script type="text/javascript">
			document.getElementById('chat').style.display ="none";
		    function affiche() {
                var x = document.getElementById('chat');
                var y = document.getElementById("back2Top");
                if (x.style.display == "none") {
                    x.style.display ="";    
                    y.firstChild.data ="✕";
                    var elem = document.getElementById("msg");
                    elem.scrollTop = elem.scrollHeight;
                }
                else{
                    x.style.display ="none";  
                    y.firstChild.data ="💬";
                }
            }
        </script>
        <script>
            $('#back2Top').fadeIn();
        </script>
        <div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="/"><img src="theme/images/logo-darkmode.png" class="img-fluid" alt="Responsive image" id="logofooter"></a>
				<a href="?module=contact" class="footerlink">Contact</a>
				<a href="#" class="footerlink">Instagram</a>
				<a href="#" class="footerlink">Facebook</a>
				<a href="#" class="footerlink">Twitter</a>
			</div>
			<div class="col-md-5 offset-md-1">
				<p>
					Abonnez-vous à la Newsletter
				</p>
				<form class="input-group" action="?module=NlAbo&action=insertNlAbo" method="POST">
					<input type="email" class="form-control input-lg" name="email" placeholder="Adresse email" required>
					<button class="btn btn-sm btn-outline-white my-0" type="submit">OK</button>
				</form>
			</div>
		</div>
	</div>
	<div class="footer-copyright text-center">
		<a href="?module=statique&action=viePrivee">Vie privée</a>
		<a href="?module=statique&action=viePrivee#cookies">Cookies</a>
		<a href="?module=statique&action=cgu">Conditions Générales d’Utilisation</a>
		<p id="droits">
			Tout droits réservés © 2019
		</p>
	</div>
	
</footer>

