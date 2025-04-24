<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') //membuka halaman login
                    ->type('email', 'ryorifaldhi@gmail.com') //memasukkan email
                    ->type('password', 'pakethemat') //memasukkan password
                    ->press('LOG IN') //menekan tombol login
                    ->assertPathIs('/dashboard'); //mengalihkan halaman ke dashboard
        });
    }
}
