<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('login')
                    ->assertSee('Login')
                    ->type('email', 'john.doe@lendflow.io')
                    ->type('password', '123')
                    ->press('Send')
                    ->assertSee('Logado')
                    ->pause(100)
                    ->assertPathIs('/selenium-teste/public/index.php/logado');
        });
    }
}
