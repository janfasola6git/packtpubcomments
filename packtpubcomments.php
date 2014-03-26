<?php
class PacktpubComments extends Module
{
	
	public function __construct()
	{
		$this->name = 'packtpubcomments';
		$this->displayName = 'Packtpub comments';
		$this->tab = 'front_office_features';
		$this->version = '0.1';
		$this->author = 'Fabien Serny';
		$this->description = 'With this module, your customers will
								be able to grade and comments your products.';
		parent::__construct();
	}
	
	public function getContent()
	{
		return $this->display(__FILE__, 'getContent.tpl');
	}
	
	
}