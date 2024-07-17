<?php if($block): ?>
    <?php
        // Filter all blocks by parent_id
        $block_childs = $blocks->filter(function ($item, $key) use ($block) {
            return $item->parent_id == $block->id;
        });
    ?>

    <section class="slider">
        <div class="swiper slider-content ">
            <div class="swiper-wrapper">
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
                            $icon = $item->icon != '' ? $item->icon : '';
                            $style =
                                isset($item->json_params->style) && $item->json_params->style == 'slider-caption-right'
                                    ? 'd-none'
                                    : '';

                            $image_for_screen = null;
                            if ($agent->isDesktop() && $image_background != null) {
                                $image_for_screen = $image_background;
                            } else {
                                $image_for_screen = $image;
                            }

                        ?>
                        <div class="swiper-slide slider-item">
                            <img src="<?php echo e($image); ?>"
                                alt="Customize"
                                title="Customize" />
                            <div class="slider-item-container">
                                <div class="container d-flex align-items-center justify-content-between gap-3">
                                    <div class="slider-item-content">
                                        <h2><?php echo e($title); ?></h2>
                                        <h3><?php echo e($brief); ?></h3>
                                        <p class="text-ellipsis-5">
                                            <?php echo e($content); ?>

                                        </p>
                                        <div class="d-flex justify-content-start align-items-center flex-wrap gap-3">
                                            <a href="<?php echo e($url_link_title); ?>"><button href="#" title="Tìm hiểu"><?php echo e($url_link_title); ?></button></a>
                                            <button class="d-flex align-items-center">Đăng ký tư vấn <img class="m-l-15"
                                                    src="<?php echo e(asset('themes/frontend/watches/images/right-icon.svg')); ?>"
                                                    alt="slide"></button>
                                        </div>
                                    </div>
                                    <div class="play-slide">
                                        <div class="d-flex justify-content-center">
                                            <img src="<?php echo e(asset('themes/frontend/watches/images/play-slide.svg')); ?>"
                                                alt="slide">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/banner/styles/slide.blade.php ENDPATH**/ ?>