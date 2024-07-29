<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts-->
    <script src="https://unpkg.com/sticksy@latest/dist/sticksy.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family={{ urlencode(theme_option('font_heading', 'Jost')) }}:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Muli')) }}:300,400,600,700"
        rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: {{ theme_option('primary_color', '#2b4db9') }};
            --font-body: {{ theme_option('primary_font', 'Muli') }}, sans-serif;
            --font-heading: {{ theme_option('font_heading', 'Jost') }}, sans-serif;
        }
    </style>



    <script>
        "use strict";
        window.trans = {
            "Price": "{{ __('Price') }}",
            "Number of rooms": "{{ __('Number of rooms') }}",
            "Number of rest rooms": "{{ __('Number of rest rooms') }}",
            "Square": "{{ __('Square') }}",
            "No property found": "{{ __('No property found') }}",
            "million": "{{ __('million') }}",
            "billion": "{{ __('billion') }}",
            "in": "{{ __('in') }}",
            "Added to wishlist successfully!": "{{ __('Added to wishlist successfully!') }}",
            "Removed from wishlist successfully!": "{{ __('Removed from wishlist successfully!') }}",
            "I care about this property!!!": "{{ __('I care about this property!!!') }}",
            "See More Reviews": "{{ __('See More Reviews') }}",
            "Reviews": "{{ __('Reviews') }}",
            "out of 5.0": "{{ __('out of 5.0') }}",
            "service": "{{ trans('review.service') }}",
            "value": "{{ trans('review.value') }}",
            "location": "{{ trans('review.location') }}",
            "cleanliness": "{{ trans('review.cleanliness') }}",
            "please_enter_address": "{{ __('Please enter address') }}",
            "address_invalid": "{{ __('Address invalid') }}"
        }
        window.themeUrl = '{{ Theme::asset()->url('') }}';
        window.siteUrl = '{{ url('') }}';
        window.currentLanguage = '{{ App::getLocale() }}';
    </script>

    {!! Theme::header() !!}
</head>

@php
    $url = $_SERVER['REQUEST_URI']; // Get the current URL

    if ($url == '/') {
        $body_class = 'home__page';
    } else {
        $body_class = 'default_class';
    }
@endphp

<body class="{{ $body_class }}" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>

    <div id="alert-container"></div>

    @if (theme_option('preloader_enabled', 'no') == 'yes')
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader">
            <div class="preloader"><span></span><span></span></div>
        </div>
    @endif

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div class="search-mobile-home  hero-search-radius hero-search-content search-mobile row removeindex">
        <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch" class="home__box__search">


            <span class="closes_" onclick="opensearch()"></span>



            <div class="col-lg-3 col-md-3 col-sm-12 online">
                <div class="form-group borders">
                    <div class="input-with-icon">
                        {!! Theme::partial('real-estate.filters.categorieshome') !!}
                        <i class="ti-briefcase"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 online">
                <div class="form-group borders">
                    <div class="input-with-icon">
                        {!! Theme::partial('real-estate.filters.citieshome') !!}
                        <i class="ti-location-pin lct-ctm"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 clearrow">
                <div class="form-group borders">
                    <div class="input-with-icon">
                        <input type="text" name="k" class="form-control"
                            placeholder="{{ __('Neighborhood') }}">
                        <i class="ti-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                    <button class="btn search-btn bg-dark" type="submit">{{ __('Search') }}</button>
                </div>
            </div>

        </form>
    </div>
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->

        <div class="topbar bg-brand p-2 d-none d-sm-block">
            <div class="container-fluild px-xl-5">
                <div class="d-flex align-items-center justify-content-between">
                    @if (is_plugin_active('language'))
                        <div class="currency-wrapper">
                            {!! $languages = apply_filters('language_switcher') !!}
                        </div>
                    @endif

                    @if (is_plugin_active('real-estate'))
                        <div class="topbar-right d-flex align-items-center">
                            <div class="topbar-wishlist">
                                <a class="text-white" href="{{ route('public.wishlist') }}"><i
                                        class="fas fa-heart"></i> {{ __('Wishlist') }}(<span
                                        class="wishlist-count">0</span>)</a>
                            </div>
                            @php $currencies = get_all_currencies(); @endphp
                            @if (count($currencies) > 1)
                                <div class="ms-3 text-white currency-wrapper">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ get_application_currency()->title }}
                                            <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @foreach ($currencies as $currency)
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('public.change-currency', $currency->title) }}"
                                                        @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Navigation -->

        <div class="header header-light head-shadow ssssss" id="navbar">
            <div class="">

                <nav id="navigation" class="navigation navigation-landscape">
                    <span class="nav__search" id="searchmb" onclick="opensearch()">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            width="22" height="22" viewBox="0 0 18 18" fill="none">
                            <path
                                d="M13.6 12.9C14.8 11.5 15.5 9.7 15.5 7.8C15.5 3.5 12 0 7.7 0C3.5 0 0 3.5 0 7.8C0 12.1 3.5 15.6 7.8 15.6C9.8 15.6 11.6 14.9 12.9 13.7L16.5 17.3H18L13.6 12.9ZM1 7.8C1 4.1 4.1 1 7.8 1C11.5 1 14.5 4 14.5 7.7C14.5 11.4 11.5 14.4 7.8 14.4C4.1 14.5 1 11.5 1 7.8Z" />
                        </svg>
                    </span>
                    <div class="nav-header">
                        @if (theme_option('logo'))
                            <a class="nav-brand" href="{{ route('public.index') }}"><img class="logo"
                                    src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                                    alt="{{ setting('site_title') }}"></a>
                        @endif
                        <div class="nav-toggle home__nav">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40"
                                viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 11h14v1H21Z" />
                                <path d="M5 20h30v1H5Z" />
                                <path d="M5 29h14v1H5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        {!! Menu::renderMenuLocation('main-menu', [
                            'view' => 'menu',
                            'options' => ['class' => 'nav-menu'],
                        ]) !!}

                        @if (is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled())
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="">
                                    <a href="{{ route('public.account.properties.create') }}"
                                        class="text-success"><img src="{{ Theme::asset()->url('') }}/img/submit.svg"
                                            width="20" alt="" class="mr-2 d-none" />
                                        {{ __('Add Property') }}</a>
                                </li>
                                @if (auth('account')->check())
                                    <li class="login-item"><a href="{{ route('public.account.dashboard') }}"
                                            rel="nofollow"><i class="fas fa-user"></i>
                                            <span>{{ auth('account')->user()->name }}</span></a></li>
                                    <li class="login-item"><a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            rel="nofollow"><i class="fas fa-sign-out-alt"></i>
                                            {{ __('Logout') }}</a></li>
                                @else
                                    <li class="add-listing">
                                        <a href="{{ route('public.account.login') }}"><img
                                                src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12"
                                                alt="" class="mr-2" />{{ __('Sign In') }}</a>
                                    </li>
                                @endif
                            </ul>

                            @if (auth('account')->check())
                                <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @endif

                            <div class="clearfix"></div>
                            <div class="d-sm-none mobile-menu d-none">
                                <div class="mobile-menu-item mobile-wishlist">
                                    <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i>
                                        {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a>
                                </div>
                                @if (count($currencies) > 1)
                                    <div class="mobile-menu-item currency-wrapper">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLinkMobile" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                {{ get_application_currency()->title }}
                                                <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLinkMobile">
                                                @foreach ($currencies as $currency)
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('public.change-currency', $currency->title) }}"
                                                            @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                @if (is_plugin_active('language'))
                                    <div class="mobile-menu-item currency-wrapper">
                                        {!! $languages = apply_filters('language_switcher') !!}
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
