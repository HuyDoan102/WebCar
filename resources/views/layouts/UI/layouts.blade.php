<!DOCTYPE HTML>
<html>
<head>
<title>Free Cars-Online Website Template | Home :: w3layouts</title>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!--slider-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</head>

<body>
<div class="header-bg">
    <div class="wrap">
        <div class="h-bg">
            <div class="total">
                @include('layouts.UI.header')
                <div class="banner-top">
                    @yield("UI.content")

                    @include("layouts.UI.sidebar")
                    @include("layouts.UI.footer")
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset("js/google-map.js") }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-KmgyKg1fJoSt8LJIxtgFWPwqsSRKB7M&callback=initMap"
        async defer></script>
</body>
</html>




