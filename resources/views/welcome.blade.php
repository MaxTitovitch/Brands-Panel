<!doctype html>
<html amp lang="en">
<head>
    <meta charset="utf-8">
    <title>BRAND List</title>
    <link rel="canonical" href="https://amp.dev/ru/documentation/guides-and-tutorials/start/create/basic_markup/">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <style amp-custom>
        .rating {
            --star-size: 2;  /* use CSS variables to calculate dependent dimensions later */
            padding: 0;  /* to prevent flicker when mousing over padding */
            border: none;  /* to prevent flicker when mousing over border */
            unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
            text-align: left;  /* revert the RTL direction */
            user-select: none;  /* disable mouse/touch selection */
            font-size: 3em;  /* fallback - IE doesn't support CSS variables */
            font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
            cursor: pointer;
            /* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            -webkit-tap-highlight-color: transparent;
            margin-bottom: 0.5em;
        }
        /* the stars */
        .rating > label {
            display: inline-block;
            position: relative;
            width: 1.1em;  /* magic number to overlap the radio buttons on top of the stars */
            width: calc(var(--star-size) / 3 * 1.1em);
        }
        input:checked ~ label {
            color: transparent;  /* reveal the contour/white star from the HTML markup */
            cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
        }
        input:checked ~ label:before {
            content: "★";
            position: absolute;
            left: 0;
            color: gold;
        }
        .rating > input {
            position: relative;
            transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
            transform: scale(var(--star-size));
            /* the magic numbers below correlate with the font-size */
            top: -0.5em;  /* margin-top doesn't work */
            top: calc(var(--star-size) / 6 * -1em);
            margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
            margin-left: calc(var(--star-size) / 6 * -5em);
            z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
            opacity: 0;  /* comment to see where the radio buttons are */
            font-size: initial; /* reset to default */
        }

        h1{
            width: 100%;
            text-align: center;
        }
        .brands-container {
            display: flex;
            flex-wrap: wrap;
            align-content: space-between;
            justify-content: end;
        }
        .brands-container>.brand-item {
            width: 20%;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }
        .brands-container>.brand-item:hover {
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            cursor: pointer;
        }
        .brands-container>.brand-item>div {
            margin: 5%;
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .brands-container>.brand-item>div>* {
            width: 100%;
            text-align: center;
        }
        amp-img {
            width: 100%;
        }

        h2>a, h2, h1>a {
            color: black;
            text-decoration: none;
            text-align: center;
            width: 100%;
        }

        h2>a:hover, h1>a:hover {
            opacity: 0.6;
        }

        .brands-link {
            width: 100%;
        }

        ul.pagination {
            display: inline-block;
            padding-inline-start: 0;
            width: 100%;
            text-align: center;
        }

        ul.pagination li {
            display: inline;
        }

        ul.pagination li>* {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        ul.pagination li.disabled {
            opacity: 0.5;
        }

        ul.pagination li.active>* {
            background-color: black;
            color: white;
        }

        ul.pagination li:hover:not(.active):not(.disabled)>* {
            background-color: #ddd;
        }

        ul.pagination li.active:hover,ul.pagination li.disabled:hover  {
            cursor: default;
        }
    </style>
</head>
<body>
<h1><a href="{{ route('user-welcome') }}">BRAND LIST</a></h1>
<div class="brands-container">
    @foreach($brands as $brand)
        <div data-path="{{ route('user-brand', ['id' => $brand->id]) }}" class="brand-item">
            <div>
                <div class="image-container">
                    <amp-img src="{{ $brand->slug }}" alt="Welcome" height="150" onclick="return false"></amp-img>
                </div>
                <h2>{{ $brand->name }}</h2>
                <fieldset class="rating" title="Rated: {{ $brand->rated }} star">
                    <input name="rating-{{ $brand->id }}"
                           type="radio"
                           disabled="disabled"
                           {{ $brand->rated == 5 ? 'checked="checked"' : '' }}
                           id="rating5"
                           value="5">
                    <label for="rating5">☆</label>

                    <input name="rating-{{ $brand->id }}"
                           type="radio"
                           disabled="disabled"
                           {{ $brand->rated == 4 ? 'checked="checked"' : '' }}
                           id="rating4"
                           value="4">
                    <label for="rating4">☆</label>

                    <input name="rating-{{ $brand->id }}"
                           type="radio"
                           disabled="disabled"
                           {{ $brand->rated == 3 ? 'checked="checked"' : '' }}
                           id="rating3"
                           value="3">
                    <label for="rating3">☆</label>

                    <input name="rating-{{ $brand->id }}"
                           type="radio"
                           disabled="disabled"
                           {{ $brand->rated == 2 ? 'checked="checked"' : '' }}
                           id="rating2"
                           value="2">
                    <label for="rating2">☆</label>

                    <input name="rating-{{ $brand->id }}"
                           type="radio"
                           disabled="disabled"
                           {{ $brand->rated == 1 ? 'checked="checked"' : '' }}
                           id="rating1"
                           value="1">
                    <label for="rating1">☆</label>
                </fieldset>
                <p>{{ $brand->ratings_count }} ratings</p>
            </div>
        </div>
    @endforeach
    <div class="brands-link">
        {{ $brands->links() }}
    </div>
    <h2><a href="{{ route('voyager.dashboard') }}">Admin Panel</a></h2>
</div>
<script>
  document.querySelectorAll('.brand-item').forEach((element) => {
    element.onclick = function (event) {
      location.href = element.getAttribute('data-path');
    };
  })
</script>
</body>
</html>