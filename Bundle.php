<?php
namespace Coxis\Page;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Pages', 'link' => 'pages');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Coxis\Core\Facades\Coxis\Core\App::get('url')->to('page/icon.svg'), 'link'=>'pages', 'title' => 'Pages', 'description' => __('All the static pages.'));
		parent::run();
	}
}