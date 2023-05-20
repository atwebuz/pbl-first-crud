<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/ico/favicon.ico')}}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/tether-theme-arrows.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/shepherd-theme-default.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/tour/tour.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  @include('../inc/__header')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets/images/elements/decore-left.png')}}" class="img-left" alt="
            card-img-left">
                                        <img src="{{asset('assets/images/elements/decore-right.png')}}" class="img-right" alt="
            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Congratulations Developer,</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    {{-- @dd(Auth::user()->count()); --}}
                                    <h2 class="text-bold-700 mt-1 mb-25">{{Auth::user()->count()}}</h2>
                                    <p class="mb-0">Ro'yxatdan o'tgan foydalanuvchilar</p>
                                </div>
                                {{-- <div class="card-content">
                                    <div id="subscribe-gain-chart"></div>
                                </div> --}}
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">                                 
                                        <h2 class="text-center">Eng qimmat maxsulotlar</h2>
                                        <div class="row avg-sessions pt-50">
                                            
                                            <div class="col-6">
                                                @foreach($expensiveProducts as $product)

                                                <p class="mb-0"><a href="{{route('posts.show', $product->id)}}"> id:{{$product->id}}</a>  {{$product->title}}: ${{$product->price}}</p>
                                                <div class="progress progress-bar-primary mt-25">

                        
                                                    @php     
                                                        $widthPercentage = 0;

                                                        if ($product->price < 100) {
                                                            $widthPercentage = 20;
                                                        } elseif ($product->price <= 20000) {
                                                            $widthPercentage = 40;
                                                        } elseif ($product->price <= 30000) {
                                                            $widthPercentage = 60;
                                                        } elseif ($product->price <= 40000) {
                                                            $widthPercentage = 70;
                                                        } elseif ($product->price <= 50000) {
                                                            $widthPercentage = 80;
                                                        } elseif ($product->price <= 60000) {
                                                            $widthPercentage = 90;
                                                        } else {
                                                            $widthPercentage = 100;
                                                        }
                                                    @endphp
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $widthPercentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $widthPercentage }}%"></div>

                                                </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- right block --}}

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">                                 
                                        <h2 class="text-center">Eng Arzon maxsulotlar</h2>
                                        <div class="row avg-sessions pt-50">
                                            
                                            <div class="col-6">
                                                @foreach($getCheepestProducts as $product)

                                                <p class="mb-0"><a href="{{route('posts.show', $product->id)}}"> id:{{$product->id}}</a>  {{$product->title}}: ${{$product->price}}</p>
                                                <div class="progress progress-bar-primary mt-25">

                        
                                                    @php     
                                                        $widthPercentage = 0;

                                                        if ($product->price < 100) {
                                                            $widthPercentage = 20;
                                                        } elseif ($product->price <= 10000) {
                                                            $widthPercentage = 30;
                                                        } elseif ($product->price <= 17000) {
                                                            $widthPercentage = 37;
                                                        } elseif ($product->price <= 20000) {
                                                            $widthPercentage = 40;
                                                        } elseif ($product->price <= 25000) {
                                                            $widthPercentage = 50;
                                                        } elseif ($product->price <= 30000) {
                                                            $widthPercentage = 60;
                                                        } elseif ($product->price <= 40000) {
                                                            $widthPercentage = 70;
                                                        } elseif ($product->price <= 50000) {
                                                            $widthPercentage = 80;
                                                        } elseif ($product->price <= 60000) {
                                                            $widthPercentage = 90;
                                                        } else {
                                                            $widthPercentage = 0;
                                                        }
                                                    @endphp
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $widthPercentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $widthPercentage }}%"></div>

                                                </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <div class="col-lg-8 my-4">
                            <canvas id="product-price-chart"></canvas>

                        </div>
                    </div>
              

                  
    
                                    
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  

    

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/extensions/tether.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/extensions/shepherd.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/js/core/app.js')}}"></script>
    <script src="{{asset('assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        var ctx = document.getElementById('product-price-chart').getContext('2d');
        var labels = {!! json_encode($labels) !!};
        var data = {!! json_encode($data) !!};

        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Product Prices',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: '#7367f0 ',
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
<!-- END: Body-->

</html>

