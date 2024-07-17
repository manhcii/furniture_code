
<div id="top-bar" class="py-3 text-center bg-color-light">
  <div class="container clearfix">
    <div class="d-md-flex justify-content-md-between align-items-md-center">
      <h4 class="mb-2 mb-md-0 h6 fw-normal">
        Miễn phí giao hàng
        <span class="mx-2 text-black-50">&middot;</span> 30 Ngày đổi trả
      </h4>

      <h4 class="mb-0 h6 fw-normal">
        Hỗ trợ? Liên hệ chúng tôi
        <a class="color" href="tel:+84<?php echo e((int)($web_information->information->phone) ?? ''); ?>"
          ><u class="fw-medium"><?php echo e($web_information->information->phone ?? ''); ?></u></a
        >
        hoặc
        <a class="color" href="mailto:<?php echo e($web_information->information->email ?? ''); ?>"
          ><u class="fw-medium">Email</u></a
        >
      </h4>
    </div>
  </div>
</div>


<header id="header" class="header-size-sm border-bottom-0">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row justify-content-lg-between">
        
        <div id="logo" class="mx-auto col-auto flex-column order-2">
          <a href="<?php echo e(route('frontend.home')); ?>" data-dark-logo="<?php echo e($web_information->image->logo_header ?? ''); ?>"
            class="standard-logo"><img src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="Header Logo" /></a>
          <a href="<?php echo e(route('frontend.home')); ?>" data-dark-logo="<?php echo e($web_information->image->logo_header ?? ''); ?>"
            class="retina-logo"><img src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="Header Logo" /></a>
        </div>
        
        <div class="header-misc col-auto col-lg-3 order-3 justify-content-lg-end ms-0 ms-sm-3 px-0">

          
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--themecolor)" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none"></rect>
                  <circle cx="115.99512" cy="116" r="84" opacity="0.2"></circle>
                  <circle cx="115.99512" cy="116" r="84" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="16">
                  </circle>
                  <line x1="175.38868" y1="175.40039" x2="223.98926" y2="224.00098" fill="none" stroke="var(--themecolor)"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                  </line>
                </svg>
              </i>
            </a>
          </div>
          

          
          <div id="top-cart" class="header-misc-icon">
            <a href="#" class="side-panel-trigger">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--themecolor)" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <path d="M62.54543,144H188.10132a16,16,0,0,0,15.74192-13.13783L216,64H48Z" opacity="0.2"></path>
                <path d="M184,184H69.81818L41.92162,30.56892A8,8,0,0,0,34.05066,24H16" fill="none" stroke="var(--themecolor)"
                  stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                </path>
                <circle cx="80" cy="204" r="20" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16">
                </circle>
                <circle cx="184" cy="204" r="20" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16">
                </circle>
                <path d="M62.54543,144H188.10132a16,16,0,0,0,15.74192-13.13783L216,64H48" fill="none" stroke="var(--themecolor)"
                  stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                </path>
              </svg>
              <span class="top-cart-number">
                <?php echo e(session('cart') ? count(session('cart')) : 0); ?>

              </span>
            </a>
          </div>
          
        </div>

        
        <div id="primary-menu-trigger">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
            <defs>
              <style>
                .a,
                .c {
                  fill: none;
                }
                .b {
                  fill: var(--themecolor);
                  opacity: 0.2;
                }
                .c,
                .d {
                  stroke: var(--themecolor);
                }
                .c {
                  stroke-miterlimit: 10;
                  stroke-width: 14px;
                }
                .d {
                  stroke-linecap: round;
                  stroke-linejoin: round;
                  stroke-width: 13px;
                }
              </style>
            </defs>
            <rect class="a" width="24" height="24" />
            <circle class="b" cx="96" cy="96" r="96" transform="translate(32 32)"/>
            <circle class="c" cx="96" cy="96" r="96" transform="translate(32 32)"/>
            <line class="d" x2="85" transform="translate(86 127)" />
            <line class="d" x2="85" transform="translate(86 97)" />
            <line class="d" x2="85" transform="translate(86 159)" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--themecolor)" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
            <circle cx="128" cy="128" r="96" fill="none" stroke="var(--themecolor)" stroke-miterlimit="10" stroke-width="16"></circle>
            <line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16">
            </line>
            <line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16">
            </line>
          </svg>
        </div>

        
        <nav class="primary-menu with-arrows order-lg-1 order-last px-0">
          <ul class="menu-container">
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
                        $active = $url == url()->full() ? 'current' : '';
                        $sub = $item->sub ? "mega-menu mega-menu-full" : "";
                        $content .= '<li class="menu-item ' . $active . ' '. $sub .'"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a>';
            
                        if ($item->sub > 0) {
                            $content .= '<div class="mega-menu-content border-bottom-0"><div class="container"><div class="row">';
                            foreach ($menu as $item_sub) {
                                $url = $title = '';
                                if ($item_sub->parent_id == $item->id) {
                                    $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                    $url = $item_sub->url_link;
            
                                    $content .= '<ul class="sub-menu-container mega-menu-column col-lg-auto"><li class="menu-item"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a>';
            
                                    if ($item_sub->sub > 0) {
                                        $content .= '<ul class="sub-menu-container mega-menu-dropdown">';
                                        foreach ($menu as $item_sub_2) {
                                            $url = $title = '';
                                            if ($item_sub_2->parent_id == $item_sub->id) {
                                                $title = isset($item_sub_2->json_params->title->{$locale}) && $item_sub_2->json_params->title->{$locale} != '' ? $item_sub_2->json_params->title->{$locale} : $item_sub_2->name;
                                                $url = $item_sub_2->url_link;
            
                                                $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a></li>';
                                            }
                                        }
                                        $content .= '</ul>';
                                    }
                                    $content .= '</li></ul>';
                                }
                            }
                            $content .= '</div></div></div>';
                        }
                        $content .= '</li>';
                    }
                }
                echo $content;
            }
          ?>
            <?php endif; ?>
          </ul>
        </nav>
        <!-- #primary-menu end -->
        <form class="top-search-form" action="<?php echo e(route('frontend.search.index')); ?>" method="get">
          <input type="search" name="keyword" placeholder="<?php echo app('translator')->get('Type and hit enter...'); ?>" value="<?php echo e($params['keyword'] ?? ''); ?>"
            class="form-control" />
        </form>
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>



<?php /**PATH C:\xampp\htdocs\furniture\resources\views/frontend/blocks/header/styles/default.blade.php ENDPATH**/ ?>