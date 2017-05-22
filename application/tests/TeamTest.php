<?php

class TeamTest extends PHPUnit_Framework_TestCase
{

    private $base_url;
    private $controller;

    function __construct()
    {
        $this->controller = 'team';
        $this->base_url = 'http://localhost/phpunit_codeigniter/phpunit/' . $this->controller . 'Test/';
    }

    function test_inserta_el_equipo()
    {
        $use = $this->exec('test_inserta_el_equipo');
        $this->assertEquals(1, $use);
    }

    function test_no_inserta_el_equipo()
    {
        try
        {
            $use = $this->exec('test_inserta_el_equipo');
            $this->assertEquals(1, $use);
            return false;
        } catch (Exception $exc)
        {
            $this->assertEquals('', $this->exec('eliminar_equipo'));
            return true;
        }
    }

    private function exec($test)
    {
        return file_get_contents($this->base_url . $test);
    }

}
