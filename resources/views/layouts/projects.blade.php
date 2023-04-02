<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="fonts/png" href="/images/Group.png">
    <title>Сайты ozait</title>
</head>
<body>
<div class="wrapper">
    <div class="left">
        <h2>Все работы</h2>
        <div class="links">
            @foreach($categories as $category)
                <div class="link">
                    <img src="{{ asset('storage/'.$category->image) }}" alt="q">
                    <a href="{{ route('projects', $category->slug) }}">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
    @yield('content')
</div>

</body>
</html>
