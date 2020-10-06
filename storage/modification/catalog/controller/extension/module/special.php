<?php
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');


				// BuyOneClick
					$this->load->model('setting/setting');
					$current_language_id = $this->config->get('config_language_id');

					$buyoneclick = $this->config->get('buyoneclick');
					$data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
					$data['buyoneclick_status_module'] = $buyoneclick["status_module"];

					$data['buyoneclick_ya_status'] 					= $buyoneclick['ya_status'];
					$data['buyoneclick_ya_counter'] 				= $buyoneclick['ya_counter'];
					$data['buyoneclick_ya_identificator'] 			= $buyoneclick['ya_identificator'];
					$data['buyoneclick_ya_identificator_send'] 		= $buyoneclick['ya_identificator_send'];
					$data['buyoneclick_ya_identificator_success'] 	= $buyoneclick['ya_identificator_success'];

					$data['buyoneclick_google_status'] 				= $buyoneclick['google_status'];
					$data['buyoneclick_google_category_btn'] 		= $buyoneclick['google_category_btn'];
					$data['buyoneclick_google_action_btn'] 			= $buyoneclick['google_action_btn'];
					$data['buyoneclick_google_category_send'] 		= $buyoneclick['google_category_send'];
					$data['buyoneclick_google_action_send'] 		= $buyoneclick['google_action_send'];
					$data['buyoneclick_google_category_success'] 	= $buyoneclick['google_category_success'];
					$data['buyoneclick_google_action_success'] 		= $buyoneclick['google_action_success'];

					$this->load->language('extension/module/buyoneclick');
					if (!isset($data['buyoneclick_name']) or $data['buyoneclick_name'] == '') {
						$data['buyoneclick_name'] = $this->language->get('buyoneclick_button');
					}
					$data['buyoneclick_text_loading'] = $this->language->get('buyoneclick_text_loading');
				// BuyOneClickEnd
				
		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/special', $data);
		}
	}
}