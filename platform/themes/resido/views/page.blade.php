@php
    Theme::set('page', $page);
@endphp

@if ($page->template == 'default')
    <div class="page-title d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title">{{ $page->name }}</h1>
                    <span class="ipn-subtitle">{{ $page->description }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Page header -->
    <section class="image-cover archive__cat__title" data-overlay="5"
    style="background: url(&quot;https://vanphong.com.vn/storage/banners/agents-brokers.webp&quot;) no-repeat;">
        <div class="container-fluid px-xl-5">
            <div class="row justify-content-left">
                <div class="col-lg-8 col-md-8">
                    <div class="caption-wrap-content text-left">
                        <h1 class="ipt-title">{{ $page->name }}</h1>

                        {!! Theme::partial('breadcrumb') !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End page header -->

    <section>
        <div class="container">
            {{-- <div class="row">
                <div class="col text-center">
                    <div class="sec-heading center">
                        <h2>{{ $page->name }}</h2>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-sm-12">
                    <div class="scontent">
                          {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 
'ck-content'])->toHtml(), $page) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(), 
$page) !!}
@endif
