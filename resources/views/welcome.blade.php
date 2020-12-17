<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corcota - Business Corporate Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corcota - Business Corporate Template</title>
    <!--// Boostrap v4 //-->
    <link rel="stylesheet" href="theme/vendor/css/bootstrap.min.css">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="theme/vendor/css/magnific.popup.min.css">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="theme/vendor/css/animate.min.css">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="theme/vendor/css/owl.carousel.min.css">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="theme/vendor/css/owl.carousel.default.min.css">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="theme/fonts/font_awesome/css/all.css">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="theme/css/style.css">
</head>
<body>

<!--// Page Wrapper Start //-->
<div class="page-wrapper" data-scroll-index="0">
    <!--// Header Start //-->
    <header class="header" id="header">
        <div id="navbar-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8 nav-info-wrap">
                        <div class="nav-info-box">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:corcotaofice@example.com">
                                <span>corcotaoffice@example.com</span>
                            </a>
                        </div>
                        <div class="nav-info-box">
                            <i class="fa fa-map-marker"></i>
                            <span>3107 Bartlett Avenue Southfield, MI 48075</span>
                        </div>
                    </div>
                    <div class="col-md-4 nav-social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="nav-menu-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" title="Home" href="index.html">
                        <img src="theme/img/bg/logo_black.png" alt="Logo White" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar"
                            aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                    </button>
                    <button class="search-btn-mobile" data-toggle="modal" data-target="#headerSearchBar"><i class="fa fa-search"></i></button>
                    <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="homeDropdownMenu" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                    <a class="dropdown-item" href="index-1.html">Home Default</a>
                                    <a class="dropdown-item" href="index-2.html">Home Slider</a>
                                    <a class="dropdown-item" href="index-3.html">Home Particles</a>
                                    <a class="dropdown-item" href="index-4.html">Home Video</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdownMenu" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdownMenu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="services.html">Services</a>
                                    <a class="dropdown-item" href="services-detail.html">Services Detail</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdownMenu" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Portfolio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="portfolioDropdownMenu">
                                    <a class="dropdown-item" href="portfolio-grid.html">Portfolio Grid</a>
                                    <a class="dropdown-item" href="portfolio-masonry.html">Portfolio Masonry</a>
                                    <a class="dropdown-item" href="portfolio-single.html">Portfolio Single</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                    <a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a>
                                    <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="languageDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="languageDropdownMenu">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Arabic</a>
                                </div>
                            </li>
                            <li class="nav-item d-flex align-items-center search-btn-resp">
                                <a class="nav-link" data-toggle="modal" data-target="#headerSearchBar" href="#"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                <a href="contact-us.html" title="Read More" class="primary-btn">
                                    <span>Get a Quote</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--// Header End  //-->

    <!--// Main Area Start //-->
    <main class="main-area">

        <!--// Hero Section Start //-->
        <section class="hero-section" id="home" data-bg-image-path="theme/img/bg/bg-hero.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 col-md-10">
                        <div class="hero-inner">
                            <h6>special offer for our members 25% discount</h6>
                            <h1>Dou you want success in <span>your job</span> anymore?</h1>
                            <p>
                                It's difficult to find examples of lorem ipsum in
                                use before Letraset made it popular as a dummy text in the 1960s.
                            </p>
                            <div class="hero-btn">
                                <a href="about-us.html" title="Read More" class="primary-btn">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="contact-us.html" title="Read More" class="secondary-btn">
                                    <span>Contact Us</span>
                                    <i class="fa fa-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Hero Section End //-->

        <!--// About Section Start //-->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="theme/img/bg/about-img.jpg" alt="about image" class="img-fluid">
                            <a href="https://www.youtube.com/watch?v=_2LLXnUdUIc" title="Youtube Video" class="video-btn">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 about-inner-wrap">
                        <div class="about-inner">
                            <h6>About Us</h6>
                            <h2>We work on unique design factors</h2>
                            <p>
                                It's difficult to find examples of lorem ipsum in use before Letraset made it
                                popular as a dummy text in the 1960s, although McClintock says he remembers coming
                                across the lorem ipsum passage in a book of old metal type samples.
                            </p>
                        </div>
                        <ul class="about-list">
                            <li>
                                <div class="icon">
                                    <img src="theme/img/bg/about-icon-1.png" alt="about icon">
                                </div>
                                <div class="text">
                                    <h5>12 Years Experince</h5>
                                    <p>
                                        It's difficult to find examples of lorem ipsum in use before Letraset made it
                                        popular as a dummy text..
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="theme/img/bg/about-icon-2.png" alt="about icon">
                                </div>
                                <div class="text">
                                    <h5>Unique Tips & Design</h5>
                                    <p>
                                        It's difficult to find examples of lorem ipsum in use before Letraset made it
                                        popular as a dummy text..
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="about-us.html" title="Read More" class="primary-btn">
                            <span>Read More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--// About Section End //-->

        <!--// Services Section Start //-->
        <section class="section bg-light-grey pb-minus-70" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>Our Services</h6>
                            <h2>What We Do</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="services-carousel">
                    <div class="item">
                        <div class="services-item">
                            <div class="icon">
                                <img src="theme/img/bg/services-icon-1.png" alt="Services icon" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>01</h2>
                                <h5>Web Design</h5>
                                <p>
                                    It's difficult to find examples of lorem ipsum in use before Letraset made it
                                    popular as a dummy text..
                                </p>
                            </div>
                            <ul class="list">
                                <li>
                                    <h6>Full Responsive</h6>
                                </li>
                                <li>
                                    <h6>Unique Design</h6>
                                </li>
                            </ul>
                            <div class="block-btn">
                                <a href="services-detail.html" title="Read More" class="primary-btn">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="services-item">
                            <div class="icon">
                                <img src="theme/img/bg/services-icon-2.png" alt="Services icon" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>02</h2>
                                <h5>Seo Optimization</h5>
                                <p>
                                    It's difficult to find examples of lorem ipsum in use before Letraset made it
                                    popular as a dummy text..
                                </p>
                            </div>
                            <ul class="list">
                                <li>
                                    <h6>Keyword Research</h6>
                                </li>
                                <li>
                                    <h6>Pagespeed Optimize</h6>
                                </li>
                            </ul>
                            <div class="block-btn">
                                <a href="services-detail.html" title="Read More" class="primary-btn">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="services-item">
                            <div class="icon">
                                <img src="theme/img/bg/services-icon-3.png" alt="Services icon" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>03</h2>
                                <h5>Web Development</h5>
                                <p>
                                    It's difficult to find examples of lorem ipsum in use before Letraset made it
                                    popular as a dummy text..
                                </p>
                            </div>
                            <ul class="list">
                                <li>
                                    <h6>Php7 & Laravel</h6>
                                </li>
                                <li>
                                    <h6>WordPress Plugin</h6>
                                </li>
                            </ul>
                            <div class="block-btn">
                                <a href="services-detail.html" title="Read More" class="primary-btn">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="services-item">
                            <div class="icon">
                                <img src="theme/img/bg/services-icon-4.png" alt="Services icon" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>04</h2>
                                <h5>Brand Design</h5>
                                <p>
                                    It's difficult to find examples of lorem ipsum in use before Letraset made it
                                    popular as a dummy text..
                                </p>
                            </div>
                            <ul class="list">
                                <li>
                                    <h6>Mockup Design</h6>
                                </li>
                                <li>
                                    <h6>Logo Design</h6>
                                </li>
                            </ul>
                            <div class="block-btn">
                                <a href="services-detail.html" title="Read More" class="primary-btn">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Services Section End //-->

        <!--// Work Process Section Start //-->
        <section class="section pb-minus-70" id="work-process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="section-heading-center">
                            <h6>Work Process</h6>
                            <h2>How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="work-process-item">
                            <div class="img">
                                <img src="theme/img/bg/work-process-img-1.jpg" alt="Work Process image"
                                     class="img-fluid">
                                <span>01</span>
                            </div>
                            <div class="text">
                                <h6>Thinking</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="work-process-item">
                            <div class="img">
                                <img src="theme/img/bg/work-process-img-2.jpg" alt="Work Process image"
                                     class="img-fluid">
                                <span>02</span>
                            </div>
                            <div class="text">
                                <h6>Research</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="work-process-item">
                            <div class="img">
                                <img src="theme/img/bg/work-process-img-3.jpg" alt="Work Process image"
                                     class="img-fluid">
                                <span>03</span>
                            </div>
                            <div class="text">
                                <h6>Wireframe</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="work-process-item">
                            <div class="img">
                                <img src="theme/img/bg/work-process-img-4.jpg" alt="Work Process image"
                                     class="img-fluid">
                                <span>04</span>
                            </div>
                            <div class="text">
                                <h6>Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Work Process Section End //-->

        <!--// Skills Section Start //-->
        <section class="section" id="skills">
            <div class="skils-bg" data-bg-image-path="theme/img/bg/skills-bg-img.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 skills-inner-wrap">
                        <div class="skills-inner">
                            <h6>Our Skills</h6>
                            <h2>We have been doing your work diligently for years.</h2>
                            <p>
                                It's difficult to find examples of lorem ipsum in use before Letraset made it
                                popular as a dummy text in the 1960s, although McClintock says he remembers coming
                                across the lorem ipsum passage in a book of old metal type samples.
                            </p>
                        </div>
                        <div class="skills-progress-wrap">
                            <div class="skills-item">
                                <div class="skills-item-text">
                                    <h6>Coding Skills<span class="skill-percent"></span></h6>
                                </div>
                                <div class="skills-progress-bar">
                                    <div class="skills-progress-value slideInLeft wow" data-percent="85" data-wow-delay="0.2s"></div>
                                </div>
                            </div>
                            <div class="skills-item">
                                <div class="skills-item-text">
                                    <h6>Design Skills<span class="skill-percent"></span></h6>
                                </div>
                                <div class="skills-progress-bar">
                                    <div class="skills-progress-value slideInLeft wow" data-percent="95" data-wow-delay="0.2s"></div>
                                </div>
                            </div>
                            <div class="skills-item">
                                <div class="skills-item-text">
                                    <h6>Marketing Skills<span class="skill-percent"></span></h6>
                                </div>
                                <div class="skills-progress-bar">
                                    <div class="skills-progress-value slideInLeft wow" data-percent="90" data-wow-delay="0.2s"></div>
                                </div>
                            </div>
                            <div class="skills-item">
                                <div class="skills-item-text">
                                    <h6>Social Media Skills<span class="skill-percent"></span></h6>
                                </div>
                                <div class="skills-progress-bar">
                                    <div class="skills-progress-value slideInLeft wow" data-percent="75" data-wow-delay="0.2s"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Skills Section End //-->

        <!--// Latest Projects Section Start //-->
        <section class="section" id="latest-projects">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>Latest Projects</h6>
                            <h2>Our Works</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="projects-carousel">
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-1.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-1.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Burger Box Mockup</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-2.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-2.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Coffee Mockup</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-3.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-3.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Coffee Mockup</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-4.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-4.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Business Book Mockup</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-5.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-5.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Business Card Mockup</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="theme/img/portfolio/portfolio-img-6.jpg" alt="Portfolio Img"
                                     class="img-fluid
                                portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="img/portfolio/portfolio-img-6.jpg" class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="portfolio-single.html" title="Read More" class="primary-btn">
                                    <span>Brand Paper Design</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Latest Projects Section End //-->

        <!--// Our Team Section Start //-->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>Team</h6>
                            <h2>Meet Our Team</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="team-carousel">
                    <div class="item">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="theme/img/team/team-img-1.jpg" alt="Portfolio Img" class="img-fluid
                                portfolio-img">
                            </div>
                            <div class="team-detail">
                                <div class="text">
                                    <h6>Dellon Thomas</h6>
                                    <span>Graphic Designer</span>
                                </div>
                                <div class="team-social">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="theme/img/team/team-img-2.jpg" alt="Portfolio Img" class="img-fluid
                                portfolio-img">
                            </div>
                            <div class="team-detail">
                                <div class="text">
                                    <h6>Gustavo Fring</h6>
                                    <span>Web Designer</span>
                                </div>
                                <div class="team-social">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="theme/img/team/team-img-3.jpg" alt="Portfolio Img" class="img-fluid
                                portfolio-img">
                            </div>
                            <div class="team-detail">
                                <div class="text">
                                    <h6>Andrea Piacquadio</h6>
                                    <span>UI Designer</span>
                                </div>
                                <div class="team-social">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="theme/img/team/team-img-4.jpg" alt="Portfolio Img" class="img-fluid
                                portfolio-img">
                            </div>
                            <div class="team-detail">
                                <div class="text">
                                    <h6>Fabian Victor</h6>
                                    <span>Project Supervisor</span>
                                </div>
                                <div class="team-social">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Our Team Section End //-->

        <!--// Counters Section Start //-->
        <section class="section pb-minus-70" id="counters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 counter-item">
                        <div class="counter-body">
                            <div class="top">
                                <h2 class="counter">2300</h2>
                            </div>
                            <div class="text">
                                <h5>Happy Customer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 counter-item">
                        <div class="counter-body">
                            <div class="top">
                                <h2 class="counter">1600</h2>
                            </div>
                            <div class="text">
                                <h5>Awards Won</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 counter-item">
                        <div class="counter-body">
                            <div class="top">
                                <h2 class="counter">1950</h2>
                            </div>
                            <div class="text">
                                <h5>Project Complete</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 counter-item">
                        <div class="counter-body">
                            <div class="top">
                                <h2 class="counter">1750</h2>
                            </div>
                            <div class="text">
                                <h5>Cup of Coffee</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Counters Section End //-->

        <!--// Testimonial Section Start //-->
        <section class="section bg-light-grey pb-minus-70" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading-left">
                            <h6>Our Clients</h6>
                            <h2>What our Clients Say ?</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="testimonials-carousel">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="theme/img/testimonial/testimonial-img-1.jpg" alt="Testimonial image"
                                         class="img-fluid">
                                </div>
                                <div class="text">
                                    <h5>Inzmam Khan</h5>
                                    <h6>Envato Customer</h6>
                                </div>
                            </div>
                            <div class="body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout.
                                </p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="theme/img/testimonial/testimonial-img-2.jpg" alt="Testimonial image"
                                         class="img-fluid">
                                </div>
                                <div class="text">
                                    <h5>Matheus Bertelli</h5>
                                    <h6>Envato Customer</h6>
                                </div>
                            </div>
                            <div class="body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout.
                                </p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="theme/img/testimonial/testimonial-img-3.jpg" alt="Testimonial image"
                                         class="img-fluid">
                                </div>
                                <div class="text">
                                    <h5>Eduardo Ordone</h5>
                                    <h6>Envato Customer</h6>
                                </div>
                            </div>
                            <div class="body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout.
                                </p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Testimonial Section End //-->

        <!--// Our Pricing Section Start //-->
        <section class="section pb-minus-70" id="our-pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading-left">
                            <h6>Pricing</h6>
                            <h2>Our Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="price-table">
                            <div class="price-text">
                                <h5>Basic Plan</h5>
                            </div>
                            <div class="price-value" data-bg-image-path="theme/img/bg/pricing-table-img-1.jpg">
                                <b>$39</b>
                                <span>/Monthly</span>
                            </div>
                            <ul class="price-list">
                                <li>1 Gb Diskspace</li>
                                <li>10 Gb Bandwith</li>
                                <li>2 Email Accounts</li>
                                <li>WordPress Installs</li>
                                <li>Customer Support</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="primary-btn">
                                    <span>Select Plan</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-table recommend">
                            <div class="price-text">
                                <h5>Popular Plan</h5>
                            </div>
                            <div class="price-value" data-bg-image-path="theme/img/bg/pricing-table-img-2.jpg">
                                <b>$59</b>
                                <span>/Monthly</span>
                            </div>
                            <ul class="price-list">
                                <li>10 Gb Diskspace</li>
                                <li>100 Gb Bandwith</li>
                                <li>4 Email Accounts</li>
                                <li>WordPress Installs</li>
                                <li>Customer Support</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="primary-btn">
                                    <span>Select Plan</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-table">
                            <div class="price-text">
                                <h5>Ultimate Plan</h5>
                            </div>
                            <div class="price-value" data-bg-image-path="theme/img/bg/pricing-table-img-3.jpg">
                                <b>$89</b>
                                <span>/Monthly</span>
                            </div>
                            <ul class="price-list">
                                <li>1 Tb Diskspace</li>
                                <li>1 Tb Bandwith</li>
                                <li>100 Email Accounts</li>
                                <li>WordPress Installs</li>
                                <li>Customer Support</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="primary-btn">
                                    <span>Select Plan</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Our Pricing Section End //-->

        <!--// Latest Blog Section Start //-->
        <section class="section bg-light-grey pb-minus-70" id="latest-blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>Blog Posts</h6>
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="blog-carousel">
                    <div class="item">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-single.html">
                                    <img src="theme/img/blog/blog-img-1.jpg" alt="Blog image" class="img-fluid">
                                </a>
                                <span class="blog-date">02 October</span>
                            </div>
                            <div class="blog-body">
                                <div class="blog-meta">
                                    <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                    <a href="#"><span><i class="far fa-bookmark"></i>Business</span></a>
                                </div>
                                <h5>
                                    <a href="blog-single.html">
                                        Business and marketing techniques
                                    </a>
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted [..]
                                </p>
                                <a href="blog-single.html" class="blog-link">
                                    Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-single.html">
                                    <img src="theme/img/blog/blog-img-2.jpg" alt="Blog image" class="img-fluid">
                                </a>
                                <span class="blog-date">10 November</span>
                            </div>
                            <div class="blog-body">
                                <div class="blog-meta">
                                    <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                    <a href="#"><span><i class="far fa-bookmark"></i>Design</span></a>
                                </div>
                                <h5>
                                    <a href="blog-single.html">
                                        Steps to be successful at work
                                    </a>
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted [..]
                                </p>
                                <a href="blog-single.html" class="blog-link">
                                    Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-single.html">
                                    <img src="theme/img/blog/blog-img-3.jpg" alt="Blog image" class="img-fluid">
                                </a>
                                <span class="blog-date">22 September</span>
                            </div>
                            <div class="blog-body">
                                <div class="blog-meta">
                                    <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                    <a href="#"><span><i class="far fa-bookmark"></i>Blog</span></a>
                                </div>
                                <h5>
                                    <a href="blog-single.html">
                                        Things to consider in content writing
                                    </a>
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted [..]
                                </p>
                                <a href="blog-single.html" class="blog-link">
                                    Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-single.html">
                                    <img src="theme/img/blog/blog-img-4.jpg" alt="Blog image" class="img-fluid">
                                </a>
                                <span class="blog-date">17 October</span>
                            </div>
                            <div class="blog-body">
                                <div class="blog-meta">
                                    <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                    <a href="#"><span><i class="far fa-bookmark"></i>Design</span></a>
                                </div>
                                <h5>
                                    <a href="blog-single.html">
                                        Reach the secrets of unique design
                                    </a>
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted [..]
                                </p>
                                <a href="blog-single.html" class="blog-link">
                                    Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Latest Blog Section End //-->

        <!--// Footer Start //-->
        <footer class="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <form action="index-1.html" method="GET">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">
                                <div class="newsletter-form-group">
                                    <input type="email" class="newsletter-form-control" autocomplete="off" placeholder="Subscribe To Newsletter" name="newsletter-email" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="newsletter-form-group">
                                    <button class="primary-btn newsletter-btn">
                                        <span>Subscribe Now</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 footer-widget-resp">
                            <div class="footer-widget">
                                <h6 class="footer-title">About Us</h6>
                                <p class="footer-desc">
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable
                                </p>
                                <div class="footer-social-links">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 footer-widget-resp">
                            <div class="footer-widget footer-widget-pl">
                                <h6 class="footer-title">Usefull Links</h6>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Latest Blogs</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Services Detail</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 footer-widget-resp">
                            <div class="footer-widget">
                                <h6 class="footer-title">Contact Info</h6>
                                <div class="footer-contact-info-wrap">
                                    <ul class="footer-contact-info-list">
                                        <li>
                                            <h6>Address:</h6>
                                            <p>
                                                3107 Bartlett <br>Avenue Southfield, MI 48075
                                            </p>
                                        </li>
                                        <li>
                                            <h6>E-Mail & Phone:</h6>
                                            <div class="text">
                                                <p>(423) 391-7144</p>
                                                <p>corcotaoffice@example.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p class="copyright-text">© Copyright 2020. Designed By Aip Themes</p>
                </div>
            </div>
        </footer>
        <!--// Footer End //-->

    </main>
    <!--// Main Area End //-->

    <a href="#" data-scroll-goto="0"  class="scroll-top-btn">
        <i class="fa fa-arrow-up"></i>
    </a>
    <!--// .scroll-top-btn // -->

    <div id="preloader-wrap">
        <div class="preloader-inner">
            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <!--// Preloader // -->

