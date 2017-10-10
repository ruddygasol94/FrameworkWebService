<?php

class anio
{
	private $id;
	private $idPadre;
	private $comentario;
	private $idMes;
	private $mes;
	private $idAnio;

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

}
?>
