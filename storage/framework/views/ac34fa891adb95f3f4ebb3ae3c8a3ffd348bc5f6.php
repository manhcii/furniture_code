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
    <section class="culture">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="wrap-img">
                        <img class="img-fluid w-100" src="<?php echo e($image); ?>" alt="Văn hoá">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 right-side">
                    <h3><?php echo e($title); ?></h3>
                    <h2><?php echo e($brief); ?></h2>
                    <p><?php echo e($content); ?>

                    </p>
                    <a class="read-more d-flex align-items-center" href="<?php echo e($url_link); ?>" title="Tìm hiểu"><?php echo e($url_link_title); ?>

          <img class="m-l-15" src="<?php echo e(asset('themes/frontend/watches/images/right-icon.svg')); ?>" alt="slide">
        </a>
                </div>
            </div>
        </div>

    </section>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/introduce/styles/culture.blade.php ENDPATH**/ ?>