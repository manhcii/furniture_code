<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : null;
    $background = $block->image_background != '' ? $block->image_background : null;
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['is_featured'] = true;
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_type'] = App\Consts::POST_TYPE['resource'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)
        ->limit(6)
        ->get();
  ?>
    <section class="partner">
        <div class="partner-container">
            <h3>
                <?php echo $title; ?>

            </h3>
        </div>
        <div class="container">
            <div class="swiper project-slide">
                <div class="swiper-wrapper">
                    <?php if($rows): ?>
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                        $title = $item->json_params->title->{$locale} ?? $item->title;
                        $brief = $item->json_params->brief->{$locale} ?? $item->brief??"";
                        $content = $item->json_params->content->{$locale} ?? $item->content??"";
                        $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                        $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_alias ?? $item->taxonomy_title, $item->taxonomy_id);
                        $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->alias ?? $title, $item->id, 'detail', $item->taxonomy_title);
                      ?>
                        <div class="swiper-slide">
                            <a href="<?php echo e($alias); ?>">
                                <div class="project-container">
                                    <img src="<?php echo e($image); ?>" alt="Wheels & Tires" />
                                    <div class="overlay_project">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper-pagination-2"></div>
        </div>
    </section>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/cms_resource/styles/video.blade.php ENDPATH**/ ?>