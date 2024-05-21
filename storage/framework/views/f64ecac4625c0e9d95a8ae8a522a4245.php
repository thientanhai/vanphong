<?php (OptimizerHelper::disable()); ?>

<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss
    version="2.0"
    xmlns:atom="http://www.w3.org/2005/Atom"
>
    <channel>
        <atom:link
            type="application/rss+xml"
            href="<?php echo e(url($meta['link'])); ?>"
            rel="self"
        />
        <title><?php echo Botble\RssFeed\Helpers\Cdata::out($meta['title']); ?></title>
        <link><?php echo Botble\RssFeed\Helpers\Cdata::out(url($meta['link'])); ?></link>
        <?php if(!empty($meta['image'])): ?>
            <image>
                <url><?php echo e($meta['image']); ?></url>
                <title><?php echo Botble\RssFeed\Helpers\Cdata::out($meta['title']); ?></title>
                <link><?php echo Botble\RssFeed\Helpers\Cdata::out(url($meta['link'])); ?></link>
            </image>
        <?php endif; ?>
        <description><?php echo Botble\RssFeed\Helpers\Cdata::out($meta['description']); ?></description>
        <language><?php echo e($meta['language']); ?></language>
        <pubDate><?php echo e($meta['updated']); ?></pubDate>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <item>
                <title><?php echo Botble\RssFeed\Helpers\Cdata::out($item->title); ?></title>
                <link><?php echo e(url($item->link)); ?></link>
                <description><?php echo Botble\RssFeed\Helpers\Cdata::out($item->summary); ?></description>
                <?php if(property_exists($item, 'author')): ?>
                    <dc:creator><?php echo Botble\RssFeed\Helpers\Cdata::out($item->author); ?></dc:creator>
                <?php else: ?>
                    <author><?php echo Botble\RssFeed\Helpers\Cdata::out(
                        $item->authorName . (empty($item->authorEmail) ? '' : ' <' . $item->authorEmail . '>'),
                    ); ?></author>
                <?php endif; ?>
                <guid><?php echo e($item->link); ?></guid>
                <pubDate><?php echo e($item->updated->toRssString()); ?></pubDate>
                <enclosure
                    type="<?php echo e($item->enclosureType); ?>"
                    url="<?php echo e(str_replace('https', 'http', $item->enclosure)); ?>"
                    length="<?php echo e($item->enclosureLength); ?>"
                />
                <?php $__currentLoopData = $item->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <category><?php echo e($category); ?></category>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </channel>
</rss>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/plugins/rss-feed/resources/views/rss.blade.php ENDPATH**/ ?>