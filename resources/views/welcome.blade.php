<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Telfon Service Limited</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>

    <body>


    <div>

    @include("inc.navbar")
   
        
   <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                   </ol>

                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                       <div class="item active">
                           <img src="{{ asset('images/T1') }}" alt="Los Angeles" style="width:100%; height: auto">
                       </div>

                       <div class="item">
                           <img src="{{ asset('images/T2') }}" alt="Chicago" style="width:100%;">
                       </div>

                       <div class="item">
                           <img src="{{ asset('images/T3') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T4') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T5') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T6') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T7') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T8') }}" alt="New york" style="width:100%;">
                       </div>
                       <div class="item">
                           <img src="{{ asset('images/T9') }}" alt="New york" style="width:100%;">
                       </div>
                       
                   </div>

                   <!-- Left and right controls -->
                   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left"></span>
                       <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#myCarousel" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right"></span>
                       <span class="sr-only">Next</span>
                   </a>
               </div>
</div>



<footer class="page-footer font-small " style ="background:#DCDCDC">
      
          <!--Footer Links-->
          <div class="container-fluid text-center">
         Happiness Building 1st floor. 
         suite 14, Kitengela
         Phone Number: 0717210778

            </div>
      
                 
          <!--/.Footer Links-->
      
          <!--Copyright-->
          <div class="footer-copyright py-3 text-center">
              <div class="container-fluid">
                  © 2018 Copyright:  Telfon Service Limited
      
              </div>
          </div>
          <!--/.Copyright-->
      
      </footer>

      





    </body>
</html>
