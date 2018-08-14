@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
            <div class="row fullscreen align-items-center justify-content-center" style="height: 700px;">
                <div class="banner-content col-lg-6 col-md-12">
                   @foreach($meeting as $value)
                    <h1>
                        {{$value->perihal}}
                    </h1>

                    <p id="demo"></p>
                    
                <div class="row clock_sec d-flex flex-row justify-content-between" data-waktu="{{$value->waktu}}" id="clockdiv">
                        <div class="clockinner">
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div class="clockinner">
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div class="clockinner">
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div class="clockinner">
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start events Area -->
<section class="events-area section-gap" id="upcoming">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Events</h1>
            </div>
        </div>
        
        <div class="row no-padding">
            
            <div class="col-lg-6 col-sm-6">
                <div class="single-events row no-padding">
                    <div class="col-lg-4">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Judul Event</h4>
                        </a>
                        <p>
                            descripsi acara
                        </p>
                        <p class="meta"><span class="lnr lnr-bubble"></span> <span class="likes">tanggal</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-sm-6">
                <div class="single-events row no-padding">
                    <div class="col-lg-4">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Judul Event</h4>
                        </a>
                        <p>
                            descripsi acara
                        </p>
                        <p class="meta"><span class="lnr lnr-bubble"></span> <span class="likes">tanggal</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End events Area -->

<!-- Start speaker Area -->
<section class="speaker-area section-gap" id="speaker">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Web Programmer</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-4 speaker-wrap">
                <div class="single-speaker">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="{{asset('images/ichsan.jpeg')}}" alt="">
                              <div class="content-details fadeIn-bottom"></div>
                        </a>
                     </div>
                </div>
                  <h2>Mulia Ichsan</h2>
                  <p>Mahasiswa Politeknik Negeri Lhokseumawe</p>
            </div>

        </div>
    </div>
</section>
<!-- End speaker Area -->
@endsection
