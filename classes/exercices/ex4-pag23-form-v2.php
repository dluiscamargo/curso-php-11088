<?php

// include
// include_once
// require
require_once( "../../utilities/time-date-utilities.php" );

/*
   2019  == "2019"      TRUE
   2019 === "2019"      FALSE
*/
if ( 0 ){
   echo "<p><sup>(usando a função date)</sup></p>";
   $nYear = date( "Y" );
}
else{
   echo "<p><sup>(usando a função getdate)</sup></p>";
   $aDate = getdate();
   $nYear = $aDate[ "year" ];
}

if ( isset( $_REQUEST["nYear"] ) ){
   $nYear = $_REQUEST["nYear"];
}

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
            action="ex4-pag23-form-v2.php">
         <label>Ano:</label><br />
         <input id="nYear"
                name="nYear"
                type="number"
                min="1900"
                max="2050"
                value="<?= $nYear;?>"
                required /><br />
         <input id="subVerify"
                type="submit"
                value="Verificar" />
      </form>
      <?php
         // verificar se é ano bissexto ou não
         if ( isset( $_REQUEST["nYear"] ) ){
            $nYear = $_REQUEST["nYear"];
            if ( isLeapYear( $nYear ) ){
               echo "<h5>$nYear é ano bissexto</h5>";
            }
            else{
               echo "<h5>$nYear não é ano bissexto</h5>";
            }
         }
      ?>
	</body>
</html>
