<select id="select-bedroom" data-placeholder="<?php echo e(__('Bedroom')); ?>" name="bedroom" class="form-control">
    <option value="">&nbsp;</option>
    <?php if(theme_option('bedroom')): ?>
        <?php $__currentLoopData = get_repeat_field('bedroom'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($item) > 1): ?>
                <option value="<?php echo e($item[1]['value']); ?>" <?php if(request()->input('bedroom') == $item[1]['value']): ?> selected <?php endif; ?>>
                    <?php echo e($item[0]['value']); ?>

                </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</select>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/filters/bedrooms.blade.php ENDPATH**/ ?>