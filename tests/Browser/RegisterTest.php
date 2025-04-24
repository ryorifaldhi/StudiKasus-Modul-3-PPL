<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register') //membuka halaman register
                    ->type('name', 'Test User') //memasukkan nama
                    ->type('email', 'testuser@example.com') //memasukkan email
                    ->type('password', 'password123') //memasukkan password
                    ->type('password_confirmation', 'password123') //memasukkan konfirmasi password
                    ->press('REGISTER') //menekan tombol register
                    ->assertPathIs('/dashboard'); //mengalihkan halaman ke dashboard

        });
    }
}
