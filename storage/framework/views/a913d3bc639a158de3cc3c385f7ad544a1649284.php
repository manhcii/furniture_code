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
    <section class="team">
        <div class="container">
            <h3><?php echo e($title); ?></h3>
            <h2><?php echo e($brief); ?></h2>
            <p><?php echo e($content); ?>

            </p>
            <div class="swiper Swiperteam">
                <div class="swiper-wrapper">
                    <?php if($block_childs): ?>
                    <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $title = $item->json_params->title->{$locale} ?? $item->title;
                            $image = $item->image != '' ? $item->image : null;
                        ?>
                    <div class="swiper-slide">
                        <img src="<?php echo e($image); ?>" alt="team">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/introduce/styles/our_team.blade.php ENDPATH**/ ?>