

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

<?php $__env->startSection('content'); ?>
  
  <section id="page-title" style="background-image: url('<?php echo e($image_background); ?>'); background-size: cover;"
    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>
    <div class="container clearfix">
      <h1 class="text-center"><?php echo e($title); ?></h1>
    </div>
  </section>

  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
          <div class="postcontent col-lg-9 order-lg-last">
            <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $title = $item->json_params->title->{$locale} ?? $item->title;
                  $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                  $price = $item->json_params->price ?? null;
                  $price_old = $item->json_params->price_old ?? null;
                  $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                  // $date = date('H:i d/m/Y', strtotime($item->created_at));
                  $date = date('d', strtotime($item->created_at));
                  $month = date('M', strtotime($item->created_at));
                  $year = date('Y', strtotime($item->created_at));
                  // Viet ham xu ly lay slug
                  $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_alias ?? $item->taxonomy_title, $item->taxonomy_id);
                  $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->alias ?? $title, $item->id, 'detail', $item->taxonomy_title);
                ?>

                <div class="product col-md-4 col-sm-6 sf-dress">
                  <div class="grid-inner">
                    <div class="product-image">
                      <a href="<?php echo e($alias); ?>">
                        <img src="<?php echo e($image); ?>" alt="YELLOW DRESS"/>
                      </a>
                      
                      <div class="bg-overlay">
                        <div class="bg-overlay-content align-items-end justify-content-between"
                          data-hover-animate="fadeIn"
                          data-hover-speed="400">
                          <a href="<?php echo e($alias); ?>" class="btn me-2"
                            ><i class="icon-shopping-cart"></i
                          ></a>
                          <!-- <a
                            href="include/ajax/shop-item.html"
                            class="btn"
                            data-lightbox="ajax"
                            ><i class="icon-line-expand"></i
                          ></a> -->
                        </div>
                        <div class="bg-overlay-bg bg-transparent"></div>
                      </div>
                    </div>
                    <div class="product-desc">
                      <div class="product-title">
                        <h3><a href="<?php echo e($alias); ?>"><?php echo e($title); ?></a></h3>
                      </div>
                      <div class="product-price">
                        <del><?php echo e($price_old ? $price_old.'đ' : ''); ?></del> <ins><?php echo e(number_format($price, 0,',','.')); ?>đ</ins>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>


            </div>
          </div>

          

          <div class="sidebar col-lg-3">
            <div class="sidebar-widgets-wrap">
              <div class="widget widget-filter-links">
                <h4>Select Category</h4>
                <ul
                  class="custom-filter ps-2"
                  data-container="#shop"
                  data-active-class="active-filter"
                >
                  <li class="widget-filter-reset active-filter">
                    <a href="#" data-filter="*">Clear</a>
                  </li>
                  <li><a href="#" data-filter=".sf-dress">Dress</a></li>
                </ul>
              </div>

              <div class="widget widget-filter-links">
                <h4>Sort By</h4>
                <ul class="shop-sorting ps-2">
                  <li class="widget-filter-reset active-filter">
                    <a href="#" data-sort-by="original-order">Clear</a>
                  </li>
                  <li><a href="#" data-sort-by="name">Name</a></li>
                  <li>
                    <a href="#" data-sort-by="price_lh"
                      >Price: Low to High</a
                    >
                  </li>
                  <li>
                    <a href="#" data-sort-by="price_hl"
                      >Price: High to Low</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- .sidebar end -->
        </div>
      </div>
    </div>
  </section>

  
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
  jQuery(document).ready(function ($) {
    $(window).on("pluginIsotopeReady", function () {
      $("#shop").isotope({
        transitionDuration: "0.65s",
        getSortData: {
          name: ".product-title",
          price_lh: function (itemElem) {
            if ($(itemElem).find(".product-price").find("ins").length > 0) {
              var price = $(itemElem).find(".product-price ins").text();
            } else {
              var price = $(itemElem).find(".product-price").text();
            }

            priceNum = price.split("$");

            return parseFloat(priceNum[1]);
          },
          price_hl: function (itemElem) {
            if ($(itemElem).find(".product-price").find("ins").length > 0) {
              var price = $(itemElem).find(".product-price ins").text();
            } else {
              var price = $(itemElem).find(".product-price").text();
            }

            priceNum = price.split("$");

            return parseFloat(priceNum[1]);
          },
        },
        sortAscending: {
          name: true,
          price_lh: true,
          price_hl: false,
        },
      });

      $(".custom-filter:not(.no-count)")
        .children("li:not(.widget-filter-reset)")
        .each(function () {
          var element = $(this),
            elementFilter = element.children("a").attr("data-filter"),
            elementFilterContainer = element
              .parents(".custom-filter")
              .attr("data-container");

          elementFilterCount = Number(
            jQuery(elementFilterContainer).find(elementFilter).length
          );

          element.append("<span>" + elementFilterCount + "</span>");
        });

      $(".shop-sorting li").click(function () {
        $(".shop-sorting").find("li").removeClass("active-filter");
        $(this).addClass("active-filter");
        var sortByValue = $(this).find("a").attr("data-sort-by");
        $("#shop").isotope({ sortBy: sortByValue });
        return false;
      });
    });
  });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/frontend/pages/product/category.blade.php ENDPATH**/ ?>