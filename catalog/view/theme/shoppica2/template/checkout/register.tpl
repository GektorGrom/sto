  <form id="register_details_form">
    <div class="left s_1_2">

      <h2><?php echo $text_your_details; ?></h2>

      <div class="s_row_2 clearfix">
        <label><strong class="s_red">*</strong> ФИО: </label>
        <input type="text" name="firstname" value="" size="30" class="required" title="<?php echo $this->language->get('error_firstname'); ?>" />
      </div>

      <div class="s_row_2 clearfix s_hidden">
        <label><strong class="s_red">*</strong> <?php echo $entry_lastname; ?></label>
        <input type="text" name="lastname" value="Васильцев" size="30" class="required" title="<?php echo $this->language->get('error_lastname'); ?>" />
      </div>

      <div class="s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_email; ?></label>
        <input type="text" name="email" value="" size="30" class="required" title="<?php echo $this->language->get('error_email'); ?>" />
      </div>

      <div class="s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_telephone; ?></label>
        <input type="text" name="telephone" value="" size="30" class="required" title="<?php echo $this->language->get('error_telephone'); ?>" />
      </div>

      <div class="s_hidden s_row_2 clearfix">
        <label><?php echo $entry_fax; ?></label>
        <input type="text" name="fax" value="000000000" size="30" />
      </div>

      <div class="s_hidden s_row_2 clearfix">
        <label><?php echo $entry_company; ?></label>
        <input type="text" name="company" value="Компания" size="30" />
      </div>

      <div class="s_hidden s_row_2 clearfix"<?php if (!count($customer_groups) > 1): ?> style="display: none"<?php endif; ?>>
        <label><?php echo $entry_customer_group; ?></label>
        <select name="customer_group_id" class="large-field">
          <?php foreach ($customer_groups as $customer_group): ?>
          <?php if ($customer_group['customer_group_id'] == $customer_group_id): ?>
          <option value="<?php echo $customer_group['customer_group_id']; ?>" selected="selected"><?php echo $customer_group['name']; ?></option>
          <?php else: ?>
          <option value="<?php echo $customer_group['customer_group_id']; ?>"><?php echo $customer_group['name']; ?></option>
          <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div id="company-id-display" class="s_hidden s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_company_id; ?></label>
        <input type="text" name="company_id" value="" size="30" errorTitle="<?php echo $this->language->get('error_company_id'); ?>" />
      </div>

      <div id="tax-id-display" class="s_hidden s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_tax_id; ?></label>
        <input type="text" name="tax_id" value="" size="30" errorTitle="<?php echo $this->language->get('error_tax_id'); ?>" />
      </div>

      <span class="clear s_sep"></span>
      
    </div>

    <div class="left s_1_2">

      <h2><?php echo $text_your_address; ?></h2>

      <div class="s_hidden s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_address_1; ?></label>
        <input type="text" name="address_1" value="blanc_adress" size="30" class="required" title="<?php echo $this->language->get('error_address_1'); ?>" />
      </div>

      <div class="s_hidden s_row_2 clearfix">
        <label><?php echo $entry_address_2; ?></label>
        <input type="text" name="address_2" value="" size="30" />
      </div>

      <div class="s_hidden s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_city; ?></label>
        <input type="text" name="city" value="Chernihiv" size="30" class="required" title="<?php echo $this->language->get('error_city'); ?>" />
      </div>

      <div class="s_hidden postcode_div s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_postcode; ?></label>
        <input type="text" name="postcode" value="<?php echo $postcode; ?>" size="30" title="<?php echo $this->language->get('error_postcode'); ?>" />
      </div>

      <div class=s_hidden "s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_country; ?></label>
        <select id="country_id" name="country_id" class="required" title="<?php echo $this->language->get('error_country'); ?>">
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

      <div class="s_row_2 s_sep clearfix">
        <label><strong class="s_red">*</strong> Выберите ваш город:</label>
        <select id="zone_id" name="zone_id" class="required" title="<?php echo $this->language->get('error_zone'); ?>"></select>
      </div>

    </div>


    <span class="clear s_sep border_eee"></span>


    <div class="left s_1_2">
      <h2><?php echo $text_your_password; ?></h2>

      <div class="s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_password; ?></label>
        <input type="password" name="password" id="password" value="" class="required" size="30" title="<?php echo $this->language->get('error_password'); ?>" />
      </div>

      <div class="s_row_2 clearfix">
        <label><strong class="s_red">*</strong> <?php echo $entry_confirm; ?></label>
        <input type="password" name="confirm" id="confirm" value="" class="required" size="30" title="<?php echo $this->language->get('error_password'); ?>" />
      </div>

      <span class="clear s_sep"></span>
    </div>
    <div class="left s_1_2">
    	<h2>Подтвердите соглачие на регистрацию:</h2>

    	<div class="s_row_2 s_sep clearfix">
        <label class="s_checkbox" for="newsletter"><input type="checkbox" name="newsletter" value="1" id="newsletter" /> <?php echo $entry_newsletter; ?></label>
        <?php if ($shipping_required): ?>
        <span class="clear"></span>
        <label class="s_checkbox" for="shipping"><input type="checkbox" name="shipping_address" value="1" id="shipping" checked="checked" /> <?php echo $entry_shipping; ?></label>
        <?php endif; ?>
        <?php if ($text_agree): ?>
        <label class="s_checkbox left"><input type="checkbox" name="agree" value="1" class="required" title="<?php echo $tbData->text_error_required; ?>" /> <?php echo $tbData->text_account_agree; ?></label>
        <?php endif; ?>
      </div></div>

  </form>

  <span class="clear s_sep border_eee"></span>

  <div class="s_submit clearfix">
    <a id="button-register" class="s_button_1 s_main_color_bgr"><span class="s_text"><?php echo $button_continue; ?></span></a>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $("#register_details_form").validate({
      rules: {
        password: {
          required: true,
          minlength: 4
        },
        confirm: {
          required: function(element) {
            var str = $("#password").val();

            return str.length > 0;
          },
          minlength: 4,
          equalTo: "#password"
        }
      },
      messages: {
        confirm: {
          equalTo: "<?php echo $tbData->text_error_password_match; ?>"
        }
      }
    });
  });

  jQuery( function($) {
    $("a[rel^='prettyPhoto']").prettyPhoto({
      theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
      opacity: 0.5,
      social_tools: "",
      deeplinking: false
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#payment-address select[name=\'customer_group_id\']').bind('change', function() {
      var customer_group = [];

      <?php foreach ($customer_groups as $customer_group): ?>
      customer_group[<?php echo $customer_group['customer_group_id']; ?>] = [];
      customer_group[<?php echo $customer_group['customer_group_id']; ?>]['company_id_display']  = '<?php echo $customer_group['company_id_display']; ?>';
      customer_group[<?php echo $customer_group['customer_group_id']; ?>]['company_id_required'] = '<?php echo $customer_group['company_id_required']; ?>';
      customer_group[<?php echo $customer_group['customer_group_id']; ?>]['tax_id_display']      = '<?php echo $customer_group['tax_id_display']; ?>';
      customer_group[<?php echo $customer_group['customer_group_id']; ?>]['tax_id_required']     = '<?php echo $customer_group['tax_id_required']; ?>';
      <?php endforeach; ?>

      if (customer_group[this.value]) {
        if (customer_group[this.value]['company_id_display'] == '1') {
          $('#company-id-display').show();
        } else {
          $('#company-id-display').hide();
        }

        if (customer_group[this.value]['company_id_required'] == '1') {
          $('#company-id-display strong.s_red').show();
        } else {
          $('#company-id-display strong.s_red').hide();
        }

        if (customer_group[this.value]['company_id_display'] == '1' && customer_group[this.value]['company_id_required'] == '1') {
          $('#company-id-display input').removeClass("required").addClass("required").attr("title", $('#company-id-display input').attr("errorTitle"));
        } else
        if (customer_group[this.value]['company_id_display'] != '1' || customer_group[this.value]['company_id_required'] != '1') {
          $('#company-id-display input').removeClass("required").removeAttr("title");
          $("#register_details_form").validate().element("#company-id-display input");
        }

        if (customer_group[this.value]['tax_id_display'] == '1') {
          $('#tax-id-display').show();
        } else {
          $('#tax-id-display').hide();
        }

        if (customer_group[this.value]['tax_id_required'] == '1') {
          $('#tax-id-display strong.s_red').show();
        } else {
          $('#tax-id-display strong.s_red').hide();
        }

        if (customer_group[this.value]['tax_id_display'] == '1' && customer_group[this.value]['tax_id_required'] == '1') {
          $('#tax-id-display input').removeClass("required").addClass("required").attr("title", $('#tax-id-display input').attr("errorTitle"));
        } else
        if (customer_group[this.value]['tax_id_display'] != '1' || customer_group[this.value]['tax_id_required'] != '1') {
          $('#tax-id-display input').removeClass("required").removeAttr("title");
          $("#register_details_form").validate().element("#tax-id-display input");
        }
      }
    });

    $('#payment-address select[name=\'customer_group_id\']').trigger('change');

    $('#payment-address select[name=\'country_id\']').bind('change', function(event, first_time) {
      $.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
          $('#payment-address select[name=\'country_id\']').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
        },
        complete: function() {
          $('.wait').remove();
        },
        success: function(json) {
          if (json['postcode_required'] == '1') {
            $('#register_details_form .postcode_div .s_red').show();
            $('#register_details_form input[name=\'postcode\']').removeClass("required").addClass("required");
          } else {
            $('#register_details_form .postcode_div .s_red').hide();
            $('#register_details_form input[name=\'postcode\']').removeClass("required");
            if(typeof first_time === "undefined") {
              $("#register_details_form").validate().element('#register_details_form input[name="postcode"]');
            }
          }

          var html = '<option value=""><?php echo $text_select; ?></option>';
          var selected = false;
          if (json['zone'] && json['zone'] != '') {
            for (i = 0; i < json['zone'].length; i++) {
              html += '<option value="' + json['zone'][i]['zone_id'] + '"';

              if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
                html += ' selected="selected"';
                selected = true;
              }

              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
          }

          $('#payment-address select[name=\'zone_id\']').html(html);
          if(typeof first_time === "undefined" && selected) {
            $("#register_details_form").validate().element('#register_details_form select[name="zone_id"]');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    });

    $('#payment-address select[name=\'country_id\']').trigger('change', ['first_time']);
  });
  </script>
  
  