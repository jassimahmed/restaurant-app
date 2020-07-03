<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

{{-- SEO --}}
<meta name="description"
  content="{{$settings['seo']->description}}">
<meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
{{-- <link rel="canonical" href="https://codingphase.com/"> --}}
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$settings['general']->site_title}}">
<meta property="og:description"
  content="{{$settings['seo']->description}}">
{{-- <meta property="og:url" content="https://codingphase.com/"> --}}
<meta property="og:site_name" content="{{$settings['general']->site_title}}">
<meta property="og:updated_time" content="2020-02-05T17:41:55+00:00">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$settings['general']->site_title}}">
<meta name="twitter:description"
  content="{{$settings['seo']->description}}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/css/app.css">
