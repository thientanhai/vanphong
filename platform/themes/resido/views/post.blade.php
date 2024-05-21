<!-- ============================ Page Title Start================================== -->
<div class="page-title single__post d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title">{{ $post->name }}</h1>
                <span class="ipn-subtitle"></span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section class="blog-page bg-white blog__page__detail">

    <div class="container">
        <!-- row Start -->
        <div class="row justify-content-center">
            <!-- Blog Detail -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <!--Breadcrumb -->

                <div class="row">
                    <div class="col text-center">
                        <div class="sec-heading center dark__breadcrumb">
                            {!! Theme::partial('breadcrumb') !!}
                        </div>
                        <h1 class="post-title">{{ $post->name }}</h1>

                    </div>
                </div>

                <!-- BreadCrumb -->
                <div class="blog-details single-post-item format-standard">
                    <div class="post-details">
                        <div class="post-featured-img">
                            <img class="img-fluid"
                                src="{{ RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage()) }}"
                                alt="{{ $post->name }}">
                        </div>

                        <div class="post-top-meta">
                            {!! Theme::partial('post-meta', compact('post')) !!}
                        </div>
                        <div>
                            <div class="ck-content">{!! BaseHelper::clean($post->content) !!}</div>
                        </div>

                        <div class="post-bottom-meta">
                            <div class="post-tags">
                                <h4 class="pbm-title">{{ __('Tags') }}</h4>
                                @if ($post->tags->count())
                                    <ul class="list">
                                        @foreach ($post->tags as $tag)
                                            <li>
                                                <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="post-share">
                                {!! Theme::partial('share', ['title' => __('Share this post'), 'description' => $post->description]) !!}
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Single blog Grid -->
            {{-- <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                {!! dynamic_sidebar('primary_sidebar') !!}
            </div> --}}
        </div>
        <div class="row">
            @php $relatedPosts = get_related_posts($post->id, 2); @endphp

                @if ($relatedPosts->count())
                    <div class="blog-details single-post-item format-standard related__post">
                        <h4><strong>{{ __('Related posts') }}:</strong></h4>
                        <div class="blog-container related__post__container">
                            <div class="row">
                                @foreach ($relatedPosts as $relatedItem)
                                    <div class="col-md-4 col-sm-6 container-grid">
                                        <div class="blog-wrap-grid">
                                            <div class="blog-thumb">
                                                <a href="{{ $relatedItem->url }}" class="linkdetail">
                                                    <div class="blii">
                                                        <div class="img">
                                                            <img class="img-fluid thumb lazy"
                                                                data-src="{{ RvMedia::getImageUrl($relatedItem->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                                                src="{{ get_image_loading() }}"
                                                                alt="{{ $relatedItem->name }}">
                                                        </div>

                                                    </div>
                                                </a>
                                            </div>
                                            <div class="blog-body">
                                                <div class="blog-title pt-4">
                                                    <a href="{{ $relatedItem->url }}">
                                                        <h4 class="bl-title">{{ $relatedItem->name }}</h2>
                                                    </a>
                                                    <div class="post-meta d-none">
                                                        <p class="d-inline-block">
                                                            {{ $relatedItem->created_at->format('d M, Y') }}</p>
                                                        - <p class="d-inline-block"><i class="fa fa-eye"></i>
                                                            {{ number_format($relatedItem->views) }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="blog-excerpt">
                                                    <p>{{ Str::words($relatedItem->description, 40) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </div>
</section>
