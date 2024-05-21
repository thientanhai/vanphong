<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="modal-content" id="registermodal">
                    <div class="modal-body">
                        <h2 class="text-center"><?php echo e(trans('plugins/real-estate::dashboard.login-title')); ?></h2>
                        <br>
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.account.auth.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="login-form">
                            <form method="POST" class="simple-form" action="<?php echo e(route('public.account.login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label><?php echo e(trans('plugins/real-estate::dashboard.email_or_username')); ?></label>
                                    <div class="input-with-icon">
                                        <input id="email" type="text"
                                               class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                               placeholder="<?php echo e(trans('plugins/real-estate::dashboard.email_or_username')); ?>"
                                               name="email" value="<?php echo e(old('email')); ?>" autofocus>
                                        <i class="ti-user"></i>
                                    </div>
                                    <?php if($errors->has('email') || $errors->has('username')): ?>
                                        <span class="invalid-feedback d-block">
                                            <strong><?php echo e(!empty($errors->first('email')) ? $errors->first('email') : $errors->first('username')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group ">
                                    <label><?php echo e(trans('plugins/real-estate::dashboard.password')); ?></label>
                                    <div class="input-with-icon">
                                        <input id="password" type="password"
                                               class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                               placeholder="<?php echo e(trans('plugins/real-estate::dashboard.password')); ?>"
                                               name="password">
                                        <i class="ti-unlock"></i>
                                    </div>
                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback d-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"
                                                           name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <?php echo e(trans('plugins/real-estate::dashboard.remember-me')); ?>

                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-md-center">
                                            <a href="<?php echo e(route('public.account.password.request')); ?>" class="link">
                                                <?php echo e(trans('plugins/real-estate::dashboard.forgot-password-cta')); ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php if(setting('enable_captcha') && is_plugin_active('captcha')): ?>
                                    <div class="form-group">
                                        <?php echo Captcha::display(); ?>

                                        <?php if($errors->has('g-recaptcha-response')): ?>
                                            <span class="d-block invalid-feedback">
                                                    <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        <?php echo e(trans('plugins/real-estate::dashboard.login-cta')); ?>

                                    </button>
                                </div>

                                <div class="form-group text-center">
                                    <p><?php echo e(__("Don't have an account?")); ?> <a
                                            href="<?php echo e(route('public.account.register')); ?>"
                                            class="link d-block d-sm-inline-block text-sm-left text-center"><?php echo e(__('Register a new account')); ?></a>
                                    </p>
                                </div>

                                <div class="text-center">
                                    <?php echo apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Botble\RealEstate\Models\Account::class); ?>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/account/auth/login.blade.php ENDPATH**/ ?>