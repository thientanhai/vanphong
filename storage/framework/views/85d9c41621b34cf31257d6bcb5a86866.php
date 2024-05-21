<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 class="text-center"><?php echo e(trans('plugins/real-estate::account.forgot_password')); ?></h2>
                        <br>
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.account.auth.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <form method="POST" class="simple-form" action="<?php echo e(route('public.account.password.email')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input id="email" type="email"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" value="<?php echo e(old('email')); ?>" required
                                           placeholder="<?php echo e(trans('plugins/real-estate::dashboard.email')); ?>">
                                    <i class="ti-email"></i>
                                </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="d-block invalid-feedback">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                    <?php echo e(trans('plugins/real-estate::dashboard.reset-password-cta')); ?>

                                </button>
                                <div class="text-center">
                                    <a href="<?php echo e(route('public.account.login')); ?>"
                                       class="btn btn-link"><?php echo e(trans('plugins/real-estate::dashboard.back-to-login')); ?></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/account/auth/passwords/email.blade.php ENDPATH**/ ?>