<?php
namespace Tests;

class PageAdminTest extends \PHPUnit_Framework_TestCase {
	public function test1() {
		\App\Page\Entities\Page::create(array('id'=>1, 'title'=>'test'));

		$browser = new \Asgard\Utils\Browser;
		$browser->setSession('admin_id', 1);

		$browser->get('admin/pages/1/edit');
		$res = $browser->submit(0, 'admin/pages/1/edit');
		$this->assertTrue($res->isOK());
	}
}
