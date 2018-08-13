@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
            <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
                <div class="banner-content col-lg-6 col-md-12">
                    <h1>
                        Our Next Event Starts in
                    </h1>
                    <div class="row clock_sec d-flex flex-row justify-content-between" id="clockdiv">
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
                </div>
            </div>
    </div>
</section>
<!-- End banner Area -->



<!-- Start speaker Area -->
<section class="speaker-area section-gap" id="speaker">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Our Speakers</h1>
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
                               <img class="content-image img-fluid d-block mx-auto" src="img/s3.jpg" alt="">
                              <div class="content-details fadeIn-bottom"></div>
                        </a>
                     </div>
                </div>
                  <h2>Andy Florence</h2>
                  <p>inappropriate behavior</p>
            </div>

        </div>
    </div>
</section>
<!-- End speaker Area -->


<!-- Start events Area -->
<section class="events-area section-gap" id="upcoming">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Upcoming Events</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
            </div>
        </div>
        
        <div class="row no-padding">
            
            <div class="col-lg-6 col-sm-6">
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e1.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e2.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e3.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-sm-6">
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e4.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e5.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
                <div class="single-events row no-padding">
                    <div class="col-lg-4 image">
                        <img src="img/e6.jpg" alt="">
                    </div>
                    <div class="col-lg-7 details">
                        <a href="#">
                            <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                        </a>
                        <p>
                            inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End events Area -->
@endsection
