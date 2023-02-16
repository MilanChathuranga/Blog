@extends('layouts.app')

@section('title', 'page Tiyle')

@section('page_header')
    @parent
    <div class="page-header">
        <div class="about-banner-shape-left wow animate__animated animate__fadeInLeft">
            <img src="images/shapes/03_shape-01.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="habu">
        </div>
        <div class="about-banner-shape-right wow animate__animated animate__fadeInRight animate__delay-1s">
            <img src="images/shapes/03_shape-02.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="habu">
        </div>
        <div class="container">
            <div class="page-header-text wow animate__animated animate__fadeInDown">
                <h1 class="page-title">Blog</h1>
                <span>Home</span>
                <span class="span-divider font-weight-bold">|</span>
                <span class="font-weight-bold">News</span>
                <div class="page-banner-shape-title">
                    <img src="images/shapes/03_shape-03.png"
                         class="wow animate__animated animate__fadeInUp animate__delay-1s" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <!-- =========================== 4. Blog Details Section =========================================== -->

    <section class="blog-area">
        <div class="container">
            <div class="section-heading text-center mx-auto">
                <h2>Latest Posts</h2>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>
            <div class="row">

                @foreach($posts as $post)
                    <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                        <div class="post">
                            <div class="post-thumbnail" >
                                <a href="{{route('single_view', ['post_id' => $post->id])}}"><img style="height: 250px"
                                        src="{{asset('storage/'.$post['image_path'])}}" alt="Habu"></a>
                            </div>
                            <div class="post-excerpt">
                                <a href="blog.html">News</a>
                                <h2><a href="{{route('single_view', ['post_id' => $post->id])}}">
                                        {{ \Illuminate\Support\Str::limit($post['title'], 20, $end = "...") }}
                                        </a>
                                </h2>
                                <p>{{ \Illuminate\Support\Str::limit($post['summary'], 90, $end = "...") }}</p>
                                <hr>
                                <div class="post-extra">
                                    <p>Feb 22, 2017</p>
                                    <a href="{{route('single_view', ['post_id' => $post->id])}}"><i
                                            class="fas fa-long-arrow-alt-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="mx-auto mt-60">--}}
{{--                        <a href="blog.html" class="wow animate__animated animate__flipInX large-blue-button">Load--}}
{{--                            More</a>--}}
{{--                    </div>--}}
                @endforeach
            </div>
        </div>
    </section>

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Subscribe</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="subscribe-form">
                <form action="#">
                    <input type="email" placeholder="INFO@EXAMPLE.COM">
                    <button type="submit">GET A QUOTE</button>
                </form>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="/images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="/images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection
