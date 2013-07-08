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

    <div class="checkout s_main_col">

      <?php echo $content_top; ?>

      <div id="checkout">
        <div class="checkout-heading"><?php echo $tbData->text_checkout_options; ?></div>
        <div class="checkout-content"></div>
      </div>
      <?php if (!$logged): ?>
      <div id="payment-address">
        <div class="checkout-heading"><span><?php echo $tbData->text_checkout_account; ?></span></div>
        <div class="checkout-content"></div>
      </div>
      <?php else: ?>
      <div id="payment-address">
        <div class="checkout-heading"><span><?php echo $tbData->text_checkout_payment_address; ?></span></div>
        <div class="checkout-content"></div>
      </div>
      <?php endif; ?>
      <?php if ($shipping_required): ?>
      <div id="shipping-address">
        <div class="checkout-heading"><?php echo $tbData->text_checkout_shipping_address; ?></div>
        <div class="checkout-content"></div>
      </div>
      <div id="shipping-method">
        <div class="checkout-heading"><?php echo $tbData->text_checkout_shipping_method; ?></div>
        <div class="checkout-content"></div>
      </div>
      <?php endif; ?>
      <div id="payment-method">
        <div class="checkout-heading"><?php echo $tbData->text_checkout_payment_method; ?></div>
        <div class="checkout-content"></div>
      </div>
      <div id="confirm">
        <div class="checkout-heading"><?php echo $tbData->text_checkout_confirm; ?></div>
        <div class="checkout-content"></div>
      </div>

      <?php echo $content_bottom; ?>

    </div>

    <?php if ($tbData->common['column_position'] == "right" && $column_right): ?>
    <div id="right_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

    <script type="text/javascript">
    $('#checkout .checkout-content input[name=\'account\']').live('change', function() {
      if ($(this).attr('value') == 'register') {
        $('#payment-address .checkout-heading').html('<?php echo $tbData->text_checkout_account; ?>');
      } else {
        $('#payment-address .checkout-heading').html('<?php echo $tbData->text_checkout_payment_address; ?>');
      }
    });
    
    $('.checkout-heading a').live('click', function() {
      $('.checkout-content').slideUp('slow');
    
      $(this).parent().parent().find('.checkout-content').slideDown('slow');
    });
    <?php if (!$logged): ?>
    $(document).ready(function() {
      $.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
          $('#checkout .checkout-content').html(html);
          $('#checkout .checkout-content').slideDown('slow');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    <?php else: ?>
    $(document).ready(function() {
      $.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
          $('#payment-address .checkout-content').html(html);
          $('#payment-address .checkout-content').slideDown('slow');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    <?php endif; ?>
    
    // Checkout
    $('#button-account').live('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').attr('value'),
        dataType: 'html',
        beforeSend: function() {
          $('#button-account').attr('disabled', true);
          $('#button-account').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-account').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(html) {
          $('div.s_server_msg').remove();
          $('#payment-address .checkout-content').html(html);
          $('#checkout .checkout-content').slideUp('slow');
          $('#payment-address .checkout-content').slideDown('slow');
          $('.checkout-heading a').remove();
          $('#checkout .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
        }
      });
    });
    
    // Login
    $('#button-login').live('click', function() {
      if (!$("#returning_customer_login").valid()) {
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/login/validate',
        type: 'post',
        data: $('#returning_customer_login :input'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-login').attr('disabled', true);
          $('#button-login').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-login').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            $('#checkout .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
            $('div.s_server_msg').fadeIn('slow');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    // Register
    $('#button-register').live('click', function() {
      if (!$("#register_details_form").valid()) {
    
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/register/validate',
        type: 'post',
        data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-register').attr('disabled', true);
          $('#button-register').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-register').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
          $("p.s_error_msg").remove();
          $("div.s_row_2").removeClass("s_error_row");
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#payment-address .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
            var elements = { "firstname" : "", "lastname" : "", "email" : "", "telephone" : "", "company_id" : "", "tax_id" : "", "address_1" : "", "city" : "", "postcode" : "", "country" : "select:country_id", "zone" : "select:zone_id", "password" : "", "confirm"  : "" };
            highlightErrors(elements, json['error'], "payment-address");
          } else {
            location.reload(true);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    // Payment Address
    $('#payment-address a.payment_button-address').live('click', function() {
      var submit_button = this;
      if ($("#payment-address-new").is(":checked") && !$("#payment_form").valid()) {
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/payment_address/validate',
        type: 'post',
        data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address select'),
        dataType: 'json',
        beforeSend: function() {
          $(submit_button).attr('disabled', true);
          $(submit_button).after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $(submit_button).attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
          $("p.s_error_msg").remove();
          $("div.s_row_2").removeClass("s_error_row");
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#payment-address .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
            var elements = { "firstname" : "", "lastname" : "", "email" : "", "telephone" : "", "company_id" : "", "tax_id" : "", "address_1" : "", "city" : "", "postcode" : "", "country" : "select:country_id", "zone" : "select:zone_id" };
            highlightErrors(elements, json['error'], "payment-address");
          } else {
            <?php if ($shipping_required): ?>
            $.ajax({
              url: 'index.php?route=checkout/shipping_address',
              dataType: 'html',
              success: function(html) {
                $('#shipping-address .checkout-content').html(html);
                $('#payment-address .checkout-content').slideUp('slow');
                $('#shipping-address .checkout-content').slideDown('slow');
                $('#payment-address .checkout-heading a').remove();
                $('#shipping-address .checkout-heading a').remove();
                $('#shipping-method .checkout-heading a').remove();
                $('#payment-method .checkout-heading a').remove();
                $('#payment-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
            <?php else: ?>
            $.ajax({
              url: 'index.php?route=checkout/payment_method',
              dataType: 'html',
              success: function(html) {
                $('#payment-method .checkout-content').html(html);
                $('#payment-address .checkout-content').slideUp('slow');
                $('#payment-method .checkout-content').slideDown('slow');
                $('#payment-address .checkout-heading a').remove();
                $('#payment-method .checkout-heading a').remove();
                $('#payment-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
            <?php endif; ?>
    
            $.ajax({
              url: 'index.php?route=checkout/payment_address',
              dataType: 'html',
              success: function(html) {
                $('#payment-address .checkout-content').html(html);
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    // Shipping Address
    $('#shipping-address a.shipping_button-address').live('click', function() {
      if ($("#shipping-address-new").is(":checked") && !$("#shipping_form").valid()) {
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/shipping_address/validate',
        type: 'post',
        data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
          $('#shipping-address #button-address').attr('disabled', true);
          $('#shipping-address #button-address').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#shipping-address #button-address').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
          $("p.s_error_msg").remove();
          $("div.s_row_2").removeClass("s_error_row");
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#shipping-address .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
            var elements = { "firstname" : "", "lastname" : "", "email" : "", "telephone" : "", "address_1" : "", "city" : "", "postcode" : "", "country" : "select:country_id", "zone" : "select:zone_id" };
            highlightErrors(elements, json['error'], "shipping-address");
          } else {
            $.ajax({
              url: 'index.php?route=checkout/shipping_method',
              dataType: 'html',
              success: function(html) {
                $('#shipping-method .checkout-content').html(html);
                $('#shipping-address .checkout-content').slideUp('slow');
                $('#shipping-method .checkout-content').slideDown('slow');
                $('#shipping-address .checkout-heading a').remove();
                $('#shipping-method .checkout-heading a').remove();
                $('#payment-method .checkout-heading a').remove();
                $('#shipping-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
    
                $.ajax({
                  url: 'index.php?route=checkout/shipping_address',
                  dataType: 'html',
                  success: function(html) {
                    $('#shipping-address .checkout-content').html(html);
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                  }
                });
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    // Guest
    $('#button-guest').live('click', function() {
      if (!$("#guest_details_form").valid()) {
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/guest/validate',
        type: 'post',
        data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address select'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-guest').attr('disabled', true);
          $('#button-guest').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-guest').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
          $("p.s_error_msg").remove();
          $("div.s_row_2").removeClass("s_error_row");
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#payment-address .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
            var elements = { "firstname" : "", "lastname" : "", "email" : "", "telephone" : "", "company_id" : "", "tax_id" : "", "address_1" : "", "city" : "", "postcode" : "", "country" : "select:country_id", "zone" : "select:zone_id" };
            highlightErrors(elements, json['error'], "payment-address");
          } else {
            <?php if ($shipping_required): ?>
            var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').attr('value');
    
            if (shipping_address) {
              $.ajax({
                url: 'index.php?route=checkout/shipping_method',
                dataType: 'html',
                success: function(html) {
                    $('#shipping-method .checkout-content').html(html);
                    $('#payment-address .checkout-content').slideUp('slow');
                    $('#shipping-method .checkout-content').slideDown('slow');
                    $('#payment-address .checkout-heading a').remove();
                    $('#shipping-address .checkout-heading a').remove();
                    $('#shipping-method .checkout-heading a').remove();
                    $('#payment-method .checkout-heading a').remove();
                    $('#payment-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
                    $('#shipping-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
    
                  $.ajax({
                    url: 'index.php?route=checkout/guest_shipping',
                    dataType: 'html',
                    success: function(html) {
                        $('#shipping-address .checkout-content').html(html);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                      alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                  });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
              });
            } else {
              $.ajax({
                url: 'index.php?route=checkout/guest_shipping',
                dataType: 'html',
                success: function(html) {
                  $('#shipping-address .checkout-content').html(html);
                  $('#payment-address .checkout-content').slideUp('slow');
                  $('#shipping-address .checkout-content').slideDown('slow');
                  $('#payment-address .checkout-heading a').remove();
                  $('#shipping-address .checkout-heading a').remove();
                  $('#shipping-method .checkout-heading a').remove();
                  $('#payment-method .checkout-heading a').remove();
                  $('#payment-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
              });
            }
            <?php else: ?>
            $.ajax({
              url: 'index.php?route=checkout/payment_method',
              dataType: 'html',
              success: function(html) {
                $('#payment-method .checkout-content').html(html);
                $('#payment-address .checkout-content').slideUp('slow');
                $('#payment-method .checkout-content').slideDown('slow');
                $('#payment-address .checkout-heading a').remove();
                $('#payment-method .checkout-heading a').remove();
                $('#payment-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
            <?php endif; ?>
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    // Guest Shipping
    $('#button-guest-shipping').live('click', function() {
      if (!$("#guest_shipping_form").valid()) {
        return false;
      }
    
      $.ajax({
        url: 'index.php?route=checkout/guest_shipping/validate',
        type: 'post',
        data: $('#shipping-address input[type=\'text\'], #shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-guest-shipping').attr('disabled', true);
          $('#button-guest-shipping').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-guest-shipping').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
          $("p.s_error_msg").remove();
          $("div.s_row_2").removeClass("s_error_row");
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#shipping-address .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
            var elements = { "firstname" : "", "lastname" : "", "email" : "", "address_1" : "", "address_2" : "","city" : "", "postcode" : "", "country" : "select:country_id", "zone" : "select:zone_id" };
            highlightErrors(elements, json['error'], "shipping-address");
    
          } else {
            $.ajax({
              url: 'index.php?route=checkout/shipping_method',
              dataType: 'html',
              success: function(html) {
                $('#shipping-method .checkout-content').html(html);
                $('#shipping-address .checkout-content').slideUp('slow');
                $('#shipping-method .checkout-content').slideDown('slow');
                $('#shipping-address .checkout-heading a').remove();
                $('#shipping-method .checkout-heading a').remove();
                $('#payment-method .checkout-heading a').remove();
                $('#shipping-address .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    $('#button-shipping').live('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/shipping_method/validate',
        type: 'post',
        data: $('#shipping-method input[type=\'radio\']:checked, #shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-shipping').attr('disabled', true);
          $('#button-shipping').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-shipping').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#shipping-method .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
          } else {
            $.ajax({
              url: 'index.php?route=checkout/payment_method',
              dataType: 'html',
              success: function(html) {
                  $('#payment-method .checkout-content').html(html);
                  $('#shipping-method .checkout-content').slideUp('slow');
                  $('#payment-method .checkout-content').slideDown('slow');
                  $('#shipping-method .checkout-heading a').remove();
                  $('#payment-method .checkout-heading a').remove();
                  $('#shipping-method .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    $('#button-payment').live('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/payment_method/validate',
        type: 'post',
        data: $('#payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked, #payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-payment').attr('disabled', true);
          $('#button-payment').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('#button-payment').attr('disabled', false);
          $('.wait').remove();
        },
        success: function(json) {
          $('div.s_server_msg').remove();
    
          if (json['redirect']) {
            location = json['redirect'];
          } else if (json['error']) {
            if (json['error']['warning']) {
              $('#payment-method .checkout-content').prepend('<div class="s_server_msg s_msg_red" style="display: none;"><p>' + json['error']['warning'] + '</p></div>');
              $('div.s_server_msg').fadeIn('slow');
            }
          } else {
            $.ajax({
              url: 'index.php?route=checkout/confirm',
              dataType: 'html',
              success: function(html) {
                $('#confirm .checkout-content').html(html);
                $('#payment-method .checkout-content').slideUp('slow');
                $('#confirm .checkout-content').slideDown('slow');
                $('#payment-method .checkout-heading a').remove();
                $('#payment-method .checkout-heading').append('<a><?php echo $text_modify; ?></a>');
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });
    
    function highlightErrors(elements, json, wrapper_id) {
      jQuery.each(elements, function(i, val) {
        if (json[i]) {
          var selector = "input";
          var el_name = val ? val : i;
    
          if (val) {
            var el_parts = val.split(":");
            if (el_parts.length == 2) {
              var selector = el_parts[0];
              var el_name = el_parts[1];
            }
          }
    
          var element = $("#" + wrapper_id + " " + selector + "[name='" + el_name + "']");
    
          element.after('<p class="s_error_msg">' + json[i] + '</p>');
          element.parent("div.s_row_2").addClass("s_error_row");
        }
      });
    }
    
    </script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $tbData->theme_javascript_url; ?>prettyphoto/css/prettyPhoto.css" media="all" />
    <script type="text/javascript" src="<?php echo $tbData->theme_javascript_url; ?>prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="http<?php if($tbData->isHTTPS) echo 's'?>://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    
    
    <script type="text/javascript">
      jQuery.validator.setDefaults({
          errorElement: "p",
          errorClass: "s_error_msg",
          errorPlacement: function(error, element) {
              error.insertAfter(element);
          },
          highlight: function(element, errorClass, validClass) {
              $(element).addClass("error_element").removeClass(validClass);
              $(element).parent("div").addClass("s_error_row");
          },
          unhighlight: function(element, errorClass, validClass) {
              $(element).removeClass("error_element").addClass(validClass);
              $(element).parent("div").removeClass("s_error_row");
          }
      });
    </script>

  </div>
  <!-- end of content -->

<?php echo $footer; ?>