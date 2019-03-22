<?php
require_once "../../core/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>New Users</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:100%;height:100%">
        <div id="divContent">
            <form action="insert.php" method="POST">
                <h5>CREATEAT A NEW USER</h5>
              
                <div class="form-group">
                  <label for="txtLogin">Login:</label>
                  <input type="text" class="form-control" id="txtLogin" name="txtLogin" required >
                </div>
                
                <div class="form-group">
                  <label for="emlEmail">Email address:</label>
                  <input type="emlEmail" class="form-control" id="emlEmail" name="emlEmail" required >
                </div>
                
                <div class="form-group">
                  <label for="pwdSecret">Password:</label>
                  <input type="pwdSecret" class="form-control" id="pwdSecret" name="pwdSecret" required >
                </div>
                
                <div class="form-group">
                  <label for="pwdConfSecret">Confirm  Password:</label>
                  <input type="pwdConfSecret" class="form-control" id="pwdConfSecret" required >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
            <?php
                if( isset( $_POST["txtLogin"] )){
                    
                    $usrNewUser = new Users();
                    $usrNewUser->insertNewUser( $_POST["txtLogin"],
                                                $_POST["emlEmail"],
                                                $_POST["pwdSecret"] );
                }
            ?>
        </div>
    </body>
</html>

