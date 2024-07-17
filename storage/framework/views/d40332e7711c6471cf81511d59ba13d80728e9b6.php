<footer class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-element footer-element-info">
                <div class="footer-home">
                    <img src="<?php echo e($web_information->image->logo_footer ?? asset('themes/frontend/watches/images/footer_home.svg')); ?>"
                        alt="">
                </div>
                <ul>
                    <li>
                        <p><i class="fa fa-map-marker"></i><?php echo e($web_information->information->address ?? ''); ?></p>
                    </li>
                    <li>
                        <div class="header-info header-info-last header-info-last">
                            <div class="header-info-item header-info-item-footer">
                                <div class="header-info-icon">
                                    <img src="<?php echo e(asset('themes/frontend/watches/images/titok.svg')); ?>"
                                        alt="Track Your Order" title="Track Your Order" />
                                </div>
                                <div class="header-info-icon">
                                    <img src="<?php echo e(asset('themes/frontend/watches/images/tele.svg')); ?>"
                                        alt="Track Your Order" title="Track Your Order" />
                                </div>
                                <div class="header-info-icon">
                                    <img src="<?php echo e(asset('themes/frontend/watches/images/face.svg')); ?>"
                                        alt="Track Your Order" title="Track Your Order" />
                                </div>
                                <div class="header-info-icon">
                                    <img src="<?php echo e(asset('themes/frontend/watches/images/twitter.svg')); ?>"
                                        alt="Track Your Order" title="Track Your Order" />
                                </div>
                                <div class="header-info-icon">
                                    <img src="<?php echo e(asset('themes/frontend/watches/images/insta.svg')); ?>"
                                        alt="Track Your Order" title="Track Your Order" />
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <?php if(isset($menu)): ?>
                <?php
                    $footer_menu = $menu->filter(function ($item, $key) {
                        return $item->menu_type == 'footer' && ($item->parent_id == null || $item->parent_id == 0);
                    });

                    $content = '';
                    foreach ($footer_menu as $main_menu) {
                        $url = $title = '';
                        $title =
                            isset($main_menu->json_params->title->{$locale}) &&
                            $main_menu->json_params->title->{$locale} != ''
                                ? $main_menu->json_params->title->{$locale}
                                : $main_menu->name;
                        $content .= '<div class="footer-element">';
                        $content .= '<h5>' . $title . '</h5>';
                        $content .= '<ul class="footer-grid">';
                        foreach ($menu as $item) {
                            if ($item->parent_id == $main_menu->id) {
                                $title =
                                    isset($item->json_params->title->{$locale}) &&
                                    $item->json_params->title->{$locale} != ''
                                        ? $item->json_params->title->{$locale}
                                        : $item->name;
                                $url = $item->url_link;

                                $active = $url == url()->current() ? 'active' : '';

                                $content .= '<li><a href="' . $url . '">' . $title . '</a>';
                                $content .= '</li>';
                            }
                        }
                        $content .= '</ul>';
                        $content .= '</div>';
                    }
                    echo $content;
                ?>
            <?php endif; ?>

            <div class="footer-element footer-element-center">
                <h5>Liên hệ</h5>
                <div class="footer-social">
                    <div class="d-flex align-items-center">
                        <div class="foot-hotline">
                            <img src="<?php echo e(asset('themes/frontend/watches/images/hotline_footer.svg')); ?>" alt="">
                        </div>
                        <div class="foot-detail-hotline">
                            <p>Phone</p>
                            <span><?php echo e($web_information->information->phone ?? ''); ?></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-20">
                        <div class="foot-hotline">
                            <img class="object-fit-contain"
                                src="<?php echo e(asset('themes/frontend/watches/images/mail_footer.svg')); ?>" alt="">
                        </div>
                        <div class="foot-detail-hotline">
                            <p>Hotline</p>
                            <span><?php echo e($web_information->information->hotline ?? ''); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-element">
                <iframe src="<?php echo e($web_information->source_code->map??"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0349105566534!2d105.783171!3d21.0312891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab92b21e3beb%3A0x4c9549d1df6c5d0b!2zNzggUC4gRHV5IFTDom4sIEThu4tjaCBW4buNbmcgSOG6rXUsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1719131906051!5m2!1svi!2s"); ?>" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/footer/styles/default.blade.php ENDPATH**/ ?>