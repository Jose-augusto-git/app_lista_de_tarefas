
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="public/index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="public/nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="public/todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col">
					<div class="container" >
					<div class="card mb-3">

						<div class="card">
						<div class="card-body">
							<h4 class="card-title text-center">App Lista de Tarefas</h4>
						</div>
						<img class="card-img-bottom" src="img/146.jpg" alt="Imagem de capa do card">
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../js/editar.js"></script>
	</body>
</html>