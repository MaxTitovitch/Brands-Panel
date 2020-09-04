<!doctype html>
<html amp lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @section('title')
        @show
    </title>
    <link rel="canonical" href="https://amp.dev/ru/documentation/guides-and-tutorials/start/create/basic_markup/">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <script type="application/ld+json">{"@context": "http://schema.org","@type": "NewsArticle", "headline": "Open-source framework for publishing content","datePublished": "2015-10-07T12:02:41Z","image": ["logo.jpg"]} </script>

    <style amp-boilerplate>@import url('/css/amp-logic.css');</style>
    <noscript><style amp-boilerplate>@import url('/css/amp-noscript.css');</style></noscript>
    <style amp-custom> @import url('/css/style.css'); </style>
</head>
<body>
    <header>
        <div class="first-header">
            <a href="{{ route('user-welcome') }}">Home</a>
            <a href="{{ route('user-affiliate') }}">Affiliate Programs</a>
            <span class="header-spacer"></span>
            <a class="font-weight-bold" href="{{ route('voyager.login') }}">Sing In</a>
        </div>
        <div class="second-header">
            <div class="second-data">
                <amp-img src="{{ asset('img/icon.png') }}" alt="Brand Panel" height="40" width="40" onclick="return false"></amp-img>
                <a class="font-weight-bold" href="{{ route('user-welcome') }}">Brand Panel</a>
                @section('link')
                @show
            </div>
        </div>
    </header>

    @section('content')
    @show

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>


    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>