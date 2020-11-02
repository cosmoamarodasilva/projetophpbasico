<!doctype html>
<html lang = "pt-br">
	<head>
	<meta charset = "UTF-8">
		<title> COSMO ELETRO </title>

	<!--CSS sendo acessado no arquivo esterno-->
	<link rel= "stylesheet" href="./css/estilo.css">

	</head>
	<body>
		<h1>BEM  VINDO AO COSMO ELETRO<br>ESCOLHA O SEU PRODUTO</h1> <br>

	<!--Menu-->
	<?php
		include_once("menu.html");
	?>
	<!--Final do menu-->

		<main>
	<!--Ofertas-->
		<h3 class="ofertadodia">OFERTA DO DIA</h3><br>

		<section id="imagem_oferta">
			<div>
				<img src="./imagens/video-game-console.jpg" width="200px">
				<p>Video Game com um console</p>
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