<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class UsuariosPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/usuarios';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url('usuarios'))
                ->pause(1000)
                ->assertSee('ID')
                ->scrollIntoView('@footer')
                ->pause(3000)
                ->scrollIntoView('@edit1')
                ->pause(3000)
                ->click('@edit1')
                ->assertPathIs('/usuarios/1/edit')
                ->pause(1000);
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
