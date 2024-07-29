@php
    Theme::asset()->usePath()->add('leaflet-css', 'plugins/leaflet.css');
    Theme::asset()->usePath()->add('jquery-bar-rating', 'plugins/jquery-bar-rating/themes/fontawesome-stars.css');
    Theme::asset()->container('footer')->usePath()->add('leaflet-js', 'plugins/leaflet.js');
    Theme::asset()->usePath()->add('magnific-css', 'plugins/magnific-popup.css');
    Theme::asset()->container('footer')->usePath()->add('magnific-js', 'plugins/jquery.magnific-popup.min.js');
    Theme::asset()->container('footer')->usePath()->add('property-js', 'js/property.js');
    Theme::asset()
        ->container('footer')
        ->usePath()
        ->add('jquery-bar-rating-js', 'plugins/jquery-bar-rating/jquery.barrating.min.js');
    Theme::asset()->container('footer')->usePath()->add('wishlist', 'js/wishlist.js', [], []);
    $headerLayout = MetaBox::getMetaData($property, 'header_layout', true);
    $headerLayout = !empty($headerLayout) ? $headerLayout : theme_option('property_header_layout', 'layout-1');
    $allowShareViaWhatsapp = theme_option('allow_share_via_whatsapp', 'no');
    $video = $property->getMetaData('video', true);
    $videoUrl = $video['url'] ?? '';
    $propertyLabel = $property->label;

    $dataPropertyRate = $property->getMetaData('property_rate');
    $propertyRate = $dataPropertyRate[0] ?? null;
@endphp

{!! Theme::partial('real-estate.properties.headers.' . $headerLayout, compact('property', 'propertyLabel')) !!}


