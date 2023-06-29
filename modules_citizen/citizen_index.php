<?php
session_start();

include '../components/connection.php';
include '../components/functions.php';

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- google fonts link  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- bootstrap link  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/citizen_index.css">
</head>

<body>
    <!-- Admin Header -->
    <?php
    include '../components/header_citizen.php';
    ?>

    <!-- Home section starts -->
    <section class="dashboard">
        <h1 class="heading">Home</h1>
        <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-50" src="../img/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="../img/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="../img/slide3.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Home section ends -->

    <!-- Services section starts  -->
    <section class="services mt-5" id="services">
        <h2 class="lead">Healthcare Services</h2>

        <div class="box-container container">
            <div class="box">
                <img src="../img/service01.png" alt="">
                <h3>Medical Consultation</h3>
                <p>Free checkups are provided for the residents</p>
            </div>

            <div class="box">
                <img src="../img/service02.png" alt="">
                <h3>Dental care</h3>
                <p>Free checkups are provided for the residents</p>
            </div>

            <div class="box">
                <img src="../img/service03.png" alt="">
                <h3>Nutritional support</h3>
                <p>Provides inpatient consultation for all aspects of nutrition support</p>
            </div>

            <div class="box">
                <img src="../img/service03.png" alt="">
                <h3>Preventive care</h3>
                <p>Free checkups, and patient counseling to prevent illnesses, disease, or other health problems</p>
            </div>

            <div class="box">
                <img src="../img/service03.png" alt="">
                <h3>Pharmaceutical care</h3>
                <p>Free Pharmaceutical Care to optimize the patient's health-related quality of life</p>
            </div>

            <div class="box">
                <img src="../img/service03.png" alt="">
                <h3>Medical Assistance Program (MAP)</h3>
                <p>free medicine program for indigents</p>
            </div>
        </div>
    </section>
    <!-- Services section ends  -->

    <!-- Guidelines -->
    <!-- -->
    <section class="services-block block">
        <div class="container">
            <div class="block-introduction">
                <h2 class="block-title" style="font-size: 4rem;">STOP THE SPREAD OF <span class="emphasize">GERMS</span>
                </h2>
            </div>
            <div class="services-block row">
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="400">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/distance.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Practice the one meter social distancing</h3>
                    </ul>
                </div>
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/sneezing.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Cover your cough or sneeze with a tissue then throw the
                        tissue in the trash</h3>
                    </ul>
                </div>
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/disinfect.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Clean and disinfect frequently touched objects and surfaces</h3>
                    </ul>
                </div>
            </div>
            <div class="services-block row">
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="1200">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/no-touch.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Avoid touching your eyes, nose and mouth</h3>
                    </ul>
                </div>
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="2000">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/quarantine.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Stay home when you are sick except to get medical care</h3>

                    </ul>
                </div>
                <div class="col-sm-4" data-aos="flip-left" data-aos-duration="2400">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/wash-your-hands.png">
                            </picture>
                        </li>
                        <h3 class="services-txt mt-4">Wash your hands often with soap and water for at least 20 seconds
                        </h3>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Guidelines End -->

    <!-- Kalinga Features  -->
    <section class="features-block block" id="features">
        <div class="container">
            <div class="block-introduction">
                <h2 class="block-title" style="font-size: 4rem;"><span class="emphasize">Kalinga</span> Features</h2>
            </div>

            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <div class="features">
                        <div class="features--item" data-aos="fade-right" data-aos-duration="400">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/patient-information.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>Patient Information</h3>
                                <p>Access and update of the Citizen <span class="emphasize">Records</span></p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="800">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/medical-notes.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>Medical Notes</h3>
                                <p>Keep track of your patient's latest <span class="emphasize"> Medical Condition</span>
                                    anytime, anywhere.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1200">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/patient-images.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>QR Code Modules</h3>
                                <p>Quick and easy access of informations on the <span class="emphasize">Citizen</span>
                                    and for each patient.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1600">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/schedule.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>Calendar</h3>
                                <p>Keep track of the weekly and daily <span class="emphasize">Events</span> on the healt
                                    center</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2000"
                            style="margin-bottom: 0;">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/payments.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>Family List </h3>
                                <p>Keep track of your patient <span class="emphasize">Cash</span> and <span
                                        class="emphasize">Installment</span> payments.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2400"
                            style="margin-bottom: 0;">
                            <div class="img-block">
                                <img src="https://klinika.ph/klinika/images/features/reports.svg"
                                    alt="Klinika - Clinic Management System for Doctors">
                            </div>
                            <div class="txt-block">
                                <h3>Queueing</h3>
                                <p>Generate <span class="emphasize">Income</span> and <span
                                        class="emphasize">Expenses</span> report in an instant.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5" data-aos="fade-left" data-aos-duration="1200">
                    <img src="../img/Doctor-rafiki.svg" alt="Klinika - Clinic Management System for Doctors">
                </div>
            </div>
        </div>
    </section>

    <!-- Kalinga Features End-->

    <!--Parallax-->
    <style>
        .parallax {
            /* The image used */
            background-image: url("../img/logo1.png");

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <div class="parallax"></div>
    <!-- Container element -->

    <!-- About section starts  -->
    <section class="services" id="services">
        <h2 class="lead">About Us</h2>

        <div class="container">
            <div class="row min-vh-100 align-items-center text-center text-md-left">
                <div class="col-md-6 pr-md-5">
                    <img src="../img/home_mission.png" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 mission">
                    <h1><span>Mission</span></h1>
                    <p>Providing health care services to the community particularly the poor and vulnerable groups
                        (lactating mothers, malnourished children, school children, pregnant mothers, etc.) so that they
                        can contribute actively, productively and participate meaningfully in community life, practicing
                        healthy lifestyles.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row min-vh-100 align-items-center text-center text-md-left">
                <div class="col-md-6 pr-md-5">
                    <img src="../img/home_vision.png" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 vision">
                    <h1><span>Vision</span></h1>
                    <p>A united, cooperative and highly professional staff of health care delivery workers whose focus
                        and passion is to help the community become a conducive, healthful and productive environment
                        using the most modern technology and health care delivery systems to respond to the needs of its
                        members, thereby making the CHO a model office that is respected, trusted and recognized by the
                        officials and loved by the community.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- About section ends  -->


    <!-- footer section starts  -->
    <div class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>586-4836</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Makabayan St., Nangka, Marikina City.</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>08:00 AM to 05:00 PM</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>nangka.health.center@gmail.com</p>
            </div>
        </div>
    </div>
    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>