<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <title>Welcome to Hayche Network</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/css.css?family=Montserrat:400,700%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>
<body>
    <div class="page">
        @yield('content')
    </div>


<script src="{{ asset('landing/js/core.min.js') }}"></script>
<script src="{{ asset('landing/js/script.js') }}"></script>
</body>
</html>
