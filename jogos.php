<?php
require_once("conexao/conecta.php");

if($_GET['j']!==null)
{
$like = " jogo.titulo or jogo.descricao LIKE '%" . $_GET['s'] . "%'  AND";
}
else $like = null;

$sqlnormal = "SELECT jogo.id, jogo.titulo FROM jogo WHERE" . $like . " jogo.status = 1 ORDER BY id DESC LIMIT 9";
$querynormal = mysqli_query($conexao,$sqlnormal);
$rownormal = mysqli_fetch_assoc($querynormal);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GameStore - Games, Notícias, Reviews e Mais!</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>    

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">

  <a class="navbar-brand p-0 mb-0 mt-0" href="#"><img src="images/logo.png" alt="logo" height='48px' class="m-0 p-0"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="busca.php">NOTÍCIAS</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="#">GAMES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">SOBRE</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contato.php">CONTATO</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s" id="s">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</div>

</nav>
				
	<section class="container">
	
		<fieldset class="col-xl-9 col-lg-12 float-left mt-3 mb-3 col-sm-12 ml-0 mr-0 pl-0 pr-4">
			<legend id="recentes" style="margin-bottom: 0; width: 6.4em">RESULTADOS</legend> <div class="linha"></div>
            
            <?php do{ ?>
				<article class="float-left col-2 clearfix p-1 ml-0 mr-0 mb-1" style="border-top: 0px; max-width: 135px; height: 200px;">
					            <a href="jogo.php?jogo=<?php echo $rownormal['id'] ?>">

					<table style="max-width: 135px; height: 200px;">
						<tbody class="clicavel p-1" style="border: 1px solid #dee2e6; border-radius: 12px; max-width: 135px; height: 200px;">
							<tr>
								<td>
									<img src="images/jogo/jogo_<?php echo $rownormal['id'] ?>.jpg" alt="<?php echo $rownormal['titulo'] ?>" class="img-fluid">
								</td>
							</tr>
							<tr style="position: absolute; bottom: 0; word-wrap: break-word;">
								<td class="font-weight-bold" style=" word-wrap: break-word; max-width: 120px;">
									<?php echo $rownormal['titulo'] ?>
								</td>
							</tr>
						</tbody>
					</table>
												</a>

            	</article>
			<?php } while($rownormal = mysqli_fetch_assoc($querynormal)); ?>

		</fieldset> 		
		<div class="d-none d-xl-block">
			
			
			<aside class="container col-3 m-0 p-0 float-right">
	<aside class=" float-right mt-3 mr-0 ml-0 p-0 text-center">
        <img src="images/placeholder2.png" alt="placeholder" class="media img-fluid m-auto">
        </aside>
				<div class="clearfix"></div>
	<aside id="content_pool" class="mt-3 mr-0 ml-0 votacao">
        <h4 class="text-center">Melhor do Mês!</h4>
        <ul style="list-style: none">
            <li><input type="radio" name="voto1">Teste</li>
            <li><input type="radio" name="voto2">Teste</li>
            <li><input type="radio" name="voto3">Teste</li>
            <li><input type="radio" name="voto4">Teste</li>
			<li><input type="submit"></li>
        </ul>
	</aside>

        </div>
    </section>
	<div style="position: absolute; bottom: 0; width: 100%">
	<footer id="faixa_bottom" class="mt-4">
		<div class="container text-center">
        <ul class="col-12 navbar ulbt mt-3 p-0 text-center" style="list-style: none">
            <li><a href="https://facebook.com" target="_blank"><img src="images/face1.png" width="16px" class="float-left media">&nbsp; facebook.com/GameStore</a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="images/twitter1.png" width="16px" class="float-left media">&nbsp;twitter.com/GameStore</a></li>
            <li class="text-center"><a href="" target="_blank">Políticas de Privacidade</a></li>
            <li><a href="" target="_blank">Termos de Uso</a></li>
        </ul></div>
	</footer>
	<footer class="col-12 float-left text-center copybt">
        &copy; 2018 Leonardo Menegon. Todos os direitos reservados.
	</footer></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
