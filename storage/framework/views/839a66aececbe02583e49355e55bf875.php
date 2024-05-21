<div class="property_block_wrap style-2">
    <div class="property_block_wrap_header other__info">
        <h3 class="property_block_title"><?php echo e(__('Thông tin cơ bản')); ?></h3>
    </div>
    <?php
    ?>
    <div class="box-item tab-content price__rent">
        <?php
            $test = $property->getMetaData('service__fee');
            $serviceFee = $test[0] ?? null;

        ?>
        <!-- Chi tiết giá thuê -->
        <ul>
            <?php if($property->price): ?>
                <li>
                    <span class="icon">
                        <span>
                            <img class="img-logo entered lazyloaded"
                                src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/gia-thue.svg"
                                alt="GGA Office" width="25" height="25" data-ll-status="loaded">
                        </span>
                    </span>

                    <div class="info"><strong>Giá thuê </strong><span>Từ <?php echo $property->price . ' / ' . $property->currency->title . ' / ' . $property->period; ?></span></div>
                </li>
            <?php endif; ?>

            <?php if($serviceFee): ?>
                <li>
                    <span class="icon">
                        <span>
                            <img class="img-logo entered lazyloaded"
                                src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/phi-dich-vu.svg"
                                alt="Maison Office" width="18" height="25" data-ll-status="loaded">
                        </span>
                    </span>
                    <div class="info"><strong>Phí dịch vụ </strong><span><?php echo $serviceFee; ?></span></div>
                </li>
            <?php endif; ?>

            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/thue-vat.svg"
                            alt="Maison Office" width="25" height="25"
                            data-lazy-src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/thue-vat.svg"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Thuế VAT </strong><span>10%</span></div>
            </li>
        </ul>
        <ul>
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/do-oto.svg"
                            alt="Maison Office" width="25" height="16"
                            data-lazy-src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/do-oto.svg"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Đỗ ô tô </strong><span>4,950,000 vnd/tháng</span></div>
            </li>
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/do-xe.svg"
                            alt="Maison Office" width="14" height="25"
                            data-lazy-src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/do-xe.svg"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Đỗ xe máy </strong><span>462,000 vnd/tháng</span></div>
            </li>
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/tien-dien-lanh.svg"
                            alt="Maison Office" width="25" height="25"
                            data-lazy-src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/tien-dien-lanh.svg"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Tiền điện lạnh </strong><span>Đã bao gồm trong phí dịch vụ</span></div>
            </li>
            <li>
                <span class="icon">
                    <span>
                        <img class="img-logo entered lazyloaded"
                            src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/phi-ngoai-gio.svg"
                            alt="Maison Office" width="23" height="23"
                            data-lazy-src="https://maisonoffice.vn/wp-content/themes/maisonreal/assets/images/svg/phi-ngoai-gio.svg"
                            data-ll-status="loaded">
                    </span>
                </span>
                <div class="info"><strong>Phí ngoài giờ </strong><span>2,950,000 vnd/giờ (Tối thiểu 2 giờ)</span>
                </div>
            </li>
        </ul>
        <!-- end Chi tiết giá thuê -->
    </div>

    <div class="d-none">
        <div class="block-body">
            <ul class="detail_features">
                <?php
                    $customFields = $property->customFields()->get();
                    $dataArray = $customFields->toArray();
                ?>
                <?php $__currentLoopData = $dataArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($data['name'])): ?>
                        <li>
                            <strong><?php echo e(__('Hạng:')); ?></strong>
                            <?php echo e($data['value']); ?>

                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php if($property->test): ?>
                    <li>
                        <strong><?php echo e(__('Bedrooms:')); ?></strong>
                        <?php echo e(number_format($property->test)); ?> <?php echo e(__('BedsZ')); ?>

                    </li>
                <?php endif; ?>
                <?php if($property->number_bathroom): ?>
                    <li>
                        <strong><?php echo e(__('Bathrooms:')); ?></strong>
                        <?php echo e(number_format($property->number_bathroom)); ?> <?php echo e(__('Bath')); ?>

                    </li>
                <?php endif; ?>
                <?php if($property->square): ?>
                    <li>
                        <strong><?php echo e(__('Square:')); ?></strong><?php echo e($property->square_text); ?>

                    </li>
                <?php endif; ?>
                <?php if($property->number_floor): ?>
                    <li>
                        <strong><?php echo e(__('Floors:')); ?></strong><?php echo e(number_format($property->number_floor)); ?>

                    </li>
                <?php endif; ?>
                <?php if($property->category): ?>
                    <li>
                        <strong><?php echo e(__('Property Type:')); ?></strong><?php echo e($property->category_name); ?>

                        <?php echo e(!empty($property->subcategory_id) ? ' , ' . $property->subcategory->name : ''); ?>

                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</div>



<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/features.blade.php ENDPATH**/ ?>