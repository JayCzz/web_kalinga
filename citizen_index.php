<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/citizen_index.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
    <title>Home</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/dp.jpg" alt="" class="ava">
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <div class="logo">
                <img src="img/dp.jpg" alt="" class="ava">
            </div>

            <ul>
                <li>
                    <a href="" class="active">Home</a>
                </li>
                <li>
                    <a href="schedule_admin">Calendar</a>
                </li>
                <li>
                    <a href="">Notifications</a>
                </li>
                <li>
                    <a href="admin_qr_generator.php">QR Generator</a>
                </li>
                <li>
                    <a href="admin_qr_scanner.php">QR Scanner</a>
                </li>
                <li>
                    <a href="">SOS</a>
                </li>
                <li class="logout">
                    <a href="logout.php" class="nav-link">
                        <i data-feather="log-out"></i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <label for="nav_check" class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </header>
    <div class="generator">
        <div class="header-inner text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1>Baranggay Nangka<br> <span>Health Center</span></h1>
                    <p class="lead">KALINISAN • KANLURAN • KAPAYAPAAN</p>
                    <br>
                    <br>
                    <br>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Learn More</a>
                        <a href="#" class="btn btn-light-blue">Sign In</a>
                    </div>
                </div>
                <div class="header-inner-right">
                    <img src="img/brgylogo.png">
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>Mission</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg">Providing health care services to the community particularly the poor and vulnerable groups (lactating mothers, malnourished children, school children, pregnant mothers, etc.) so that they can contribute actively, productively and participate meaningfully in community life, practicing healthy lifestyles.</p>
                        <a href="#" class="btn btn-white">Learn More</a>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="img/volunteer.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!--Parallax-->
        <style>
            .parallax {
                /* The image used */
                background-image: url("img/logo1.png");

                /* Set a specific height */
                min-height: 500px;

                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

            }
        </style>

        <!-- Container element -->
        <div class="parallax"></div>


        <!-- services section -->
        <section id="services" class="services py">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="lead">Baranggay Healthcare Services</h2>
                    <p class="text text-lg">A perfect way to show your hospital services</p>
                    <div class="line-art flex">
                        <div></div>
                        <img src="img/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class="services-inner text-center grid">
                    <article class="service-item">
                        <div class="icon">
                            <img src="img/service-icon-1.png">
                        </div>
                        <h3>Cardio Monitoring</h3>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus doloribus facilis velit, assumenda tempora quas mollitia quos voluptatibus consequatur!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="img/service-icon-2.png">
                        </div>
                        <h3>Medical Treatment</h3>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus doloribus facilis velit, assumenda tempora quas mollitia quos voluptatibus consequatur!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="img/service-icon-3.png">
                        </div>
                        <h3>Emergency Help</h3>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus doloribus facilis velit, assumenda tempora quas mollitia quos voluptatibus consequatur!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="img/service-icon-4.png">
                        </div>
                        <h3>First Aid</h3>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus doloribus facilis velit, assumenda tempora quas mollitia quos voluptatibus consequatur!</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section -->
        <section id="banner-two" class="banner-two text-center">
            <div class="container grid">
                <div class="banner-two-left">
                    <img src="img/center.jpg">
                </div>
                <div class="banner-two-right">
                    <p class="lead text-white">When you are young and healthy, it never occurs to you that in a single second your whole life could change.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Learn More</a>
                        <a href="#" class="btn btn-light-blue">Sign In</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- doctors section -->
        <section id="doc-panel" class="doc-panel py">
            <div class="container">
                <div class="section-head">
                    <h2>Our Doctor Panel</h2>
                </div>

                <div class="doc-panel-inner grid">
                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="img/doc-1.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">samuel goe</p>
                                <p class="text-lg">Medicine</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="img/doc-2.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">elizabeth ira</p>
                                <p class="text-lg">Cardiology</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="img/doc-3.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">tanya collins</p>
                                <p class="text-lg">Medicine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of doctors section -->

        <!-- package services section -->
        <section id="package-service" class="package-service py text-center">
            <div class="container">
                <div class="package-service-head text-white">
                    <h2>Healthcare Activites</h2>
                    <p class="text text-lg">Baranggay services</p>
                </div>
                <div class="package-service-inner grid">
                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Regular Case</h3>
                        <p class="text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Serious Case</h3>
                        <p class="text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Emergency Case</h3>
                        <p class="text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of package services section -->

        <!-- posts section -->
        <section id="posts" class="posts py">
            <div class="container">
                <div class="section-head">
                    <h2>Latest Post</h2>
                </div>
                <div class="posts-inner grid">
                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="img/post-1.jpg">
                        </div>
                        <div class="content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="img/post-2.jpg">
                        </div>
                        <div class="content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="img/post-3.jpg">
                        </div>
                        <div class="content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor voluptas eius recusandae sunt obcaecati esse facere cumque. Aliquid, cupiditate debitis.</p>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia ipsam, quis iure sed nulla.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->

        <!-- contact section -->
        <section id="contact" class="contact py">
            <div class="container grid">
                <div class="contact-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.7032426496485!2d121.10693571536962!3d14.67277517923629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b9a13e858605%3A0x4c325803dffea23!2sNangka%20Health%20Center%20(Marikina)!5e0!3m2!1sen!2sph!4v1676712796668!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Contact Us</h3>
                        <p class="text text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga.</p>
                    </div>
                    <form>
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-element">
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-element">
                            <textarea rows="5" placeholder="Your Message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <footer id="footer" class="footer text-center">
        <div class="container">
            <div class="footer-inner text-white py grid">
                <div class="footer-item">
                    <h3 class="footer-head">about us</h3>
                    <div class="icon">
                        <img src="img/brgylogo.png">
                    </div>
                    <p class="text text-md">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis saepe incidunt fugiat optio corporis ea!</p>
                    <address>
                        Medic Clinic <br>
                        69 Deerpark Rd, Mount Merrion <br>
                        Co. Dublin, A94 E9D3 <br>
                        Ireland
                    </address>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">tags</h3>
                    <ul class="tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">Quick Links</h3>
                    <ul>
                        <li><a href="#" class="text-white">Our Services</a></li>
                        <li><a href="#" class="text-white">Our Plan</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">make an appointment</h3>
                    <p class="text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, omnis.</p>
                    <ul class="appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>revomedic@gmail.com</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-links">
                <ul class="flex">
                    <li><a href="#" class="text-white flex"> <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="text-white flex"> <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="text-white flex"> <i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>