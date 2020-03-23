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
            $browser->visit('https://lambdatest.github.io/sample-todo-app/')
                    ->assertTitleContains('Sample page - lambdatest.com')
                    ->check("li1")
                    ->check("li3")
                    ->type("#sampletodotext", "Let's add new to do item")
                    ->press('#addbutton');
            sleep(10);;
        });
    }
}
