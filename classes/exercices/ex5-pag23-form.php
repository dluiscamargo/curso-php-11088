<?php

$dtNow = date("d/m/Y");
echo "<p>$dtNow</p>";

$dtNow = date("Y-m-d");
echo "<p>$dtNow</p>";

if ( isset( $_REQUEST["dtNasc"] ) ){
   $dtNow = $_REQUEST["dtNasc"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
		<meta charset="utf-8" />
  	   <meta name="viewport"
			   content="width=device-width, initial-scale=1" />
		<title>Ex 5 Pag 23</title>
	</head>

	<body>
      <h4>Verificar se é maior de idade:</h4>
      <form id="formEx5Pag23"
            method="get"
            action="ex5-pag23-form.php">
         <label>Data de nascimento:</label><br />
         <input id="dtNasc"
                name="dtNasc"
                type="date"
                value="<?= $dtNow;?>" /><br />
         <input id="subVerify"
                type="submit"
                value="Verificar" />
      </form>
      <?php
      if ( isset( $_REQUEST["dtNasc"] ) ){
         // TODO
      }
      ?>
	</body>
</html>
