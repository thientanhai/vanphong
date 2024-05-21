<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer footer__wrapper bg-white">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <?php echo dynamic_sidebar('footer_sidebar_1'); ?>

                        <?php echo dynamic_sidebar('footer_sidebar_2'); ?>

                        <?php echo dynamic_sidebar('footer_sidebar_3'); ?>

                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <h4>LIÊN HỆ</h4>
                        <?php if(theme_option('logo_white')): ?>
                            <img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo_white'))); ?>" class="img-footer"
                                 style="max-height: 38px" alt="<?php echo e(theme_option('site_name')); ?>">
                        <?php endif; ?>
                        
                        <div class="footer-add">
                            <div class="company__name">
                                <h2 class="text__black">
                                    CÔNG TY CỔ PHẦN GLOBAL GOLDEN ANT
                                </h2>
                            </div>
                            <?php if(theme_option('address')): ?>
                                <p><i class="fas fa-map-marker-alt"></i> <?php echo e(theme_option('address')); ?></p>
                            <?php endif; ?>
                            <?php if(theme_option('hotline')): ?>
                                <p><i class="fas fa-phone-square"></i> <?php echo e(theme_option('hotline')); ?></p>
                            <?php endif; ?>
                            <?php if(theme_option('email')): ?>
                                <p><i class="fas fa-envelope"></i> <?php echo e(theme_option('email')); ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <?php if(theme_option('social_links')): ?>
                        <ul class="footer-bottom-social">
                            <?php $__currentLoopData = json_decode(theme_option('social_links'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($socialLink) == 3): ?>
                                    <li><a href="<?php echo e($socialLink[2]['value']); ?>" target="_blank"
                                           title="<?php echo e($socialLink[0]['value']); ?>"><i
                                                class="<?php echo e($socialLink[1]['value']); ?>"></i></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0 text-end text-light"><?php echo clean(theme_option('copyright')); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->

<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>

<?php echo Theme::footer(); ?>

<?php if(session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg)): ?>
    <script type="text/javascript">
        "use strict";
        window.onload = function () {
            <?php if(session()->has('success_msg')): ?>
            window.showAlert('alert-success', '<?php echo e(session('success_msg')); ?>');
            <?php endif; ?>

            <?php if(session()->has('error_msg')): ?>
            window.showAlert('alert-danger', '<?php echo e(session('error_msg')); ?>');
            <?php endif; ?>

            <?php if(isset($error_msg)): ?>
            window.showAlert('alert-danger', '<?php echo e($error_msg); ?>');
            <?php endif; ?>

            <?php if(isset($errors)): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            window.showAlert('alert-danger', '<?php echo $error; ?>');
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        };
    </script>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/footer.blade.php ENDPATH**/ ?>