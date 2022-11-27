<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class ProdutosDeletePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/produtos';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url('/produtos'))
                ->pause(1000)
                ->assertSee('Multifuncional Mono Laser 42ppm')
                ->click('@delete1')
                ->pause(1000)
                ->visit('produtos')
                ->assertDontSee('Multifuncional Mono Laser 42ppm')
                ->pause(4000);
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
