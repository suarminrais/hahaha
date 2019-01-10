    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vectorina @yield('title')</title>
    <!-- eshooper -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('css/multiple-select.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/4-col-portfolio.css') }}" rel="stylesheet">

      <!-- icon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .hidden{
            display: none;
        }
        a.btn.btn-prymary.btn-lg {
            background-color: #f58d07e8;
        }
        a.btn.btn-default.add-to-cart {
            border-radius: 5%;
        }
        a.btn.btn-primary {
            border-radius: 5px;
        }
        button.btn.btn-primary {
            border-radius: 5px;
        }
    </style>
    @yield('style')