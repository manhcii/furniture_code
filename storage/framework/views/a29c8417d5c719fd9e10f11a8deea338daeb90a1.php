
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
    <section class="partner-customer">
        <div class="container">
            <div class="partner-customer-container">
                <div class="title-partner-customer">
                    <h3><?php echo e($title); ?></h3>
                </div>
                <div class="swiper partner-customer-swipper">
                    <div class="swiper-wrapper align-items-center">
                        <?php if($block_childs): ?>
                        <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $title = $item->json_params->title->{$locale} ?? $item->title;
                                $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                                $content = $item->json_params->content->{$locale} ?? $item->content;
                                $image = $item->image != '' ? $item->image : null;
                                $image_background = $item->image_background != '' ? $item->image_background : null;
                                $video = $item->json_params->video ?? null;
                                $video_background = $item->json_params->video_background ?? null;
                                $url_link = $item->url_link != '' ? $item->url_link : '';
                                $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                            ?>
                        <div class="swiper-slide container-img-partner-cus">
                            <div class="">
                                <img src="<?php echo e($image); ?>" alt="brand">
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/customer/styles/partner.blade.php ENDPATH**/ ?>