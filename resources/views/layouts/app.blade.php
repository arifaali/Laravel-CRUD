<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @include('includes.header')

    <div>
        <!-- Your main content here -->
        @yield('content')
    </div>

    <!-- Your footer content here -->
</body>

</html>
