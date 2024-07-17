

<?php
  $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
  $image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
?>
<?php $__env->startPush('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/about.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/service.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/customer.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/hiring.css')); ?>" />

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
  
  <?php if(isset($page->content) && $page->content != ''): ?>
    <div class="section bg-white m-0" id="content-detail">
      <div class="container">
        <?php echo $page->content ?? ''; ?>

      </div>
    </div>
  <?php endif; ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/pages/custom/index.blade.php ENDPATH**/ ?>