<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 *      Data => informação
 *      Date 
 */
$sFileName = "../../data/main_index.csv";
$asData    = file( $sFileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES  );

$aaData = [];
foreach ( $asData as $csvData ){
    $aaData[] = explode( ";", $csvData ); 
} // foreach ( $asData as $csvData ){

$aaDataAssoc = [];
foreach ( $asData as $csvData ){    
    if ( 0 ){
        $asLink = explode( ";", $csvData );
        $aaDataAssoc[] = [
           "href"    => $asLink[0],
           "target"  => $asLink[1],
           "caption" => $asLink[2]
        ];
    }
    else{
        list( $sHref, $sTarget, $sCaption ) = explode( ";", $csvData );
        $aaDataAssoc[] = [
           "href"    => $sHref,
           "target"  => $sTarget,
           "caption" => $sCaption
        ];
    }
} // foreach ( $asData as $csvData ){

// ***************************************************************************
// ***************************************************************************
// OBJETOS
// 
// CRIANDO OBJETOS A PARTIR DE ARRAYS - CASTING
$oLink_num = (object)$aaData[0];
$oLink_ass = (object)$aaDataAssoc[0];

$htmlTable = "<table class=\"table table-striped\">";

    $htmlTable .= "<thead>";
        $htmlTable .= "<tr>";
            $htmlTable .= "<th>Rep.</th>";
            $htmlTable .= "<th>Href</th>";
            $htmlTable .= "<th>Target</th>";
            $htmlTable .= "<th>Caption</th>";
        $htmlTable .= "</tr>";
    $htmlTable .= "</thead>";

    $htmlTable .= "<tbody>";
        $htmlTable .= "<tr>";
            $htmlTable .= "<td>array num</td>";
            $htmlTable .= "<td>{$aaData[0][0]}</td>";
            $htmlTable .= "<td>{$aaData[0][1]}</td>";
            $htmlTable .= "<td>{$aaData[0][2]}</td>";
        $htmlTable .= "</tr>";
        
        $htmlTable .= "<tr>";
            $htmlTable .= "<td>object (num)</td>";
            $htmlTable .= "<td>{$oLink_num->{0}}</td>";
            $htmlTable .= "<td>{$oLink_num->{1}}</td>";
            $htmlTable .= "<td>{$oLink_num->{2}}</td>";
        $htmlTable .= "</tr>";
        
        $htmlTable .= "<tr>";
            $htmlTable .= "<td>array assoc</td>";
            $htmlTable .= "<td>{$aaDataAssoc[0]["href"]}</td>";
            $htmlTable .= "<td>{$aaDataAssoc[0]["target"]}</td>";
            $htmlTable .= "<td>{$aaDataAssoc[0]["caption"]}</td>";
        $htmlTable .= "</tr>";
        
        $htmlTable .= "<tr>";
            $htmlTable .= "<td>object (assoc)</td>";
            $htmlTable .= "<td>{$oLink_ass->href}</td>";
            $htmlTable .= "<td>{$oLink_ass->target}</td>";
            $htmlTable .= "<td>{$oLink_ass->caption}</td>";
        $htmlTable .= "</tr>";
    $htmlTable .= "</tbody>";

$htmlTable .= "</table>";

$aoLinks = [];
foreach( $aaDataAssoc as $asLink ){
    $aoLinks[] = (object) $asLink;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Objects</title>

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
                echo "<h5>Data</h5>";
                
                echo $htmlTable;
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $asData );
                echo "</pre>";
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $aaData );
                echo "</pre>";
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $aaDataAssoc );
                echo "</pre>";
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $oLink_num );
                print_r( $aaData[0] );
                echo "</pre>";
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $oLink_ass );
                print_r( $aaDataAssoc[0] );
                echo "</pre>"; 
                
                echo "<hr />";
                
                echo "<pre>";
                print_r( $aoLinks );
                echo "</pre>";                 
                
            ?>
        </div>
    </body>
</html>

