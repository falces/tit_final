<?php
/**
 * Herramientas para gestionar los proyectos
 */
class BudgetManager
{
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
	public function setBudgetStatus(Budget $budget, BudgetStatus $budget_status)
	{

	}

	/**
	 * Cerrar presupuesto y generar proyecto
	 * @return bool
	 */
	public function generateProjectFromBudget(Budget $budget)
	{

	}
}