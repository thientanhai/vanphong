<?php if (isset($component)) { $__componentOriginaldaa3077dcea8104eb7236c8018937633 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaa3077dcea8104eb7236c8018937633 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::navbar.badge-count','data' => ['class' => 'unread-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::navbar.badge-count'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'unread-contacts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaa3077dcea8104eb7236c8018937633)): ?>
<?php $attributes = $__attributesOriginaldaa3077dcea8104eb7236c8018937633; ?>
<?php unset($__attributesOriginaldaa3077dcea8104eb7236c8018937633); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaa3077dcea8104eb7236c8018937633)): ?>
<?php $component = $__componentOriginaldaa3077dcea8104eb7236c8018937633; ?>
<?php unset($__componentOriginaldaa3077dcea8104eb7236c8018937633); ?>
<?php endif; ?><?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/storage/framework/views/8660d71c42f025593d7e856750ef81ff.blade.php ENDPATH**/ ?>