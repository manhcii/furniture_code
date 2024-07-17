<header class="header">
  <div class="header-topbar">
      <div class="container">
          <div class="header-topbar-content row">
              <div class="col-lg-4">
                  <div class="header-info">
                      <div class="header-info-item">
                          <div class="header-info-icon">
                              <img src="<?php echo e(asset('themes/frontend/watches/images/topbar-phone.svg')); ?>" alt="Phone" title="Phone" />
                          </div>
                          <a href="tel:<?php echo e($web_information->information->phone ?? ''); ?>" title="Phone"><?php echo e($web_information->information->phone ?? ''); ?></a>
                      </div>
                      <div class="header-info-item">
                          <div class="header-info-icon">
                              <img src="<?php echo e(asset('themes/frontend/watches/images/topbar-mail.svg')); ?>" alt="Mail" title="Mail" />
                          </div>
                          <a href="mailto:<?php echo e($web_information->information->email ?? ''); ?>" title="Mail"><?php echo e($web_information->information->email ?? ''); ?></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                  <div class="header-info header-info-last">
                      <div class="header-info-item">
                          <div class="header-info-icon">
                              <a href="<?php echo e($web_information->social->tiktok ?? 'https://www.tiktok.com/'); ?>"><img src="<?php echo e(asset('themes/frontend/watches/images/titok.svg')); ?>" alt="Track Your Order" title="Track Your Order" /></a>
                          </div>
                          <div class="header-info-icon">
                            <a href="<?php echo e($web_information->social->telegram ?? 'https://web.telegram.org/'); ?>"><img src="<?php echo e(asset('themes/frontend/watches/images/tele.svg')); ?>" alt="Track Your Order" title="Track Your Order" /></a>
                          </div>
                          <div class="header-info-icon">
                            <a href="<?php echo e($web_information->social->facebook ?? 'https://facebook.com/'); ?>"><img src="<?php echo e(asset('themes/frontend/watches/images/face.svg')); ?>" alt="Track Your Order" title="Track Your Order" /></a>
                          </div>
                          <div class="header-info-icon">
                            <a href="<?php echo e($web_information->social->twitter ?? 'https://twitter.com/'); ?>"><img src="<?php echo e(asset('themes/frontend/watches/images/twitter.svg')); ?>" alt="Track Your Order" title="Track Your Order" /></a>
                          </div>
                          <div class="header-info-icon">
                            <a href="<?php echo e($web_information->social->instagram ?? 'https://www.instagram.com/'); ?>"><img src="<?php echo e(asset('themes/frontend/watches/images/insta.svg')); ?>" alt="Track Your Order" title="Track Your Order" /></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="header-main">
      <div class="container header-container">
          <a href="<?php echo e(route('frontend.home')); ?>" title="Vehicles Meta" class="header-logo">
              <img src="<?php echo e($web_information->image->logo_header ?? asset('themes/frontend/watches/images/header-logo.svg')); ?>" alt="Vehicles Meta" title="Vehicles Meta" />
          </a>
          <div class="header-content navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggler">
                  <div class="navbar-nav">
                      <nav class="header-nav">
                          <ul>
                            <?php if(isset($menu)): ?>
                                <?php
                                    $main_menu = $menu->first(function ($item, $key) {
                                        return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
                                    });
                                    if ($main_menu) {
                                        $content = '';
                                        foreach ($menu as $item) {
                                            $url = $title = '';
                                            if ($item->parent_id == $main_menu->id) {
                                                $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                                                $url = $item->url_link;
                                                $active = ($url == url()->full() || $url=='/')? ' active' : '';
                                    
                                                $content .= '<li class="nav-item' . $active . '"><a class="nav-link" href="' . $url . '">' . $title . '</a>';
                                                // if ($item->sub > 0) {
                                                //     $content .= '<ul class="item_small">';
                                                //     foreach ($menu as $item_sub) {
                                                //         $url = $title = '';
                                                //         if ($item_sub->parent_id == $item->id) {
                                                //             $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                                //             $url = $item_sub->url_link;
                                    
                                                //             $content .= '<li><a href="' . $url . '"><div>' . $title . '</div></a>';
                                    
                                                //             $content .= '</li>';
                                                //         }
                                                //     }
                                                //     $content .= '</ul>';
                                                // }
                                                $content .= '</li>';
                                            }
                                        }
                                        echo $content;
                                    }
                                ?>
                                <?php endif; ?>
                              <li>
                                <form action="<?php echo e(route('frontend.search.index')); ?>" method="get" >
                                    <div class="search-container">
                                        <input type="text" aria-label="Tìm sản phẩm" name="keyword"  value="<?php echo e($params['keyword'] ?? ''); ?>"autocomplete="off"required="">
                                            <img src="<?php echo e(asset('themes/frontend/watches/images/search_header.svg')); ?>" alt="car" title="car">
                                    </div>
                                </form>
                                  
                              </li>
                          </ul>

                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header><?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/blocks/header/styles/default.blade.php ENDPATH**/ ?>