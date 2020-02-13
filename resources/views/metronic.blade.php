<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<head>

    <title>لوحة التحكم | @yield('title')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    @include('includes._head')
    @yield('stylesheets')
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

    @include('includes._navbar')

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        {{-- @php $about = App\About::latest()->take(1)->first() @endphp --}}
        @include('includes._sidebar')

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY-->
            <div class="page-content" style="min-height:1015px">

                @yield('content')

            </div>
            <!-- END CONTENT BODY-->
        </div>
        <!-- END CONTENT -->

        <!-- BEGIN QUICK SIDEBAR -->
        <a href="#" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">

            </div>
        </div>
        <!-- END QUICK SIDEBAR -->

    </div>
    <!-- END CONTAINER -->



    @include('includes._footer')

    @include('includes._javascript')
    @include('includes._messages')
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('.ck_editor').ckeditor();

        CKEDITOR.config.extraPlugins = 'justify';
        CKEDITOR.config.extraPlugins = 'bidi';

    </script>
    @yield('scripts')

</body>

</html>
