<?php
    use Botble\RealEstate\Enums\PropertyTypeEnum;
    $types = PropertyTypeEnum::labels();
?>

<?php if(count($types)): ?>
    <?php
        $type_choice = request()->input('type', PropertyTypeEnum::RENT());
    ?>
    <ul>
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <input id="cp-<?php echo e($key); ?>" value="<?php echo e($key); ?>" class="checkbox-custom" name="type"
                    type="radio" <?php if($type_choice == $key): ?> checked <?php endif; ?>>
                <label for="cp-<?php echo e($key); ?>" class="checkbox-custom-label"><?php echo e($type); ?></label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/type.blade.php ENDPATH**/ ?>