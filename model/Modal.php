<?php 


Class Modal {


  public static function MsgBox($msg) {

    $modal = "<div class='modal fade' id='myModal' role='dialog' style='margim-left:10px;'>".
    "<div class='modal-dialog'>".
    "<div class='modal-content'>".
    "<div class='modal-header'>".
    "<button type='button' class='close' data-dismiss='modal'>&times;</button>".
    "<h4 class=modal-title>SIMORP beta</h4>".
    "</div>".
    "<div class=modal-body>".
    "<p>" . $msg . "</p>".
    "</div>".
    "<div class=modal-footer>".
    "<input id='fechar' type='button' class='btn btn-default' data-dismiss='modal' value='Fechar' >".
    "</div>".
    "</div>".
    "</div>".
    "</div>";

    return $modal;

    }


}



?>