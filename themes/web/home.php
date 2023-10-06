<?php
 $this->layout("_theme");
?>

<!-- banner -->
<div class="jumbotron jumbotron-fluid" id="banner"  style="background-image: url(assets/web/img/banners/banner-home.jpg), linear-gradient(45deg, black, transparent); background-color: #1e263b;">
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
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	iConnect, conectando <br> sua casa à você!
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white text-justify my-4">
                ​Empresa especializada em automação residencial, home theater, som ambiente, monitoramento e rede wifi. Tem como objetivo proporcionar novas experiências de interação e segurança com a sua casa ou comércio, através de dispositivos de última geração, já testados e aprovados pelos mercados mais exigentes.
            </p>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="gradient-icons py-5 ">

        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="<?= url(); ?>/assets/web/img/icones/icone-solucao.png" alt="Soluções" class="icone mx-auto">
                <h4 class="mt-3">Soluções</h4>
                <p class="mt-3">Desfrute de um estilo de vida moderno e sofisticado com nossa automação residencial de última geração, proporcionando controle total sobre áudio, vídeo, monitoramento e outros recursos inovadores.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="<?= url(); ?>/assets/web/img/icones/icone-projetos.png" alt="Projetos" class="icone mx-auto">
                <h4 class="mt-3">Projetos</h4>
                <p class="mt-3">Transforme sua visão em realidade com nossos projetos personalizados de automação residencial, criando espaços inteligentes e conectados que se adaptam perfeitamente ao seu estilo de vida.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="<?= url(); ?>/assets/web/img/icones/icone-videos.png" alt="Videos" class="icone mx-auto">
                <h4 class="mt-3">Vídeos</h4>
                <p class="mt-3">Explore nosso acervo de vídeos e mergulhe no mundo das tecnologias revolucionárias, onde você poderá descobrir as últimas inovações que estão transformando a forma como vivemos, trabalhamos e nos conectamos.</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class=" feature" id="feature-first">
        <div class="container mt-5">
            <div class="row justify-content-between text-center text-md-left centralizar">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Casa inteligente</h2>
                    <p class="my-4">O sistema de automação residencial oferece opções de instalação com fiação ou sem fio, ambas confiáveis e revolucionárias. Diferenciam-se em termos de instalação fácil, desempenho, expansão, robustez e inteligência nas ações. Oferece recursos como controle de acesso, monitoramento, automação de tarefas, segurança e acesso remoto por GPS.</p>
                    <a href="<?= url("fibaro"); ?>" class="btn my-4 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="<?= url(); ?>/assets/web/img/facebook-post-padrao.jpg" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center centralizar text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Segurança e conforto</h2>
                    <p class="my-4">
                        A iConnect é especializada em soluções avançadas de monitoramento residencial, proporcionando total tranquilidade. Com opções cabeadas ou sem fio via Wi-Fi, oferecemos instalação fácil e sem complicações, eliminando fios aparentes. Mantenha sua residência protegida e desfrute de conforto absoluto com a iConnect.
                    </p>
                    <a href="<?= url("monitoramento"); ?>" class="btn my-4 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="<?= url(); ?>/assets/web/img/imagem-camera.png" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>