<!DOCTYPE html>
<html lang="en">
@include('Dashboard.layouts.head')

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        @include('Dashboard.layouts.header')
        @include('Dashboard.layouts.sidebar')
        <!-- Main Content -->
        @yield('content')

        @include('Dashboard.layouts.footer')
    </div>
</div>

@include('Dashboard.layouts.scripts')
</body>

</html>
