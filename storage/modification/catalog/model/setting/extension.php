<?php
class ModelSettingExtension extends Model {
	function getExtensions($type) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = '" . $this->db->escape($type) . "'");

				if ($type == 'payment' && isset($this->session->data['shipping_method']['code']) && $this->config->get('quickcheckout_shipping_reload')) {
					$payments = $query->rows;

					$rules = array();

					foreach ($this->config->get('quickcheckout_payment2shipping_shippings') as $shippings) {
						if (strpos($this->session->data['shipping_method']['code'], $shippings['shipping']) === 0) {
							$rules[] = $shippings['payment'];
						}
					}

					if (!empty($rules)) {
						foreach ($payments as $idx => $payment) {
							if (!in_array($payment['code'], $rules)) {
								unset($payments[$idx]);
							}
						}

						$query->rows = $payments;
					}

					//echo '<pre>'.__METHOD__.' ['.__LINE__.']: '; print_r($rules); echo '</pre>';
					//echo '<pre>'.__METHOD__.' ['.__LINE__.']: '; print_r($this->session->data['shipping_method']); echo '</pre>';
					//echo '<pre>'.__METHOD__.' ['.__LINE__.']: '; print_r($query->rows); echo '</pre>';
				}
			

		return $query->rows;
	}
}