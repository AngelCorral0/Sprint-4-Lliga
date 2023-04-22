<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    <meta name ="description" content="@yield('meta-descritpion', 'default meta description')"/>
</head>
<body>
    @yield('content')
    @yield('pepe')
    
</body>
</html>