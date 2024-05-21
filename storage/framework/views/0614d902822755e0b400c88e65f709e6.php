<?php
    /** @var Botble\Table\Actions\Action $action */
?>

<li>
    <a
        <?php if(!$action->getAttribute('class')): ?>
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'dropdown-item',
                str_replace('btn-', 'text-', $action->getColor()),
            ]); ?>"
        <?php endif; ?>
        <?php echo $__env->make('core/table::actions.includes.action-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> >
        <?php echo $__env->make('core/table::actions.includes.action-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <span class="ms-1"><?php echo e($action->getLabel()); ?></span>
    </a>
</li>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/table/resources/views/actions/action-dropdown-item.blade.php ENDPATH**/ ?>