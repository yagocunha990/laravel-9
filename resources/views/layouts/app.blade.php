<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Curso Laravel 9</title>
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}" type="image/png">

</head>
<body class="bg-gray-50">

    <div class="app">
        @yield('content')
    </div>
</body>
</html>
