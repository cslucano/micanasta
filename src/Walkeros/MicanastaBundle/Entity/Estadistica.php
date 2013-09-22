<?php

namespace Walkeros\MicanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadistica
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estadistica
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
     * @var Producto 
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     */
    private $producto;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer")
     */
    private $mes;

    /**
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="estacionalidad", type="integer", nullable=true)
     */
    private $estacionalidad;


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
     * Set mes
     *
     * @param integer $mes
     * @return Estadistica
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    
        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set estacionalidad
     *
     * @param integer $estacionalidad
     * @return Estadistica
     */
    public function setEstacionalidad($estacionalidad)
    {
        $this->estacionalidad = $estacionalidad;
    
        return $this;
    }

    /**
     * Get estacionalidad
     *
     * @return integer 
     */
    public function getEstacionalidad()
    {
        return $this->estacionalidad;
    }
}
