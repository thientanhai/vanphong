<!-- ============================ Hero Banner  Start================================== -->
<div class="home-slider margin-bottom-0" data-slider-auto="{{ theme_option('enable_header_slider_homepage_auto_slide') }}">
    @foreach ($properties as $property)
        <div
            data-background-image="{{ RvMedia::getImageUrl(current($property->images) ?? '', null, false, RvMedia::getDefaultImage()) }}"
            class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="modern-pro-wrap">
                                    <span class="prt-types">{{ $property->type->label() }}</span>
                                    <span class="property-featured theme-bg">{{ __('Featured') }}</span>
                                </div>
                                <div class="home-slider-title">
                                    <h3><a href="{{ $property->url }}">{!! clean($property->name) !!}</a></h3>
                                    <span><i class="lni-map-marker"></i> {!! clean($property->location) !!}</span>
                                </div>

                                <div class="slide-property-info">
                                    <ul>
                                        <li>{!! __('Beds') !!}: {!! clean($property->number_bedroom) !!}</li>
                                        <li>{!! __('Bath') !!}: {!! clean($property->number_bathroom) !!}</li>
                                        <li>{!! __('Sqft') !!}: {!! clean($property->square_text) !!}</li>
                                    </ul>
                                </div>

                                <div class="listing-price-with-compare">
                                    <h4 class="list-pr theme-cl"> {{ $property->price_html }} </h4>
                                    <div class="lpc-right icon-actions-wrapper">
                                        <a href="{{ $property->url }}" data-bs-toggle="tooltip" data-placement="top"
                                           title="{{ $property->name }}">
                                            <i class="ti-control-shuffle"></i>
                                        </a>
                                        <a href="JavaScript:Void(0);" data-id="{{ $property->id }}" class="add-to-wishlist"><i class="ti-heart"></i></a>
                                    </div>
                                </div>

                                <a href="{{ $property->url }}" class="read-more">{{ __('View Details') }}
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <!-- Slide Title / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
