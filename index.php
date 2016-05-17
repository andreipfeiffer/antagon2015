<!DOCTYPE html>
<html lang="en">

<?php
$day   = date('d');
$month = date('m');
$year  = date('Y');

$date = $year.'-'.$month.'-'.$day;
// $date = '2016-05-21';

switch ($date) {
    case '2016-05-15':
        $antagonDay = 1;
        break;
    case '2016-05-16':
        $antagonDay = 2;
        break;
    case '2016-05-17':
        $antagonDay = 3;
        break;
    case '2016-05-18':
        $antagonDay = 4;
        break;
    case '2016-05-19':
        $antagonDay = 5;
        break;
    case '2016-05-20':
        $antagonDay = 6;
        break;
    case '2016-05-21':
        $antagonDay = 7;
        break;
    case '2016-05-22':
        $antagonDay = 8;
        break;
    default:
        $antagonDay = 0;
        break;
}

$url['ambasada'] = 'https://www.google.ro/maps/place/Ambasada/@45.7501748,21.2154378,15z/data=!4m2!3m1!1s0x0:0x281f14b770d4fcdc';
$url['scart']    = 'https://www.google.ro/maps/place/Sc%C3%A2r%C8%9B+Loc+Lejer/@45.7430969,21.2242287,15z/data=!4m2!3m1!1s0x0:0xfd547ee501d53b10';
$url['aethernativ'] = 'https://www.google.pt/maps/place/Aethernativ/@45.7583275,21.2239938,17z/data=!3m1!4b1!4m5!3m4!1s0x474567810526442b:0xba584aa34243f085!8m2!3d45.7583275!4d21.2261825';
$url['capite'] = 'https://www.google.pt/maps/place/La+Căpițe/@45.7482099,21.2287835,17z/data=!3m1!4b1!4m5!3m4!1s0x47455d847289e39f:0x95266ddcad8fb6d8!8m2!3d45.7482099!4d21.2309722';
$url['casa_studentilor'] = 'https://www.google.pt/maps/place/Casa+de+Cultură+a+Studenţilor/@45.7441546,21.2092773,16.14z/data=!4m5!3m4!1s0x47455d712c559403:0xe10f3455e4fb4de3!8m2!3d45.7453008!4d21.2128011';
$url['calina'] = 'https://www.google.pt/maps/place/Galeria+Calina/@45.7545348,21.223374,17z/data=!3m1!4b1!4m5!3m4!1s0x47455d7fc6be81a5:0x36de9f2c3a0ffa54!8m2!3d45.7545348!4d21.2255627';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festival al teatrului liber, independent">
    <meta name="author" content="">

    <title>Antagon Festival 2016</title>

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
                        <img src="img/header-antagon-festival.png" alt="Antagon Festival, Timisoara 15-22 mai 2016" id="banner-header">
                    </div>
                </div>
            </div>
            <a href="#program" class="page-scroll arrow">Programul festivalului</a>
        </div>
    </header>

    <!-- Program -->
    <section id="program">
        <div class="content-section text-center">
            <h2>Program</h2>

            <section class="container ziua <?php echo ($antagonDay == 1) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Duminică <span class="data transparent">15 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Auăleu</span>
                                    <span class="transparent">Ferma</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">19:00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 2) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Luni <span class="data transparent">16 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Unteatru</span>
                                    <span class="transparent">Ce învârte omul drept, după Platon</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["ambasada"]?>" target="_blank">Ambasada</a>
                                    <span class="ora transparent">19:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Mircea Tiberian &amp; The Twisters</span>
                                    <span class="transparent">Jazzy Tarot</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["ambasada"]?>" target="_blank">Ambasada</a>
                                    <span class="ora transparent">21:00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 3) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Marți <span class="data transparent">17 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Târg de vinyluri și instrumente muzicale vechi</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">18:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Teatrul de Artă</span>
                                    <span class="transparent">Cerere în căsătorie</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["ambasada"]?>" target="_blank">Ambasada</a>
                                    <span class="ora transparent">19:30</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Proiecții de scurt metraje și filme documentare</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț, în grădină</a>
                                    <span class="ora transparent">21:00</span>
                                </span>
                            </li>
                       </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 4) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Miercuri <span class="data transparent">18 mai</h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Oana Stoian</span>
                                    <span class="transparent">Expoziție foto &ndash; 11 ani de Auăleu</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">19:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Auăleu</span>
                                    <span class="transparent">Huooooo!!!</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">20:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Rapala &amp; Christine</span>
                                    <span class="transparent">Povești de pe platane</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">21:30</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 5) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Joi <span class="data transparent">19 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Reactor de creație și experiment</span>
                                    <span class="transparent">Nu cred că o să îmi treacă vreodată</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["ambasada"]?>" target="_blank">Ambasada</a>
                                    <span class="ora transparent">19:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Rodion</span>
                                    <span class="transparent">Concert</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["aethernativ"]?>" target="_blank">Aethernativ</a>
                                    <span class="ora transparent">21:00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 6) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Vineri <span class="data transparent">20 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">BaBa ZuLa</span>
                                    <span class="transparent">Concert</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["capite"]?>" target="_blank">La Căpițe</a>
                                    <span class="ora transparent">21:00</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 7) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Sâmbătă <span class="data transparent">21 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Teatrul Labirint</span>
                                    <span class="transparent">Asylum</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["casa_studentilor"]?>" target="_blank">Casa Studenților</a>
                                    <span class="ora transparent">17:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">O2G</span>
                                    <span class="transparent">Sub Pământ</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["calina"]?>" target="_blank">Galeria Calina</a>
                                    <span class="ora transparent">19:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Nucu Pandrea</span>
                                    <span class="transparent">Concert la frunză</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">20:30</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Expoziție 300 de pești de sticlă</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">21:30</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="container ziua <?php echo ($antagonDay == 8) ? 'is-active' : '' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Duminică <span class="data transparent">22 mai</span></h3>
                        <ul>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Ada Milea</span>
                                    <span class="transparent">Apolodor</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["capite"]?>" target="_blank">La Căpițe</a>
                                    <span class="ora transparent">11:00</span>
                                </span>
                            </li>
                            <li class="clearfix piesa">
                                <strong class="nume">
                                    <span class="trupa">Auăleu</span>
                                    <span class="transparent">O noapte furtunoasă</span>
                                </strong>
                                <span class="locatie">
                                    <a href="<?=$url["scart"]?>" target="_blank">Scârț</a>
                                    <span class="ora transparent">seara</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Bilete -->
    <section id="bilete">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Bilete</h2>

                    <p>Pentru urmatoarele spectacole din cadrul Antagon Festival biletele costa 25 de lei si se pot achizitiona la intrarea la spectacol:</p>
                    <ul class="transparent">
                        <li class="row">
                            <div class="col-xs-6 text-right">Unteatru</div>
                            <div class="col-xs-6 text-left">Ce învârte omul drept</div>
                        </li>
                        <li class="row">
                            <div class="col-xs-6 text-right">Teatrul de Artă</div>
                            <div class="col-xs-6 text-left">Cerere în căsătorie</div>
                        </li>
                        <li class="row">
                            <div class="col-xs-6 text-right">Reactor de creație și exeriment</div>
                            <div class="col-xs-6 text-left">Nu cred că o să-mi treacă vreodată</div>
                        </li>
                        <li class="row">
                            <div class="col-xs-6 text-right">BaBa ZuLa</div>
                            <div class="col-xs-6 text-left">concert</div>
                        </li>
                        <li class="row">
                            <div class="col-xs-6 text-right">O2G</div>
                            <div class="col-xs-6 text-left">Sub Pământ</div>
                        </li>
                        <li class="row">
                            <div class="col-xs-6 text-right">Ada Milea</div>
                            <div class="col-xs-6 text-left">concert</div>
                        </li>
                    </ul>
                    <br>
                    <p>Pentru spectacolele susținute de Auăleu, biletele se pot rezerva la numărul de telefon 0751892340</p>
                    <p>La celelalte spectacole și momente din cadrul festivalului, accesul este liber in limita locurilor disponibile.</p>
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

                    <p>Antagon Festival este un eveniment dedicat producțiilor artistice independente și publicului lor.</p>
                    <p>A avut loc prima dată în 2014, când numărul mare de spectatori ne-a convins să organizăm și o a doua ediție. Încă de la început ne-am propus să oferim trupelor de teatru ce dezvoltă spectacole în regim independent, o platformă de prezentare a acestora în fața publicului din Timișoara.</p>
                    <p>Selecția spectacolelor este făcută de către organizatori, singurele criterii fiind calitatea spectacolului și apartenența acestuia la scena independentă.</p>
                    <p>Evenimentul este organizat de <strong>Asociația Culturală Antagon</strong> și are loc la Timișoara, între 15 și 22 mai 2016.</p>
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
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>
                    Ne puteți contacta pe email sau la telefon:<br>
                    <a href="mailto:bogdan.cotirta@antagonfestival.ro">bogdan.cotirta@antagonfestival.ro</a><br>
                    (004) 0749-402.521
                </p>
                <p>
                    PR si acreditari presa:<br>
                    <a href="mailto:anca.golban@antagonfestival.ro">anca.golban@antagonfestival.ro</a><br>
                    (004) 0749-034.434
                </p>
                <div class="social-buttons">
                    <a href="https://www.facebook.com/antagonfestival" class="facebook" target="_blank">Facebook</a>
                    <a href="https://twitter.com/antagonfestival" class="twitter" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustinatori -->
    <section id="sponsori" class="text-center">
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Sustinatori</h2>
                        <p>Le mulțumim celor fără de care Antagon Festival nu ar fi la fel</p>

                        <br><br>

                        <section>
                            <h3>Sponsori</h3>
                            <ul class="logo-list">
                                <li><a href="https://www.accenture.com/ro-en/" target="_blank"><img src="img/sustinatori/logo-accenture.png" alt="Accenture"></a></li>
                                <li><a href="http://www.zoppas.com/" target="_blank"><img src="img/sustinatori/logo-zoppas.png" alt="Zoppas Industries"></a></li>
                                <li><a href="http://www.tatratea.com/" target="_blank"><img src="img/sustinatori/logo-tatratea.png" alt="Tatratea"></a></li>
                                <li><img src="img/sustinatori/logo-sifa.png" alt="SIFA Consulting"></li>
                            </ul>
                        </section>

                        <br><br>

                        <section>
                            <h3>Finantatori</h3>
                            <p>Consiliul Județean Timiș <br>Primăria Municipiului Timișoara <br>Consiliul Local Timișoara</p>
                            <ul class="logo-list">
                                <li><img src="img/sustinatori/logo-primaria-timisoara.png" alt="Primaria Timișoara"></li>
                                <li><img src="img/sustinatori/logo-consiliul-local-timisoara.png" alt="Consiliul Local Timișoara"></li>
                            </ul>
                        </section>

                        <br><br>

                        <section>
                            <h3>Parteneri</h3>
                            <ul class="logo-list">
                                <li><a href="http://aualeu.ro/" target="_blank"><img src="img/sustinatori/logo-aualeu.png" alt="Aualeu Teatru"></a></li>
                                <li><a href="https://www.facebook.com/scartloclejer" target="_blank"><img src="img/sustinatori/logo-scart.png" alt="Scârț Loc Lejer"></a></li>
                                <li><a href="http://www.lacapite.ro/" target="_blank"><img src="img/sustinatori/logo-capite.png" alt="La Căpițe"></a></li>
                                <li><a href="https://www.facebook.com/Aethernativ/" target="_blank"><img src="img/sustinatori/logo-aethernativ.png" alt="Aethernativ"></a></li>
                                <li><a href="http://calina.ro/" target="_blank"><img src="img/sustinatori/logo-galeria-calina.png" alt="Galeria Calina"></a></li>
                                <li><a href="http://www.plai.ro/ambasada/" target="_blank"><img src="img/sustinatori/logo-ambasada.png" alt="Ambasada Plai"></a></li>
                            </ul>
                        </section>

                        <br><br>

                        <div class="copyright">
                            <small>Copyright &copy; Antagon Festival 2015</small><br>
                            <small class="transparent">Site construit pe baza temei gratuite <a href="http://startbootstrap.com/template-overviews/grayscale/" target="_blank">Grayscale theme</a></small><br>
                        </div>
                    </div>
                </div>
            </div>
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
