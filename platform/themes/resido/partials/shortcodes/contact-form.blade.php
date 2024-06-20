<div id="contact" class="row">
    <div class="col-lg-7 col-md-7">
        <form action="{{ route('public.send.contact') }}" method="post" class="contact-form generic-form">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>{{ __('Tên của bạn') }}</label>
                        <input type="text" name="name" class="form-control simple">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>{{ __('Địa chỉ Email') }}</label>
                        <input type="email" name="email" class="form-control simple">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>{{ __('Nội dung cần tư vấn') }}</label>
                        <input type="text" name="subject" class="form-control simple">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>{{ __('Số điện thoại') }}</label>
                        <input type="text" name="phone" class="form-control simple">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('Tin nhắn') }}</label>
                <textarea class="form-control simple" name="content" rows="6" minlength="10"></textarea>
            </div>

            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                <div class="form-group">
                    {!! Captcha::display() !!}
                </div>
            @endif

            <div class="contact-form-group">
                <div class="contact-message contact-success-message" style="display: none"></div>
                <div class="contact-message contact-error-message" style="display: none"></div>
            </div>

            <div class="form-actions form-group">
                <button class="btn rounded btn__contact" type="submit">{{ __('Gửi') }}</button>
            </div>
        </form>
    </div>

    <div class="col-lg-5 col-md-5">
        <div class="contact-info">
            <h2>{{ __('Tư vấn & Dịch vụ bất động sản Vanphong.com.vn') }}</h2>
            <p>{{ theme_option('about-us') }}</p>

            <br>
            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-home"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title">{{ __('Địa chỉ') }}</h4>
                    {{ theme_option('address') }}
                </div>
            </div>

            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-email"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title">{{ __('Email') }}</h4>
                    {{ theme_option('email') }}
                </div>
            </div>

            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-mobile"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title">{{ __('Hotline') }}</h4>
                    {{ theme_option('hotline') }}
                </div>
            </div>
        </div>
    </div>
</div>
