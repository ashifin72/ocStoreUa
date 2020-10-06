<?php
class ControllerCommonFooter extends Controller {
	public function index() {

				// BuyOneClick
					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_status_product'] = $buyoneclick["status_product"];
					$data['buyoneclick_status_category'] = $buyoneclick["status_category"];
					$data['buyoneclick_status_module'] = $buyoneclick["status_module"];

					$data['buyoneclick_exan_status'] = $buyoneclick["exan_status"];

					$current_language_id = $this->config->get('config_language_id');
					$data['buyoneclick_success_field'] = isset($buyoneclick["success_field"][$current_language_id]) ? htmlspecialchars_decode($buyoneclick["success_field"][$current_language_id]) : '';

					$this->load->language('extension/module/buyoneclick');
					if ($data['buyoneclick_success_field'] == '') {
						$data['buyoneclick_success_field'] = $this->language->get('buyoneclick_success');
					}
				// BuyOneClickEnd
			
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		

            $data['hyper_positions_footer_top'] = $this->load->controller('extension/designs/hyper_positions_footer_top');
		return $this->load->view('common/footer', $data);
	}
}
