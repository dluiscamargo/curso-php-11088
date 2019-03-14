<?php
require_once "../utilities/menu-utilities.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * neste modulo quero 3 cropdows
 * oprimeiro faz = Files  Session eo tercero Objects
 * funcoes fopen, fread / fwhat e fclose
 */
$asFilesSamples = [ [
        "href" => "php-samples/load-file.php",
        "target" => "ifrNav",
        "caption" => "Teste 1.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.2"
     ] 
];
$asSessionsSamples = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.2"
     ] 
];
$asObjectSamples = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 1.2"
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
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
                    echo buildDropdownMenu( "NavFilesSamples", "FilesSamples", $asFilesSamples );
                    echo buildDropdownMenu( "NavObjectSamples", "ObjectSamples", $asObjectSamples );
                    echo buildDropdownMenu( "NavSessionsSamples", "SessionsSamples", $asSessionsSamples );
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