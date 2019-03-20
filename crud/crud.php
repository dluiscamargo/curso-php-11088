<?php
require_once "../utilities/menu-utilities.php";

$asProducts = [ [
        "href" => "products/select.php",
        "target" => "ifrNav",
        "caption" => "Consultar"
     ],[
        "href" => "products/insert.php",
        "target" => "ifrNav",
        "caption" => "Cadastrar"
     ] 
];

$asCustomers = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Cadastros"
     ]
];

$asSuppliers = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Cadastros"
     ] 
];

$asEmployees = [ [
        "href" => "#",
        "target" => "ifrNav",
        "caption" => "Cadastros"
     ] 
];

suppliers
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Crud PHP</title>
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
                       href="../index.php">Home</a>
                </li>
                <?php
                    echo buildDropdownMenu( "NavItem1", "products", $asProducts );
                    echo buildDropdownMenu( "NavItem2", "customers", $asCustomers );
                    echo buildDropdownMenu( "NavItem3", "suppliers", $asSuppliers );
                ?>
            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" name="ifrNav" style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>