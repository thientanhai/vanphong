<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="modal-content" id="sign-up">
                    <div class="modal-body">
                        <h2 class="text-center"><?php echo e(trans('plugins/real-estate::dashboard.register-title')); ?></h2>
                        <br>
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.account.auth.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <form method="POST" class="simple-form" action="<?php echo e(route('public.account.register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input id="first_name" type="text"
                                                   class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>"
                                                   name="first_name" value="<?php echo e(old('first_name')); ?>" required autofocus
                                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.first_name')); ?>">
                                            <i class="ti-user"></i>
                                        </div>
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="d-block invalid-feedback">
                                                <strong><?php echo e($errors->first('first_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input id="last_name" type="text"
                                                   class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>"
                                                   name="last_name" value="<?php echo e(old('last_name')); ?>" required
                                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.last_name')); ?>">
                                            <i class="ti-user"></i>
                                        </div>
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="d-block invalid-feedback">
                                                 <strong><?php echo e($errors->first('last_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
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
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input id="username" type="text"
                                                   class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>"
                                                   name="username" value="<?php echo e(old('username')); ?>" required
                                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.username')); ?>">
                                            <i class="ti-user"></i>
                                        </div>
                                        <?php if($errors->has('username')): ?>
                                            <span class="d-block invalid-feedback">
                                                <strong><?php echo e($errors->first('username')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input id="password" type="password"
                                                   class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                                   name="password" required
                                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.password')); ?>">
                                            <i class="ti-unlock"></i>
                                        </div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="d-block invalid-feedback">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required
                                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.password-confirmation')); ?>">
                                            <i class="ti-unlock"></i>
                                        </div>
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
                                    <?php echo e(trans('plugins/real-estate::dashboard.register-cta')); ?>

                                </button>
                            </div>

                            <div class="form-group text-center">
                                <p><?php echo e(__('Have an account already?')); ?>

                                    <a href="<?php echo e(route('public.account.login')); ?>"
                                       class="link d-block d-sm-inline-block text-sm-left text-center"><?php echo e(__('Login')); ?></a>
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
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/account/auth/register.blade.php ENDPATH**/ ?>