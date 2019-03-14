<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Aula 27/Fev - proc</title>
	</head>
	<body>
	
		<div>
		</div>
		
		<br />
		
	<?php
		echo "<h4>Vari&aacute;veis em PHP</h4>";
		echo "<p>Em PHP tudo o que começa com $ é variável.</p>";
		echo "por exemplo: &#x24;sName cria uma variável chamada sName";
				
		$sName = "PHP 11088";
		
		echo "<hr />";
		echo "<div>";
		echo $sName;
		echo "<br />";
		echo "Curso e turma: $sName";
		echo "</div>";
		
		echo "<br /><br />";
		echo "<p>Nomenclatura: ao nomearmos uma variável
		devemos tomar alguns cuidados:</p>";
		echo "<p>Em primeiro lugar o nome deve ser
		funcional; ou seja, deve indicar a função ou
		propósito da variável no código</p>";
		echo "<p>Toda vez que criamos uma variável,
		nós a criamos com um propósito específico e
		para armazenar um tipo de dado pré-determinado</p>";
		echo "<p>Por causa disso, quando dou um nome a uma variável é
		interessante colocar no nome um prefixo identificando
		o tipo do dado que deve ser armazenado nela.</p>";
		
		echo "<h4>SUPERGLOBAIS</h4>";
		echo "<p>O PHP possui algumas variáveis especiais chamadas
		de SUPERGLOBAIS.</p>";
		echo "<p>Os nomes destas variáveis sempre começam com
		&#x24;_ seguido do nome da variável em letras maiúsculas.</p>";
		
		echo "<p>Por exemplo &#x24;_POST ou &#x24;_GET</p>";
		
		echo "<pre>";
		print_r( $_GET );
		echo "</pre>";
		
	
	
	?>	
	
	</body>
</html>