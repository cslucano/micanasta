<?php

namespace Walkeros\MicanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string")
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="decimal")
     */
    private $precio;

    /**
     * @var float
     *
     * @ORM\Column(name="variacion", type="decimal")
     */
    private $variacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estacionalidad", type="integer", nullable=true)
     */
    private $estacionalidad;

    /**
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     */
    private $categoria;

    /**
     * @var Giro
     *
     * @ORM\ManyToOne(targetEntity="Giro")
     */
    private $giro;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'images/products';
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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
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
     * Set precio
     *
     * @param float $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set variacion
     *
     * @param float $variacion
     * @return Producto
     */
    public function setVariacion($variacion)
    {
        $this->variacion = $variacion;
    
        return $this;
    }

    /**
     * Get variacion
     *
     * @return float 
     */
    public function getVariacion()
    {
        return $this->variacion;
    }

    /**
     * Set estacionalidad
     *
     * @param integer $estacionalidad
     * @return Producto
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

    /**
     * Set categoria
     *
     * @param \Walkeros\MicanastaBundle\Entity\Categoria $categoria
     * @return Producto
     */
    public function setCategoria(\Walkeros\MicanastaBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Walkeros\MicanastaBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set giro
     *
     * @param \Walkeros\MicanastaBundle\Entity\Giro $giro
     * @return Producto
     */
    public function setGiro(\Walkeros\MicanastaBundle\Entity\Giro $giro = null)
    {
        $this->giro = $giro;
    
        return $this;
    }

    /**
     * Get giro
     *
     * @return \Walkeros\MicanastaBundle\Entity\Giro 
     */
    public function getGiro()
    {
        return $this->giro;
    }
}
