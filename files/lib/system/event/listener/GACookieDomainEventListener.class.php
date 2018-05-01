<?php

namespace wcf\system\event\listener;

use wcf\system\application\ApplicationHandler;
use wcf\system\WCF;

/**
 * Class GACookieDomainEventListener
 *
 * @author	Florian Gail
 * @copyright	2018 Florian Gail
 * @license	Kostenlose Plugins <https://www.mysterycode.de/licenses/kostenlose-plugins/>
 * @package	WoltLabSuite\Core\System\Event\Listener
 */
class GACookieDomainEventListener implements IParameterizedEventListener {
	/**
	 * @inheritDoc
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters) {
		if (substr(WCF_VERSION, 0, 3) == '3.0') {
			$app = ApplicationHandler::getInstance()->getActiveApplication();
		}
		else {
			$app = WCF::getActiveApplication();
		}
		WCF::getTPL()->assign('gaApplication', $app->cookieDomain);
	}
}
