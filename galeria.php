<?php include "cabeçalho.php" ?>

<?php

$filme1 = ["titulo" => "Vingadores: Ultimato",
          "nota" => 8.6, 
          "sinopse" => "Após os eventos devastadores de 'Vingadores: Guerra Infinita', o universo está em ruínas devido aos esforços do Titã Louco, Thanos.
          Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos
          e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
          "poster" => "https://image.tmdb.org/t/p/w400/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"];

$filme2 = ["titulo" => "Coringa",
          "nota" => 9.2, 
          "sinopse" => "Arthur Fleck trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais.
          Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata.
          Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.",
          "poster" => "https://image.tmdb.org/t/p/original/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg"];
    
$filme3 = ["titulo" => "Aves de Rapina: Arlequina e sua Emancipação Fantabulosa",
          "nota" => 8.1, 
          "sinopse" => "Arlequina, Canário Negro, Caçadora, Cassandra Cain e a policial Renée Montoya formam um grupo inusitado de heroínas.
          Quando um perigoso criminoso começa a causar destruição em Gotham, as cinco mulheres precisam se unir para defender a cidade.",
          "poster" => "https://image.tmdb.org/t/p/original/A50Ngq9lh9aCTGHC6kttrppHNoF.jpg"];
          

$filmes = [$filme1, $filme2, $filme3];


?>

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
    <?php foreach($filmes as $filme) : ?>

      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src= "<?= $filme["poster"]?>" >
            <a class="btn-floating halfway-fab waves-effect waves-light red">
              <i class="material-icons">favorite_border</i>
            </a>
          </div>
          <div class="card-content">
            <p class="valing-wrapper">
              <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
            </p>
            <span class="card-title"><?= $filme["titulo"] ?></span>
            <p><?= $filme["sinopse"]?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
    
  
    
</body>
</html>