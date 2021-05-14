
<?php
include_once('connexionBD.php');
$subject = 'newsletter geekview';
$from = 'newsletter@geekview.tech';
 
// Pour envoyer un courrier HTML, l'en-tête Content-type doit être défini
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Crée l'en-têtes du mail
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// récupère les 5 derniers articles et les ordonnent dans un format HTML
    $request="select * from ArticleGW order by idA desc limit 5";
    $prepareRequest=$bdd->prepare($request);
    $prepareRequest->execute();
    $cc=$prepareRequest->fetchAll();
        $message = '<html>
                <head>
                <style>
                    body{
                        margin:auto;
                        background-color:grey;
                    }
                    article{
                        background-color:white;
                        width:90vw;
                        margin:auto;
                    }
                    #image{
                        display:block;
                        width:15vw;
                        margin:auto;
                    }
                    h1{
                        text-align:center;
                    }
                    #card{
                        margin-top:2vh;
                        
                        display:inline;
                        width:70vw;
                    }
                    .cardimg{
                        
                        width:65vw;
                        height:40vh;
                        display:block;
                        margin:auto;
                        margin-top:-15vh;
                    }
                    a{
                        text-decoration:none;
                        color:black;
                        text-align:center;
                    }
                    .cardText{
                        width:65vw !important;
                        background-color:rgba(0,0,0,0.3085609243697479);
                        margin-left:12.5vw;
                        position:absolute;
                        text-align:center;
                        color:white;
                    }
                </style>
                </head>
                <body>
               
                    ';
    $message .= '<article>
                 <img id="image" src="https://geekview.tech/theme/images/logo.png"  alt="GeekView Image">';
    $message .= '<img>';
    $message .= '<h1>Voici la dernière newsletter en date du site GeekView, vous y retrouverez nos 5 derniers articles !</h1>';
    for($i=0; $i<sizeof($cc); $i++){
        $blabla= filter_var($cc[$i][5], FILTER_SANITIZE_STRING) ;
            $blabla = strlen($blabla) > 80 ? substr($blabla,0,80)." ..." : $blabla;
            $date = date("d/m/Y", strtotime($cc[$i][4]));
        $message.=
                ' <div class="cardText">
                    <h6>Date : '.$date.'</h6>
                    <h3 class="card-title">'.$cc[$i][2].'</h3>
                    <p class="card-text">'.$blabla.'</p>
                </div>
                <div id="card">
                    <a href="https://geekview.tech/?module=article&article='.$cc[$i][0].'">
                        <img class="cardimg" src="https://www.geekview.tech/'.$cc[$i][3].'" alt="image de couverture : '.$cc[$i][3].'">
                    </a>
                </div>
               
            ';
    }
    $message .= '</article>';
    $message .= '</body></html>';

    /*récupération des mails des abonnés a la newsletter*/
    $Requestemails="SELECT * FROM AbonnementNlGW";
    $prepareRequestEmails=$bdd->prepare($Requestemails);
    $prepareRequestEmails->execute();
    $emails=$prepareRequestEmails->fetchAll();

    /*Envoi du mail au abonnés*/
    for($j=0; $j<sizeof($emails);$j++){
        $to=$emails[$j][0];
        echo $to;
        if(mail($to, $subject, $message, $headers)){
            echo 'Your mail has been sent successfully.';
        } else{
             echo 'Unable to send email. Please try again.';
        }
    }


?>