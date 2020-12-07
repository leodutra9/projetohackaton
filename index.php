<?php

//o arquivo jsons contem o json a ser inserido
$dirJson = 'jsons.json';
          
        //checka se o arquivo existe       
        if(!file_exists($dirJson)){
            echo "Arquivo não existe, crie o arquivo, ou verifique o endereço!";
                                 
        }
          
//abre o arquivo   
$json_str = file_get_contents($dirJson);             
              
cadastrar($json_str);
function cadastrar($json_str){
    //recebe o json
    
    
    //decodifica o json
    $obj = json_decode($json_str);
    
    //conexao
    $servername = "localhost";
    $database = "hack";
    $username = "root";
    $password = "root";
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    echo "";
     
    //fim da conexao
    //insercao
    /*$sql = "insert into loja (codloja,razao,nome,natureza,porte,mei,endereco) 
	values($obj->codloja,'$obj->razao','$obj->nome','$obj->natureza','$obj->porte',$obj->mei,'$obj->endereco');";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/
	
	/*$sql = "select * from loja;";
	$res = $conn->query($sql);
	if($res->num_rows>0){
		$row = $res->fetch_assoc();{
			echo "id:". $row["codloja"]."-<p>-"."razao:". $row["razao"]."-<p>-"."nome:". $row["nome"]."-<p>-"."natureza:". $row["natureza"]."-<p>-"."porte:". $row["porte"]."-<p>-"."mei:". $row["mei"]."-<p>-"."endereco:". $row["endereco"]."-<p>-";
		}
	
	}else{
		echo "sem resultados";
	}*/
	
    //fim insercao
    mysqli_close($conn); //fechamento da conexao
	
	
}

?>

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
			<div class="formulario">
				<form action = "busca.php" method="get">
				<input type = "text" name="busca" class="form-control">
				<input type = "submit" name="envia" value="Pesquisar" class="btn-success">				
			</form>
		</div>
</div>
	</main>
	<footer class="footer">FOOTER</footer>


	</body>
</html>