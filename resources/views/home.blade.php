@extends('layouts.app')
  @section('content')
     

    <main>
           
      <section>
        
          <h3 class="center" style="color: white;">Daftar Rapat</h3>
            
          @foreach ($meeting as $value)
          <div class="list-meeting">
                <div class="row valign-wrapper">
                  <div class="col s1 center" style="width:10px;">
                    <ul>
                      <li class="number"> {{$value->id_meeting}} </li>
                    </ul>
                  </div>
                  <div class="col s5">
                    <ul>
                    <li class="title-meeting">{{ $value->perihal }}</li>
                        <li class="desc">
                          <div class="row">
                            <div class="col s2">Tempat</div>
                            <div class="col s10">: {{$value->tempat}} </div>
                          </div>
                          <div class="row">
                            <div class="col s2">Waktu</div>
                            <div class="col s10">: 
                              <span>{{  Carbon\Carbon::createFromTimestamp(strtotime($value->waktu))->formatLocalized('%A,%d %B %Y') }}</span>
				                        <div>: {{  Carbon\Carbon::createFromTimestamp(strtotime($value->waktu))->formatLocalized('%H:%I') }} WIB</div>
                            </div>
                          </div>
                        </li>
                    </ul>
                  </div>
                  <div class="col s2">
                      <ul>
                          <li>Status Rapat : </li>
                          <li class="center">
                             <p id="status" style="font-size:20px; color: green; ">Selesai</p>
                          </li>
                      </ul>
                    </div>
                  <div class="col s4" id="timer" data-timer="{{  Carbon\Carbon::createFromTimestamp(strtotime($value->waktu))->formatLocalized('%b %d, %Y %H:%I:%S') }}" >
                    <ul>
                      <li>Rapat akan berlangsung dalam : </li>
                      <li class="center" style="padding-right: 10px;">
                          <div class="row center blue" style="border : 2px solid grey; border-radius:10px;" id="clockdiv">
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
                           <li> <a class="btn-floating blue"><i class="material-icons">exit_to_app</i></a> Admin Login </li>       
                    </ul>
                    
      </div>
    </main>

    @endsection