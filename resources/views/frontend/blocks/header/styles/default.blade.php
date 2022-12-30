{{--Cart Panel Background--}}
<div class="body-overlay"></div>

{{--Cart Side Panel--}}
<div id="side-panel" class="bg-white">
  {{-- Cart Side Panel Close Icon --}}
  <div id="side-panel-trigger-close" class="side-panel-trigger">
    <a href="#"><i class="icon-line-cross"></i></a>
  </div>

  <div class="side-panel-wrap">
    <div class="top-cart d-flex flex-column h-100">
      <div class="top-cart-title">
        <h4>
          Shopping Cart
          <small class="bg-color-light icon-stacked text-center rounded-circle color">2</small>
        </h4>
      </div>

      <!-- Cart Items
    ============================================= -->
      <div class="top-cart-items">
        <!-- Cart Item 1
      ============================================= -->
        <div class="top-cart-item">
          <div class="top-cart-item-image border-0">
            <a href="#"><img src="demos/furniture/images/cart/1.jpg" alt="Cart Image 1"/></a>
          </div>
          <div class="top-cart-item-desc">
            <div class="top-cart-item-desc-title">
              <a href="#" class="fw-medium">Blue Sofa for Dining Room</a>
              <span class="top-cart-item-price d-block"
                ><del>$29.99</del> $19.99</span
              >
              <div class="d-flex mt-2">
                <a href="#" class="fw-normal text-black-50 text-smaller"><u>Edit</u></a>
                <a href="#" class="fw-normal text-black-50 text-smaller ms-3"><u>Remove</u></a>
              </div>
            </div>
            <div class="top-cart-item-quantity">x 1</div>
          </div>
        </div>

        <!-- Cart Item 2
      ============================================= -->
        <div class="top-cart-item">
          <div class="top-cart-item-image border-0">
            <a href="#"><img src="demos/furniture/images/cart/2.jpg" alt="Cart Image 2"/></a>
          </div>
          <div class="top-cart-item-desc">
            <div class="top-cart-item-desc-title">
              <a href="#" class="fw-medium">Ceilling Light for Office</a>
              <span class="top-cart-item-price d-block">$24.99</span>
              <div class="d-flex mt-2">
                <a href="#" class="fw-normal text-black-50 text-smaller"><u>Edit</u></a>
                <a href="#" class="fw-normal text-black-50 text-smaller ms-3"><u>Remove</u></a>
              </div>
            </div>
            <div class="top-cart-item-quantity">x 2</div>
          </div>
        </div>
      </div>

      <!-- Cart Saved Text
    ============================================= -->
      <div
        class="py-2 px-3 mt-auto text-black-50 text-smaller bg-color-light"
      >
        <span
          ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--themecolor)" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <path
              d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
              opacity="0.2"
            ></path>
            <path
              d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
              fill="none"
              stroke="var(--themecolor)"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="16"
            ></path>
            <polyline
              points="172 104 113.333 160 84 132"
              fill="none"
              stroke="var(--themecolor)"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="16"
            ></polyline>
          </svg>
          You save $10.00 on this order.</span
        >
      </div>

      <!-- Cart Price and Button
    ============================================= -->
      <div class="top-cart-action flex-column align-items-stretch">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <small class="text-uppercase ls1">Total</small>
          <h4 class="fw-medium font-body mb-0">$69.97</h4>
        </div>
        <a href="#" class="button btn-block text-center m-0 fw-normal">
          <i style="position: relative; top: -2px">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#FFF" viewBox="0 0 256 256">
              <rect width="256" height="256" fill="none"></rect>
              <path d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z" opacity="0.2"></path>
              <path
                d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64v0A16,16,0,0,1,56,48H192"
                fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="10">
              </path>
              <circle cx="180" cy="144" r="12"></circle>
            </svg>
          </i>
          Checkout
        </a>
      </div>
    </div>
  </div>
</div>

{{--Document Wrapper--}}

<div id="wrapper" class="clearfix">
  {{--Top Bar--}}

  <div id="top-bar" class="py-3 text-center bg-color-light">
    <div class="container clearfix">
      <div class="d-md-flex justify-content-md-between align-items-md-center">
        <h4 class="mb-2 mb-md-0 h6 fw-normal">
          Miễn phí giao hàng
          <span class="mx-2 text-black-50">&middot;</span> 30 Ngày đổi trả
        </h4>

        <h4 class="mb-0 h6 fw-normal">
          Hỗ trợ? Liên hệ chúng tôi
          <a class="color" href="tel:+84{{ (int)($web_information->information->phone) ?? '' }}"
            ><u class="fw-medium">{{ $web_information->information->phone ?? '' }}</u></a
          >
          hoặc
          <a class="color" href="mailto:{{ $web_information->information->email ?? '' }}"
            ><u class="fw-medium">Email</u></a
          >
        </h4>
      </div>
    </div>
  </div>

  {{--top-bar end--}}
</div>

