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
        <title>Contact | Kevin Malekera</title>
        <!-- SEO -->
        <meta name="title" content="Kevin Malekera - Contact">
        <meta name="description" content="If you have a question or would like to hire me for a project, contact me today. I am also open to job offers for an internship for next academic year.">
        <meta name="keywords" content="kevin, malekera, Kevin Malekera, contact, vacancies, hire me, questions, contact form, message, internship, workplace learning">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Kevin Malekera">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Language meta tags -->
        <link rel="alternate" hreflang="en-gb" href="https://kevinmalekera.be/contact.php">
        <link rel="alternate" hreflang="en-us" href="https://kevinmalekera.be/contact.php">
        <link rel="alternate" hreflang="en" href="https://kevinmalekera.be/contact.php">
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
        <header class="overlay alt-header contact-header">
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
                        <li><a href="./resume.php" class="underline-hover-white">Resume</a></li>
                        <li><a href="./about.php" class="underline-hover-white">About</a></li>
                        <li><a href="./contact.php" class="active">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="parallax-content">
                <h1>Contact</h1>
                <p>Please contact me</p>
            </div>

            <div></div>
        </header>
        <!-- Main content -->
        <main>
            <!-- Questions section -->
            <section class="white-bg">
                <div class="fw-container">
                    <div id="questions-container" class="reveal fade-bottom">
                        <div class="question">
                            <h4>Vacancies</h4>
                            <p>
                            I am open for an internship position for next academic year, please feel free to send me a message if you have a space available.
                            </p>
                        </div>
                        <div class="question">
                            <h4>Hire me</h4>
                            <p>
                            In addition to my studies, I also do freelance work, please contact me if you would like to hire me for a project.
                            </p>
                        </div>
                        <div class="question">
                            <h4>Questions</h4>
                            <p>
                            If you have certain questions about the website or anything else, please feel free to send me a message and I will reply back as soon as possible.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact form section -->
            <section class="black-bg">
                <div class="fw-container">
                    <h3>I will contact you as soon as possible</h3>
                    <div class="line coral"></div>
                    <form method="post" action="./assets/php/contact-form.php" class="reveal fade-bottom">
                        <fieldset>
                            <div class="form-container">
                                <input id="name" type="text" name="name" placeholder="*Name" required>
                                <input id="email" type="email" name="email" placeholder="*Email" required>
                            </div>
                            <input id="topic" type="text" name="topic" placeholder="*Topic" required>
                            <textarea id="message" name="message" placeholder="*Message" required></textarea>
                        </fieldset>
                        <input id="send-message" type="submit" name="send-message" value="Send message">
                    </form>
                </div>
            </section>
            <!-- Include parallax -->
            <?php include_once(__DIR__ . '/includes/parallax.inc.php'); ?>
        </main>
        <!-- Include footer -->
        <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>
        <!-- Back to top js -->
        <script src="./assets/js/back-to-top.js" defer></script>
        <!-- jQuery -->
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <!-- Font awesome link -->
        <script src="https://kit.fontawesome.com/13ba0ff1d8.js" crossorigin="anonymous" defer></script>
        <!-- Fade-in script -->
        <script src="./assets/js/fade-in.js" defer></script>
        <!-- Preloader -->
        <script src="./assets/js/preloader.js"></script>
    </body>
</html>