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
            <a class="navbar-brand" href="index.php">
                <div class="img-logo">
                    <img class="img-fluid" src="logo.gif" alt="company-logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Startsida</a>
                    </li>
                    
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Kontakt</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-12 text-center">
                <h2 class="text-green">Boka hjälp</h2>
            </div>
        </div>
    </div>
    <!-- ABOUT -->
    <section id="about">
        
        <div class="container">
            
            <div class="row gy-4">
                <div class="col-lg-4 col-sm-12 bg-cover img-fluid" style="background-image: url(img/vectors/moving_.png); min-height:300px;">
                    
                </div>
                <div class="col-lg-8">
                    <form class="p-lg-5 col-12 row g-3">
                        <div>
                            <h1>Bokningsförfrågan</h1>
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Namn</label>
                            <input type="text" class="form-control"  id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">E-postadress</label>
                            <input type="text" class="form-control"  id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="userName" class="form-label">Telefonnummer</label>
                            <input type="email" class="form-control"  id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Startdadum</label>
                            <input type="text" name=""  class="form-control" id=""
                                rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Typ av hjälp</label>
                            <input type="text" name=""  class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Tid</label>
                            <input type="text" name=""  class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Org.nr / Person.nr (behövs vid faktura)</label>
                            <input type="text" name=""  class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Adress</label>
                            <input type="text" name=""  class="form-control" id="" rows="4">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Meddelande</label>
                            <input type="text" name=""  class="form-control" id="" rows="4">
                        </div>
        
                        <div class="col-12">
                            <button type="submit" class="btn btn-brand">Skicka</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->

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
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" 
                                            class="form-control" id="" rows="4">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
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
</body>

</html>