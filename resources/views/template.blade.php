<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class='container'>

        <div class='row'>
            <div class='col-lg-4 col-lg-offset-4'>
                <h1>CarDealer XYZ</h1>
            </div>
        </div>
        
        <div class='row'>
            <div class='col-lg-4 col-lg-offset-4'>
                @include('navigation')
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-12'>
                @yield('content')
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-4 col-lg-offset-4'>
                Developed by Kian Nejadfard
            </div>
        </div>
        
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
