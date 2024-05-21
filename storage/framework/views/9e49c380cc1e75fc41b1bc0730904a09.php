<?php
    Assets::addScriptsDirectly('vendor/core/core/base/js/repeater-field.js');

    $values = array_values(is_array($value) ? $value : (array) json_decode($value ?: '[]', true));

    $added = [];

    if (! empty($values)) {
        for ($i = 0; $i < count($values); $i++) {
            $group = '';
            foreach ($fields as $key => $field) {
                if ($field['type'] === 'select') {
                    $field['type'] = 'customSelect';
                }

                $item = Form::hidden($name . '[' . $i . '][' . $key . '][key]', $field['attributes']['name']);
                $field['attributes']['name'] = $name . '[' . $i . '][' . $key . '][value]';
                $field['attributes']['value'] = Arr::get($values, $i . '.' . $key . '.value');
                $field['attributes']['options']['id'] = $id = 'repeater_field_' . md5($field['attributes']['name']);
                Arr::set($field, 'attributes.id', $id);
                Arr::set($field, 'label_attr.for', $id);
                $item .= Blade::render(sprintf('<x-core::form.label %s>%s</x-core::form.label>', Html::attributes(Arr::get($field, 'label_attr', [])), $field['label']));
                $item .= call_user_func_array([Form::class, $field['type']], array_values($field['attributes']));

                $group .= Blade::render(sprintf("<x-core::form-group>%s</x-core::form-group>", $item));
            }

            $added[] = Blade::render(sprintf('<div class="repeater-item-group">%s</div>', $group));
        }
    }

    $group = '';

    foreach ($fields as $key => $field) {
        if ($field['type'] === 'select') {
            $field['type'] = 'customSelect';
        }

        $item = Form::hidden($name . '[__key__][' . $key . '][key]', $field['attributes']['name']);
        $field['attributes']['name'] = $name . '[__key__][' . $key . '][value]';
        $field['attributes']['options']['id'] = 'repeater_field_' . md5($field['attributes']['name']) . '__key__';
        Arr::set($field, 'label_attr.for', $field['attributes']['options']['id']);
        $item .= Blade::render(sprintf('<x-core::form.label %s>%s</x-core::form.label>', Html::attributes(Arr::get($field, 'label_attr', [])), $field['label']));
        $item .= call_user_func_array([Form::class, $field['type']], array_values($field['attributes']));

        $group .= Blade::render(sprintf('<x-core::form-group>%s</x-core::form-group>', $item));
    }

    $defaultFields = [Blade::render(sprintf('<div class="repeater-item-group">%s</div>', $group))];

    $repeaterId = 'repeater_field_' . md5($name) . '_' . uniqid();
?>

<input
    name="<?php echo e($name); ?>"
    type="hidden"
    value="[]"
>

<div
    class="repeater-group"
    id="<?php echo e($repeaterId); ?>_group"
    data-next-index="<?php echo e(count($added)); ?>"
>
    <?php $__currentLoopData = $added; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <fieldset
            class="form-fieldset position-relative"
            data-id="<?php echo e($repeaterId); ?>_<?php echo e($loop->index); ?>"
            data-index="<?php echo e($loop->index); ?>"
        >
            <legend class="d-flex justify-content-end align-items-center">
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['class' => 'position-absolute remove-item-button','dataTarget' => 'repeater-remove','dataId' => ''.e($repeaterId).'_'.e($loop->index).'','icon' => 'ti ti-x','iconOnly' => true,'size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'position-absolute remove-item-button','data-target' => 'repeater-remove','data-id' => ''.e($repeaterId).'_'.e($loop->index).'','icon' => 'ti ti-x','icon-only' => true,'size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
            </legend>

            <div><?php echo $field; ?></div>
        </fieldset>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="mb-3">
    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['dataTarget' => 'repeater-add','dataId' => ''.e($repeaterId).'','type' => 'button']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-target' => 'repeater-add','data-id' => ''.e($repeaterId).'','type' => 'button']); ?>
        <?php echo e(__('Add new')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
</div>

<?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::custom-template','data' => ['id' => ''.e($repeaterId).'_template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($repeaterId).'_template']); ?>
    <?php $__currentLoopData = $defaultFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $defaultFieldIndex => $defaultField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <fieldset data-id="<?php echo e($repeaterId); ?>___key__" data-index="__key__" class="form-fieldset position-relative">
            <div data-target="fields">__fields__</div>

            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['class' => 'position-absolute remove-item-button','dataTarget' => 'repeater-remove','dataId' => ''.e($repeaterId).'___key__','icon' => 'ti ti-x','iconOnly' => true,'size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'position-absolute remove-item-button','data-target' => 'repeater-remove','data-id' => ''.e($repeaterId).'___key__','icon' => 'ti ti-x','icon-only' => true,'size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
        </fieldset>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $attributes = $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::custom-template','data' => ['id' => ''.e($repeaterId).'_fields']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($repeaterId).'_fields']); ?>
    <?php echo e($defaultField); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $attributes = $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/forms/partials/repeater.blade.php ENDPATH**/ ?>