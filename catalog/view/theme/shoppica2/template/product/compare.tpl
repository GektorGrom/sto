<?php echo $header; ?>

  <!-- ---------------------- -->
  <!--     I N T R O          -->
  <!-- ---------------------- -->
  <div id="intro">
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
  
    <div id="compare" class="s_main_col">
  
      <?php echo $content_top; ?>

      <?php $products = $tbSlot->filter('product\compare.filter_products', $products, array('data' => $this->data)); ?>
      <?php $tbSlot->start('product\compare.filter_products', array('products' => $products, 'data' => $this->data)); ?>
      <?php if ($products): ?>
      <table class="s_table_1" width="100%" cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th colspan="<?php echo count($products) + 1; ?>"><?php echo $text_product; ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><?php echo $text_name; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_name product_<?php echo $product['product_id']; ?>"><a class="s_main_color" href="<?php echo $products[$product['product_id']]['href']; ?>"><?php echo $products[$product['product_id']]['name']; ?></a></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_image; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="s_product_thumb product_image product_<?php echo $product['product_id']; ?>">
              <?php if ($products[$product['product_id']]['thumb']): ?>
              <img src="<?php echo $products[$product['product_id']]['thumb']; ?>" alt="<?php echo $products[$product['product_id']]['name']; ?>" />
              <?php endif; ?>
            </td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_price; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_price product_<?php echo $product['product_id']; ?>">
              <?php if ($products[$product['product_id']]['price']): ?>
                <?php if (!$products[$product['product_id']]['special']): ?>
                <?php echo $products[$product['product_id']]['price']; ?>
                <?php else: ?>
                <span class="price-old"><?php echo $products[$product['product_id']]['price']; ?></span> <span class="price-new"><?php echo $products[$product['product_id']]['special']; ?></span>
                <?php endif; ?>
              <?php endif; ?>
            </td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_model; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_model product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['model']; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_manufacturer; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_manufacturer product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['manufacturer']; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_availability; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_availability product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['availability']; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_rating; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_rating product_<?php echo $product['product_id']; ?>">
              <?php if ($products[$product['product_id']]['rating']): ?>
              <div class="s_rating_holder">
                <p class="s_rating s_rating_5 s_mb_0"><span style="width: <?php echo $products[$product['product_id']]['rating'] * 2 ; ?>0%;" class="s_percent"></span></p>
                <span class="s_average s_mb_0"><?php echo $products[$product['product_id']]['rating']; ?>/5</span>
                <span class="s_total">(<?php echo $products[$product['product_id']]['reviews']; ?>)</span>
              </div>
              <?php else: ?>
              <div class="s_rating_holder">
                <p class="s_rating s_rating_5 s_mb_0"></p>
                <span class="s_total"><?php echo $tbData->text_product_not_yet_rated; ?></span>
              </div>
              <?php endif; ?>
            </td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_summary; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_description product_<?php echo $product['product_id']; ?> align_left" valign="top"><?php echo $products[$product['product_id']]['description']; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_weight; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_weight product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['weight']; ?></td>
            <?php endforeach; ?>
          </tr>
          <tr>
            <th><?php echo $text_dimension; ?></th>
            <?php foreach ($products as $product): ?>
            <td class="product_dimension product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['length']; ?> x <?php echo $products[$product['product_id']]['width']; ?> x <?php echo $products[$product['product_id']]['height']; ?></td>
            <?php endforeach; ?>
          </tr>
        </tbody>
        <?php foreach ($attribute_groups as $attribute_group): ?>
        <thead>
          <tr>
            <th colspan="<?php echo count($products) + 1; ?>"><?php echo $attribute_group['name']; ?></th>
          </tr>
        </thead>
        <?php foreach ($attribute_group['attribute'] as $key => $attribute): ?>
        <tbody>
          <tr>
            <th><?php echo $attribute['name']; ?></th>
            <?php foreach ($products as $product): ?>
            <?php if (isset($products[$product['product_id']]['attribute'][$key])): ?>
            <td class="product_attribute product_<?php echo $product['product_id']; ?>"><?php echo $products[$product['product_id']]['attribute'][$key]; ?></td>
            <?php else: ?>
            <td></td>
            <?php endif; ?>
            <?php endforeach; ?>
          </tr>
        </tbody>
        <?php endforeach; ?>
        <?php endforeach; ?>
        <?php if ($tbData->common['checkout_enabled']): ?>
        <tr>
          <th></th>
          <?php foreach ($products as $product): ?>
          <td class="product_add_to_cart product_<?php echo $product['product_id']; ?>"><a class="s_button_add_to_cart" onclick="addToCart('<?php echo $product['product_id']; ?>');"><span class="s_icon_16"><span class="s_icon"></span> <?php echo $button_cart; ?></span></a></td>
          <?php endforeach; ?>
        </tr>
        <?php endif; ?>
        <tr>
          <th></th>
          <?php foreach ($products as $product): ?>
          <td class="product_remove product_<?php echo $product['product_id']; ?>"><a href="<?php echo $product['remove']; ?>" class="s_secondary_color"><?php echo $button_remove; ?></a></td>
          <?php endforeach; ?>
        </tr>
      </table>
      
      <div class="s_submit clearfix">
        <a href="<?php echo $continue; ?>" class="s_button_1 s_main_color_bgr"><span class="s_text"><?php echo $button_continue; ?></span></a>
      </div>
      <?php else: ?>
      <p><?php echo $text_empty; ?></p>
      <div class="s_submit clearfix">
        <a href="<?php echo $continue; ?>" class="s_button_1 s_main_color_bgr"><span class="s_text"><?php echo $button_continue; ?></span></a>
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