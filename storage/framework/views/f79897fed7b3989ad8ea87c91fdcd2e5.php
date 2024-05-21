<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=<?php echo e(urlencode(theme_option('font_heading', 'Jost'))); ?>:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=<?php echo e(urlencode(theme_option('primary_font', 'Muli'))); ?>:300,400,600,700" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: <?php echo e(theme_option('primary_color', '#2b4db9')); ?>;
            --font-body: <?php echo e(theme_option('primary_font', 'Muli')); ?>, sans-serif;
            --font-heading: <?php echo e(theme_option('font_heading', 'Jost')); ?>, sans-serif;
        }
    </style>

    <script>
        "use strict";
        window.trans = {
            "Price": "<?php echo e(__('Price')); ?>",
            "Number of rooms": "<?php echo e(__('Number of rooms')); ?>",
            "Number of rest rooms": "<?php echo e(__('Number of rest rooms')); ?>",
            "Square": "<?php echo e(__('Square')); ?>",
            "No property found": "<?php echo e(__('No property found')); ?>",
            "million": "<?php echo e(__('million')); ?>",
            "billion": "<?php echo e(__('billion')); ?>",
            "in": "<?php echo e(__('in')); ?>",
            "Added to wishlist successfully!": "<?php echo e(__('Added to wishlist successfully!')); ?>",
            "Removed from wishlist successfully!": "<?php echo e(__('Removed from wishlist successfully!')); ?>",
            "I care about this property!!!": "<?php echo e(__('I care about this property!!!')); ?>",
            "See More Reviews": "<?php echo e(__('See More Reviews')); ?>",
            "Reviews": "<?php echo e(__('Reviews')); ?>",
            "out of 5.0": "<?php echo e(__('out of 5.0')); ?>",
            "service": "<?php echo e(trans('review.service')); ?>",
            "value": "<?php echo e(trans('review.value')); ?>",
            "location": "<?php echo e(trans('review.location')); ?>",
            "cleanliness": "<?php echo e(trans('review.cleanliness')); ?>",
            "please_enter_address": "<?php echo e(__('Please enter address')); ?>",
            "address_invalid": "<?php echo e(__('Address invalid')); ?>"
        }
        window.themeUrl = '<?php echo e(Theme::asset()->url('')); ?>';
        window.siteUrl = '<?php echo e(url('')); ?>';
        window.currentLanguage = '<?php echo e(App::getLocale()); ?>';
    </script>

    <?php echo Theme::header(); ?>

</head>
<body class="<?php echo e(theme_option('skin', 'blue')); ?>" <?php if(BaseHelper::siteLanguageDirection() == 'rtl'): ?> dir="rtl" <?php endif; ?>>
<div id="alert-container"></div>

<?php if(theme_option('preloader_enabled', 'no') == 'yes'): ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
<?php endif; ?>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->

    <div class="topbar bg-brand p-2 d-none d-sm-block">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <?php if(is_plugin_active('language')): ?>
                    <div class="currency-wrapper">
                        <?php echo $languages = apply_filters('language_switcher'); ?>

                    </div>
                <?php endif; ?>

                <?php if(is_plugin_active('real-estate')): ?>
                    <div class="topbar-right d-flex align-items-center">
                        <div class="topbar-wishlist">
                            <a class="text-white" href="<?php echo e(route('public.wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(__('Wishlist')); ?>(<span class="wishlist-count">0</span>)</a>
                        </div>
                        <?php $currencies = get_all_currencies(); ?>
                        <?php if(count($currencies) > 1): ?>
                        <div class="ms-3 text-white currency-wrapper">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(get_application_currency()->title); ?>

                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="dropdown-item"  href="<?php echo e(route('public.change-currency', $currency->title)); ?>" <?php if(get_application_currency_id() == $currency->id): ?> class="active" <?php endif; ?>><span><?php echo e($currency->title); ?></span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light head-shadow">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <?php if(theme_option('logo')): ?>
                        <a class="nav-brand" href="<?php echo e(route('public.index')); ?>"><img class="logo" src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>" alt="<?php echo e(setting('site_title')); ?>"></a>
                    <?php endif; ?>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <?php echo Menu::renderMenuLocation('main-menu', [
                        'view'    => 'menu',
                        'options' => ['class' => 'nav-menu'],
                    ]); ?>


                    <?php if(is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled()): ?>
                        <ul class="nav-menu nav-menu-social align-to-right hidden">
                            <li class="">
                                <a href="<?php echo e(route('public.account.properties.create')); ?>" class="text-success"><img src="<?php echo e(Theme::asset()->url('')); ?>/img/submit.svg" width="20" alt="" class="mr-2" /> <?php echo e(__('Add Property')); ?></a>
                            </li>
                            <?php if(auth('account')->check()): ?>
                                <li class="login-item"><a href="<?php echo e(route('public.account.dashboard')); ?>" rel="nofollow"><i class="fas fa-user"></i> <span><?php echo e(auth('account')->user()->name); ?></span></a></li>
                                <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?></a></li>
                            <?php else: ?>
                                <li class="add-listing">
                                    <a href="<?php echo e(route('public.account.login')); ?>"><img src="<?php echo e(Theme::asset()->url('')); ?>/img/user-light.svg" width="12" alt="" class="mr-2" /><?php echo e(__('Sign In')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>

                        <?php if(auth('account')->check()): ?>
                            <form id="logout-form" action="<?php echo e(route('public.account.logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        <?php endif; ?>

                        <div class="clearfix"></div>
                        <div class="d-sm-none mobile-menu d-none">
                            <div class="mobile-menu-item mobile-wishlist">
                                <a href="<?php echo e(route('public.wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(__('Wishlist')); ?>(<span class="wishlist-count">0</span>)</a>
                            </div>
                            <?php if(count($currencies) > 1): ?>
                                <div class="mobile-menu-item currency-wrapper">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLinkMobile" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo e(get_application_currency()->title); ?>

                                            <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLinkMobile">
                                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a class="dropdown-item"  href="<?php echo e(route('public.change-currency', $currency->title)); ?>" <?php if(get_application_currency_id() == $currency->id): ?> class="active" <?php endif; ?>><span><?php echo e($currency->title); ?></span></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(is_plugin_active('language')): ?>
                                <div class="mobile-menu-item currency-wrapper">
                                    <?php echo $languages = apply_filters('language_switcher'); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/header.blade.php ENDPATH**/ ?>