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
        <!-- Tab title -->
        <title>Portfolio | Kevin Malekera</title>
        <!-- SEO -->
        <meta name="title" content="Kevin Malekera - My portfolio">
        <meta name="description" content="Here you can see all my realizations and projects. Click on a case to learn more about it.">
        <meta name="keywords" content="kevin, malekera, Kevin Malekera, portfolio, work, web, contact, case, websites, project, projects, web development">
        <meta name="robots" content="index, follow">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="Kevin Malekera">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Language meta tags -->
        <link rel="alternate" hreflang="en-gb" href="https://kevinmalekera.be/work.php">
        <link rel="alternate" hreflang="en-us" href="https://kevinmalekera.be/work.php">
        <link rel="alternate" hreflang="en" href="https://kevinmalekera.be/work.php">
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
        <header class="overlay alt-header work-header">
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
                        <li><a href="./work.php" class="active">Work</a></li>
                        <li><a href="./resume.php" class="underline-hover-white">Resume</a></li>
                        <li><a href="./about.php" class="underline-hover-white">About</a></li>
                        <li><a href="./contact.php" class="underline-hover-white">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="parallax-content">
                <h1>My portfolio</h1>
                <p>Below is a selection of my most recent projects</p>
            </div>
            
            <div></div>
        </header>
        <!-- Main content -->
        <main>
            <!-- Work introduction section -->
            <section class="white-bg">
                <div class="fw-container work-introduction">
                    <div class="reveal fade-bottom">
                        <h3>A digital designer specializing in web development</h3>
                        <div class="line grey"></div>
                        <p>
                        Trained in IT and graphic design, I specialize in web development. So my main realizations are website and web shop that I have made for clients or projects during my various apprenticeships with large companies. Feel free to take a look and click on a case that appeals to you so you can get more information about it and see my way of working. Each case has its own web page explaining the working process.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Work gallery section -->
            <section class="black-bg">
                <div class="fw-container">
                  <h3>All my completed accomplishments</h3>
                  <div class="line coral"></div>
                  <div class="portfolio-gallery-container reveal fade-bottom">
                    <!-- Portfolio navigation -->
                    <div class="items">
                      <span class="item active" data-name="all">All</span>
                      <span class="item" data-name="Web">Design</span>
                      <span class="item" data-name="Graphic">Development</span>
                      <!-- <span class="item" data-name="Photo">Photo</span>
                      <span class="item" data-name="Video">Video</span> -->
                    </div>
                    <!-- Portfolio images -->
                    <div class="gallery">
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/belcoast-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/sousvide-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/matemi-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/matisse-and-henri-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/jdb-engineering-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                      <div class="image" data-name="Web"><a href="./case/belcoast.php"><span><img src="./assets/media/vinum-et-plura-thumbnail.png" alt="Belcoast Holidays website mockup" loading="lazy"></span></a></div>
                    </div>
                  </div>
                </div>
            </section>
            
            <!-- Include alt parallax -->
            <?php include_once(__DIR__ . '/includes/parallax-alt.inc.php'); ?>
        </main>
        <!-- Include footer -->
        <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>
        <!-- Portfolio gallery -->
        <script src="./assets/js/portfolio-gallery.js" defer></script>
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