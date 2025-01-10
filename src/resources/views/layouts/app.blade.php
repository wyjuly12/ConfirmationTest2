<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize') }}">
    <link rel="stylesheet" href="{{ asset('css/common') }}">
    @yield('css')
    <title>mogitate</title>
</head>
<body>
    <header>
        <div class="header-title">
            <h2>mogitate</h2>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>