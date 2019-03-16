<?php
    $oMenu_std = new stdClass();
    $oMenu_std->id      = "menu_1";
    $oMenu_std->caption = "menu_1";
    $oMenu_std->itens   = [];

    $oItenMenu_std = new stdClass();
    $oItenMenu_std->href    = "#";
    $oItenMenu_std->target  = "_self";
    $oItenMenu_std->caption = "Item 1";

    $oMenu_std->itens[] = $oItenMenu_std;
       
// Criando nossa classe
class Menu {
  var $id      = "";
  var $caption = "";
  var $itens   = [];
}

class ItemMenu{
    public $href;
    public $target;
    public $caption;
    
}

//Instanciando nossa classe
$oMenu = new Menu();
$oMenu->id =  "Menu_2";
$oMenu->caption = "Menu 2";
$oMenu->itens = [];

$oItenMenu = new ItemMenu();
$oItenMenu->href =  "#";
$oItenMenu->target = "_self 2";
$oItenMenu->caption = "Item 1";

$oMenu->itens[] = $oItenMenu;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Classes e Objetos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:
                echo "<h5>Objeto Menu</h5>";
                echo '<pre>';
                    print_r($oMenu_std);
                echo '</pre>';
                
                echo "<h5>Objeto Menu class Menu</h5>";
                echo '<pre>';
                    print_r($oMenu);
                echo '</pre>';
            ?>
        </div>
    </body>
</html>

