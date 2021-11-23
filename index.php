<?php 
	require_once './src/server/_conexao.php';
	$stmt = $conn->query("SELECT * FROM musicas");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/index.css">
 	<link rel="stylesheet" href="./assets/css/index_nav.css">
	 <style>

		.mr-auto {
			flex: 1;
			display: flex;
			justify-content: flex-end;
			align-items: baseline !important;
		}
		
	 </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<div class="container-fluid">
		<img src="./assets/img/logo.png">
		<ul class="navbar-nav ">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Fale conosco</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./src/entrar.php">Entrar</a>
			</li>
		</ul>
	</div>
</nav>
	<div class="container">
		<?php while ($row = $stmt->fetch()): ?>
			<div class="mt-5 faixa" id="faixa" data-id="<?=$row["id"]?>">
				<div class="row">
					<div class="col-5">
						<div class="image text-right">
							<img src="./src/server/<?=$row["img"]?>" id="pod-photo">
						</div>
					</div>
					<div class="col-6">
						<div class="flex-container">
							<h1 id="pod-title"><?=$row["nome"]?></h1>
							<p id="pod-desc"><?=$row["descricao"]?></p>
							<div class="audio-box">
								<audio preload="metadata" controls class="mr-3">
									<source src="./src/server/<?=$row["mp3"]?>" type="audio/mpeg">
								</audio>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	</div>
</body>
</html>