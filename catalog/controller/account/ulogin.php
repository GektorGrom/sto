<?php 
class ControllerAccountUlogin extends Controller { 
	public function index() {
            
            
            
            $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
            $user = json_decode($s, true);
            //$user['network'] - соц. сеть, через которую авторизовался пользователь
            //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
            //$user['first_name'] - имя пользователя
            //$user['last_name'] - фамилия пользователя

            // получаем данные о пользователе с сервера uLogin
		if (!isset($user['identity'])) {
			die('Ошибка: ' . $uloginUserInfo->error_message);
		}
		
		if (isset($user['first_name']) && $user['first_name']) {
			$firstname = $user['first_name'];
		} else {
			$firstname = '';
		}
		
		if (isset($user['last_name']) && $user['last_name']) {
			$lastname = $user['last_name'];
		} else {
			$lastname = '';
		}
		
		if (isset($user['email']) && $user['email']) {
			$email = $user['email'];
		} else {
			$email = '';
		}

                
		$this->load->model('tool/ulogin');
       //         echo $user['last_name'];
		$check_id = $this->model_tool_ulogin->check_identity($user['identity']);
		If (!$check_id) {
			// регистрируем
			 
			$data = array(
				'identity' => $user['identity'],
				'firstname' => $firstname,
				'lastname' => $lastname,
				'email' => $email,
				'customer_group_id' => $this->config->get('config_customer_group_id'),
				'password' => $this->generate_password(10) // сгенерировать бы чего нить
			);
			$customer_id=$this->model_tool_ulogin->add_customer($data);
			$this->model_tool_ulogin->login($customer_id);
                        $this->model_tool_ulogin->addAddress($data, $customer_id);
						 $mail = new Mail();
						  $mail->protocol = $this->config->get('config_mail_protocol');
						  $mail->parameter = $this->config->get('config_mail_parameter');
						  $mail->hostname = $this->config->get('config_smtp_host');
						  $mail->username = $this->config->get('config_smtp_username');
						  $mail->password = $this->config->get('config_smtp_password');
						  $mail->port = $this->config->get('config_smtp_port');
						  $mail->timeout = $this->config->get('config_smtp_timeout');
						  $mail->setSubject('Кто-то зарегался через Ulogin');
						  $mail->setSender($this->config->get('config_email'));
						  $text = 'Новый пользователь: '.$data['identity'].'. Имя: '.$data['firstname'].' '.$data['lastname'].'. Email: '.$data['email'].' Пароль: '.$data['password'];
						  $mail->setText($text);
						  $mail->setTo($this->config->get('config_email'));
						  $mail->setFrom($this->config->get('config_email'));
						  $mail->send();

						 $mail = new Mail();
						  $mail->protocol = $this->config->get('config_mail_protocol');
						  $mail->parameter = $this->config->get('config_mail_parameter');
						  $mail->hostname = $this->config->get('config_smtp_host');
						  $mail->username = $this->config->get('config_smtp_username');
						  $mail->password = $this->config->get('config_smtp_password');
						  $mail->port = $this->config->get('config_smtp_port');
						  $mail->timeout = $this->config->get('config_smtp_timeout');
						  $mail->setSubject('Спасибо за регистрацию в магазине "1 на 100"!');
						  $mail->setSender($this->config->get('config_email'));
						  $text = 'Использованная учетная запись: '.$data['identity'].'. Имя: '.$data['firstname'].' '.$data['lastname'].'. Email: '.$data['email'].' Пароль: '.$data['password'];
						  $mail->setText($text);
						  $mail->setTo($data['email']);
						  $mail->setFrom($this->config->get('config_email'));
						  $mail->send(); 
		} else {
			// входим
			$this->model_tool_ulogin->login($check_id);
		}
		if (isset($this->session->data['ulogin_redirect'])) {
			$this->redirect($this->session->data['ulogin_redirect']);
		} else {
			$this->redirect(HTTPS_SERVER);
		}
		
  	}
	
	private function generate_password($number) {
		$arr = array('a','b','c','d','e','f',
						'g','h','i','j','k','l',
						'm','n','o','p','r','s',
						't','u','v','x','y','z',
						'A','B','C','D','E','F',
						'G','H','I','J','K','L',
						'M','N','O','P','R','S',
						'T','U','V','X','Y','Z',
						'1','2','3','4','5','6',
						'7','8','9','0');
		// Генерируем пароль
		$pass = "";
		for($i = 0; $i < $number; $i++) {
			// Вычисляем случайный индекс массива
			$index = rand(0, count($arr) - 1);
			$pass .= $arr[$index];
		}

		return $pass;
	}
}
?>
