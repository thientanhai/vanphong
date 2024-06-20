<section class="image-cover"
    style="background:url({{ RvMedia::getImageUrl($bg, null, false, RvMedia::getDefaultImage()) }}) no-repeat;"
    data-overlay="5">
    <div class="container-fluid px-lg-5 px-sm-2">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12">
                <div class="caption-wrap-content text-left">
                    <h2>{!! clean($title) !!}</h2>
                    <p class="mb-5">{!! $description !!}</p>
                    <a href="{!! clean($btnLink) !!}" class="btn btn-light btn-md rounded btn__main">{!! clean($btnText) !!}</a>
                </div>
            </div>
        </div>
    </div>
</section>
