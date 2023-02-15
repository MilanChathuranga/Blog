<div class="menu-header d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-2 d-flex align-items-center">
                <a href="{{asset('/')}}"><img class="logo" src="images/logo/site-logo/logo.png" alt="Habu"></a>
            </div>
            <div class="col-10 d-flex align-items-center">
                <nav id="mobile-menu" class="menu-area d-lg-flex align-items-center ml-auto">
                    <ul>
                        <li>
                            <a href="{{asset('/')}}">Home</a>
{{--                            <ul>--}}
{{--                                <li><a href="{{asset('/')}}">Home 01</a></li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{asset('/')}}">Home 02</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{asset('about')}}">About</a></li>
                        <li><a href="{{asset('pricing')}}">Pricing</a></li>
                        <li><a href="{{asset('portfolio')}}">Pages</a>
                            <ul>
                                <li><a href="{{asset('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{asset('portfolio-details')}}">Portfolio Details</a></li>
                                <li class="current-menu-item"><a href="#">Member Details</a></li>
                                <li><a href="{{asset('faq')}}">FAQ</a></li>
                                <li><a href="{{asset('career')}}">Career</a></li>
                                <li><a href="{{asset('contact_us')}}">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('blog')}}">Blog</a>
                            <ul>
                                <li><a href="{{asset('blog-details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-menu"></div>
                <a  href="{{asset('contact_us')}}" class="large-blue-button menu-button">Get a quote</a>
            </div>
        </div>
    </div>
</div>
