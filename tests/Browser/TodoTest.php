<?php
 
namespace Tests\Browser;
 
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
 
class TodoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                     ->assertSee('Login')
                     ->type('email', 'john.doe@lendflow.io')
                     ->type('password', '123')
                     ->press('Send')
                     ->assertSee('Logado')
                     ->assertPathIs('/selenium-teste/public/index.php/logado');
        });
 
    }
}