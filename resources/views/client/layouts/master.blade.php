<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/client/assets/css/styles.css" />

    <link rel="shortcut icon" href="/client/assets/img/logo.svg" type="image/x-icon">


    <title>Evara Website</title>
</head>

<body>

    <header class="header">

        @include('client.layouts.partials.header')

    </header>


    @yield('content')

    <footer class="footer container">

        @include('client.layouts.partials.footer')

    </footer>


</body>

</html>
