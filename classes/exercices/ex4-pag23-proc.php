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
      <?php
         print_r( $_REQUEST );
         // ATRIBUIÇÃO
         // <-    EM PHP É O =
         $nYear = $_REQUEST["nYear"];

         // ==  (IGUAL A)     - TESTA APENAS O VALOR
         // === (IDENTICO A)  - TESTA O VALOR E O TIPO
         // !=
         // !==
         //
         // 1  == "1"   TRUE
         // 1 === "1"   FALSE

         // OPERAÇÃO MOD REPRESENTADA POR %
         // TEM COMO RESULTADO O RESTO DA DIVISÃO
         // OS OUTROS OPERADORES ARITMÉTICOS SÃO:
         // +  *  -  /

         // OPERADOR LÓGICO E (AND), REPRESENTADO POR &&
         // OS OUTROS OPERADORES LÓGICOS SÃO:
         // OU (OR)     ||
         // NÃO (NOT)   !

         // ocorrendo a cada quatro anos
         // (exceto anos múltiplos de 100 que
         // não são múltiplos de 400).
         if ( $nYear % 4 !== 0 ) /*THEN*/{
         // SE CONDIÇÃO ENTÃO
            echo "<h5>$nYear NÃO É BISSEXTO!</h5>";
         }
         else{
         // SENÃO
            // SE O ANO É MULTIPLO DE 100 ( $nYear % 100 === 0 )
            // MAS NÃO É MULTIPLO DE 400 ( $nYear % 400 !== 0 )
            // ENTÃO O ANO NÃO É BISSEXTO
            if ( ( $nYear % 100 === 0 ) && ( $nYear % 400 !== 0 ) ){
               echo "<h5>O ano  $nYear não é bissexto </h5>";
            }
            else{
               echo "<h5>O ano $nYear é bissexto </h5>";
            }
         }
         // FIMSE
         /*

         */
      ?>
	</body>
</html>
