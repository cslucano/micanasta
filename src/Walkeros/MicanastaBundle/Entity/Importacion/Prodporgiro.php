<?php

namespace Walkeros\MicanastaBundle\Entity\Importacion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodporgiro
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Prodporgiro
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
     * @ORM\Column(name="giro", type="string")
     */
    private $giro;

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
     * Set giro
     *
     * @param string $giro
     * @return Prodporgiro
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;
    
        return $this;
    }

    /**
     * Get giro
     *
     * @return string 
     */
    public function getGiro()
    {
        return $this->giro;
    }

    /**
     * Set anho
     *
     * @param integer $anho
     * @return Prodporgiro
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
     * @return Prodporgiro
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
     * @return Prodporgiro
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
