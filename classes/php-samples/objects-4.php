<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Menu{
    private $id      = "";
    private $caption = "";
    private $itens   = [];
    
    public function __construct( $id, $caption ){
        $this->id      = $id;
        $this->caption = $caption;
    }
    
    public function addItem( $oItemMenu ){
        $this->itens[] = $oItemMenu;
    }
    
    public function count(){
        return count( $this->itens );
    }
    
    public function item( $iIndex ){
        return $this->itens[$iIndex];
    }
}

class ItemMenu{
    private $href;
    private $target;
    private $caption;
    
    public function __construct( $href, $target, $caption ){
        $this->href    = $href;
        $this->target  = $target;
        $this->caption = $caption;
    }
}

$oMenu = new Menu( "menu_2", "Menu 2" );
//$oMenu->id      = "menu_2";
//$oMenu->caption = "Menu 2";
//$oMenu->itens   = [];

$oItemMenu = new ItemMenu( "#", "_self", "Item 1" );
//$oItemMenu->href    = "#";
//$oItemMenu->target  = "_self";
//$oItemMenu->caption = "Item 1";

//$oMenu->itens[] = $oItemMenu;
$oMenu->addItem( $oItemMenu );
$oMenu->addItem( new ItemMenu( "#", "_self", "Item 2" ) );
$oMenu->addItem( new ItemMenu( "#", "_self", "Item 3" ) );


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Classes & Objetos</title>

        <meta charset="utf-8" />
        
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        
        <!-- ARQUIVOS NA PASTA node_modules DO PROJETO -->
        <link rel="stylesheet"
              href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        
        <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- ARQUIVOS ONLINE (NA NUVEM) - CÓDIGO COPIADO DE
        https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_dropdown-active&stacked=h -->
<!--        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
        
    </head>

    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:                
                echo "<h5>Objeto Menu - class Menu</h5>";
                echo "<pre>";
                print_r( $oMenu );
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

