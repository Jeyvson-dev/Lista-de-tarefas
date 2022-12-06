<?php
require_once 'connect.php';

if(isset($_POST['excluir'])){

$id = $_GET['id'];

$delete = "
DELETE FROM 
    tb_tarefas 
WHERE
    id = '$id'
";

$conexao->query($delete);

echo 'Tarefa Deletada com sucesso, favor voltar a lista.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				App Lista Tarefas
			</a>
		</div>
	</nav>

    <div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Tem certeza que deseja excluir?</h4>
								<hr />

								<form method="POST">
									<div class="form-group">				
									</div>
									<button class="btn btn-success" type="submit" name = 'excluir'>SIM</button>  
                                    <p><a href="index.php">Voltar a lista</a></p>                               
								</form>
							</div>
						</div>
					</div>
				</div>
</body>
</html>