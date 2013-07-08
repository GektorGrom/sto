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
        <h1><?php echo $heading_title; ?><?php if ($weight): ?> (<?php echo $weight; ?>)<?php endif; ?></h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  <!-- ---------------------- -->
  <!--      C O N T E N T     -->
  <!-- ---------------------- -->

  <div id="content" class="s_wrap">
    <style>.button_qustmain {display:none;}</style>
    <?php if ($tbData->common['column_position'] == "left" && $column_right): ?>
    <div id="left_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

    <div id="shopping_cart" class="s_main_col">

      <?php echo $content_top; ?>

      <?php if ($error_warning): ?>
      <div class="s_server_msg s_msg_red"><p><?php echo $error_warning; ?></p></div>
      <?php endif; ?>

      <?php if ($attention): ?>
      <div class="s_server_msg s_msg_yellow"><p><?php echo $attention; ?></p></div>
      <?php endif; ?>

      <?php if ($success): ?>
      <div class="s_server_msg s_msg_green"><p><?php echo $success; ?></p></div>
      <?php endif; ?>

      <form id="cart_form" class="clearfix" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <table class="s_table_1" width="100%" cellpadding="0" cellspacing="0" border="0">
        	<thead>
            <tr>
              <th class="s_cell_image" width="60"><?php echo $column_image; ?></th>
              <th class="s_cell_name" width="320"><?php echo $column_name; ?></th>
              <th class="s_cell_model"><?php echo $column_model; ?></th>
              <th class="s_cell_quantity"><?php echo $column_quantity; ?></th>
              <th class="s_cell_price"><?php echo $column_price; ?></th>
              <th class="s_cell_total"><?php echo $column_total; ?></th>
              <th class="button_qustmain">Почему:</th>
            </tr>
          </thead>
          <tbody>
            <?php $class = 'odd'; ?>
            <?php foreach ($products as $product): ?>
            <?php $class = ($class == 'even' ? 'odd' : 'even'); ?>
            <tr class="<?php echo $class; ?>">
              <td class="s_cell_image" valign="middle">
                <?php if ($product['thumb']): ?>
                <a href="<?php echo $product['href']; ?>">
                  <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
                </a>
                <?php endif; ?>
                <strong class="s_hidden"><?php echo $product['name']; ?></strong>
              </td>
              <td class="s_cell_name" valign="middle"><a href="<?php echo $product['href']; ?>"><strong><?php echo $product['name']; ?></strong></a>
                <?php if (!$product['stock']): ?>
                <strong class="s_red">***</strong>
                <?php endif; ?>
                <div>
                  <?php foreach ($product['option'] as $option): ?>
                  - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
                  <?php endforeach; ?>
                </div>
                <?php if (isset($product['reward']) && $product['reward']): ?>
                  <small><?php echo $product['reward']; ?></small>
                <?php endif; ?>
              </td>
              <td class="s_cell_model" valign="middle"><?php echo $product['model']; ?></td>
              <td class="s_cell_quantity s_quantity" valign="middle">
                <input type="text" name="quantity[<?php echo $product['key']; ?>]" value="<?php echo $product['quantity']; ?>" size="3" />
                <input class="inline" type="image" src="catalog/view/theme/default/image/update.png" alt="<?php echo $button_update; ?>" title="<?php echo $button_update; ?>" />
                <a href="<?php echo $product['remove']; ?>"><div data-icon="s" class="icon inline" style="font-size: 2em;color:#e74c3c;"></div></a>
              </td>
              <td class="s_cell_price" valign="middle"> <?php echo $product['price']; ?></td>
              <td class="s_cell_total" valign="middle"><?php echo $product['total']; ?></td>
              <!-- добавляем кнопку -->
              <td class="button_qustmain" valign="middle" data-orig="<?php echo $product['orig']; ?>" data-price="<?php echo $product['price']; ?>" data-total="<?php echo $product['total']; ?>" data-count="<?php echo $product['quantity']; ?>"> <?php if ($product['quantity']>1): ?> <a href="#" class="button_qust"><div data-icon="j" class="icon" style="font-size: 3em;color:#534F4F;
