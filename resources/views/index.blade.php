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
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"> <img
                            src="{{ Vite::asset('resources/images/scroll-icon.png') }}"></a>
                </div>
            </div>
        </div>

        <img src="{{ Vite::asset('resources/images/Pb-1.jpg') }}">

    </div>


    <div class="bg-1 px-5 py-3">

        <div>
            <div class="full-screen-portfolio mb-2" id="SERVICE">
                <div class="container-fluid ">

                    <p class=" d-flex justify-content-center py-3" style="font-size: 45px">OUR SERVICE</p>

                    <p class=" d-flex justify-content-center py-3" style="font-size: 30px">PHOTOGRAPHY</p>

                    <div class="row">


                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">


                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Motorcycle.png') }}">
                                    <p class="text-center ">Motorcycle</p>

                                </div>



                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Car.png') }}">
                                    <p class="text-center ">Car</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Food.png') }}">
                                    <p class="text-center ">Food</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Product.png') }}">
                                    <p class="text-center ">Product</p>

                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Mock-up.png') }}">
                                    <p class="text-center ">Mock-up</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Event.png') }}">
                                    <p class="text-center ">Event</p>
                                </div>


                            </div>
                        </div>

                    </div>




                </div>
            </div>





            <div class="full-screen-portfolio mb-2" id="portfolio">
                <div class="container-fluid  ">


                    <h2 class=" d-flex justify-content-center py-3" style="font-size: 30px">VIDEO</h2>

                    <div class="row d-flex justify-content-center">






                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">


                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Video Shooting.png') }}">
                                    <p class="text-center ">Shooting</p>

                                </div>



                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Video Editor.png') }}">
                                    <p class="text-center "> Editor</p>
                                </div>


                            </div>
                        </div>

                    </div>








                </div>
            </div>








            <div class="full-screen-portfolio mb-2" id="portfolio">
                <div class="container-fluid  ">


                    <h2 class=" d-flex justify-content-center py-3" style="font-size: 30px">GRAPHIC DESIGN</h2>

                    <div class="row d-flex justify-content-center">


                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">


                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Logo.png') }}">
                                    <p class="text-center ">Logo</p>

                                </div>



                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Banner.png') }}">
                                    <p class="text-center ">Banner</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Photo Book.png') }}">
                                    <p class="text-center ">Photo Book</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/Banner ads.png') }}">
                                    <p class="text-center ">Banner ads</p>

                                </div>


                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 icon-photo">
                            <div class="d-flex justify-content-center ">



                                <div class="image  fix-size">
                                    <img src="{{ Vite::asset('resources/images/UI Interface.png') }}">
                                    <p class="text-center ">UI Interface</p>
                                </div>


                            </div>
                        </div>



                    </div>




                </div>
            </div>







        </div>


    </div>


    <div class="full-screen-portfolio bg-custom" id="PORTFOLIO">
        <div class="container-fluid ">

            <h1 class="text-white d-flex justify-content-center py-5" style="font-size: 50px">PORTFOLIO</h1>

            <div class="row ">
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
                                    <div class="fix-img-al">
                                        <div>
                                            <img src="{{ asset('storage/' . $al_photos->photo_name) }}">
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>




    <div class="full-screen-portfolio bg-black1 px-5 py-4 mb-0" id="ABOUT">
        <div class="container-fluid ">

            <p class="text-white d-flex justify-content-start py-2" style="font-size: 45px">CONTACT US</p>


            <div class="text-white d-flex justify-content-start px-2 py-3">
                <div>

                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ Vite::asset('resources/images/call.png') }}">
                        <p class="d-flex align-items-center ms-3">(+66) 098-009-6262</p>
                    </div>


                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ Vite::asset('resources/images/gmail.png') }}">
                        <p class="d-flex align-items-center ms-3">Znapplay.std@gmail.com</p>
                    </div>


                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ Vite::asset('resources/images/fb.png') }}">
                        <p class="d-flex align-items-center ms-3">Facebook Page : ZnapplayOriginal</p>
                    </div>


                    <div class="d-flex justify-content-start ">
                        <img src="{{ Vite::asset('resources/images/map.png') }}">
                        <p class="d-flex align-items-center ms-3">28/341 Golden Town Lat Phrao Kaset Nawamin
                            @Nawamin24 , Bangkok , Thailand 10240</p>
                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
