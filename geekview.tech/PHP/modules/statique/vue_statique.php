<?php
  class vueStatique extends VueGenerique
  {
    
    public function getViePrivee()
    {
        echo '<!DOCTYPE html>
      
    <body>
  <article>
    <h1>CHARTE DE RESPECT DE LA VIE PRIVÉE GEEKVIEW</h1>
    <p>Le site GeekView est susceptible de collecter certaines données personnelles des internautes telles que nom, adresses, email ou adresses IP. La collecte de ces données personnelles est obligatoire pour accéder à certaines fonctionnalités du site, ainsi que pour la création d’un espace personnel.</p>
    <p>Le présent article a pour objet d’exposer la raison de la collecte de ces données personnelles et les moyens offerts à l’internaute pour, le cas échéant, contrôler cette collecte, les supprimer ou encore s’en prémunir.</p>
    
    <h2>I. Contrôle et suppression des données personnelles</h2>
    
    <h3>I. Contrôle et suppression des données personnelles</h3>
    <p>Le fichier du site GeekView comportant les données personnelles des internautes a fait l\'objet d\'une déclaration auprès de la Commission nationale informatique et liberté (CNIL) enregistrée sous les numéros 1641889, 1641887 et 1641888.</p>
    
    <h3>2. Droit d\'accès, de rectification et d\'opposition</h3>
    <p>Les données ayant fait l’objet des déclarations susvisées sont conservées dans des conditions sécurisées, selon les moyens actuels de la technique, dans le respect des dispositions de la Loi Informatique et Libertés du 6 janvier 1978.</p>
    <p>Conformément à cette loi, les internautes disposent d\'un droit d\'opposition, d\'interrogation, d\'accès et de rectification des données qu\'ils ont fournies. Pour ce faire, l\'internaute doit adresser à Factory Eleven une demande soit :</p>
    <ul>
      <li>Par courrier à : Factory Eleven, 48 rue du Faubourg du Temple, 75011 Paris, France</li>
      <li>Par email: en utilisant le formulaire de contact (rubrique "Vie privée : données personnelles")</li>
      <li>La modification interviendra dans des délais raisonnables à compter de la réception de la demande de l\'internaute.</li>
    </ul>

    <h2 id="cookies">II. Cookies et adresses IP</h2>
    <h3>1. Cookies</h3>
    <h4>1.1 Finalité et objet des cookies</h4>
    <h5>1.1.1 Implantation par GeekView</h5>
    <p>Les cookies implantés par GeekView permettent de stocker des informations relatives à la navigation sur le site (dates, pages, heures), ainsi qu\'aux éventuelles données saisies par les internautes au cours de leur visite (recherches, login, email, mot de passe).</p>
    <p>Ces cookies sont conservés sur le poste informatique de l\'internaute pour une durée variable allant jusqu\'à 1 an et peuvent être lus et utilisés par GeekView lors d\'une visite ultérieure de l\'internaute sur le présent site.</p>
    <h4>1.2 Faculté d\'opposition de l\'internaute à l\'implantation des cookies</h4>
    <p>L\'internaute dispose de la possibilité de bloquer, modifier la durée de conservation ou supprimer les cookies. En premier lieu, l’internaute peut contrôler les cookies via l\'interface de son navigateur (généralement : outils ou options / vie privée ou confidentialité / cookies). En second lieu, l’internaute peut contrôler les cookies en se connectant au site internet Your Online Choices à l’adresse suivante : http://www.youronlinechoices.com/fr/controler-ses-cookies/. L’internaute peut contrôler les cookies en cliquant sur le lien suivant : gestion de mes consentements de cookies.</p>
    <p>En cas de blocage ou de suppression des cookies, la navigation et l’affichage des publicités ne seront pas optimisés.</p>
    <h4>2. Adresses IP</h4>
    <p>GeekView devra communiquer toutes les données personnelles relatives à un internaute sur réquisition judiciaire ou sur décision judiciaire. L\'adresse IP pourra faire l\'objet d\'un rapprochement avec l\'identité effective de l\'internaute en cas de communication de cette information par un fournisseur d\'accès à internet.</p>

    <h2>III. Publicités</h2>
    <p>Le Site GeekView dispose d’espaces publicitaires diffusant des annonces ciblées. L’internaute souhaitant ne pas bénéficier du service de publicités ciblées proposé par les annonceurs partenaires de GeekView peut se désabonner de ces services en se rendant sur un plateforme de désabonnement dédiée, tels que Network Advertising Initiative ou Digital Advertising Alliance..</p>
    <p>D’autres éléments relatifs au fonctionnement de la publicité en ligne ciblée sont notamment accessibles en consultant la Charte de la vie privée de Smart Ad Server</p>

    <h2>IV. Abonnement à la Newsletter</h2>
    <p>Les internautes peuvent s’abonner à la Newsletter du site GeekView en cochant la case prévue à cet effet ou en donnant expressément leur accord à cette fin. Les internautes ainsi abonnés auront la faculté de se désinscrire de la newsletter via les moyens suivants :</p>
    <ul>
      <li>en décochant la case sur la page du compte utilisateur</li>
      <li>en utilisant le lien présent dans chaque newsletter</li>
    </ul>

    <h2>V. Suppression de l’espace personnel</h2>
    <p>Les internautes doivent créer un espace personnel lorsqu’ils souhaitent participer au forum du site. A cette fin, les internautes seront invités à fournir un certain nombre d\'informations personnelles. Certaines de ces informations sont réputées indispensables à la création de l\'espace personnel. Le refus par un internaute de fournir lesdites informations aura pour effet d\'empêcher la création de l\'espace personnel.</p>
    <p>L’internaute pourra supprimer son espace personnel à tout moment en cliquant sur le bouton « supprimer mon compte » situé dans son espace personnel, comme indiqué sur la capture d’écran ci-après :</p>
    <img class="img-fluid" src="theme/images/delete.PNG">
    <p>Le compte de l’internaute sera alors supprimé dans un délai de 5 jours ouvrés.</p>

  </article>

        ';
    }

    public function getCgu()
    {
        echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Charte de vie privée</title>

      </head>
        <body>
    
  <article>
    <h2>Informations légales</h2>
    <h3>1. Présentation du site.</h3>
    <p>En vertu de l\'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.geekview.com/">www.geekview.com</a> l\'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
    <p><strong>Propriétaire</strong> : iut de montreuil – – 140 rue de la nouvelle france 93100 Montreuil<br />
    <strong>Créateur</strong> : <a href="https://www.geekview.com/">tactacCustom</a>
    <strong>Responsable publication</strong> : tactacCustom – rkamiri@iut.univ-paris8.fr
    <p>Le responsable publication est une personne physique ou une personne morale.</p>
    <strong>Webmaster</strong> : tactacCustom – fpasquier@iut.univ-paris8.fr<br />
    <strong>Hébergeur</strong> : https://www.iut.univ-paris8.fr/ – 140 rue de la nouvelle france 93100 Montreuil<br />
    <h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
    <p>L’utilisation du site <a href="http://www.geekview.com/">www.geekview.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://www.geekview.com/">www.geekview.com</a> sont donc invités à les consulter de manière régulière.</p>
    <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par iut de montreuil, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
    <p>Le site <a href="http://www.geekview.com/">www.geekview.com</a> est mis à jour régulièrement par tactacCustom. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
    <h3>3. Description des services fournis.</h3>
    <p>Le site <a href="http://www.geekview.com/">www.geekview.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
    <p>iut de montreuil s’efforce de fournir sur le site <a href="http://www.geekview.com/">www.geekview.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
    <p>Tous les informations indiquées sur le site <a href="http://www.geekview.com/">www.geekview.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.geekview.com/">www.geekview.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
    <h3>4. Limitations contractuelles sur les données techniques.</h3>
    <p>Le site utilise la technologie JavaScript.</p>
    <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
    <h3>5. Propriété intellectuelle et contrefaçons.</h3>
    <p>iut de montreuil est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
    <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : iut de montreuil.</p>
    <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
    <h3>6. Limitations de responsabilité.</h3>
    <p>iut de montreuil ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.geekview.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
    <p>iut de montreuil ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://www.geekview.com/">www.geekview.com</a>.</p>
    <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. iut de montreuil se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, iut de montreuil se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
    <h3>7. Gestion des données personnelles.</h3>
    <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l\'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
    <p>A l\'occasion de l\'utilisation du site <a href="http://www.geekview.com/">www.geekview.com</a>, peuvent êtres recueillies : l\'URL des liens par l\'intermédiaire desquels l\'utilisateur a accédé au site <a href="http://www.geekview.com/">www.geekview.com</a>, le fournisseur d\'accès de l\'utilisateur, l\'adresse de protocole Internet (IP) de l\'utilisateur.</p>
    <p> En tout état de cause iut de montreuil ne collecte des informations personnelles relatives à l\'utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.geekview.com/">www.geekview.com</a>. L\'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu\'il procède par lui-même à leur saisie. Il est alors précisé à l\'utilisateur du site <a href="http://www.geekview.com/">www.geekview.com</a> l’obligation ou non de fournir ces informations.</p>
    <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
    <p>Aucune information personnelle de l\'utilisateur du site <a href="http://www.geekview.com/">www.geekview.com</a> n\'est publiée à l\'insu de l\'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l\'hypothèse du rachat de iut de montreuil et de ses droits permettrait la transmission des dites informations à l\'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l\'utilisateur du site <a href="http://www.geekview.com/">www.geekview.com</a>.</p>
    <p>Le site n\'est pas déclaré à la CNIL car il ne recueille pas d\'informations personnelles. .</p>
    <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
    <h3>8. Liens hypertextes et cookies.</h3>
    <p>Le site <a href="http://www.geekview.com/">www.geekview.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de iut de montreuil. Cependant, iut de montreuil n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
    <p>La navigation sur le site <a href="http://www.geekview.com/">www.geekview.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
    <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
    <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
    <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l\'onglet Options. Cliquer sur l\'onglet Vie privée.
    Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l\'historique. Enfin décochez-la pour désactiver les cookies.</p>
    <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
    <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences. Dans l\'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

    <h3>9. Droit applicable et attribution de juridiction.</h3>
    <p>Tout litige en relation avec l’utilisation du site <a href="http://www.geekview.com/">www.geekview.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
    <h3>10. Les principales lois concernées.</h3>
    <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l\'informatique, aux fichiers et aux libertés.</p>
    <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique.</p>
    <h3>11. Lexique.</h3>
    <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
    <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l\'identification des personnes physiques auxquelles elles s\'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
  </article>
</body>
        ';
    }
  }
?>
