<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <!-- https://stackoverflow.com/questions/4192277/disable-horizontal-scroll-on-mobile-web -->
        <meta name="viewport" content="width=device-width, initial-scale = 0.86, maximum-scale=3.0, minimum-scale=0.86">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== REMIXICON ===== -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-512/git-branch-2336962-1982843.png" type="image/png">

        <title>Shayn Hacker #Web Design# Web Development #App Development </title>
    </head>
    <body>
        
        <div id="preloader"></div>

        <div id="container__prime">       
            <!-- <div id="blur"> -->

            <!--===== HEADER =====-->
            <header class="l-header">
                <nav class="nav bd-grid">
                    <div>
                        <a href="#" class="nav__logo">Shayn Hacker</a>
                    </div>

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#home" id="myDIV" class="nav__link active__menu">Home</a></li>
                            <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                            <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                            <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                            <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>
                </nav>
            </header>

            <main class="l-main">
                <!--===== HOME =====-->
                <section class="home" id="home">
                    <div class="home__container flex-container">
                

                        <div class="left">
                            <h1 class="home__title"><span>HELLO</span><br></h1>
                            <h1 class="home__title"><span>HOLA</span><br></h1>
                            <h1 class="home__title"><span>BONJOUR</span><br></h1>
                            <div class="home__scroll">
                                <a href="#about" class="home__scroll-link"><i class='bx bx-down-arrow-alt' ></i>Scroll down</a>
                            </div>
                        </div>

                        <div class="right bg-image">
                            <!-- <img src="assets/img/QR Code-pana (2).png" alt="" class="home__img"> -->
                        </div> 
                        <div class="mobile__container">
                            <img class="bg-mobile" src="assets/img/QR Code.png" alt="background mobile">
                                <h1 class="home__title__mobile"><span>HELLO</span><br></h1>
                                <h1 class="home__title__mobile"><span>HOLA</span><br></h1>
                                <h1 class="home__title__mobile"><span>BONJOUR</span><br></h1>
                            <div class="home__scroll__mobile">
                                <a href="#about" class="home__scroll-link__mobile"><i class='bx bx-down-arrow-alt' ></i>Scroll down</a>
                            </div>     
                        </div>
                    

                    </div>
                </section>
                
                <!--===== ABOUT =====-->
                <section class="about section" id="about">
                    <h2 class="section-title">About</h2>

                    <div class="about__container bd-grid">
                        <div class="about__img">
                            <img src="assets/img/shaynhacker.jpg" alt="">
                        </div>

                        <div>
                            <h2 class="about__subtitle">I am Shayn Hacker</h2>
                            <span class="about__profession">Full-Stack Web Developer</span>
                            <p class="about__text">Yes the last name is real and no I don't know how to hack computers 😂. The software developer skills were and continues to be acquired through self-education. My formal education is actually in business. The primary traits that define me are being eclectic and eccentric. </p>

                            <div class="about__social">
                                <a href="https://www.linkedin.com/in/shaynhacker/" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                                <a href="https://github.com/hacker-prime" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                                <a href="https://www.youtube.com/channel/UCW77gNd7iNks0G4-s-AZUPQ" class="about__social-icon"><i class='bx bxl-youtube' ></i></a>
                                <a href="https://medium.com/@shaynhacker" class="about__social-icon"><i class='bx bxl-medium' ></i></a>
                                <a href="https://www.poemhunter.com/shayn-hacker/poems/" class="about__social-icon"><i class='bx bx-book-open'></i></a>
                                                        
                            </div>
                        </div>
                    </div>
                </section>

                <!--===== SKILLS =====-->
                <section class="skills section" id="skills">
                    <h2 class="section-title">Skills</h2>

                    <div class="skills__container bd-grid">
                        <div class="skills__box">
                            <h3 class="skills__subtitle">Front-End Development</h3>
                            <span class="skills__name">Html</span>
                            <span class="skills__name">Css</span>
                            <span class="skills__name">Javascript</span>                       
                        </div>

                        <div class="skills__img">
                            <!-- <img src="assets/img/skill.jpg" alt=""> -->
                            <img src="https://images.ctfassets.net/hkpf2qd2vxgx/44oj2847JshvH8bktR7JyM/070c9adb7b012836066efe8ee53ae4a9/HTML_CSS_JS.gif" alt="">
                        </div>

                        <div class="skills__img skills__change__position__of__img__with__skills__box">
                            <!-- <img src="assets/img/skill.jpg" alt=""> -->
                            <img src="https://sharptutorial.com/wp-content/uploads/2018/12/databses.gif" alt="">
                        </div>

                        <div class="skills__box">
                            <h3 class="skills__subtitle">Back-End Development</h3>
                            <span class="skills__name">PHP</span>
                            <span class="skills__name">Wordpress</span>
                            <span class="skills__name">Laravel</span>           
                            <span class="skills__name">phpMyAdmin</span>                          
                        </div>

                        <div class="skills__img skills__change__position__of__img__with__skills__box2">
                            <!-- <img src="assets/img/skill.jpg" alt=""> -->
                            <img src="https://sharptutorial.com/wp-content/uploads/2018/12/databses.gif" alt="">
                        </div>

                    

                        <div class="skills__box">
                            <h3 class="skills__subtitle">Research Design & Methodology</h3>
                            <span class="skills__name">Literature Review</span>
                            <span class="skills__name">Survey</span>
                            <span class="skills__name">Feasibility Study</span>                       
                        </div>

                        <div class="skills__img">
                            <!-- <img src="assets/img/skill.jpg" alt=""> -->
                            <img src="https://i.gifer.com/74pZ.gif" alt="">
                        </div>

            
                    </div>
                </section>

                <!--===== PORTFOLIO =====-->
                <section class="portfolio section" id="portfolio">
                    <h2 class="section-title">Portfolio</h2>

                    <div class="portfolio__container bd-grid">
                        <div class="portfolio__img">
                            <img src="assets/img/bluedot.png" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>
                        <div  class="portfolio__img">
                            <img style="height:100%" src="assets/img/blueprint_architecture.jpg" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle3()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>
                        <div class="portfolio__img">
                            <img src="assets/img/phynix_logo.jpg" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle2()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>                  
                        <div class="portfolio__img">
                            <img style="height:100%" src="assets/img/web push notifications.png" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle4()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>
                        <div class="portfolio__img">
                            <img style="height:100%" src="assets/img/image_processing20191218-32115-1jvyouu.gif" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle5()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>
                        <div class="portfolio__img">
                            <img style="height:100%" src="https://pbs.twimg.com/profile_images/1258817039843516417/qdj2rNtA_400x400.jpg" alt="">

                            <div class="portfolio__link">
                                <a onclick="toggle6()" class="portfolio__link-name">View details</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!--===== CONTACT =====-->
                <section class="contact section" id="contact">

                    <h2  class="section-title contact__header">Contact</h2>

                    <?php include("contact/contact.php"); ?>

                </section>
            </main>

       
            <!--===== FOOTER =====-->
            <footer class="footer section">
                <div class="footer__container bd-grid">
                    <div class="footer__data">
                        <h2 class="footer__title">Shayn Hacker</h2>
                        <!-- <p class="footer__text">I'm Shayn Hacker and this is my personal website.</p> -->
                        <p class="footer__text">#Web Development</p>
                        <p class="footer__text">#App Development</p>
                        <p class="footer__text">#Research</p>
                    </div>

                    <div class="footer__data">
                        <h2 class="footer__title">EXPLORE</h2>
                        <ul>
                            <li><a href="#home" class="footer__link">Home</a></li>
                            <li><a href="#about" class="footer__link">About</a></li>
                            <li><a href="#skills" class="footer__link">Skills</a></li>
                            <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                            <li><a href="#Contact" class="footer__link">Contact</a></li>
                        </ul>
                    </div>
                    
                    <!-- <div class="footer__data">
                        <h2 class="footer__title">FOLLOW</h2>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                    </div> -->


                </div>
            </footer>

            <center>
                <div>
                    <!-- <img style="vertical-align:middle;display: inline-block;" src="https://i.ibb.co/r6Y2Xj3/jamaica-1.png"> -->
                    <!-- <h4 style="font-family: Lato, sans-serif;display: inline-block;">&#169; All Rights Reserved</h4> -->
                </div>
            </center>

        </div> 

        <div id="popup">
            <h2 class="popup_header">Bluedot Insights</h2>
            <p class="popup__body">
                Bluedot Insights is a research firm that creates, distributes, collects and analyzes questionnaires.                
            </p>
            <div style="text-align: center;">
            <a href="https://redesign.bluedotinsights.com/" class="closepopup">View</a>
            <a class="closepopup" onclick="toggle()">Close</a>

            </div>
        </div>


        <div id="popup2">
            <h2 class="popup_header">Phynix</h2>
            <p class="popup__body">
                A web application where you can request a taxi or delivery. 
            </p>
            <div style="text-align: center;">
            <a href="https://thephynix.com/" class="closepopup" >View</a>
            <a class="closepopup" onclick="toggle2()">Close</a>

            </div>
        </div>

        <div id="popup3">
            <h2 class="popup_header">CA Quality Development</h2>
            <p class="popup__body">
                A website that has an administration section where the owner can insert, update or delete text and pictures for each section of the website.
            </p>
            <div style="text-align: center;">
            <a href="https://www.caqualitydevelopment.com/" class="closepopup" >View</a>
            <a class="closepopup" onclick="toggle3()">Close</a>

            </div>
        </div>

      
     

        <div id="popup4">
            <h2 class="popup_header">Web Push Notification</h2>
            <p class="popup__body">
                A php library that allows one to be able to create or receive notifications through the browser.
            </p>
            <div style="text-align: center;">
            <a href="https://shaynhacker.com/web-push-php-example/src/" class="closepopup" >View</a>
            <a class="closepopup" onclick="toggle4()">Close</a>

            </div>
        </div>

        <div id="popup5">
            <h2 class="popup_header">Older Version Of This Website</h2>
            <p class="popup__body">
               The website loaded in each section such as portfolio and skills using ajax and did not have everything on a single page like this one.
            </p>
            <div style="text-align: center;">
            <a href="https://shaynhacker.com/older-version-of-this-website/" class="closepopup" >View</a>
            <a class="closepopup" onclick="toggle5()">Close</a>

            </div>
        </div>

        <div id="popup6">
            <h2 class="popup_header">Zoho Ticket Submission Through A Contact Form</h2>
            <p class="popup__body">
                This application allows you to submit a ticket to Zoho Desk through a php contact form. This is achieved using the Zoho API. 
            </p>
            <div style="text-align: center;">
            <a href="https://shaynhacker.com/web-push-php-example/src/" class="closepopup" >View</a>
            <a class="closepopup" onclick="toggle6()">Close</a>

            </div>
        </div>

        <img id="top-page" src="https://image.flaticon.com/icons/png/512/992/992534.png" alt="Top" style="display: block;">
        <!-- <img id="top-page" src="https://svgshare.com/i/LW3.sv" alt="Top" style="display: block;"> -->
        <!-- https://image.flaticon.com/icons/png/512/992/992534.png -->


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>