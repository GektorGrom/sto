<?php
class ModelToolUlogin extends Model {
	function check_identity($identity) {
		$query = $this->db->query("
			SELECT customer_id
			FROM " . DB_PREFIX . "customer
			WHERE identity = '". $this->db->escape($identity) ."'"
		);

		if ($query->num_rows) {
			return $query->row['customer_id'];
		} else {
			return false;
		}
	}
        
        public function addAddress($data, $customer_id) {
		 $this->db->query("INSERT INTO " . DB_PREFIX . "address SET customer_id = '" . (int)$customer_id . "', company = 'a', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', address_1 = 'a', address_2 = 'a', postcode = '14000', city = 'c', zone_id = '3486', country_id = '380'");
		
		$address_id = $this->db->getLastId();
		
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
		
		echo $this->customer->getId();
		return $address_id;
	}
        
	// public function add_customer($data) {
	// 	$this->db->query("INSERT INTO " . DB_PREFIX . "customer (identity, firstname, lastname, email, telephone, fax, newsletter, customer_group_id, password, status, date_added, approved) VALUES ('" . $this->db->escape($data['identity']) . "', '" . $this->db->escape($data['firstname']) . "', '" . $this->db->escape($data['lastname']) . "', '" . $this->db->escape($data['email']) . "', '', '', '0', '6', '" . $this->db->escape(md5($data['password'])) . "', '1', NOW(), '1')");

	// 	return $this->db->getLastId(); // customer_id
		
	// }

	public function add_customer($data) {
	if (isset($data['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($data['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $data['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}
		
		$this->load->model('account/customer_group');
		
		$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
		
      	$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET identity = '" . $this->db->escape($data['identity']) . "', store_id = '" . (int)$this->config->get('config_store_id') . "', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', email = '" . $this->db->escape($data['email']) . "', telephone = '555555', fax = '555555', password = '" . $this->db->escape(md5($data['password'])) . "', newsletter = '0', customer_group_id = '" . (int)$customer_group_id . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = '1', approved = '" . (int)!$customer_group_info['approval'] . "', date_added = NOW()");
      	
		$customer_id = $this->db->getLastId();
		
		//bounce
		if (isset($this->session->data['bounce'])) {
		foreach ($this->session->data['bounce'] as $key=>$value) {
			$pieces=explode("_", $key);
			$this->db->query("INSERT INTO " . DB_PREFIX . "bounce_users SET keysd = '" . $customer_id . "_" . $pieces[1] . "', valuesd = '" . serialize($value) . "'");
		}
		}
		
		
		return $customer_id;
	}
	
	public function login($customer_id) {
		$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "' AND status = '1'");
		
		
		if ($customer_query->num_rows) {
			$this->session->data['customer_id'] = $customer_query->row['customer_id'];	
		    
			if ($customer_query->row['cart'] && is_string($customer_query->row['cart'])) {
				$cart = unserialize($customer_query->row['cart']);
				
				foreach ($cart as $key => $value) {
					if (!array_key_exists($key, $this->session->data['cart'])) {
						$this->session->data['cart'][$key] = $value;
					} else {
						$this->session->data['cart'][$key] += $value;
					}
				}			
			}

			if ($customer_query->row['wishlist'] && is_string($customer_query->row['wishlist'])) {
				if (!isset($this->session->data['wishlist'])) {
					$this->session->data['wishlist'] = array();
				}
								
				$wishlist = unserialize($customer_query->row['wishlist']);
			
				foreach ($wishlist as $product_id) {
					if (!in_array($product_id, $this->session->data['wishlist'])) {
						$this->session->data['wishlist'][] = $product_id;
					}
				}			
			}
									
			$this->customer_id = $customer_query->row['customer_id'];
			$this->firstname = $customer_query->row['firstname'];
			$this->lastname = $customer_query->row['lastname'];
			$this->email = $customer_query->row['email'];
			$this->telephone = $customer_query->row['telephone'];
			$this->fax = $customer_query->row['fax'];
			$this->newsletter = $customer_query->row['newsletter'];
			$this->customer_group_id = $customer_query->row['customer_group_id'];
			$this->address_id = $customer_query->row['address_id'];
			$this->balance = $customer_query->row['balance'];
          	
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "' WHERE customer_id = '" . (int)$this->customer_id . "'");
			//bounce
			if (array_key_exists('bounce', $this->session->data)) {
				foreach ($this->session->data['bounce'] as $key=>$value) {
					$pieces=explode("_", $key);
					foreach ($value as $troika) {
						$this->db->query("UPDATE " . DB_PREFIX . "bounce_stats SET User = '" . $this->customer_id . "' WHERE User  = '0' AND Time = '" . $troika[0] . "'");
					}
				}
			}

	  		return true;
    	} else {
      		return false;
    }
}
}
?>
