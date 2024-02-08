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


    <div class="full-screen-portfolio bg-custom" id="portfolio">
        <div class="container-fluid py-5">
            <div>
                <div class="row d-flex justify-content-center py-5">
                    @foreach ($Random as $Randoms)
                        <div class="col-md-4 col-sm-6 portfolio-item mt-5 px-3">
                            <a href="{{ asset('storage/' . $Randoms->Random_img) }}" data-fancybox="gallery">
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <p>{{ $Randoms->Random_name }}</p>
                                        </div>
                                    </div>
                                    <div class="fix-img-ran">
                                        <img src="{{ asset('storage/' . $Randoms->Random_img) }}" style="border-radius: 10px;" class="not-selected">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
    
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="button" id="randomButton">Random</button>
                </div>
    
            </div>
        </div>
    </div>



    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="">
                <div class=" d-flex justify-content-center">
                    <h5 class="modal-title mt-5 mb-5  text-white " id="resultModalLabel">Random Result</h5>
                </div>
                <div class="">
                    <!-- ภาพจะถูกแสดงที่นี่ -->
                    <div id="randomImageContainer"></div>
                </div>
             
            </div>
        </div>
    </div>

@endsection
