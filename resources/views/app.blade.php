<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body>
    @include('includes.sidebar')
        <div id='app'>
            @yield('content')
        </div>
    @include('includes.footer')
</body>
</html>
