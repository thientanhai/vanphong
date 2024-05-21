<div id="contact" class="row">
    <div class="col-lg-7 col-md-7">
        <form action="<?php echo e(route('public.send.contact')); ?>" method="post" class="contact-form generic-form">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label><?php echo e(__('Name')); ?></label>
                        <input type="text" name="name" class="form-control simple">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label><?php echo e(__('Email')); ?></label>
                        <input type="email" name="email" class="form-control simple">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label><?php echo e(__('Subject')); ?></label>
                        <input type="text" name="subject" class="form-control simple">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label><?php echo e(__('Phone')); ?></label>
                        <input type="text" name="phone" class="form-control simple">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label><?php echo e(__('Message')); ?></label>
                <textarea class="form-control simple" name="content" rows="6" minlength="10"></textarea>
            </div>

            <?php if(setting('enable_captcha') && is_plugin_active('captcha')): ?>
                <div class="form-group">
                    <?php echo Captcha::display(); ?>

                </div>
            <?php endif; ?>

            <div class="contact-form-group">
                <div class="contact-message contact-success-message" style="display: none"></div>
                <div class="contact-message contact-error-message" style="display: none"></div>
            </div>

            <div class="form-actions form-group">
                <button class="btn btn-theme-light-2 rounded" type="submit"><?php echo e(__('Send message')); ?></button>
            </div>
        </form>
    </div>

    <div class="col-lg-5 col-md-5">
        <div class="contact-info">
            <h2><?php echo e(__('Get In Touch')); ?></h2>
            <p><?php echo e(theme_option('about-us')); ?></p>

            <br>
            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-home"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title"><?php echo e(__('Reach Us')); ?></h4>
                    <?php echo e(theme_option('address')); ?>

                </div>
            </div>

            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-email"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title"><?php echo e(__('Email')); ?></h4>
                    <?php echo e(theme_option('email')); ?>

                </div>
            </div>

            <div class="cn-info-detail">
                <div class="cn-info-icon">
                    <i class="ti-mobile"></i>
                </div>
                <div class="cn-info-content">
                    <h4 class="cn-info-title"><?php echo e(__('Call Us')); ?></h4>
                    <?php echo e(theme_option('hotline')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/contact-form.blade.php ENDPATH**/ ?>