@extends('welcome')
@section('title', $posts->seo_title)
@section('description', $posts->seo_description)
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['blog', 'Blog'],
    ['blog/' . $categories->slug, $categories->name],
    ['blog/' . $categories->slug . '/' . $posts->slug, $posts->name],
], 'h1' => $posts->seo_h1, 'banner' => $categories->image ?? ''])
    <!--// Blog Sidebar Section Start //-->
    <section class="section padding-minus-90" id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-single">
                        <div class="blog-post-img">
                            <img src="{{asset('storage/'.$posts->image)}}"
                                 alt="{{$posts->name}}"
                                 class="img-fluid">
                            <div class="post-date">
                                <span class="far fa-calendar-alt"></span>
                                <a href="#">{{date('d M Y', strtotime($posts->created_at))}}</a>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h4>{{$posts->excerpt}}</h4>
                            <div class="author-meta">
                                <a href="#">
                                    <span class="far fa-user"></span>{{$posts->autor()->name}}
                                </a>
                                <a href="{{url('blog', $categories->slug)}}">
                                    <span class="far fa-bookmark"></span>
                                    {{$categories->name}}
                                </a>
                            </div>
                            {!! $posts->body !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widgets">
                            <h5 class="inner-header-title">Search</h5>
                            <form action="blog-sidebar.html" method="get">
                                <div class="blog-search-bar position-relative">
                                    <input type="text" name="sidebar_searchbar" required="" placeholder="Search Here *"
                                           class="search-form-control">
                                    <button type="submit" class="blog-search-btn"><span class="fa fa-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widgets">
                            <h5 class="inner-header-title">Categories</h5>
                            <ul class="sidebar-category-list clearfix">
                                @foreach($categories->categoriesList() as $category)
                                    <li>
                                        <a href="{{url('blog', $category->slug)}}">{{$category->name}}<span
                                                    class="category-count">
                                                ({{$category->total}})
                                        </span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widgets tag-widgets">
                            <h5 class="inner-header-title">Tags</h5>
                            <ul class="sidebar-tags clearfix">
                                @foreach($categories->tagsList($categories->id) as $tag)
                                    <li>
                                        <a href="{{url('tag', $tag->id)}}">{{$tag->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Blog Grid Sidebar End //-->
@endsection
