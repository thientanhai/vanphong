<section class="home__blog">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 text-left">
                <div class="sec-heading">
                    <h2>{!! clean($title) !!}</h2>
                    <p>{!! clean($description) !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap-grid archive_blog">
                        <div class="blog-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                            {{-- <div class="blog-info">
                                <span class="post-date">
                                    <i class="ti-calendar"></i>{{ $post->created_at->format('d M, Y') }}
                                </span>
                            </div> --}}
                        </div>
                     
                        <div class="blog-body">
                            <h4 class="bl-title">
                                <a href="{{ $post->url }}">{{ $post->name }}</a>
                            </h4>
                            <span class="post-date">
                                {{ $post->created_at->format('d.m.Y') }}
                            </span>
                            {{-- <p>{{ $post->description }}</p> --}}
                            {{-- <a href="{{ $post->url }}" class="bl-continue">{{ __('Continue') }}</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ================= Blog Grid End ================= -->

<section class="home__partner bg__main">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 text-left">
                <div class="sec-heading">
                    <h2 class="uppercase">đối tác</h2>
                    <p>{!! clean($description) !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
                <!-- Single blog Grid -->
                <div class="col-lg-12 col-md-12">
                    <div class="gallery-wrap-grid">
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="{{ $post->url }}">
                                <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                    class="img-fluid" alt="{{ $post->name }}" />
                            </a>
                        </div>
                       
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- ================= Gallery Grid End ================= -->

