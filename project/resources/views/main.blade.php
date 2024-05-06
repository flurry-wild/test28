<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Auto CRUD</title>
    <style>
        .p-selectbutton > div:nth-child(1n) {
            background-color: var(--red-500)!important;
        }
        .p-selectbutton > div:nth-child(2n) {
            background-color: var(--green-500)!important;
        }
        .p-selectbutton > div:nth-child(3n) {
            background-color: var(--blue-500)!important;
        }

        .autoColor > .p-highlight {
            border: 3px solid black;
        }
    </style>
</head>
<body class="p-5">

<div id="app">
    @yield('content')
</div>
</body>
</html>
