@extends('welcome')
@section('title', $services->seo_title)
@section('description', $services->seo_description)
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['service', 'Services'],
    ['service/' . $services->slug, $services->title],
], 'h1' => $services->seo_h1])
    <!--// Project Grid Section Start //-->
    <section class="section pb-minus-70" id="portfolio-grid">
        <div class="container">
            <div class="portolio-grid-header">
                <div class="section-heading-left">
                    <h6>{{$services->title}}</h6>
                    <h2>{{$services->seo_h2}}</h2>
                </div>
                <div class="gallery-filter">
                    <a href="#" data-gallery-filter="*" class="current">All</a>
                    @foreach($services->tags as $tag)
                        <a href="#" data-gallery-filter=".tag{{$tag->id}}">{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="row" id="portfolioGrid">
                @foreach($services->details as $detail)
                    @php
                        $tags = [];
                        foreach($detail->tags as $tag) $tags[] = 'tag' . $tag->id;
                    @endphp
                    <div class="col-md-6 col-lg-4 gallery-item {{join(' ', $tags)}}">
                        <div class="latest-project-item">
                            <div class="portfolio-item-img">
                                <img src="{{$detail->image ? asset('storage/' . $detail->image):'theme/img/portfolio/portfolio-img-1.jpg'}}"
                                     alt="{{$detail->name}}"
                                     class="img-fluid portfolio-img">
                                <div class="portfolio-buttons">
                                    <a href="{{$detail->image ? asset('storage/' . $detail->image):'theme/img/portfolio/portfolio-img-1.jpg'}}"
                                       class="portfolio-zoom-link"><span></span><span></span></a>
                                </div>
                            </div>
                            <div class="block-btn">
                                <a href="{{url('service/' . $services->slug . '/' . $detail->slug)}}" title="Read More"
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
    <!--// Project Grid Section End //-->
@endsection
