<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\HomePage;
use Tests\Browser\Pages\EmpresaPage;
use Tests\Browser\Pages\ServicosPage;
use Tests\Browser\Pages\LojaPage;
use Tests\Browser\Pages\ClientesPage;
use Tests\Browser\Pages\ContatoPage;
use Tests\Browser\Pages\EntrarPage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VisitPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testVisitPages()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new HomePage())
                    ->on(new EmpresaPage())
                    ->on(new ServicosPage())
                    ->on(new LojaPage())
                    ->on(new ClientesPage())
                    ->on(new ContatoPage())
                    ->on(new EntrarPage());
        });
    }
}
