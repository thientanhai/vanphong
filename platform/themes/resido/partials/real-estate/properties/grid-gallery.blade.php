
<div class="row">
    <div class="container">
        <div class="property_block__title style-2 py-4 px-4">
            {!! Theme::breadcrumb()->render() !!}

            <div class="prt-detail-title-desc">
                {{-- <span class="prt-types {{ $property->type }}">{{ $property->type->label() }}</span> --}}
        
                <h1>{{ $property->name }}</h1>
                <span>{{ $property->location . ', ' . $property->city_name }}</span>
                {{-- <h3 class="prt-price-fix">{{ $property->price_html }}</h3> --}}
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
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image">
                    <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a>
            </div>
            <div>
                <div class="sub">
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div id="multi-link" class="img-box">
                        <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                            data-glightbox="type: image">
                            <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" />
                            <div class="transparent-box">
                                <div class="caption">
                                    +3
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="more-img" class="extra-images-container hide-element">
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                touchNavigation: true,
                loop: true,
                width: "90vw",
                height: "90vh"
            });
        });
    </script>



    <div class="featured_slick_gallery-slide hidden">
        @foreach ($property->images as $index => $image)
            <div class="featured_slick_padd">
                <a href="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}"
                    class="mfp-gallery">
                    <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}"
                        class="img-fluid mx-auto" alt="{{ $property->name }}-{{ $index }}" />
                </a>
            </div>
        @endforeach
    </div>
@endif
