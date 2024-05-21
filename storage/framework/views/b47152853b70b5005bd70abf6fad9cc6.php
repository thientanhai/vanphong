<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="sec-heading center">
                    <h2><?php echo clean($title); ?></h2>
                    <p><?php echo clean($description); ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="property-component" class="row rowm10 list-layout" data-url="<?php echo e(route('public.ajax.properties')); ?>" data-type="recently-viewed-properties"></div>
        </div>
    </div>
</section>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/recently-viewed-properties.blade.php ENDPATH**/ ?>