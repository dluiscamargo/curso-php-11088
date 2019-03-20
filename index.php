<?php
require_once "utilities/menu-utilities.php";

$aAulas = [ [
        "href" => "classes/aula-2702.php",
        "target" => "ifrNav",
        "caption" => "Aula 27/02"
     ],[
        "href" => "classes/aula-2802.php",
        "target" => "ifrNav",
        "caption" => "Aula 28/02"
     ],
     [
        "href" => "classes/aula-0103.php",
        "target" => "ifrNav",
        "caption" => "Aula 01/03"
     ] 
];
$asExercicios = [[
        "href" => "classes/exercicios_old.php",
        "target" => "_self",
        "caption" => "exercicios_old"
     ],[
        "href" => "classes/exercicios.php",
        "target" => "_self",
        "caption" => "exercicios"
     ],
];

$asModules = [[
        "href" => "classes/modelo.php",
        "target" => "_self",
        "caption" => "Modelo"
     ],[
        "href" => "classes/info.php",
        "target" => "_self",
        "caption" => "Info"
     ],
     [
        "href" => "classes/php-samples.php",
        "target" => "_self",
        "caption" => "PHP"
     ]
];

$asDeploy = [[
    "href" => "deploy/deploy.php",
    "target" => "_self",
    "caption" => "Deploy"
    ]
];

$asCRUD = [[
    "href" => "crud/crud.php",
    "target" => "_self",
    "caption" => "Cadastros"
    ]
];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Modelo</title>
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
                <img src="media/images/bird.jpg" 
                     alt="Logo" 
                     style="width:40px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php
                //function buildDropdownMenu( string $sId, string $sTitle, array $asLinks ) : string{
                    echo buildDropdownMenu( "NavItem1", "Aulas", $aAulas );
                    echo buildDropdownMenu( "NavItem2", "Exercícios", $asExercicios );
                    echo buildDropdownMenu( "NavItem3", "Módulos", $asModules );
                    echo buildDropdownMenu( "NavItem4", "Deploy", $asDeploy );
                    echo buildDropdownMenu( "NavItem5", "Cadastros", $asCRUD );
                ?>
            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>