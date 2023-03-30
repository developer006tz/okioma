<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Okioma</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
<?php
session_start();

if (isset($_SESSION['response'])) {
    header('Content-Type: application/json');
    echo json_encode($_SESSION['response']);
    unset($_SESSION['response']);
} else {
    http_response_code(204);
}
?>

    <!-- TOP NAV -->
    <div class="top-nav" id="startsida">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> info@okioma.se</p>
                    <p> <i class='bx bxs-phone-call'></i> +46 760-680-110</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="img-logo">
                    <img class="img-fluid" width="100px" src="logo.gif" alt="company-logo">
                </div>
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#startsida">Startsida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#omoss">Om oss</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#varja-tjanster">Våra tjänster</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="boka-hjalp.php">Boka hjälp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bestall-en-soptunna">Beställ soptunna</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#reviews">Recensioner</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#sopkorg">sopkorg</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Kontakt</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Vi på Okioma.se är snabba</h6>
                        <h1 class="display-3 my-4">Vi är effektiva<br />och starka.</h1>
                        <a href="#" class="btn btn-brand">Komma igång</a>
                        <a href="boka-hjalp.php" class="btn btn-outline-light ms-3">Gå med oss</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Nar som helst, vad som helst och vart som helst. Xpresshelp!</h6>
                        <h1 class="display-3 my-4">Vi erbjuder avlastning i vardagssysslor <br />och tungt arbete</h1>
                        <a href="#" class="btn btn-brand">Komma igång</a>
                        <a href="boka-hjalp.php" class="btn btn-outline-light ms-3">Gå med oss</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- omoss -->
    <section id="omoss">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <img src="img/vectors/moving_b.gif" alt="">
                                <div class="ms-4">
                                    <h5>Flytthjälp och bohagsflytt</h5>
                                    <p>Vi är snabba, effektiva och starka. Vi har stor erfarenhet och kunskap om bohagsflytt </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/car.jpg" alt="">
                                <div class="ms-4">
                                    <h5>Transport och bud</h5>
                                    <p>Vi hjälper dig med allt från att bära och flytta till att transportera paket och hämta varor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/heavy-lifting.jpg" alt="">
                                <div class="ms-4">
                                    <h5>Bärhjälp</h5>
                                    <p>Vi är starka, snabba och effektiva när det kommer till tunga lyft. Vi hjälper dig att bära det du behöver.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" style="height:400px;" src="img/vectors/moving_b.gif" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    

    <section id="varja-tjanster" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Våra tjänster</h6>
                        <h1>Vad vi gör?</h1>
                        <p class="mx-auto">Vi erbjuder olika typer av tjänster såsom: flytt och transport, tunga lyft, rivning, VVS, byggjobb, sophantering,
                        städning, tvätt, dödsbo hantering, personaluthyrning, och matlagning. Vi är effektiva, starka och har erfarenhet inom
                        respektive område.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/vectors/moving_b.gif" alt="">
                        <h5>Flytthjälp och bohagsflytt</h5>
                        <p>Vi på orkarinte.se är snabba, effektiva och starka. Nyckeln till en lyckad flyttning är bra planering och rätt
                        inställning. Vi har flyttat många hem och har god erfarenhet och kunskap om bohagsflytt.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/waste-collection.jpg" alt="">
                        <h5>Grovsopor</h5>
                        <p>Grovavfall och grovsopor hämtar vi när som helst och var som helst. Vi är snabba, starka och effektiva. Boka bara en tid
                        med oss så hämtar vi dina sopor!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/car.jpg" alt="">
                        <h5>Transport och bud</h5>
                        <p>Behöver du hjälp att bära, flytta, eller transportera något? Vi hjälper dig med allt. Vi har budat paket, flyttat
                        kassaskåp och hämtat tallrikar till festen. Vi hämtar och lämnar det du vill!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/cleaning_.jpg" alt="">
                        <h5>Städhjälp</h5>
                        <p>Golvvård, lägenhetsstädning, kontorsstädning, grovstädning, fönsterputsning, butiksstädning, byggstädning,
                        trappstädning, flyttstädning, städning före eller efter fest med mera! Vi arbetar bland annat i skolor, butiker,
                        offentliga lokaler, idrottshallar, fritidsgårdar, matsalar. Vi gör även enstaka städningar, när du har haft fest eller
                        vill ha en storstädning.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/heavy-lifting.jpg" alt="">
                        <h5>Bärhjälp</h5>
                        <p>Vi är starka, snabba och effektiva! Vi hjälper dig att bära det du behöver hjälp med. Vi är riktigt bra när det kommer
                        till tunga lyft. Vi orkar allt!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/drilling.jpg" alt="">
                        <h5>Rivning</h5>
                        <p>Vi utför små som stora uppdrag inom betonghålstagning och rivning! Vi är starka och kan riva väggar och golv, samt ta ut
                        hela inredningar och köra dem till återvinningen. Vi hjälper till att riva vad som helst, när som helst!</p>
                    </div>
                </div>
