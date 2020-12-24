<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section section" data-bg-image-path="{{asset( $banner ? 'storage/'.$banner :
'theme/img/bg/breadcrumb-img.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumb-inner">
                    <h1>{{$h1}}</h1>
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        @foreach($links as $link)
                            <li class="active">
                                <a href="{{url($link[0])}}">{{$link[1]}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Breadcrumb Section end //-->
