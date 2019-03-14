<?php

// LAÇO DE REPETIÇAO ( OU LOOP )
// ENQUANTO => while
// REPITA   =~ do ... while
// PARA     => for
// O CONCEITO DO PARA É: PARA CADA ELEMENTO DO ARRAY FAÇA ...
//
// PARA i DE <VALOR_INICIAL> ATÉ <VALOR_FINAL> PASSO 1 FACA
//    ...
// FIMPARA
//
// $iCount = count( $asLinks ); // núm. de elementos no array
// for ( $i = 0; $i < $iCount; $i++ ){
//    ...
// }
//
// $i++  <==>  $i = $i + 1
            
//            foreach( $asLinks as $asItem ){
//                
//            }
//           
$asLinks = [];

$asLinks[] = [
   "href" => "exercices/ex4-pag23-form.php",
   "target" => "_blank",
   "caption" => "Exercício 4 da pag 23"
];

$asLinks[] = [
   "href" => "exercices/ex4-pag23-form-v2.php",
   "target" => "_blank",
   "caption" => "Exercício 4 da pag 23 (2)"
];

$asLinks[] = [
   "href" => "exercices/ex5-pag23-form.php",
   "target" => "_blank",
   "caption" => "Exercício 5 da pag 23"
]; 

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>Aula 28/Fev</title>

        <meta charset="utf-8" />
        
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <link rel="stylesheet"
              href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- BARRA DE NAVEGAÇÃO -->
        <nav id="navMain"
             class="">
            <!-- LOGOTIPO -->
            <a id="aLogo"
               href="#"
               class="">
                <img id="imgLogo"
                     src=""
                     alt="LOGO"
                     style=""/>
            </a> <!-- <a id="aLogo" -->            
            <!-- ITEMS DA BARRA DE NAVEGAÇÃO -->
            <ul id="ulNavItems"
                class="">
                <li id="liNavItem1"
                    class="">
                    <a id="aNavItem1"
                       href="#"
                       class="">Item 1</a>
                </li> <!-- <li id="liNavItem1" -->
                <li id="liNavItem2_dropdown"
                    class="">
                    <a id="aNavItem2_toggle"
                       href="#"
                       class="">
                        Exercícios pag 23
                    </a>
                    <ul id="ulNavItem2_dropdown_menu">
                        <?php
                        $iCount = count( $asLinks );
                        // PARA CADA ELEMENTO NO ARRAY $asLinks FAÇA
                        for ( $i = 0; $i < $iCount; $i++ ){
                            $sHref = $asLinks[ $i ][ "href" ];
                            $sTarget = $asLinks[ $i ][ "target" ];
                            $sCaption = $asLinks[ $i ][ "caption" ];
                            $sLink = '<a href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
                            echo "<li>$sLink</li>";
                        } // for ( $i = 0; $i < $iCount; $i++ ){
                        ?>
                    </ul> <!-- <ul id="ulNavItem2_dropdown_menu"> -->
                </li> <!-- <li id="liNavItem2_dropdown" -->
            </ul> <!-- <ul id="ulNavItems" -->            
        </nav> <!-- <nav id="navMain" -->
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" 
                    name="ifrNav"
                    style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>