</div>
<!--// Page Wrapper End //-->

<div class="modal fade custom-modal" tabindex="-1" id="headerSearchBar" role="dialog" aria-labelledby="headerSearchBar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Search A Keyword..</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="popup-form-group">
                        <span class="fa fa-search"></span>
                        <input type="text" class="popup-form-control" autocomplete="off" required autofocus id="search-name" />
                        <button type="submit" class="searchbar-btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--// #headerSearchBar //-->

<!--// JQuery //-->
<script src="theme/vendor/js/jquery.min.js"></script>
<!--// Images Loaded //-->
<script src="theme/vendor/js/images.loaded.min.js"></script>
<!--// Magnific Popup //-->
<script src="theme/vendor/js/magnific.popup.min.js"></script>
<!--// Popper Popup //-->
<script src="theme/vendor/js/popper.min.js"></script>
<!--// Bootstrap //-->
<script src="theme/vendor/js/bootstrap.min.js"></script>
<!--// Waypoint Js //-->
<script src="theme/vendor/js/waypoint.min.js"></script>
<!--// Counter Up Js //-->
<script src="theme/vendor/js/counter.up.min.js"></script>
<!--// JQuery Easing Functions //-->
<script src="theme/vendor/js/jquery.easing.min.js"></script>
<!--// Owl Carousel //-->
<script src="theme/vendor/js/owl.carousel.min.js"></script>
<!--// Wow JS //-->
<script src="theme/vendor/js/wow.min.js"></script>
<!--// ScrollIt JS //-->
<script src="theme/vendor/js/scrollit.min.js"></script>
<!--// Isotope Gallery JS //-->
<script src="theme/vendor/js/isotope.min.js"></script>
<!--// Main Js //-->
<script src="theme/js/main.js"></script>
</body>
</html>
