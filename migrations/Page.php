<?php
class FaqMigration {
	public static function up() {
		$table = \Asgard\Core\App::get('config')->get('database/prefix').'page';
		\Asgard\Core\App::get('schema')->create($table, function($table) {	
			$table->add('id', 'int(11)')
				->autoincrement()
				->primary();	
			$table->add('meta_title', 'varchar(255)')
				->nullable();	
			$table->add('meta_description', 'varchar(255)')
				->nullable();	
			$table->add('meta_keywords', 'varchar(255)')
				->nullable();	
			$table->add('published', 'int(1)')
				->nullable();	
			$table->add('created_at', 'datetime')
				->nullable();	
			$table->add('updated_at', 'datetime')
				->nullable();	
			$table->add('title', 'varchar(255)')
				->nullable();	
			$table->add('content', 'text')
				->nullable();	
			$table->add('name', 'varchar(255)')
				->nullable();	
			$table->add('url', 'varchar(255)')
				->nullable();
		});
	}
	
	public static function down() {
		\Asgard\Core\App::get('schema')->drop(\Asgard\Core\App::get('config')->get('database/prefix').'page');
	}
}