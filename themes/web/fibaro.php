<?php
$this->layout("_theme2");
?>

<!-- banner -->
<div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(assets/web/img/banners/banner-projetos.jpg); background-color: #1e263b;">
    <div class="container text-center text-md-left">
        <header>
            <div class="row ">
                <div class="img-nav col-6">
                    <img src="<?= url(); ?>/assets/web/img/logos/logo.png" alt="logo" class="logo-nav img-fluid">
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
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div align="center">
        <img src="<?= url(); ?>/assets/web/img/fibaro-principal.png" alt="logo-audio-video">
    </div>

    <div class="container my-5">
        <hr width="100%">
        <div class="row justify-content-between text-center text-md-left centralizar">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h2 class="font-weight-bold">POR QUE FIBARO?</h2>
                <p class="my-4">​É um sistema de automação residencial sem fio, confiável e revolucionário, que se diferencia em vários níveis, desde a facilidade de instalação, performance, possibilidade de expansão, robustez e, principalmente, inteligência nas
                    ações, controle de acesso, monitoramento, automação de tarefas, segurança, acesso remoto e monitoramento por GPS. Fibaro foi criado com foco na experiência do usuário e pode ser instalado em qualquer ambiente. <strong>Bem-vindo ao mundo
                        Fibaro, soluções inteligentes para uma vida dinâmica em alto estilo</strong>.</p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="<?= url(); ?>/assets/web/img/fibaro-home-2_1_orig.jpg" alt="Take a look inside" class="mx-auto d-block">
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container my-1">
        <div class="row justify-content-between text-center text-md-left centralizar">

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                <h2 class="font-weight-bold">APLICATIVO MODERNO E SIMPLES</h2>
                <p class="my-4">​A interface de controle é moderna e simples. É por meio dela que o usuário irá interagir e executar as tarefas do dia-a-dia. O aplicativo para acionar e controlar o sistema com poucos toques, é gratuito e está disponível para download
                    na Apple Store e Play Store. Depois de instalado, o acesso pode ser feito pela rede 3G ou Wi-fi de qualquer lugar do mundo. O sistema envia uma notificação Push para o proprietário em caso de acionamento do portão da garagem ou
                    movimento suspeito. Tudo isso e muito mais pode ser facilmente configurado na Central Home Center, o cérebro do sistema e responsável pelas funções avançadas.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="<?= url(); ?>/assets/web/img/cell-app.png" alt="Take a look inside" class="mx-auto d-block">
            </div>


        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container my-1">
        <div class="row justify-content-between text-center text-md-left centralizar">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h2 class="font-weight-bold">Seguro e Acessível</h2>
                <p class="my-4">​Toda a família pode ter o controle da casa. As restrições de acesso são atribuídas para cada usuário na central Home Center. Fibaro utiliza a função GPS dos smartphones para enviar a localização do usuário para a central e, conforme
                    a programação, executar cenas. Exemplo: ao aproximar da casa num raio de 100m, e se for quarta-feira após as 19h, ligar a TV e colocar no jogo de futebol. ​Fibaro foi testado e aprovado por grandes empresas do mundo inteiro para
                    automação residencial sem fio. Pode ser facilmente integrado com outros dispositivos e é muito seguro. Um sistema de altíssima qualidade com custo acessível, em comparação com outras soluções de automação do mercado.</p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="<?= url(); ?>/assets/web/img/interf-app.png" alt="Take a look inside" class="mx-auto d-block">
            </div>
        </div>
        <hr width="100%">
    </div>


    <p class="text-center display-4 mt-5">CONCEITO FIBARO DE CASA INTELIGENTE</p>
    <div class="container my-5 py-2">
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="mx-auto col-8">
                <iframe width="100%" height="415" src="https://www.youtube.com/embed/qvxdVJBZMMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h5 class="text-justify mt-2">Automação de escritório programada para acionar as funções<br> de ligar/desligar as luzes, a televisão, o som e o ar- condicionado.</p>
            </div>
        </div>
        <hr width="100%">
    </div>
</div>