<?php
class ModelModuleBounce extends Model {

public function bounceMain($price,$product,$user,$clicked,$paid) {
	global $settings,$stats,$users;	
	$settings = $this->model_module_bounce->bounceGetSettings();
	$stats = $this->model_module_bounce->bounceGetStats();
	$vhod = $this->model_module_bounce->bounceGetVhod($price,$settings);
	$gen_min = $vhod;
	$clickprice = 0;
	$price_gen = 0;
	$btime = time();
	if ($paid) {				//paid click?
		if ($user == "guest") return "Register";
		$clickprice = $this->model_module_bounce->bounceGetClick($price,$settings);
		if ($this->customer->balance() < $clickprice) return "?$";
		$this->model_module_bounce->bounceMinus($clickprice);
		$settings['balance'] += $clickprice;
		$gen_min = 1;
	}
	$users = $this->model_module_bounce->bounceGetUsers(); 
	if ($user == "guest") {
		$users = '';
		if (isset($this->session->data['bounce'])) $users = $this->session->data['bounce'];}
	if (!$clicked){
		if (isset($users[$user . "_" . $product]))	{
			if ($btime-$users[$user . "_" . $product][count($users[$user . "_" . $product])-1][0]<1800)
				{
					if (count($users[$user . "_" . $product])>1 && $users[$user . "_" . $product][count($users[$user . "_" . $product])-2][1] != "bought") $price_gen=$users[$user . "_" . $product][count($users[$user . "_" . $product])-1][1];
					else {
						$price_gen=$this->model_module_bounce->bounceApply($gen_min,$price,$vhod,$user,$product,$btime,$clickprice,$paid);
					}
				}						
			else {
				$price_gen=$this->model_module_bounce->bounceApply($gen_min,$price,$vhod,$user,$product,$btime,$clickprice,$paid);
				}
			}
		else {
			$price_gen=$this->model_module_bounce->bounceApply($gen_min,$price,$vhod,$user,$product,$btime,$clickprice,$paid);
		}								
	}
	else {
		$price_gen=$this->model_module_bounce->bounceApply($gen_min,$price,$vhod,$user,$product,$btime,$clickprice,$paid);
	}		
	return $price_gen;
}

public function bounceApply($gen_min,$price,$vhod,$user,$product,$btime,$clickprice,$paid) {   
	global $stats,$users,$settings;
	$price_gen = 0;
	while (!$price_gen) $price_gen = $this->model_module_bounce->bounceGenPrice($gen_min,$price,$vhod);
	$stats[$settings['total_count']]=array($user,$product,$price,$vhod,$btime,$clickprice,$price_gen);
	$users[$user . "_" . $product][]=array($btime,$price_gen,$clickprice);
	$this->model_module_bounce->bounceSave($settings, $stats, $users, $user);
	return $price_gen;
}

public function bounceGetSettings() {   //загружаем настройки скакуна
	$data = array(); 

	$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bounce");

	foreach ($query->rows as $result) {
		$data[$result['key']] = $result['value'];
	}

	return $data;
}

public function bounceGetUsers() {   //загружаем настройки скакуна
	$data = array(); 

	$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bounce_users");

	foreach ($query->rows as $result) {
		$data[$result['keysd']] = unserialize($result['valuesd']);
	}

	return $data;
}

public function bounceGetStats() {   //загружаем настройки скакуна
	$data = array(); 
	$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bounce_stats");

	foreach ($query->rows as $result) {
		$data[$result['Num']] = array($result['User'],$result['Item'],$result['Price'],$result['Vhod'],$result['Time'],$result['ClickPrice'],$result['SoldFor'],$result['Clicks']);
	}

	return $data;
}

public function bounceSave($settings, $stats, $users, $user) {  //сохраняем настройки баунса
	foreach ($settings as $key => $value) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "bounce WHERE `key` = '" . $key . "'");
		$this->db->query("INSERT INTO " . DB_PREFIX . "bounce SET `key` = '" . $key . "', `value` = '" . $value . "'");
		}
	foreach ($stats as $key => $value) {
		if (!isset($value[7])) $value[7] = 0;
		$this->db->query("DELETE FROM " . DB_PREFIX . "bounce_stats WHERE `Num` = '" . $key . "'");
		$this->db->query("INSERT INTO " . DB_PREFIX . "bounce_stats SET `Num` = '" . $key . "', `User` = '" . $value[0] . "', `Item` = '" . $value[1] . "', `Price` = '" . $value[2] . "', `Vhod` = '" . $value[3] . "', `Time` = '" . $value[4] . "', `ClickPrice` = '" . $value[5] . "', `SoldFor` = '" . $value[6] . "', `Clicks` = '" . $value[7] . "'");
		}
	foreach ($users as $key => $value) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "bounce_users WHERE `keysd` = '" . $key . "'");
		$this->db->query("INSERT INTO " . DB_PREFIX . "bounce_users SET `keysd` = '" . $key . "', `valuesd` = '" . serialize($value) . "'");
		}
	if ($user == "guest")  $this->session->data['bounce'] = $users;
}

