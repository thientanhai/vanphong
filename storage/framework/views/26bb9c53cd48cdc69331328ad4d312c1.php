<?php echo Form::open(['route' => 'public.send.consult', 'method' => 'POST', 'class' => 'consult-form', 'id' => 'consult-form']); ?>

<div class="row">
    <input type="hidden" name="data_id" value="<?php echo e($data->id); ?>">
    <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" placeholder="<?php echo e(__('Name')); ?> *" required>
    </div>
    <div class="form-group">
        <input type="text" name="phone" class="form-control" placeholder="<?php echo e(__('Phone')); ?> *"
            data-validation-engine="validate[required]"
            data-errormessage-value-missing="<?php echo e(__('Please enter phone number')); ?>!">
    </div>
    <div class="form-group">
        <input class="form-control" name="email" id="email" type="email" placeholder="<?php echo e(__('Email')); ?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="<?php echo e(__('Subject')); ?> *" value="<?php echo e($data->name); ?>"
            readonly>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" rows="5" placeholder="<?php echo e(__('Message')); ?>"></textarea>
    </div>
    <?php if(setting('enable_captcha') && is_plugin_active('captcha')): ?>
        <div class="form-group">
            <?php echo Captcha::display(); ?>

        </div>
    <?php endif; ?>
    <div class="form-group">
        <button class="btn btn-black btn-md rounded full-width" type="submit"><?php echo e(__('Send Message')); ?></button>
    </div>
    <div class="clearfix"></div>
    <br>
    <div class="alert alert-success text-success text-left" style="display: none;">
        <span></span>
    </div>
    <div class="alert alert-danger text-danger text-left" style="display: none;">
        <span></span>
    </div>
</div>


<?php echo Form::close(); ?>

<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/form-contact-consult.blade.php ENDPATH**/ ?>