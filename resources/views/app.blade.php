<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body>
    @include('includes.sidebar')
        
        @yield('content')

    @include('includes.footer')
</body>

</html>
