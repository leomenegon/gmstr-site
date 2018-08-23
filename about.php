<?php
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
        <a class="nav-link" href="busca.php">NOTÍCIAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jogos.php">GAMES</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">SOBRE<span class="sr-only">(current)</span></a>
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
				<header id="titulonot" class="text-center"><h1>Sobre</h1></header>
				<article id="corponot" class="p-2 text-justify">
					<figure id="imgnot">
						<img src="images/logo.png" alt="imagem" class="img-fluid">
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla vitae elit non consequat. Nullam iaculis risus vel vehicula aliquet. Fusce ex odio, viverra non consequat vitae, ultricies eu nulla. Proin eros erat, molestie id erat interdum, lobortis ultricies justo. Mauris ut congue arcu. Ut magna mi, dignissim nec cursus vitae, varius ac leo. Mauris viverra convallis pulvinar. In nibh lacus, venenatis at nibh eget, tempus fringilla ante. Sed varius quam et ullamcorper auctor. Sed fermentum sit amet eros ut hendrerit.</p>
					
					<p>Vivamus nec libero semper, mattis orci eu, condimentum diam. Fusce quam augue, facilisis at egestas at, rhoncus ac risus. Aenean non ipsum ullamcorper, laoreet augue et, sodales quam. Proin orci odio, suscipit sed massa vitae, aliquam mattis tellus. Sed quis lorem at justo suscipit vehicula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum sodales, nibh eget maximus rutrum, orci ipsum semper erat, suscipit sollicitudin sapien enim ut massa. Vestibulum felis velit, hendrerit a volutpat id, tincidunt quis mi. Nulla facilisi. Nam quis consectetur diam, sollicitudin aliquam ex.</p>
					
					<img src="images/banner_missao.png" alt="mvv" class="img-fluid">
					
					<p>Fusce metus est, iaculis vitae semper vitae, condimentum et mauris. Curabitur sed ornare diam, eget vestibulum dui. Integer dapibus aliquam sem vitae posuere. Donec vel tristique mi, sed pretium neque. Nullam pulvinar felis nec neque blandit, a pharetra justo consectetur. Etiam fringilla diam non mattis tincidunt. Donec ac leo mattis, varius dolor eu, eleifend velit. Curabitur auctor tincidunt viverra. Etiam malesuada odio eu ex laoreet pellentesque.</p>
					
					<p>Maecenas commodo venenatis diam et dapibus. Fusce at tincidunt libero. Integer eget maximus sem. Fusce faucibus cursus enim, eu tempor neque tincidunt a. Maecenas congue egestas enim, quis ultrices lacus semper vitae. Maecenas rutrum id turpis in accumsan. Donec egestas enim augue, eu congue leo maximus vel. In volutpat nulla id orci placerat elementum. Donec laoreet est nisi, eu maximus est blandit sit amet. Proin aliquam sodales suscipit. Morbi rhoncus nulla eu hendrerit interdum. Nam et eros pretium, placerat metus eget, aliquam mi. Aenean nec fermentum risus. Curabitur quis porttitor felis, vestibulum convallis mi. Praesent dapibus purus non laoreet aliquam. Praesent sit amet ipsum dapibus sapien porta tempus vel a lorem.</p>
					
					<p>Vivamus non lobortis quam, id pretium nisi. Sed vitae metus ligula. Fusce consequat nulla eros, quis efficitur nisi porta quis. Mauris id tincidunt dolor, id iaculis diam. Etiam id neque sapien. Vestibulum id ultricies felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc nec risus sed turpis aliquam vulputate. Vivamus rutrum dapibus erat, at malesuada ipsum.</p>
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
