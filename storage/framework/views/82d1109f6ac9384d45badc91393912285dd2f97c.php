
<?php $__env->startSection('title'); ?>
  <?php echo e($module_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-header'); ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e($module_name); ?>

      <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route(Request::segment(2) . '.create')); ?>">
        <i class="fa fa-plus"></i>
        <?php echo app('translator')->get('Add'); ?>
      </a>
    </h1>
  </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><?php echo app('translator')->get('Page list'); ?></h3>
      </div>
      <div class="box-body table-responsive">
        <?php if(session('errorMessage')): ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo e(session('errorMessage')); ?>

          </div>
        <?php endif; ?>
        <?php if(session('successMessage')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo e(session('successMessage')); ?>

          </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>
        <?php if(count($rows) == 0): ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo app('translator')->get('No record found'); ?>
          </div>
        <?php else: ?>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th><?php echo app('translator')->get('Name'); ?></th>
                <th><?php echo app('translator')->get('Route Name'); ?></th>
                <th>
                  <?php echo app('translator')->get('Url customize'); ?>
                  <small><i class="fa fa-coffee text-red" aria-hidden="true"></i></small>
                </th>
                <th><?php echo app('translator')->get('Order'); ?></th>
                <th><?php echo app('translator')->get('Updated at'); ?></th>
                <th><?php echo app('translator')->get('Status'); ?></th>
                <th><?php echo app('translator')->get('Action'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $routes = [];
                foreach (App\Consts::ROUTE_NAME as $item) {
                    $routes[$item['name']] = $item['title'];
                
                    $routes['show_route'][$item['name']] = isset($item['show_route']) && $item['show_route'] ? $item['show_route'] : false;
                    $routes['has_alias'][$item['name']] = isset($item['has_alias']) && $item['has_alias'] ? $item['has_alias'] : false;
                }
              ?>
              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route(Request::segment(2) . '.destroy', $row->id)); ?>" method="POST"
                  onsubmit="return confirm('<?php echo app('translator')->get('confirm_action'); ?>')">
                  <tr class="valign-middle">
                    <td>
                      <?php echo e($row->name); ?>

                    </td>
                    <td>
                      <?php echo e(__($routes[$row->route_name] ?? '')); ?>

                    </td>
                    <td>
                      <?php if(isset($routes['show_route'][$row->route_name]) && $routes['show_route'][$row->route_name]): ?>
                        <?php if($routes['has_alias'][$row->route_name]): ?>
                          <a href="<?php echo e(route($row->route_name, ['alias' => $row->alias])); ?>" target="_blank"
                            rel="noopener noreferrer">
                            <span class="btn btn-flat btn-sm btn-info">
                              <i class="fa fa-external-link"></i>
                            </span>
                            <?php echo e(route($row->route_name, ['alias' => $row->alias])); ?>

                          </a>
                        <?php else: ?>
                          <a href="<?php echo e(route($row->route_name)); ?>" target="_blank" rel="noopener noreferrer">
                            <span class="btn btn-flat btn-sm btn-info">
                              <i class="fa fa-external-link"></i>
                            </span>
                            <?php echo e(route($row->route_name) ?? ''); ?>

                          </a>
                        <?php endif; ?>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php echo e($row->iorder); ?>

                    </td>
                    <td>
                      <?php echo e($row->updated_at); ?>

                    </td>
                    <td>
                      <?php echo app('translator')->get($row->status); ?>
                    </td>

                    <td>
                      <a class="btn btn-sm btn-warning" data-toggle="tooltip" title="<?php echo app('translator')->get('Edit'); ?>"
                        data-original-title="<?php echo app('translator')->get('Edit'); ?>"
                        href="<?php echo e(route(Request::segment(2) . '.edit', $row->id)); ?>">
                        <i class="fa fa-pencil-square-o"></i>
                      </a>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="btn btn-sm btn-danger" type="submit" data-toggle="tooltip"
                        title="<?php echo app('translator')->get('Delete'); ?>" data-original-title="<?php echo app('translator')->get('Delete'); ?>">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </form>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fhmagency/domains/fhmagency.vn/public_html/furniture/resources/views/admin/pages/pages/index.blade.php ENDPATH**/ ?>