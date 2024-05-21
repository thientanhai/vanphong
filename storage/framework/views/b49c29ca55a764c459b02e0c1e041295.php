<?php
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Location\Repositories\Interfaces\CityInterface;

    $cities = collect([]);
    if (is_plugin_active('location')) {
        $cities = app(CityInterface::class)->advancedGet([
            'condition' => [
                'cities.status' => BaseStatusEnum::PUBLISHED,
                'is_featured'=> 1
            ],
            'take' => (int) theme_option('number_of_featured_cities', 6),
            'withCount' => ['properties'],
            'select' => ['cities.id', 'cities.name', 'cities.slug'],
            'with' => ['metadata'],
        ]);
    }
?>
<section>
    <div class="container">

        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-10 text-left">
                <div class="sec-heading">
                    <h2><?php echo clean($title); ?></h2>
                    <p><?php echo clean($description); ?></p>
                </div>
            </div>
        </div>

        <div class="row list-layout">
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 col-md-4">
                    <div class="location-property-wrap">
                        <div class="location-property-thumb">
                            <a href="<?php echo e(route('public.properties-by-city', ['slug' => $city['slug']])); ?>">
                                <img src="<?php echo e(get_image_loading()); ?>"
                                     data-src="<?php echo e(RvMedia::getImageUrl($city->getMetaData('image', true), 'medium', false, RvMedia::getDefaultImage())); ?>"
                                     class="w-100 lazy" alt="<?php echo e($city->name); ?>"/>
                            </a>
                        </div>
                        <div class="location-property-content">
                            <div class="lp-content-flex">
                                <h4 class="lp-content-title"><?php echo e($city->name); ?></h4>
                                <span><?php echo e($city->properties_count); ?>+ <?php echo e(__('Properties')); ?></span>
                            </div>
                            <div class="lp-content-right">
                                <a href="<?php echo e(route('public.properties-by-city', ['slug' => $city['slug']])); ?>"
                                   class="lp-property-view">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="<?php echo e(route('public.properties')); ?>"
                   class="btn btn-theme-light-2 rounded"><?php echo e(__('Browse More Locations')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/properties-by-locations.blade.php ENDPATH**/ ?>