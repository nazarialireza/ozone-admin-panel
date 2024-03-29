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
    <link rel="stylesheet" href="{{url('assets/vendors/fa/css/all.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template -->

</head>

<body class="wrapper">
@include('layout.admin.include.top_nav')
<div class="container-fluid">
    <div class="row flex-nowrap ">
{{--        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark _sidebar">--}}
{{--            @include('layout.admin.include.sidebar')--}}
{{--        </div>--}}
        <div role="main" class="col py-3 content">
            @yield('content')
        </div>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url('assets/js/jquery-3.2.1.slim.min.js') }} " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ url('assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
<script type="popper" src="{{ url('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>

<!-- Icons -->
<script src="{{ url('assets/js/feather.min.js')}}"></script>

<!-- Graphs -->
<script src="{{ url('assets/js/Chart.js_2.7.1/Chart.min.js')}}"></script>
<script src="{{ url('assets/js/app.js')}}"></script>

<script>
    //feather.replace()
    // var ctx = document.getElementById("myChart");
    // var myChart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    //         datasets: [{
    //             data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
    //             lineTension: 0,
    //             backgroundColor: 'transparent',
    //             borderColor: '#007bff',
    //             borderWidth: 4,
    //             pointBackgroundColor: '#007bff'
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero: false
    //                 }
    //             }]
    //         },
    //         legend: {
    //             display: false,
    //         }
    //     }
    // });
</script>
</body>
</html>