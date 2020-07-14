<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.meta-tags-new')
</head>

<body>
    <section id="welcome">
        <div class="wrapper overflow-hidden h-100">
            @include('includes.sidebar')
            <div class="main-layout container-fluid d-flex flex-column">
                {{-- Topbar --}}
                @include('includes.topbar')
                {{-- Content --}}
                <div class="row flex-grow-1">
                    @yield('carousel')
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    @include('includes.bottom-scripts')
</body>

</html>
