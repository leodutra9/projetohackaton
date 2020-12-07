

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detalhes</title>

	<link rel="stylesheet" href="css/estilo.css" >
    
</head><!--/head-->


<body>

	<header class="header">
		<div class="header__logo">
			HEADER
		</div>
	</header>
	<aside class="aside-r">01</aside>
	<aside class="aside-l">02</aside>
	<main class="main">
		<div class="container">
			<?php 
				$envia = $_GET['envia'];
				$busca = $_GET['busca'];	
				include 'conexao.php';									
				$sql3 = "SELECT loja.*,item.*,estoque.* FROM estoque as estoque inner join loja on estoque.codloja=loja.codloja inner join item on item.coditem=estoque.coditem where item.descricao like '%".$busca."%';";
				$res3 = conecta()->query($sql3);
				if($res3->num_rows>0){
					$row3 = $res3->fetch_assoc();{	
						echo "
							<div class='card'>
								<div class='card__header'>
									Você digitou: {$busca} 
								</div>
								<div class='card__content'>
									<p> Loja: {$row3['nome']}</p> 
									<p> Id: {$row3['coditem']}</p>
									<p> Endereço: {$row3['endereco']}</p>
									<p> Fornecedor: {$row3['fornecedor']}</p>
									<p> Descrição: {$row3['descricao']}</p>
									<p> Preço: {$row3['precovenda']}</p>
								</div>
							</div>
						";
					}
				}							
				else{
					echo "sem resultados";
				}													
			?>
			
			
			
			
		</div>
	</main>
	<footer class="footer">FOOTER</footer>


	</body>
</html>