@extends('visitors.layouts.visitors',['title' => 'Blog'])
@section('content')
<!--=========Banner Start============-->
<div class="inner-pages-bnr">
    <img src="images/blog-banner.jpg" class="img-responsive" alt="blog-banner-image">
    <div class="banner-caption">
        <h1>Blog</h1>
        <ul class="breadcumb">
            <li><a href="{{ 'home' }}">Home</a> - </li>
            <li>Blog</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">

            <!--=========Blog Right Start============-->
            <div class="col-md-8">
                @foreach ($blogs as $blog )
                <div class="blog-list-cl ">
                    <div class="blog-img">
                        <span class="image_hover ">
                            <img src="{{ Voyager::image($blog->image) }}" class="img-responsive zoom_img_effect"
                                alt="blog-image">
                        </span>
                        <div class="blog-timing">
                            <span>
                                <b>
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M j') }}
                                </b>
                            </span>
                        </div>
                    </div>
                    <div class="blog-head">
                        <h6 class="wdt-100"><a href="#">{{ $blog->title }}</a></h6>
                        {{-- <ul class="blog-wdt">
                            <li class="date_icon">JULY 15, 2023</li>
                            <li class="author_icon">JOHN Dyer</li>
                            <li class="blog_icon">BLOG</li>
                        </ul> --}}
                    </div>
                    <p>{{ Str::words($blog->body, 70 , '...') }}</p>
                    <p><a href="">Read More</a></p>
                </div>
                @endforeach
                {{ $blogs->links() }}
            </div>
            <!--=========Blog Right end============-->
            <!--=========Blog Left Start============-->
            <div class="col-md-4 left-column">
                <div class="wdt-100 marbtm50">
                    <h4>POPULAR POSTS</h4>
                    @foreach ($features as $feature )
                    <div class="post-list">
                        <span class="post-img"><img src="{{ Voyager::image($feature->image) }}" class="img-responsive"
                                alt="post-image"></span>
                        <div class="post-txt">
                            <h5>{{ $feature->title }}
                            </h5>
                            <a class="read-more" href="{{ route('blog') }}">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--=========Blog Left end============-->
        </div>
    </div>
</section>
@endsection
