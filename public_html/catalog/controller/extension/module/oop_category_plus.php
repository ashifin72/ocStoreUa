<?php
class ControllerExtensionModuleOopCategoryPlus extends Controller {
	public function index() {
		$this->document->addLink("catalog/view/theme/default/stylesheet/oop_category_plus.css","stylesheet");

  	if (isset($this->request->get['path'])) {
			$data['parts'] = explode('_', (string)$this->request->get['path']);
		} else {
			$data['parts'] = array();
		}

    $this->load->model('extension/module/oop_category_plus');
    $data['categories'] = $this->model_extension_module_oop_category_plus->getCategories();

		return $this->load->view('extension/module/oop_category_plus', $data);
	}
}
