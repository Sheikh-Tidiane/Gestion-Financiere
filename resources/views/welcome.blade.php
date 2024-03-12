<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BIENVENUE DANS NOTRE SITE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetswelcome/img/favicon.png" rel="icon">
    <link href="assetswelcome/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetswelcome/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetswelcome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetswelcome/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetswelcome/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assetswelcome/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetswelcome/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetswelcome/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetswelcome/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#"><span>GèreTonCash</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assetswelcome/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @if (Route::has('login'))
                    @auth('front')
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    @else
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Se connecter</a></li>
                    @if (Route::has('register'))
                    <li><a class="nav-link scrollto" href="{{ route('pack.index') }}">S'Inscrire</a></li>

                    @endif
                    @endauth
                    @endif
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Bienvenue sur votre plateforme <span>GèreTonCash !</span></h1>
                        <h2>Transférez, déposez, retirez, gérez vos comptes courants et épargne en toute simplicité.</h2>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" class="btn-get-started scrollto">Commencons</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assetswelcome/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                        <h3>Plus besoin de vous déplacer !</h3>
                        <p>Avec Geretoncash, effectuez toutes vos transactions financières en ligne :</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Transferts d'argent</a></h4>
                            <p class="description">En toute sécurité</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Dépôts et retraits</a></h4>
                            <p class="description">Avec frais cadeaux</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Gestion de vos comptes courants et d'épargne</a></h4>
                            <p class="description">Naviguer avec tranquilité</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="11718" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients Satisfait</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Heure de retour</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Employés</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assetswelcome/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Chez Gèretoncash, la sécurité de votre argent est notre priorité absolue.</h3>
                        <p class="fst-italic">
                            C'est pourquoi nous avons mis en place des mesures de sécurité strictes pour protéger vos données et vos transactions :
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Cryptage des données.</li>
                            <li><i class="bi bi-check"></i> Authentification forte.</li>
                            <li><i class="bi bi-check"></i> Surveillance des transactions.</li>
                            <li><i class="bi bi-check"></i> Assurance des dépôts.
                            </li>
                        </ul>
                        <p>
                            Avec Geretoncash, vous pouvez avoir confiance que votre argent est en sécurité.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="assetswelcome/img/details-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Chez Gèretoncash, vos besoin notre priorité.</h3>
                        <p class="fst-italic">
                            C'est pourquoi nous nous engageons à vous offrir un service client d'excellence :
                        </p>
                        <p>
                            Une équipe d'experts à votre écoute : Nos conseillers sont disponibles pour répondre à vos questions et vous aider à trouver les solutions qui vous conviennent le mieux.
                        </p>
                        <p>
                            Un service réactif et efficace : Nous traitons vos demandes dans les meilleurs délais et vous offrons des solutions rapides et adaptées.
                        </p>
                        <p>
                            Une communication transparente : Nous vous informons clairement de nos services, de nos tarifs et de nos conditions générales.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assetswelcome/img/details-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5" data-aos="fade-up">
                        <h3>L'interface de Geretoncash a été conçue pour être simple et intuitive, même pour les utilisateurs les moins
                            expérimentés.</h3>
                        <p>En quelques clics seulement, vous pouvez :</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Effectuer des transferts d'argent.</li>
                            <li><i class="bi bi-check"></i> Dépôser et retirer de l'argent.</li>
                            <li><i class="bi bi-check"></i> Gérer vos comptes courants et d'épargne.</li>
                            <li><i class="bi bi-check"></i> Consulter vos transactions.</li>
                            <li><i class="bi bi-check"></i> Contacter le service client.</li>
                        </ul>
                        <p>
                            De plus, l'interface est disponible en plusieurs langues pour vous faciliter la vie.
                        </p>
                        <p>
                            L'interface de Geretoncash est simple et intuitive, même pour les utilisateurs les moins expérimentés.
                        </p>
                    </div>
                </div>


                <!-- ======= Gallery Section ======= -->
                <section id="gallery" class="gallery">
                    <div class="container">

                        <div class="section-title" data-aos="fade-up">
                            <h2>Gallery</h2>
                            <p>Découbrez notre gallery</p>
                        </div>

                        <div class="row g-0" data-aos="fade-left">

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                                    <a href="assetswelcome/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                                    <a href="assetswelcome/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                                    <a href="assetswelcome/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                                    <a href="assetswelcome/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                                    <a href="assetswelcome/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                                    <a href="assetswelcome/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                                    <a href="assetswelcome/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                                    <a href="assetswelcome/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                                        <img src="assetswelcome/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Gallery Section -->

                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assetswelcome/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>Omar Sy</h3>
                                        <h4>Développeur informatique</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Omar est un développeur talentueux et créatif. Il est toujours à la recherche de nouvelles technologies pour améliorer
                                            nos services et rendre l'expérience client plus fluide.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assetswelcome/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                        <h3>Awa Diop</h3>
                                        <h4>Relation clientèle</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Awa est une experte en matière de relation client et de gestion des comptes. Elle est toujours à l'écoute des besoins de
                                            ses clients et s'efforce de leur proposer des solutions personnalisées.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assetswelcome/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                        <h3>Fatoumata Ndiaye</h3>
                                        <h4>Responsable marketing</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Fatoumata est une experte en marketing digital et en communication. Elle est responsable de la création et de la mise en
                                            œuvre de notre stratégie marketing.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </section><!-- End Testimonials Section -->

                <!-- ======= Team Section ======= -->
                <section id="team" class="team">
                    <div class="container">

                        <div class="section-title" data-aos="fade-up">
                            <h2>Team</h2>
                            <p>NOS MEILLEURS EMPLOYES</p>
                        </div>

                        <div class="row" data-aos="fade-left">

                            <div class="col-lg-3 col-md-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="assetswelcome/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="assetswelcome/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Sarah Jhonson</h4>
                                        <span>Product Manager</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="assetswelcome/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="assetswelcome/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Team Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container">

                        <div class="section-title" data-aos="fade-up">
                            <h2>Contact</h2>
                            <p>Contactez nous</p>
                        </div>

                        <div class="row">

                            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Localisation:</h4>
                                        <p>SHAM, Dakar / AVenue Cheikh Anta</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>Madiop@cheikh.com</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Tel:</h4>
                                        <p>+221 77 168 15 26</p>
                                        <p>+221 77 432 19 82</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>GèreTonCash</h3>
                            <p class="pb-3"><em>Qu'attendez vous? Rejoignez nous sans plus tarder.</em>
                            </p>
                            <p>
                                SHAM <br>
                                AVenue cheikh anta diop, Dakar<br><br>
                                <strong>Phone:</strong> 77 432 19 82<br>
                                <strong>Email:</strong> Madiop@Cheikh.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Important</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Condition</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Transferts</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Retraits</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Depots</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Epargner</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Courant</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Nos Newsletters</h4>
                        <p>Rejoignez nos newsletter sans plus tardez !</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MadiopT</span></strong>. Tout pour vous plaire !
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">nous</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assetswelcome/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assetswelcome/vendor/aos/aos.js"></script>
    <script src="assetswelcome/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetswelcome/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetswelcome/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetswelcome/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetswelcome/js/main.js"></script>

</body>

</html>
