<?php

namespace NorberFilms\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="NorberFilms\Bundle\AdminBundle\Repository\personaRepository")
 */
class persona
{

    /**
     * @ORM\OneToMany(targetEntity="trabajan_en", mappedBy="persona")
     */



    protected $trabajan_en;

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
     * @ORM\Column(name="nombre", type="string", length=60)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=100)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=100)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="link_imdb", type="string", length=255)
     */
    private $linkImdb;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return persona
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
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return persona
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return persona
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set linkImdb
     *
     * @param string $linkImdb
     *
     * @return persona
     */
    public function setLinkImdb($linkImdb)
    {
        $this->linkImdb = $linkImdb;

        return $this;
    }

    /**
     * Get linkImdb
     *
     * @return string
     */
    public function getLinkImdb()
    {
        return $this->linkImdb;
    }
}

