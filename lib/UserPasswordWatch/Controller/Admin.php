<?php
class UserPasswordWatch_Controller_Admin extends Zikula_AbstractController
{
	public function postInitialize()
	{
		$this->view->setCaching(false);
	}
	/**
	 * main function
	 *
	 * @version 1.0
	 * @author Leonard Marschke
	 * @return redirection
	 */
	public function main()
	{
		return $this->redirect(ModUtil::url($this->name, 'admin', 'settings'));
	}

	/**
	 * general settings
	 *
	 * @version 1.0
	 * @author Leonard Marschke
	 * @return string: template Admin/Settings.tpl
	 */
	public function settings()
	{
		if (!SecurityUtil::checkPermission('UserPasswordWatch::', '::', ACCESS_ADMIN)) {
			return LogUtil::registerPermissionError();
		}
		$form = FormUtil::newForm($this->name, $this);
		return $form->execute('Admin/Settings.tpl', new UserPasswordWatch_Form_Handler_Admin_Settings());
	}
}
