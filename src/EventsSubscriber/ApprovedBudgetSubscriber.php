<?php

namespace App\EventsSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\ApprovedBudgetEvent;
use App\Services\BudgetManager;
use App\Services\MailingManager;

class ApprovedBudgetSubscriber implements EventSubscriberInterface
{
	private $budget;

	public static function getSubscribedEvents()
	{
		return array(
			BudgetManager::EVENT_APPROVED_BUDGET => array(
				array('onPresupuestoAprobado', 10),
			),
		);
	}

	public function onPresupuestoAprobado(ApprovedBudgetEvent $budget)
	{
		$this->budget = $budget->getBudget();
		MailingManager::sendEmailProyectStatusClient($budget);
		MailingManager::sendEmailProyectStatusStaff($budget);
	}
}
