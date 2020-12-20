@extends('welcome')
@section('title', setting('site.title'))
@section('description', setting('site.description'))
@section('content')
    <!--// Hero Section Start //-->
    @if($banner = $page->banners('home')->first())
        <section class="hero-section" id="home" data-bg-image-path="{{asset('storage/' . $banner->image)}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 col-md-10">
                        <div class="hero-inner">
                            {!! $banner->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--// Hero Section End //-->

    <!--// About Section Start //-->
    @if($banner = $page->banners('home-about')->first())
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('storage/'.$banner->image)}}" alt="{{$banner->title}}" class="img-fluid">
                            <a href="https://www.youtube.com/watch?v={{$banner->video}}" title="{{$banner->title}}"
                               class="video-btn">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 about-inner-wrap">
                        {!! $banner->description !!}
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--// About Section End //-->

    <!--// Services Section Start //-->
    @if($service = $page->service())
        <section class="section bg-light-grey pb-minus-70" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>{{$service->name}}</h6>
                            <h2>{{$service->seo_h1}}</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="services-carousel">
                    @foreach($page->services() as $service)
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
                    @endforeach
                </div>
            </div>
        </section>
    @endif
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
    @if($banner = $page->banners('home-skills')->first())
        <section class="section" id="skills">
            <div class="skils-bg" data-bg-image-path="{{asset('storage/'.$banner->image)}}"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 skills-inner-wrap">
                        {!! $banner->description !!}
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--// Skills Section End //-->

    <!--// Latest Projects Section Start //-->
    @if($details = $page->detailsLatest(5))
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
                    @foreach($details as $detail)
                        <div class="item">
                            <div class="latest-project-item">
                                <div class="portfolio-item-img">
                                    <img src="{{asset('storage/'.$detail->image)}}" alt="{{$detail->name}}"
                                         class="img-fluid
                                portfolio-img">
                                    <div class="portfolio-buttons">
                                        <a href="{{asset('storage/'.$detail->image)}}"
                                           class="portfolio-zoom-link"><span></span><span></span></a>
                                    </div>
                                </div>
                                <div class="block-btn">
                                    <a href="{{url('service/'.$detail->category->slug.'/'.$detail->slug)}}" title="Read
                                More"
                                       class="primary-btn">
                                        <span>{{$detail->name}}</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
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
@endsection