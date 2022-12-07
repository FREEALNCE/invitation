<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{Nfs::app()}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    @include('web.template.css')
    @stack('css')
</head>
<body class="animsition">

    @include('web.template.header')

    @yield('content')

    @include('web.template.footer')

    @include('web.template.js')

    @stack('js')
</body>
</html>