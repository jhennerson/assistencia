<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\CadastroUsuarioPage;
use Tests\Browser\Pages\UsuariosPage;
use Tests\Browser\Pages\UsuariosEditPage;
use Tests\Browser\Pages\UsuariosDeletePage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductCrudTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testProductCrud()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new CadastroUsuarioPage())
                    ->on(new UsuariosPage())
                    ->on(new UsuariosEditPage())
                    ->on(new UsuariosDeletePage());
                    //->on(new LojaPage())
                    //->on(new ClientesPage())
                    //->on(new ContatoPage())
                    //->on(new EntrarPage());
        });
    }
}