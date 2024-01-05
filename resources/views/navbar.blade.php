<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Znapplay</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/bootstrap-theme.min.css')
    @vite('resources/css/fontAwesome.css')
    @vite('resources/css/light-box.css')
    @vite('resources/css/templatemo-style.css')
    @vite('resources/css/app.css')
    @vite('resources/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')
    @vite('resources/js/main.js')
    @vite('resources/js/plugins.js')
    @vite('resources/js/bootstrap.js')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Include Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <!-- Include jQuery (if you haven't already) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>




    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <title>@yield('title')</title>
</head>

<body>
    <nav class="px-5 justify-content-between   d-flex ">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="logo1 ">
                <a href="/" class="fix-logo-main "><img src="{{ url('img/CZP-1.png') }}"></a>
            </div>
        </div>
        <div>
            <div class=" align-content-center d-flex logo">
                <a href="/" class="fw-bold fs-3 ">Home</a>
            </div>
            <div class=" align-content-center d-flex logo">
                <a href="/admin123" class="fw-bold fs-3 ">Admin</a>
            </div>
        </div>
    </nav>


    @yield('content')


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2024 Znapplay std.

                    | Designed by TemplateMo | Develop more by STC </p>
            </div>
        </div>
    </footer>


    <!-- Modal button -->
    <div class="popup-icon">
        <button id="modBtn" class="modal-btn"> <img src="{{ url('img/contact-icon.png') }}">
        </button>
    </div>







    <!-- Modal -->
    <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="header-title">Say hello to <em>Highway</em></h3>
                <div class="close-btn"><img src="img/close_contact.png" alt=""> <img
                        src="{{ url('img/close_contact.png') }}"></div>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your name..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>
