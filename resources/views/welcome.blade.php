@extends('layout.layout')

@section('title')
    @if($detail)
        Affiliate Program List
    @else
        BRAND List
    @endif
@endsection

@section('link')
    @if($detail)
        <span> &gt; </span>
        <a href="{{ route('user-affiliate') }}">Affiliate Program</a>
    @endif
@endsection

@section('content')
    <div class="brand-cart container1200">
        <div class="brand-side brand-side-welcome">
            <div class="brand-section section-main">
                <h3>Find reviews, coupons, and discount policies for any store</h3>
                <div class="user-text">
                    Browse and search through Knoji's directory of over {{ \App\Brand::count() }} retailers and brands. Locate customer reviews, feature comparisons, promo codes, military discounts, free shipping policies, exchange policies and more for any retailer.
                </div>
            </div>
        </div>
        <div class="brand-main brand-main-welcome">
            <h1 class="font-weight-bold">
                Brand Directory
            </h1>
            <form class="search" action="{{ route($detail ? 'user-affiliate' :'user-welcome') }}">
                <input type="hidden" name="sort" value="{{ $sort }}">
                <input id='search-input' name="search" type="text" placeholder="Lookup any brand to get reviews, promo codes & shopping tips" value="{{$search}}">
            </form>
            <div class="links">
                <span class="font-weight-bold text-dark">Sort stores:</span>
                <a class="brand-gray {{ $sort == 'id' ? 'link-active' : '' }}" href="{{ route($detail ? 'user-affiliate' : 'user-welcome') . '?sort=id' . ($search ? "&search=$search" : '')}}">Popularity</a>
                <a class="brand-gray {{ $sort == 'rated' ? 'link-active' : '' }}" href="{{ route($detail ? 'user-affiliate' : 'user-welcome') . '?sort=rated'. ($search ? "&search=$search" : '') }}">Rating</a>
                <a class="brand-gray {{ $sort == 'name' ? 'link-active' : '' }}" href="{{ route($detail ? 'user-affiliate' : 'user-welcome') . '?sort=name'. ($search ? "&search=$search" : '') }}">Alphabetical</a>
            </div>
            <div class="brands-container">
                @forelse ($brands as $brand)
                    @if(!$detail || $brand->affiliateProgram)
                    <div class="brand-item">
                        <div>
                            <div class="image-container brand-linked-image" data-href="{{ route('user-brand', ['id' => $brand->id]) }}">
                                <amp-img src="{{ $brand->slug }}" alt="Welcome" height="100"
                                         onclick="return false"></amp-img>
                            </div>
                            <h4 class="header-link no-line"><a href="{{ route('user-brand', ['id' => $brand->id]) }}">{{ $brand->name }}</a></h4>
                            <fieldset class="rating" title="Rated: {{ $brand->rated }} star">
                                <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled"
                                       {{ $brand->rated == 5 ? 'checked="checked"' : '' }}id="rating5" value="5">
                                <label for="rating5">☆</label>

                                <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled"
                                       {{ $brand->rated == 4 ? 'checked="checked"' : '' }} id="rating4" value="4">
                                <label for="rating4">☆</label>

                                <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled"
                                       {{ $brand->rated == 3 ? 'checked="checked"' : '' }} id="rating3" value="3">
                                <label for="rating3">☆</label>

                                <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled"
                                       {{ $brand->rated == 2 ? 'checked="checked"' : '' }} id="rating2" value="2">
                                <label for="rating2">☆</label>

                                <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled"
                                       {{ $brand->rated == 1 ? 'checked="checked"' : '' }} id="rating1" value="1">
                                <label for="rating1">☆</label>
                            </fieldset>
                            <p class="brand-gray no-line">{{ $brand->reviews }} ratings</p>
                            @if($detail && $brand->affiliateProgram)
                                <a class="detail-button" href="{{ route('user-affiliate-one', ['id' => $brand->affiliateProgram->id]) }}">View details</a>
                            @endif
                        </div>
                    </div>
                    @endif
                @empty
                    <div class="no-brands">
                        No brands found
                    </div>
                @endforelse

                <div class="brands-link">
                    @include('layout.pagination', ['paginator' => $brands, 'quantity' => 2])
                </div>
            </div>
        </div>
    </div>
@endsection
