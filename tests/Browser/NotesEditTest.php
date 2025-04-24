<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/edit-note-page/2') //membuka halaman Edit notes
                    ->type('email', 'ryorifaldhi@gmail.com') //memasukkan email
                    ->type('password', 'pakethemat') //memasukkan password
                    ->press('LOG IN') //menekan tombol login
                    ->type('title', 'Test Notes') //memasukkan title notes
                    ->type('description', 'Test Notes Edit') //memasukkan deskripsi baru
                    ->press('UPDATE') //menekan tombol update note
                    ->assertPathIs('/notes'); //mengalihkan halaman ke notes
        });
    }
}
