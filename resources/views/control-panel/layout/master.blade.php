<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.3/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 05:07:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <title>@yield('title')</title>


    <!--STYLESHEET-->
    <!--=================================================-->


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{!! asset('control-panel-assets/css/bootstrap.min.css')!!}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{!! asset('control-panel-assets/css/nifty.min.css')!!}" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{!! asset('control-panel-assets/plugins/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="{!! asset('control-panel-assets/plugins/switchery/switchery.min.css')!!}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{!! asset('control-panel-assets/plugins/bootstrap-select/bootstrap-select.min.css')!!}" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{!! asset('control-panel-assets/css/demo/nifty-demo.min.css')!!}" rel="stylesheet">


    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{!! asset('control-panel-assets/plugins/pace/pace.min.css') !!}" rel="stylesheet">
    <script src="{!! asset('control-panel-assets/plugins/pace/pace.min.js') !!}"></script>


    <!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->

    @yield('styles')

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="effect mainnav-lg">

    @include('control-panel.layout.navbar')

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">@yield('page-title')</h1>

                <!--Searchbox-->
                <div class="searchbox">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
                    </div>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
                @yield('bread-crumbs')
            </ol>


            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->


            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                @yield('content')

            </div>
            <!--===================================================-->
            <!--End page content-->


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--SIDEBAR NAVIGATION-->
        <!--===================================================-->
        @include('control-panel.layout.sidebar-nav')
                <!--===================================================-->
        <!--END SIDEBAR NAVIGATION-->

        <!--ASIDE-->
        <!--===================================================-->
        @include('control-panel.layout.sidebar')
                <!--===================================================-->
        <!--END ASIDE-->

    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    @include('control-panel.layout.footer')
            <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->


    <div>


        <!--JAVASCRIPT-->
        <!--=================================================-->

        <!--jQuery [ REQUIRED ]-->
        <script src="{!! asset('control-panel-assets/js/jquery-2.1.1.min.js')!!}"></script>


        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{!! asset('control-panel-assets/js/bootstrap.min.js')!!}"></script>


        <!--Fast Click [ OPTIONAL ]-->
        <script src="{!! asset('control-panel-assets/plugins/fast-click/fastclick.min.js')!!}"></script>


        <!--Nifty Admin [ RECOMMENDED ]-->
        <script src="{!! asset('control-panel-assets/js/nifty.min.js')!!}"></script>


        <!--Switchery [ OPTIONAL ]-->
        <script src="{!! asset('control-panel-assets/plugins/switchery/switchery.min.js')!!}"></script>


        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{!! asset('control-panel-assets/plugins/bootstrap-select/bootstrap-select.min.js')!!}"></script>


        <!--Demo script [ DEMONSTRATION ]-->
        <script src="{!! asset('control-panel-assets/js/demo/nifty-demo.min.js')!!}"></script>

        @yield('scripts')
    </div>

</body>