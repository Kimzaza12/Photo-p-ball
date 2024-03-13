<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Znapplay</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    {{-- @vite('resources/css/fontAwesome.css')
    @vite('resources/css/light-box.css')
    @vite('resources/css/templatemo-style.css')
    @vite('resources/css/app.css')
    @vite('resources/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')
    @vite('resources/js/main.js')
    @vite('resources/js/app.js')
    @vite('resources/js/plugins.js')
    @vite('resources/js/bootstrap.js') --}}


 
    @vite('resources/js/app.js')
 


    <link rel="stylesheet" href="/storage/resources/css/fontAwesome.css">
    <link rel="stylesheet" href="/storage/resources/css/light-box.css">
    <link rel="stylesheet" href="/storage/resources/css/templatemo-style.css">
    <link rel="stylesheet" href="/storage/resources/css/app.css">

    {{-- <link rel="stylesheet" href="/storage/resources/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
    <link rel="stylesheet" href="/storage/resources/js/main.js">
    <link rel="stylesheet" href="/storage/resources/js/app.js">
    <link rel="stylesheet" href="/storage/resources/js/plugins.js">
    <link rel="stylesheet" href="/storage/resources/js/bootstrap.js"> --}}






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">




    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">

    <!-- Include Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />



    <script src="https://cdn.rawgit.com/fancyapps/fancybox/master/dist/jquery.fancybox.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include jQuery (if you haven't already) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>




    <script src="js/vendor/bootstrap.min.js"></script>


{{-- 
    <script src="resources/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/app.js"></script>
    <script src="resources/js/plugins.js"></script>
    <script src="resources/js/bootstrap.js"></script>
     --}}



    <title>@yield('title')</title>
    
</head>

<body>
    <nav class="navbar bg-dark  fixed-top">
        <div class="container-fluid">

            <div class="d-lg-block d-none ">
                <div class="d-flex justify-content-center align-items-center ">
                    <div class="logo1 mx-5 ">
                        <a href="/" class="fix-logo-main "><img src="{{ url('img/CZP-1.png') }}"></a>


                    </div>

                    <a class="nav-link text-white me-4" href="/#video-container">Home</a>
                    <a class="nav-link text-white me-4" href="/#ABOUT">ABOUT</a>
                    <a class="nav-link text-white me-4" href="/#SERVICE">SERVICE</a>
                    <a class="nav-link text-white me-4" href="/#PORTFOLIO">PORTFOLIO</a>
                    <a class="nav-link text-white me-4" href="/random">E-SPORT</a>

                </div>
            </div>


            <div class="d-lg-none d-block ">
                <div class="d-flex justify-content-center align-items-center ">
                    <div class="logo1  ">
                        <a href="/" class="fix-logo-main "><img src="{{ url('img/CZP-1.png') }}"></a>


                    </div>

                </div>
            </div>


            <div>
                <button class="navbar-toggler d-lg-none d-block  bg-body-secondary  " type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  "></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-dark  ">
                        <h2 class="offcanvas-title text-white " id="offcanvasNavbarLabel">Menu</h2>
                        <button type="button" class="btn-close bg-danger   " data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body bg-dark">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">




                            <li class="nav-item">
                                <a class="nav-link text-white " href="/#video-container">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/#ABOUT">ABOUT</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link text-white" href="/#SERVICE">SERVICE</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link text-white" href="/#PORTFOLIO">PORTFOLIO</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link text-white" href="/random">E-SPORT</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>



        </div>
    </nav>




    @yield('content')


    <footer>

        <div class="container-fluid p-2">

            <p class="m-0 p-0">Copyright &copy; 2024 Znapplay std.

                | Designed by TemplateMo | Develop more by STC </p>
        </div>



    </footer>


    <!-- Modal button -->








</body>
