<div class="image-cover hero-banner"
    style="background:#2540a2 url({{ RvMedia::getImageUrl($bg, null, false, RvMedia::getDefaultImage()) }}) no-repeat;"
    data-overlay="{{ $overlay }}">
    <div class="container">
        <div class="simple-slider-cusom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="text-light text-end mb-4">{!! clean($description) !!}</h2>
                </div>
                <div class="col-lg-6 col-md-6">
                    {!! Theme::partial('sliderhomes') !!}
                </div>
            </div>
        </div>
        
        <div class="simple-search-wrap">
            <div class="hero-search-2">
                <p class="text-light">{!! clean($title) !!}</p>

                <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch">
                    <div class="pk-input-group">
                        <input type="text" class="form-control" name="k"
                            placeholder="{{ __('Search for a location') }}">
                        <button class="btn btn-black" type="submit">{{ __('Go & Search') }}</button>
                    </div>
                </form>
                <div class="suggest__key">Từ khóa gợi ý:
                    <ul>
                        <li><a href="#">Thuê BDS quận 1</a></li>
                        <li><a href="#">BDS giá rẻ</a></li>
                        <li><a href="#">The Rivia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

