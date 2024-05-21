{{-- <div class="page-title archive__cat__title">
    <div class="bg__archive__cate image-cover"
        style="background: url('https://vanphong.com.vn/storage/banners/agents-brokers.webp';) no-repeat;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title">{{ $category->name }}</h1>
                <span class="ipn-subtitle">{{ $category->description }}</span>
            </div>
        </div>
    </div>
</div> --}}

<section class="image-cover archive__cat__title" data-overlay="5"
    style="background: url(&quot;https://vanphong.com.vn/storage/banners/agents-brokers.webp&quot;) no-repeat;">
    <div class="container-fluid px-xl-5">
        <div class="row justify-content-left">
            <div class="col-lg-8 col-md-8">
                <div class="caption-wrap-content text-left">
                    <h1 class="ipt-title">{{ $category->name }}</h1>
                    <span class="ipn-subtitle">{{ $category->description }}</span>

                    {!! Theme::partial('breadcrumb') !!}

                </div>
            </div>
        </div>
    </div>
</section>

@php
    request()->request->set('category_id', $category->id);
@endphp

@include(Theme::getThemeNamespace('views.real-estate.includes.properties-list'))
