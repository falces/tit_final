<?php

namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;
use App\Entity\Budget;

class RequestedBudgetEvent extends Event
{
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