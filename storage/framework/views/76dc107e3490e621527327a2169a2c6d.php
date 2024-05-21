<div class="row">
    <div class="col-md-6">
        <facilities-component
            :selected_facilities="<?php echo e(json_encode($selectedFacilities)); ?>"
            :facilities="<?php echo e(json_encode($facilities)); ?>"
            v-slot="{ items, facilities, addRow, deleteRow, removeSelectedItem }"
        >
            <div class="mb-3">
                <div class="row g-2 mb-2" v-for="(item, index) in items">
                    <div class="col">
                        <select
                            :name="`facilities[${index}1][id]`"
                            class="select-search-full ui-select"
                            @change="removeSelectedItem"
                        >
                            <option value=""><?php echo e(trans('plugins/real-estate::dashboard.select_facility')); ?></option>
                            <option
                                v-for="(facility, index) in facilities"
                                :key="index"
                                :value="facility.id"
                                :selected="facility.id === item.id"
                            >
                                {{ facility.name }}
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <input
                            type="text"
                            :name="`facilities[${index}1][distance]`"
                            v-model="item.distance"
                            class="form-control"
                            placeholder="<?php echo e(trans('plugins/real-estate::dashboard.distance')); ?>"
                        />
                    </div>
                    <div class="col-auto">
                        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['@click' => 'deleteRow(index)','icon' => 'ti ti-trash','iconOnly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'deleteRow(index)','icon' => 'ti ti-trash','icon-only' => true]); ?>
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
                </div>
            </div>

            <a href="javascript:void(0)" role="button" @click="addRow"><?php echo e(trans('plugins/real-estate::dashboard.add_new')); ?></a>
        </facilities-component>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/plugins/real-estate/resources/views/partials/form-facilities.blade.php ENDPATH**/ ?>