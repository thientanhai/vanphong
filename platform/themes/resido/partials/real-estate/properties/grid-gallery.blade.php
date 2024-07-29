<div class="breadcrumb__detail px-lg-5">
    {!! Theme::breadcrumb()->render() !!}
</div>

<div class="row">
    <div class="container">
        <div class="property_block__title style-2 py-2 px-2">
            <div class="prt-detail-title-desc">
                {{-- <span class="prt-types {{ $property->type }}">{{ $property->type->label() }}</span> --}}
        
                <h1>{{ $property->name }}</h1>
                <span>{{ $property->location . ', ' . $property->city_name }}</span>
                {{-- <h3 class="prt-price-fix">{{ $property ->price_html }}</h3> --}}
                {{-- {!! Theme::partial('real-estate.elements.list-fx-features', compact('property')) !!} --}}
            </div>
        </div>
        
    </div>
</div>

    @if (count($property->images) < 2)
        <div class="featured_slick_gallery">
            <div class="container">
                @foreach ($property->images as $index => $image)
                    <div class="featured_slick_padd text-center">
                        <a href="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}"
                            class="mfp-gallery">
                            <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}"
                                class="img-fluid mx-auto" alt="{{ $property->name }}-{{ $index }}" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
 
    
    <!--block image -->
    <div class="container">
        <div id="gallery" class="photos-grid-container gallery">

                <div class="main-photo img-box">
                    <a href="{{ RvMedia::getImageUrl($property->images[1], 'property_large', false, RvMedia::getDefaultImage()) }}" class="glightbox" data-glightbox="type: image">
                        <img src="{{ RvMedia::getImageUrl($property->images[1], 'property_large', false, RvMedia::getDefaultImage()) }}" alt="image" />
                    </a>
                </div>


                <!-- Sub Photos -->
                <div>
                    <div class="sub">
                        @foreach ($property->images as $index => $image)
                            @if ($index > 1 && $index <= 4)
                                <div class="img-box">
                                    <a href="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}" class="glightbox" data-glightbox="type: image">
                                        <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}" alt="image" />
                                    </a>
                                </div>
                            @endif
                        @endforeach

                        @if (count($property->images) > 4)
                            <div id="multi-link" class="img-box">
                                <a href="{{ RvMedia::getImageUrl($property->images[5], 'property_large', false, RvMedia::getDefaultImage()) }}" class="glightbox" data-glightbox="type: image">
                                    <img src="{{ RvMedia::getImageUrl($property->images[5], 'property_large', false, RvMedia::getDefaultImage()) }}" alt="image" />
                                    <div class="transparent-box">
                                        <div class="caption">
                                            +{{ count($property->images) - 4 }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div id="more-img" class="extra-images-container hide-element">
                    @foreach ($property->images as $index => $image)
                        @if ($index > 5)
                            <a href="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}" class="glightbox" data-glightbox="type: image">
                                <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}" alt="image" />
                            </a>
                        @endif
                    @endforeach
                </div>
        </div>
    </div>
@endif