{{--Header --}}
<header id="header" class="header-size-sm border-bottom-0">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row justify-content-lg-between">
        {{-- Logo --}}
        <div id="logo" class="mx-auto col-auto flex-column order-2">
          <a href="{{ route('frontend.home') }}" data-dark-logo="{{ $web_information->image->logo_header ?? '' }}"
            class="standard-logo"><img src="{{ $web_information->image->logo_header ?? '' }}" alt="Header Logo" /></a>
          <a href="{{ route('frontend.home') }}" data-dark-logo="{{ $web_information->image->logo_header ?? '' }}"
            class="retina-logo"><img src="{{ $web_information->image->logo_header ?? '' }}" alt="Header Logo" /></a>
        </div>
        {{-- logo end --}}
        <div class="header-misc col-auto col-lg-3 order-3 justify-content-lg-end ms-0 ms-sm-3 px-0">

          {{-- Top Search --}}
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--themecolor)"
                  viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect>
                  <circle cx="115.99512" cy="116" r="84" opacity="0.2"></circle>
                  <circle cx="115.99512" cy="116" r="84" fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="16">
                  </circle>
                  <line
                    x1="175.38868"
                    y1="175.40039"
                    x2="223.98926"
                    y2="224.00098"
                    fill="none"
                    stroke="var(--themecolor)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="16"
                  ></line></svg></i><i><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="var(--themecolor)"
                  viewBox="0 0 256 256"
                >
                  <rect width="256" height="256" fill="none"></rect>
                  <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
                  <circle
                    cx="128"
                    cy="128"
                    r="96"
                    fill="none"
                    stroke="var(--themecolor)"
                    stroke-miterlimit="10"
                    stroke-width="16"
                  ></circle>
                  <line
                    x1="160"
                    y1="96"
                    x2="96"
                    y2="160"
                    fill="none"
                    stroke="var(--themecolor)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="16"
                  ></line>
                  <line
                    x1="160"
                    y1="160"
                    x2="96"
                    y2="96"
                    fill="none"
                    stroke="var(--themecolor)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="16"
                  ></line></svg></i>
            </a>
          </div>
          {{-- top-search end --}}

          {{-- Top Cart --}}
          <div id="top-cart" class="header-misc-icon">
            <a href="#" class="side-panel-trigger">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="var(--themecolor)"
                viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <path
                  d="M62.54543,144H188.10132a16,16,0,0,0,15.74192-13.13783L216,64H48Z"
                  opacity="0.2"
                ></path>
                <path
                  d="M184,184H69.81818L41.92162,30.56892A8,8,0,0,0,34.05066,24H16"
                  fill="none"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></path>
                <circle
                  cx="80"
                  cy="204"
                  r="20"
                  fill="none"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></circle>
                <circle
                  cx="184"
                  cy="204"
                  r="20"
                  fill="none"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></circle>
                <path
                  d="M62.54543,144H188.10132a16,16,0,0,0,15.74192-13.13783L216,64H48"
                  fill="none"
                  stroke="var(--themecolor)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16">
                </path>
              </svg><span class="top-cart-number">3</span>
            </a>
          </div>
          {{-- top-cart end --}}
        </div>

        {{-- Mobile Menu Icon --}}
        <div id="primary-menu-trigger">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 256 256"
          >
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
            <circle
              class="b"
              cx="96"
              cy="96"
              r="96"
              transform="translate(32 32)"
            />
            <circle
              class="c"
              cx="96"
              cy="96"
              r="96"
              transform="translate(32 32)"
            />
            <line class="d" x2="85" transform="translate(86 127)" />
            <line class="d" x2="85" transform="translate(86 97)" />
            <line class="d" x2="85" transform="translate(86 159)" />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="var(--themecolor)"
            viewBox="0 0 256 256"
          >
            <rect width="256" height="256" fill="none"></rect>
            <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
            <circle
              cx="128"
              cy="128"
              r="96"
              fill="none"
              stroke="var(--themecolor)"
              stroke-miterlimit="10"
              stroke-width="16"
            ></circle>
            <line
              x1="160"
              y1="96"
              x2="96"
              y2="160"
              fill="none"
              stroke="var(--themecolor)"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="16"
            ></line>
            <line
              x1="160"
              y1="160"
              x2="96"
              y2="96"
              fill="none"
              stroke="var(--themecolor)"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="16"
            ></line>
          </svg>
        </div>

        {{-- Primary Navigation --}}
        <nav class="primary-menu with-arrows order-lg-1 order-last px-0">
          <ul class="menu-container">
            @isset($menu)
            @php
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
          @endphp
            @endisset
          </ul>
        </nav>
        <!-- #primary-menu end -->
        <form class="top-search-form" action="{{ route('frontend.search.index') }}" method="get">
          <input type="search" name="keyword" placeholder="@lang('Type and hit enter...')" value="{{ $params['keyword'] ?? '' }}"
            class="form-control" />
        </form>
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>
<!-- #header end -->


