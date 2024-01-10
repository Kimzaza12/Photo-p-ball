@extends('navbar')
@section('title', 'ZNAPPLAY')

@section('content')
    <div class="img-full " id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>Welcome to <em>Znapplay</em></h1>

                <p>Homepage with full-width image gallery</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{ url('/img/scroll-icon.png') }}"></a>
                </div>
            </div>
        </div>

        <img src="img/Pb-1.jpg">

    </div>

    <div class="full-screen-portfolio bg-custom" id="portfolio">
        <div class="container-fluid ">
 
            <h1 class="text-white d-flex justify-content-center py-5" style="font-size: 50px" >OUR SERVICE</h1>

    



        </div>
    </div>

    <div class="full-screen-portfolio bg-custom" id="portfolio">
        <div class="container-fluid ">
 
            <h1 class="text-white d-flex justify-content-center py-5" style="font-size: 50px" >PORTFOLIO</h1>

            @foreach ($al_photo as $al_photos)
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="{{ url('/albums/' . $al_photos->id) }}" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>{{ $al_photos->album_name }}</h1>
                                        <p>Click to view album</p>
                                    </div>
                                </div>
                                <div class="image  fix-size">
                                    <img src="{{ asset('storage/' . $al_photos->photo_name) }}">
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach



        </div>
    </div>

    <div class="full-screen-portfolio bg-custom" id="portfolio">
        <div class="container-fluid ">
 
            <h1 class="text-white d-flex justify-content-center py-5" style="font-size: 50px" >CONTACT US</h1>

    



        </div>
    </div>

@endsection
