@php
    $layout = theme_option('properties_page_layout');
    $requestLayout = request()->input('layout');
    if ($requestLayout && in_array($requestLayout, array_keys(get_properties_page_layout()))) {
        $layout = $requestLayout;
    }

    $layout = ($layout && in_array($layout, array_keys(get_properties_page_layout()))) ? $layout : 'sidebar';
    $viewType = request()->input('view', 'grid');
    $gridClass = 'col-lg-12 col-md-12';
    $gridItemClass = 'col-lg-6 col-md-12';

    if ($layout !== 'full' && $layout !== 'grid_full') {
        $gridClass = 'col-lg-8 col-md-12';
    }

    switch ($layout) {
        case 'grid_sidebar':
        case 'grid_map':
        case 'sidebar':
        case 'map':
            if($viewType == 'list') {
                 $gridItemClass = 'col-lg-12 col-md-12';
            }
            break;

        case 'full':
            $viewType = 'list';
            break;

        case 'grid_full':
            if ($viewType == 'list') {
                $gridItemClass = 'col-lg-6 col-md-12';
            } else {
                $gridItemClass = 'col-lg-4 col-md-6 col-sm-12';
            }
            break;
    }
@endphp



@if ($layout == 'half_map')
    @php
        Theme::asset()
            ->usePath()
            ->add('leaflet-css', 'plugins/leaflet.css');
        Theme::asset()
            ->container('footer')
            ->usePath()
            ->add('leaflet-js', 'plugins/leaflet.js');
        Theme::asset()
            ->container('footer')
            ->usePath()
            ->add('leaflet.markercluster-src-js', 'plugins/leaflet.markercluster-src.js');
    @endphp
    <div class="half-map container-fluid">
        <div class="fs-content">
            <form action="{{ route('public.properties') }}" method="get" id="ajax-filters-form">
                <input type="hidden" name="page" data-value="{{ $properties->currentPage() }}">
                <input type="hidden" name="layout" value="{{ request()->input('layout') }}">
                <div class="filter__cate">
                    @include(Theme::getThemeNamespace('views.real-estate.includes.filters-halfmap'))
                </div>
                <div class="row">
                    <div class="fs-inner-container1 col-md-7" id="properties-list">
                        <div class="list-layout data-listing position-relative cat__map">
                            {!! Theme::partial('real-estate.properties.items', compact('properties')) !!}
                        </div>
                    </div>
                    <div class="fs-left-map-box1 col-md-5">
                   
                        <div class="rightmap h-100">
                        <div id='map-data'>

                        </div>
                            <div id="map2" style="display:none" data-type="{{ request()->input('type') }}"
                                 data-url="{{ route('public.ajax.properties.map') }}"
                                 data-center="{{ json_encode([43.615134, -76.393186]) }}"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
@else
    <!-- ============================ All Property ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" class="open_search_menu">{{ __('Search Property') }}<i
                                class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                @if ($layout !== 'full' && $layout !== 'grid_full')
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="simple-sidebar sm-sidebar" id="filter_search" style="left: -310px;">
                            @include(Theme::getThemeNamespace('views.real-estate.includes.search-sidebar'))
                        </div>
                    </div>
                @endif

                <div class="{{ $gridClass }} list-layout">
                    <div class="row justify-content-center">
                        @include(Theme::getThemeNamespace('views.real-estate.includes.sorting-box'))
                    </div>

                    <div class="row">
                        @foreach ($properties as $property)
                            <div class="{{ $gridItemClass }}">
                                @if (strpos($viewType, 'grid') !== false)
                                    {!! Theme::partial('real-estate.properties.item-grid', compact('property')) !!}
                                @else
                                    {!! Theme::partial('real-estate.properties.item-list', compact('property')) !!}
                                @endif
                            </div>
                            <!-- End Single Property -->
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row d-block">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation">
                                {!! $properties->withQueryString()->onEachSide(1)->links() !!}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

<script id="traffic-popup-map-template" type="text/x-custom-template">
    {!! Theme::partial('real-estate.properties.map-popup', ['property' => get_object_property_map()]) !!}
</script>
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyAm7W_gB88nqON4_PM3wZfceUNPSAv5mu0", v: "weekly"});</script>
<script type="text/javascript" src="{{ URL::asset('themes/resido/js/map.js') }}"></script>
<link href="{{ URL::asset('themes/resido/css/masonry.css') }}" rel="stylesheet">