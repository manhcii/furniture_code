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
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 left-side">
                    <h3><?php echo e($brief); ?></h3>
                    <h2><?php echo e($title); ?></h2>
                    <p><?php echo e($content); ?>

                    </p>
                    <div class="d-flex align-items-center">
                        <a class="download" href="<?php echo e($url_link); ?>" title="Tìm hiểu">
                            <?php echo e($url_link_title); ?>

                        </a>
                        <a href="<?php echo e($url_link); ?>" class="wrap-btn">
                            <img class="img-fluid w-100"
                                src="<?php echo e(asset('themes/frontend/watches/images/icon/download.png')); ?>" alt="slide">
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12 ">
                    <div class="swiper introduce">
                        <div class="swiper-wrapper">
                            <?php if($block_childs): ?>
                                <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $image = $item->image != '' ? $item->image : null;
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo e($image); ?>" alt="Wheels">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/introduce/styles/profile.blade.php ENDPATH**/ ?>