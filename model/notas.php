<?php

class Notas{
    private $idNotas;
    private $nomAsignatura;
    private $nota;
    private $idAlumnoFK;

    public function __construct($nomAsignatura,$nota){
        $this->nomAsignatura=$nomAsignatura;
        $this->nota=$nota;
    }

    /**
     * Get the value of idNotas
     */ 
    public function getIdNotas()
    {
        return $this->idNotas;
    }

    /**
     * Set the value of idNotas
     *
     * @return  self
     */ 
    public function setIdNotas($idNotas)
    {
        $this->idNotas = $idNotas;

        return $this;
    }

    /**
     * Get the value of nomAsignatura
     */ 
    public function getNomAsignatura()
    {
        return $this->nomAsignatura;
    }

    /**
     * Set the value of nomAsignatura
     *
     * @return  self
     */ 
    public function setNomAsignatura($nomAsignatura)
    {
        $this->nomAsignatura = $nomAsignatura;

        return $this;
    }

    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get the value of idAlumnoFK
     */ 
    public function getIdAlumnoFK()
    {
        return $this->idAlumnoFK;
    }

    /**
     * Set the value of idAlumnoFK
     *
     * @return  self
     */ 
    public function setIdAlumnoFK($idAlumnoFK)
    {
        $this->idAlumnoFK = $idAlumnoFK;

        return $this;
    }
}