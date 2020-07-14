<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.meta-tags-new')
</head>

<body>
    <section id="welcome">
        <div class="wrapper overflow-hidden h-md-100">
            @include('includes.sidebar')
            <div class="main-layout container-fluid d-flex flex-column">
                {{-- Topbar --}}
                @include('includes.topbar')
                {{-- Carousel --}}
                <div class="row flex-grow-1 ">
                    @yield('carousel')
                </div>
                {{-- Content --}}
                <div class="row content">
                    @yield('content')
                </div>
                {{-- Footer --}}
                <footer class="container-fluid">
                    @include('includes.footer')
                </footer>
            </div>
        </div>
    </section>
    @include('includes.bottom-scripts')
</body>

</html>
