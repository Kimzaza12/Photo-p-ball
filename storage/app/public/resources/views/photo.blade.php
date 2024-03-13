@extends('navbar')
@section('title', 'ZNAPPLAY')

@section('content')

    <div>

        <div class="img-full " id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <h1>Znapplay</h1>
                    @foreach ($photos as $photo)
                        <h2 style="color: aliceblue">{{ $photo->album_name }}</h2>
                    @break
                @endforeach

            </div>

        </div>
        <img src="{{ Vite::asset('resources/images/Pb-1.jpg') }}">

    </div>

    <div class="full-screen-portfolio bg-custom" id="portfolio">
        <div class="container-fluid ">

            <div class="row">
                @foreach ($al_photo->photos as $photo)
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-item">
                            <a href="{{ asset('storage/' . $photo->photo_name) }}" data-fancybox="gallery">
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <p>Click to view photo</p>
                                        </div>
                                    </div>
                                    <div class="fix-img-al">
                                        <div>
                                            <img src="{{ asset('storage/' . $photo->photo_name) }}">
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


@endsection
