<?php
require_once("conexao/conecta.php");
$noticia = $_GET['noticia'];

$sql = "SELECT noticia.id, noticia.titulo, noticia.subtitulo, noticia.corpo, usuario.nome as 'autor', noticia.data_criado, noticia.data_modificado FROM noticia JOIN usuario ON usuario.id = noticia.autor AND noticia.id = $noticia";
$query = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($query);

$sqltag = "SELECT tag.nome as 'tag' FROM noticia JOIN tag_noticia JOIN tag ON noticia.id = tag_noticia.id_noticia AND tag.id = tag_noticia.id_tag WHERE noticia.id = $noticia";
$querytag = mysqli_query($conexao,$sqltag);
$rowtag = mysqli_fetch_assoc($querytag);

if ($row == null)
{
	$row['titulo'] = "Notícia não encontrada!";
}

require_once("conexao/conecta.php");
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
        <a class="nav-link" href="#">NOTÍCIAS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">GAMES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SOBRE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php">CONTATO</a>
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
				<header id="titulonot" class="text-center"><h1><?php echo $row['titulo'] ?></h1></header>
				<header id="subnot" class="text-justify"><p><h4><?php echo $row['subtitulo'] ?></h4></p></header>
				<article id="corponot" class="p-2 text-justify">
					<figure id="imgnot">
						<img src="images/destaque/imgdestaque_<?php echo $row['id'] ?>.jpg" alt="imagem" class="img-fluid">
					</figure>
					<p><?php echo $row['corpo'] ?></p>
				</article>
				<footer id="rodapenot"><p>Autor: <?php echo $row['autor'] ?></p>
				<p>
					Tags: 
					<?php 
					$y=0; 
					do
					{ 
						if($y>0)
						{ 
							echo ", " . $rowtag['tag']; 
						}
						else echo $rowtag['tag'];
						$y++;
					}
					while($rowtag = mysqli_fetch_assoc($querytag)); 
					?>
					</p>
			</footer>
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
					<img src="images/jogo/jogo_<?php echo $dataside[0]['id'] ?>.jpg" alt="imagem" width="120px" class="media m-1 float-left mr-2">
						<p class="mt-2"><b><?php echo $dataside[0]['titulo'] ?></b></p>
						<?php echo $dataside[0]['descricao'] ?>
				</li>
			</div></a>
            <a href="jogo.php?jogo=<?php echo $dataside[1]['id'] ?>"><div class="float-left linha1 clicavel w-100">
				<li class="text-left">
					<img src="images/jogo/jogo_<?php echo $dataside[1]['id'] ?>.jpg" alt="imagem" width="120px" class="media m-1 float-left mr-2">
						<p class="mt-2"><b><?php echo $dataside[1]['titulo'] ?></b></p>
						<?php echo $dataside[1]['descricao'] ?>
				</li>
			</div></a>
            <a href="jogo.php?jogo=<?php echo $dataside[2]['id'] ?>"><div class="float-left linha1 clicavel border-bottom-0 w-100">
				<li style="border-bottom: 0px" class="text-left">
					<img src="images/jogo/jogo_<?php echo $dataside[2]['id'] ?>.jpg" alt="imagem" width="120px" class="media m-1 float-left mr-2">
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
