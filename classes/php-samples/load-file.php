<?php
/* 
 * Manipulação/leitura de arquivos
 */
$sFileName = "../../data/main_index.csv";

$rcFile = fopen($sFileName, "r");
$sFileContent_fgets = "";

if($rcFile){
    $sStatus_fst = "Arquivo aberto!";
    
    while ($sLine = fgets ($rcFile)) {
        $sFileContent_fgets .= $sLine;
    }
    fclose($rcFile);
}else{
    $sStatus_fst = "erro ao abir o arquivo!";
}
//Segunda forma: função file
$asFileContent_file = file( $sFileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if($asFileContent_file){
    $sStatus_scn = "Arquivo aberto com sucesso!";
}else{
    $sStatus_scn = "Erro ao abrir o sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Load File - fopen teste</title>
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
                //TODO:
                echo"<h4>Primeira forma: file</h4>";
                echo"<h5>$sStatus_fst</h5>";
                echo"<h6><pre>";
                    print_r($sFileContent_fgets);
                echo"</pre></h6><hr />";
                echo"<h6><pre>";
                    print_r(explode ("\n", $sFileContent_fgets));
                echo"</pre></h6><hr />";
                
                
                //segunda forma
                echo"<h4>Segunda forma: file</h4>";
                echo"<h5>$sStatus_scn</h5>";
                echo"<h6><pre>";
                    print_r($asFileContent_file);
                echo"</pre></h6><hr />";
            ?>
        </div>
    </body>
</html>