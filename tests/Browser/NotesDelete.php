<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesDelete extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group delete
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes') //membuka halaman Notes
                    ->type('email', 'ryorifaldhi@gmail.com') //memasukkan email
                    ->type('password', 'pakethemat') //memasukkan password
                    ->press('LOG IN') //menekan tombol login
                    ->press('Delete'); // menghapus notes
        });
    }
}