"></div></a> <?php endif; ?></td>
            </tr>
            <?php endforeach; ?>
            <?php foreach ($vouchers as $avoucher): ?>
            <tr>
              <td class="s_cell_name" valign="middle"></td>
              <td class="s_cell_image" valign="middle"><?php echo $avoucher['description']; ?></td>
              <td class="s_cell_model" valign="middle"></td>
              <td class="s_cell_quantity" valign="middle">
                <input type="text" value="1" size="3" disabled="disabled" />
                <a href="<?php echo $avoucher['remove']; ?>"><img class="inline" src="catalog/view/theme/default/image/remove.png" title="<?php echo $button_remove; ?>" /></a>
              </td>
              <td class="s_cell_price" valign="middle"><?php echo $avoucher['amount']; ?></td>
              <td class="s_cell_total" valign="middle"><?php echo $avoucher['amount']; ?></td>
            </tr>
            <?php endforeach; ?>

            
            
          </tbody>
        </table>
        <!-- Добавляем подсказку -->
<div id="htcprice" style="
display: none;    
position: absolute;
width: 300px;
right: 15px;
float: right;
margin-top: -25px;
z-index: 10;
background-color: white;
padding: 15px;
box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 10px;
-webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 10px;
">
<!-- <div class="s_submenu s_cart_holder">
<table class="s_cart_items" cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
<td width="50">
<a class="left" href="http://1na100.jesse.co.ua/index.php?route=product/product&amp;product_id=40">
<img src="http://1na100.jesse.co.ua/image/cache/data/demo/iphone_1-40x40.jpg" alt="iPhone" title="iPhone">
</a></td>
<td>
<a href="http://1na100.jesse.co.ua/index.php?route=product/product&amp;product_id=40">iPhone</a>
</td>
<td width="80" class="s_cart_number">
  Выигранная цена <?php echo $product['price']; ?> + <?php echo $product['quantity']-1; ?>*<?php echo $product['orig']; ?>
