<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/page1.css">
        <link rel="stylesheet" href="assets/css/page3.css">
    </head>
    <body>
        <div class="base-container">
            <div class="main-container">
                @yield('content')
            </div>
        </div>
    </body>
</html>