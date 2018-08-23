<?php
require_once("conexao/conecta.php");
$sqlside = "SELECT jogo.id, jogo.titulo, jogo.descricao FROM jogo ORDER BY RAND() LIMIT 3";
$queryside = mysqli_query($conexao,$sqlside);
$dataside = array();
$i=0;
while($rowside = mysqli_fetch_assoc($queryside))
{
    $dataside[] = $rowside;
	if(strlen($dataside[$i]['descricao'])>=70)
	{
		$x=substr($dataside[$i]['descricao'],0,70) . "...";
		$dataside[$i]['descricao'] = $x;
	}
	$i++;
}

if($_GET['s']!==null)
{
$like = " noticia.titulo or noticia.subtitulo or noticia.corpo LIKE '%" . $_GET['s'] . "%'  AND";
}
else $like = null;

$_GET['p'] !== null || $_GET['p'] > 0 ? $off = $_GET['p'] * 8 - 8 : $off = 0;

$sqlnormal = "SELECT * FROM noticia WHERE" . $like . " noticia.status = 1 ORDER BY id DESC LIMIT 8 OFFSET $off";
$querynormal = mysqli_query($conexao,$sqlnormal);
$rownormal = mysqli_fetch_assoc($querynormal);
$countnormal =ceil(mysqli_num_rows(mysqli_query($conexao,"SELECT id FROM noticia"))/8);
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
<!-- 	<header id="faixa_top">
		<div class="container">
            <div class="col-12">
                <div id="logo"><img src="images/logo.png" alt="Logo" rel="GameStore" height="56px" /></div>
		<nav id="menu" class="navbar navbar-dark">				
				    <ul class="btmenu">					
					   <li class="nav-item"><a href="#">HOME</a></li>
					   <li><a href="#">GAMES</a></li>
					   <li><a href="#">GALERIA</a></li>
					   <li><a href="#">SOBRE</a></li>
					   <li><a href="#">CONTATO</a></li>					
				    </ul>		
 	</nav>
	</div>

		  </div>
		</header> -->
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
      <li class="nav-item active">
        <a class="nav-link" href="#">NOTÍCIAS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jogos.php">GAMES</a>
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
            <a href="noticia.php?noticia=<?php echo $rownormal['id'] ?>"><article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/destaque/imgdestaque_<?php echo $rownormal['id'] ?>.jpg" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-left txtrec pr-2">
                    <h5 class="text-left mt-2"><?php echo $rownormal['titulo'] ?></h5>
                    <p class="media-body">
                        <?php echo $rownormal['subtitulo'] ?>
                    </p>
                </div>
            </article></a>
			<?php } while($rownormal = mysqli_fetch_assoc($querynormal)); ?>
			<p class="text-center font-weight-bold">
				<?php for($z = 1; $z <= $countnormal; $z++){ ?>
						
				<a href="busca.php?p=<?php echo $z ?>" class="pagina <?php if($z==$_GET['p']) echo "ativo" ?>">&emsp;<?php echo $z ?>&emsp;</a>
				
				<?php } ?>
			</p>
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
	<aside class=" float-right mt-3  mr-0 ml-0 gameright p-0">
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
		</aside>
	<footer id="faixa_bottom" class="mt-4  mr-0 ml-0">
		<div class="container"><div class=""></div>
        <ul class="col-12 navbar ulbt mt-3 p-0 text-center">
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
