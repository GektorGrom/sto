<?php
class ControllerModuleBounce extends Controller {
	private $error = array();
 
	public function index() {

		$this->document->setTitle('Настройка СКАКУНА');
		
		$this->load->model('setting/setting');
		$this->load->model('module/bounce');
		
		$bounce = $this->model_module_bounce->getSetting();
		$stats = $this->model_module_bounce->getStats();
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			
			$this->model_module_bounce->editSetting($this->request->post);	
			
			$this->session->data['success'] = 'OK';

			$this->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
		
		//This creates an error message. The error['warning'] variable is set by the call to function validate() in this controller (below)
 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}
		
		//SET UP BREADCRUMB TRAIL. YOU WILL NOT NEED TO MODIFY THIS UNLESS YOU CHANGE YOUR MODULE NAME.		
 
 		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => 'Админка',
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

		$this->data['breadcrumbs'][] = array(
       		'text'      => 'Модули',
			'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => 'СКАКУН',
			'href'      => $this->url->link('module/bounce', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
		if (isset($this->session->data['success'])) {
			$this->data['success'] = $this->session->data['success'];
		
			unset($this->session->data['success']);
		} else {
			$this->data['success'] = '';
		}

		$this->data['action'] = $this->url->link('module/bounce', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['token'] = $this->session->data['token'];
			
		
		//так они вводятся и если не ввели то загружаются	- коэфициент от обычной наценки

		$this->data['stats'] = $stats;

		if (isset($this->request->post['bounce'])) {
			$this->data['bounce'] = $this->request->post['bounce'];
		} else {
			$this->data['bounce'] = $bounce;
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		$pagination = new Pagination();
		$pagination->total = $bounce['total_count'];
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_admin_limit');
		$pagination->text = $this->language->get('text_pagination');
		$pagination->url = $this->url->link('module/bounce', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');
			
		$this->data['pagination'] = $pagination->render();
		
		//шаблон для модуля view
		$this->template = 'module/bounce.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
				
		$this->response->setOutput($this->render());
	}
	
	public function install() {
		$query = $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "bounce (
		`key` VARCHAR( 25) NOT NULL ,
		`value` FLOAT NOT NULL
		)");
	}
	
	//проверки на доступ и ошибки при вводе тут
	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/bounce')) {
			$this->error['warning'] = 'error';
		}
			
		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
}
?>