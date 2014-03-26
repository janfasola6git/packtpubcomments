<?php
class PacktpubComments extends Module
{
	
	public function __construct()
	{
		$this->name = 'packtpubcomments';
		$this->displayName = 'Packtpub comments';
		parent::__construct();
		$this->tab = 'front_office_features';
		$this->version = '0.1';
	}
}