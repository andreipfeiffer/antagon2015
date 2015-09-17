<!DOCTYPE html>
<html lang="en">

<?php
$day   = date('d');
$month = date('m');
$year  = date('Y');

$date = $year.'-'.$month.'-'.$day;
// $date = '2015-10-21';

switch ($date) {
    case '2015-10-18':
        $antagonDay = 1;
        break;
    case '2015-10-19':
        $antagonDay = 2;
        break;
    case '2015-10-20':
        $antagonDay = 3;
        break;
    case '2015-10-21':
        $antagonDay = 4;
        break;
    case '2015-10-22':
        $antagonDay = 5;
        break;
    case '2015-10-23':
        $antagonDay = 6;
        break;
    case '2015-10-24':
        $antagonDay = 7;
        break;
    case '2015-10-25':
        $antagonDay = 8;
        break;
    default:
        $antagonDay = 0;
        break;
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festival al teatrului liber, independent">
    <meta name="author" content="">

    <title>Antagon Festival 2015</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="js/photoswipe/photoswipe.css" rel="stylesheet">
    <link href="js/photoswipe/default-skin/default-skin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <i class="fa fa-play-circle"></i> --> Antagon <span class="light hidden-sm">Festival</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#program">Program</a></li>
                    <li><a class="page-scroll" href="#bilete">Bilete</a></li>
                    <li><a class="page-scroll" href="#despre">Despre</a></li>
                    <li><a class="page-scroll" href="#galerie">Galerie</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="page-scroll" href="#sponsori">Sustinatori</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="img/header-antagon-festival.png" alt="Antagon Festival, Timisoara 18-25 octombrie 2015" id="banner-header">
                    </div>
                </div>
            </div>
            <a href="#program" class="page-scroll arrow">Programul festivalului</a>
        </div>
    </header>

    <!-- Program -->
    <section id="program">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Program</h2>
                    <table class="table text-left">
                        <tbody>
                            <tr class="<?php echo ($antagonDay == 1) ? 'is-active' : '' ?>">
                                <td class="ziua">Duminica <span class="data">18 oct</span></td>
                                <td class="piesa">Ferma animalelor</td>
                                <td class="trupa">Aualeu Teatru</td>
                                <td class="locatie">??? <span class="ora">20:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 2) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Luni <span class="data">19 oct</span></td>
                                <td class="piesa">Foc de voie</td>
                                <td class="trupa">Ionut Caras</td>
                                <td class="locatie">Ambasada <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 2) ? 'is-active' : '' ?>">
                                <td class="piesa">Voi n-ati vazut nimic</td>
                                <td class="trupa">David Schwartz</td>
                                <td class="locatie">Ambasada <span class="ora">21:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 3) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Marti <span class="data">20 oct</span></td>
                                <td class="piesa">Uord</td>
                                <td class="trupa">ASA triO</td>
                                <td class="locatie">Tam Tam <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 3) ? 'is-active' : '' ?>">
                                <td class="piesa">concert punk</td>
                                <td class="trupa">Watican Punk Ballet</td>
                                <td class="locatie">Tam Tam <span class="ora">21:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 4) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="3">Miercuri <span class="data">21 oct</span></td>
                                <td class="piesa">Alearga</td>
                                <td class="trupa">Nicoleta Lefter</td>
                                <td class="locatie">Amabasada <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 4) ? 'is-active' : '' ?>">
                                <td class="piesa">Defilarea costumelor</td>
                                <td class="trupa">Ion Barbu</td>
                                <td class="locatie">Club Daos <span class="ora">20:30</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 4) ? 'is-active' : '' ?>">
                                <td class="piesa" colspan="2">Concert Ada Milea</td>
                                <!-- <td class="trupa"></td> -->
                                <td class="locatie">Club Daos <span class="ora">22:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 5) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Joi <span class="data">22 oct</span></td>
                                <td class="piesa">Zero</td>
                                <td class="trupa">Varoterem Projekt</td>
                                <td class="locatie">Galeria Triade <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 5) ? 'is-active' : '' ?>">
                                <td class="piesa">Razbunare</td>
                                <td class="trupa">Unteatru</td>
                                <td class="locatie">Galeria Triade <span class="ora">21:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 6) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Vineri <span class="data">23 oct</span></td>
                                <td class="piesa">Nascut in 90</td>
                                <td class="trupa">Bis</td>
                                <td class="locatie">??? <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 6) ? 'is-active' : '' ?>">
                                <td class="piesa">Dureri Fantoma</td>
                                <td class="trupa">Teatrul de Arta</td>
                                <td class="locatie">??? <span class="ora">21:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 7) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Sambata <span class="data">24 oct</span></td>
                                <td class="piesa">9 din 10</td>
                                <td class="trupa">Reactor</td>
                                <td class="locatie">Electric Theatre <span class="ora">19:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 7) ? 'is-active' : '' ?>">
                                <td class="piesa">Dumnezeul de a doua zi</td>
                                <td class="trupa">Electric Theatre</td>
                                <td class="locatie">Electric Theatre <span class="ora">19:00</span></td>
                            </tr>

                            <tr class="<?php echo ($antagonDay == 8) ? 'is-active' : '' ?>">
                                <td class="ziua" rowspan="2">Duminica <span class="data">25 oct</span></td>
                                <td class="piesa">Public Land Hotel spectacol lectura</td>
                                <td class="trupa">Katarzyna Raduszynska</td>
                                <td class="locatie">Scart, loc lejer <span class="ora">18:00</span></td>
                            </tr>
                            <tr class="<?php echo ($antagonDay == 8) ? 'is-active' : '' ?>">
                                <td class="piesa">Casa din copac</td>
                                <td class="trupa">Aualeu Teatru</td>
                                <td class="locatie">Scart, loc lejer <span class="ora">20:00</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Bilete -->
    <section id="bilete">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Bilete</h2>
                    <p>Biletele pentru spectacolele din cadrul festivalului se pot cumpara in avans de la:</p>
                    <ul class="list-unstyled">
                        <li><a href="#" class="logo-scart">Scârț, Loc lejer</a></li>
                        <li><a href="#" class="logo-carturesti">Librăria Cărturești Mercy</a></li>
                        <li><a href="#" class="logo-ambasada">Ambasada</a></li>
                    </ul>
                    <br>
                    <br>
                    <p>Biletele costă 25 de lei <br>și permit accesul la ambele spectacole programate într-o zi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Despre -->
    <section id="despre">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Despre</h2>
                    <p>Antagon Festival este un eveniment dedicat companiilor și publicului de teatru independent.</p>
                    <p>A avut prima ediție în 2014, când numărul mare de spectatori ne-a convins să organizăm și o a doua ediție. Organizatorul evenimentului este Asociația Culturală Antagon. Încă de la prima ediție ne-am propus să oferim trupelor de teatru ce dezvoltă spectacole în regim independent, o platformă de prezentare a acestora publicului din Timișoara.</p>
                    <p>Selecția spectacolelor este făcută de către organizatori, singurele criterii fiind calitatea spectacolului și apartenența acestuia la scena independentă. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="galerie" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Galerie foto</h2>

                <a href="#galerie2014" class="galerie galerie--2014" data-year="2014">2014</a>
                <a href="#galerie2015" class="galerie galerie--2015" data-year="2015">2015</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="text-center">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Contact</h2>
                        <p>Ne puteți contacta pe email sau la telefon:</p>
                        <p>
                            <a href="mailto:bogdan.cotirta@antagonfestival.ro">bogdan.cotirta@antagonfestival.ro</a><br>
                            0040 749 402521
                        </p>
                        <div class="social-buttons">
                            <a href="https://www.facebook.com/antagonfestival" class="facebook">Facebook</a>
                            <a href="https://twitter.com/antagonfestival" class="twitter">Twitter</a>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <h2>Echipa</h2>
                    <ul class="list-unstyled echipa">
                        <li class="col-xs-6 col-sm-4 col-lg-3">
                            <a href="#"><img src="http://placehold.it/120/666666/bbbbbb&amp;text=OMi" class="img-circle"></a>
                            <h3 class="echipa__nume">Ovidiu Mihăiță</h3>
                            <p class="echipa__descriere">organizator</p>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-lg-3">
                            <a href="#"><img src="http://placehold.it/120/666666/bbbbbb&amp;text=BCo" class="img-circle"></a>
                            <h3 class="echipa__nume">Bogdan Cotîrță</h3>
                            <p class="echipa__descriere">organizator</p>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-lg-3">
                            <a href="#"><img src="http://placehold.it/120/666666/bbbbbb&amp;text=LPo" class="img-circle"></a>
                            <h3 class="echipa__nume">Lucian Popovici</h3>
                            <p class="echipa__descriere">grafică</p>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-lg-3">
                            <a href="#"><img src="http://placehold.it/120/666666/bbbbbb&amp;text=LRa" class="img-circle"></a>
                            <h3 class="echipa__nume">Lia Rădoi</h3>
                            <p class="echipa__descriere">grafică</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustinatori -->
    <section id="sponsori" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Sustinatori</h2>
                    <p>Le mulțumim celor fără de care Antagon Festival nu ar fi la fel</p>

                    <h3>Sponsori</h3>

                    <h3>Parteneri</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="container text-center">
            <small>Copyright &copy; Antagon Festival 2015</small><br>
            <small>Based on the free <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale theme</a></small><br>
            <br>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/photoswipe/photoswipe.min.js"></script>
    <script src="js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="js/grayscale.js"></script>

</body>

</html>
