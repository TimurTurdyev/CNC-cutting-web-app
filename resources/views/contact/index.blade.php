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
                        <form id="contactForm" action="{{url('contact')}}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="contact_name" placeholder="Your Name *">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="contact_email"  placeholder="Your E-Mail *">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="contact-form-control" name="contact_phone" placeholder="Your Phone *">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="contact_subject" class="contact-form-control custom-select" id="contactSubject">
                                            <option value="">Please Select</option>
                                            <option value="Accounts">Accounts</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Customer Support">Customer Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="captcha-input contact-form-control" name="contact_question" id="contactFormCaptchaInput" placeholder="Please Enter Code *">
                                        <span id="contactFormCaptchaSpan"></span>
                                        <input type="hidden" id="contactFormCaptchaVal">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="contact-form-control" name="contact_message" cols="30" rows="5" placeholder="Your Message *"></textarea>
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-alerts">
                                        <div class="empty-form" style="display: none;"><span>Please Fill Required Fields</span></div>
                                        <div class="empty-select" style="display: none;"><span>Please Select Subject</span></div>
                                        <div class="security-alert" style="display: none;"><span>Security code does not match !</span></div>
                                        <div class="email-invalid" style="display: none;"><span>Please enter a valid email.Exp(example@gmail.com)</span></div>
                                        <div class="phone-invalid" style="display: none;"><span>Please enter a valid phone number.Exp(200-444-7878)</span></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="primary-btn">
                                        <span>Send Message</span>
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
