<select data-placeholder="<?php echo e(__('Country')); ?>" class="form-control select2" name="country_id"
        id="filter_country_id">
    <option value=""><?php echo e(__('Country')); ?></option>
    <?php $__currentLoopData = get_countries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($country->id); ?>" <?php if(request()->input('country_id') == $country->id): ?> selected <?php endif; ?>>
            <?php echo e($country->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/filters/location_country.blade.php ENDPATH**/ ?>