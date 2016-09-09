<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Удирдах самбар @yield('title')</title>

    <link href="{{ url('admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('admin') }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris dashboard -->
    <link href="admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- FooTable ad list -->
    <link href="{{ url('admin') }}/css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="{{ url('admin') }}/css/animate.css" rel="stylesheet">
    <link href="{{ url('admin') }}/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ url('admin') }}/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Миний тухай <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Профайл</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('logout') }}">Гарах</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="@yield('dashboardactive')">
                    <a href="{{ url('vip-admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Самбар</span></a>
                </li>
                <li class="@yield('list')">
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Зарууд</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="@yield('listactive')"><a href="{{ url('vip-admin/list') }}">Зарын жагсаалт</a></li>
                        <li ><a href="{{ url('vip-admin/add') }}">Зар нэмэх</a></li>
                        <li class="@yield('category')"><a href="{{ url('vip-admin/category') }}">Ангилал</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Мэдэгдлүүд </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Ирсэн</a></li>
                        <li><a href="mail_detail.html">Email view</a></li>
                        <li><a href="mail_compose.html">Шинэ бичих</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Баннер</span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Тайлан</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_chartist.html">Chartist</a></li>
                        <li><a href="c3.html">c3 charts</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Хуудас</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Хуудас нэмэх</a></li>
                        <li><a href="#">Бидний тухай</a></li>
                        <li><a href="#">Холбоо барих</a></li>
                        <li><a href="#">Үйлчилгээний нөхцөл</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                        <li><a href="slick_carousel.html">Slick Carousel</a></li>
                        <li><a href="carousel.html">Bootstrap Carousel</a></li>

                    </ul>
                </li>

            </ul>

        </div>
    </nav>
        @yield('content')

        

    </div>
    @yield('dashboard')


    @yield('adlist')
</body>
</html>
