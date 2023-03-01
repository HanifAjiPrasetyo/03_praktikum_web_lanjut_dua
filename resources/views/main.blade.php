<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HanifCompany | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/gallery/slide_why-1.png">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        @include('layouts.header')
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
        // Active page link
        $(function($) {
            let url = window.location.href;
            $('nav ul li a').each(function() {
                if (this.href === url) {
                    $(this).addClass('active');
                }
            });
        });

        $(document).ready(function() {
            // Handle click on paging links
            $(".tm-paging-link").click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $(".tm-gallery-page").addClass("hidden");
                $("#tm-gallery-page-" + page).removeClass("hidden");
                $(".tm-paging-link").removeClass("active");
                $(this).addClass("active");
            });
        });

        $(document).ready(function() {
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        });
    </script>
</body>

</html>
