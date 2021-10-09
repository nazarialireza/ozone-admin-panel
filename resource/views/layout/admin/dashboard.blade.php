<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ozone Admin Panel</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">


    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template -->
    <style>
        .navbar{
            border: none;
            border-radius: 0;
            padding-top: 0;
            padding-bottom: 0;
        }
        .navbar .navbar-nav .dropdown-toggle::after{
            display: none;
        }
        .logo-header{
            width: 65px;
            margin-top: 10px;
        }
        .nav-link{
            width: 50px;
            text-align: center;
            padding: 15px;
        }
        .nav-avatar>a>img{
            width: 40px;
            border-radius: 50%;
            padding: 2px;
            margin: 6px;
        }
        .nav-title, .nav-short{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 25px;
            font-size: 12px;
            opacity: 0;
        }
        .navbar .nav-item {
            position: relative;
        }
        .navbar .navbar-nav>.nav-item>a>i{
            font-size: 18px;
        }
        .navbar .mainbar>.nav-item>.active>a,
        .navbar .mainbar>.nav-item>.active>a:focus,
        .navbar .mainbar>.nav-item>.active>a:hover {
            background-color: transparent;
        }
        .navbar .mainbar:hover .nav-item>a {
            transition: 100ms;
            padding-top: 5px;
            padding-bottom: 25px;
        }
        .navbar .mainbar:hover .nav-item>a>.nav-short {
            transition: 100ms;
            opacity: 1;
        }
        .navbar .mainbar>.nav-item:hover a>.nav-short {
            transition: 100ms;
            opacity: 0;
        }
        .navbar .mainbar>.nav-item:hover a>.nav-title {
            transition: 100ms;
            opacity: 1;
            font-size: 14px;
            font-weight: 600;
            background-color:rgba(34,34,34,1);
            padding:0 5px;
            z-index: 1;
        }
        .dropdown-menu-center {
            right: auto;
            left: 50% !important;
            -webkit-transform: translatex(-50%);
            -o-transform: translatex(-50%);
            transform: translatex(-50%);
        }
    </style>
</head>

<body class="wrapper">
@include('layout.admin.include.top_nav')
{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <nav class="col-md-2 d-none d-md-block bg-light sidebar">--}}
{{--            @include('layout.admin.include.sidebar')--}}
{{--        </nav>--}}

{{--        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 content">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="{{ url('assets/js/jquery-3.2.1.slim.min.js') }} " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{ url('assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>--}}
{{--<script type="popper" src="{{ url('assets/js/vendor/popper.min.js')}}"></script>--}}
{{--<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>--}}

<!-- Icons -->
{{--<script src="{{ url('assets/js/feather.min.js')}}"></script>--}}

<!-- Graphs -->
{{--<script src="{{ url('assets/js/Chart.js_2.7.1/Chart.min.js')}}"></script>--}}
<script>
    feather.replace()
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>