<?php
require_once './persona.php';

class Alumno extends Persona{
    private $idAlumno;

    /**
     * Get the value of idAlumno
     */ 
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set the value of idAlumno
     *
     * @return  self
     */ 
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }
}

