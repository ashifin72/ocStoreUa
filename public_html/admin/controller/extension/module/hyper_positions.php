<?php
class ControllerExtensionModuleHyperPositions extends Controller {
    private $error = array();
    private $_text_string = array(
        'head_title',
        'header_title',
        'heading_text_title',
        // Help
        'help_name',
        'help_name_title',
        'help_name_titles',
        'help_list',
        'help_text',
        'help_warning',
        'help_ok',
        'help_end',
        // Help Users
        'help_name',
        'help_first',
        'help_second',
        'info_first',
        'info_second',
        'info_third',
        'info_fourth',
    );

    public function install() {
        $this->create_mysql_table();
    }
    public function create_mysql_table() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "hyper_positions_width` (
            `layout_id` INT(11) NULL DEFAULT NULL,
            `layout_settings` VARCHAR(255) NULL DEFAULT NULL,
            INDEX (`layout_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");
    }
    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "hyper_positions_width`");
    }
	public function index() {
		$this->load->language('extension/module/hyper_positions');
        $this->load->language('extension/module/designs/hyper_positions');

		$this->document->setTitle($this->language->get('header_title'));

        foreach ($this->_text_string as $text) {
            $data[$text] = $this->language->get($text);
        }

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_hyper_positions', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/hyper_positions', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/hyper_positions', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_hyper_positions_status'])) {
			$data['module_hyper_positions_status'] = $this->request->post['module_hyper_positions_status'];
		} else {
			$data['module_hyper_positions_status'] = $this->config->get('module_hyper_positions_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/hyper_positions', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/hyper_positions')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

}