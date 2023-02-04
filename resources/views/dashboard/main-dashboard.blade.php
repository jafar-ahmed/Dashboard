<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('dashboard.layouts.head')
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        @include('dashboard.layouts.aside-menu')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            @include('dashboard.layouts.header')
            <!--end::Header-->
            <!--begin::Content-->
            <main class="container">
                @yield('content')
{{--                @yield('content-main')--}}

{{--                    @include('dashboard.layouts.main')--}}

{{--

            </main>
{{--            @yield('content')--}}
{{--            @include('dashboard.layouts.main')--}}
            <!--end::Content-->
            <!--begin::Footer-->
        @include('dashboard.layouts.footer')
{{--            <!--end::Footer-->--}}
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
{{--@include('dashboard.layouts.extintions')--}}
<!--begin::Javascript-->
@include('dashboard.layouts.js')

@stack('javascripts')
{{----}}
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
@yield('scripts')
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
