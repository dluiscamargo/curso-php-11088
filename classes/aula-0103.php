<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
		<meta charset="utf-8" />
  	<meta name="viewport"
			content="width=device-width, initial-scale=1" />
		<title>Aula 28/Fev</title>
	</head>

	<body>
      <pre><?php
         /*
         VETOR (OU ARRAY) É UMA LISTA (OU SEQUÊNCIA) DE VARIÁVEIS
         */
         $aLink = [ ]; // CRIA UM ARRAY VAZIO

         $aLink[] = "teste0";
         $aLink[] = "teste1";
         $aLink[] = "teste2";
         $aLink[] = 127;
         $aLink[] = 254.57;
         $aLink[] = true;

         print_r( $aLink );

         $aTarget = [ ]; // array();

         $aTarget["_self"] = "abre um link na mesma janela (ou aba)";
         $aTarget["_blank"] = "abre um link em uma nova janela (ou aba)";

         print_r( $aTarget );

         // CRIA UM VETOR COM TRÊS ELEMENTOS
         $aLink_1 = [ "teste0", "teste1", "teste2" ];
         // ADICIONA MAIS TRÊS ELEMENTOS AO VETOR
         $aLink_1[] = 127;
         $aLink_1[] = 254.57;
         $aLink_1[] = true;

         print_r( $aLink_1 );

         $aTarget_1 = [ "_self" => "abre um link na mesma janela (ou aba)",
                        "_blank" => "abre um link em uma nova janela (ou aba)" ];

         print_r( $aTarget_1 );

         // EXEMPLOS
         $aDate = [ "dia" => 1, "mes" => "mar", "ano" => 2019 ];
         $aTime = [ "hora" => 20, "min" => 41, "seg" => 0 ];

         $aUser = [ "login" => "teste0", "email" =>"teste0@email.com" ];

         // ARRAY DE ARRAYS
         $aUsers = [];

         $aUsers[] = [ "login" => "teste0", "email" =>"teste0@email.com" ];
         $aUsers[] = [ "login" => "teste1", "email" =>"teste1@email.com" ];
         $aUsers[] = [ "login" => "teste2", "email" =>"teste2@email.com" ];
         $aUsers[] = [ "login" => "teste3", "email" =>"teste3@email.com" ];
         $aUsers[] = [ "login" => "teste4", "email" =>"teste4@email.com" ];

         print_r( $aUsers );

      ?>
   </pre>
	</body>
</html>
