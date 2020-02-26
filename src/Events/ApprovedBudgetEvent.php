<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\Event;
use App\Entity\Budget;

class ApprovedBudgetEvent extends Event
{
	const NAME = 'presupuesto.aprobado';

	protected $budget;

	public function __construct(Budget $budget)
	{
		$this->budget = $budget;
	}

	public function getBudget()
	{
		return $this->budget;
	}
}