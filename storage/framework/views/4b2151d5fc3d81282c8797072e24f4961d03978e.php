

<?php
  $page_title = $taxonomy->title ?? ($page->title ?? $page->name);
  $image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
  
  $title = $taxonomy->json_params->title->{$locale} ?? ($taxonomy->title ?? null);
  $image = $taxonomy->json_params->image ?? null;
  $seo_title = $taxonomy->json_params->seo_title ?? $title;
  $seo_keyword = $taxonomy->json_params->seo_keyword ?? null;
  $seo_description = $taxonomy->json_params->seo_description ?? null;
  $seo_image = $image ?? null;
?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/about.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/service.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/project.css')); ?>" />
  <style>
    
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div id="fhm-project">
  <section class="banner">
    <h2><?php echo e($page_title); ?></h2>
    <p><?php echo $taxonomy->json_params->brief->{$locale} ??""; ?></p>
  </section>
  <!-- END BANNER-->
  
  <!-- START PROJECTS -->
  <section class="projects">
    <div class="container">
        <div class="row projects-row">
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
            $date = date('H:i d/m/Y', strtotime($item->created_at));
            // Viet ham xu ly lay alias bai viet
            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_alias ?? $item->taxonomy_title, $item->taxonomy_id);
            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->alias ?? $title, $item->id, 'detail', $item->taxonomy_title);
          ?>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="project-item">
                    <div class="project-img">
                        <img src="<?php echo e($image); ?>" alt="projects">
                    </div>
                    <h3><?php echo e($title); ?></h3>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>

        
    </div>
  </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/pages/resource/category.blade.php ENDPATH**/ ?>