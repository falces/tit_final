<?php

namespace App\Services;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use App\Events\RequestedBudgetEvent;
use App\Events\ApprovedBudgetEvent;

/**
 * Herramientas para gestionar los proyectos
 */
class BudgetManager
{
	const EVENT_REQUESTED_BUDGET = 'presupuesto.solicitado';
	const EVENT_APPROVED_BUDGET = 'presupuesto.aprobado';

	const STATE_REQUIRED = 1;
	const STATE_APPROVED = 2;

	/**
	 * Devuelve los datos de un presupuesto:
	 * - Características
	 * - Estado
	 * - Cliente
	 * - Técnico
	 * @return array
	 */
	public function getBudgetData(Budget $budget)
	{

	}

	/**
	 * Devuelve el estado de un presupuesto
	 * @return string
	 */
	public function getBudgetStatus(Budget $budget)
	{

	}

	/**
	 * Gestiona el estado de un presupuesto
	 * @return bool
	 */
	public function setBudgetStatus(
		Proyectos $budget,
		BudgetStatus $budget_status,
		EventDispatcherInterface $eventDispatcherInterface)
	{
		// Creamos el evento según el nuevo estado del presupuesto
		switch($budget_status){
			case self::STATE_REQUIRED:
				$eventInfo = new RequestedBudgetEvent($budget);
				$eventDispatcherInterface->dispatch($eventInfo, self::EVENT_REQUESTED_BUDGET);
			break;
			case self::STATE_APPROVED:
				$eventInfo = new ApprovedBudgetEvent($budget);
				$eventDispatcherInterface->dispatch($eventInfo, self::EVENT_APPROVED_BUDGET);
			break;
		}
	}

	/**
	 * Cerrar presupuesto y generar proyecto
	 * @return bool
	 */
	public function generateProjectFromBudget(Budget $budget)
	{

	}
}