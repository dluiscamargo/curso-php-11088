<?php
require_once "../utilities/menu-utilities.php";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*

    Files   Session     Objects

*/

$asFilesSamples = [ [
        "href" => "php-samples/load-file.php",
        "target" => "ifrNav",
        "caption" => "Load file"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.2"
     ] 
];

$asSessionSamples = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.2"
     ] 
];

$asObjectsSamples = [ [
        "href" => "php-samples/objects-1.php",
        "target" => "ifrNav",
        "caption" => "Objetos"
     ],[
        "href" => "php-samples/objects-2.php",
        "target" => "ifrNav",
        "caption" => "Classes & Objetos"
     ] 
];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>PHP</title>

        <meta charset="utf-8" />
        
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        
        <!-- ARQUIVOS NA PASTA node_modules DO PROJETO -->
        <link rel="stylesheet"
              href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- ARQUIVOS ONLINE (NA NUVEM) - CÓDIGO COPIADO DE
        https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_dropdown-active&stacked=h -->
<!--        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
        
    </head>

    <body style="width:100%;height:100%">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" 
               href="#">
                <img src="../media/images/bird.jpg" 
                     alt="Logo" 
                     style="width:40px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" 
                       href="../index.php">Home</a>
                </li>
                <?php
                    echo buildDropdownMenu( "NavFiles",   "Files",   $asFilesSamples );
                    echo buildDropdownMenu( "NavSession", "Session", $asSessionSamples );
                    echo buildDropdownMenu( "NavObjects", "Objects", $asObjectsSamples );
                ?>
            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" 
                    name="ifrNav"
                    style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>

