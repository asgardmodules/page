<?php
namespace App\Page;

class Bundle extends \Coxis\Core\BundleLoader {
	public function load($queue) {
		parent::load();
	}

	public function run() {
		\Coxis\Admin\Libs\AdminMenu::$menu[0]['childs'][] = array('label' => 'Pages', 'link' => 'pages');
		\Coxis\Admin\Libs\AdminMenu::$home[] = array('img'=>\URL::to('page/icon.svg'), 'link'=>'pages', 'title' => 'Pages', 'description' => __('All the static pages.'));
		parent::run();
	}
}
return new Bundle;