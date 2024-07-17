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
  <div id="fhm-about">
  <section class="story">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="wrap-img">
                    <img class="img-fluid w-100" src="<?php echo e($image); ?>" alt="Uy tín">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="text-des">CÂU CHUYỆN</h3>
                <h2 class="text-title"><?php echo e($title); ?></h2>
                <p class="text-content">
                    <?php echo e($content); ?>

                </p>
                <div class="story-side d-flex">
                  <?php if($block_childs): ?>
                    <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $title = $item->json_params->title->{$locale} ?? $item->title;
                            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                            $content = $item->json_params->content->{$locale} ?? $item->content;
                            $image = $item->image != '' ? $item->image : null;
                            $image_background = $item->image_background != '' ? $item->image_background : null;
                        ?>
                      <div class="experience">
                          <div class="wrap-icon">
                              <img class="img-fluid w-100" src="<?php echo e($image); ?>" alt="">
                          </div>
                          <div class="experience-info">
                              <h3><?php echo e($title); ?></h3>
                              <p><?php echo e($content); ?> </p>
                          </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <p class="text-content">
                    <?php echo e($brief); ?>

                </p>
                <a class="read-more d-flex align-items-center" href="<?php echo e($url_link); ?>" title="Tìm hiểu"><?php echo e($url_link_title); ?>

                  <img class="m-l-15" src="<?php echo e(asset('themes/frontend/watches/images/right-icon.svg')); ?>" alt="slide">
                </a>
            </div>
        </div>
    </div>
  </section>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/introduce/styles/story.blade.php ENDPATH**/ ?>