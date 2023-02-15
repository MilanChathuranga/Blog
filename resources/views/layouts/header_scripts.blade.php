@push('scripts')
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var normalLogo = "/images/logo/site-logo/logo.png";
            var lightLogo = "/images/logo/site-logo/logo_white.png";

            if (scroll >= 300) {
                $(".menu-header").addClass("menu-header-dark");
                $("img.logo").attr("src", lightLogo);
            } else {
                $(".menu-header").removeClass("menu-header-dark");
                $("img.logo").attr("src", normalLogo);
                $(".home-02-menu-header img.logo").attr("src", lightLogo);
            }
        });
    </script>
@endpush
