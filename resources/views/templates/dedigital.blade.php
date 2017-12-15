<!doctype html>
<html lang="{{config("app.locale")}}">
<head>
@yield("title")

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@yield("meta")

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("templates/dedigital/css/app.css")}}">
</head>
<body>

@include("templates.dedigital._navbar")

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("templates/dedigital/js/app.js")}}"></script>
</body>
</html>