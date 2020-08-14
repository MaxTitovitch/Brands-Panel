@extends('layout.layout')

@section('title')
   {{ $brand->name }} | BRAND
@endsection

@section('content')
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
                    <h2 class="text-align-center">About {{ $brand->name }}</h2>
                    <div class="user-text">
                        {!! $brand->about !!}
                    </div>
                </div>
                <div class="brand-section">
                    <h2>{{ $brand->name }} Review Scorecard</h2>
                    <div>
                        @foreach($brand->scorecards as $scorecard)
                            <div>
                                <p class="accordion-name">
                                    <span>{{ $scorecard->name }}</span>
                                    <span class="brand-badge {{ $scorecard->value == 'Yes' ? 'brand-badge-dark' : '' }}">{{ $scorecard->value == '' ? "?" :  $scorecard->value}}</span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="brand-section">
                    <h2>{{ $brand->name }} Contacts</h2>
                    <div>
                        @foreach($brand->contacts as $contact)
                            <div>
                                <p class="user-text">
                                    <a href="{{ $contact->link }}" target="_blank">{{ $contact->name }}</a>
                                </p>
                            </div>
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
                                        <amp-img src="{{ asset("storage/statistic/{$statistic->value}.png") }}"
                                                 alt="{{ $statistic->value }}" width="75" height="75"
                                                 onclick="return false"></amp-img>
                                    @else
                                        <amp-img src="{{ asset("storage/statistic/none.png") }}"
                                                 alt="{{ $statistic->value }}" width="75" height="75"
                                                 onclick="return false"></amp-img>
                                    @endif
                                </div>
                                <span class="brand-gray">{{ $statistic->name }}</span>
                                <a href="{{ $statistic->link }}" target="_blank">View it</a>
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
                            <div class="brand-strength">
                                <p class="user-text">
                                    <span class="brand-gray">{{ $strength->name }}</span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="brand-section">
                    <h2>{{ $brand->name }} Ratings: Discount, Payments & Shipping Policies</h2>
                    <div class="user-text">
                        @foreach($brand->ratings as $rating)
                            <div class="brand-rating">
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
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="brand-section">
                    <h2>{{ $brand->name }} FAQ</h2>
                    <div class="user-text">
                        @foreach($brand->faqs as $faq)
                            <div class="brand-rating">
                                <strong>{{ $faq->name }}</strong>
                                <div class="user-text">
                                    {{ $faq->value }}
                                    <a href="{{ $faq->link }}" target="_blank">Show it</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <h2 class="action-list text-align-center">
            <a href="{{ route('user-welcome') }}">BRAND LIST</a>
            <a href="{{ route('voyager.dashboard') }}">Admin Panel</a>
        </h2>
    </div>
@endsection