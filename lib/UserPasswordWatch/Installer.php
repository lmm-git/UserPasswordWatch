<?php
class UserPasswordWatch_Installer extends Zikula_AbstractInstaller
{

	/**
	 * Initialise the ZkPostfix module.
	 *
	 * @author Leonard Marschke
	 * @return boolean: true on success / false on failure.
	 */
	public function install()
	{
		$this->setVars(UserPasswordWatch_Util::getModuleDefaults());

		// Set up the persistent event handler, hook bundles, and any other event-related features.
		EventUtil::registerPersistentModuleHandler($this->name, 'user.login.veto', array('UserPasswordWatch_Listener_UsersLoginVeto', 'passwordWatchListener'));

		// Initialisation successful
		return true;
	}


	/**
	 * Upgrading the module
	 *
	 * @author Leonard Marschke
	 * @return boolean: true on success / false on error
	 * @param $oldversion
	 */
	public function upgrade($oldversion)
	{
		switch($oldversion) {
			case '0.0.1':
				//further upgrades
		}
		return true;
	}

	/**
	 * Uninstall the module
	 *
	 * @author Leonard Marschke
	 * @return boolean: true on success / false on error
	 */
	public function uninstall()
	{
		//Remove all ModVars
		$this->delVars();
		return true;
	}
}
