@php
    $img_slider = isset($img_slider) ? $img_slider : true;
    $is_lazyload = isset($lazyload) ? $lazyload : true;

@endphp
<div 
    class="property-listing property-item property-2 {{ $class_extend ?? '' }}" 
    data-lat="{{ $property->latitude }}"
    data-long="{{ $property->longitude }}">

    <div class="listing-img-wrapper">
        <div class="list-img-slide">
            <div class="click @if (!$img_slider) not-slider @endif">
                @foreach ($property['images'] as $image)
                    <div>
                        <a href="{{ $property->url }}">
                            {{-- <div class="cat__inner__image">
                                <a href="">Văn phòng Hạng A</a>
                            </div> --}}

                            @if ($is_lazyload)
                                <img src="{{ get_image_loading() }}"
                                    data-src="{{ RvMedia::getImageUrl($image, 'full', false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid mx-auto lazy" alt="{{ $property->name }}" />
                            @else
                                <img src="{{ RvMedia::getImageUrl($image, 'full', false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid mx-auto" alt="{{ $property->name }}" />
                            @endif
                        </a>
                    </div>
                    @if (!$img_slider)
                    @break
                @endif
            @endforeach
        </div>
    </div>

    <div class="icon-actions-wrapper">
        <a href="JavaScript:Void(0);" data-id="{{ $property->id }}" class="add-to-wishlist">
            <i class="far fa-heart"></i>
        </a>
    </div>
    <div class="project__list__name p-2">
        <h4 class="listing-name">
            <a href="{{ $property->url }}" class="prt-link-detail"
                title="{{ $property->name }}">{!! clean($property->name) !!}</a>
        </h4>
    </div>
</div>



<div class="listing-detail-wrapper">
    <div class="listing-short-detail-wrap">
        <div class="listing-short-detail">
            <div class="list-price home__list__price d-flex justify-flex-start">
                <h6 class="listing-card-info-price project__price px-0 property__price">
                    {{ $property->price_html }}
                </h6>
                @php
                    $customFields = $property->customFields()->get();
                    $array = collect($customFields)->toArray();
                    $level = array_column($array, 'name', 'value');
                @endphp
                @foreach ($level as $name => $value)
                    @if ($value)
                        <span class="prt-types rent d-none">
                            {!! clean($value) !!}: {!! __($name) !!}
                        </span>
                    @endif
                @endforeach

                <span>
                    {{-- @if ($level->name)
                        {!! clean($level->name) !!} {!! __('Bedsssss') !!}
                    @endif --}}

                    {{-- <span class="prt-types rent">{!! echo $level->value; !!}</span> --}}
                </span>
            </div>
            {{-- @if (RealEstateHelper::isEnabledReview())
                {!! Theme::partial('real-estate.elements.property-review', compact('property')) !!}
            @endif --}}
        </div>
    </div>
</div>
<div class="listing-detail-footer d-none">
    <div class="footer-first">
        <div class="foot-location">
            <span>
                <img src="{{ Theme::asset()->url('img/pin.svg') }}" width="18" alt="{!! clean($property->city_name) !!}" />
                78.4 - 86.3 - 170 - 180 - 210m2</span>
        </div>
    </div>
</div>
<div class="listing-detail-footer d-none">
    <div class="footer-first">
        @if ($property->location)
            <div class="foot-location">
                {!! clean($property->location) !!}
            </div>
        @endif
        {{-- 
        @if ($property->number_bathroom)
            <div class="listing-card-info-icon">
                <div class="inc-fleat-icon">
                    <img src="{{ Theme::asset()->url('img/bathtub.svg') }}" width="13" alt="" />
                </div>
                {!! clean($property->number_bathroom) !!} {!! __('Bath') !!}
            </div>
        @endif
        @if ($property->square_text)
            <div class="listing-card-info-icon">
                <div class="inc-fleat-icon">
                    <img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt="" />
                </div>
                {{ $property->square_text }}
            </div>
        @endif --}}
    </div>

</div>

<div class="d-flex justify-content-between consultant__box px-3 py-3">
    <div class="d-flex g-3 justify-content-center consultant__item">
        <a href="{{ $property->url }}">
                <span class="text-sm text-gray-600"> {{ __('View') }} </span>
                <img
            alt="Contact icon" srcset="" src="https://vanphong.com.vn/storage/consultant/detail.png" width="18" height="18" decoding="async"
            data-nimg="1" loading="lazy" style="color: transparent;">
            </a>
    </div>
    <button data-bs-toggle="modal" data-bs-target="#modal{{$property->getKey()}}" type="button" aria-label="Open a pop-up window with an agent contact form"
        class="hover-animation flex items-center gap-x-2 text-sm font-semibold px-0 text-gray-950 hover:text-gray-900 contract-btn">Contact<img
            alt="Contact icon" srcset="" src="https://vanphong.com.vn/storage/consultant/paper.png" width="24" height="24" decoding="async"
            data-nimg="1" loading="lazy" style="color: transparent;">
    </button>
</div>




<div class="listing-detail-footer d-none">
    <div class="footer-first">
        <div class="foot-location d-flex">
            <img src="{{ Theme::asset()->url('img/pin.svg') }}" width="18" alt="{!! clean($property->city_name) !!}" />

        </div>
    </div>
    <div class="footer-flex">
        <a href="{{ $property->url }}" class="prt-view">{{ __('View') }}</a>
    </div>
</div>
</div>

@push('modals')
<!-- Modal -->
<div class="modal fade" id="modal{{$property->getKey()}}" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 30%!important">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-1">
                <div class="details-sidebar">
                    <div class="sides-widget-body simple-form pb-1">
                        {!! Theme::partial('real-estate.elements.form-contact-consult', ['data' => $property]) !!}
                    </div>
                    {!! dynamic_sidebar('property_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endpush()