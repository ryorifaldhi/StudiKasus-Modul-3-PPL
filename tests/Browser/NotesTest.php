<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/create-note') //membuka halaman Notes
                    ->type('email', 'ryorifaldhi@gmail.com') //memasukkan email
                    ->type('password', 'pakethemat') //memasukkan password
                    ->press('LOG IN') //menekan tombol login
                    ->type('title', 'Test Notes') //memasukkan title notes
                    ->type('description', 'Test Notes') //memasukkan deskripsi
                    ->press('CREATE') //menekan tombol create note
                    ->assertPathIs('/notes'); //mengalihkan halaman ke notes
        });
    }
}
