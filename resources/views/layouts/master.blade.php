<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/clear.css')}}" />
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/common.css')}}" />
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/carouFredSel.css')}}" />
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/sm-clean.css')}}" />
        <link rel="stylesheet" type="text/css"  href= "{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="home blog">

        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="{{asset('images/ajax-document-loader.gif')}}" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Left Sidebar -->
    
        @include('layouts.nav')
        <!-- Home Content -->
        @yield('content')



        <!--Load JavaScript-->
        @include('layouts.footer')
        
    </body>
</html>
