<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class UsuariosEditPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/usuarios/1/edit';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url('/usuarios/1/edit'))
                ->pause(1000)
                ->assertSee('Editar Usuário')
                ->typeSlowly('@email', 'jhennerson@mail.com')
                ->typeSlowly('@password_1', '12345678')
                ->typeSlowly('@password_2', '12345678')
                ->click('@submit')
                ->pause(1000)
                ->visit('usuarios');
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
