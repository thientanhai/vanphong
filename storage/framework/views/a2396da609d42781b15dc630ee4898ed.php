<div class="gmap_canvas mt-1 my-3">
    <?php if(!empty($location)): ?> <p><?php echo e($location); ?></p> <?php endif; ?>
    <iframe id="gmap_canvas" width="100%" height="100%"
            src="https://maps.google.com/maps?q=<?php echo e(urlencode($location)); ?>%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/gmap-canvas.blade.php ENDPATH**/ ?>