<?php

class departamento_puesto
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
	private $idEmpleado;
	private $fecha;
	private $horaEntrada;
	private $statusIn;
	private $horaSalida;
	private $statusOut;
	private $observaciones;
	private $id;
	private $curp;
	private $nombres;
	private $aPaterno;
	private $aMaterno;
	private $idPadre;
	private $idMadre;
	private $idEntrada;
	private $idEmpleado;
	private $fecha;
	private $foto;
	private $idPuesto;
	private $puesto;
	private $id;
	private $curp;
	private $nombres;
	private $aPaterno;
	private $aMaterno;
	private $idPadre;
	private $idMadre;
	private $noControl;
	private $semestre;
	private $idCarrera;
	private $id;
	private $curp;
	private $nombres;
	private $aPaterno;
	private $aMaterno;
	private $idPadre;
	private $idMadre;
	private $rfc;
	private $nss;
	private $idPuesto;
	private $idDepartamento;

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

	public function setIdEmpleado($p_idEmpleado)
	{
		$this->idEmpleado = $p_IdEmpleado;
	}

	public function getIdEmpleado()
	{
		return $this->idEmpleado;
	}

	public function setFecha($p_fecha)
	{
		$this->fecha = $p_Fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setHoraEntrada($p_horaEntrada)
	{
		$this->horaEntrada = $p_HoraEntrada;
	}

	public function getHoraEntrada()
	{
		return $this->horaEntrada;
	}

	public function setStatusIn($p_statusIn)
	{
		$this->statusIn = $p_StatusIn;
	}

	public function getStatusIn()
	{
		return $this->statusIn;
	}

	public function setHoraSalida($p_horaSalida)
	{
		$this->horaSalida = $p_HoraSalida;
	}

	public function getHoraSalida()
	{
		return $this->horaSalida;
	}

	public function setStatusOut($p_statusOut)
	{
		$this->statusOut = $p_StatusOut;
	}

	public function getStatusOut()
	{
		return $this->statusOut;
	}

	public function setObservaciones($p_observaciones)
	{
		$this->observaciones = $p_Observaciones;
	}

	public function getObservaciones()
	{
		return $this->observaciones;
	}

	public function setId($p_id)
	{
		$this->id = $p_Id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setCurp($p_curp)
	{
		$this->curp = $p_Curp;
	}

	public function getCurp()
	{
		return $this->curp;
	}

	public function setNombres($p_nombres)
	{
		$this->nombres = $p_Nombres;
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setAPaterno($p_aPaterno)
	{
		$this->aPaterno = $p_APaterno;
	}

	public function getAPaterno()
	{
		return $this->aPaterno;
	}

	public function setAMaterno($p_aMaterno)
	{
		$this->aMaterno = $p_AMaterno;
	}

	public function getAMaterno()
	{
		return $this->aMaterno;
	}

	public function setIdPadre($p_idPadre)
	{
		$this->idPadre = $p_IdPadre;
	}

	public function getIdPadre()
	{
		return $this->idPadre;
	}

	public function setIdMadre($p_idMadre)
	{
		$this->idMadre = $p_IdMadre;
	}

	public function getIdMadre()
	{
		return $this->idMadre;
	}

	public function setIdEntrada($p_idEntrada)
	{
		$this->idEntrada = $p_IdEntrada;
	}

	public function getIdEntrada()
	{
		return $this->idEntrada;
	}

	public function setIdEmpleado($p_idEmpleado)
	{
		$this->idEmpleado = $p_IdEmpleado;
	}

	public function getIdEmpleado()
	{
		return $this->idEmpleado;
	}

	public function setFecha($p_fecha)
	{
		$this->fecha = $p_Fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setFoto($p_foto)
	{
		$this->foto = $p_Foto;
	}

	public function getFoto()
	{
		return $this->foto;
	}

	public function setIdPuesto($p_idPuesto)
	{
		$this->idPuesto = $p_IdPuesto;
	}

	public function getIdPuesto()
	{
		return $this->idPuesto;
	}

	public function setPuesto($p_puesto)
	{
		$this->puesto = $p_Puesto;
	}

	public function getPuesto()
	{
		return $this->puesto;
	}

	public function setId($p_id)
	{
		$this->id = $p_Id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setCurp($p_curp)
	{
		$this->curp = $p_Curp;
	}

	public function getCurp()
	{
		return $this->curp;
	}

	public function setNombres($p_nombres)
	{
		$this->nombres = $p_Nombres;
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setAPaterno($p_aPaterno)
	{
		$this->aPaterno = $p_APaterno;
	}

	public function getAPaterno()
	{
		return $this->aPaterno;
	}

	public function setAMaterno($p_aMaterno)
	{
		$this->aMaterno = $p_AMaterno;
	}

	public function getAMaterno()
	{
		return $this->aMaterno;
	}

	public function setIdPadre($p_idPadre)
	{
		$this->idPadre = $p_IdPadre;
	}

	public function getIdPadre()
	{
		return $this->idPadre;
	}

	public function setIdMadre($p_idMadre)
	{
		$this->idMadre = $p_IdMadre;
	}

	public function getIdMadre()
	{
		return $this->idMadre;
	}

	public function setNoControl($p_noControl)
	{
		$this->noControl = $p_NoControl;
	}

	public function getNoControl()
	{
		return $this->noControl;
	}

	public function setSemestre($p_semestre)
	{
		$this->semestre = $p_Semestre;
	}

	public function getSemestre()
	{
		return $this->semestre;
	}

	public function setIdCarrera($p_idCarrera)
	{
		$this->idCarrera = $p_IdCarrera;
	}

	public function getIdCarrera()
	{
		return $this->idCarrera;
	}

	public function setId($p_id)
	{
		$this->id = $p_Id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setCurp($p_curp)
	{
		$this->curp = $p_Curp;
	}

	public function getCurp()
	{
		return $this->curp;
	}

	public function setNombres($p_nombres)
	{
		$this->nombres = $p_Nombres;
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setAPaterno($p_aPaterno)
	{
		$this->aPaterno = $p_APaterno;
	}

	public function getAPaterno()
	{
		return $this->aPaterno;
	}

	public function setAMaterno($p_aMaterno)
	{
		$this->aMaterno = $p_AMaterno;
	}

	public function getAMaterno()
	{
		return $this->aMaterno;
	}

	public function setIdPadre($p_idPadre)
	{
		$this->idPadre = $p_IdPadre;
	}

	public function getIdPadre()
	{
		return $this->idPadre;
	}

	public function setIdMadre($p_idMadre)
	{
		$this->idMadre = $p_IdMadre;
	}

	public function getIdMadre()
	{
		return $this->idMadre;
	}

	public function setRfc($p_rfc)
	{
		$this->rfc = $p_Rfc;
	}

	public function getRfc()
	{
		return $this->rfc;
	}

	public function setNss($p_nss)
	{
		$this->nss = $p_Nss;
	}

	public function getNss()
	{
		return $this->nss;
	}

	public function setIdPuesto($p_idPuesto)
	{
		$this->idPuesto = $p_IdPuesto;
	}

	public function getIdPuesto()
	{
		return $this->idPuesto;
	}

	public function setIdDepartamento($p_idDepartamento)
	{
		$this->idDepartamento = $p_IdDepartamento;
	}

	public function getIdDepartamento()
	{
		return $this->idDepartamento;
	}

}
?>
