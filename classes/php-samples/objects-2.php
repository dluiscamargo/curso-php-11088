<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$asData_ass = [ "a" => "1", "b" => 12, "c" => 3.1415, "d" => true ]; // CRIA UM ARRAY
$asData_num = [ 10 => 1, 20 => 2, 30 => 3, 40 => 4 ]; // CRIA UM ARRAY

$asData = [];
$asData[7] = "null";
$asData[4] = null;
$asData[49] = "teste";

$asData_ass[5] = (object)[ "name" => "teste", "email" => "teste@email.com" ];

// JSON - Javascript object notation
$jsonData = '{
    "name": "teste1",
    "email": "teste1@email.com"
}';

$oData = json_decode( $jsonData );

$jsonString = json_encode( $asData_ass[5] );

/**
 * 
 * @param type $json => {"name":"teste","email":"teste@email.com"}
 * @return type
 * 
 * 1 - {"name":"teste","email":"teste@email.com"}
 * 2 -  name:teste,email:teste@email.com
 * 
 * 3 - $asProperties[0] => name:teste
 *     $asProperties[1] => email:teste@email.com
 * 
 * 4 - $asProperties[0] : [0] => name
 *                        [1] => teste
 *     $asProperties[1] : [0] => email
 *                        [1] => teste@email.com
 * 
 * 5 - $asObject[name]  => teste
 *     $asObject[email] => teste@email.com
 * 
 * 6 - obj->name = teste
 *     obj->email = teste@email.com
 */
function jsonDecode( $json /* 1 */ ){
    $objJson = null;
    
    //TO DO
    // 2
    $json = str_replace( [ "{", "\"", "}"], "", $json );    
    print_r( $json );
    echo "\n";
    
    // 3
    $asProperties = explode( ",", $json );
    print_r( $asProperties );
    echo "\n";
    
    // 4
    foreach( $asProperties as $iIndex => $asProperty ){
        $asProperties[$iIndex] = explode( ":", $asProperty );
    }
    print_r( $asProperties ); 
    echo "\n";
    
    // 5
    $asObject = [];
    foreach( $asProperties as $asProperty ){
        $asObject[$asProperty[0]] = $asProperty[1];
    }
    print_r( $asObject ); 
    echo "\n";
    
    // 6
    $objJson = (object) $asObject;
    
    return $objJson;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Modelo-html</title>

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
                echo "<h5></h5>";
                
                echo "<pre>";
                print_r( $asData );
                echo "</pre>";
                
                echo "<pre>";
                print_r( $asData_ass );
                echo "</pre>";
                
                echo "<pre>";
                print_r( $asData_num );
                echo "</pre>";
                
                echo "JSON";
                echo "<pre>";
                print_r( $oData );
                echo "</pre>";
                
                echo "<pre>";
                print_r( $jsonString );
                echo "</pre>";
                
                
                echo "<pre>";
                print_r( jsonDecode( $jsonString ) );
                echo "</pre>";
                
                
                
            ?>
        </div>
    </body>
</html>

