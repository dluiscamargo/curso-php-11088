<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../../core/autoloader.php";
//require_once '../../core/classDatabase.php';

$dbData = new Products();
//$dbData = newObject( "Database" );
//$dsProducts = newObject( "Products" );
$dbData->selectAll();
//$dbData->select( [ "ProductId", "ProductName" ], [] );

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Products</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- ARQUIVOS ONLINE (NA NUVEM) - CÓDIGO COPIADO DE
        https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_dropdown-active&stacked=h -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:
                echo "<h5>Número de produtos: {$dbData->recordCount()}</h5>";
                
                echo "<pre>";
                while ( $asRecord = $dbData->getRecord_object() ){
                    print_r( $asRecord );
                } // while ( $asRecord = $dbData->getRecord() ){
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