public function bounceGetVhod($price,$settings) {
	if 		($price<50)    $vhod = $price/$settings['l50_multi'];
    else if ($price<100)   $vhod = $price/$settings['l100_multi'];
    else if ($price<150)   $vhod = $price/$settings['l150_multi'];
    else if ($price<500)   $vhod = $price/$settings['l500_multi'];
    else if ($price<1000)   $vhod = $price/$settings['l1000_multi'];
    else if ($price<2000)  $vhod = $price/$settings['l2000_multi'];
    else if ($price<4000)  $vhod = $price/$settings['l4000_multi'];
    else if ($price<8000) $vhod = $price/$settings['l8000_multi'];
    else if ($price<12000)  $vhod = $price/$settings['l12000_multi'];
    else if ($price<16000)  $vhod = $price/$settings['l16000_multi'];
    else 				 $vhod = $price/$settings['l99999_multi'];
    return round($vhod,-0.5);
}

public function bounceGetClick($price,$settings) {
	if 		($price<50)    $clickprice = $settings['l50_click'];
    else if ($price<100)   $clickprice = $settings['l100_click'];
    else if ($price<150)   $clickprice = $settings['l150_click'];
    else if ($price<500)   $clickprice = $settings['l500_click'];
    else if ($price<1000)   $clickprice = $settings['l1000_click'];
    else if ($price<2000)  $clickprice = $settings['l2000_click'];
    else if ($price<4000)  $clickprice = $settings['l4000_click'];
    else if ($price<8000) $clickprice = $settings['l8000_click'];
    else if ($price<12000)  $clickprice = $settings['l12000_click'];
    else if ($price<16000)  $clickprice = $settings['l16000_click'];
    else 				 $clickprice = $settings['l99999_click'];
    return $clickprice;
}

public function bounceCheck($count_to_check,$settings) {
	if ($settings[$count_to_check . "_count"]/$settings['total_count'] < $settings[$count_to_check . "_freq"]) return True;
	else return False;
}

public function bouncePlus($count_to_plus) {
	global $settings;
	$settings[$count_to_plus . "_count"]++;
	$settings['total_count']++;
}

public function bounceMinus($clickprice) {
	$total = $this->customer->balance() - $clickprice;
	$this->db->query("UPDATE " . DB_PREFIX . "customer SET balance = '" . $total . "' WHERE customer_id = '" . $this->customer->getId() . "'");
}

public function bounceGenPrice($min,$max,$vhod) {
	global $settings;
	$gen_p = rand($min,$max);
	if ($gen_p>=$vhod) {
		$p_ratio = ($gen_p-$vhod)/($max-$vhod); //если цена не в минус то считаем от наценки
		if ($p_ratio<$settings['zero_profit']) {		//именно тут меняем для какого размера цены какое правило вероятности применять
			if ($this->model_module_bounce->bounceCheck('zero',$settings)) {						//тут правило zero для продажи в ноль
				$this->model_module_bounce->bouncePlus('zero');
				return $gen_p;
			}}
		else if ($p_ratio<$settings['p14_profit']) {
			if ($this->model_module_bounce->bounceCheck('p14',$settings)) {
				$this->model_module_bounce->bouncePlus('p14');
				$stats[$settings['total_count']]=$gen_p;
				
				return $gen_p;
			}}
		else if ($p_ratio<$settings['p12_profit']) {
			if ($this->model_module_bounce->bounceCheck('p12',$settings)) {
				$this->model_module_bounce->bouncePlus('p12');
				return $gen_p;
			}}
		else if ($p_ratio<$settings['p34_profit']) {
			if ($this->model_module_bounce->bounceCheck('p34',$settings)) {
				$this->model_module_bounce->bouncePlus('p34');
				return $gen_p;
			}}
		else {
			$this->model_module_bounce->bouncePlus('full');
			return $gen_p;
			}}
	else {
		$p_ratio = -($gen_p/$vhod);				//если в минус то от ОБЩЕЙ ЦЕНЫ товара, иначе пи№*ец
		if ($p_ratio>$settings['min_profit']) {	//именно тут меняем для какого размера цены какое правило вероятности применять
			if ($this->model_module_bounce->bounceCheck('min',$settings)) {		//тут правило min для продажи в минус размером 0.55 о
				$this->model_module_bounce->bouncePlus('min');	//check проверяет не много ли в минус продаем от общего количества 
				return $gen_p;
			}}
		else if ($p_ratio>$settings['m12_profit']) {
			if ($this->model_module_bounce->bounceCheck('m12',$settings)) {
				$this->model_module_bounce->bouncePlus('m12');
				return $gen_p;
			}}		
		else if ($p_ratio>$settings['m14_profit']) {
			if ($this->model_module_bounce->bounceCheck('m14',$settings)) {
				$this->model_module_bounce->bouncePlus('m14');
				return $gen_p;
			}}
		else {
				if ($this->model_module_bounce->bounceCheck('zero',$settings)) {
				$this->model_module_bounce->bouncePlus('zero');
				return $gen_p;
			}}}
	}
}
?>