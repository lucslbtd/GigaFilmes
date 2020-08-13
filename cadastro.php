<?php include "cabeçalho.php" ?>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<nav class="nav-extended indigo darken-1">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastro.php">Cadastrar</a></li>
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

  <div class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <form>
        <div class="card-content">
          <span class="card-title">Dados do filme</span>
          <div class="row">
            <div class="input-field col s12">
              <label for="titulo">Título</label>
              <input type="text" class="validate" name="titulo" id="titulo" />
            </div>
            <div class="input-field col s12">
              <label for="sinopse">Sinopse</label>
              <input type="text" class="validate" name="sinopse" id="sinopse" />
            </div>
      </form>     
          <div class="input-field col s12">
            <label for="nota">Nota</label>
            <input type="number" step="0.1" min="0" max="10" class="validate" name="nota" id="nota" />
          </div>
          <label>Banner do filme</label> </br>
          <div class="input-field col s12">
          <input type="file">
          </div>
          <a href="galeria.php" class="waves-effect waves-light btn">Retornar à galeria</a>
          <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Cadastrar filme
            <i class="material-icons right">check_circle
            </i>
          </button>
        </div> 
    </div>
  </div>