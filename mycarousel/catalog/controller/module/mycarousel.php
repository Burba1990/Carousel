<?php
class ControllerModuleMycarousel extends Controller {
	public function index($setting) {
		static $module = 0;
		$this->load->language('module/mycarousel');
		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->document->addStyle('/catalog/view/theme/default/stylesheet/sass/mycarousel.scss');  
		$this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css');
		$this->document->addScript('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js');

		$data['module'] = $module++;

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/mycarousel.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/mycarousel.tpl', $data);
		} else {
			return $this->load->view('default/template/module/mycarousel.tpl', $data);
		}
	}
}