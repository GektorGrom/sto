<?php echo $header; ?>

  <!-- ---------------------- -->
  <!--     I N T R O          -->
  <!-- ---------------------- -->
  <div id="intro">
    <?php if(!empty($tbData->introHTML)): ?>
    <?php echo $tbData->introHTML; ?>
    <?php else: ?>
    <div id="intro_wrap">
      <div class="s_wrap">
        <div id="breadcrumbs" class="s_col_12">
          <?php foreach ($breadcrumbs as $breadcrumb): ?>
          <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
          <?php endforeach; ?>
        </div>
        <h1><?php echo $heading_title; ?></h1>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <!-- end of intro -->

  <!-- ---------------------- -->
  <!--      C O N T E N T     -->
  <!-- ---------------------- -->
  <div id="content" class="s_wrap">

    <?php if ($tbData->common['column_position'] == "left" && $column_right): ?>
    <div id="left_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

    <div id="category" class="s_main_col">

      <?php echo $content_top; ?>

      <?php if ($thumb): ?>
      <img class="s_category_thumb" src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" />
      <?php endif; ?>
      <?php if ($description) echo $description; ?>

      <?php if (!$tbData->subcategories && !$products): ?>
      <p class="align_center s_f_16 s_p_20_0"><?php echo $text_empty; ?></p>
      <?php endif; ?>

      <?php if ($tbData->subcategories): ?>
      <div class="s_subcategories s_grid_view s_listing">
        <?php if ($tbData->common['subcategories_style'] == 'list'): ?>
        <ul class="s_list_1 clearfix">
          <?php foreach ($tbData->subcategories as $category): ?>
          <li><a href="<?php echo $category['url']; ?>"><?php echo $category['name']; ?><?php if ($tbData->common['subcategories_count_enabled']): ?> (<?php echo $category['products_count']; ?>)<?php endif; ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if ($tbData->common['subcategories_style'] == 'thumbs'): ?>
        <div class="clearfix">
          <?php foreach ($tbData->subcategories as $category): ?>
          <div class="s_subcategory">
            <a href="<?php echo $category['url']; ?>">
              <img src="<?php echo $category['thumb']; ?>" alt="<?php echo $category['name']; ?>" />
            </a>
            <a href="<?php echo $category['url']; ?>"><?php echo $category['name']; ?><?php if ($tbData->common['subcategories_count_enabled']): ?> (<?php echo $category['products_count']; ?>)<?php endif; ?></a>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <?php $products = $tbSlot->filter('product\category.filter_products', $products, array('data' => $this->data)); ?>
      <?php $tbSlot->start('product\category.products_listing', array('products' => $products, 'data' => $this->data)); ?>
      <?php if ($products): ?>

      <div id="listing_options">
        <div id="listing_arrange">
          <span class="s_label"><?php echo $text_sort; ?></span>
          <div id="listing_sort" class="s_switcher">
            <?php foreach ($sorts as $sortss): ?>
              <?php if (($sort . '-' . $order) == $sortss['value']): ?>
                <span class="s_selected"><?php echo $sortss['text']; ?></span>
              <?php endif; ?>
            <?php endforeach; ?>
            <ul class="s_options" style="display: none;">
            <?php foreach ($sorts as $sortss): ?>
              <?php if (($sort . '-' . $order) != $sortss['value']): ?>
                <li><a href="<?php echo $sortss['href']; ?>"><?php echo $sortss['text']; ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
            </ul>
          </div>
          <span class="s_label"><?php echo $text_limit; ?></span>
          <div id="items_per_page" class="s_switcher">
            <?php foreach ($limits as $limitss): ?>
              <?php if ($limit == $limitss['value']): ?>
                <span class="s_selected"><?php echo $limitss['text']; ?></span>
              <?php endif; ?>
            <?php endforeach; ?>
            <ul class="s_options" style="display: none;">
            <?php foreach ($limits as $limitss): ?>
              <?php if ($limit != $limitss['value']): ?>
                <li><a href="<?php echo $limitss['href']; ?>"><?php echo $limitss['text']; ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div id="view_mode" class="s_nav">
          <ul class="clearfix">
            <li id="view_grid"<?php if($tbData->product_listing_type == 'grid') echo ' class="s_selected"';?>>
              <a href="<?php echo $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&setListingType=grid'); ?>" rel="nofollow">
                <span class="s_icon"></span><?php echo $tbData->text_grid; ?>
              </a>
            </li>
            <li id="view_list"<?php if($tbData->product_listing_type == 'list') echo ' class="s_selected"';?>>
              <a href="<?php echo $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&setListingType=list'); ?>" rel="nofollow">
                <span class="s_icon"></span><?php echo $tbData->text_list; ?>
              </a>
            </li>
          </ul>
        </div>
        <?php if ($tbData->common['compare_enabled']): ?>
        <div>
          <a href="<?php echo $compare; ?>" id="compare_total" class="s_main_color"><?php echo $text_compare; ?></a>
        </div>
        <?php endif; ?>
      </div>

      <div class="clear"></div>

      <div class="s_listing <?php if ($tbData->product_listing_type == 'list'): ?>s_list_view<?php  else: ?>s_grid_view<?php endif; ?> <?php echo $tbData->common['products_per_row']; ?> clearfix">
        <?php foreach ($products as $product): ?>
        <?php $tbSlot->start('product\category.products.each', array('products' => $products, 'product' => $product, 'data' => $this->data)); ?>
        <div class="s_item product_<?php echo $product['product_id']; ?>">
          <a class="s_thumb" href="<?php echo $product['href']; ?>">
            <img src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" />
          </a>
          <div class="s_item_info">
            <h3><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
            <?php if ($product['price']): ?>
            <div class="s_price_holder s_size_<?php echo $tbData->common['price_size']; ?> <?php echo 's_' . $tbData->common['price_design']; ?>">
              <?php if (!$product['special']): ?>
              <p class="s_price"><?php echo $tbData->priceFormat($product['price']); ?></p>
              <?php else: ?>
              <p class="s_price s_promo_price"><span class="s_old_price"><?php echo $tbData->priceFormat($product['price']); ?></span><?php echo $tbData->priceFormat($product['special']); ?></p>
              <?php endif ?>
            </div>
            <?php endif; ?>
            <p class="s_description"><?php echo utf8_substr($product['description'], 0, 250); ?>...</p>
            <?php if ($product['rating']): ?>
            <p class="s_rating s_rating_5">
              <span style="width: <?php echo $product['rating'] * 2 ; ?>0%;" class="s_percent"></span>
            </p>
            <?php endif; ?>
            <?php if ($tbData->common['checkout_enabled'] || $tbData->common['wishlist_enabled'] || $tbData->common['compare_enabled']): ?>
            <div class="s_actions">
              <?php if ($product['price']): ?>
              <?php if ($tbData->common['checkout_enabled']): ?>
              <a class="s_button_add_to_cart" href="javascript:;" onclick="addToCart('<?php echo $product['product_id']; ?>');">
                <span class="s_icon_16"><span class="s_icon"></span><?php echo $button_cart; ?></span>
              </a>
              <?php endif; ?>
              <?php endif; ?>
              <?php if ($tbData->common['wishlist_enabled']): ?>
              <a class="s_button_wishlist s_icon_10" onclick="addToWishList('<?php echo $product['product_id']; ?>');"><span class="s_icon s_add_10"></span><?php echo $tbData->text_wishlist; ?></a>
              <?php endif; ?>
              <?php if ($tbData->common['compare_enabled']): ?>
              <a class="s_button_compare s_icon_10" onclick="addToCompare('<?php echo $product['product_id']; ?>');"><span class="s_icon s_add_10"></span><?php echo $tbData->text_compare; ?></a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php $tbSlot->stop(); ?>
        <?php endforeach; ?>
        <span class="clear"></span>
      </div>

      <div class="pagination">
        <?php echo $pagination; ?>
      </div>

      <?php endif; ?>
      <?php $tbSlot->stop(); ?>

      <?php echo $content_bottom; ?>

    </div>

    <?php if ($tbData->common['column_position'] == "right" && $column_right): ?>
    <div id="right_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

  </div>
  <!-- end of content -->

<?php echo $footer; ?>