<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="" >
        <div class="max-h-40 bg-center bg-auto h-screen flex items-center justify-center"
            style="background-image: url('{{ asset('img/bgTitle.jpg') }}'); background-size: cover;">
            <div class="text-center">   
                <h1 class="text-4xl font-bold text-black">@yield('page_title')</h1>
            </div>
        </div>
    </div>

</body>

</html>
