<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    {{-- Fontawesome --}}
    {{-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
    <script src="https://kit.fontawesome.com/3cd501a181.js" crossorigin="anonymous"></script>


    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/sidebar.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>



    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            {{-- <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div> --}}
            <div class="top">
                <div class="logo d-flex justify-content-center mt-5">
                    <a href="/">
                        <img height="70" src="{{$settings['general']->logo_img_url}}">
                    </a>
                </div>
                <ul class="list-unstyled components">
                    <p>{{$settings['general']->site_title}}</p>
                    {{-- <li class="active"> --}}
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            @foreach ($categories as $category)
                            <li>
                                <a href="#">{{$category->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="/reservations">Waitlist</a>
                    </li>
                    <li>
                        <a href="/offers">Offers</a>
                    </li>
                    <li>
                        <a href="/about">More</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="bottom container-fluid p-2">
                    <div class="location col-12 p-0">
            			<div class="address">
            				{{$settings['general']->address_1}} {{$settings['general']->address_2}} <br>
            				{{$settings['general']->postalcode}} {{$settings['general']->city}}, {{$settings['general']->province}}, Canada.
            			</div>
            			<div class="phone-number mt-2">
            				<a href="tel:{{$settings['general']->phone_number}}" >{{$settings['general']->phone_number}}</a>
            			</div>
            		</div>
                    <div class="delivery-options col-12 p-0 mt-2">
            			Livraison • Pick-Up
            		</div>
            		<div class="social-icons col-12 p-0 mt-2">
            			<a href="{{$settings['social']->facebook_url}}" class="cdn-icons">
            				<i class="fab fa-facebook"></i>
            			</a>
            			<a href="{{$settings['social']->twitter_url}}" class="cdn-icons">
            				<i class="fab fa-twitter" aria-hidden="true"></i>
            			</a>
            			<a href="{{$settings['social']->instagram_url}}" class="cdn-icons">
            				<i class="fab fa-instagram" aria-hidden="true"></i>
            			</a>
            			<a href="#" class="cdn-icons">
            				<i class="fab fa-youtube" aria-hidden="true"></i>
            			</a>
            		</div>
            </div>
        </nav>


        <section id="app-layout">
            <div class="container-fluid">
                {{-- Topbar --}}
                <div class="row topbar d-md-none p-2">
                    <div class="col-4 p-0 d-flex justify-content-left">
                        <button type="button" id="sidebarCollapse" class="btn btn-dark">
                            <i class="fas fa-bars"></i>
                            {{-- <i class="fas fa-align-left"></i> --}}
                            <span>Toggle Sidebar</span>
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="logo ">
                    		<a href="/">
                    			<img height="40" src="{{$settings['general']->logo_img_url}}">
                    		</a>
                    	</div>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
                {{-- Welcome box --}}
                <div class="row">
                  <div class="col-12 welcome-jumbo">
                    <div class="welcome-message">
                      <div class="status">  The New </div>
                      <h1>Billy Burger</h1>
                    </div>
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
            </div>
        </section>
    </div>


    @yield('content')
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
</body>

</html>
