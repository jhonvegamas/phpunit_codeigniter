<?php

class User
{

    /**
     * Nombre del usuario
     * @var type string
     */
    private $email;

    /**
     * Contraseña del usuario
     * @var type string
     */
    private $password;

    /**
     * Clase Usuario
     * @param type $email
     * @param type $password
     */
    public function registUser($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Trae la contraseña del usuario
     * @return type string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Trae el nombre del usuario
     * @return type string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Actualiza los atributos del usuario por medio de el arreglo que llega por
     * la base de datos
     * @param type $row
     */
    public function setUser($row)
    {
        if ($row != null) {
            $this->email = $row->email;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Evalua que la contraseña y el usuario sean correctos
     * @param User $user
     */
    public function login(User $user)
    {
            
    }
}
