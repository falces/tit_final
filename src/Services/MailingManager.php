<?php

/**
 * Gestión de los correos electrónicos para comunicar con clientes y staff
 */
class MailingManager
{
	/**
	 * Enviar correo al usuario del presupuesto
	 * @return bool
	 */
	public function sendEmailBudgetClient(Budget $budget)
	{

	}

	/**
	 * Enviar correo a usuarios rol comercial
	 * @return bool
	 */
	public function sendEmailBudgetSalesManager(Budget $budget)
	{

	}

	/**
	 * Enviar correo al cliente con el cambio de estaod del proyecto
	 * @return bool
	 */
	public function sendEmailProyectStatusClient(Project $project)
	{

	}

	/**
	 * Enviar correo al personal engargado del proyecto
	 * @return bool
	 */
	public function sendEmailProyectStatusStaff(Project $project)
	{

	}

	/**
	 * Enviar correl al técnico al que se le asocia una tarea
	 * @return bool
	 */
	public function sendEmailTaskStaff(Project $project)
	{

	}

	/**
	 * Envía mail para recuperar contraseña
	 * @return bool
	 */
	public function sendPasswordRequest(Users $_noLoggedUser)
	{

	}
}