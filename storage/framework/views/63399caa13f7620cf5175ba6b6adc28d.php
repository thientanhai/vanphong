<div class="form-group mb-3">
    <label class="control-label" for="video_thumbnail"><?php echo e(__('Youtube Video Thumbnail')); ?></label>

    <?php if(in_array(Route::currentRouteName(), ['public.account.properties.create', 'public.account.properties.edit'])): ?>
        <div class="image-box">
            <input type="hidden" name="video[thumbnail]" value="<?php echo e($videoThumbnail); ?>" class="image-data">
            <input type="file" name="thumbnail_input" class="image_input" accept="image/*" style="display: none;">
            <div class="preview-image-wrapper">
                <img src="<?php echo e(RvMedia::getImageUrl($videoThumbnail, 'thumb', false, RvMedia::getDefaultImage())); ?>" alt="preview image" class="preview_image" width="150">
                <a class="btn_remove_image" title="<?php echo e(trans('core/base::forms.remove_image')); ?>">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="image-box-actions">
                <a href="#" class="custom-select-image">
                    <?php echo e(trans('core/base::forms.choose_image')); ?>

                </a>
            </div>
        </div>
    <?php else: ?>
        <?php echo Form::mediaImage('video_thumbnail', $videoThumbnail); ?>

    <?php endif; ?>
</div>

<div class="form-group mb-3">
    <label class="control-label" for="video_url"><?php echo e(__('Youtube Video URL')); ?></label>
    <?php echo Form::text('video[url]', $videoUrl, [
        'id'            => 'video_url',
        'class'         =>'form-control',
        'placeholder'   => 'https://www.youtube.com/watch?v=FN7ALfpGxiI',
        'data-counter'  => 255]); ?>

</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/additional-property-fields.blade.php ENDPATH**/ ?>