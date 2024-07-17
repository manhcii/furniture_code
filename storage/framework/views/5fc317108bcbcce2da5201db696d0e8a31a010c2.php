<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';

    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });

    $items = [];
    $i = 0;
    foreach ($block_childs as $item) {
      $items[$i] = $item;
      $i++;
    }

    $block_ins1 = $blocks->filter(function ($item, $key) use ($block, $items) {
      return $item->parent_id == $items[0]->id;
    });
    $block_ins2 = $blocks->filter(function ($item, $key) use ($block, $items) {
      return $item->parent_id == $items[1]->id;
    });

  ?>

  <div class="section custom-bg my-0 py-0" style="--custom-bg: var(--themecolor)">
    <div class="row align-items-center no-gutters">
      <!-- Instagram Center Col - Text -->
      <div class="col-lg-4 py-5 order-lg-2">
        <div class="text-center dark p-5">
          <img src="<?php echo e($image); ?>" alt="">
          <h3 class="mt-3 mb-5 fw-normal h2">
            <?php echo e($title); ?>

          </h3>

          <a href="<?php echo e($url_link); ?>"
            target="_blank"
            class="button button-large button-border nott ls0 fw-normal button-light button-white border-width-1 m-0"
            style="border-color: rgba(255, 255, 255, 0.25)">
            <?php echo e($url_link_title); ?>

          </a>
        </div>
      </div>

      <!-- Instagram Left Col - Image -->
      <div class="col-lg-4 col-md-6 order-lg-1">
        <div class="row gutter-4">
          <?php if($block_ins1): ?>
            <?php $__currentLoopData = $block_ins1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <?php
                $title_child = $item->json_params->title->{$locale} ?? $item->title;
                $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                $content_child = $item->json_params->content->{$locale} ?? $item->content;
                $image_child = $item->image != '' ? $item->image : null;
                $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                $icon = $item->icon != '' ? $item->icon : '';
                $style = $item->json_params->style ?? '';
              ?>
              <div class="col-6">
                <a class="d-block instagram-image"
                  href="<?php echo e($url_link); ?>"
                  target="_blank"
                  style="
                    background: url('<?php echo e($image_child); ?>')
                    no-repeat center center;
                    background-size: cover;
                    min-height: 33vh;">
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          
        </div>
      </div>

      <!-- Instagram Right Col - Image -->
      <div class="col-lg-4 col-md-6 order-lg-3 mt-1 mt-md-0 ps-md-1 ps-lg-0">
        <div class="row gutter-4">
          <?php if($block_ins2): ?>
            <?php $__currentLoopData = $block_ins2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $title_child = $item->json_params->title->{$locale} ?? $item->title;
                $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                $content_child = $item->json_params->content->{$locale} ?? $item->content;
                $image_child = $item->image != '' ? $item->image : null;
                $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                $icon = $item->icon != '' ? $item->icon : '';
                $style = $item->json_params->style ?? '';
              ?>
              <div class="col-6">
                <a class="d-block instagram-image"
                  href="<?php echo e($url_link); ?>"
                  target="_blank"
                  style="
                    background: url('<?php echo e($image_child); ?>')
                    no-repeat center center;
                    background-size: cover;
                    min-height: 33vh;">
                </a>
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
<?php /**PATH /home/fhmagency/domains/fhmagency.vn/public_html/furniture/resources/views/frontend/blocks/banner/styles/logo_partner.blade.php ENDPATH**/ ?>