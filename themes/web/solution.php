<?php
 $this->layout("_theme");
?>

<!-- banner -->
<div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(assets/web/img/banners/banner-solucoes.jpg), linear-gradient(45deg, black, transparent); background-color: #1e263b;">
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
                Soluções
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white text-justify my-5">
                Desfrute de um estilo de vida moderno e sofisticado com nossa automação residencial de última geração, proporcionando controle total sobre áudio, vídeo, monitoramento e outros recursos inovadores.
            </p>
        </div>

    </div>
    <div id="solucoes">
        <!-- two-blcok -->
        <div class="container my-5 py-2">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center my-3 ">
                    <img src="<?= url(); ?>/assets/web/img/audio-video-removebg-preview.png" alt="Anti-spam" class=" mx-auto">
                    <a href="<?= url("audioevideo"); ?>" class="btn mt-5 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center my-3 ">
                    <img src="<?= url(); ?>/assets/web/img/fibaro-principal.png" alt="Phishing Detect" class="mx-auto">
                    <a href="<?= url("fibaro"); ?>" class="btn mt-5 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
            </div>
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center mt-5 ">
                    <img src="<?= url(); ?>/assets/web/img/img-monitoramento.png" alt="Anti-spam" class=" mx-auto">
                    <a href="<?= url("monitoramento"); ?>" class="btn mt-5 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center mt-5  ">
                    <img src="<?= url(); ?>/assets/web/img/touchLight.png" alt="Phishing Detect" class="mx-auto">
                    <a href="<?= url("touchlight"); ?>" class="btn mt-5 font-weight-bold atlas-cta cta-blue">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>