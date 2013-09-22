<?php

namespace Walkeros\MicanastaBundle\Entity\Importacion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodporproc
 *
 * @ORM\Table(name="prodporproc")
 * @ORM\Entity
 */
class Prodporproc
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
     * @ORM\Column(name="codigo", type="string")
     */
    private $codigo;

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
     * @var string
     *
     * @ORM\Column(name="departamento", type="string")
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string")
     */
    private $provincia;

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
     * Set codigo
     *
     * @param string $codigo
     * @return Prodporproc
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigoprod
     *
     * @param string $codigoprod
     * @return Prodporproc
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
     * @return Prodporproc
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
     * Set departamento
     *
     * @param string $departamento
     * @return Prodporproc
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Prodporproc
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set anho
     *
     * @param integer $anho
     * @return Prodporproc
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
     * @return Prodporproc
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
     * @return Prodporproc
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
