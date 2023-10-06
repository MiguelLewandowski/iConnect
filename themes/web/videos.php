<?php
$this->layout("_theme");
?>

<!-- banner -->
<div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(assets/web/img/banners/banner-video.jpg),linear-gradient(45deg, black, transparent); background-color: #1e263b;">
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
            Vídeos
        </h1>
        <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white text-justify my-5">
            Descubra e acompanhe por meio de vídeos as mais recentes tecnologias inovadoras que utilizamos em nossos
            impactantes projetos, e conheça as experiências incríveis que a automação pode proporcionar.</p>
    </div>
</div>
<div id="videos">
    <!-- two-block -->
    <div class="container my-5 py-2">


        <div class="row justify-content-between text-center centralizar text-md-left">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h4 class="ml-3">CONCEITO FIBARO DE CASA INTELIGENTE</h4>
                <p class="text-justify mt-4 ml-3 ">​Uma casa inteligente é muito mais que um sistema, é um conceito
                    no qual a sua residência passar a ser independente de você. Ela estará programada para
                    solucionar todo tipo de problema, sem a necessidade de você estar presente. A iluminação externa
                    acionará quando estiver escuro, a temperatura interna da casa se auto regulará quando você tiver
                    chegando, caso ocorra alguma invasão, a casa estará preparada para agir, acendendo toda
                    iluminação, tirando fotos das câmeras e enviando para seu email, enviando notificação no seu
                    celular. <strong>Permita-se! Seu conceito de casa nunca mais será o mesmo!</strong> </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Q1gEp1CmheM" frameborder="0" allowfullscreen class="mx-auto d-block"> </iframe>
            </div>
        </div>

        <div class="row justify-content-between text-center centralizar text-md-left mt-4">
            <div data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                <h4 class="ml-3">​CONTROLE POR GESTOS - SWIPE</h4>
                <p class="text-justify mt-4 ml-3">O que acha da ideia de acender a iluminação da sua sala no modo
                    cinema, ligar a TV, home theater e blu-ray, ao mesmo tempo que a persiana é fechada, tudo isso
                    através de um único gesto? A Fibaro pode proporcionar essa experiência através do Swipe, um
                    dispositivo que identifica o gestos e envia comandos para acionamento de diversos aparelhos. A
                    sua grande precisão faz com que seja possível até mesmo embutir o Swipe em um parede ou móvel.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NhwFAFiuECk" frameborder="0" allowfullscreen class="mx-auto d-block"> </iframe>
            </div>
        </div>
        <div class="row justify-content-between text-center centralizar text-md-left mt-4">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h4 class="ml-3">SENSOR MOTION</h4>
                <p class="text-justify mt-4 ml-3">Dispositivo que contém quatro tipos de sensores: Movimento,
                    Temperatura, Luminosidade e Acelerômetro para detecção de terremotos. Apresenta visual moderno,
                    sem a necessidade de cabos, pode ser instalado em qualquer ambiente de maneira elegante e
                    discreta. Geralmente utilizado no sistema de alarme Fibaro, controle de ar condicionados,
                    regulando a temperatura ambiente, sistema de acionamento de iluminação, ou até menos nas três
                    funções ao mesmo tempo.</p>
            </div>
            <div data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Tojt4Qhr5xs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div>
        <div class="row justify-content-between text-center centralizar text-md-left mt-4">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                <h4 class="ml-3">SENSOR DE ALAGAMENTO</h4>
                <p class="text-justify mt-4 ml-3">Deixe a sua casa preparada para qualquer tipo de situação. Com
                    este sensor é possível saber se ocorreu algum vazamento de água em determinado ambiente.
                    Integrado a sua central Fibaro, em poucos segundos você será informado através do seu
                    smartphone, que este sensor foi violado, e que a sua residência tomará as medidas necessárias
                    para que o problema seja resolvido. Este dispositivo também vem equipado com sensor de
                    Temperatura, que poderá ser visualizado de onde você estiver ou poderá ser utilizado para o
                    controle de outros dispositivos, como por exemplo, um ar condicionado.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-6 text-center mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Fg20ZEHNcHY" frameborder="0" allowfullscreen class="mx-auto d-block"> </iframe>
            </div>
        </div>
        <div class="row justify-content-between text-center centralizar text-md-left mt-4">
            <div data-aos="fade-rigth" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h4 class="ml-3">SENSOR DE FUMAÇA</h4>
                <p class="text-justify mt-4 ml-3">Traga mais segurança aos ambientes em que se utiliza fogo. Com
                    este sensor é possível saber em tempo real o que está acontecendo, por exemplo, na sua cozinha.
                    Caso aconteça alguma alteração, o sistema enviará uma notificação Push no seu smartphone, e casa
                    tomará precauções, abrindo persianas e janelas. </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/R4sM5s_IrSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>