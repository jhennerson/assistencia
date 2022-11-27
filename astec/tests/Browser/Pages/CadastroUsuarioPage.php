<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class CadastroUsuarioPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/cadastro-usuario';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url('/cadastro-usuario'))
                ->pause(1000)
                ->assertSee('Cadastrar Usuário')
                ->typeSlowly('@email', 'cacabr10@gmail.com')
                ->typeSlowly('@password_1', '12345678')
                ->typeSlowly('@password_2', '12345678')
                ->typeSlowly('@first_name', 'Carlos')
                ->typeSlowly('@last_name', 'França')
                ->typeSlowly('@cpf', '11122233344')
                ->typeSlowly('@phone', '11925262728')
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
