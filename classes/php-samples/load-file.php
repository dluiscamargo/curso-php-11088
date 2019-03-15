<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sFileName = "../../data/main_index.csv";

// PRIMEIRA FORMA: funções fopen / fgets / fclose
// o prefixo rc é para indicar "resource"
$rcFile = fopen( $sFileName, "r" );

$sFileContent_fgets = "";
if ( $rcFile ){
    $sStatus_fst = "Arquivo aberto com sucesso!";
    
    // File stuff - read/write    
    while ( $sLine = fgets( $rcFile ) ){
        $sFileContent_fgets .= $sLine;
    }    
    fclose( $rcFile );
}
else{
    $sStatus_fst = "Erro ao abrir arquivo!";
}

// SEGUNDA FORMA: função file
$asFileContent_file = file( $sFileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES  );
if ( $asFileContent_file ){
    $sStatus_scn = "Arquivo aberto com sucesso!";
}
else{
    $sStatus_scn = "Erro ao abrir arquivo!";
}

// TERCEIRA FORMA: função get_file_contents

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Load File - fopen</title>

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
                echo "<h4>PRIMEIRA FORMA: fopen / fgets / fclose</h4>";
                echo "<h5>$sStatus_fst</h5>";
                echo "<h6><pre>";
                print_r( $sFileContent_fgets );
                echo "</pre></h6><hr />";
                echo "<h6><pre>";
                print_r( explode( "\n", $sFileContent_fgets ) );
                echo "</pre></h6><hr />";
                
                echo "<h4>SEGUNDA FORMA: file</h4>";
                echo "<h5>$sStatus_scn</h5>";
                echo "<h6><pre>";
                print_r( $asFileContent_file );
                echo "</pre></h6><hr />";
            ?>
        </div>
    </body>
</html>

