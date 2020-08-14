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
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
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
            /*left: 0;*/
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
            margin-left: 20px;
            margin-right: 20px;
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

        h2 {
            margin-top: 50px;
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

        .action-list a{
           padding: 10px;
        }

        .brand-cart {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: end;
        }

        .brand-cart .brand-side {
            width: 25%;
        }

        .brand-cart .brand-main {
            width: 75%;
        }

        .brand-gray{
            width: 100%;
            text-align: center;
            text-decoration: none;
            color: gray;
        }

        .image-container, .brand-side {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .brand-side>* {
            width: 100%;
            text-align: center;
        }
        .rating {
            text-align: center;
        }

        .brand-section {
            margin-top: 10px;
        }

        .brand-badge {
            background: white;
            color: black;
            text-align: left;
            padding: 1px 10px;
            border-radius: 5px;
            display: inline-block;
            border: 1px solid gray;
        }

        .brand-badge-dark {
            background: black;
            color: white;
            border: 0;
        }

        .accordion-name {
            padding-left: 10px;
            text-align: left;
            font-weight: normal;
        }

        .user-text a{
            color: #62a8ea;
            text-decoration: none;
        }

        .brand-section {
            padding-left: 10px;
            text-align: justify;
        }

        .statistic-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .statistic-section>* {
            display: flex;
            width: 12.5%;
            flex-wrap: wrap;
            flex-direction: column;
            text-align: center;
            flex-basis: 12.5%;
            justify-content: space-between;
        }


        .statistic-value {
            height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-text {
            font-size: 2em;
        }

        .statistic-item>* {
            width: 100%;
            display: inline-block;
            margin-top: 5px;
        }

        .brand-strength {
            margin-left: 20px;
        }
        .brand-strength span:before{
            color: #98cb00;
            display: inline-block;
            font: normal 20px/20px helvetica;
            width: 30px;
            content: '✔';
        }

        .rating-inline {
            display: inline;
            --star-size: 1;
            margin-left: 10px;
        }

        .brand-rating {
            margin-bottom: 20px;
        }
</style>
</head>
<body>
{{--<h1><a href="{{ route('user-welcome') }}">BRAND LIST</a></h1>--}}
<div class="brands-container">
    <div class="brand-cart">
        <div class="brand-side">
            <div class="image-container">
                <a class="brand-gray" href="https://{{ $brand->link }}" target="_blank">
                    <amp-img src="{{ $brand->slug }}" alt="Welcome" height="150"></amp-img>
                </a>
                <a class="brand-gray" href="https://{{ $brand->link }}" target="_blank">
                    {{ $brand->link }}
                </a>
            </div>
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
            <span class="brand-gray">
                Rated: <strong>{{ $brand->rated }}</strong> - {{ $brand->reviews }} reviews
            </span>
            <div class="brand-section">
                <h2>About {{ $brand->name }}</h2>
                <div class="user-text">
                    {!! $brand->about !!}
                </div>
            </div>
            <div class="brand-section">
                <h2>{{ $brand->name }} Review Scorecard</h2>
                <div>
                    @foreach($brand->scorecards as $scorecard)
                        <section>
                            <p class="accordion-name">
                                <span>{{ $scorecard->name }}</span>
                                <span class="brand-badge {{ $scorecard->value == 'Yes' ? 'brand-badge-dark' : '' }}">{{ $scorecard->value == '' ? "?" :  $scorecard->value}}</span>
                            </p>
                        </section>
                    @endforeach
                </div>
            </div>
            <div class="brand-section">
                <h2>{{ $brand->name }} Contacts</h2>
                <div>
                    @foreach($brand->contacts as $contact)
                        <section>
                            <p class="user-text">
                                <a href="{{ $contact->link }}">{{ $contact->name }}</a>
                            </p>
                        </section>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="brand-main">
            <div class="brand-section">
                <h1><a href="https://{{ $brand->link }}" target="_blank">{{ $brand->name }}</a></h1>
                <div class="user-text">
                    {!! $brand->description !!}
                </div>
            </div>
            <div class="brand-section">
                <div class="statistic-section">
                    @foreach($brand->statistics as $statistic)
                        <div class="statistic-item user-text">
                            <div class="statistic-value">
                                @if($statistic->name == 'Overall Score')
                                    <span class="image-text">
                                        <strong><big>{{ $statistic->value }}</big></strong> / 5
                                    </span>
                                @elseif($statistic->name == 'Active Promo Codes')
                                    <span class="image-text">
                                        <strong><big>{{ $statistic->value }}</big></strong>
                                    </span>
                                @elseif(in_array($statistic->value, ['yes', 'no', '1', '2', '3', '4', '5']))
                                    <amp-img  src="{{ asset("storage/statistic/{$statistic->value}.png") }}" alt="{{ $statistic->value }}" width="75" height="75" onclick="return false"></amp-img>
                                @else
                                    <amp-img src="{{ asset("storage/statistic/none.png") }}" alt="{{ $statistic->value }}" width="75" height="75" onclick="return false"></amp-img>
                                @endif
                            </div>
                            <span class="brand-gray">{{ $statistic->name }}</span>
                            <a href="{{ $statistic->link }}">View it</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="brand-section">
                <h2>{{ $brand->name }} Review</h2>
                <div class="user-text">
                    {!! $brand->review !!}
                    <p><strong>{{ $brand->name }}</strong> strengths are:</p>
                    @foreach($brand->strengths as $strength)
                        <section class="brand-strength">
                            <p class="user-text">
                                <span class="brand-gray">{{ $strength->name }}</span>
                            </p>
                        </section>
                    @endforeach
                </div>
            </div>
            <div class="brand-section">
                <h2>{{ $brand->name }} Ratings: Discount, Payments & Shipping Policies</h2>
                <div class="user-text">
                    @foreach($brand->ratings as $rating)
                        <section class="brand-rating">
                            <strong>{{ $rating->name }}</strong>
                            <fieldset class="rating rating-inline" title="Rated: {{ $rating->star }} star">
                                <input name="user-rating-{{ $rating->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ $rating->star == 5 ? 'checked="checked"' : '' }}
                                       id="rating5"
                                       value="5">
                                <label for="rating5">☆</label>

                                <input name="user-rating-{{ $rating->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ $rating->star == 4 ? 'checked="checked"' : '' }}
                                       id="rating4"
                                       value="4">
                                <label for="rating4">☆</label>

                                <input name="user-rating-{{ $rating->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ $rating->star == 3 ? 'checked="checked"' : '' }}
                                       id="rating3"
                                       value="3">
                                <label for="rating3">☆</label>

                                <input name="user-rating-{{ $rating->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ $rating->star == 2 ? 'checked="checked"' : '' }}
                                       id="rating2"
                                       value="2">
                                <label for="rating2">☆</label>

                                <input name="user-rating-{{ $rating->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ $rating->star == 1 ? 'checked="checked"' : '' }}
                                       id="rating1"
                                       value="1">
                                <label for="rating1">☆</label>
                            </fieldset>
                            <div class="user-text">
                                {!! $rating->description !!}
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
            <div class="brand-section">
                <h2>{{ $brand->name }} FAQ</h2>
                <div class="user-text">
                    @foreach($brand->faqs as $faq)
                        <section class="brand-rating">
                            <strong>{{ $faq->name }}</strong>
                            <div class="user-text">
                                {{ $faq->value }}
                                <a href="{{ $faq->link }}">Show it</a>
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <h2 class="action-list">
        <a href="{{ route('user-welcome') }}">BRAND LIST</a>
        <a href="{{ route('voyager.dashboard') }}">Admin Panel</a>
    </h2>
</div>
</body>
</html>