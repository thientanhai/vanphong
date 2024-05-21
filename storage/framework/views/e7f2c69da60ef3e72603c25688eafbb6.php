<?php
    /** @var Botble\Table\Actions\Action $action */
?>

<a
    <?php if(!$action->getAttribute('class')): ?> class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'btn',
        'btn-sm',
        'btn-icon' => $action->hasIcon(),
        $action->getColor(),
    ]); ?>" <?php endif; ?>
    <?php echo $__env->make('core/table::actions.includes.action-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
>
    <?php echo $__env->make('core/table::actions.includes.action-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['sr-only' => $action->hasIcon()]); ?>"><?php echo e($action->getLabel()); ?></span>
</a>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/table/resources/views/actions/action.blade.php ENDPATH**/ ?>