<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body data-spy="scroll" data-target=".main-menu">
    <div class="gradient-body">

        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== sidebar ======-->
        @include('frontend.layouts.sidebar')
        <!--====== sidebar ======-->

        <!--====== Start Header Section ======-->
        @include('frontend.layouts.header')
        <!--====== End Header Section ======-->


        @yield('content')
        


        <!--====== Start Footer ======-->
        @include('frontend.layouts.footer')
        <!--====== End Footer ======-->

    </div>
    @include('frontend.layouts.scripts')
</body>

</html>
