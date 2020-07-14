<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.meta-tags-new')
</head>

<body>
    <section id="page-welcome">
        <div class="wrapper overflow-hidden">
            @include('includes.sidebar')
            <div class="main-layout container-fluid d-flex flex-column">
                {{-- Topbar --}}
                @include('includes.topbar')
                {{-- Content --}}
                <div class="row page-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('includes.bottom-scripts')
</body>

</html>
