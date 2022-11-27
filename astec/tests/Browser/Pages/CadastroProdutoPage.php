<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class CadastroProdutoPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/cadastro-produto';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url('/cadastro-produto'))
                ->pause(1000)
                ->assertSee('Cadastrar Produto')
                ->typeSlowly('@name', 'ImagePress C1')
                ->typeSlowly('@manufacturer', 'Canon')
                ->typeSlowly('@description', 'High Quality Graphics Legacy Color Laser Printer')
                ->click('@submit')
                ->pause(1000)
                ->visit('produtos');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}
