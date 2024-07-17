<?php if($block): ?>
    <?php
        $title = $block->json_params->title->{$locale} ?? $block->title;
        $brief = $block->json_params->brief->{$locale} ?? $block->brief;
        $content = $block->json_params->content->{$locale} ?? $block->content;
        $image = $block->image != '' ? $block->image : '';
        $image_background = $block->image_background != '' ? $block->image_background : '';
        $url_link = $block->url_link != '' ? $block->url_link : '';
        $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

        $block_childs = $blocks->filter(function ($item, $key) use ($block) {
            return $item->parent_id == $block->id;
        });
    ?>
    <section class="category">
        <div class="">
            <div class="category-main">
                <?php if($block_childs): ?>
                    <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $image = $item->image != '' ? $item->image : null;
                        ?>
                        <div class="category-item">
                            <div class="category-item-image">
                                <img src="<?php echo e($image); ?>" alt="Wheels & Tires" />
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="category-footer gap-3 flex-wrap">
                <p><?php echo e($title); ?></p>
                <a href="<?php echo e($url_link); ?>"><button type="button" class="start-cate"><?php echo e($url_link_title); ?> <img
                            src="<?php echo e(asset('themes/frontend/watches/images/right-icon.svg')); ?>"
                            alt="slide"></button></a>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/custom/styles/about_client.blade.php ENDPATH**/ ?>