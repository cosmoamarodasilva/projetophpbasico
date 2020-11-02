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
?>

<!doctype html>
<html lang = "pt-br">
	<head>
	<meta charset = "UTF-8">
		<title> Produtos cosmoeletro </title>
		<!--CSS sendo acessado no arquivo esterno-->
		<link rel= "stylesheet" href="./css/estilo.css">
		<script src="scriptsfunções/scripts.js"></script>

	</head>

	<body>
		<h1>ESCOLHA SEU PRODUTO E PAGUE COM BITCOIN (BTC)</h1>

		<!--Inicio do menu-->
	<?php
		include_once("menu.html");
	?>
		<!--Final do menu-->

		<!--Inicio dos produtos e Conexão com o banco de dados-->
		<header>
		<h2>Produtos</h2>
		</header>

		<section class="categorias">
				<ul>
					<li class="li_cor" onclick="mostrar_todos('')">Todos produtos(11)</li>
					<li class="li_cor" onclick="mostrar_eletros('Eletrodomesticos')">Etetrodomésticos (2)</li>
					<li class="li_cor" onclick="mostrar_eletros('TVs')">Televisores (3)</li>
					<li class="li_cor" onclick="mostrar_eletros('Moveis')">Móveis (4)</li>
					<li class="li_cor" onclick="mostrar_eletros('Informatica')">Informática (2)</li>
				</ul>
		<br><br><br>
		</section>
		<section class="produtos">

			<?php
			
			//Inicio das buscas no banco de dados
			
				$sql = "select * from produtos";
				$resultado = $conexão->query($sql);

				if (!$conexão) {
					die ("A conexão ao BD falhou" . mysqli_connect_error());
				}
			
				mysqli_set_charset($conexão, "utf8mb4");
			
				if(isset($_POST['nome_cliente']) && isset($_POST['pedido_produto']) && isset($_POST['valoruni'])) {

					$nome= $_POST['nome_cliente'];
					$pedido= $_POST['pedido_produto'];
					$valoruni= $_POST['valoruni'];
					$sql= "insert into pedidos (nome_cliente, pedido_produto, valoruni) values('$nome', '$pedido', '$valoruni')";
					$envio= $conexão->query($sql);
			
				}
			
				if($resultado->num_rows > 0){
					while($linha=$resultado->fetch_assoc()){

			?>

				<div class="box_produtos" id="<?php echo $linha["produtos"]; ?>" style="display:inline-block">
					<img class="imagens" src="<?php echo $linha["imagem"]; ?>" width="400px" onclick="destaque(this)"> 
					<br>
					<p class="descrição"><?php echo $linha["descrição"]; ?></p>
					<hr>
					<p class="descrição"><strike><?php echo $linha["preços"]; ?></strike></p>
					<p class="preço"><?php echo $linha["preçofinal"]; ?></p>

					<form method="POST">

					<input type="submit" class="btncomprar" value="Comprar">
					<input type="hidden" name ="nome_cliente" value = "nome_cliente_default">
					<input type="hidden" name = "pedido_produto" value =<?php echo $linha["descrição"]; ?>>
					<input type="hidden" name = "valoruni" value = <?php echo $linha["preçofinal"]; ?>>

					</form> <br><br><br><br><br><br>

				</div>
			
			<?php
					}
				} else {
					echo "Nenhum produto cadastrado.";
				}	
			?>
			
		</section>
		<!--Fim dos produtos-->
		
		<footer id="rodape">
			<h3>Forma de pagamento somente com <strong>Bitcoin (BTC)</strong></h3>
			<img src = "./imagens/bitcoin.png" width="3%" alt="Pagamento somente com Bitcoin (BTC)">
		</footer>
			
    </body>

    </html>