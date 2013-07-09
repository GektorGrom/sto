<h2 class="s_title_1"><span>Быстрый вход и регистрация</span></h2>
          <div class="s_row_3 clearfix">
            <p>Вы можете легко войти или автоматически зарегистрироваться на сайте, используя данные вашей четной записи из социальных сетей или популярных сервисов кликнув по кнопке. Обычная регистрация и вход доступны ниже.</p>
          </div>
          <center><a href="#" id="uLogin" data-ulogin="display=window;fields=first_name,last_name;redirect_uri=<? echo $action_ulogin; ?>"><img src="http://ulogin.ru/img/button.png" width=187 height=30 alt="МультиВход"/></a></center>
          <p>&nbsp;</p>
          <span class="clear s_sep border_ddd"></span>
<div class="s_2col_wrap clearfix">

  <div class="s_col s_1_2">
    <h2 class="s_title_1"><span><?php echo $text_new_customer; ?></span></h2>
    <div class="s_row_3 s_h_170 clearfix">
      <!-- <p class="s_mb_10"><?php echo $text_checkout; ?></p>
      <label class="s_radio" for="register">
        <?php if ($account == 'register'): ?>
        <input type="radio" name="account" value="register" id="register" checked="checked" />
        <?php else: ?>
        <input type="radio" name="account" value="register" id="register" />
        <?php endif; ?>
        <strong><?php echo $text_register; ?></strong>
      </label> -->
     <!--  <?php if ($guest_checkout): ?>
      <span class="clear"></span>
      <label class="s_radio" for="guest">
        <?php if ($account == 'guest'): ?>
        <input type="radio" name="account" value="guest" id="guest" checked="checked" />
        <?php else: ?>
        <input type="radio" name="account" value="guest" id="guest" />
        <?php endif; ?>
        <strong><?php echo $text_guest; ?></strong>
      </label>
      <?php endif; ?> -->
      <span class="clear s_mb_10"></span>
      <p class="s_mb_10"><?php echo $text_register_account; ?></p>
    </div>
    <span class="clear border_ddd s_sep"></span>
    <div class="s_submit clearfix">
      <a id="button-account" class="s_button_1 s_main_color_bgr"><span class="s_text"><?php echo $button_continue; ?></span></a>
    </div>
  </div>

  <div class="s_col s_1_2">
    <h2 class="s_title_1"><span>Существующий клиент</span></h2>
    <form id="returning_customer_login" class="login_page clearfix">
      <div class="s_row_3 clearfix">
        <?php echo $text_i_am_returning_customer; ?><br /><br />
        <label><strong><?php echo $entry_email; ?></strong></label>
        <input type="text" name="email" size="35" class="required email" title="<?php echo $tbData->text_error_email ?>" />
      </div>
      <div class="s_row_3 clearfix">
        <span class="clear"></span>
        <label><strong><?php echo $entry_password; ?></strong></label>
        <input type="password" name="password" size="35" class="required" title="<?php echo $tbData->text_error_password ?>" />
        <br />
      </div>
    </form>
    <span class="clear border_ddd s_sep"></span>
    <div class="s_submit clearfix">
      <div class="s_nav s_size_2 left">
        <ul class="s_mb_0 clearfix">
          <li><a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a></li>
        </ul>
      </div>
      <a id="button-login" class="s_button_1 s_main_color_bgr"><span class="s_text"><?php echo $button_login; ?></span></a>
    </div>

  </div>

</div>


<div class="clear"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#returning_customer_login").validate();
    $("#returning_customer_login input").bind("keypress", function(event) {
      if (event.which == 13) {
        event.preventDefault();
        $('#button-login').trigger("click");
      }
    });
  });
</script>
<script src="http://ulogin.ru/js/ulogin.js"></script>