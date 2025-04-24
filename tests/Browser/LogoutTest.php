<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test for logout functionality.
     * @group logout
     */
    public function testUserCanLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'ryorifaldhi@gmail.com')
                    ->type('password', 'pakethemat')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->press('Ryo')
                    ->clickLink('Log Out') // Klik dropdown user (jika pakai dropdown)
                    ->assertPathIs('/'); // Sesuaikan dengan redirect setelah logout
        });
    }
}
