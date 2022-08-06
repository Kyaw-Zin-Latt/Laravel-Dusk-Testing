<?php

namespace Tests\Browser;

use Carbon\Traits\Date;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
            ->type('name', "Kyaw Zin Latt")
            ->type('email', "kzl@gmail.com")
            ->type('password', "password")
            ->type('password_confirmation', "password")
            ->click('button[type="submit"]')
            ->assertSee('You have registered successfully');
        });
    }
}
