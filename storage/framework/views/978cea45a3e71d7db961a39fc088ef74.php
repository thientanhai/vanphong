<?php if(empty($widgetSetting) || $widgetSetting->status == 1): ?>
    <?php if (isset($component)) { $__componentOriginal26ee7a516e9427ed7ae2b3fb7e70c468 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26ee7a516e9427ed7ae2b3fb7e70c468 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::stat-widget.item','data' => ['label' => $widget->title,'value' => $widget->statsTotal,'url' => $widget->route,'icon' => $widget->icon,'color' => $widget->color,'column' => $widget->column]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::stat-widget.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->title),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->statsTotal),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->route),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->icon),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->color),'column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widget->column)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26ee7a516e9427ed7ae2b3fb7e70c468)): ?>
<?php $attributes = $__attributesOriginal26ee7a516e9427ed7ae2b3fb7e70c468; ?>
<?php unset($__attributesOriginal26ee7a516e9427ed7ae2b3fb7e70c468); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26ee7a516e9427ed7ae2b3fb7e70c468)): ?>
<?php $component = $__componentOriginal26ee7a516e9427ed7ae2b3fb7e70c468; ?>
<?php unset($__componentOriginal26ee7a516e9427ed7ae2b3fb7e70c468); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/dashboard/resources/views/widgets/stats.blade.php ENDPATH**/ ?>