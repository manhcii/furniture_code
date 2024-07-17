<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
  ?>
<section class="bestSeller">
  <div class="container">
      <div class="title-shape">
          <img src="<?php echo e(asset('themes/frontend/watches/images/gbd-burst.svg')); ?>" alt="">
      </div>
      <div class="bestSeller-products ">

      </div>
  </div>
</section>
<!-- END BEST SELLER-->

<!-- START DIMENSIONS -->
<section class="dimensions">
  <div class="container container-fix ">
      <div class="text-center">
          <h3 class="dimensions-title"><?php echo e($title); ?></h3>
          <p class="dimensions-des"><?php echo e($brief); ?></p>
      </div>
      
      <div class="burst-collection">
        <div class="center-img">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-05.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="center-img">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-05.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- hàng đầu bên trái -->
        <div class="thing-item" data-0="left:-50%;top:20%;" data-700="left:25%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-03.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:30%;" data-800="left:15%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-02.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:40%;" data-900="left:7%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-01.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- /hàng 2 bên trái -->
        <div class="thing-item" data-0="left:-50%;top:30%;" data-1000="left:25%;top:20%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-09.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:40%;" data-1100="left:20%;top:20%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-08.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:50%;" data-1200="left:8%;top:20%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-06.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:50%;" data-1300="left:0%;top:25%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-07.png')); ?>" alt="burst-collection.png">
        </div>
        
        <!-- /hàng 3 bên trái -->
        <div class="thing-item" data-0="left:-50%;top:40%;" data-1300="left:34%;top:47%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-28.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:50%;" data-1400="left:20%;top:50%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-15.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:60%;" data-1500="left:5%;top:52%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-19.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- /hàng 4 bên trái -->
        <div class="thing-item" data-0="left:-50%;top:50%;" data-1600="left:22%;top:75%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-13.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:60%;" data-1700="left:15%;top:75%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-18.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="left:-50%;top:70%;" data-1700="left:7%;top:75%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-17.png')); ?>" alt="burst-collection.png">
        </div>




        <!-- hàng đầu bên phải -->
        <div class="thing-item" data-0="right:-50%;top:20%;" data-700="right:35%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-23.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:30%;" data-800="right:25%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-10.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:40%;" data-900="right:20%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-11.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:40%;" data-1000="right:15%;top:0%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-12.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:40%;" data-1050="right:7%;top:14%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-30.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- /hàng 2 bên phải -->
        <div class="thing-item" data-0="right:-50%;top:30%;" data-1000="right:25%;top:25%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-24.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:40%;" data-1100="right:18%;top:25%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-22.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:50%;" data-1200="right:8%;top:32%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-29.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:50%;" data-1200="right:6%;top:27%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-31.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- /hàng 3 bên phải -->
        <div class="thing-item" data-0="right:-50%;top:40%;" data-1300="right:25%;top:50%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-14.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:50%;" data-1400="right:12%;top:60%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-32.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:60%;" data-1500="right:6%;top:50%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-26.png')); ?>" alt="burst-collection.png">
        </div>
        <!-- /hàng 4 bên phải -->
        <div class="thing-item" data-0="right:-50%;top:50%;" data-1600="right:22%;top:77%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-27.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:60%;" data-1700="right:15%;top:80%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-20.png')); ?>" alt="burst-collection.png">
        </div>
        <div class="thing-item" data-0="right:-50%;top:70%;" data-1700="right:7%;top:77%;">
            <img style="width: auto;" src="<?php echo e(asset('themes/frontend/watches/images/ss2/Untitled-1-21.png')); ?>" alt="burst-collection.png">
        </div>


    </div>
  </div>
</section>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/custom/styles/about_us.blade.php ENDPATH**/ ?>