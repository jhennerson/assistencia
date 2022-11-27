<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\CadastroProdutoPage;
use Tests\Browser\Pages\ProdutosPage;
use Tests\Browser\Pages\ProdutosEditPage;
use Tests\Browser\Pages\ProdutosDeletePage;
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
            $browser->visit(new CadastroProdutoPage())
                    ->on(new ProdutosPage())
                    ->on(new ProdutosEditPage())
                    ->on(new ProdutosDeletePage());
        });
    }
}
