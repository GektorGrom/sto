<?php echo $header; ?>
<div id="content">
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <?php if ($error_warning) { ?>
  <div class="warning"><?php echo $error_warning; ?></div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="success"><?php echo $success; ?></div>
  <?php } ?>
  <div class="box">
    <div class="heading">
      <h1>Скакун</h1>
      <div class="buttons"><a onclick="$('#form').submit();" class="button">Сохранить</a><a onclick="location = '<?php echo $cancel; ?>';" class="button">Отмена</a></div>
    </div>
    <div class="content">
    <div id="tabs" class="htabs"><a href="#tab-general">Настройки</a><a href="#tab-stats">Статистика</a></div>
	<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
          <div id="tab-general">
          <h1>Настройки</h1>
          <table class="form">            
			<tr>
              <td><b>Всего кликов - <?php echo $bounce['total_count']-1; ?></b></td>
			  <td><b>Наш баланс - <?php echo $bounce['balance']*0.3; ?> грн.</b></td>
			  <td><b>Баланс партнера - <?php echo $bounce['balance']*0.7; ?> грн.</b></td>
            </tr>
			<tr> <td></td><td></td><td></td><td></td></tr>
			<tr>
              <td><b>Название счетчика</b></td>
              <td><b>Срабатываний</b></td>
			  <td><b>Соотв. часть наценки</b></td>
			  <td><b>Вероятность появления</b></td> 
            </tr>
            <tr>
              <td>Самый большой минус min</td>
			  <td><?php echo $bounce['min_count']; ?></td>
              <td><input type="text" name="min_profit" value="<?php echo $bounce['min_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="min_freq" value="<?php echo $bounce['min_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>В минус 1/2 цены m12</td>
			  <td><?php echo $bounce['m12_count']; ?></td>
              <td><input type="text" name="m12_profit" value="<?php echo $bounce['m12_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="m12_freq" value="<?php echo $bounce['m12_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>В минус 1/4 цены m14</td>
			  <td><?php echo $bounce['m14_count']; ?></td>
              <td><input type="text" name="m14_profit" value="<?php echo $bounce['m14_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="m14_freq" value="<?php echo $bounce['m14_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>В ноль zero</td>
			  <td><?php echo $bounce['zero_count']; ?></td>
              <td><input type="text" name="zero_profit" value="<?php echo $bounce['zero_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="zero_freq" value="<?php echo $bounce['zero_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>Четверть наценки 14</td>
			  <td><?php echo $bounce['p14_count']; ?></td>
              <td><input type="text" name="p14_profit" value="<?php echo $bounce['p14_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="p14_freq" value="<?php echo $bounce['p14_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>Половина наценки 12</td>
			  <td><?php echo $bounce['p12_count']; ?></td>
              <td><input type="text" name="p12_profit" value="<?php echo $bounce['p12_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="p12_freq" value="<?php echo $bounce['p12_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>Три четверти наценки 34</td>
			  <td><?php echo $bounce['p34_count']; ?></td>
              <td><input type="text" name="p34_profit" value="<?php echo $bounce['p34_profit']; ?>" size="10" /></td>
			  <td><input type="text" name="p34_freq" value="<?php echo $bounce['p34_freq']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>Полная наценка full</td>
			  <td><?php echo $bounce['full_count']; ?></td>
              <td></td>
			  <td><input type="text" name="full_freq" value="<?php echo $bounce['full_freq']; ?>" size="10" /></td>
            </tr>
			<tr> <td></td> <td></td> <td></td> </tr>
			<tr>
              <td><b>Цена до </b></td>
              <td><b>Наценка в Х раз</b></td>
			  <td><b>Стоимость клика</b></td>
            </tr>
			<tr>
              <td>50 грн</td>
			  <td><input type="text" name="l50_multi" value="<?php echo $bounce['l50_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l50_click" value="<?php echo $bounce['l50_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>100 грн</td>
			  <td><input type="text" name="l100_multi" value="<?php echo $bounce['l100_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l100_click" value="<?php echo $bounce['l100_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>150 грн</td>
			  <td><input type="text" name="l150_multi" value="<?php echo $bounce['l150_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l150_click" value="<?php echo $bounce['l150_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>500 грн</td>
			  <td><input type="text" name="l150_multi" value="<?php echo $bounce['l150_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l150_click" value="<?php echo $bounce['l150_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>1000 грн</td>
			  <td><input type="text" name="l1000_multi" value="<?php echo $bounce['l1000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l1000_click" value="<?php echo $bounce['l1000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>2000 грн</td>
			  <td><input type="text" name="l2000_multi" value="<?php echo $bounce['l2000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l2000_click" value="<?php echo $bounce['l2000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>4000 грн</td>
			  <td><input type="text" name="l4000_multi" value="<?php echo $bounce['l4000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l4000_click" value="<?php echo $bounce['l4000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>8000 грн</td>
			  <td><input type="text" name="l8000_multi" value="<?php echo $bounce['l8000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l8000_click" value="<?php echo $bounce['l8000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>12000 грн</td>
			  <td><input type="text" name="l12000_multi" value="<?php echo $bounce['l12000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l12000_click" value="<?php echo $bounce['l12000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>16000 грн</td>
			  <td><input type="text" name="l16000_multi" value="<?php echo $bounce['l16000_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l16000_click" value="<?php echo $bounce['l16000_click']; ?>" size="10" /></td>
            </tr>
			<tr>
              <td>>16000 грн</td>
			  <td><input type="text" name="l99999_multi" value="<?php echo $bounce['l99999_multi']; ?>" size="10" /></td>
			  <td><input type="text" name="l99999_click" value="<?php echo $bounce['l99999_click']; ?>" size="10" /></td>
            </tr>
			<tr>
			  <td></td><td></td><td></td><td></td>
			  <td></td><td></td><td></td><td></td>
            </tr>
            <tr>
			  <td></td><td></td><td></td><td></td>
			  <td></td><td></td><td></td><td></td>
            </tr>
        </table>
        
        </div>
        <div id="tab-stats">
        <h1>Статистика</h1>
        <table class="list">
            <tr>
              <td><b>Всего кликов - <?php echo $bounce['total_count']-1; ?></b></td>
			  <td><b>Наш баланс - <?php echo $bounce['balance']*0.3; ?> грн.</b></td>
			  <td><b>Баланс партнера - <?php echo $bounce['balance']*0.7; ?> грн.</b></td>
            </tr>
        </table>
        <table class="list">  
			<thead>
			<tr>
              <td>Номер</td>
              <td>Время</td>
			  <td>Товар</td>
			  <td>Клиент</td>
			  <td>Цена</td>
			  <td>Вход</td>
			  <td>Его цена</td>
			  <td>Кол-во и цена кликов</td>
			  <td>С продажи + на кликах с уч. % = Всего</td>
			  <td>Разница с обычной продажей</td>
            </tr>
            </thead>
            <tbody>
            <?php if ($stats) { ?>
            <?php foreach ($stats as $click) { ?>
            <tr>
              <td class="center"><?php echo $click[0]; ?></td>
              <td class="center"><?php echo gmdate("d.m.y H:m:s", $click[5]); ?></td>
			  <td class="center"><a href="http://1na100.jesse.co.ua/index.php?route=product/product&product_id=<?php echo $click[2]; ?>"><?php echo $click[2]; ?></a></td>
			  <td class="center"><a href="http://1na100.jesse.co.ua/admin/index.php?route=sale/customer/update&customer_id=<?php echo $click[1]; ?>&token=<?php echo $token; ?>"><?php echo $click[1]; ?></a></td>
			  <td class="center"><?php echo $click[3]; ?></td>
			  <td class="center"><?php echo $click[4]; ?></td>
			  <td class="center"><?php echo $click[7]; ?></td>
        <?php if ($click[8]<0) { ?>
			      <td class="center">В корзину за <?php echo -$click[8]; ?> клик(ов) по <?php echo $click[6]; ?> грн. = <?php echo -$click[8]*$click[6]; ?> грн.</td>
          <?php if ($click[6]==0) { ?>
                <td class="center"> -- </td>
                <td class="center"> -- </td>
          <?php } else {?>
            <td class="center">0 + <?php echo abs($click[8])*$click[6]*0.7; ?> = Всего <?php echo abs($click[8])*$click[6]*0.7; ?> грн.</td>
            <td class="center"><?php echo abs($click[8])*$click[6]*0.7; ?> грн.</td>
          <?php } ?>
			  <?php } if (!$click[8]) { ?>
            <td class="center"> -- </td>
            <td class="center"> -- </td>
            <td class="center"> -- </td>
        <?php } if ($click[8]>0) { ?>
            <td class="center">Продался за <?php echo $click[8]; ?> клик(ов) по <?php echo $click[6]; ?> грн. = <?php echo $click[8]*$click[6]; ?> грн.</td>
            <td class="center"><?php echo $click[7]-$click[4]; ?> грн. + <?php echo abs($click[8])*$click[6]*0.7; ?> = Всего <?php echo $click[7]-$click[4]+abs($click[8])*$click[6]*0.7; ?> грн.</td>
            <td class="center"><?php echo $click[7]-$click[4]+abs($click[8])*$click[6]*0.7-($click[3]-$click[4]); ?> грн.</td>

        <?php } ?>

            <?php } ?>
            <?php } else { ?>
            </tr>
              <td class="center" colspan="8">Нет данных</td>
            </tr>
            <?php } ?>
			     </tbody>
        </table>
        </form>
        <div class="pagination"><?php echo $pagination; ?></div>
		</div>
        </div> 
 <script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script> 
