<?php

namespace Walkeros\MicanastaBundle\Entity\Importacion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodestac
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Prodestac
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
     * @ORM\Column(name="descripcion", type="string")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="normal", type="integer")
     */
    private $normal;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string")
     */
    private $estado;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Prodestac
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Prodestac
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
     * Set normal
     *
     * @param integer $normal
     * @return Prodestac
     */
    public function setNormal($normal)
    {
        $this->normal = $normal;
    
        return $this;
    }

    /**
     * Get normal
     *
     * @return integer 
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Prodestac
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
