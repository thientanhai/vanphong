<?php
    Assets::removeStyles(['fontawesome', 'select2', 'toastr', 'datepicker', 'spectrum'])->removeScripts(['spectrum', 'jquery-waypoints', 'stickytableheaders', 'toastr', 'core', 'cookie', 'select2', 'datepicker', 'modernizr', 'ie8-fix', 'excanvas']);
?>

<?php if (isset($component)) { $__componentOriginal267ae10e99f5147c684b59e06e741a86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal267ae10e99f5147c684b59e06e741a86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::layouts.base','data' => ['bodyClass' => 'border-top-wide border-primary d-flex flex-column']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['body-class' => 'border-top-wide border-primary d-flex flex-column']); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo $__env->yieldContent('title'); ?>
     <?php $__env->endSlot(); ?>

    <div class="page page-center">
        <div class="container py-4 container-tight">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal267ae10e99f5147c684b59e06e741a86)): ?>
<?php $attributes = $__attributesOriginal267ae10e99f5147c684b59e06e741a86; ?>
<?php unset($__attributesOriginal267ae10e99f5147c684b59e06e741a86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal267ae10e99f5147c684b59e06e741a86)): ?>
<?php $component = $__componentOriginal267ae10e99f5147c684b59e06e741a86; ?>
<?php unset($__componentOriginal267ae10e99f5147c684b59e06e741a86); ?>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/errors/master.blade.php ENDPATH**/ ?>