<?php
class UserPasswordWatch_Util
{

	/**
	 * Provides an array containing default values for module variables (settings).
	 *
	 * @author Leonard Marschke
	 * @return array An array indexed by variable name containing the default values for those variables.
	 */
	public static function getModuleDefaults()
	{
		return array('passwordExpireSoftLimit' => '11 MONTHS',
			'passwordExpireHardLimit' => '1 YEAR',
		);
	}
}