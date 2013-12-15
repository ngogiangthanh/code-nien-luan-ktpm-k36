<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link type="image/x-icon" rel="icon" media="all" href="<?php echo URL; ?>public/images/ico-hoclieu.ico">
        <!-- start: CSS -->
        <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/css/nprogress.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/css/style.min.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo URL; ?>public/css/retina.css" rel="stylesheet" />
        
        <title>{{$title}}</title>

    </head>
    <body style='display: block'>
        <!-- start: Header --> 
        <div class="navbar">
        @include('modules.navbar')
        </div>
        <!-- end: Header -->
        <div class="container-fluid-full"> 
            <div class="row-fluid">
                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    @include('modules.menu')
                </div>
                <!-- end: Main Menu -->
                <!-- start: Content -->
                <div id="content" class="span10" style="min-height: 545px !important;" >
                    @yield('content')
                </div>
                <!-- end: Content -->
                <div class="clearfix"></div>
                <!-- start: Footer -->
                <footer>
                    @include('modules.footer')
                </footer>
                <!-- end: Footer -->
            </div>		
        </div><!--/.fluid-container-->
    </body>
</html>
@include('common.javascripts')

