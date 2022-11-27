<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Helpers\DataBuilders\ProductDataBuilder;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function setUp(): void {
        parent::setUp();
        Product::truncate();
        $pdb = new ProductDataBuilder;
        $v = $pdb->getData();
        Product::insert($v);
    }

    public function test_le_um_registro_de_produto() {
        $dcpL5652 = Product::find(1);
        $name = $dcpL5652['name'];
        $this->assertEquals('DCP-L5652DN', $name);
    }

    public function test_le_todos_os_registros_de_produto() {
        $v = Product::all();
        $this->assertEquals(20, sizeof($v));
    }

    public function test_le_registros_de_produtos_estatisticamente() {
        $v = Product::all();
        $this->assertEquals('DCP-L5652DN', $v[0]['name']);
        $this->assertEquals('Canon', $v[6]['manufacturer']);
        $this->assertEquals('product14.jpg', $v[19]['image']);
    }

    public function test_atualiza_registro_de_produto() {
        $wfC21000 = Product::find(17);
        $this->assertEquals('WorkForce WF-C21000', $wfC21000['name']);
        $wfC21000['name'] = 'GaGa';
        $wfC21000->save();
        $gaga = Product::find(17);
        $this->assertEquals('GaGa', $gaga['name']);
    }

    public function test_remove_registro_de_produto() {
        $fs1020 = Product::find(20);
        $fs1020->delete();
        $fs1020 = Product::find(20);
        $this->assertNull($fs1020);
    }

    public function test_cadastra_produto() {
        $pdb = new ProductDataBuilder();
        $row = $pdb->getRow();
        Product::create($row);
        $v = Product::all();
        $vSize = sizeof($v) - 1;
        $this->assertEquals(20,$vSize);
        $pdct = $v[$vSize];
        $this->assertEquals('Multifuncional Laser Mono', $pdct['description']);
    }
}
