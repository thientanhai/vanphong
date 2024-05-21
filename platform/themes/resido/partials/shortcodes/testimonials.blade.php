<section class="bg-white p-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                {{-- <div class="sec-heading center">
                    <h2>{!! clean($title) !!}</h2>
                    <p>{!! clean($description) !!}</p>
                </div> --}}
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="smart-textimonials smart-center">
                    @foreach ($testimonials as $item)
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            {{-- <div class="quotes bg-blue"><i class="ti-quote-right"></i></div> --}}

                                            <img
                                            data-src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                            src="{{ RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                            alt="{{ $item->name }}" class="img-fluid thumb">
                                            {{-- <img src="{{ $item->image }}" class="img-fluid"
                                                alt="{{ $item->name }}" /> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="st-author-info">
                                    <h4 class="st-author-title">{{ $item->name }}</h4>
                                    <span class="st-author-subtitle">{{ $item->company }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="box__right">
                    <h3 class="main__title">WHY GGA?</h3>
                    <img src="https://offices.topdealhot.com/storage/general-1/illustrationwhy-gga.png">
                </div>
            </div>
        </div>
    </div>
</section>
