<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GenbioT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}">

  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">



  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/mystyle.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap-datepicker3.css')}}">
  <!-- endinject -->
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/logo.png')}}" type="image/x-icon">
    <!-- endicon-->
  @yield('css')
</head>
