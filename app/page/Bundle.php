<?php
namespace Asgard\Page;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\App\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Pages', 'link' => 'pages');
		\App\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\App::get('url')->to('page/icon.svg'), 'link'=>'pages', 'title' => 'Pages', 'description' => __('All the static pages.'));
		parent::run();
	}
}