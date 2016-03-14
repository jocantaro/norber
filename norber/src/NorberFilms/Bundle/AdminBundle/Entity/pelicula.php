<?php

namespace NorberFilms\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pelicula
 *
 * @ORM\Table(name="pelicula")
 * @ORM\Entity(repositoryClass="NorberFilms\Bundle\AdminBundle\Repository\peliculaRepository")
 */
class pelicula
{


    /**
     * @ORM\OneToMany(targetEntity="trabajan_en", mappedBy="pelicula")
     */

    protected $trabajan_en;


    protected $pelicula;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=100)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="sinopsis", type="text")
     */
    private $sinopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="calificacion", type="string", length=30)
     */
    private $calificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="portada", type="string", length=255)
     */
    private $portada;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return pelicula
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set sinopsis
     *
     * @param string $sinopsis
     *
     * @return pelicula
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get sinopsis
     *
     * @return string
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return pelicula
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     *
     * @return pelicula
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return pelicula
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set portada
     *
     * @param string $portada
     *
     * @return pelicula
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return string
     */
    public function getPortada()
    {
        return $this->portada;
    }
}

