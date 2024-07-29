@php
    $is_lazyload = isset($lazyload) ? $lazyload : true;
@endphp
<div 
    class="property-listing property-ctm" 
    data-lat="{{ $property->latitude }}"
    data-long="{{ $property->longitude }}" 
    bedroom="{{ $property->number_bedroom }}" 
    square="{{ $property->square }}" price="{{ $property->price }}" created_at="{{$property->created_at}}">
    <div class="listing-img-wrapper">
        <a href="{{ $property->url }}">
            @if($is_lazyload)
                <img 
                     src="{{ RvMedia::getImageUrl($property->image ?? '', 'full', false, RvMedia::getDefaultImage()) }}"
                     class="img-fluid mx-auto lazy" alt="{{ $property->name }}"/>
            @else
                <img
                    src="{{ RvMedia::getImageUrl($property->image ?? '', 'full', false, RvMedia::getDefaultImage()) }}"
                    class="img-fluid mx-auto ddsds" alt="{{ $property->name }}"/>
            @endif
            <span class="dark-overlay"></span>

        </a>
        <div class="icon-actions-wrapper">
            <a href="JavaScript:Void(0);" data-id="{{ $property->id }}" class="add-to-wishlist">
                <i class="far fa-heart"></i>
            </a>
        </div>
        <div class="project__list__name project__cat__map p-2">
            <h4 class="listing-name">
                <a href="{{ $property->url }}" class="prt-link-detail"
                    title="{{ $property->name }}">{!! clean($property->name) !!}</a>
            </h4>
            <div class="listing-name truncate cat__map__detail locationname" location="{{$property->location}}">
                {!! clean($property->location) !!}
            </div>
            <div class="cat__map__detail">
                Giá thuê:<span class="price-for-rent"> {{ $property->price_html }}</span>
            </div>
        </div>
        
    </div>


    <div class="listing-content d-none">
        <div class="list-price">
            <div>
                @if (is_review_enabled() && $property->reviews_count > 0)
                    {!! Theme::partial('real-estate.elements.property-review', compact('property')) !!}
                @endif
                        {{-- <span class="prt-types {{ $property->type->slug }}">{{ $property->type_name }}</span> --}}
                @if($property->label)
                    <span class="prt-types rent">{{ $property->label }}</span>
                @endif
            </div>
            <span class="bolders"> {{ $property->price_html }} </span>
        </div>
        <div class="listing-detail-wrapper-box">
            <div class="listing-detail-wrapper">
                <div class="listing-short-detail">
                    <h6 class="listing-name truncate " location="{{$property->location}}">
                        <a href="{{ $property->url }}" title="{{ $property->name }}">{!! clean($property->name) !!}</a>
                    </h6>
                </div>
                <div class="listing-name truncate" location="{{$property->location}}">
                    {!! clean($property->location) !!}
                </div>
            </div>
        </div>

        <div>
            <div class="list-fx-features">
                @if($property->number_bedroom)
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ Theme::asset()->url('img/bed.svg') }}" width="13" alt=""/>
                        </div>
                        {!! clean($property->number_bedroom) !!}
                    </div>
                @endif

                @if($property->number_bathroom)
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ Theme::asset()->url('img/bathtub.svg') }}" width="13" alt=""/>
                        </div>
                        {!! clean($property->number_bathroom) !!}
                    </div>
                @endif

                @if($property->square_text)
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt=""/>
                        </div>
                        {{ $property->square_text }}
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
