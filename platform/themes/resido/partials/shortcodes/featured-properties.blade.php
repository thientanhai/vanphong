
<section class="bg-light bg-white py-xl-2">
    <div class="container-fluid px-lg-5 px-sm-2">

        {{-- <div class="row justify-content-center">
            <div class="col-lg-12 text-left">
                <div class="sec-heading">
                    <h2>{!! clean($title) !!}</h2>
                    <a href="#" class="see__more">Xem thêm</a>
                    <p>{!! clean($description) !!}</p>
                </div>
                
            </div>
        </div> --}}

        

        <div class="">
            <div class="swiper-container swiper-mobile-app noselect">
                <div class="sec-heading">
                    <h2>{!! clean($title) !!}</h2>
                    <a href="#" class="see__more">Xem thêm
                        <svg width="24" height="24" class="fill-gray-950 md:hidden" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12H22.2L18 16.5V18L24 11.5L18 5V6.5L22.2 11H0V12Z"></path></svg>
                    </a>
                    {{-- <p>{!! clean($description) !!}</p> --}}
                </div>
                <div class="swiper-wrapper">
                    @foreach($properties as $property)
                            <div class="swiper-slide ag-vacancy_item col-md-4 box__content xor-margin-bottom-60">
                                {!! Theme::partial('real-estate.properties.item-grid', compact('property')) !!}
                            </div>
                    @endforeach
                </div>
               
                
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>


{{-- 
        <div class="large-slider-container row">
            <div class="large-swiper">
                <div class="swiper-wrapper">
                    @foreach($properties as $property)
                        <div class="swiper-slide">
                            {!! Theme::partial('real-estate.properties.item-grid', compact('property')) !!}
                        </div>
                    @endforeach
                </div>
            <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>	 --}}
{{-- 
        <div class="row list-layout sss home__custom__slide">
            @foreach($properties as $property)
    
            @if($style == 1)
            
            <div class="col-lg-4 col-sm-12">
                {!! Theme::partial('real-estate.properties.item-list', compact('property')) !!}
            @else
          
            <div class="col-lg-4 col-md-6 col-sm-12">
                {!! Theme::partial('real-estate.properties.item-grid', compact('property')) !!}
            @endif
            </div>
            <!-- End Single Property -->
            @endforeach
        </div> --}}




        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center d-none">
                <a href="{{ route('public.properties') }}" class="btn btn-dark mb-0 rounded">{{ __('Browse More Properties') }}</a>
            </div>
        </div>
    </div>
</section>
