<?php
require_once("conexao/conecta.php");

$sql = "";
$query = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($query);
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0px">
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
      <li class="nav-item active">
        <a class="nav-link" href="#">CONTATO<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>

</nav>
 
	<section class="container mt-4">
		
		<form action="" method="post" class="col-md-8 col-sm-12 p-3 shadow float-left contato">
			<p><b>Nome:</b><br><input type="text" id="nome" placeholder="Insira seu nome." class="w-100 shadow-sm" style="border-radius: 8px; border: 0px;"></p>
			<p><b>E-Mail:</b><br><input type="text" id="email" placeholder="nome@dominio.com" class="w-100 shadow-sm" style="border-radius: 8px; border: 0px;"></p>
			<p><b>Mensagem:</b><br><textarea maxlength="2000" id="msg" placeholder="Limite de 2000 caracteres." class="w-100 mw-100" style="border-radius: 8px; min-height: 12em;"></textarea></p>
			<p><input type="submit" id='submit' class="w-100 shadow-sm btctt"></p>
		</form>
		<aside class="col-md-3 col-sm-12 p-3 shadow float-right sidectt">
			<h4 class="text-center">Contato</h4> <br>
		<p class="text-justify">
			<b>Fone:</b> (55)5555-5555<br>
			<b>Whatsapp:</b> (70)97070-8080 <br>
			<b>Whatsapp2:</b> (70)97746-8245 <br>
			<b>E-Mail:</b> sac@gamestore.com.br <br>
		</p>
		</aside>
		
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
	<script>
	
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
