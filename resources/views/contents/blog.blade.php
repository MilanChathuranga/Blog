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
                <h1 class="page-title">Blog Details</h1>
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

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <!-- Article Area -->
                <div class="col-xl-9">
                    <div class="article-area">
                        <div class="article-title">
                            <h2>Why You Should Hire UI / UX Guy Before You Work On Your Product</h2>
                        </div>
                        <div class="article-details">
                            <div class="article-author">
                                <img src="images/clients/client-02.png" alt="Habu">
                                <h6><a href="blog.html">Jason Harper</a> | <a href="blog.html">UI / UX Design</a> | <a
                                        href="blog.html">August
                                        1, 2020</a></h6>
                            </div>
                            <div class="share-article">
                                <h6>SHARE:</h6>
                                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
                                <a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                        <div class="article-thumbnail">
                            <img src="images/blog/post-details.png" alt="Habu">
                        </div>
                        <div class="article-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil reprehenderit veniam
                                quaerat enim, temporibus praesentium architecto corrupti? Odio illo ut nostrum quos
                                iusto, nesciunt exercitationem molestias. Iste est hic quia voluptas deserunt deleniti
                                eligendi sit illum ea quasi. Officia laborum nihil molestias, quam recusandae aut sed
                                nesciunt rem facere atque tenetur reiciendis tempora delectus ea expedita eveniet
                                voluptatum eos veritatis magnam error temporibus! <br><br>

                                Inventore alias dolorum, eveniet recusandae maxime obcaecati saepe magnam ducimus? Sint
                                hic quas magnam dolorum id architecto alias sunt saepe temporibus iste nobis eaque,
                                molestias ullam ab ducimus corporis officiis velit consectetur sequi! Et fugiat maxime
                                omnis odio quam aliquid magni praesentium iure iste necessitatibus rerum officia ea
                                corporis consectetur fugit, enim laudantium vitae repellendus. Alias, saepe omnis? Eum
                                explicabo temporibus pariatur. Pariatur deleniti commodi cumque magni perspiciatis
                                voluptatibus molestiae laboriosam iste consectetur ducimus eveniet possimus enim,
                                consequatur quisquam, ex velit nam. Ipsa neque eligendi dolor, explicabo id quo, labore
                                minima dicta sunt totam omnis. Rem sint distinctio, nesciunt vitae aliquid nobis
                                molestiae illo eligendi perspiciatis delectus deserunt mollitia, qui hic ea voluptates
                                fugit quasi quod minus ducimus. Excepturi magnam laboriosam ut eum maiores, culpa vitae
                                dolore aliquid alias illum enim est! Doloribus ducimus culpa eveniet blanditiis!</p>

                            <h2 class="article-subheading">Why You Should Hire UI / UX Guy Before You Work On Your
                                Product</h2>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil reprehenderit veniam
                                quaerat enim, temporibus praesentium architecto corrupti? Odio illo ut nostrum quos
                                iusto, nesciunt exercitationem molestias. Iste est hic quia voluptas deserunt deleniti
                                eligendi sit illum ea quasi. Officia laborum nihil molestias, quam recusandae aut sed
                                nesciunt rem facere atque tenetur reiciendis tempora delectus ea expedita eveniet
                                voluptatum eos veritatis magnam error temporibus! <br><br>

                                Inventore alias dolorum, eveniet recusandae maxime obcaecati saepe magnam ducimus? Sint
                                hic quas magnam dolorum id architecto alias sunt saepe temporibus iste nobis eaque,
                                molestias ullam ab ducimus corporis officiis velit consectetur sequi! Et fugiat maxime
                                omnis odio quam aliquid magni praesentium iure iste necessitatibus rerum officia ea
                                corporis consectetur fugit, enim laudantium vitae repellendus. Alias, saepe omnis? Eum
                                explicabo temporibus pariatur. Pariatur deleniti commodi cumque magni perspiciatis
                                voluptatibus molestiae laboriosam iste consectetur ducimus eveniet possimus enim,
                                consequatur quisquam, ex velit nam. Ipsa neque eligendi dolor, explicabo id quo, labore
                                minima dicta sunt totam omnis. Rem sint distinctio, nesciunt vitae aliquid nobis
                                molestiae illo eligendi perspiciatis delectus deserunt mollitia, qui hic ea voluptates
                                fugit quasi quod minus ducimus. Excepturi magnam laboriosam ut eum maiores, culpa vitae
                                dolore aliquid alias illum enim est! Doloribus ducimus culpa eveniet blanditiis!</p>

                            <div class="article-tags">
                                <h6>TAGS: </h6>
                                <a href="blog.html">UI / UX</a><span>,</span>
                                <a href="blog.html">WEB DESIGN</a>
                            </div>
                        </div>
                        <div class="article-navigation">
                            <a href="blog-details.html"><i class="fas fa-arrow-alt-circle-left"></i> PREVIOUS</a>
                            <a href="blog-details.html" class="float-right">NEXT <i
                                    class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <!-- Comment Area -->
                        <div class="comment-area">
                            <h2>COMMENT: <span>2</span></h2>
                            @foreach($comments as $comment)
                                <div class="comment-box">
                                    <div class="comment-author-thumbnail">
                                        <img src="images/team-members/03_team-member-02.png" alt="Habu">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-details">
                                            <a href="#">
                                                <span id="comment_id" hidden>{{$comment->id}}</span>
                                                <h3>{{ $comment->title }}</h3>
                                            </a>
                                            <a href="#" class="comment-date">{{$comment->published_at}}</a>
                                        </div>
                                        <div class="main-comment">
                                            <p>{{$comment->content}}</p>
                                            <button id="{{$comment->id}}" class="reply_btn">REPLY</button>
                                            <div class="comment-form reply_form" id="reply_div{{$comment->id}}">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <input id="commenter{{$comment->id}}" type="text"
                                                                   placeholder="Name">
                                                        </div>
                                                        <div class="col-sm-6 float-right">
                                                            <button id="{{$comment->id}}"
                                                                    class="large-white-button save_reply">Reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-11">
                                                        <textarea id="comment_body{{$comment->id}}"
                                                                  placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- `isNotEmpty` collection method was added in Laravel 5.3 --}}
                                        @if($comment->childs->isNotEmpty())
                                            @include('contents.reply', ['childs' => $comment->childs])
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <div id="new_comment">

                            </div>
                        <!-- Comment Input -->
                            <div class="comment-input">
                                <h2 id="comment_header">LEAVE A COMMENT</h2>
                                <div class="comment-form">
                                    <div class="row">
                                        {{--                                        <form action="#">--}}
                                        <div class="col-xl-6">
                                            <input id="commenter" type="text" placeholder="Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea id="comment_body" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <button id="post_comment" class="large-blue-button">POST COMMENT
                                            </button>
                                        </div>
                                        {{--                                        </form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Area -->
                        <div class="col-xl-3">
                            <div class="row sidebar-area">
                                <!-- search -->
                                <div class="col-xl-12 search-area">
                                    <h2 class="sidebar-widget-title">Search</h2>
                                    <div class="search-form">
                                        <input type="text" placeholder="Search anything">
                                        <button><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                <!-- categories -->
                                <div class="col-xl-12 categories-area">
                                    <h2 class="sidebar-widget-title">Categories</h2>
                                    <ul>
                                        <li><a href="blog-details.html">Smartphones</a></li>
                                        <li><a href="blog-details.html">Headsets</a></li>
                                        <li><a href="blog-details.html">Computers</a></li>
                                        <li><a href="blog-details.html">Drones</a></li>
                                        <li><a href="blog-details.html">Smartwatch</a></li>
                                    </ul>
                                </div>
                                <!-- Recent Posts -->
                                <div class="col-xl-12 recent-posts-area">
                                    <h2 class="sidebar-widget-title">Recent Posts</h2>
                                    <div class="recent-post">
                                        <div class="recent-post-thumbnail">
                                            <a href="blog-details.html"><img src="images/blog/recent-post-1.png"
                                                                             alt="Habu"></a>
                                        </div>
                                        <div class="recent-post-title">
                                            <a href="blog-details.html">
                                                <h3>Nam ac elit a ante commodo</h3>
                                            </a>
                                            <span>by </span><a href="blog.html">admin</a>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumbnail">
                                            <a href="blog-details.html"><img src="images/blog/recent-post-2.png"
                                                                             alt="Habu"></a>
                                        </div>
                                        <div class="recent-post-title">
                                            <a href="blog-details.html">
                                                <h3>Nam ac elit a ante commodo</h3>
                                            </a>
                                            <span>by </span><a href="blog.html">admin</a>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumbnail">
                                            <a href="blog-details.html"><img src="images/blog/recent-post-3.png"
                                                                             alt="Habu"></a>
                                        </div>
                                        <div class="recent-post-title">
                                            <a href="blog-details.html">
                                                <h3>Nam ac elit a ante commodo</h3>
                                            </a>
                                            <span>by </span><a href="blog.html">admin</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Popular Tags -->
                                <div class="col-xl-12 popular-tags">
                                    <h2 class="sidebar-widget-title">Popular Tags</h2>
                                    <a href="blog.html">UI/UX</a><a href="blog.html">WEB</a><a
                                        href="blog.html">DEVELOP</a><a
                                        href="blog.html">AGENCY</a><a
                                        href="#">SMM</a>
                                </div>
                                <!-- ad banner -->
                                <div class="col-xl-12 ad-banner">
                                    <a href="index.html"><img src="images/banner/banner-advert.png" alt="Habu"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- =========================== 5. Subscribe Section =========================================== -->

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
            <img src="images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                 alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection
