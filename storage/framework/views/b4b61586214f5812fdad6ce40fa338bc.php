<ul class="no-ul-list <?php echo e($class ?? 'third-row'); ?>">
    <?php $__currentLoopData = get_feature_all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <input id="features-<?php echo e($key); ?>" class="input-filter checkbox-custom" name="features[]"
                type="checkbox" <?php if(in_array($feature['id'], request()->input('features', []))): ?> checked <?php endif; ?> value="<?php echo e($feature['id']); ?>">
            <label for="features-<?php echo e($key); ?>" class="checkbox-custom-label"><?php echo e($feature['translations'][0]['name'] ?? $feature['name']); ?></label>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/features.blade.php ENDPATH**/ ?>