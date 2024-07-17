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
  ?>
  <div class="container-fluid">
    <div class="row align-items-lg-center col-mb-30">
      
      <div class="col-xl-8 col-lg-6 px-lg-0 min-vh-50 min-vh-lg-75"
        style=" background: url('<?php echo e($image); ?>') no-repeat center center; background-size: cover;">
      </div>

      
      <div class="col-xl-4 col-lg-6 px-lg-5 py-5">
        <h3 class="h1 mb-4 fw-normal">
          <?php echo e($title); ?>

        </h3>
        <p>
          <?php echo e($brief); ?>

        </p>
        <a href="<?php echo e($url_link); ?>"
          class="button button-border m-0 button-dark border-width-1 border-default h-bg-color"
          ><?php echo e($url_link_title); ?> <i class="icon-long-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /home/fhmagency/domains/fhmagency.vn/public_html/furniture/resources/views/frontend/blocks/custom/styles/about_vision.blade.php ENDPATH**/ ?>