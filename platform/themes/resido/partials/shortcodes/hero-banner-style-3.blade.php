<div class="image-bottom hero-banner"
    style="background:url({{ RvMedia::getImageUrl($bg, null, false, RvMedia::getDefaultImage()) }}) no-repeat;"
    data-overlay="{{ $overlay }}">
    <div class="container">
        <h1 class="big-header-capt mb-0">{!! clean($title) !!}</h1>
        <p class="text-center mb-5">{!! clean($description) !!}</p>
     
        <div class="full-search-2">
            <div class="hero-search-content">

                <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch" class="home__box__search">
                <div class="col-lg-4 col-md-4 col-sm-12" id="opensubsearch">
                            <div class="form-group borders">
                                <div class="input-with-icon">
                                    <div onclick="opensearch()"  style="position: absolute; width: 100%; background: transparent; height: 100%;"></div>
                                    <input type="text" name="kk" class="form-control" placeholder="{{ __('Neighborhood') }}">
                                    <i class="ti-search"></i>
                                </div>
                            </div>
                        </div>    
                        
                <div class="search-mobile row">
                <p>
                <label>Tìm kiếm</label>
                
                <span class="closes_" onclick="opensearch()"></span>

                </p>

                        <div class="col-lg-3 col-md-3 col-sm-12 online online-0" style="padding-rigth:5px">
                            <div class="form-group borders">
                           
                                <div class="input-with-icon" >
                                <span class="sub-tt sub-position">Hạng</span>
                                    {!! Theme::partial('real-estate.filters.categories') !!}
                                    {{-- <i class="ti-briefcase"></i> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12 online" style="padding-left:5px">
                            <div class="form-group borders">
                                <div class="input-with-icon">
                                    {!! Theme::partial('real-estate.filters.citieshome') !!}
                                    {{-- <i class="ti-location-pin lct-ctm"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 clearrow">
                            <div class="form-group borders">
                                <div class="input-with-icon">
                                    <input type="text" name="k" class="form-control" placeholder="{{ __('Neighborhood') }}">
                                    {{-- <i class="ti-search"></i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                                <button class="btn search-btn bg-dark" type="submit">{{ __('Search') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="home__bottom__content">
            <div class="benefits__group">
                @if (theme_option('banner_bottom_content'))
                @php
                    $contentData = get_repeat_field('banner_bottom_content');
                    $contentData = collect($contentData)->map(function($item) {
                        // Initialize variables to store detected values
                        $textValue = null;
                        $numberValue = null;
            
                        // Iterate over each item to detect "text" and "number_value" keys
                        foreach ($item as $field) {
                            if ($field['key'] === 'text') {
                                $textValue = $field['value'];
                            } elseif ($field['key'] === 'number_value') {
                                $numberValue = $field['value'];
                            }
                        }
            
                        // Return detected values
                        return [
                            'text' => $textValue,
                            'number_value' => $numberValue
                        ];
                    });
                @endphp
            
                @if($contentData->isNotEmpty())
                    @foreach ($contentData as $item)
                        <div class="content">
                            <span class="text-base font-semibold">{{ $item['text'] }}</span>
                            <span class="text-base">{{ $item['number_value'] }}</span>
                        </div>
                    @endforeach
                @endif
            @endif
            
            </div>
        </div>
    </div>
</div>