<!-- ============================ Property Detail Start ================================== -->
<section class="property-detail gray-simple">
    <div data-property-id="{{ $property->id }}"></div>
    <div class="container">
        <div class="row">
            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!--Infomation-->
                @if (count($property->facilities))
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <h3>Thông số tòa nhà</h3>
                        </div>

                        <div id="clNine" class="panel-collapse collapse show">
                            <div class="block-body">
                                <div class="nearby-wrap">
                                    <div class="price__rent property__rate">
                                        <ul>

                                            @if ($propertyRate)
                                                <li>
                                                    <span>
                                                        <svg width="35" height="35" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_2006_392)">
                                                                <path d="M7.83602 26.8359H1.16602V7.33594H7.83602"
                                                                    stroke="#222531" stroke-width="1.5"
                                                                    stroke-miterlimit="10"
                                                                    stroke-linecap="square" />
                                                                <path d="M20.166 26.8359H26.836V19.3359H20.166"
                                                                    stroke="#222531" stroke-width="1.5"
                                                                    stroke-miterlimit="10"
                                                                    stroke-linecap="square" />
                                                                <path d="M19.5 1.16797H8.5V26.835H19.5V1.16797Z"
                                                                    stroke="#222531" stroke-width="1.5"
                                                                    stroke-miterlimit="10"
                                                                    stroke-linecap="square" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_2006_392">
                                                                    <rect width="28" height="28"
                                                                        fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>

                                                    </span>
                                                    <div class="info"><strong>Hạng văn
                                                            phòng</strong><span>{!! $propertyRate !!}</span></div>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="neary_section_list">
                                        @foreach ($property->facilities as $facility)
                                            <div class="icon">
                                                <i
                                                    class="@if ($facility->icon) {{ $facility->icon }} @else fas fa-check @endif"></i>
                                            </div>
                                            <div class="neary_section d-grid">
                                                <div class="neary_section_first">
                                                    <h4 class="nearby_place_title">{{ $facility->name }}</h4>
                                                </div>
                                                <div class="neary_section_last">
                                                    <small
                                                        class="reviews-count">{{ $facility->pivot->distance }}</small>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                <!-- Single Block Wrap - Features -->
                {!! Theme::partial('real-estate.elements.features', ['property' => $property]) !!}

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <h3 class="property_block_title">{{ __('Description') }}</h3>
                    </div>
                    <div class="block-body product__description">
                        {!! $property->content !!}
                    </div>
                </div>

                <!-- Single Block Wrap - Amenities -->
                {{-- {!! Theme::partial('real-estate.elements.amenities', ['property' => $property]) !!} --}}

                <!-- Single Block Wrap - Video -->
                {!! Theme::partial('real-estate.elements.video', ['object' => $property]) !!}

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">
                    <div class="property_block_wrap_header">
                        <h3 class="property_block_title">{{ __('Location') }}</h3>
                    </div>

                    <div class="panel-collapse collapse show">
                        <div class="block-body">


                            @if ($property->latitude && $property->longitude)
                                <p>{{ $property->location }}</p>
                                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?q={{ $property->latitude }} ,{{ $property->longitude }}&hl=es&z=14&amp;output=embed">
                                </iframe>
                            @else
                                {!! Theme::partial('real-estate.elements.gmap-canvas', ['location' => $property->location]) !!}
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap - Gallery -->
                {!! Theme::partial('real-estate.elements.gallery', compact('property')) !!}

                <!-- Single Block Wrap - Nearby -->
                {!! Theme::partial('real-estate.elements.nearby', ['property' => $property]) !!}

                @if (RealEstateHelper::isEnabledReview())
                    <!-- Single Review -->
                    <div id="reviewWrapper">
                        @include(Theme::getThemeNamespace('views.real-estate.partials.reviews'), [
                            'model' => $property,
                        ])
                    </div>
                @endif
            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">

                <!-- Like And Share -->
                <div class="like_share_wrap b-0">
                    <ul class="like_share_list justify-content-center">
                        <li class="social_share_list">
                            <a href="JavaScript:void(0);" class="btn btn-likes" data-bs-toggle="tooltip"
                                data-original-title="Share"><i class="fas fa-share"></i>{{ __('Share') }}</a>
                            <div class="social_share_panel">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&title={{ $property->description }}"
                                    target="_blank" class="cl-facebook"><i class="lni-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ $property->description }}"
                                    target="_blank" class="cl-twitter"><i class="lni-twitter"></i></a>
                                <a href="https://linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&summary={{ rawurldecode($property->description) }}&source=Linkedin"
                                    target="_blank" class="cl-linkedin"><i class="lni-linkedin"></i></a>
                                @if ($allowShareViaWhatsapp == 'yes')
                                    <a href="https://api.whatsapp.com/send?text={{ rawurldecode($property->description) }} {{ urlencode(url()->current()) }}"
                                        data-action="share/whatsapp/share" target="_blank" class="cl-linkedin"><i
                                            class="lni-whatsapp"></i></a>
                                @endif
                            </div>
                        </li>
                        <li><a href="JavaScript:Void(0);" data-id="{{ $property->id }}"
                                class="btn btn-likes add-to-wishlist" data-bs-toggle="tooltip"
                                data-original-title="Save"><i class="fas fa-heart"></i>{{ __('Save') }}</a></li>
                    </ul>
                </div>

                <div class="details-sidebar">
                    @if ($author = $property->author)
                        <!-- Agent Detail -->
                        <div class="sides-widget">
                            <div class="sides-widget-header">
                                @if ($author->username)
                                    <div class="agent-photo">
                                        <img src="{{ RvMedia::getImageUrl($author->avatar->url, 'thumb') }}"
                                            alt="{{ $author->name }}">
                                    </div>
                                    <div class="sides-widget-details">
                                        <h4>
                                            <a href="{{ route('public.agent', $author->username) }}">
                                                {{ $author->name }}</a>
                                        </h4>
                                        <a href="tel:{{ $author->phone }}"> <span><i
                                                    class="lni-phone-handset"></i>{{ $author->phone }}</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                @endif
                            </div>

                            <div class="sides-widget-body simple-form">
                                {!! Theme::partial('real-estate.elements.form-contact-consult', ['data' => $property]) !!}
                            </div>
                        </div>
                    @endif
                    {!! dynamic_sidebar('property_sidebar') !!}
                </div>
            </div>
        </div>

        <div class="row">{!! do_shortcode(
            '[recently-viewed-properties title="' .
                __('Recently Viewed Properties') .
                '" subtitle="' .
                __('Your currently viewed properties.') .
                '"][/recently-viewed-properties]',
        ) !!}</div>
    </div>
</section>

@if ($property->latitude && $property->longitude)
    <div data-magnific-popup="#trafficMap" data-map-id="trafficMap" data-popup-id="#traffic-popup-map-template"
        data-map-icon="{{ $property->map_icon }}"
        data-center="{{ json_encode([$property->latitude, $property->longitude]) }}">
    </div>
@endif

<script id="traffic-popup-map-template" type="text/x-custom-template">
    {!! Theme::partial('real-estate.properties.map', ['property' => $property]) !!}
</script>
