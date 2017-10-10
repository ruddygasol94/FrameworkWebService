<?php

class status_asistencia
{
	private $id;
	private $idPadre;
	private $comentario;
	private $idMes;
	private $mes;
	private $idAnio;
	private $idDia;
	private $dia;
	private $idComision;
	private $idEmpleado;
	private $fechaInicio;
	private $fechaFin;
	private $idEmpleado;
	private $idDia;
	private $horaInicio;
	private $horaFin;
	private $actividad;
	private $idStatus;
	private $descripcion;

	public function setId($p_id)
	{
		$this->id = $p_Id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIdPadre($p_idPadre)
	{
		$this->idPadre = $p_IdPadre;
	}

	public function getIdPadre()
	{
		return $this->idPadre;
	}

	public function setComentario($p_comentario)
	{
		$this->comentario = $p_Comentario;
	}

	public function getComentario()
	{
		return $this->comentario;
	}

	public function setIdMes($p_idMes)
	{
		$this->idMes = $p_IdMes;
	}

	public function getIdMes()
	{
		return $this->idMes;
	}

	public function setMes($p_mes)
	{
		$this->mes = $p_Mes;
	}

	public function getMes()
	{
		return $this->mes;
	}

	public function setIdAnio($p_idAnio)
	{
		$this->idAnio = $p_IdAnio;
	}

	public function getIdAnio()
	{
		return $this->idAnio;
	}

	public function setIdDia($p_idDia)
	{
		$this->idDia = $p_IdDia;
	}

	public function getIdDia()
	{
		return $this->idDia;
	}

	public function setDia($p_dia)
	{
		$this->dia = $p_Dia;
	}

	public function getDia()
	{
		return $this->dia;
	}

	public function setIdComision($p_idComision)
	{
		$this->idComision = $p_IdComision;
	}

	public function getIdComision()
	{
		return $this->idComision;
	}

	public function setIdEmpleado($p_idEmpleado)
	{
		$this->idEmpleado = $p_IdEmpleado;
	}

	public function getIdEmpleado()
	{
		return $this->idEmpleado;
	}

	public function setFechaInicio($p_fechaInicio)
	{
		$this->fechaInicio = $p_FechaInicio;
	}

	public function getFechaInicio()
	{
		return $this->fechaInicio;
	}

	public function setFechaFin($p_fechaFin)
	{
		$this->fechaFin = $p_FechaFin;
	}

	public function getFechaFin()
	{
		return $this->fechaFin;
	}

	public function setIdEmpleado($p_idEmpleado)
	{
		$this->idEmpleado = $p_IdEmpleado;
	}

	public function getIdEmpleado()
	{
		return $this->idEmpleado;
	}

	public function setIdDia($p_idDia)
	{
		$this->idDia = $p_IdDia;
	}

	public function getIdDia()
	{
		return $this->idDia;
	}

	public function setHoraInicio($p_horaInicio)
	{
		$this->horaInicio = $p_HoraInicio;
	}

	public function getHoraInicio()
	{
		return $this->horaInicio;
	}

	public function setHoraFin($p_horaFin)
	{
		$this->horaFin = $p_HoraFin;
	}

	public function getHoraFin()
	{
		return $this->horaFin;
	}

	public function setActividad($p_actividad)
	{
		$this->actividad = $p_Actividad;
	}

	public function getActividad()
	{
		return $this->actividad;
	}

	public function setIdStatus($p_idStatus)
	{
		$this->idStatus = $p_IdStatus;
	}

	public function getIdStatus()
	{
		return $this->idStatus;
	}

	public function setDescripcion($p_descripcion)
	{
		$this->descripcion = $p_Descripcion;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

}
?>
