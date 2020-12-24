@extends('welcome')
@section('title', $page->seo_title)
@section('description', $page->seo_description)
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['service', $page->name],
], 'h1' => $page->seo_h1, 'banner' => $page->image ?? ''])
    <!--//Services Section Start //-->
    <section class="section bg-light-grey pb-minus-70" id="services-page">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="services-item">
                            @if($service->image)
                                <div class="icon">
                                    <img src="{{asset('storage/'.$service->image)}}"
                                         alt="{{$service->title}}"
                                         class="img-fluid">
                                </div>
                            @endif
                            <div class="text">
                                <h2>{{$loop->index+1}}</h2>
                                <h5>{{$service->seo_h1}}</h5>
                                <p>
                                    {{mb_substr($service->meta_description, 0, 100)}}
                                </p>
                            </div>
                            <ul class="list">
                                @foreach($service->tags as $tag)
                                    <li>
                                        <h6>{{$tag->name}}</h6>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="block-btn">
                                <a href="{{url('service/' . $service->slug)}}" title="Read More" class="primary-btn">
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
    <!--//Services Section End //-->

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
                        <div class="price-value" data-bg-image-path="img/bg/pricing-table-img-1.jpg">
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
                        <div class="price-value" data-bg-image-path="img/bg/pricing-table-img-2.jpg">
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
                        <div class="price-value" data-bg-image-path="img/bg/pricing-table-img-3.jpg">
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
                                <img src="img/testimonial/testimonial-img-1.jpg" alt="Testimonial image"
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
                                <img src="img/testimonial/testimonial-img-2.jpg" alt="Testimonial image"
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
                                <img src="img/testimonial/testimonial-img-3.jpg" alt="Testimonial image"
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
@endsection