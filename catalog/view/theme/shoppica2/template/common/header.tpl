<?php if (!isset($tbData)) require dirname(__FILE__) . '/../tb/install_error.tpl'; ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'. "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $tbData->base_httpsIf; ?>" />
<?php if ($keywords): ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php endif; ?>
<?php if ($description): ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php endif; ?>
<?php require TB_Utils::vqmodCheck('catalog/view/theme/' . $this->config->get('config_template') . '/template/tb/header.tpl'); ?>
<?php if ($icon): ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php endif; ?>
<?php foreach ($links as $link): ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php endforeach; ?>
<?php foreach ($styles as $style): ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php endforeach; ?>
<?php foreach ($scripts as $script): ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php endforeach; ?>
<?php echo $google_analytics; ?>
</head>

<body class="<?php echo 's_layout_' . $tbData->common['layout_type']; ?><?php if (!$tbData->right_column_empty) { echo ' s_2_cols'; } else { echo ' s_single_col'; } ?> s_page_<?php echo str_replace('/', '_', $this->request->get['route']); ?>">

<?php if($tbData->footerInfo['facebook_enabled'] == '1') require TB_Utils::vqmodCheck('catalog/view/theme/' . $this->config->get('config_template') . '/template/tb/header_facebook.tpl'); ?>
<?php echo $tbData->schemerHTML; ?>

<div id="wrapper">

  <!-- ---------------------- -->
  <!--      H E A D E R       -->
  <!-- ---------------------- -->
  <div id="header" class="s_row clearfix">
    <div class="s_wrap">
      <div class="s_col_12">

        <?php if ($logo): ?>
        <a id="site_logo" href="<?php echo $tbData->base_http; ?>">
          <img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" />
        </a>
        <?php endif; ?>


        <div id="top_navigation" class="s_<?php echo $tbData->common['show_search_bar'] ? 'static' : 'dynamic' ?>">

          <?php $tbSlot->start('common\header.search_bar'); ?>
          <?php if ($tbData->common['show_search_bar']): ?>
          <div id="site_search">
            <input id="filter_keyword" type="text" name="filter_name"<?php if ($filter_name): ?> value="<?php echo $filter_name; ?>"<?php endif; ?> title="<?php echo $text_search; ?>" />
            <a id="search_button" class="s_search_button" href="javascript:;" title="<?php echo $text_search; ?>"></a>
          </div>
          <?php else: ?>
          <div id="site_search">
            <a id="show_search" class="s_search_button" href="javascript:;" title="<?php echo $text_search; ?>"></a>
            <div id="search_bar" class="clearfix">
              <input id="filter_keyword" type="text" name="filter_name"<?php if ($filter_name): ?> value="<?php echo $filter_name; ?>"<?php endif; ?> title="<?php echo $text_search; ?>" />
              <a id="search_button" class="s_button_1 s_button_1_small s_secondary_color_bgr"><span class="s_text"><?php echo $text_search; ?></span></a>
            </div>
          </div>
          <?php endif; ?>
          <?php $tbSlot->stop(); ?>

          <?php echo $currency; ?>

          <?php echo $language; ?>

        </div>

        <div id="system_navigation">
          <?php if ($tbData->common['cart_menu_position'] == 'above' && $tbData->common['checkout_enabled']): ?>
          <?php $cart_contents = $tbData->getCartContents(); ?>
          <div id="cart_menu" class="s_nav">
            <a href="<?php echo $shopping_cart; ?>">
              <span class="s_icon"></span>
              <?php if ($tbData->common['show_cart_label'] == '1'): ?>
              <small class="s_text"><?php echo $tbData->text_cart;?></small>
              <?php endif; ?>
              <span class="s_grand_total s_main_color"><?php echo strip_tags($cart_contents['total_sum']); ?></span>
            </a>
            <div class="s_submenu s_cart_holder">
              <?php echo $cart_contents['html']; ?>
            </div>
          </div>
          <?php endif; ?>
          <p id="welcome_message">
            <?php if (!$logged) echo $text_welcome; else echo $text_logged; ?>
          </p>
          <ul class="s_list_1">
            <?php if ($tbData->common['wishlist_enabled']): ?>
            <li><a href="<?php echo $wishlist; ?>" id="wishlist_total"><?php echo $text_wishlist; ?></a></li>
            <?php endif; ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <?php if ($tbData->common['checkout_enabled']): ?>
            <li><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
            <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
            <?php endif; ?>
          </ul>
        </div>

      </div>

    </div>
  </div>
  <!-- end of header -->


  <!-- ---------------------- -->
  <!--    M A I N   N A V     -->
  <!-- ---------------------- -->
  <div id="main_navigation" class="s_row">
    <div class="s_wrap">
      <div class="s_col_12">

        <div id="categories" class="s_nav">
          <?php echo $tbData->menuHTML; ?>
        </div>

        <?php if ($tbData->common['cart_menu_position'] == 'right' && $tbData->common['checkout_enabled']): ?>
        <?php $cart_contents = $tbData->getCartContents(); ?>
        <div id="cart_menu" class="s_nav">
          <a href="<?php echo $shopping_cart; ?>">
            <span class="s_icon"></span>
            <?php if ($tbData->common['show_cart_label'] == '1'): ?>
            <small class="s_text"><?php echo $tbData->text_cart;?></small>
            <?php endif; ?>
            <span class="s_grand_total s_main_color"><?php echo strip_tags($cart_contents['total_sum']); ?></span>
          </a>
          <div class="s_submenu s_cart_holder">
            <?php echo $cart_contents['html']; ?>
          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <!-- end of main navigation -->

  <?php if (isset($common_error)): ?>
  <!-- ---------------------- -->
  <!--  S E R V E R   M S G   -->
  <!-- ---------------------- -->
  <div class="s_row">
    <div class="s_wrap">
      <div class="s_server_msg">
        <?php echo $common_error; ?>
      </div>
    </div>
  </div>
  <!-- end of server messages -->
  <?php endif; ?>