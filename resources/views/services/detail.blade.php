@extends('welcome')
@section('title', 'Page Title')
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['service', 'Services'],
    ['service/' . $services->slug, $services->title],
    ['service/' . $services->slug . '/' . $details->slug, $details->name],
], 'h1' => $details->seo_h1, 'banner' => $services->banner ?? 'theme/img/bg/breadcrumb-img.jpg'])
    <!--// Services Detail Section Start //-->
    <section class="section" id="services-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-detail-img">
                        <img src="{{$details->image ?asset('storage/'. $details->image)
                        :'theme/img/bg/services-detail-img
                        .jpg'}}"
                             alt="{{$details->name}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 services-detail-inner-wrap">
                    <div class="services-detail-inner">
                        <h6>{{$services->title}}</h6>
                        <h2>{{$details->seo_h2}}</h2>
                        <p>
                            {{$details->body ?? '[..]'}}
                        </p>
                    </div>
                    <ul class="services-list">
                        @foreach($details->attributes as $attribute)
                            <li>
                                <h6><i class="fa fa-arrow-right"></i> {{$attribute->title}}</h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--// Services Detail Section End //-->

    <!--// Key Features Section Start //-->
    <section class="section pb-minus-70" id="key-features">
        <div class="container">
            <div class="row">
                @foreach($services->advantages as $advantage)
                    <div class="col-lg-6">
                        <div class="key-features-item">
                            <div class="icon">
                                <img src="{{$advantage->image ? asset('storage/'. 'storage/' . $advantage->image)
                                :'theme/img/bg/services-detail-icon-1.png'}}"
                                     alt="{{$advantage->title}}"
                                     class="img-fluid">
                            </div>
                            <div class="text">
                                <h5>{{$advantage->title}}</h5>
                                <p>
                                    {{$advantage->body}} [..]
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--// Key Features Section End //-->

    <!--// Faq Section Start //-->
    @if($details->faq_name)
        <section class="section" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading-left">
                            <h6>{{$details->faq_name}}</h6>
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 faq-accordion">
                        <div class="accordion" id="faqAccordion">
                            @foreach($details->questions as $question)
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading{{$loop->index}}">
                                        <a href="#" data-toggle="collapse" data-target="#collapse-{{$loop->index}}"
                                           aria-expanded="{{$loop->index < 1 ? 'true' : 'false'}}"
                                           aria-controls="collapse-{{$loop->index}}">
                                            {{$loop->index +1}}.{{$question->title}}
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                    <div id="collapse-{{$loop->index}}"
                                         class="collapse {{$loop->index < 1 ? 'show' : ''}}"
                                         aria-labelledby="heading{{$loop->index}}"
                                         data-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                {{$question->body}} [..]
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="{{$details->faq_image ? asset('storage/'. $details->faq_image)
                            :'theme/img/bg/faq-img
                            .jpg'}}"
                                 alt="{{$details->faq_name}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--// Faq Section End //-->
@endsection
