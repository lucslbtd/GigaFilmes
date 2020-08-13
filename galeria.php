<?php include "cabeçalho.php" ?>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<nav class="nav-extended indigo darken-1">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php.">Galeria</a></li>
        <li><a href="cadastro.php">Cadastrar</a></li>
      </ul>
     </div>
     <div class="nav-header center"> 
        <h1>GigaFilmesHD</h1>
     </div>
    <div class="nav-content" >
      <ul class="tabs tabs-transparent indigo darken-4">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>

  <div class="row">
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://image.tmdb.org/t/p/w400/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i>
          </a>
        </div>
        <div class="card-content">
          <p class="valing-wrapper">
            <i class="material-icons amber-text">star</i>
            10</p>
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://image.tmdb.org/t/p/w400/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i>
          </a>
        </div>
        <div class="card-content">
          <p class="valing-wrapper">
            <i class="material-icons amber-text">star</i>
            10</p>
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://image.tmdb.org/t/p/w400/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i>
          </a>
        </div>
        <div class="card-content">
          <p class="valing-wrapper">
            <i class="material-icons amber-text">star</i>
            10</p>
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  
    
</body>
</html>