<?php
################################################################################################
#  DIY Module Builder for Opencart 1.5.1.x From HostJars http://opencart.hostjars.com    	   #
################################################################################################
class ModelModuleBounce extends Model {
	public function getSetting() {
		$bounce_arr = array(); 
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bounce");
		
		foreach ($query->rows as $result) {
			$bounce_arr[$result['key']] = $result['value'];
		}

		return $bounce_arr;
	}

	public function getStats() {
		$stats_arr = array(); 
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bounce_stats");
		
		foreach ($query->rows as $result) {
		$stats_arr[] = array($result['Num'],$result['User'],$result['Item'],$result['Price'],$result['Vhod'],$result['Time'],$result['ClickPrice'],$result['SoldFor'],$result['Clicks']);
		}

		return $stats_arr;
	}

	public function editSetting($data) {
		foreach ($data as $key => $value) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "bounce WHERE `key` = '" . $key . "'");
			$this->db->query("INSERT INTO " . DB_PREFIX . "bounce SET `key` = '" . $key . "', `value` = '" . $value . "'");
			}
    }
	
	public function deleteSetting() {
		$this->db->query("DELETE FROM " . DB_PREFIX . "bounce");
	}
}
?>