<!-- new -->
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/plumbbing.jpg" alt="">
                        <h5>VVS</h5>
                        <p>
                        Vi har samarbeten med flera VVS-firmor så att du får rätt hjälp! Bästa av allt är att du slipper sköta kontakten med
                        firmorna, det gör vi åt dig!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/construction.jpg" alt="">
                        <h5>Byggarbeten</h5>
                        <p>
                        Behöver du bygga en vägg? Vi hjälper dig med allt inom byggarbeten. Vi utför allt från små reparationer till stora
                        renoveringsarbeten. Kontakta oss för mer information!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/laundry.jpg" alt="">
                        <h5>Tvätthjälp</h5>
                        <p>
                        Vi kan hämta din tvätt och köra den till tvätterier.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/cleaning_.jpg" alt="">
                        <h5>Dödsbon</h5>
                        <p>
                        Vi tar hand om hela eller delar av dödsbon. Vi kan hjälpa er att tömma dödsbon och städa hela hem. Vi kan även köpa
                        delar av dödsbon. Vi har stor erfarenhet av detta.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/rental.jpg" alt="">
                        <h5>Personaluthyrning</h5>
                        <p>
                        Är du i behov av extra eller tillfällig personal? Vi erbjuder uthyrning av personal när du behöver förstärkning eller
                        inte orkar. Vi har personal inom bygg, städning, administration och kontorstjänster.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/cooking.jpg" alt="">
                        <h5>Matlagning</h5>
                        <p>
                        Testa våra rätter från olika delar av världen i ditt eget kök. Du kanske har ett party eller vill överaska familjen. Vi
                        kan erbjuda afrikansk mat från Etiopien, Kenya, Tanzania. Vi kan även erbjudan mat från Kina, Japan, Thailand eller
                        Latinamerika. Vi kan hjälpa till att laga maten i ert kök samt att servera den.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--<section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Work</h6>
                        <h1>Successful projects</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project1.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project2.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project3.png" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project4.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project5.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
        </div>
    </section>-->

    <section id="bestall-en-soptunna">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Produkt</h6>
                        <h1>Beställ en soptunna</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="title">
                        <h3>Vi lämnar, ni fyller och vi hämtar</h3>
                    </div>
                    <div class="description">
                        <p>
                            Nu kan du sortera era grovsopor hemma eller på kontoret i lugn och ro! Vi kör ut en stor soptunna till er som ni själva
                            fyller. Det enda är att ni måste sortera soperna i svarta soppåsar efter avfallstyp. OBS Matavfall tar vi ej emot.
                        </p>
                        <p>Kostnadsfri levereans innanför tullarna. Utkörningsavgift på 300 kr tillkommer om vi behöver köra utanför tullarna.</p>
                        <p>
                            Betalning i förskott via Swish, kort eller banköverföring. Ni behåller soptunnan i två dagar innan vi kommer för att
                            hämta den. Förseningsavgift på 100 kr per dygn tillkommer efter två dagar om ni vill behålla soptunnan ytterligare.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="p-lg-5 col-12 row g-3">
                    
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Namn</label>
                            <input type="text" class="form-control" id="userName" aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">E-postadress</label>
                            <input type="text" class="form-control" id="userName" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="userName" class="form-label">Telefonnummer</label>
                            <input type="email" class="form-control" id="userName" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Startdadum</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Typ av hjälp</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Tid</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Org.nr / Person.nr (behövs vid faktura)</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Adress</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Meddelande</label>
                            <input type="text" name="" class="form-control" id="" rows="4">
                        </div>
                
                        <div class="col-12">
                            <button type="submit" class="btn btn-brand">Skicka</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>


    <section id="sopkorg">
        <div class="container">
            
            <div class="row justify-content-center">
                <img src="img/soptunna.png" class="img-fluid" alt="">
               
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Okioma<span class="dot">.</span></h4>
                        <p>Hitta oss på våra sociala medier-konton</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Upphovsrätt@2023. Alla rättigheter förbehållna</p>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12"
                                style="">
                                
                                    
                                    <div class="container-fluid">
                                    
                                    
                                        <div class="row justify-content-center g-3 my-4">
                                    
                                    
                                            <div class="g-3 justify-content-center mt-3">
                                                <h2>Kontaktinfo</h2>
                                            </div>
                                        </div> <!-- .et_pb_text -->
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <div class="email">
                                                    info@okioma.se
                                                </div>
                                                <div class="contacts">
                                                    +46 760-680-110
                                                </div>
                                            </div>
                                    
                                    
                                           <!--- <div class="col-sm">
                                                <p><strong>Stockholm<br>
                                                    </strong>Orkarinte.se<br>
                                                    Roslagsgatan 13<br>
                                                    113 55 Stockholm</p>
                                                <p><a href="mailto:info@orkarinte.se">info@orkarinte.se</a><br>
                                                    <a href="tel:+46704910273">070-491 02 73</a><br>
                                                    Jourtelefon<br>
                                                    <a href="tel:+46762169132">076-216 91 32</a>
                                                </p>
                                                <p><strong>Göteborg<br>
                                                    </strong><span class="author-wfxB0bIaXWOC link:mailto:goteborg@orkarinte.se author-wfxB0bIaXWOC link"><a
                                                            class="link-forced" href="mailto:goteborg@orkarinte.se" target="_blank"
                                                            rel="eplinks_hrefmailto:goteborg@orkarinte.se noopener">goteborg@orkarinte.se</a></span><span
                                                        class="author-wfxB0bIaXWOC"><br>
                                                    </span><a href="tel:+46765927532">076-592 75 32</a><br>
                                                    <span class="author-wfxB0bIaXWOC"><a href="tel:+46-762169132">076-216 91 32</a>&nbsp;</span>
                                                </p>
                                                <p><strong>Malmö<br>
                                                    </strong><span class="author-wfxB0bIaXWOC link:mailto:malmo@orkarinte.se author-wfxB0bIaXWOC link"><a
                                                            class="link-forced" href="mailto:malmo@orkarinte.se" target="_blank"
                                                            rel="eplinks_hrefmailto:malmo@orkarinte.se noopener">malmo@orkarinte.se</a></span><span
                                                        class="author-wfxB0bIaXWOC"><br>
                                                    </span><span class="author-wfxB0bIaXWOC"><a href="tel:+46765927532">076-592 75 32</a><br>
                                                    </span><span class="author-wfxB0bIaXWOC"><a href="tel:+46-762169132">076-216 91 32</a>&nbsp;</span></p>
                                            </div>-->
                                        </div> <!-- .et_pb_text -->
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form method="POST" action="send.php" class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Kontaktformulär</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">Namn</label>
                                        <input type="text" name="name" class="form-control"  id="name"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="username" class="form-label">Företag</label>
                                        <input type="text" name="username" class="form-control"  id="username"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email" class="form-label">E-postadress</label>
                                        <input type="email" name="email" class="form-control"  id="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone" class="form-label">Telefonnummer</label>
                                        <input type="text" name="phone" class="form-control"  id="phone"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="content" class="form-label">Meddelande</label>
                                        <textarea name="content"  class="form-control" id="content"  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Skicka</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>









    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
            const mailsent = urlParams.get('mailsent');

            // Display success message if URL contains "mailsent" parameter
            if (mailsent === 'true') {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Your message has been sent successfully.',
                });
            }

            // Handle form submission via AJAX
                // Check if a response is stored in the session
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'check_response.php');
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.onreadystatechange = () => {
                if (xhr.readyState !== XMLHttpRequest.DONE) return;
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    // Handle successful form submission
                    Swal.fire(
                        'Success!',
                        response.message,
                        'success'
                    );
                } else if (response.status === 'error') {
                    // Handle error
                    Swal.fire(
                        'Error',
                        response.message,
                        'error'
                    );
                }
            };
            xhr.send();
    </script>
    
</body>

</html>