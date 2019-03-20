<?php
require_once '../../core/classDatabase.php';

$dbData = new Database();
$dbData->starDatabase();
$sStatus = $dbData->status();
//guia de referencia
$dbData->select( "products", [ "ProductID",
                               "ProductName",
                               "UnitsInStock"], [] );

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Select Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                //TODO:
                echo"<h5>Número de produtos: {$dbData->recordCount()}</h5>";
                echo'<pre>';
                //getRecord_object, getRecord_assoc, getRecord_array
                while ($asRecord = $dbData->getRecord_object()) {
                    print_r($asRecord);
                }
                echo'</pre>';
            ?>
        </div>
    </body>
</html>