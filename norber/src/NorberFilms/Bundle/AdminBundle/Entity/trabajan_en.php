<?php

namespace NorberFilms\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * trabajan_en
 *
 * @ORM\Table(name="trabajan_en")
 * @ORM\Entity(repositoryClass="NorberFilms\Bundle\AdminBundle\Repository\trabajan_enRepository")
 */


class trabajan_en
{

    /**
     * @ORM\ManyToOne(targetEntity="pelicula", inversedBy="trabajan_en")
     * @ORM\JoinColumn(name="pelicula_id", referencedColumnName="id")
     */

    protected $pelicula;


    /**
     * @ORM\ManyToOne(targetEntity="persona", inversedBy="trabajan_en")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     */

    protected $persona;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="pelicula_id", type="integer")
     */
    private $peliculaId;

    /**
     * @var int
     *
     * @ORM\Column(name="persona_id", type="integer")
     */
    private $personaId;

    /**
     * @var int
     *
     * @ORM\Column(name="rol", type="integer")
     */
    private $rol;


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
     * Set peliculaId
     *
     * @param integer $peliculaId
     *
     * @return trabajan_en
     */
    public function setPeliculaId($peliculaId)
    {
        $this->peliculaId = $peliculaId;

        return $this;
    }

    /**
     * Get peliculaId
     *
     * @return int
     */
    public function getPeliculaId()
    {
        return $this->peliculaId;
    }

    /**
     * Set personaId
     *
     * @param integer $personaId
     *
     * @return trabajan_en
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId
     *
     * @return int
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }

    /**
     * Set rol
     *
     * @param integer $rol
     *
     * @return trabajan_en
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return int
     */
    public function getRol()
    {
        return $this->rol;
    }
}

