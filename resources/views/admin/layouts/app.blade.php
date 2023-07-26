<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color:rgba(3, 35, 16, 0.619);">
    <section class="container px-4 mx-auto py-4"> 
        @yield('header') 
        <div> 
            <x-messages/>
            @yield('content')
        </div> 
    </section>
</body>
</html>