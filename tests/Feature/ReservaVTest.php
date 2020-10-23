<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetalleVTest extends TestCase
{
    /**
      @test */
    public function ReservaVehiculo() {


        $this->visit('/formulario_renta/{valor2}')
        ->type(' ', 'nombre')
        ->type(' ', 'apellido')
        ->type(' ', 'correo')
        ->type(' ', 'tipopago')
        ->press('reservar')
        ->see('Vehiculo Reservado')
    }
   
}
