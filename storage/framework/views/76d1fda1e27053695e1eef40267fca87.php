<div class="post-share">
    <h4 class="pbm-title"><?php echo e($title); ?>:</h4>
    <ul class="list">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>&title=<?php echo e($description); ?>"
                target="_blank" title="<?php echo e(__('Share on Facebook')); ?>" rel="nofollow"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(urlencode(url()->current())); ?>&summary=<?php echo e(rawurldecode($description)); ?>&source=Linkedin"
                title="<?php echo e(__('Share on Linkedin')); ?>" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e($description); ?>"
                target="_blank" title="<?php echo e(__('Share on Twitter')); ?>" rel="nofollow"><i class="fab fa-twitter"></i></a>
        </li>
    </ul>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/share.blade.php ENDPATH**/ ?>