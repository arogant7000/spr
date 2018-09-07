<!DOCTYPE html>
<html>
  <head>
   <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <title>Sistem Penjadwalan Rapat</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper white">                 
                <a href="#!" class="brand-logo center"><img src=" {{ asset('images/icon/ds.png')}} " alt=""></a>
            </div>

        </nav>         
    </div>

    </header>

 
    <main>
           
      <section>
        
          <h3 class="center" style="color: black; margin-top:50px; margin-bottom:30px;">Daftar Rapat</h3>
         @php
             $no=1;
         @endphp
          @foreach ($meeting as $key => $item)
          <div class="list-meeting">
                <div class="row valign-wrapper">
                  <div class="col s1 center" style="width:10px;">
                    <ul>
                      <li class="number"> {{$no++}} </li>
                    </ul>
                  </div>
                  <div class="col s5">
                    <ul>
                        <li class="title-meeting"> {{ $item->perihal }} </li>
                        <li class="desc">
                          <div class="row">
                            <div class="col s2">Tempat</div>
                            <div class="col s10">: {{$item->tempat}} </div>
                          </div>
                          <div class="row">
                            <div class="col s2">Waktu</div>
                            <div class="col s10">: 
                                <span>
                                  @if (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Monday" )
                                      Senin
                                  @elseif (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Tuesday" )
                                      Selasa
                                  @elseif (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Wednesday" )
                                      Rabu
                                  @elseif (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Thursday" )
                                      Kamis  
                                  @elseif (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Friday" )
                                      Jumat   
                                  @elseif (  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%A') == "Saturday" )
                                      Sabtu       
                                  @endif
                                  
                                  ,{{  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized(' %d %B %Y') }}</span>
                                <div>: {{  Carbon\Carbon::createFromTimestamp(strtotime($item->waktu))->formatLocalized('%H:%M') }} WIB</div>
                            </div>
                          </div>
                        </li>
                    </ul>
                  </div>
                  <div class="col s2">
                      <ul>
                          <li>Status Rapat : </li>
                          <li class="center">
                            <div class="row center" style="margin-top:10px;  border : 1px solid grey; border-radius:2px; box-shadow: 5px 5px 5px grey; background-color: red; /* For browsers that do not support gradients */
                            background-image: linear-gradient(to bottom right, red, purple); ">
                             <p id="status" style="color:yellow; font-size:18px;">
                              @if(date("Y-m-d H:i:s") > date("Y-m-d H:i:s", strtotime($item->waktu))  )
                                <p id="status" style="color:green; font-size:18px;">
                                  Selesai
                                </p>
                              @else
                                <p id="status" style="color:yellow; font-size:18px;">
                                  Menunggu
                                </p>
                              @endif
                            
                          </div>
                          </li>
                      </ul>
                    </div>
                  <div class="col s4" id="timer-{{$key}}">
                    <ul>
                      <li style="margin-bottom:10px;">Rapat akan berlangsung dalam : </li>
                      <li class="center clockdiv-{{$key}}"  style="padding-right: 10px;">
                          <div class="row center" style="border : 1px solid grey; border-radius:2px; box-shadow: 5px 5px 5px grey; background-color: red; /* For browsers that do not support gradients */
                          background-image: linear-gradient(to bottom right, red, purple); " >
                              <div class="col s3">
                              <span class="days" style="color: white; font-size: 28px;"></span>
				                        <div style="color: white;">hari</div>
                              </div>
                              <div class="col s3">
                                <span class="hours" style="color: white; font-size: 28px;"></span>
				                        <div style="color: white;">jam</div>
                              </div>
                              <div class="col s3">
                                <span class="minutes" style="color: white; font-size: 28px;"></span>
				                        <div style="color: white;">menit</div>
                              </div>
                              <div class="col s3">
                                <span class="seconds" style="color: white; font-size: 28px;"></span>
				                        <div style="color: white;">detik</div>
                              </div>
                          </div>                      
                      </li>
                    </ul>
                  </div>
                </div>
          </div>
          @endforeach
      </section>
      
      
      <div class="fixed-action-btn" id="floated">
                    <a class="btn-floating btn-large black pulse">
                      <i class="large material-icons">fingerprint</i>
                    </a>
                  
                    <ul class="bottom">
                           <li> <a href="/admin" class="btn-floating blue"><i class="material-icons">exit_to_app</i></a> Admin Login </li>       
                    </ul>
                    
      </div>


      <ul class="pagination center">
         {{ $meeting->links() }}
        </ul>
    </main>

    <footer class="page-footer" style="background-color: blue;   background-image: linear-gradient(to top right, black, blue);">
            <div class="container">
                  <p class="center">
                    Copyright © 2018 Diskominfotik. All rights reserved. Template by <a href="/" style="color:RED; font-style:italic; font-weight:bold;">Mulia Ichsan</a>
                  </p>
            </div>

    </footer>
            

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
    <script src="{{ asset('js/materialize.js')}}"></script>
    <script src="{{ asset('js/init.js')}}"></script>
    <script>

      @foreach ($meeting as $key => $item)
        $('.clockdiv-{{$key}}').countdown('{{ date('Y/m/d H:m:s', strtotime($item->waktu)) }}', function(event) {
          // $(this).html(event.strftime('%D days %H:%M:%S'));
          $(this).find('.days').text(event.strftime('%D'));
          $(this).find('.hours').text(event.strftime('%H'));
          $(this).find('.minutes').text(event.strftime('%M'));
          $(this).find('.seconds').text(event.strftime('%S'));
        }).on('finish.countdown', function() {
          $("#status").hide();
        });
      @endforeach  

    </script>

    <script language="javascript" type="text/javascript">
      $(document).ready(function() {
          setInterval("location.reload(true)", 300000);
      });   
    </script>
  </body>
</html>