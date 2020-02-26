<?php

/**
 * Conjunto de herramientas para trabajar con el objeto usuario
 */

class UsersManager
{
	private $user;

	public function __construct(Users $user)
	{
		$this->user = $user;
	}

	/**
	 * Devuelve un objeto con todos los datos del usuario:
	 * - Datos personales
	 * - Rol
	 * - Idioma
	 * @return Users
	 */
	public function getUserData()
	{

	}

	/**
	 * Encripta la contraseña
	 * @return string
	 */
	public function passwordEncrypt(string	$_password)
	{

	}

	/**
	 * Comprueba si un usuario tiene permiso para ver un presupuesto
	 * @return bool
	 */
	public function getBudgetPermission(Users $user, Budget $budget)
	{

	}

	/**
	 * Comprueba si un usuario tiene permiso para ver un proyecto
	 * @return bool
	 */
	public function getProyectPermission(Users $user, Project $project)
	{

	}
}