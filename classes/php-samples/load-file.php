<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //$sFileName = "../../data/main_index.csv";
//
//$row = 0;
//while ($line = fgetcsv($handle, 1000, ",")) {
//	if ($row++ == 0) {
//		continue;
//	}
//	
//	$main_index[] = [
//		'nome' => $line[0],
//		'site' => $line[1],
//		'telefone' => $line[2],
//		'idade' => $line[3]
//	];
//}
//
//print_r($main_index);
//
//fclose($handle);
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
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Load File - fopen</title>
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
                echo"<h4>Aqui vem o conteúdo da nossa página...</h4>";
                echo"<h5>$sStatus_fst</h5>";
                echo"<h6><pre>";
                    print_r($sFileContent_fgets);
                echo"</h6></pre>";
            ?>
        </div>
    </body>
</html>