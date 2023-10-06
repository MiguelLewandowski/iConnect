<?php
$this->layout("_theme");
?>

<!-- banner -->
<div class="jumbotron jumbotron-fluid mb-5" id="banner" style="background-image: url(assets/web/img/banners/banner-projetos.jpg), linear-gradient(45deg, black, transparent);  background-color: #1e263b;">
  <div class="container text-center text-md-left">
    <header>
      <div class="row ">
        <div class="img-nav col-6">
          <img src="assets/web/img/logos/logo.png" alt="logo" class="logo-nav img-fluid">
        </div>
        <div class="col-6 align-self-center text-right">
          <a href="<?= url(); ?>" class="text-white lead mx-2 linksNav">INÍCIO</a>
          <a href="<?= url("solucoes"); ?>" class="text-white lead mx-2 linksNav">SOLUÇÕES</a>
          <a href="<?= url("projetos"); ?>" class="text-white lead mx-2 linksNav">PROJETOS</a>
          <a href="<?= url("videos"); ?>" class="text-white lead mx-2 linksNav">VÍDEOS</a>
          <a href="#contact" class="text-white lead mx-2 linksNav">CONTATO</a>
        </div>
      </div>
    </header>
    <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
      Projetos
    </h1>
    <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white text-justify my-5">
      Desfrute de um estilo de vida moderno e sofisticado com nossa automação residencial de última geração, proporcionando controle total sobre áudio, vídeo, monitoramento e outros recursos inovadores.
    </p>
  </div>

</div>
<main id="projetos" class='main-container'>
  <h1 class="display-4 text-center my-5">PROJETOS</h1>
  <hr>
  <section class="container-grid">
    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/wohMgEcN5tQ" frameborder="0" allowfullscreen> </iframe>
      <p class="card-description">Automação de escritório programada para acionar as funções de ligar/desligar as luzes, a televisão, o som e o ar- condicionado.</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/VOWLsL3itGM" frameborder="0" allowfullscreen> </iframe>
      <p class="card-description">​AUTOMAÇÃO FIBARO - Instalações no Residencial Damha II em Campo Grande - MS.</p>
    </div>

    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/NiFngzR67BI" frameborder="0" allowfullscreen> </iframe>
      <p class="card-description">​ADEGA AUTOMATIZADA - Instalações no Residencial Damha II em Campo Grande - MS.</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Ty1D3F5aTZI" frameborder="0" allowfullscreen> </iframe>
      <p class="card-description">Automação de escritório programada para acionar as funções de ligar/desligar as luzes, a televisão, o som e o ar- condicionado.</p>
    </div>

    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <img width="560" height="315" src="assets/web/img/projetos/projetos1.jpg">
      <p class="card-description">Home Theater - Automação incluindo caixas de som embutidas, ar condicionado, luzes e televisão - Instalação finalizada em residência - Campo Grande - MS.</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <img width="560" height="315" src="assets/web/img/projetos/projetos3.png" frameborder="0" allowfullscreen>
      <p class="card-description">Automação, Monitoramento e Rede Wifi - Obra Sendo Finalizada no Residencial Damha I em Campo Grande - MS.</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <img width="560" height="315" src="assets/web/img/projetos/projetos4.png" frameborder="0" allowfullscreen>
      <p class="card-description">Automação, Som Ambiente, Home Theater, Monitoramento e Rede Wifi - Obra em Andamento Residencial Damha II em Campo Grande - MS.</p>
    </div>

    <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="card-solucoes">
      <img width="560" height="315" src="assets/web/img/projetos/projetos6.png" frameborder="0" allowfullscreen>
      <p class="card-description">Automação de escritório programada para acionar as funções de ligar/desligar as luzes, a televisão, o som e o ar- condicionado.</p>
    </div>


    <div id="carousel1" class="carousel slide card-solucoes" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        <p class="card-description">Automação de escritório programada para acionar as funções de ligar/desligar as luzes, a televisão, o som e o ar- condicionado.</p>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img width="560" height="315" src="assets/web/img/projetos/projetos2.jpeg" alt="Image 1">
        </div>
        <div class="carousel-item">
          <img width="560" height="315" src="assets/web/img/projetos/projetos2-2.jpeg" alt="Image 2">
        </div>
        <div class="carousel-item">
          <img width="560" height="315" src="assets/web/img/projetos/projetos2-3.jpeg" alt="Image 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carousel1" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <div id="carousel2" class="carousel slide card-solucoes" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel2" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img width="560" height="315" src="assets/web/img/projetos/projetos5-1.png" alt="Image 4">
        </div>
        <div class="carousel-item">
          <img width="560" height="315" src="assets/web/img/projetos/projetos5-2.png" alt="Image 5">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carousel2" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>
</main>