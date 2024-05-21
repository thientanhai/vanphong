<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Title')); ?></label>
    <input name="title" value="<?php echo e(Arr::get($attributes, 'title')); ?>" class="form-control">
</div>

<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Description')); ?></label>
    <textarea name="description" data-shortcode-attribute="content" class="form-control" rows="3"><?php echo e($content); ?></textarea>
</div>

<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Property Type')); ?></label>
    <select name="type" id="type" class="form-control">
        <option value="" <?php if(Arr::get($attributes, 'type') == ""): ?> selected <?php endif; ?>><?php echo e(__('-----')); ?></option>
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($type->id); ?>" <?php if(Arr::get($attributes, 'type') == $type->slug): ?> selected <?php endif; ?>><?php echo e($type->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group mb-3">
    <label class="control-label"><?php echo e(__('Limit')); ?></label>
    <input name="limit" class="form-control" value="<?php echo e(Arr::get($attributes, 'limit', 6)); ?>">
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/properties-slide-admin-config.blade.php ENDPATH**/ ?>