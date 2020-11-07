<!doctype html>
<html lang = "pt-br">
	<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
		<title> COSMO ELETRO </title>

	<!--CSS sendo acessado no arquivo esterno-->
	<link rel= "stylesheet" href="./css/estilo.css">

	</head>
	<body>

		<div class="container-fluid">
		<h1>BEM  VINDO AO COSMO ELETRO<br>ESCOLHA O SEU PRODUTO</h1> <br>
		</div>
	<!--Menu-->
	<?php
		include_once("menu.php");
	?><br><br>
	<!--Final do menu-->

		<main>
	<!--Ofertas-->
		<h3 class="ofertadodia">OFERTA DO DIA</h3><br><br><br>

		<section id="imagem_oferta">
			<div >
				<img src="./imagens/video-game-console.jpg" width="200px">
				<div class="container"><p>Video Game com um console</p></div>
			</div>

		</section>
		<br>
		
	<!--Fim da oferta-->
		<hr>

		</main>
		
		<footer id="rodape">
			<h3>Forma de pagamento somente com <strong>Bitcoin (BTC)</strong></h3>
			<img src = "./imagens/bitcoin.png" width="3%" alt="Pagamento somente com Bitcoin (BTC)">
		</footer>
		
	</body>


</html>