</td>
<td width="50" class="s_cart_price"><?php echo $product['total']; ?></td>
<td width="26">
</td>
</tr>
</tbody></table>

  <span class="clear s_mb_15 border_ddd"></span>
    <div class="s_total clearfix"><strong class="cart_module_total left">Сумма</strong><span class="cart_module_total">98 грн.</span></div>
    <div class="s_total clearfix"><strong class="cart_module_total left">Итого</strong><span class="cart_module_total">98 грн.</span></div>
    <span class="clear s_mb_15"></span>
  <div class="align_center clearfix">
    <a class="s_button_1 s_secondary_color_bgr s_ml_0" href="http://1na100.jesse.co.ua/index.php?route=checkout/cart"><span class="s_text">View Cart</span></a>
    <a class="s_button_1 s_secondary_color_bgr" href="http://1na100.jesse.co.ua/index.php?route=checkout/checkout"><span class="s_text">Оформление заказа</span></a>
  </div>

            </div> --></div>

      </form>

      <?php if ($coupon_status || $voucher_status || $reward_status || $shipping_status): ?>
      <div id="cart_totals" class="s_accordion s_mb_30">

        <?php if ($coupon_status): ?>
        <h2><?php echo $text_use_coupon; ?></h2>
        <div id="coupon" class="cart-content">
          <div class="s_col_5 alpha omega">
            <div id="apply_coupon" class="s_box_1">
              <div class="s_row_3 clearfix">
                <form id="form-coupon" action="<?php echo $action; ?>" method="post">
                  <label><strong><?php echo $entry_coupon; ?></strong></label>
                  <input type="text" name="coupon" value="<?php echo $coupon; ?>" size="28" />
                  <input type="hidden" name="next" value="coupon" />
                  <a id="button-coupon" class="s_button_1 s_button_1_small s_main_color_bgr left"><span class="s_text"><?php echo $button_coupon; ?></span></a>
                </form>
              </div>
            </div>
          </div>
          <span class="clear"></span>
        </div>
        <?php endif; ?>

        <?php if ($voucher_status): ?>
        <h2><?php echo $text_use_voucher; ?></h2>
        <div id="voucher" class="cart-content">
          <div class="s_col_5 alpha omega">
            <div id="apply_voucher" class="s_box_1">
              <div class="s_row_3 clearfix">
                <form id="form-voucher" action="<?php echo $action; ?>" method="post">
                  <label><strong><?php echo $entry_voucher; ?></strong></label>
                  <input type="text" name="voucher" value="<?php echo $voucher; ?>" size="28" />
                  <input type="hidden" name="next" value="voucher" />
                  <a id="button-voucher" class="s_button_1 s_button_1_small s_main_color_bgr left"><span class="s_text"><?php echo $button_voucher; ?></span></a>
                </form>
              </div>
            </div>
          </div>
          <span class="clear"></span>
        </div>
        <?php endif; ?>

        <?php if ($reward_status): ?>
        <h2><?php echo $text_use_reward; ?></h2>
        <div id="reward" class="cart-content">
          <div class="s_col_5 alpha omega">
            <div id="apply_reward" class="s_box_1">
              <div class="s_row_3 clearfix">
                <form id="form-reward" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                  <label><strong><?php echo $entry_reward; ?></strong></label>
                  <input type="text" name="reward" value="<?php echo $reward; ?>" size="28" />
                  <input type="hidden" name="next" value="reward" />
                  <a id="button-reward" class="s_button_1 s_button_1_small s_main_color_bgr left"><span class="s_text"><?php echo $button_reward; ?></span></a>
                </form>
              </div>
            </div>
          </div>
          <span class="clear"></span>
        </div>
        <?php endif; ?>

        <?php if ($shipping_status): ?>
        <h2><?php echo $text_shipping_detail; ?></h2>
        <div id="shipping" class="cart-content">

          <div id="apply_shipping" class="s_row_2 clearfix">
            <label><strong class="s_red">*</strong> <?php echo $entry_country; ?></label>
            <select id="country_id" name="country_id">
              <option value=""><?php echo $text_select; ?></option>
              <?php foreach ($countries as $country): ?>
              <?php if ($country['country_id'] == $country_id): ?>
              <option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
              <?php else: ?>
              <option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="s_row_2 clearfix">
            <label><strong class="s_red">*</strong> <?php echo $entry_zone; ?></label>
            <select id="zone_id" name="zone_id">
            </select>
          </div>

          <div id="postcode_div" class="s_row_2 s_mb_20 clearfix">
            <label><strong class="s_red">*</strong> <?php echo $entry_postcode; ?></label>
            <input type="text" name="postcode" id="postcode" value="<?php echo $postcode; ?>" size="30" />
          </div>

          <div class="s_submit clearfix">
            <a id="button-quote" class="s_button_1 s_button_1_small s_main_color_bgr left"><span class="s_text"><?php echo $button_quote; ?></span></a>
          </div>
          
          <div class="s_col_5 alpha omega">
            <div id="quote" class="s_box_1 s_mb_0 alpha" style="display: none;"></div>
          </div>
          <span class="clear"></span>

        </div>
        <?php endif; ?>

      </div>

      <script type="text/javascript">
        $("#cart_totals").accordion({
          autoHeight:  false,
          collapsible: true,
          active:      false
        });
        <?php if ($next == 'coupon'): ?>
        $("#cart_totals").accordion( "activate" , 0 );
        <?php endif; ?>
        <?php if ($next == 'voucher'): ?>
        $("#cart_totals").accordion( "activate" , 1 );
        <?php endif; ?>
        <?php if ($next == 'reward'): ?>
        $("#cart_totals").accordion( "activate" , 2 );
        <?php endif; ?>
        <?php if ($next == 'shipping'): ?>
        $("#cart_totals").accordion( "activate" , 3 );
        <?php endif; ?>
      </script>

      <span class="clear"></span>

      <?php endif; ?>

      <?php if ($totals): $i = 0; $j = count($totals); ?>
        <?php foreach ($totals as $total): ?>
        <p class="s_total<?php if($i == $j-1) echo ' s_secondary_color last'; ?>"><strong><?php echo $total['title']; ?></strong> <?php echo $total['text']; ?></p>
        <?php $i++; endforeach; ?>
        <span class="clear"></span>
        <span class="clear s_sep"></span>
      <?php endif; ?>

      <div class="s_submit clearfix">
        <a class="s_button_1 s_ddd_bgr left" href="<?php echo $continue; ?>"><span class="s_text"><?php echo $button_shopping; ?></span></a>
        <a class="s_button_1 s_main_color_bgr" href="<?php echo $checkout; ?>"><span class="s_text"><?php echo $button_checkout; ?></span></a>
      </div>

      <?php echo $content_bottom; ?>

    </div>

    <?php if ($tbData->common['column_position'] == "right" && $column_right): ?>
    <div id="right_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

    <script type="text/javascript">
    
    <?php if ($coupon_status): ?>
    $("#button-coupon").bind("click", function() {
      $("#form-coupon").submit();
    
      return false;
    });
    <?php endif; ?>
    
    <?php if ($voucher_status): ?>
    $("#button-voucher").bind("click", function() {
      $("#form-voucher").submit();
    
      return false;
    });
    <?php endif; ?>
    
    <?php if ($reward_status): ?>
    $("#button-reward").bind("click", function() {
      $("#form-reward").submit();
    
      return false;
    });
    <?php endif; ?>
    
    <?php if ($shipping_status): ?>
    $('#button-quote').live('click', function() {
    
      $("#shipping p.s_error_msg").remove();
      $("#shipping div.s_row_2").removeClass("s_error_row");
    
      $.ajax({
        url: 'index.php?route=checkout/cart/quote',
        type: 'post',
        data: 'country_id=' + $('select[name=\'country_id\']').val() + '&zone_id=' + $('select[name=\'zone_id\']').val() + '&postcode=' + encodeURIComponent($('input[name=\'postcode\']').val()),
        dataType: 'json',
        beforeSend: function() {
          $('.success, .warning').remove();
          $('#button-quote').attr('disabled', true);
          $('#button-quote').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-quote').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('.success, .warning, .attention, .error').remove();
    
          if (json['error']) {
            if (json['error']['warning']) {
              $('#shipping').find('.s_server_msg').remove();
              $('#shipping').prepend('<div class="s_server_msg s_msg_red"><p>' + json['error']['warning'] + '</p></div>');
            }
    
            if (json['error']['country']) {
              $("#country_id").after('<p class="s_error_msg">' + json['error']['country'] + '</p>');
              $("#country_id").parent("div.s_row_3").addClass("s_error_row");
            }
    
            if (json['error']['zone']) {
              $("#zone_id").after('<p class="s_error_msg">' + json['error']['zone'] + '</p>');
              $("#zone_id").parent("div.s_row_3").addClass("s_error_row");
            }
    
            if (json['error']['postcode']) {
              $("#postcode").after('<p class="s_error_msg">' + json['error']['postcode'] + '</p>');
              $("#postcode").parent("div.s_row_3").addClass("s_error_row");
            }
          }
    
          if (json['shipping_method']) {
            var html   = '<form id="form-shipping" action="<?php echo $action; ?>" method="post">';
            html += '  <table width="100%" cellpadding="3">';
    
            for (i in json['shipping_method']) {
              html += '<tr>';
              html += '  <td colspan="3"><b>' + json['shipping_method'][i]['title'] + '</b></td>';
              html += '</tr>';
    
              if (!json['shipping_method'][i]['error']) {
                for (j in json['shipping_method'][i]['quote']) {
                  html += '<tr class="highlight">';
    
                  if (json['shipping_method'][i]['quote'][j]['code'] == '<?php echo $shipping_method; ?>') {
                    html += '<td><input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" id="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" /></td>';
                  } else {
                    html += '<td><input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" id="' + json['shipping_method'][i]['quote'][j]['code'] + '" /></td>';
                  }
    
                  html += '  <td><label for="' + json['shipping_method'][i]['quote'][j]['code'] + '">' + json['shipping_method'][i]['quote'][j]['title'] + '</label></td>';
                  html += '  <td style="text-align: right;"><label for="' + json['shipping_method'][i]['quote'][j]['code'] + '">' + json['shipping_method'][i]['quote'][j]['text'] + '</label></td>';
                  html += '</tr>';
                }
              } else {
                html += '<tr>';
                html += '  <td colspan="3"><div class="error">' + json['shipping_method'][i]['error'] + '</div></td>';
                html += '</tr>';
              }
            }
    
            html += '  </table>';
            html += '  <input type="hidden" name="next" value="shipping" />';
            <?php if ($shipping_method): ?>
            html += '  <a id="button-shipping" class="s_button_1 s_button_1_small s_main_color_bgr left"><span class="s_text"><?php echo $button_shipping; ?></span></a><span class="clear"></span>';
            <?php else: ?>
            html += '  <a id="button-shipping" class="s_button_1 s_button_1_small s_main_color_bgr left" style="display: none;"><span class="s_text"><?php echo $button_shipping; ?></span></a><span class="clear"></span>';
            <?php endif; ?>
            html += '</form>';
    
            $('#quote').html(html);
            $('#quote').slideDown('slow');

            $('input[name=\'shipping_method\']').bind('change', function() {
              $('#button-shipping').show();
            });
    
            $('#button-shipping').bind('click', function() {
              $("#form-shipping").submit();
    
              return false;
            });
          }
        }
      });
    });

    $('select[name=\'country_id\']').bind('change', function() {
      $.ajax({
        url: 'index.php?route=checkout/cart/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
          $('select[name=\'country_id\']').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('.wait').remove();
        },
        success: function(json) {
          if (json['postcode_required'] == '1') {
            $('#postcode_div strong.s_red').show();
          } else {
            $('#postcode_div strong.s_red').hide();
          }

          var html = '<option value=""><?php echo $text_select; ?></option>';

          if (json['zone'] && json['zone'] != '') {
            for (i = 0; i < json['zone'].length; i++) {
              html += '<option value="' + json['zone'][i]['zone_id'] + '"';

              if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
                html += ' selected="selected"';
              }

              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
          }

          $('select[name=\'zone_id\']').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });

    $('select[name=\'country_id\']').trigger('change');

    <?php endif; ?>

    $('.button_qust').on('click', function(e) {
      e.preventDefault();
      var win_price=$(this).parent().siblings('.s_cell_price').text();
      var total_price=$(this).parent().siblings('.s_cell_total').text();
      win_price=parseInt(win_price.replace(/\D+/g,""));
      total_price=parseInt(total_price.replace(/\D+/g,""));
      var count_count=$(this).parent().siblings('.s_quantity').find('input[type=text]').val()-1;
      var regu_price=(total_price-win_price)/count_count;
      var text_des="Выигранная цена("+win_price+" грн.) + Регулярная цена("+regu_price+")*" + (count_count);
      $('#htcprice').text(text_des).slideDown();

    });
    $('.button_qust').on('mouseleave', function(e) {
      $('#htcprice').slideUp();
    });
    $(document).ready(function() {
      var x=$('.s_quantity').find('input[type=text]').map(function(){if ($(this).val()>1) return false});
      var y =$('.button_qustmain')
      if (x.length===0) {
        y.hide();
      }
      else {
        y.show();
      }

// 

    });





    </script>
    
  </div>
  <!-- end of content -->

<?php echo $footer; ?>