<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Budgets;

/**
 * FRONTOFFICE TOOL
 * BACKOFFICE MANAGER
 * LIST
 * STATUS
 */
class BudgetsManager
{
	private $em;
	private $budgets;

	public
	function __construct(
		EntityManagerInterface $em,
		Budgets $budgets)
	{
		$this->em = $em;
		$this->budgets = $budgets;
	}

	/**
	 * List user's budgets
	 */
	public
	function getUserBugets()
	{
		//
	}
}