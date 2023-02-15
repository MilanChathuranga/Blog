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
                <h1 class="page-title">Portfolio Details</h1>
                <span>Home</span>
                <span class="span-divider font-weight-bold">|</span>
                <span class="font-weight-bold">Portfolio Details</span>
                <div class="page-banner-shape-title">
                    <img src="images/shapes/03_shape-03.png"
                         class="wow animate__animated animate__fadeInUp animate__delay-1s" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <!-- =========================== 4. Project Details Section =========================================== -->

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <!-- Article Area -->
                <div class="col-xl-9">
                    <div class="article-area">
                        <div class="article-title">
                            <h2>Software Company Web UI Design</h2>
                        </div>
                        <div class="article-details">
                            <div class="share-article">
                                <h6>SHARE:</h6>
                                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
                                <a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                        <div class="project-details">
                            <div class="project-picture">
                                <img src="images/projects/project-details-1.png" alt="Habu">
                            </div>
                            <div class="project-description">
                                <div class="row">
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Project Name:</h5>
                                        <h6>Software Company Web UI</h6>
                                    </div>
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Project Length:</h5>
                                        <h6>19 Days</h6>
                                    </div>
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Completion Date:</h5>
                                        <h6>14/08/2020</h6>
                                    </div>
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Live Website:</h5>
                                        <h6>www.wpsmasher.com</h6>
                                    </div>
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Client:</h5>
                                        <h6>John Doe Developers</h6>
                                    </div>
                                    <div class="col-xl-4 project-description-point">
                                        <h5>Category:</h5>
                                        <h6><a href="portfolio.html">UI / UX</a>, <a href="portfolio.html">WEB</a></h6>
                                    </div>
                                </div>
                            </div>
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
                            <a href="portfolio-details.html"><i class="fas fa-arrow-alt-circle-left"></i> PREVIOUS</a>
                            <a href="portfolio-details.html" class="float-right">NEXT <i
                                    class="fas fa-arrow-alt-circle-right"></i></a>
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
                                    <a href="blog-details.html"><img src="images/blog/recent-post-1.png" alt="Habu"></a>
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
                                    <a href="blog-details.html"><img src="images/blog/recent-post-2.png" alt="Habu"></a>
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
                                    <a href="blog-details.html"><img src="images/blog/recent-post-3.png" alt="Habu"></a>
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
                            <a href="blog.html">UI/UX</a><a href="blog.html">WEB</a><a href="blog.html">DEVELOP</a><a href="blog.html">AGENCY</a><a
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

    <!-- =========================== 5. Custom Project Section =========================================== -->

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Custom Projects</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="custom-project-button ml-auto">
                <button>Get A Quote</button>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite" alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite" alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection
