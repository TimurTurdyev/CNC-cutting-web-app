@extends('welcome')
@section('title', $categories->seo_title)
@section('description', $categories->seo_description)
@section('content')
    @include('master.breadcrumb', ['links' => [
    ['blog', 'Blog'],
    ['blog/' . $categories->slug, $categories->name],
], 'h1' => $categories->seo_h1, 'banner' => $categories->image ?? 'theme/img/bg/breadcrumb-img.jpg'])
    <!--// Blog Sidebar Section Start //-->
    <section class="section padding-minus-90" id="blog-sidebar-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-6">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="{{url('blog/' . $categories->slug . '/' . $post->slug)}}">
                                            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}"
                                                 class="img-fluid">
                                        </a>
                                        <span class="blog-date">{{date('D m', strtotime($post->created_at))}}</span>
                                    </div>
                                    <div class="blog-body">
                                        <div class="blog-meta">
                                            <a href="#">
                                                <span><i class="far fa-user"></i>
                                                    By {{$post->author_name}}
                                                </span>
                                            </a>
                                            <a href="{{url('blog',$categories->slug)}}"><span><i class="far
                                            fa-bookmark"></i>{{$categories->name}}</span></a>
                                        </div>
                                        <h5>
                                            <a href="{{url('blog',[$categories->slug, $post->slug])}}">
                                                {{$post->title}}
                                            </a>
                                        </h5>
                                        <p>
                                            {{mb_substr($post->excerpt, 0, 50)}} [..]
                                        </p>
                                        <a href="{{url('blog',[$categories->slug, $post->slug])}}" class="blog-link">
                                            Read More
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                {{ $posts->links('master.pagination') }}
                <!--// .pagination-wrap //-->
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
