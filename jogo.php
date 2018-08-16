<?php
require_once("conexao/conecta.php");
$jogo = $_GET['jogo'];

$sql = "SELECT jogo.id, jogo.titulo, jogo.descricao, date_format(lancamento, '%d/%m/%Y') as 'lancamento', jogo.distribuidora, jogo.dev, jogo.data_criado FROM jogo WHERE jogo.id = $jogo";
$query = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($query);

if ($row == null)
{
	$row['titulo'] = "Jogo não encontrado!";
}

$sqlgenero = "SELECT genero.nome FROM genero JOIN genero_jogo JOIN jogo ON jogo.id = genero_jogo.id_jogo AND genero.id = genero_jogo.id_genero WHERE jogo.id = $jogo";
$querygenero = mysqli_query($conexao,$sqlgenero);
$rowgenero = mysqli_fetch_assoc($querygenero);
$countgenero = mysqli_num_rows($querygenero);

$sqlplat = "SELECT plataforma.nome FROM plataforma JOIN plataforma_jogo JOIN jogo ON jogo.id = plataforma_jogo.id_jogo AND plataforma.id = plataforma_jogo.id_plataforma WHERE jogo.id = $jogo";
$queryplat = mysqli_query($conexao,$sqlplat);
$rowplat = mysqli_fetch_assoc($queryplat);
$countplat = mysqli_num_rows($queryplat);

$sqlside = "SELECT jogo.id, jogo.titulo, jogo.descricao FROM jogo ORDER BY RAND() LIMIT 3";
$queryside = mysqli_query($conexao,$sqlside);
$dataside = array();
$i=0;
while($rowside = mysqli_fetch_assoc($queryside))
{
    $dataside[] = $rowside;
	if(strlen($dataside[$i]['descricao'])>=47)
	{
		$x=substr($dataside[$i]['descricao'],0,47) . "...";
		$dataside[$i]['descricao'] = $x;
	}
	$i++;
}
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0" style="padding: 0px">
	<div class="container">
	
	  <a class="navbar-brand p-0 mb-0 mt-0" href="#"><img src="images/logo.png" alt="logo" height='48px' class="m-0 p-0"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">HOME</a>
	      </li>
			      <li class="nav-item">
        <a class="nav-link" href="#">NOTÍCIAS</a>
      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#">GAMES</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">SOBRE</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">CONTATO</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</div>

</nav>
 
	<section class="container">
	
		<section class="col-xl-9 col-lg-12 float-left mt-3 mb-3 col-sm-12">
			<main>
				<header id="titulonot" class="text-left"><p><h1><?php echo $row['titulo'] ?></h1></p></header>
				<article id="corponot" class="p-2 text-justify">
					<div>					
						<table class="col-md-5 col-sm-8 col-xs-12 float-right border p-2 ml-4" cellpadding="3" border="0">

<tbody>

<tr>
<td colspan="2" style="text-align:center;"><img src="images/jogo/jogo_<?php echo $row['id'] ?>.jpg" alt="imagem" class="img-fluid"><br>
</td></tr>
 
<tr>
<td scope="row" style="vertical-align: top; text-align: left; text-align: left; font-weight:bold;">Desenvolvedora
</td>
<td style="vertical-align: top; text-align: left;"><?php echo $row['dev'] ?>
</td></tr>
 
<tr>
<td scope="row" style="vertical-align: top; text-align: left; text-align: left; font-weight:bold;">Distribuidora
</td>
<td style="vertical-align: top; text-align: left;"><?php echo $row['distribuidora'] ?>
</td></tr>
 
	<tr>
<td scope="row" style="vertical-align: top; text-align: left; text-align: left; font-weight:bold;">Data de lançamento
</td>
<td style="vertical-align: top; text-align: left;"><?php echo $row['lancamento'] ?>
</td></tr>

	
<tr>
<td scope="row" style="vertical-align: top; text-align: left; text-align: left; font-weight:bold;">Plataforma(s)
</td>
<td style="vertical-align: top; text-align: left;"><?php
	do {
	echo $rowplat['nome'] . ($countplat>1 ? "<br>" : null);
	}
	while($rowplat = mysqli_fetch_assoc($queryplat));
	?>
</td></tr>
 
<tr>
<td scope="row" style="vertical-align: top; text-align: left; text-align: left; font-weight:bold;">Gênero(s)
</td>
<td style="vertical-align: top; text-align: left;"><?php
	do {
	echo $rowgenero['nome'] . ($countgenero>1 ? "<br>" : null);
	}
	while($rowgenero = mysqli_fetch_assoc($querygenero));
	?>
</td></tr>
 
</tbody>
</table>						
					</div>
					<?php echo $row['descricao'] ?>
				</article>
			</main>
		</section> 
		
		<div class="d-none d-xl-block">
	<aside class="col-3 float-right mt-4 ml-0 mr-0 p-0">
        <img src="images/placeholder2.png" alt="placeholder" class="media img-fluid">
        </aside>
	<aside id="content_pool" class="col-3 float-right mt-3 votacao">
        <h4 class="text-center">Melhor do Mês!</h4>
        <ul style="list-style: none">
            <li><input type="radio" name="voto1">Teste</li>
            <li><input type="radio" name="voto2">Teste</li>
            <li><input type="radio" name="voto3">Teste</li>
            <li><input type="radio" name="voto4">Teste</li>
        </ul>
	</aside>
	<aside class="col-3 float-right mt-3 gameright p-0">
        <ul  style="list-style: none;padding-left: 0px;">
            <a href="jogo.php?jogo=<?php echo $dataside[0]['id'] ?>"><div class="float-left linha1 clicavel w-100">
				<li class="text-left">
					<img src="images/placeholder2.png" alt="placeholder" width="120px" class="media m-1 mr-2 float-left">
						<p class="mt-2"><b><?php echo $dataside[0]['titulo'] ?></b></p>
						<?php echo $dataside[0]['descricao'] ?>
				</li>
			</div></a>
            <a href="jogo.php?jogo=<?php echo $dataside[1]['id'] ?>"><div class="float-left linha1 clicavel w-100">
				<li class="text-left">
					<img src="images/placeholder2.png" alt="placeholder" width="120px" class="media m-1 mr-2 float-left">
						<p class="mt-2"><b><?php echo $dataside[1]['titulo'] ?></b></p>
						<?php echo $dataside[1]['descricao'] ?>
				</li>
			</div></a>
            <a href="jogo.php?jogo=<?php echo $dataside[2]['id'] ?>"><div class="float-left linha1 clicavel border-bottom-0 w-100">
				<li style="border-bottom: 0px" class="text-left">
					<img src="images/placeholder2.png" alt="placeholder" width="120px" class="media m-1 float-left mr-2">
						<p class="mt-2"><b><?php echo $dataside[2]['titulo'] ?></b></p>
						<?php echo $dataside[2]['descricao'] ?>
				</li>
			</div></a>
        </ul>
	</aside>
        </div>
    </section>
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
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
