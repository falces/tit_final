<?php

/**
 * Herramientas para el login de usuario
 */

class LoginManager
{
	private $noLogedUser;

	/**
	 * Comprueba si un usuario está registrado
	 * @return bool
	 */
	public function logUser($_user, $_password)
	{

	}

	/**
	 * Devuelve los datos de un usuario a partir de su email
	 * @return Users
	 */
	public function getUserByEmail($_email)
	{
		// ... -> $user
		$this->noLogedUser = $user;
	}

	/**
	 * Genera un nuevo token para el usuario
	 * @return string
	 */
	public function setUserToken()
	{
		// Genera token para $this->noLogedUser
	}
}