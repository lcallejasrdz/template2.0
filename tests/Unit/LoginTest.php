<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     *
     * @test
     */
    function verify_the_status_page()
    {
    	$this->get('/login')
    		->assertStatus(200)
    		->assertSee('¡Bienvenido!');
    }

    /**
     *
     * @test
     */
    function verify_the_login_function()
    {
    	$this->get('/login')
    		->assertStatus(200)
    		->assertSee('¡Bienvenido!');
    }
}
