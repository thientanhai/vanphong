<!-- ============================ Page Title Start================================== -->
<div class="page-title bg__image__gradient d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title ">{{ $category->name }}</h1>
                <span class="ipn-subtitle">{{ $category->description }}</span>
            </div>
        </div>
    </div>
</div>

<section class="image-cover page-title" data-overlay="1">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-8 col-md-8">
                <div class="caption-wrap-content text-left">
                    <h1 class="text-light archive__title">{{ $category->name }}</h1>
                    <span class="ipn-subtitle">{{ $category->description }}</span>
                    <div class="archive__breadcrumb left text-light">
                        {!! Theme::partial('breadcrumb') !!}
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->

<section class="gray-simple bg-white">
    <div class="container">
        <div class="row d-none">
            <div class="col text-center">
                <div class="sec-heading center">
                    {!! Theme::partial('breadcrumb') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap-grid archive-blog ">
                                <div class="blog-thumb">
                                    <a href="{{ $post->url }}">
                                        <div class="cat__inner__image">
                                            @foreach($post->categories as $category)
                                            <a href="{{ $category->url }}">{{ $category->name }}</a>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                        </div>
                                        <img data-src="{{ RvMedia::getImageUrl($post->image, 'full', false, RvMedia::getDefaultImage()) }}"
                                            src="{{ RvMedia::getImageUrl($post->image, 'full', false, RvMedia::getDefaultImage()) }}"
                                            alt="{{ $post->name }}" class="img-fluid thumb">
                                    </a>
                                </div>

                                <div class="blog-info">
                                    {!! Theme::partial('post-meta', compact('post')) !!}
                                </div>

                                <div class="blog-body">
                                    <h4 class="bl-title">
                                        <a href="{{ $post->url }}" title="{{ $post->name }}">
                                            {{ $post->name }}
                                        </a>
                                    </h4>
                                    <p>{{ Str::words($post->description, 50) }}</p>
                                    <a href="{{ $post->url }}" class="bl-continue">Chi tiết</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-3">
                <div class="blog-wrap-grid"></div>
                {!! dynamic_sidebar('primary_sidebar') !!}
            </div>
        </div>
        <br>

        <div class="colm10 col-sm-12">
            <nav class="d-flex justify-content-center pt-3">
                {!! $posts->withQueryString()->links() !!}
            </nav>
        </div>
    </div>
</section>
