href="<?php echo e($action->hasUrl() ? $action->getUrl() : 'javascript:void(0);'); ?>"

<?php if($action->getLabel()): ?>
    data-bs-toggle="tooltip"
    data-bs-original-title="<?php echo e($action->getLabel()); ?>"
<?php endif; ?>

<?php if($action->isAction()): ?>
    data-dt-single-action
    data-method="<?php echo e($action->getActionMethod()); ?>"
    <?php if($action->isConfirmation()): ?>
        data-confirmation-modal="<?php echo e($action->isConfirmation() ? 'true' : 'false'); ?>"
        data-confirmation-modal-title="<?php echo e($action->getConfirmationModalTitle()); ?>"
        data-confirmation-modal-message="<?php echo e($action->getConfirmationModalMessage()); ?>"
        data-confirmation-modal-button="<?php echo e($action->getConfirmationModalButton()); ?>"
        data-confirmation-modal-cancel-button="<?php echo e($action->getConfirmationModalCancelButton()); ?>"
    <?php endif; ?>
<?php elseif($action->shouldOpenUrlInNewTable()): ?>
    target="_blank"
<?php endif; ?>

<?php echo Html::attributes($action->getAttributes()); ?>

<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/table/resources/views/actions/includes/action-attributes.blade.php ENDPATH**/ ?>