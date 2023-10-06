<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iConnect - home</title>
    <!-- custom.css -->

    <link rel="stylesheet" href="<?= url(); ?>/assets/web/css/globals.css">
    <link rel="stylesheet" href="<?= url(); ?>/assets/web/css/saibaMais.css">

    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="<?= url(); ?>/assets/web/css/bootstrap.min.css">

    <!-- font awesome-->
    <link rel="stylesheet" href="<?= url(); ?>/assets/web/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="<?= url(); ?>/assets/web/css/aos.css">

</head>

<?= $this->section("content"); ?>

<!-- contact -->
<div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(assets/web/img/banners/contact-bk.jpg);">
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white">
                <h2 class="font-weight-bold">Fale conosco</h2>
                <p class="my-4 text-justify">
                    Entre em contato conosco e aproveite um atendimento personalizado para esclarecer todas as suas dúvidas e encontrar a solução perfeita para suas necessidades.
                </p>
                <ul class="list-unstyled">
                    <li>Email : comercial@iconnect.tech</li>
                    <li>Telefone : (67) 3204-0312 / ​(67) 99954-0337</li>
                    <li>Endereço : Rua Quinze de Novembro, 2550 - 309 - Jardim dos Estados, Campo Grande - MS, 79020-300</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome</label>
                            <input type="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="jumbotron jumbotron-fluid" id="copyright">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                © 2023, iConnect.
            </div>
            <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                <a href="https://www.facebook.com/iconnect.tec" class="d-inline-block text-center ml-2">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/iconnecttec/" class="d-inline-block text-center ml-2">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-medium" aria-hidden="true"></i>
                </a>
                <a href="https://www.youtube.com/@iconnectautomacaoresidenci638/" class="d-inline-block text-center ml-2">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- AOS -->
<script src="<?= url(); ?>/assets/web/js/aos.js"></script>
<script>
    AOS.init({});
</script>
</body>

</html>