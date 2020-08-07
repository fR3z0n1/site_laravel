<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('tag-title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
<div class="container-fluid">
    <div class="tm-body">
        <div class="tm-sidebar sticky">
            <section id="welcome" class="tm-content-box tm-banner margin-b-15">
                <div class="tm-banner-inner">
                    <i class="fa fa-film fa-4x margin-b-40"></i>
                    <h1 class="tm-banner-title">Mason</h1>
                    <p class="tm-banner-subtitle">new HTML template</p>                   
                </div>                    
            </section>
            @if(session('success'))

                <div class="alert alert-success">{{ session('success') }}</div>

            @endif
            <nav class="tm-main-nav">
                <ul class="tm-main-nav-ul">
                    <li class="tm-nav-item">
                        <a href=" {{ route('gallery-page') }} " class="tm-nav-item-link tm-button">Gallery</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="{{ route('timeline-page')}}" class="tm-nav-item-link tm-button">Timeline</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="{{ route('about-page')}}" class="tm-nav-item-link tm-button">About</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="{{ route('contact-page')}}" class="tm-nav-item-link tm-button">Contact</a>
                    </li>
                    @if(Auth::user())
                    <li class="tm-nav-item">
                        <a type="submit" href="{{ route('admin-panel') }}" class="tm-nav-item-link tm-button">Admin-panel</a>
                        <form action="{{ route('logout')}}" method="post">
                            @csrf
                            <button type="submit" href="" class="tm-nav-item-link tm-button">Logout</button>
                        </form>
                    </li>
                    @else
                    <li class="tm-nav-item">
                        <a type="submit" href="{{ route('login') }}" class="tm-nav-item-link tm-button">Admin-panel</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        
        @yield('content')
        
    </div>

    <footer class="tm-footer text-right">
        <p>Copyright &copy; <span class="tm-current-year"></span> Your Company 
        
        - Designed by <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
    </footer> 

</div> <!-- container-fluid -->
    <!-- load JS files -->
    
@section('scripts')
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->
    <script src="js/masonry.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->
    <script>$(document).ready(function(){           
        // Update the current year in copyright
        $('.tm-current-year').text(new Date().getFullYear());        
    });
    </script>   
@show

</body>
</html>