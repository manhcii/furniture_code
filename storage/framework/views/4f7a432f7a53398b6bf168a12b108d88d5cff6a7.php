<!DOCTYPE html>
<html lang="<?php echo e($locale ?? 'vi'); ?>">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo e($seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''))); ?>

  </title>
  <link rel="icon" href="<?php echo e($web_information->image->favicon ?? ''); ?>" type="image/x-icon">
  
  <?php
    $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
    $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
    $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
    $seo_image = $seo_image ?? ($page->json_params->og_image ?? ($web_information->image->seo_og_image ?? ''));
  ?>
  <meta name="description" content="<?php echo e($seo_description); ?>" />
  <meta name="keywords" content="<?php echo e($seo_keyword); ?>" />
  <meta name="news_keywords" content="<?php echo e($seo_keyword); ?>" />
  <meta property="og:image" content="<?php echo e($seo_image); ?>" />
  <meta property="og:title" content="<?php echo e($seo_title); ?>" />
  <meta property="og:description" content="<?php echo e($seo_description); ?>" />
  <meta property="og:url" content="<?php echo e(Request::fullUrl()); ?>" />

  <meta name="copyright" content="<?php echo e($web_information->information->site_name ?? ''); ?>" />
  <meta name="author" content="<?php echo e($web_information->information->site_name ?? ''); ?>" />
  <meta name="robots" content="index,follow" />

  
  
  <?php echo $__env->make('frontend.panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->yieldPushContent('style'); ?>

  <?php echo $__env->yieldPushContent('schema'); ?>
</head>

<body class="stretched">

  
  <div class="body-overlay"></div>

  
  <div id="side-panel" class="bg-white">
    
    <div id="side-panel-trigger-close" class="side-panel-trigger">
      <a href="#"><i class="icon-line-cross"></i></a>
    </div>

    <div class="side-panel-wrap">
      <div class="top-cart d-flex flex-column h-100">
        <div class="top-cart-title">
          <h4>
            Shopping Cart
            <small class="bg-color-light icon-stacked text-center rounded-circle color">
            <?php echo e(session('cart') ? count(session('cart')) : 0); ?>

            </small>
          </h4>
        </div>

        <!-- Cart Items
      ============================================= -->
        <div class="top-cart-items">
          <?php if(session('cart')): ?>
            <?php $total = 0; ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $total += $details['price'] * $details['quantity'];
                $alias_detail = Str::slug($details['title']);
                $url_link = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $alias_detail, $id, 'detail', 'san-pham');
              ?>
              
              <div class="top-cart-item">
                <div class="top-cart-item-image border-0">
                  <a href="<?php echo e($url_link); ?>"><img src="<?php echo e($details['image_thumb'] ?? $details['image']); ?>" alt="Cart Image 1"/></a>
                </div>
                <div class="top-cart-item-desc">
                  <div class="top-cart-item-desc-title">
                    <a href="<?php echo e($url_link); ?>" class="fw-medium"><?php echo e($details['title']); ?></a>
                    <span class="top-cart-item-price d-block">
                      <?php echo e(isset($details['price']) && $details['price'] > 0 ? number_format($details['price']).' đ' : __('Contact')); ?>

                    </span>
                    <div class="d-flex mt-2">
                      <a href="<?php echo e(route('frontend.order.cart')); ?>" class="fw-normal text-black-50 text-smaller"><u>Edit</u></a>
                      <a href="javascript:void(0)" class="remove-item fw-normal text-black-50 text-smaller ms-3" data-id="<?php echo e($id); ?>">
                        <u>Remove</u>
                      </a>
                    </div>
                  </div>
                  <div class="top-cart-item-quantity">x <?php echo e($details['quantity']); ?></div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>

        <!-- Cart Saved Text
      ============================================= -->
        <div class="py-2 px-3 mt-auto text-black-50 text-smaller bg-color-light">
          <span>
            <img src="<?php echo e(asset('images/check.png')); ?>" alt="">
            You save 1.000.000 đ on this order.
          </span>
        </div>

        <!-- Cart Price and Button
      ============================================= -->
        <div class="top-cart-action flex-column align-items-stretch">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <small class="text-uppercase ls1">Total</small>
            <h4 class="fw-medium font-body mb-0">
              <?php echo e(session('cart') ? number_format($total).' đ' : 0); ?>

            </h4>
          </div>
          <a href="<?php echo e(route('frontend.order.cart')); ?>" class="button btn-block text-center m-0 fw-normal">
            <i style="position: relative; top: -2px">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#FFF" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <path d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z" opacity="0.2"></path>
                <path d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64v0A16,16,0,0,1,56,48H192"
                  fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="10">
                </path>
                <circle cx="180" cy="144" r="12"></circle>
              </svg>
            </i>
            Checkout
          </a>
        </div>
      </div>
    </div>
  </div>

  
  <div id="wrapper" class="clearfix">

    <?php echo $__env->make('frontend.blocks.header.styles.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    
    
    <?php if(isset($blocks_selected)): ?>
      <?php $__currentLoopData = $blocks_selected; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(\View::exists('frontend.blocks.' . $block->block_code . '.index')): ?>
          <?php echo $__env->make('frontend.blocks.' . $block->block_code . '.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
          <?php echo e('View: frontend.blocks.' . $block->block_code . '.index do not exists!'); ?>

        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  
    <?php echo $__env->make('frontend.blocks.footer.styles.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    
    <?php echo $__env->make('frontend.components.sticky.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('frontend.panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldPushContent('script'); ?>
    
    <?php echo $__env->make('frontend.components.sticky.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    
    <?php echo $__env->make('frontend.components.popup.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>

</body>

</html>
<?php /**PATH E:\xampp\htdocs\GBD_TEM\furniture\resources\views/frontend/layouts/default.blade.php ENDPATH**/ ?>