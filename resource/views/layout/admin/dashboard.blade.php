<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>Ozone Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>

    </style>
</head>

<body class="wrapper">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        @include('layout.admin.include.top_nav')
    </nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            @include('layout.admin.include.sidebar')
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 content">
            @yield('content')
        </main>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url('assets/js/jquery-3.2.1.slim.min.js') }} " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ url('assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{ url('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>

<!-- Icons -->
<script src="{{ url('assets/js/feather.min.js')}}"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="{{ url('assets/js/Chart.js_2.7.1/Chart.min.js')}}"></script>
<script>
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