@extends('welcome')
@section('title', $page->seo_title)
@section('description', $page->seo_description)
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['contact', $page->name],
], 'h1' => $page->seo_h1, 'banner' => $page->image ?? ''])
    <!--// Contact Info Section Start //-->
    <section class="section">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-item">
                        <div class="icon">
                            <img src="theme/img/bg/contact-info-icon-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5>Address:</h5>
                            <p>
                                {{setting('site.address')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-item">
                        <div class="icon">
                            <img src="theme/img/bg/contact-info-icon-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5>Email:</h5>
                            <p>{{setting('site.email')}}
                                <br>
                                {{setting('site.phone')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb={{setting('site.map')}}" allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 contact-form-wrap">
                    <div class="contact-form">
                        <h5 class="inner-header-title">Get in Touch</h5>
                        <form id="contactForm" action="{{url('contact', 'send')}}" method="post"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="name"
                                               placeholder="Your Name *" value="{{ old('name') }}">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="email"
                                               placeholder="Your E-Mail *" value="{{ old('email') }}">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="phone"
                                               placeholder="Your Phone *" value="{{ old('phone') }}">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="contact-form-control" name="message_text" cols="30" rows="5"
                                                  placeholder="Your Message *">{{ old('message_text') }}</textarea>
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-alerts">
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="empty-form"><span>{{ $error }}</span></div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="primary-btn">
                                        <span>Отправить</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Contact Info Section End //-->
@endsection
