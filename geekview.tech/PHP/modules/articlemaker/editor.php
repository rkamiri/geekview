<script src="https://kit.fontawesome.com/d444784037.js" crossorigin="anonymous"></script>
      <body onload="enableEdit();">
    <div id="bigBlock">
        <!-- Ensemble des commandes réalisables dans l'éditeur -->
      <button onclick="execCmd('bold');"><i class="fa fa-bold"></i></button>
      <button onclick="execCmd('italic');"><i class="fa fa-italic"></i></button>
      <button onclick="execCmd('underline');"><i class="fa fa-underline"></i></button>
      <button onclick="execCmd('strikeThrough');"><i class="fa fa-strikethrough"></i></button>
      <button onclick="execCmd('justifyLeft');"><i class="fa fa-align-left"></i></button>
      <button onclick="execCmd('justifyCenter');"><i class="fa fa-align-center"></i></button>
      <button onclick="execCmd('justifyRight');"><i class="fa fa-align-right"></i></button>
      <button onclick="execCmd('justifyFull');"><i class="fa fa-align-justify"></i></button>
      <button onclick="execCmd('subscript');"><i class="fa fa-subscript"></i></button>
      <button onclick="execCmd('superscript');"><i class="fa fa-superscript"></i></button>
      

      <button onclick="execCmd('insertUnorderedList');"><i class="fa fa-list-ul"></i></button>
      <button onclick="execCmd('insertOrderedList');"><i class="fa fa-list-ol"></i></button>
      <button onclick="execCmd('insertHorizontalRule');">HR</button>
      <button onclick="execCmdArg('createLink', prompt('Entrez l\'adresse', 'http://'));"><i class="fa fa-link"></i></button>
      <button onclick="execCmd('unlink');"><i class="fa fa-unlink"></i></button>
      <button onclick="showSource();">Code source</button>
      <button onclick="toggleEdit();">Activer édition</button>
      <button onclick="execCmdArg('insertImage', prompt('Entrez l\'URL de l\'image',''));"><i class="fa fa-file-image-o"></i></button>
      <select onchange="execCmdArg('fontSize', this.value);">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
      Text color : <input type="color" onchange="execCmdArg('foreColor', this.value);">
    </div>
    <form enctype="multipart/form-data" action="/index.php?module=editArticle&action=submitArticle" method="post" id="formulaire">
            <h2>Insérez votre Titre ici : </h2>
            <input id="titre" type="text" placeholder="titre de l'article" name="titreA">
            <h2>Insérez votre texte ici : </h2>
			<iframe class="box" placeholder="Adresse email" name="editor" contenteditable="true" style="width: 80%; height: 500px;"></iframe>
			<iframe class="box" name="ptsfortsfaibles" contenteditable="true"></iframe>
			<p id="labelNote">note/5</p>
			<select id="note" name="noteA">
			    <option selected value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<p id="categoriesLabel">Selectionner une catégorie</p>
			<select id="categories" name="categorieA">
			    <option selected value="technologies">Technologie</option>
				<option value="jeux">Jeu vidéo</option>
				<option value="films">Film</option>
				<option value="séries">Série</option>
				<option value="comics">Comic</option>
				<option value="mangas">Manga</option>
				<option value="animes">Anime</option>
				<option value="news">News</option>
				<option value="comparatifs">Comparatif</option>
			</select>
			 <div class="custom-file">
			    <label id="pp" class="custom-file-label">Sélectionner un fichier</label>
				<input type="file" class="custom-file-input" name="imageA" lang="fr" accept=".jpg,.jpeg,.gif,.png" />
			</div>
			<input id="ok" type="submit" name="submit">
		</form>
    <script type="text/javascript">
      var showSourceCode = false;
      var editMode = true;
      var template = "<div id=\"end\"><div id=\"ptsfortsfaibles\"><div id=\"ptsforts\"><p>Points forts :</p><ul ><li></li></ul></div><div id=\"ptsfaibles\"><p>Points faibles : </p><ul ><li></li></ul></div></div><div id=\"conclusion\"><h2>Conclusion : </h2></div></div>";

        //fonction d'initialisation de la page
      function enableEdit(){
        editor.document.designMode = 'on';
        ptsfortsfaibles.document.designMode = 'on';
        setPtsFortsFaibles();
        execCmdArg('enableObjectResizing','true');
        execCmdArg('enableInlineTableEditing','true');
      }
      //permet d'initialiser le texte la partie de conclusion
      function setPtsFortsFaibles(){
            ptsfortsfaibles.document.open();
            ptsfortsfaibles.document.write(template);
            ptsfortsfaibles.document.close();
      }

        
      function execCmd (command){
        editor.document.execCommand(command, false, null);
      }
      function execCmdArg(command, arg){
        editor.document.execCommand(command, false, arg);
      }
      
      //Principalement une fonction de debug
      function showSource(){
        if(showSourceCode){
          editor.document.getElementsByTagName('body')[0].innerHTML = editor.document.getElementsByTagName('body')[0].textContent;
          showSourceCode = false;
        }
        else{
          editor.document.getElementsByTagName('body')[0].textContent = editor.document.getElementsByTagName('body')[0].innerHTML;
          showSourceCode = true;
        }
      }

      function toggleEdit(){
        if(editMode){
          editor.document.designMode = 'off';
          editMode = false;
        }
        else{
          editor.document.designMode = 'on';
          editMode = true;
        }
      }
    //Permet d'attacher la partie de conclusion au contenu (à remplacer par nouvelle colonne de base de données) 
    $("#formulaire").submit(function(eventObj) {
      $("<input />").attr("type", "hidden")
          .attr("name", "contenuA")
          .attr("value", editor.document.getElementsByTagName('body')[0].innerHTML+ ptsfortsfaibles.document.getElementsByTagName('body')[0].innerHTML)
          .appendTo("#formulaire");
      return true;
  });
    </script>
