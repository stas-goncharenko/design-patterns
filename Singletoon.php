<?php
/*
Singleton – один из самых простых шаблонов для понимания. 
Основное назначение – гарантировать существование только одно экземпляра класса. 
Причиной обычно является следующее: требуется только один объект исходного класса и Вам необходимо, 
что бы объект был доступен в любом месте приложения, т.е. глобальный доступ.

Шаблон Singleton предполагает наличие статического метода для создания экземпляра класса, 
при обращении к которому возвращается ссылка на оригинальный объект.
*/

class Settings {

	private $settings = array();
	private static $_instance = null;

	private function __construct() {
	    // приватный конструктор ограничивает реализацию 		    getInstance ()
	}

	protected function __clone() {
	    // ограничивает клонирование объекта
	}
	static public function getInstance() {
	    if(is_null(self::$_instance)) {
		    self::$_instance = new self();
	    }

	    return self::$_instance;
	}

	public function import() {
	    // ...
	}

	public function get() {
	    // ...
	}
}
