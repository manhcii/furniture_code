<?php if($paginator->hasPages()): ?>
<div class="pagination-list">
    <ul class="pagination clearfix">

      <?php if($paginator->onFirstPage()): ?>
      <li  aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
        <a >
          <span aria-hidden="true">«</span>
        </a>
      </li>
    <?php else: ?>
      <li>
        <a  href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"
          aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
          <span aria-hidden="true">«</span>
        </a>
      </li>
    <?php endif; ?>

    
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <?php if(is_string($element)): ?>
        <li><a ><?php echo e($element); ?></a></li>
      <?php endif; ?>

      
      <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($page == $paginator->currentPage()): ?>
            <li class="page-item active"><a ><?php echo e($page); ?></a>
            </li>
          <?php else: ?>
            <li><a  href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
            </li>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <?php if($paginator->hasMorePages()): ?>
      <li>
        <a  href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"
          aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
          <span aria-hidden="true">»</span>
        </a>
      </li>
    <?php else: ?>
      <li class="disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
        <a >
          <span aria-hidden="true">»</span>
        </a>
      </li>
    <?php endif; ?>

    </ul>
</div>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/pagination/default.blade.php ENDPATH**/ ?>