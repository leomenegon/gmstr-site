
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>CoreUI - Open Source Bootstrap Admin Template</title>

  <!-- Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="main.php"><i class="fas fa-tachometer-alt"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticias.php"><i class="far fa-newspaper"></i> Notícias <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jogosphp"><i class="fas fa-gamepad"></i> Jogos <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Tags.php"><i class="fas fa-hashtag"></i> Tags <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="generos.php"><i class="fas fa-archive"></i> Gêneros <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="plataformas.php"><i class="far fa-hdd"></i> Plataformas <span class="badge badge-primary">NEW</span></a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Main content -->
    <main class="main">

      <div class="container-fluid">
        <div id="ui-view"></div>
      </div>
      <!-- /.conainer-fluid -->
    </main>

  </div>
  <!-- Bootstrap and necessary plugins -->
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://raw.githubusercontent.com/HubSpot/pace/v1.0.0/pace.min.js"></script>

  <!-- CoreUI main scripts -->

  <script src="js/app.js"></script>

</body>
</html>