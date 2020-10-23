<?php

nomespace Test\Feature;

use ...

class RutaTest extends TestCase
{

    @test

    function it_loads_the_page_controllers_page()
    {

        $response = $this->get('/PagesController@inicio');

        ->assertStatus(200)

        ->assertStatus('/PagesController@inicio');

    }

    @test 
    function it_loads_the_detalle_de_vehiculo()
    {
        $this->get('/detalle_de_vehiculo/{valor')
            ->assertStatus(200)
            ->assertSee('Mostrat detalle de viheiculo'):
        }
    @test 
    function it_loads_the_formulario_de_renta()
    {
        $this->get('/formulario_renta/{valor2}')
            ->assertStatus(200)
            ->assertSee('Mostrar formulario de renta'):
        }

     @test 
       function it_loads_the_crear_renta() 
        {
            $this->get('/renta','PagesController@rentaCrear')
                ->assertStatus(200)
                ->assertSee('crear renta'):
            }   
    
}

