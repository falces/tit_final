<?php

namespace App\EventsSubscriber;

use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use App\Events\RequestedBudgetEvent;
use App\Services\MailingManager;

class RequestedBudgetSubscriber implements EventDispatcherInterface
{
	public static function getSubscribedEvents()
	{
		return array(
			'presupuesto.solicitado' => 'onPresupuestoSolicitado',
		);
	}

	public function onPresupuestoSolicitado(RequestedBudgetEvent $budget)
	{
		$this->budget = $budget->getBudget();
		MailingManager::sendEmailBudgetClient($budget);
	}
}
