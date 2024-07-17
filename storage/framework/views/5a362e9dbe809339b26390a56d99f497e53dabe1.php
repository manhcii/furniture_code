<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image_background = $block->image_background != '' ? $block->image_background : null;
    $image = $block->image != '' ? $block->image : null;
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    
    $image_for_screen = null;
    if ($agent->isDesktop() && $image_background != null) {
        $image_for_screen = $image_background;
    } else {
        $image_for_screen = $image;
    }
    
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });

  ?>
  
  

  <section id="slider" class="slider-element dark justify-content-start">
    <div class="container z-1">
      <div class="row align-items-start justify-content-center justify-content-xl-start py-6">
        <div class="col-xl-6 col-lg-9 col-md-10 mt-xl-4 text-center text-xl-start">
          <p class="op-07 text-white mb-3 text-uppercase ls2 text-smaller">
            <?php echo e($brief); ?>

          </p>
          <h1 class="display-4 mb-5 text-white fw-medium">
            <?php echo e($content); ?>

          </h1>
          <a href="<?php echo e($url_link); ?>"
            class="button button-large button-white button-light h-op-09 color m-0 fw-normal color px-4">
            <i style="position: relative; top: -2px">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="var(--themecolor)" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <rect x="32" y="48" width="192" height="160" rx="8" opacity="0.2"></rect>
                <rect x="32" y="48"
                  width="192"
                  height="160"
                  rx="8"
                  stroke-width="16"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  fill="none">
                </rect>
                <path
                  d="M168,88a40,40,0,0,1-80,0"
                  fill="none"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16">
                </path>
              </svg>
            </i><?php echo e($url_link_title); ?>

          </a>
        </div>
      </div>
    </div>

    

    <div class="line d-block d-xl-none my-0"></div>

    

    <div class="hero-image">
      <img src="<?php echo e($image); ?>" alt="" />
    </div>
  </section>

<?php endif; ?>
<?php /**PATH /home/fhmagency/domains/fhmagency.vn/public_html/furniture/resources/views/frontend/blocks/banner/styles/static.blade.php ENDPATH**/ ?>