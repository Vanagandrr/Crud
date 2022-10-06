<?php include_once 'includes/header.inc.php';?>
<?php include_once 'includes/menu.inc.php';?>
<?php include_once 'bdsql/conexao.php';?>

<?php 

	$querySelect = $link->query("select 'id' from cadastro");
	$id = $querySelect->fetch_assoc();
	if($id == false): ?>

<div class="row">
    <div class="col s4 offset-s4 card">
      <div class="card">
        <div class="card-image">
          <img src="https://www.chefbob.com.br/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/05/2021-05-12-como-deixar-os-gatos-mais-tranquilos.jpg.webp" alt="imagens">
        </div>
        <div class="card-content">
          <p>O banco de dados esta vazio, cadastre alguém para realiazar consultas</p>
        </div>
        <div class="card-action">
            <a href="index.php"><i class="material-icons left">arrow_back</i><font size="4,5">  Voltar para página principal</font></a>
        </div>
      </div>
    </div>
  </div>



	<?php else: ?>

	<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>

			<table class="striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Telefône</th>
						<th>CPF</th>
					</tr>
				</thead>
			<tbody>
			</html>
	<?php endif; ?>
			

				<?php include_once 'bdsql/read.php';?>
			</tbody>
		</table>
	</div>
</div>

<?php include_once 'includes/footer.inc.php'?>