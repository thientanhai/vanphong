<div class="property_block_wrap style-2">
    <div class="property_block_wrap_header other__info">
        <h3 class="property_block_title">{{ __('Thông tin cơ bản') }}</h3>
    </div>
 
    <div class="box-item tab-content price__rent">
        @php
            $dataServiceFee = $property->getMetaData('service__fee');
            $serviceFee = $dataServiceFee[0] ?? null;

            $dataCarFee = $property->getMetaData('car_fee');
            $carFee = $dataCarFee[0] ?? null;

            $dataMotorbikeFee = $property->getMetaData('motorbike_fee');
            $motorbikeFee = $dataMotorbikeFee[0] ?? null;

            $dataVAT = $property->getMetaData('vat_fee');
            $vatFee = $dataVAT[0] ?? null;

            $dataAirCondtioner =  $property->getMetaData('dienlanh_fee');
            $airConditionerFee = $dataAirCondtioner[0] ?? null;

            $dataOT =  $property->getMetaData('ot_fee');
            $otFee = $dataOT[0] ?? null;



        @endphp
        <!-- Chi tiết giá thuê -->
        <ul>
            @if ($property->price)
                <li>
                    <span class="icon">
                        <span>
                            <img class="img-logo entered lazyloaded"
                                src="{{ Theme::asset()->url('img/gia-thue.svg') }}"
                                alt="" width="25" height="25" data-ll-status="loaded">
                        </span>
                    </span>

                    <div class="info"><strong>Giá thuê </strong><span>Từ {!! $property->price . ' / ' . $property->currency->title . ' / ' . $property->period !!}</span></div>
                </li>
            @endif

            @if ($serviceFee)
                <li>
                    <span class="icon">
                        <span>
                            <img class="img-logo entered lazyloaded"
                                src="{{ Theme::asset()->url('img/phi-dich-vu.svg') }}"
                                alt="" width="18" height="25" data-ll-status="loaded">
                        </span>
                    </span>
                    <div class="info"><strong>Phí dịch vụ </strong><span>{!! $serviceFee !!}</span></div>
                </li>
            @endif

            @if ($vatFee)
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="{{ Theme::asset()->url('img/thue-vat.svg') }}"
                            alt="Vanphong.com.vn" width="25" height="25"
                            src="{{ Theme::asset()->url('img/thue-vat.svg') }}"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Thuế VAT </strong><span>{!! $vatFee !!} </span></div>
            </li>
            @endif

        </ul>
        <ul>
            @if ($carFee)
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                        src="{{ Theme::asset()->url('img/do-oto.svg') }}"
                        alt="" width="25" height="16"
                        data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Đỗ ô tô </strong><span>{!! $carFee !!}</span></div>
            </li>
            @endif

            @if ($motorbikeFee)
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="{{ Theme::asset()->url('img/do-xe.svg') }}"
                            alt="Vanphong.com.vn" width="14" height="25"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Đỗ xe máy </strong><span>{!! $motorbikeFee !!}</span></div>
            </li>
            @endif

            @if ($airConditionerFee)            
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                        src="{{ Theme::asset()->url('img/tien-dien-lanh.svg') }}"
                        alt="" width="25" height="25"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Tiền điện lạnh </strong><span> {!! $airConditionerFee !!} </span></div>
            </li>
            @endif

            @if ($otFee)            
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="{{ Theme::asset()->url('img/phi-ngoai-gio.svg') }}"
                            alt="" width="23" height="23"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Phí ngoài giờ </strong><span>{!! $otFee !!}</span>
                </div>
            </li>
            @endif

{{--     
             @if ($property->test)
                    <li>
                        <strong>{{ __('Bedrooms:') }}</strong>
                        {{ number_format($property->test) }} {{ __('BedsZ') }}
                    </li>
                @endif --}}
        </ul>
        <!-- end Chi tiết giá thuê -->
    </div>

    <div class="d-none">
        <div class="block-body">
            <ul class="detail_features">
                @php
                    $customFields = $property->customFields()->get();
                    $dataArray = $customFields->toArray();
                @endphp
                @foreach ($dataArray as $data)
                    @if (!empty($data['name']))
                        <li>
                            <strong>{{ __('Hạng:') }}</strong>
                            {{ $data['value'] }}
                        </li>
                    @endif
                @endforeach


                @if ($property->test)
                    <li>
                        <strong>{{ __('Bedrooms:') }}</strong>
                        {{ number_format($property->test) }} {{ __('BedsZ') }}
                    </li>
                @endif
                @if ($property->number_bathroom)
                    <li>
                        <strong>{{ __('Bathrooms:') }}</strong>
                        {{ number_format($property->number_bathroom) }} {{ __('Bath') }}
                    </li>
                @endif
                @if ($property->square)
                    <li>
                        <strong>{{ __('Square:') }}</strong>{{ $property->square_text }}
                    </li>
                @endif
                @if ($property->number_floor)
                    <li>
                        <strong>{{ __('Floors:') }}</strong>{{ number_format($property->number_floor) }}
                    </li>
                @endif
                @if ($property->category)
                    <li>
                        <strong>{{ __('Property Type:') }}</strong>{{ $property->category_name }}
                        {{ !empty($property->subcategory_id) ? ' , ' . $property->subcategory->name : '' }}
                    </li>
                @endif
            </ul>
        </div>
    </div>

</div>



