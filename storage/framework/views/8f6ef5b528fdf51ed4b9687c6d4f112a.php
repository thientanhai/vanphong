<?php
    Theme::asset()
        ->container('footer')
        ->usePath()
        ->add('review-js', 'js/review.js');
    $canReview =
        auth('account')->check() &&
        auth('account')
            ->user()
            ->canReview($model);
    $review_meta_list = json_decode(get_meta_data($property, 'review_meta', true), true);
?>

<div id="reviews-component" data-api-get-rating="<?php echo e(route('public.ajax.real-estate-rating', $model->id)); ?>"
    data-review-fields="<?php echo e(json_encode(get_review_fields())); ?>">
    <?php if($model->reviews_count > 0): ?>
        <div class="rating-overview">
            <div class="rating-overview-box">
                <span class="rating-overview-box-total"> <?php echo e(round($model->reviews_avg_star, 1)); ?> </span>
                <span class="rating-overview-box-percent"><?php echo e(__('out of 5.0')); ?></span>
                <div class="rating_wrap">
                    <div class="rating">
                        <div class="product_rate" data-rate="<?php echo e($model->reviews_avg_star); ?>"
                            style="width: <?php echo e($model->reviews_avg_star * 20); ?>%;"></div>
                    </div>
                </div>
            </div>
            <?php if(is_array($review_meta_list)): ?>
                <div class="rating-bars">

                    <?php $__currentLoopData = get_review_fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviewField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="rating-bars-item">
                            <span class="rating-bars-name"><?php echo e(trans('review.' . $reviewField['field'])); ?></span>

                            <span class="rating-bars-inner">
                                <span class="rating-bars-rating high"
                                    data-rating="<?php echo e($review_meta_list[$reviewField['field']]); ?>">
                                    <span class="rating-bars-rating-inner"
                                        style="width: <?php echo e($review_meta_list[$reviewField['field']] * 20); ?>%;"></span>
                                </span>
                                <strong><?php echo e(round($review_meta_list[$reviewField['field']], 1)); ?></strong>
                            </span>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="property_block_wrap style-2">
            <div class="property_block_wrap_header">
                <a data-bs-toggle="collapse" data-parent="#comment" data-bs-target="#clEight" aria-controls="clEight"
                    href="javascript:void(0);" aria-expanded="true">
                    <h4 class="property_block_title"><?php echo e($model->reviews_count); ?> <?php echo e(__('Reviews')); ?></h4>
                </a>
            </div>
            <div class="loading-spinner"></div>
            <div class="reviews-list"
                data-url="<?php echo e(route('public.ajax.review.index', $model->slug)); ?>?reviewable_type=<?php echo e(get_class($model)); ?>"
                data-type="<?php echo e(get_class($model)); ?>"></div>
        </div>
    <?php endif; ?>
</div>

<?php if($canReview): ?>
    <div class="property_block_wrap style-2">

        <div class="property_block_wrap_header">
            <a data-bs-toggle="collapse" data-parent="#comment" data-bs-target="#clTen" aria-controls="clTen"
                href="javascript:void(0);" aria-expanded="true">
                <h4 class="property_block_title"><?php echo e(__('Write a Review')); ?></h4>

            </a>
            <?php if(!auth('account')->check()): ?>
                <p class="text-danger"><?php echo e(__('Please')); ?> <a class="text-danger"
                        href="<?php echo e(route('public.account.login')); ?>"><?php echo e(__('login')); ?></a>
                    <?php echo e(__('to write review!')); ?></p>
            <?php endif; ?>
        </div>
        <div id="clTen" class="panel-collapse collapse show">
            <div class="block-body">
                <?php echo Form::open([
                    'route' => ['public.ajax.review.store', 'slug' => $model->slug],
                    'method' => 'post',
                    'class' => 'form--review-product review-form',
                ]); ?>

                <input type="hidden" name="reviewable_id" value="<?php echo e($model->id); ?>">
                <input type="hidden" name="reviewable_type" value="<?php echo e(get_class($model)); ?>">
                <div class="row py-3">
                    <div class="col-md-8">
                        <div class="row">
                            <?php $__currentLoopData = get_review_fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="select-star"><?php echo e(trans('review.' . $item['field'])); ?></label>
                                    <select class="rating" name="meta[<?php echo e($item['field']); ?>]"
                                        id="select-star-<?php echo e($item['field']); ?>" data-read-only="false"
                                        <?php if(!$canReview): echo 'disabled'; endif; ?>>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected>5</option>
                                    </select>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="avg-total-pilx">
                            <input type="hidden" name="star" value="5">
                            <h4 class="high user_commnet_avg_rate">5</h4>
                            <span><?php echo e(__('Average Rating')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="content" class="form-control ht-80" placeholder="<?php echo e(__('Messages')); ?>" <?php if(!$canReview): echo 'disabled'; endif; ?>></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-theme-light-2 rounded" type="submit"
                                <?php if(!$canReview): echo 'disabled'; endif; ?>><?php echo e(__('Submit Review')); ?></button>
                        </div>
                    </div>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/partials/reviews.blade.php ENDPATH**/ ?>