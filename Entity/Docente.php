<?php

namespace Informatica\PrometheusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informatica\PrometheusBundle\Entity\Docente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Informatica\PrometheusBundle\Repository\DocenteRepository")
 */
class Docente
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $clave
     *
     * @ORM\Column(name="clave", type="string", length=8)
     */
    private $clave;

    /**
     * @var string $usuario
     *
     * @ORM\Column(name="usuario", type="string", length=10)
     */
    private $usuario;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string $contrasena
     *
     * @ORM\Column(name="contrasena", type="string", length=10)
     */
    private $contrasena;
    
    
    /**
     * @var $asignaturas
     *
     * @ORM\ManyToMany(targetEntity="Asignatura", mappedBy="docentes")
     */
    private $asignaturas;
    
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="docente")
     * @ORM\OrderBy({"id" = "ASC"})
     */
    private $examenes;
    
    
    
    public function __construct() {
        $this->asignaturas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->examenes = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clave
     *
     * @param string $clave
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Add asignaturas
     *
     * @param Informatica\PrometheusBundle\Entity\Asignatura $asignaturas
     */
    public function addAsignatura(\Informatica\PrometheusBundle\Entity\Asignatura $asignaturas)
    {
        $this->asignaturas[] = $asignaturas;
    }

    /**
     * Get asignaturas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    /**
     * Add examenes
     *
     * @param Informatica\PrometheusBundle\Entity\Examen $examenes
     */
    public function addExamen(\Informatica\PrometheusBundle\Entity\Examen $examenes)
    {
        $this->examenes[] = $examenes;
    }

    /**
     * Get examenes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExamenes()
    {
        return $this->examenes;
    }
}