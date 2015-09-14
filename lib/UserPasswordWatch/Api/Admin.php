<?php
class UserPasswordWatch_Api_Admin extends Zikula_AbstractApi
{
	/**
	 * Get admin panel links.
	 *
	 * @return array Array of admin links.
	 */
	public function getlinks()
	{
		$links = array ();
		if(SecurityUtil::checkPermission($this->name . '::', '::', ACCESS_ADMIN)) {
			$links[] = array (
				'url'  => ModUtil::url($this->name, 'admin', 'settings'),
				'text' => $this->__('Settings'),
				'class' => 'z-icon-es-config');
		}

		return $links;
	}
}
