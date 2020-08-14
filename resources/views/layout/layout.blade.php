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

    <style amp-boilerplate>@import url('css/amp-logic.css');</style>
    <noscript><style amp-boilerplate>@import url('css/amp-noscript.css');</style></noscript>
    <style amp-custom> @import url('css/style.css'); </style>
</head>
<body>
    @section('content')
    @show

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>

    @section('script')
    @show
</body>
</html>