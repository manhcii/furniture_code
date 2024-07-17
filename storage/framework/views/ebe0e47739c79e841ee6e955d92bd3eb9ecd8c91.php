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
    <section class="partner m-b-0">
        <div class="partner-container">
            <h3>
                <?php echo e($title); ?>

            </h3>
        </div>
        <div class="container">
            <div class="container-project">
                <div class="row">
                    <div class="swiper partner-slide">
                        <div class="swiper-wrapper">
                            
                            <?php if($block_childs): ?>
                                <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $title = $item->json_params->title->{$locale} ?? $item->title;
                                        $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                                        $content = $item->json_params->content->{$locale} ?? $item->content;
                                        $image = $item->image != '' ? $item->image : null;
                                    ?>
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="d-flex justify-content-center">
                                                <div class="head-title-parner">
                                                    <div>
                                                        <p><?php echo e($title); ?></p>
                                                        <span><?php echo e($brief); ?></span>
                                                    </div>
        
                                                </div>
                                            </div>
                                            <div class="speech-bubble">
                                                <div class="cm_p">
                                                    <img src="<?php echo e(asset('themes/frontend/watches/images/phay_cm.svg')); ?>" alt="">
                                                </div>
                                                <p><?php echo e($content); ?></p>
                                            </div>
                                        </div>
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
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/custom/styles/about_customer.blade.php ENDPATH**/ ?>