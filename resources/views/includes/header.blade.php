<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="referrer" content="always">
<meta name="robots" content="all,index,follow">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=yes"/>
<meta name="author" content="passodeluz.com">

<!-- Favicon -->
<link rel="shortcut icon" href="/img/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="apple-mobile-web-app-title" content="Jubbart">
<meta name="application-name" content="Jubbart">
<meta name="theme-color" content="#ffffff">

<title><?php echo setting('site.title') ?> @yield('title')</title>
<meta name="description" content="{{ setting('site.description') }}">

<meta property="og:url"    content="http://jubbart.com.br" />
<meta property="og:title"  content="Jubbart" />
<meta property="og:image"  content="{{ Voyager::image(setting('site.logo')) }}" />

<!-- STL -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<link rel="shortcut icon" href="{{ Voyager::image(setting('site.logo')) }}" type="image/x-icon">

