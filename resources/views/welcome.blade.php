<!DOCTYPE HTML>

<html>
<head>
    <title>Kingyo</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
    </noscript>

</head>
<body class="homepage">

<!-- Header -->

<div id="header">

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <section>
                <img class="img-fluid" src="images/LOGOKINGYOBRANCO.png" alt="">
            </section>
        </div>
        <!-- Banner -->
        <div id="banner">
            <div class="container">
                <section>
                    <header class="major">
                        <h2>Bem-vindo ao Kingyo</h2>
                        <span class="byline">A plataforma de gerenciamento da saúde do seu pet!</span>
                    </header>
                    <a class="button alt" href="{{ route('register') }}">Cadastre-se!</a>
                    <a class="button alt" href="{{ route('registerProfissional') }}">Seja um Profissional</a>
                    <a class="buttonlogar" href="{{ route('login') }}">Já sou cadastrado</a>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Featured -->
<div class="wrapper style2">
    <section class="container">
        <header class="major">
            <h2>Tudo na palma de sua mão!</h2>
            <span class="byline">Cuidar do nosso companheiro é muito importante!</span>
        </header>
        <div class="row no-collapse-1">
            <section class="4u">
                <a class="image feature"><img src="images/pic02.jpg" alt=""></a>
                <p>Kingyo te permite gerenciar as vacinas, medicações, eventos e documentos do seu pet.</p>
            </section>
            <section class="4u">
                <a class="image feature"><img src="images/pic03.jpg" alt=""></a>
                <p>Te conectamos com os melhores profissionais da região.</p>
            </section>
            <section class="4u">
                <a class="image feature"><img src="images/pic04.jpg" alt=""></a>
                <p>Administre todas informações do seu pet pelo seu smartphone durante suas atividades diárias.</p>
            </section>
        </div>
    </section>
</div>
<div class="plano">
    <section class="container">
        <header>
            <h2>Conheça nossos planos</h2>
        </header>
    </section>
    <div class="row no-collapse-1">
        <section class="4u">
            <h2>Plano Gratuito</h2>
            <p>Limite de 3 Pets.</p>
            <p>Historico dos Pets.</p>
            <p>Lembrete dos eventos importantes.</p>
            <p>Adicionar profissional aos favoritos.</p>
        </section>
        <section class="4u">
            <h2>Plano Basico para Tutor R$20,00</h2>
            <p>Limite de 10 Pets.</p>
            <p>Historico dos Pets.</p>
            <p>Lembrete dos eventos importantes.</p>
            <p>Adicionar profissional aos favoritos.</p>
        </section>
        <section class="4u">
            <h2>Plano Tutor Avançado R$35,00</h2>
            <p>Pets ilimitados</p>
            <p>Historico dos Pets.</p>
            <p>Lembrete dos eventos importantes.</p>
            <p>Adicionar profissional aos favoritos.</p>
        </section>
        <section class="4u">
            <h2>Plano para profissionais R$80,00</h2>
            <p>Agendar compromisso</p>
            <p>Receber notificações</p>
            <p>Ver histórico do paciente</p>
            <p>Divulgação dos serviços oferecidos</p>
            <p>Lealdade do consumidor</p>
        </section>
    </div>
</div>
<!-- Main -->
<div id="main" class="wrapper style1">
    <section class="container">
        <header class="major">
            <h2>Conheça nossas funcionalidades!</h2>
        </header>
        <div class="row">

            <!-- Content -->
            <div class="6u">
                <section>
                    <ul class="style">
                        <li>
                            <span class="fa fa-bell"></span>
                            <h3>Alertas</h3>
                            <span>Receba alertas sobre as vacinas, consultas e medicações do seu pet.</span>
                        </li>
                        <li>
                            <span class="fa fa-map-marker"></span>
                            <h3>Pesquise profissionais da região</h3>
                            <span>Pesquise por profissionais próximos a sua localização e contate-os pela nossa plataforma.</span>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="6u">
                <section>
                    <ul class="style">
                        <li>
                            <span class="fa fa-sort"></span>
                            <h3>Organize a carteira de Vacinação</h3>
                            <span>Em nosso site é possivel organizar a carteira de vacinação do seu pet.</span>
                        </li>

                    </ul>
                </section>
            </div>
        </div>
    </section>
</div>
<!-- missao-->
<div class="wrapper style2">
    <section class="container">
        <header class="major">
            <h2>Nossa cultura!</h2>
        </header>
        <div class="row no-collapse-1">
            <section class="4u">
                <h3>Missão</h3>
                <p>Nossa missão é criar soluções eficazes para os apaixonados por pets.</p>
            </section>
            <section class="4u">
                <h3>Visão</h3>
                <p>Pretendemos nos tornar uma Startup com um forte nome quando a questão é voltada para o mundo pet.</p>
            </section>
            <section class="4u">
                <h3>Valores</h3>
                <p>Nossos valores são: sustentabilidade, respeito à vida, eficácia e responsabilidade.</p>
            </section>
        </div>
    </section>
</div>
<!-- Footer -->
<div id="footer">
    <div class="container">
        <section class="container">
            <div class="row">
                <!-- Content -->
                <div class="6u">
                    <section>
                        <ul class="style">
                            <li>
                                <a href="https://www.instagram.com/kingyo.pets"><span class="fa fa-instagram"></span></a>
                                </br>
                                <span>Siga-nos no Instagram!</span>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="6u">
                    <section>
                        <ul class="style">
                            <li>
                                <span class="fa fa-envelope"></span>
                                </br>
                                <span>kingyo.pets@gmail.com</span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>
        <div class="copyright">
            Copyright Kingyo
        </div>
    </div>
</div>
</body>
</html>
