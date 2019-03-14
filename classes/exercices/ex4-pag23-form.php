<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
		<meta charset="utf-8" />
  	<meta name="viewport"
			content="width=device-width, initial-scale=1" />
		<title>Ex 4 Pag 23</title>
	</head>

	<body>
      <h4>Verificar se é ano bissexto:</h4>
      <form id="formEx4Pag23"
            method="get"
            action="ex4-pag23-proc.php">
         <label>Ano:</label><br />
         <input id="nYear"
                name="nYear"
                type="number"
                min="1900"
                max="2050"
                value="2019" /><br />
         <input id="subVerify"
                type="submit"
                value="Verificar" />
      </form>
	</body>
</html>
