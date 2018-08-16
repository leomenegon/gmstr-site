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
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
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
	
	
		<div class="container">
	<!-- Fazer caminho do diretório aqui (notícias>exemplo) -->
			<section class="col-lg-7 float-left mt-3 col-sm-12 p-0">
				<figure class="img-thumbnail clicavel p-0">
                    <img src="images/news/gow0.png" class="img-fluid p-0">
					<figcaption class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum dolor sit amet, consectetur adipiscing elit.ipsum dolor sit amet, consectetur adipiscing elit.ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>
				</figure>
			</section>
			<section class="col-lg-5 float-right mt-3 col-sm-12 pr-0 pl-1">
				<figure class="col-md-6 img-thumbnail float-right gapmed p-0 clicavel"> <div class="img-fluid"><img src="images/news/detroit.jpg" class="img-fluid"> <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>  </div> </figure>
				<figure class="col-md-6 img-thumbnail float-right gapmed p-0 clicavel"> <div class="img-fluid"><img src="images/news/fort.jpg" class="img-fluid"> <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>  </div> </figure>
				<figure class="col-md-6 img-thumbnail float-right m-0 p-0 clicavel"> <div class="img-fluid"><img src="images/news/lol.jpg" class="img-fluid"> <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>  </div> </figure>
				<figure class="col-md-6 img-thumbnail float-right m-0 p-0 clicavel"> <div class="img-fluid"><img src="images/news/blanka.jpg" class="img-fluid"> <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>  </div> </figure>
				
				<div class="col-md-12 float-left text-center vermais p-1">
					<a href="#">VER MAIS</a>
				</div>
			</section>
				<div class="col-md-12 float-left text-center vermais2 p-1">
					<a href="#">VER MAIS</a>
				</div>

		</div>  
	<section class="container">
	
		<fieldset class="col-xl-7 col-lg-12 float-left mt-3 mb-3 col-sm-12">
			<legend id="recentes" style="margin-bottom: 0">MAIS RECENTES</legend> <div class="linha"></div>
            
            
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>
            <article class="recente float-left clicavel" style="border-top: 0px">
                <figure class="imgrec float-left m-2">
                    <img src="images/placeholder.png" alt="Placeholder" class="media float-left img-fluid">
                </figure>
                <div class="float-right txtrec pr-2">
                    <h5 class="text-center mt-2">Título</h5>
                    <p class="media-body">
                        &emsp; Mussum Ipsum, cacilds vidis litro abertis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                    </p>
                </div>
            </article>

		</fieldset> 

        <div id="page_num"></div>
		
		<div class="d-none d-xl-block">
	<aside class="col-4 float-right mt-3 mr-0 ml-0 p-0 text-center">
        <img src="images/placeholder2.png" alt="placeholder" class="media img-fluid m-auto">
        </aside>
	<aside id="content_pool" class="col-4 float-right mt-3 ml-3 votacao">
        <h4 class="text-center">Melhor do Mês!</h4>
        <ul style="list-style: none">
            <li><input type="radio" name="voto1">Teste</li>
            <li><input type="radio" name="voto2">Teste</li>
            <li><input type="radio" name="voto3">Teste</li>
            <li><input type="radio" name="voto4">Teste</li>
			<li><input type="submit"></li>
        </ul>
	</aside>
	<aside class="col-4 float-right mt-3 ml-3 gameright p-0">
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
