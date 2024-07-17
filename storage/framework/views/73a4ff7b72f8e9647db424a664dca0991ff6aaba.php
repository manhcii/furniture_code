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
<section class="video">
    <div class="container">
        <div class="wrap-video">
            <img src="<?php echo e($image); ?>" alt="bg">
            <div class="play-video">
                <img src="<?php echo e(asset('themes/frontend/watches/images/play-slide.svg')); ?>" alt="slide">
            </div>
            <video src="#"></video>
        </div>
    </div>
</section>
<!-- END SLIDER-->
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/service/styles/video.blade.php ENDPATH**/ ?>