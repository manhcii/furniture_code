<?php if($block): ?>
    <?php
        $title = $block->json_params->title->{$locale} ?? $block->title;
        $brief = $block->json_params->brief->{$locale} ?? $block->brief;
        $content = $block->json_params->content->{$locale} ?? $block->content;
        $image = $block->image != '' ? $block->image : null;
        $background = $block->image_background != '' ? $block->image_background : null;
        $url_link = $block->url_link != '' ? $block->url_link : '';
        $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
        $block_childs = $blocks->filter(function ($item, $key) use ($block) {
            return $item->parent_id == $block->id;
        });
    ?>
    <section class="global">
        <div class="container">
            <div class="brand-global">
                <div class="swiper project-global">
                    <div class="swiper-wrapper  align-items-center">
                        <?php if($block_childs): ?>
                            <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $image_child = $item->image != '' ? $item->image : null;
                                ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e($image_child); ?>" alt="brand">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="info-brand">
                <div class="row">
                    <div class="col-md-4 info-brand-left">
                        <h3><?php echo e($title); ?></h3>
                    </div>
                    <div class="col-md-8 ">
                        <div class="list-brand ">
                            <ul class="flex-wrap">
                                <li class="active">THIẾT KẾ LOGO - NHẬN DIỆN THƯƠNG HIỆU</li>
                                <li class="">WEBSITE</li>
                                <li class="">DIGITAL</li>
                                <li class="">CONTENTS</li>
                                <li class="">PRODUCT PHOTOGRAPHY
                                </li>
                                <li>+ Nhiều hơn nữa
                                </li>
                            </ul>
                        </div>
                        <div class="form-tuvan">
                            <form action="<?php echo e(route('frontend.contact.store')); ?>" method="post" class="form_ajax">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"name="name" value="Đăng ký mới" />
                                <input type="text" name="email"
                                    placeholder="Nhập số điện thoại hoặc email của bạn">
                                <button class="submit-button">Nhận tư vấn miễn phí <img
                                        src="<?php echo e(asset('themes/frontend/images/form-r.svg')); ?>" alt=""></button>
                                <input type="hidden" name="is_type" value="contact">
                            </form>
                        </div>
                        <div class="contact">
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="contact-p-right">
                                    <p><?php echo e($url_link_title); ?></p>
                                </div>
                                <div class="phone-contact">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('themes/frontend/watches/images/phone_contact.svg')); ?>"
                                            alt="">
                                        <h3><?php echo e($web_information->information->phone ?? ''); ?></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/form/styles/booking.blade.php ENDPATH**/ ?>