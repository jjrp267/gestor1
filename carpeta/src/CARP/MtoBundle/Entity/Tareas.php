<?php

namespace CARP\MtoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tareas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CARP\MtoBundle\Entity\TareasRepository")
 */
class Tareas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tarea", type="string", length=25)
     */
    private $tarea;

    /**
     * @var string
     *
     * @ORM\Column(name="desctarea", type="string", length=255)
     */
    private $desctarea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatarea", type="datetime")
     */
    private $fechatarea;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal")
     */
    private $cantidad;


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
     * Set tarea
     *
     * @param string $tarea
     * @return Tareas
     */
    public function setTarea($tarea)
    {
        $this->tarea = $tarea;

        return $this;
    }

    /**
     * Get tarea
     *
     * @return string 
     */
    public function getTarea()
    {
        return $this->tarea;
    }

    /**
     * Set desctarea
     *
     * @param string $desctarea
     * @return Tareas
     */
    public function setDesctarea($desctarea)
    {
        $this->desctarea = $desctarea;

        return $this;
    }

    /**
     * Get desctarea
     *
     * @return string 
     */
    public function getDesctarea()
    {
        return $this->desctarea;
    }

    /**
     * Set fechatarea
     *
     * @param \DateTime $fechatarea
     * @return Tareas
     */
    public function setFechatarea($fechatarea)
    {
        $this->fechatarea = $fechatarea;

        return $this;
    }

    /**
     * Get fechatarea
     *
     * @return \DateTime 
     */
    public function getFechatarea()
    {
        return $this->fechatarea;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Tareas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
