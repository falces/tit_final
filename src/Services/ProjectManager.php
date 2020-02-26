<?php
/**
 * Herramientas para gestionar los proyectos
 */
class ProjectManager
{
	/**
	 * Devuelve un objeto con los datos del proyecto
	 * - Características
	 * - Estado
	 * - Técnico asignado
	 * @return Project
	 */
	public function getProjectData(Project $project)
	{

	}

	/**
	 * Devuelve el estado de un proyecto
	 * @return string
	 */
	public function getProjectStatus(Project $project)
	{

	}

	/**
	 * Gestiona el estado de un proyecto
	 * @return bool
	 */
	public function setProjectStatus(Project $project, ProjectStatus $project_status)
	{

	}

	/**
	 * Devuelve las tareas asociadas a un proyecto
	 * - Característica
	 * - Técnico
	 * - Fechas (inicio, fin, plazo estimado)
	 * @return Tasks
	 */
	public function getProjectTasks(Project $project)
	{

	}

	/**
	 * Devuelve el siguiente estado asignable a un proyecto
	 * @return array
	 */
	fpublic unction getNextBudgetStatus(Project $project)
	{

	}

	/**
	 * Setear token único para proyecto
	 * @return string
	 */
	public function setProjectToken(Project $project)
	{

	}

	/**
	 * Devuelve el grado de avance de un proyecto
	 * @return float
	 */
	public function getProjectAdvanceLevel(Project $project)
	{
		
	}
}