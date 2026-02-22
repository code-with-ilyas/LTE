<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>LIFE TIME EARNINGS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/LTE (2).png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/LTE (2).png" alt="Life Time Earnings LTE" style="height: 600px; width: auto;">

            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#portfolio">Client Rewards</a></li>
                    <li><a href="#team">Our Team</a></li>

                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}">Log in</a>
                    </li>

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">


        <section id="hero" class="hero section dark-background">

            <img src="assets/img/hero-bg.png"
                alt=""
                data-aos="fade-in"
                style="width:100%; height:120vh; object-fit:cover;">

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">SMART BINARY NETWORK SOLUTION</h2>
                <p class="text-center mt-3" style="max-width: 750px; margin: 0 auto;">
                    <span style="display:inline-block; margin-left: 60px;">
                        Calculate commissions instantly and scale your business
                        with our advanced Binary Compensation System.
                    </span>
                </p>
                <!-- <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div> -->
            </div>

        </section>


        <section id="about" class="about section">


            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="container">

                <div class="row gy-4">


                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <h3>Building Sustainable Digital Income Opportunities Worldwide</h3>

                        <img src="assets/img/services.jpg" class="img-fluid rounded-4 mb-4" alt="Life Time Earnings">

                        <p>
                            Life Time Earnings (LTE) is a forward-thinking digital network platform designed to empower individuals with structured income opportunities. Our system is built on transparency, smart growth strategies, and long-term sustainability.
                        </p>

                        <p>
                            We focus on helping members build strong networks, achieve balanced team growth, and unlock performance-based rewards. Through innovation and strategic planning, LTE creates an environment where effort translates into consistent earning potential.
                        </p>

                    </div>


                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

                        <div class="content ps-0 ps-lg-5">

                            <p class="fst-italic">
                                At LTE, we believe financial growth should be structured, scalable, and rewarding for those who commit to building strong networks.
                            </p>

                            <ul>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Structured binary reward system designed for balanced team growth.</span>
                                </li>

                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Performance-based bonuses that encourage leadership and long-term engagement.</span>
                                </li>

                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Transparent tracking system ensuring clarity, accountability, and measurable progress.</span>
                                </li>
                            </ul>

                            <p>
                                Our mission is to create a reliable ecosystem where individuals can expand their network, strengthen partnerships, and develop sustainable income streams for the future.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="LTE Growth">

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>


        <section id="services" class="services section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Featured Services<br></p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Binary Network Setup</h3>
                                </a>
                                <p>Life Time Earnings (LTE) configures your binary network for optimized growth and balanced structure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Real-Time Earnings Tracking</h3>
                                </a>
                                <p>Track your network commissions instantly with LTE’s intuitive analytics and reporting tools.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/working-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Secure Payment Integration</h3>
                                </a>
                                <p>LTE ensures safe and fast withdrawals, integrating trusted payment gateways for your commissions.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section id="services-2" class="services-2 section light-background">


            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>CHECK OUR SERVICES</p>
            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-briefcase icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Binary Network Setup</a></h4>
                                <p class="description">Life Time Earnings (LTE) designs and configures your binary network for optimized member growth and structure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Real-Time Earnings Tracking</a></h4>
                                <p class="description">Monitor your network performance and track commissions in real-time with LTE’s powerful analytics dashboard.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Commission Management</a></h4>
                                <p class="description">LTE ensures accurate calculation and automatic distribution of binary commissions across your network.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-binoculars icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Network Analytics</a></h4>
                                <p class="description">Analyze member growth, performance, and weak points in your binary tree using LTE’s advanced reporting tools.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Automated Notifications</a></h4>
                                <p class="description">Keep your network engaged with automatic alerts and updates about commissions, tasks, and system activity.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Secure Payment Integration</a></h4>
                                <p class="description">Life Time Earnings (LTE) integrates safe and fast payment solutions for smooth withdrawals and commission transfers.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="portfolio" class="portfolio section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Rewards</h2>
                <p>CHECK OUR REWARDS LIST</p>
            </div>

            <div class="container">
                <div class="row align-items-start" data-aos="fade-up" data-aos-delay="200">


                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">

                        <div class="shadow rounded overflow-hidden text-center">

                            <img src="assets/img/portfolio/ilyas.jpeg"
                                alt="Rewards Image"
                                style="width: 600px; height: 800px; object-fit: cover; border-radius: 10px;">


                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12">

                        <div class="ps-lg-4">

                            <h3 class="fw-bold text-uppercase mb-3"
                                style="letter-spacing: 2px; color: #222;">
                                Binary System Rewards
                            </h3>

                            <div style="width: 70px; height: 3px; background: #d4af37; margin-bottom: 25px;"></div>

                            <p style="line-height: 1.8; color: #666;">
                                Our elite reward structure is engineered to maximize your earning
                                potential. As your network expands and both legs remain balanced,
                                you unlock premium bonuses and exclusive lifestyle incentives.
                            </p>


                            <div class="mb-3 p-3 rounded shadow-sm"
                                style="background-color: rgba(212,175,55,0.08); border-left: 4px solid #d4af37;">
                                <strong style="color:#222;">💰 Direct Referral Bonus</strong>
                                <p class="mb-0 small" style="color:#666;">
                                    Earn instant commission for every successful direct referral.
                                </p>
                            </div>

                            <div class="mb-3 p-3 rounded shadow-sm"
                                style="background-color: rgba(212,175,55,0.08); border-left: 4px solid #d4af37;">
                                <strong style="color:#222;">📈 Pairing Bonus</strong>
                                <p class="mb-0 small" style="color:#666;">
                                    Get rewarded when both teams achieve perfect balance.
                                </p>
                            </div>

                            <div class="mb-3 p-3 rounded shadow-sm"
                                style="background-color: rgba(212,175,55,0.08); border-left: 4px solid #d4af37;">
                                <strong style="color:#222;">🎯 Daily Matching Rewards</strong>
                                <p class="mb-0 small" style="color:#666;">
                                    Receive daily performance-based bonuses from your network.
                                </p>
                            </div>

                            <div class="mb-3 p-3 rounded shadow-sm"
                                style="background-color: rgba(212,175,55,0.08); border-left: 4px solid #d4af37;">
                                <strong style="color:#222;">🏆 Rank Advancement Bonus</strong>
                                <p class="mb-0 small" style="color:#666;">
                                    Unlock higher income tiers as you lead and grow your team.
                                </p>
                            </div>

                            <div class="mb-3 p-3 rounded shadow-sm"
                                style="background-color: rgba(212,175,55,0.08); border-left: 4px solid #d4af37;">
                                <strong style="color:#222;">💎 Exclusive Incentives</strong>
                                <p class="mb-0 small" style="color:#666;">
                                    Qualify for luxury gifts, travel experiences, and lifestyle upgrades.
                                </p>
                            </div>

                            <p class="mt-4 fw-semibold" style="color:#d4af37;">
                                Build today. Earn for a lifetime.
                            </p>

                        </div>

                    </div>


                </div>

            </div>
            </div>

        </section>


        <section id="team" class="team section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>CHECK OUR TEAM</p>
            </div>

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Ali Khan</h4>
                                <span>CEO - Life Time Earnings (LTE)</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Fatima Riaz</h4>
                                <span>Product Manager - Binary System</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Hassan Malik</h4>
                                <span>CTO - Life Time Earnings (LTE)</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>


    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Life Time Earnings (LTE)</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p><strong>Country:</strong> Pakistan</p>
                        <p><strong>City & ZIP:</strong> Islamabad, 50000</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>0349-7871912</p>
                        <p><strong>Email:</strong> <span>net3ilyas@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of Service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Binary Network Setup</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Real-Time Earnings Tracking</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Commission Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Secure Payment Integration</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Analytics & Reporting</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest updates about Life Time Earnings (LTE) products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form">
                            <input type="email" name="email" placeholder="Your Email">
                            <input type="submit" value="Subscribe">
                        </div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Life Time Earnings (LTE)</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Muhammad Ilyas</a> | Distributed by <a href="https://themewagon.com/">IT HOUSE</a>
            </div>
        </div>

    </footer>


    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <div id="preloader"></div>


    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>