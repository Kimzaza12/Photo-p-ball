@extends('navbar')
@section('title', 'ZNAPPLAY')

@section('content')

    {{-- <div class="img-full " id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">

              
         
            </div>
        </div>

        <img src="{{ Vite::asset('resources/images/game_map/bg.jpg') }}">

    </div> --}}

<div class="d-none d-lg-block ">
    <div class="full-screen-portfolio bg-game d-flex justify-content-center align-items-center"
        style="padding-right: 200px; padding-left: 200px;  height: 100vh; " id="portfolio">
        <div class="container-fluid  ">
            <div class="modal-dialog modal-lg "  role="document">

                    <div class="p-3 py-5" id="randomImageContainer">
                    </div>
                    
            </div>
            <div>
            
                <!-- แถวของ 5 ภาพ -->
                <div class="row d-flex justify-content-center " id="photohid">

                    @php $count = 0; @endphp
                    @foreach ($Random as $Randoms)
                        @php $count++; @endphp
                        @if ($count <= 5)
                            <div class="col-md-2 col-sm-3 portfolio-item mt-5 px-3">
                                <a href="{{ asset('storage/' . $Randoms->Random_img) }}" data-fancybox="gallery">
                                    <div class="thumb">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <p>{{ $Randoms->Random_name }}</p>
                                            </div>
                                        </div>
                                        <div class="fix-img-ran">
                                            <img src="{{ asset('storage/' . $Randoms->Random_img) }}"
                                                style="border-radius: 10px;" class="not-selected">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- แถวของ 5 ภาพ -->
                <div class="row d-flex justify-content-center " id="photohid">
                    @php $count = 0; @endphp
                    @foreach ($Random as $Randoms)
                        @php $count++; @endphp
                        @if ($count > 5 && $count <= 9)
                            <div class="col-md-2 col-sm-3 portfolio-item mt-5 px-3">
                                <a href="{{ asset('storage/' . $Randoms->Random_img) }}" data-fancybox="gallery">
                                    <div class="thumb">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <p>{{ $Randoms->Random_name }}</p>
                                            </div>
                                        </div>
                                        <div class="fix-img-ran">
                                            <img src="{{ asset('storage/' . $Randoms->Random_img) }}"
                                                style="border-radius: 10px;" class="not-selected">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- แถวของ 5 ภาพ -->
                <div class="row d-flex justify-content-center " id="photohid">
                    @php $count = 0; @endphp
                    @foreach ($Random as $Randoms)
                        @php $count++; @endphp
                        @if ($count > 9 && $count <= 12)
                            <div class="col-md-2 col-sm-3 portfolio-item mt-5 mb-5 px-3">
                                <a href="{{ asset('storage/' . $Randoms->Random_img) }}" data-fancybox="gallery">
                                    <div class="thumb">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <p>{{ $Randoms->Random_name }}</p>
                                            </div>
                                        </div>
                                        <div class="fix-img-ran">
                                            <img src="{{ asset('storage/' . $Randoms->Random_img) }}"
                                                style="border-radius: 10px;" class="not-selected">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach


                </div>


            

                <div class="d-flex justify-content-center ">
                    <button class="btn btn-primary" type="button" id="randomButton">Random</button>
                </div>

            </div>
        </div>





    </div>
</div>




    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            
        </div>
    </div>

@endsection
