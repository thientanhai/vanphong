<?php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fire('beforeRenderTheme', app(\Botble\Theme\Contracts\Theme::class));
?>

<?php echo Theme::partial('header'); ?>


<!-- ============================ User Dashboard ================================== -->
<section class="error-wrap">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-10">
                <div class="text-center">
                    <img src="<?php echo e(Theme::asset()->url('img/404.png')); ?>" class="img-fluid" alt="">
                </div>

                <div>
                    <br><br>
                    <h4><?php echo e(__('This may have occurred because of several reasons')); ?>:</h4>
                    <ul>
                        <li><?php echo e(__('The page you requested does not exist.')); ?></li>
                        <li><?php echo e(__('The link you clicked is no longer.')); ?></li>
                        <li><?php echo e(__('The page may have moved to a new location.')); ?></li>
                        <li><?php echo e(__('An error may have occurred.')); ?></li>
                        <li><?php echo e(__('You are not authorized to view the requested resource.')); ?></li>
                    </ul>

                    <strong><?php echo clean(__('Please try again in a few minutes, or alternatively return to the homepage by <a href=":link">clicking here</a>.', ['link' => route('public.single')])); ?></strong>
                    <br>
                </div>

                <div class="text-center">
                    <a class="btn btn-theme" href="<?php echo e(route('public.index')); ?>"><?php echo e(__('Back To Home')); ?></a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php echo Theme::partial('footer'); ?>



<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/404.blade.php ENDPATH**/ ?>