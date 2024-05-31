<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-H55DCDM7PL"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);} 
            gtag('js', new Date());

            gtag('config', 'G-H55DCDM7PL');
        </script>
        <!-- Title -->
        <title>Resume | Kevin Malekera</title>
        <!-- SEO -->
        <meta name="title" content="Kevin Malekera - Resume">
        <meta name="description" content="Here you can see my education and work experience. If you wish, you can download my resume.">
        <meta name="keywords" content="kevin malekera, kevin, malekera, cv, Curriculum vitae, resume, skills, education, work experience, it skills, soft skills, languages, html, css, javascript, php, mysql, wordpress, c#, adobe, illustrator, photoshop, premiere pro, indesign, lightroom, vives, university college, Sint-Jozefsinstituut, associate degree, cdd, creative digital design, Diploma, high school, networks & it, fhg, flow hospitality group, digital design, intern, Thomas More, Digital Experience Design">
        <meta name="robots" content="index, follow">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="author" content="Kevin Malekera">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Language meta tags -->
        <link rel="alternate" hreflang="en-gb" href="https://kevinmalekera.be/resume.php">
        <link rel="alternate" hreflang="en-us" href="https://kevinmalekera.be/resume.php">
        <link rel="alternate" hreflang="en" href="https://kevinmalekera.be/resume.php">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/media/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/media/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/media/favicon/favicon-16x16.png">
        <link rel="manifest" href="./assets/media/favicon/site.webmanifest">
        <link rel="mask-icon" href="./assets/media/favicon/safari-pinned-tab.svg" color="#000000">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#ffffff">
        <!-- CSS files -->
        <link rel="stylesheet" href="./assets/css/reset.css">
        <link rel="stylesheet" href="./assets/css/template.css">
        <link rel="stylesheet" href="./assets/css/screen.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Playfair Display Font -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Open Sans Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Include preloader -->
        <?php include_once(__DIR__ . '/includes/preloader.inc.php'); ?>
        <!-- Header -->
        <header class="overlay alt-header resume-header">
            <div id="navigation" class="fw-container">
                <h2><a href="./index.php" class="strikethrough" id="first-header"><b>Kevin</b> Malekera</a></h2>
                <h2><a href="./index.php" class="strikethrough" id="second-header"><b>K</b>M</a></h2>
                <!-- Hamburger menu -->
                <div class="menu-wrap">
                    <input type="checkbox" class="toggler">
                    <div class="hamburger"><div></div></div>
                    <div class="menu">
                        <div>
                            <div>
                                <ul>
                                    <li><a href="./work.php" class="underline-hover-white">Work</a></li>
                                    <li><a href="./resume.php" class="underline-hover-white">Resume</a></li>
                                    <li><a href="./about.php" class="underline-hover-white">About</a></li>
                                    <li><a href="./contact.php" class="underline-hover-white">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main navigation -->
                <nav>
                    <ul>
                        <li><a href="./work.php" class="underline-hover-white">Work</a></li>
                        <li><a href="./resume.php" class="active">Resume</a></li>
                        <li><a href="./about.php" class="underline-hover-white">About</a></li>
                        <li><a href="./contact.php" class="underline-hover-white">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="parallax-content">
                <h1>My resume</h1>
                <p>An in-depth overview of my skills, education and professional experience</p>
                <a href="./assets/media/resume-EN.pdf" class="button-coral" download="resume-KevinMalekera.pdf">Download CV</a>
            </div>

            <div></div>
        </header>
        <!-- Main content -->
        <main>
            <!-- Skills overview section -->
            <section class="white-bg">
                <div class="fw-container">
                    <h3>Overview of all my skills</h3>
                    <div class="line grey"></div>
                    <!-- Navigation -->
                    <ul class="skills-buttons reveal fade-bottom" id="toggle-skill">
                        <li><button class="underline-hover-black" id="it-skills-button" onclick="divVisibility('it-skills')">IT skills</button></li>
                        <li><button class="underline-hover-black" id="soft-skills-button" onclick="divVisibility('soft-skills')">Soft skills</button></li>
                        <li><button class="underline-hover-black" id="languages-button" onclick="divVisibility('languages')">Languages</button></li>
                    </ul>
                    <!-- IT skills -->
                    <ul class="skills-container reveal fade-bottom" id="it-skills">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>WordPress</li>
                        <li>MySQL</li>
                        <li>PHP</li>
                        <li>C#</li>
                        <li>Adobe Illustrator</li>
                        <li>Adobe Photoshop</li>
                        <li>Adobe InDesign</li>
                        <li>Adobe Premiere Pro</li>
                        <li>Adobe Lightroom CC</li>
                    </ul>
                    <!-- Soft skills -->
                    <ul class="skills-container reveal fade-bottom" id="soft-skills">
                        <li>Team player</li>
                        <li>Creative</li>
                        <li>Flexible</li>
                        <li>Communicative</li>
                        <li>Problem-solving</li>
                        <li>Stress resistant</li>
                    </ul>
                    <!-- Languages -->
                    <ul class="skills-container reveal fade-bottom" id="languages">
                        <li>Dutch</li>
                        <li>French</li>
                        <li>English</li>
                    </ul>
                </div>
            </section>
            <!-- Education & experience section -->
            <section class="black-bg">
                <div class="fw-container">
                    <h3>My education and work experience</h3>
                    <div class="line coral"></div>
                    <!-- Navigation -->
                    <ul class="work-buttons reveal fade-bottom" id="toggle-work">
                        <li><button class="underline-hover-white">Education</button></li>
                        <li><button class="underline-hover-white">Work experience</button></li>
                    </ul>
                    <!-- Education -->
                    <div class="work-education" id="education">
                        <!-- Thomas more row -->
                        <div class="work-row  reveal fade-bottom">
                            <h4><a href="https://www.wearexd.be/" target="_blank">Thomas More</a> University of Applied Sciences</h4>
                            <div class="work-description">
                                <h5>Bachelor Degree in Digital Experience Design</h5>
                                <h6>2023 - present</h6>
                                <p>
                                    XD is a professional bachelor's program consisting of three pillars: Design, Development & Communication.
                                    <br><br>
                                    In this program, we learn how intelligent websites and apps function and how to program them ourselves using CraftCMS, PHP, and JavaScript for web development, and React Native for mobile applications.
                                    <br><br>
                                    During lab courses, we work on major projects for external clients, which we then present as fully finished products to fellow students, teachers, and industry professionals.
                                    <br><br>
                                    In the final phase of the program, we specialize either as User Interaction Designer or Creative Application Developer.
                                </p>
                            </div>
                        </div>
                        <!-- Vives row -->
                        <div class="work-row  reveal fade-bottom">
                            <h4><a href="https://www.vives.be/nl/technology/creative-digital-design" target="_blank">Vives</a> University of Applied Sciences</h4>
                            <div class="work-description">
                                <h5>Associate Degree in Digital Design</h5>
                                <h6>2021 - 2023</h6>
                                <p>
                                    HTML, CSS and JavaScript to develop front-end websites. Interactively learn to handle a database in a DBMS tool by executing SQL commands, copying and processing the data to a website or web application via PHP. Setting up and managing WordPress website or a web shop.
                                    <br><br>
                                    Photoshop and Illustrator to shape visual content, basic graphic design skills. Photographic concepts, techniques and camera operation. Material then editing in Lightroom CC.
                                    <br><br>
                                    Basic concepts of audio/video and their operation, creating moving images following the rules of and mastering the camera. Material then editing in Premiere Pro. Techniques for the creation, optimization and analysis of new user applications in UX/UI Experience with Adobe XD.
                                    <br><br>
                                    Supporting skills:
                                    <br>
                                    Communication, Design thinking, Human skills, Digital marketing, Legal & security skills.
                                </p>
                            </div>
                        </div>
                        <!-- High School row -->
                        <div class="work-row reveal fade-bottom">
                            <h4><a href="https://www.sintjozefbrugge.be/studieaanbod/derde-graad/vijfde-jaar-en-zesde-jaar/netwerken-en-it-informaticabeheer/#content" target="_blank">Sint-Jozefsinstituut</a> Handel, Toerisme & IT</h4>
                            <div class="work-description">
                                <h5>High School Diploma in Networks & IT</h5>
                                <h6>2018 - 2020</h6>
                                <p>
                                    12 hours of applied computer science during the week, the emphasis was on managing and developing computer hardware and software.
                                    <br><br>
                                    In the computer systems and networks management section, we learned about PC hardware, installation and management of Windows 10 OS and Windows Server 2016, Network infrastructure and Linux server introduction.
                                    <br><br>
                                    In the software development section, the focus was on analyzing and developing software through Microsoft C# with Visual Studio Community. Database used for the applications was MySQL.
                                    <br><br>
                                    In terms of web development, we were given basic operations for the dynamic web pages through PHP & MySQL. The static web pages were created within Notepad++. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Experience -->
                    <div class="work-experience" id="experience">
                        <!-- lsDevign 2 row -->
                        <div class="work-row reveal fade-bottom">
                            <h4><a href="https://www.lsdevign.be/nl/" target="_blank">lsDevign</a></h4>
                            <div class="work-description">
                                <h5>UX/UI Designer</h5>
                                <h6>2023</h6>
                                <ul>
                                    <li>Bugs opsporen en oplossen op de C-Holidays website en de UX/UI van de site verbeteren.</li>
                                    <li>Live visuals voor de schermen binnen het hotel aanpassen, vluchtplan bewerken met Adobe designtools.</li>
                                    <li>Foto's en video's maken van de hotels, vakantiehuizen en sfeer foto's op het strand. Materiaal vervolgens bewerken met Adobe programma's voor op sociale media.</li>
                                    <li>Rebranding van de C-Holidays website naar Belcoast Holidays.</li>
                                    <li>SEO van de website verbeteren.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- lsDevign 1 row -->
                        <div class="work-row reveal fade-bottom">
                            <h4><a href="https://www.lsdevign.be/nl/" target="_blank">lsDevign</a></h4>
                            <div class="work-description">
                                <h5>UX/UI Design Intern</h5>
                                <h6>2023</h6>
                                <ul>
                                    <li>Bugs opsporen en oplossen op de C-Holidays website en de UX/UI van de site verbeteren.</li>
                                    <li>Live visuals voor de schermen binnen het hotel aanpassen, vluchtplan bewerken met Adobe designtools.</li>
                                    <li>Foto's en video's maken van de hotels, vakantiehuizen en sfeer foto's op het strand. Materiaal vervolgens bewerken met Adobe programma's voor op sociale media.</li>
                                    <li>Rebranding van de C-Holidays website naar Belcoast Holidays.</li>
                                    <li>SEO van de website verbeteren.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Digital Up row -->
                        <div class="work-row reveal fade-bottom">
                            <h4><a href="https://www.digitalup.be/" target="_blank">Digital Up</a></h4>
                            <div class="work-description">
                                <h5>Web Design Intern</h5>
                                <h6>2022</h6>
                                <ul>
                                    <li>Bugs opsporen en oplossen op de C-Holidays website en de UX/UI van de site verbeteren.</li>
                                    <li>Live visuals voor de schermen binnen het hotel aanpassen, vluchtplan bewerken met Adobe designtools.</li>
                                    <li>Foto's en video's maken van de hotels, vakantiehuizen en sfeer foto's op het strand. Materiaal vervolgens bewerken met Adobe programma's voor op sociale media.</li>
                                    <li>Rebranding van de C-Holidays website naar Belcoast Holidays.</li>
                                    <li>SEO van de website verbeteren.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- FHG row -->
                        <div class="work-row reveal fade-bottom">
                            <h4><a href="https://flowhospitalitygroup.be/" target="_blank">Flow Hospitality Group</a></h4>
                            <div class="work-description">
                                <h5>Digital Design Intern</h5>
                                <h6>2022</h6>
                                <ul>
                                    <li>Bugs opsporen en oplossen op de C-Holidays website en de UX/UI van de site verbeteren.</li>
                                    <li>Live visuals voor de schermen binnen het hotel aanpassen, vluchtplan bewerken met Adobe designtools.</li>
                                    <li>Foto's en video's maken van de hotels, vakantiehuizen en sfeer foto's op het strand. Materiaal vervolgens bewerken met Adobe programma's voor op sociale media.</li>
                                    <li>Rebranding van de C-Holidays website naar Belcoast Holidays.</li>
                                    <li>SEO van de website verbeteren.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Include parallax -->
            <?php include_once(__DIR__ . '/includes/parallax.inc.php'); ?>
        </main>
        <!-- Include footer -->
        <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

        <!-- Div-toggler script -->
        <script src="./assets/js/experience-toggler.js" defer></script>
        <script src="./assets/js/skills-toggler.js" defer></script>
        <!-- Back to top js -->
        <script src="./assets/js/back-to-top.js" defer></script>
        <!-- Font awesome link -->
        <script src="https://kit.fontawesome.com/13ba0ff1d8.js" crossorigin="anonymous" defer></script>
        <!-- jQuery script -->
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <!-- Fade-in script -->
        <script src="./assets/js/fade-in.js" defer></script>
        <!-- Preloader -->
        <script src="./assets/js/preloader.js"></script>
    </body>
</html>