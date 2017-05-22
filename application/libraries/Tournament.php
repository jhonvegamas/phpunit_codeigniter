<?php

/**
 * @author jhonvegamas@gmail.com
 */
class Tournament
{

    /**
     * Nombre
     * @var type string
     */
    private $name;

    /**
     * Descripción del equipo
     * @var type string
     */
    private $description;

    /**
     * URL de la imagen, ubicación en el servidor
     * @var type string
     */
    private $image_url;

    /**
     * Hexadecimal del color del torneo
     * @var type string
     */
    private $color;

    /**
     * Clase Torneo
     * @param type $name
     * @param type $description
     * @param type $image_url
     * @param type $color
     */
    function __construct($name, $description, $image_url, $color)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->color = $color;
    }

    /**
     * Trae un array con la información del torneo
     * nombre, descripción, imagen y color
     * $name,$description,$image_url,$color
     * @return type array
     */
    public function getTournament()
    {
        $data = array(
            $this->name,
            $this->description,
            $this->image_url,
            $this->color
        );
        return $data;
    }

    /**
     * Trae el nombre del torneo
     * @return type string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Trae la descripción del torneo
     * @return type string
     */
    function getDescription()
    {
        return $this->description;
    }

    /**
     * Trae la URL de la imagen
     * @return type string
     */
    function getImage_url()
    {
        return $this->image_url;
    }

    /**
     * Trae el Hexadecimal del color
     * @return type string
     */
    function getColor()
    {
        return $this->color;
    }

    /**
     * Cambia el nombre del torneo
     * @param type $name
     */
    function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Cambia la descripción del torneo
     * @param type $description
     */
    function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Cambia la URL de la imagen
     * @param type $image_url
     */
    function setImage_url($image_url)
    {
        $this->image_url = $image_url;
    }

    /**
     * Cambia el color del torneo
     * @param type $color
     */
    function setColor($color)
    {
        $this->color = $color;
    }

}
