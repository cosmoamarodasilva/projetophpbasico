<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bancodedados = "cosmoeletro";

	//Criando conexão
	$conexão = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

	//verificando conexão

	if (!$conexão) {
		die ("A conexão ao BD falhou" . mysqli_connect_error());
	}

	mysqli_set_charset($conexão, "utf8mb4");

	if(isset($_POST['nome']) && isset($_POST['mensagem'])) {

		$nome= $_POST['nome'];
		$mensagem= $_POST['mensagem'];

		$sql="insert into contato (nome, mensagem) values('$nome', '$mensagem')";
		$result= $conexão->query($sql);

	}
	
?>


<!doctype html>
<html lang = "pt-br">
	<head>
	<meta charset = "UTF-8">
		<title>Fale com nosco</title>
		<link rel= "stylesheet" href="./css/estilo.css">
	</head>

	<body>
		<h1>COSMOELETRO</h1>

		<!--Inicio do menu-->
	<?php
		include_once("menu.html");
	?>
		<!--Final do menu-->

		<!--Inicio dos contatos-->
		<h2>fale conosco</h2>
		<hr>
		<table border = 0 width="100%" cellpadding="20%">
			<tr>
				<td width="50%" align="center">
				<img src="./imagens/whatsapp ico1.png" width="40px">
				(11) 99999-9999
				</td>

				<td width="50%" align="center">
				<img src="./imagens/ico email.png" width="40px">
				cosmoeletro.com
				</td>
			</tr>

		</table>
		<!--Fim do contato-->

		<!--Formulario de mensagem-->
		<form method="post" action="">
			<h4>Nome:</h4>
			<input type="text" name="nome" style="width: 300px;">
			<h4>Mensagem:</h4>
			<input type="text" name="mensagem" style="width: 300px;"><br><br>
			<input type="submit" value="Enviar">
		</form>


	</body>
	
    </html>