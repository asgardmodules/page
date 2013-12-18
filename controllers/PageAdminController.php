<?php
/**
@Prefix('admin/pages')
*/
class PageAdminController extends \Coxis\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'Coxis\Page\Entities\Page';
	static $_entities = 'pages';

	function __construct() {
		$this->_messages = array(
					'modified'			=>	__('Page modified with success.'),
					'created'			=>	__('Page created with success.'),
					'many_deleted'			=>	__('Pages modified with success.'),
					'deleted'			=>	__('Page deleted with success.'),
					'unexisting'			=>	__('This page does not exist.'),
				);
		parent::__construct();
	}
	
	public function formConfigure($entity) {
		$form = new \Coxis\Admin\Libs\Form\AdminEntityForm($entity, $this);

		if(_ENV_ != 'dev')
			unset($this->form->name);

		return $form;
	}
}