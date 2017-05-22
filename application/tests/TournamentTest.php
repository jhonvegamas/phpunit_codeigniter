<?php

require_once('application/libraries/Tournament.php');

/**
 * require 'package/class.php';
 * use @test
 * $this->assertInstanceOf(Object::class, $object);
 */
class TournamentTest extends PHPUnit_Framework_TestCase
{

    function test_it_should_construct()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $this->assertInstanceOf(Tournament::class, $tournament);
    }

    function test_it_should_have_a_tournament_name()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $name = $tournament->getName();
        $this->assertEquals('UPTC', $name);
    }

    function test_it_should_have_a_tournament_description()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $name = $tournament->getDescription();
        $this->assertEquals('Torneo de la U', $name);
    }
    
    function test_it_should_have_a_tournament_image_url()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $name = $tournament->getImage_url();
        $this->assertEquals('/img/foto.png', $name);
    }
    
    function test_it_should_have_a_tournament_color()
    {
        $tournament = new Tournament('UPTC', 'Torneo de la U', '/img/foto.png', '#ffff');
        $name = $tournament->getColor();
        $this->assertEquals('#ffff', $name);
    }
    
}
