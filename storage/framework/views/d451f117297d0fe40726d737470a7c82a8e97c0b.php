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
<!-- START SLIDER-->
<section class="slider">
    <div class="swiper slider-content ">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider-item">
                <img src="<?php echo e($image); ?>" alt="Customize. Modify. Upgrade. Repair. Replace" title="Customize. Modify. Upgrade. Repair. Replace" />
                <div class="slider-item-container">
                    <div class="container d-flex align-items-center justify-content-end">
                        <div class="slider-item-content text-end">
                            <h2><?php echo e($title); ?></h2>
                            <h3><?php echo e($brief); ?></h3>
                            <p>
                                <?php echo e($content); ?>

                            </p>
                            <div class="d-flex justify-content-end align-items-center">
                                <a class="d-flex align-items-center" href="<?php echo e($url_link); ?>" title="Tìm hiểu"><?php echo e($url_link_title); ?>

                                <img style="width: 25px"  class="m-l-15" src="<?php echo e(asset('themes/frontend/watches/images/right-icon.svg')); ?>" alt="slide"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SLIDER-->
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/introduce/styles/banner.blade.php ENDPATH**/ ?>