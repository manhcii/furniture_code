<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('demos/seo/images/sections/5.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::TAXONOMY_STATUS['active'];
    $params['taxonomy'] = App\Consts::TAXONOMY['product'];
    
    $taxonomys = App\Http\Services\ContentService::getCmsTaxonomy($params)->get();
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['product'];
    $rows = App\Http\Services\ContentService::getCmsPost($params)->take(7)->get();
  ?>

  <div class="section custom-bg mt-3 mb-0" style="--custom-bg: #f3f3ed; padding: 100px 0">
    <div class="container">
      

      <div id="shop" class="shop row gutter-30 col-mb-30 mt-3">
        <div class="col-xl-3 col-lg-6">
          <h3 class="mb-4 fw-normal h1">
            <?php echo e($title); ?>

          </h3>
          <p class="op-07 mb-4">
            <?php echo e($brief); ?>

          </p>
          <a href="<?php echo e($url_link); ?>"
            class="button button-border py-1 nott ls0 fw-normal button-dark border-width-1 border-color h-bg-color">
            <?php echo e($url_link_title); ?>

          </a>
        </div>

        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $id = $item->id;
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $price = $item->json_params->price ?? $item->price;
              $image1 = $item->image ?? null;
              $image2 = $item->image_thumb ?? null;
              $date = date('H:i d/m/Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail', $item->taxonomy_title);
            ?>
            <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="grid-inner">
                <div class="product-image">
                  <a href="<?php echo e($alias); ?>"><img src="<?php echo e($image1 ?? $image2); ?>" alt="Light Grey Sofa"/></a>
                  <a href="<?php echo e($alias); ?>"><img src="<?php echo e($image2 ?? $image1); ?>" alt="Light Grey Sofa"/></a>
                  <div class="bg-overlay">
                    <div class="bg-overlay-content align-items-end justify-content-between"
                      data-hover-animate="fadeIn"
                      data-hover-speed="400">
                      <div class="add-to-cart btn btn-light me-2" data-id="<?php echo e($id); ?>">
                        <i class="icon-line-shopping-cart"></i>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="product-desc">
                  <div class="product-title mb-0">
                    <h4 class="mb-0">
                      <a class="fw-medium" href="<?php echo e($alias); ?>">
                        <?php echo e($title); ?>

                      </a>
                    </h4>
                  </div>
                  <h5 class="product-price fw-normal"><?php echo e(number_format($price, 0, ',','.')); ?>đ</h5>
                </div>
              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
      <!-- #shop end -->
    </div>
  </div>

<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\GBD_TEM\furniture\resources\views/frontend/blocks/cms_product/styles/default.blade.php ENDPATH**/ ?>