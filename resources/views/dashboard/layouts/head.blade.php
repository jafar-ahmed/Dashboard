<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="description" content="Rider admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Rider, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="Https://preview.keenthemes.com/rider-free" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('d_assets/media/logos/favicon.ico') }}" />
    {{--    <link rel="icon" type="image/x-icon" href="{{ asset('d_assets/logo-icon.png') }}">--}}
    <link rel="canonical" href="Https://preview.keenthemes.com/rider-free" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
{{--    font awesome--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('d_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
{{--    <link href="{{ asset('d_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />--}}

    @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
        <link href="{{ asset('d_assets/css/style.bundle-rtl.css') }}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{ asset('d_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endif
    {{-- //selest 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container .select2-selection--multiple {
            background: #F5F8FA !important;
            border-color: #F5F8FA !important;
        }
    </style>
</head>
<!--end::Head-->
