<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="INDEX,FOLLOW" />
    <!-- ==== Document Title ==== -->
    <link rel="canonical"  href="{{url()->current()}}"/>
    @yield('title')
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="matnamvn.com" />
    <meta property="og:url" content="{{url()->current()}}" />
    @include('frontend.manager.link.css')
</head>