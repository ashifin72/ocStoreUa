<?php
class ControllerExtensionModuleDesignsHyperPositions extends Controller {

    private $_text_string = array(

        'hp_name_titles',
        'hp_name',
        'width_title',
        'text_pos_left_center',
        'text_pos_center',
        'text_pos_right_center',
        'text_content2_pos',
        'text_banner2_pos',
        'text_bottom_pos',
        // TOP
        'text_pos_sliders',
        // CONTENT
        'text_content_pos',
        // FOOTER
        'text_map_pos',
    );


    public function index() {

        $this->document->addStyle('view/javascript/hyper-extension/css/hyper-extension.css');
        $this->document->addStyle('view/javascript/hyper-extension/css/bootstrap-switch.min.css');
        $this->document->addScript('view/javascript/hyper-extension/js/bootstrap-switch.min.js');

        $this->load->language('extension/module/designs/hyper_positions');

        foreach ($this->_text_string as $text) {
            $data[$text] = $this->language->get($text);
        }

        return $data;

    }

    public function validate($full_width = array() ){

        $full_width['width'] = (int)$full_width['width'];

        return $full_width;
    }

}
