<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Title')); ?></label>
    <input name="title" value="<?php echo e(Arr::get($attributes, 'title')); ?>" class="form-control" placeholder="Find Accessible Homes To Rent">
</div>
<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Description')); ?></label>
    <textarea name="description" data-shortcode-attribute="content" class="form-control" rows="3"><?php echo e($content); ?></textarea>
</div>
<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Background')); ?></label>
    <?php echo Form::mediaImage('bg', Arr::get($attributes, 'bg')); ?>

</div>
<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Overlay')); ?></label>
    <input name="overlay" type="number" value="<?php echo e(Arr::get($attributes, 'overlay', '0')); ?>" class="form-control">
</div>
<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Style')); ?></label>
    <select name="style" class="form-control">
        <?php $__currentLoopData = [1,2,3,4,5,6,10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($i); ?>" <?php if(Arr::get($attributes, 'style') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/shortcodes/hero-banner-admin-config.blade.php ENDPATH**/ ?>