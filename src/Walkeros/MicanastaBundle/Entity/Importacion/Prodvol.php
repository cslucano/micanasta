<?php

namespace Walkeros\MicanastaBundle\Entity\Importacion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodvol
 *
 * @ORM\Table(name="prodvol")
 * @ORM\Entity
 */
class Prodvol
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
     * @ORM\Column(name="codigoprod", type="string")
     */
    private $codigoprod;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="anho", type="integer")
     */
    private $anho;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="vol", type="integer")
     */
    private $vol;


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
     * Set codigoprod
     *
     * @param string $codigoprod
     * @return Prodvol
     */
    public function setCodigoprod($codigoprod)
    {
        $this->codigoprod = $codigoprod;
    
        return $this;
    }

    /**
     * Get codigoprod
     *
     * @return string 
     */
    public function getCodigoprod()
    {
        return $this->codigoprod;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Prodvol
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
     * Set anho
     *
     * @param integer $anho
     * @return Prodvol
     */
    public function setAnho($anho)
    {
        $this->anho = $anho;
    
        return $this;
    }

    /**
     * Get anho
     *
     * @return integer 
     */
    public function getAnho()
    {
        return $this->anho;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Prodvol
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
     * Set vol
     *
     * @param integer $vol
     * @return Prodvol
     */
    public function setVol($vol)
    {
        $this->vol = $vol;
    
        return $this;
    }

    /**
     * Get vol
     *
     * @return integer 
     */
    public function getVol()
    {
        return $this->vol;
    }
}
