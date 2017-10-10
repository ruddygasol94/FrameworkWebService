<?php

class comentarios
{
	private $id;
	private $idPadre;
	private $comentario;

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

}
?>
