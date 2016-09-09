<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Vipcar @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="{{ url('') }}">VIP CAR</a>
        </div>
        <div class="navbar-collapse collapse">
          @include('layouts.menu')
          <ul class="nav navbar-nav navbar-right">
            <li class="active add"><a href="{{ url('add') }}">Зар оруулах</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="searcharea">
        <div class="container">
            <div class="col-md-3">
                some text
            </div>   
            <div class="col-md-7">
                
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fui-search"></span></span>
                        <input type="text" class="form-control" id="search" placeholder="Энд хайх үгээ бичнэ үү!">
                    </div>
                
            </div>
            <div class="col-md-2">
                 <input class="btn btn-default search-btn" type="submit" value="Хайлт хийх">
            </div>
        </div>
    </div>
<div class="categories">
    @include('layouts.category')
</div>
    <div class="container">    
    <div class="row">
        <div class="col-md-3 sidebar">
            @section('sidebar')
                <!-- master side bar here -->
                  <h6>Байгууллагууд</h6>
                    <ul class="list-group company">
                      <li class="list-group-item"><img src="img/kmart-gift-card.png"> <span>Засвар үйлчилгээ</span></li>
                      <li class="list-group-item"><img src="img/kohls-gift-card.png"> <span>Авто ломбард</span></li>
                      <li class="list-group-item"><img src="img/overstock-dot-com-gift-card.png"> <span>Засвар үйлчилгээ</span></li>
                      <li class="list-group-item"><img src="img/tj-maxx.png"> <span>Сэлбэг, тоноглол</span></li>
                    </ul>
            @show
        </div> <!-- sidebar end -->
        <div class="col-md-9 content">
            @yield('content')
        </div> <!-- content end -->
    </div>

    </div> <!-- /container -->

<footer>
    <div class="container">
        <a href="#">Үйлчилгээний нөхцөл</a> <a href="#">Бидний тухай</a> <a href="#">Холбоо барих</a>
    </div>
</footer>


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>
    @yield('footerscript')
  </body>
</html>
