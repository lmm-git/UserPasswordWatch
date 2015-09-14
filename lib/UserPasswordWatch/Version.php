<?php
class UserPasswordWatch_Version extends Zikula_AbstractVersion
{
	public function getMetaData()
	{
		$meta = array();
		$meta['displayname']    = $this->__('User password watch');
		$meta['description']    = $this->__('Watching for secure passwords wich has to be changed from time to time');
		//! module name that appears in URL
		$meta['url']            = $this->__('passwatch');
		$meta['version']        = '0.0.1';
		$meta['core_min']       = '1.3.7';
		$meta['core_max']       = '1.3.99';


		// Permissions schema
		$meta['securityschema'] = array('UserPasswordWatch::' => '::');

		// Module depedencies
		$meta['dependencies'] = array();

		return $meta;
	}
}
