<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Movie Tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="{{ asset('front/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="preloader"></div>
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <h1>Welcome to Movie Tech</h1>
                <h2></h2>
                @if (Route::has('login'))
                <div class="actions">
                    <a href="#about">About Us</a>
                    @auth
                    <a href="{{ url('/home') }}" class="btn-get-started">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn-get-started">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-services">Register</a>
                    @endif
                    @endauth
                </div>
                @endif

            </div>
        </div>
    </section>
    <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3 class="section-title">About Us</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Hollywood's dominance of the movie industry has been the subject of numerous studies. An interdisciplinary
                        literature review in this thesis identified twenty different single or multiple factor explanations that try to account for major
                        studio dominance at different time periods but cannot comprehensively explain hoy Hollywood acquired and maintained dominance for nine decades.
                        In this website. There are some sophistication in order to create a Holywood film. Futhermore we can discuss about theese shopistication. You can gice a comment for each shopistication</p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Dwi Bagus</strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <script src="{{ asset('front/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('front/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('front/lib/morphext/morphext.min.js') }}"></script>
    <script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front/lib/stickyjs/sticky.js') }}"></script>
    <script src="{{ asset('front/lib/easing/easing.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>

    <script src="{{ asset('front/contactform/contactform.js') }}"></script>


</body>

</html>