<?php
Configure::write('Admin.site_name','プロジェクト管理画面');
Configure::write('Admin.layout','marketing-alternate');
Configure::write('Admin.date_format','Y年n月j日 H時i分');



App::uses('CakeEventManager', 'Event');
CakeEventManager::instance()->attach('AdminCustomErrorLayout', 'Controller.startup');
function AdminCustomErrorLayout(CakeEvent $event) {
	if ($event->subject instanceof Controller &&
		$event->subject->name === 'CakeError' &&
		$event->subject->request->params['plugin'] === 'admin') {
		$event->subject->layout = 'Admin.marketing-alternate';
		$event->subject->viewVars['site_name'] = Configure::read('Admin.site_name');
	}
}
