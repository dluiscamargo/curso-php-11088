<?php
$sSessionName = "session-".time();
session_start();
$_SESSION["session-name"]= $sSessionName;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Session 1</title>
        <meta charset="utf-8" />
        <meta name="viewport"  content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:
                echo "<h5>PHP Sesssion: $sSessionName </h5>";
            ?>
        </div>
    </body>
</html>

