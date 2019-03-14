<?php   
require_once "../utilities/menu-utilities.php";

$asLinks1 = [];

$asLinks1[] = [
   "href" => "exercices/ex4-pag23-form.php",
   "target" => "ifrNav",
   "caption" => "Exercício 4"
];

$asLinks1[] = [
   "href" => "exercices/ex4-pag23-form-v2.php",
   "target" => "ifrNav",
   "caption" => "Exercício 4 (2)"
];

$asLinks1[] = [
   "href" => "exercices/ex5-pag23-form.php",
   "target" => "ifrNav",
   "caption" => "Exercício 5"
];

$asLinks2 = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 3.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 3.2"
     ] 
];

$asLinks3 = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 4.1"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 4.2"
     ],[
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Teste 4.3"
     ] 
];

$asLinks = [ $asLinks1, $asLinks2, $asLinks3 ];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Aula 28/Fev</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
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
                       href="#">Link 1</a>
                </li>
                <li id="liNavItem2_dropdown"
                    class="nav-item dropdown">
                    <a id="aNavItem2_toggle"
                       class="nav-link dropdown-toggle"
                       href="#" 
                       data-toggle="dropdown">
                        Exercícios pag23
                    </a>
                    <ul id="ulNavItem2_dropdown_menu"
                        class="dropdown-menu">
                        <?php
                        $iCount = count( $asLinks1 );
                        // PARA CADA ELEMENTO NO ARRAY $asLinks1 FAÇA
                        for ( $i = 0; $i < $iCount; $i++ ){
                            $sHref = $asLinks1[ $i ][ "href" ];
                            $sTarget = $asLinks1[ $i ][ "target" ];
                            $sCaption = $asLinks1[ $i ][ "caption" ];
                            $sLink = '<a href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
                            echo "<li>$sLink</li>";
                        } // for ( $i = 0; $i < $iCount; $i++ ){
                        ?>
                    </ul>
                </li>
                <?php
                    echo buildDropdownMenu( "NavItem3", "Menu 3", $asLinks2 );
                    echo buildDropdownMenu( "NavItem4", "Menu 4", $asLinks3 );
                ?>
            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>
