<?php

namespace NorberFilms\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * genero
 *
 * @ORM\Table(name="genero")
 * @ORM\Entity(repositoryClass="NorberFilms\Bundle\AdminBundle\Repository\generoRepository")
 */
class genero
{

    /**
     * @ORM\OneToMany(targetEntity="pelicula", mappedBy="genero")
     */

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
     * @ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return genero
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}

