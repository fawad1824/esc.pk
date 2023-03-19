<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Builderz - Construction Company Website Template</title>
    @include('users.inc.styles')
</head>

<body>
    <div class="wrapper">
        @include('users.inc.header')
        @yield('websitepages')
        @include('users.inc.footer')
    </div>

    @include('users.inc.scripts')
</body>

</html>