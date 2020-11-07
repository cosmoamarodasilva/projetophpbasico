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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
		<title>Fale com nosco</title>
		<link rel= "stylesheet" href="./css/estilo.css">
	</head>

	<body>

		<div class="container-fluid">
		<h1>COSMOELETRO</h1>
		</div>

		<!--Inicio do menu-->
	<?php
		include_once("menu.php");
	?><br><br>
		<!--Final do menu-->

		<!--Inicio dos contatos-->
		<center><h2>fale conosco</h2></center>
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
			<div class="form-group">
				<label for="nome">Seu nome</label>
				<input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp"
				placeholder="Digite seu nome">
			</div>
			<div class="form-group">
				<label for="mensagem">Digite sua mensagem</label>
				<input type="text" name="mensagem" class="form-control" id="email" aria-describedby="emailHelp"
				placeholder="Digite sua mensagem">
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</body>
	
    </html>