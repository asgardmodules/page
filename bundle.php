<?php
namespace Coxis\Page;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Pages', 'link' => 'pages');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\URL::to('page/icon.svg'), 'link'=>'pages', 'title' => 'Pages', 'description' => __('All the static pages.'));
		parent::run();
	}
}