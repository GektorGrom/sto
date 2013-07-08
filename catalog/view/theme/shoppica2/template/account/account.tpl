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
  
    <div id="my_account" class="s_main_col">
  
      <?php echo $content_top; ?>
  
      <?php if ($success): ?>
      <div class="s_msg_green s_server_msg"><p><?php echo $success; ?></p></div>
      <?php endif; ?>
      
      <div class="s_3col_wrap clearfix">
        <div class="s_col s_1_3">
          <h2 class="s_title_1"><span><?php echo $text_my_account; ?></span></h2>
          <ul class="s_list_1">
            <li><a href="<?php echo $edit; ?>"><?php echo $text_edit; ?></a></li>
            <li><a href="<?php echo $password; ?>"><?php echo $text_password; ?></a></li>
            <li><a href="<?php echo $address; ?>"><?php echo $text_address; ?></a></li>
            <?php if ($tbData->common['wishlist_enabled']): ?>
            <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
            <?php endif; ?> 
          </ul>
        </div>
    
        <div class="s_col s_1_3">
          <h2 class="s_title_1"><span><?php echo $text_my_orders; ?></span></h2>
          <ul class="s_list_1">
            <?php if ($tbData->common['checkout_enabled']): ?>
            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
            <?php endif; ?>
            <?php if ($reward): ?>
            <li><a href="<?php echo $reward; ?>"><?php echo $text_reward; ?></a></li>
            <?php endif; ?>
            <?php if ($tbData->common['returns_enabled']): ?>
            <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
            <?php endif; ?> 
            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
          </ul>
        </div>
    
        <div class="s_col s_1_3">
          <h2 class="s_title_1"><span><?php echo $text_my_newsletter; ?></span></h2>
          <ul class="s_list_1">
            <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
          </ul>
        </div>
      </div>
  
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

