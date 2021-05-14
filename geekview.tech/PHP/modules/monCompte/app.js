function modifier()
{
    // 1. Interruption de l'envoi du formulaire
    event.preventDefault();
    
    // 2. Récupération des données du formulaire
    const Nom = document.querySelector('#Nom');
    const Prenom = document.querySelector('#Prenom');
    const DatNaiss = document.querySelector('#DatNaiss');
    const Genre = document.querySelector('#Genre');
    const Pays = document.querySelector('#Pays');

    
    // 3. Conditionnement des données
    const data = new FormData();
    data.append('nom', Nom.value);
    data.append('prenom', Prenom.value);
    data.append('datNaiss',DatNaiss.value);
    data.append('genre',Genre.value);
    data.append('pays',Pays.value);
    // 4. Configuration d'une requête ajax en POST et envoie des données
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open('POST', 'PHP/modules/monCompte/modif_infoPerso.php');
    requeteAjax.send(data);
}
function modifier2()
{
    // 1. Interruption de l'envoi du formulaire
    event.preventDefault();
    
    // 2. Récupération des données du formulaire
    const pseudo = document.querySelector('#ComptePseudo');
    const bio = document.querySelector('#CompteBio');
    const mail = document.querySelector('#contactTitle');
    const curpwd = document.querySelector('#curpwd');
    const newpwd = document.querySelector('#newpwd');

    
    // 3. Conditionnement des données
    const data = new FormData();
    data.append('pseudo', pseudo.value);
    data.append('bio', bio.value);
    data.append('mail',mail.value);
    data.append('curpwd',curpwd.value);
    data.append('newpwd',newpwd.value);
    // 4. Configuration d'une requête ajax en POST et envoie des données
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open('POST', 'PHP/modules/monCompte/modif_gesCompte.php');
    requeteAjax.send(data);
}

function supprimer()
{
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open('POST', 'PHP/modules/monCompte/suppressionCompte.php');
    requeteAjax.send();
}

// ajout des ecouteurs sur les formulaires et le bouton de suppression
document.querySelector('#form2').addEventListener('submit', modifier2);
document.querySelector('#supp').addEventListener('click', supprimer);
document.querySelector('#form1').addEventListener('submit', modifier);