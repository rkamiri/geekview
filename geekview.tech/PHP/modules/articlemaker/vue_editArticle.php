<?php
  /**
  * 
  */
  class VueEditArticle extends VueGenerique
  {
    
    public function editor()
    {
    echo file_get_contents('./PHP/modules/articlemaker/editor.php', true);
    }
  }
?>
