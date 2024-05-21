<?php
    use Botble\RealEstate\Enums\PropertyTypeEnum;
    $types = PropertyTypeEnum::labels();
?>

<select id="select-type" data-placeholder="<?php echo e(__('Type')); ?>" class="form-control" name="type">
    <option value=""><?php echo e(__('-- Select --')); ?></option>
    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php if(request()->input('type') == $key): ?> selected <?php endif; ?>><?php echo e($type); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/select-types.blade.php ENDPATH**/ ?>