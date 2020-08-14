@extends('layout.layout')

@section('title')
    BRAND List
@endsection

@section('content')
    <h1>
        <a href="{{ route('user-welcome') }}">BRAND LIST</a>
    </h1>
    <div class="brands-container">
        @foreach($brands as $brand)
            <div data-path="{{ route('user-brand', ['id' => $brand->id]) }}" class="brand-item">
                <div>
                    <div class="image-container">
                        <amp-img src="{{ $brand->slug }}" alt="Welcome" height="150" onclick="return false"></amp-img>
                    </div>
                    <h2>{{ $brand->name }}</h2>
                    <fieldset class="rating" title="Rated: {{ $brand->rated }} star">
                        <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled" {{ $brand->rated == 5 ? 'checked="checked"' : '' }}id="rating5" value="5">
                        <label for="rating5">☆</label>

                        <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled" {{ $brand->rated == 4 ? 'checked="checked"' : '' }} id="rating4" value="4">
                        <label for="rating4">☆</label>

                        <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled" {{ $brand->rated == 3 ? 'checked="checked"' : '' }} id="rating3" value="3">
                        <label for="rating3">☆</label>

                        <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled" {{ $brand->rated == 2 ? 'checked="checked"' : '' }} id="rating2" value="2">
                        <label for="rating2">☆</label>

                        <input name="rating-{{ $brand->id }}" type="radio" disabled="disabled" {{ $brand->rated == 1 ? 'checked="checked"' : '' }} id="rating1" value="1">
                        <label for="rating1">☆</label>
                    </fieldset>
                    <p>{{ $brand->ratings_count }} ratings</p>
                </div>
            </div>
        @endforeach
        <div class="brands-link">
            {{ $brands->links() }}
        </div>
        <h2 class="text-align-center"><a href="{{ route('voyager.dashboard') }}">Admin Panel</a></h2>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection