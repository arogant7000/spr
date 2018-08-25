<!DOCTYPE html>
<html>
  <head>
   <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper white">                 
                <a href="#!" class="brand-logo center"><img src="images/icon/ds.png" alt=""></a>
            </div>

        </nav>         
    </div>

    </header>


        @yield('content')   

        <footer class="page-footer blue accent-3">
            <div class="container">
                  <p class="center">
                    Design by
                    <a href="" class="">Mulia Ichsan</a>
                  </p>
            </div>

    </footer>
            

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>

    <script src="{{ asset('home/js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
            <script src="{{ asset('home/js/jquery.ajaxchimp.min.js')}}"></script>

            <script src="{{ asset('home/js/jquery.sticky.js')}}"></script>
         
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <!-- <script src="{{ asset('home/js/countdown.js')}}"></script> -->
   
            <script src="{{ asset('home/js/main.js')}}"></script>
    <script src="js/init.js"></script>


  <script>

      function getTimeRemaining(endtime) {
      var t = endtime - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
          'total': t,
          'days': days,
          'hours': hours,
          'minutes': minutes,
          'seconds': seconds
      };
      }

      function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
          var t = getTimeRemaining(endtime);

          daysSpan.innerHTML = t.days;
          hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
          minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
          secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

          if (t.total <= 0) {
          clearInterval(timeinterval);
          document.getElementById("status").innerHTML = "<span style='color: green;'>SELESAI</span>";
          }else{
            clearInterval(timeinterval);
            document.getElementById("status").innerHTML = "<span style='color: yellow;'>WAITING</span>";
          }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
      }


      var timer = $('#timer').data("timer");     
      var deadline = new Date(timer).getTime();
      initializeClock('clockdiv', deadline);

  </script>
  </body>
</html>