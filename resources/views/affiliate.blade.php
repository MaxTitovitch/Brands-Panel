@extends('layout.layout')

@section('title')
   {{ $brand->name }} | BRAND
@endsection

@section('link')
    <span> &gt; </span>
    <a href="{{ route('user-brand', ['id' => $brand->id]) }}">{{ $brand->name }}</a>
    <span> &gt; </span>
    <a href="{{ route('user-affiliate-one', ['id' => $brand->affiliateProgram->id]) }}">Reviews</a>
@endsection



@section('content')
    <div class="brands-container">
        <div class="brand-cart container1200">
            <div class="brand-side">
                <div class="image-container">
                    <a class="brand-gray" href="https://{{ $brand->link }}" target="_blank">
                        <amp-img src="{{ $brand->slug }}" alt="Welcome" width="150" height="100"></amp-img>
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
            </div>
            <div class="brand-main">
                <div class="brand-section">
                    <h1>Does {{ $brand->name }} offer an affiliate program?</h1>
                    <div class="user-text">
                        {!! $brand->affiliateProgram->text !!}
                    </div>
                </div>
                <div class="brand-section">
                    <span class="brand-gray">Affiliate programs rating: </span>
                    <fieldset class="rating rating-inline" title="Rated: {{ $brand->affiliateProgram->rating }} star">
                        <input name="user-rating4-{{ $brand->id }}"
                               type="radio"
                               disabled="disabled"
                               {{ (int)$brand->affiliateProgram->rating == 5 ? 'checked="checked"' : '' }}
                               id="rating5"
                               value="5">
                        <label for="rating5">☆</label>

                        <input name="user-rating4-{{ $brand->id }}"
                               type="radio"
                               disabled="disabled"
                               {{ (int)$brand->affiliateProgram->rating == 4 ? 'checked="checked"' : '' }}
                               id="rating4"
                               value="4">
                        <label for="rating4">☆</label>

                        <input name="user-rating4-{{ $brand->id }}"
                               type="radio"
                               disabled="disabled"
                               {{ (int)$brand->affiliateProgram->rating == 3 ? 'checked="checked"' : '' }}
                               id="rating3"
                               value="3">
                        <label for="rating3">☆</label>

                        <input name="user-rating4-{{ $brand->id }}"
                               type="radio"
                               disabled="disabled"
                               {{ (int)$brand->affiliateProgram->rating == 2 ? 'checked="checked"' : '' }}
                               id="rating2"
                               value="2">
                        <label for="rating2">☆</label>

                        <input name="user-rating4-{{ $brand->id }}"
                               type="radio"
                               disabled="disabled"
                               {{ (int)$brand->affiliateProgram->rating == 1 ? 'checked="checked"' : '' }}
                               id="rating1"
                               value="1">
                        <label for="rating1">☆</label>
                    </fieldset>
                    <span class="brand-gray">{{ $brand->affiliateProgram->rating }} starts</span>
                </div>

                <div class="brand-section">
                    <div class="user-text mt-15">
                        {!! $brand->affiliateProgram->description_first !!}
                    </div>
                    <div class="user-text mt-15">
                        <ul class="ul-value">
                        @foreach($brand->affiliateProgram->programValues as $value)
                           <li>
                               @if($value->value == 'Yes')
                                   {{ $value->programCategory->name }}:  <span class="yes-value">✔</span> <strong>{{ $value->value }}</strong> — <a href="{{ $value->value }}"><strong>Check status →</strong></a>
                               @else
                                   {{ $value->programCategory->name }}:  <strong>{{ $value->value }}</strong> — <a href="{{ $value->value }}">Check status</a>
                               @endif
                           </li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="user-text mt-15">
                        {!! $brand->affiliateProgram->description_second !!}
                    </div>
                    <div class="user-text mt-15">
                        {!! $brand->affiliateProgram->update_text !!}
                    </div>

                    <div class="user-text mt-15">
                        <div class="user-text">
                            <span class="btn-update">Update</span>
                            <strong>Amazon</strong> is also offering <a href="{{ $brand->affiliateProgram->amazon_link }}">discounts on select {{ $brand->affiliateProgram->name }} items</a> today. <a href="{{ $brand->affiliateProgram->amazon_link }}">Get this deal >></a>
                        </div>
                    </div>

                    <div class="user-text mt-15">
                        <div class="align-left brand-gray">
                            This user rated {{ $brand->name }}'s affiliate programs:
                            <fieldset class="rating rating-inline" title="Rated: {{ $brand->affiliateProgram->amazon_rating }} star">
                                <input name="user-rating5-{{ $brand->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ (int)$brand->affiliateProgram->amazon_rating == 5 ? 'checked="checked"' : '' }}
                                       id="rating5"
                                       value="5">
                                <label for="rating5">☆</label>

                                <input name="user-rating5-{{ $brand->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ (int)$brand->affiliateProgram->amazon_rating == 4 ? 'checked="checked"' : '' }}
                                       id="rating4"
                                       value="4">
                                <label for="rating4">☆</label>

                                <input name="user-rating5-{{ $brand->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ (int)$brand->affiliateProgram->amazon_rating == 3 ? 'checked="checked"' : '' }}
                                       id="rating3"
                                       value="3">
                                <label for="rating3">☆</label>

                                <input name="user-rating5-{{ $brand->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ (int)$brand->affiliateProgram->amazon_rating == 2 ? 'checked="checked"' : '' }}
                                       id="rating2"
                                       value="2">
                                <label for="rating2">☆</label>

                                <input name="user-rating5-{{ $brand->id }}"
                                       type="radio"
                                       disabled="disabled"
                                       {{ (int)$brand->affiliateProgram->amazon_rating == 1 ? 'checked="checked"' : '' }}
                                       id="rating1"
                                       value="1">
                                <label for="rating1">☆</label>
                            </fieldset>
                            5.0
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection