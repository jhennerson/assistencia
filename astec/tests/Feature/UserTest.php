<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Helpers\DataBuilders\UserDataBuilder;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function setUp(): void {
        parent::setUp();
        User::truncate();
        $udb = new UserDataBuilder;
        $v = $udb->getData();
        User::insert($v);
    }

    public function test_le_um_registro_de_usuario() {
        $jhennerson = User::find(1);
        $nome = $jhennerson['first_name'];
        $this->assertEquals('Jhennerson', $nome);
    }

    public function test_le_todos_os_registros_de_usuario() {
        $v = User::all();
        $this->assertEquals(11, sizeof($v));
    }

    public function test_le_registros_de_usuarios_estatisticamente() {
        $v = User::all();
        $this->assertEquals('Silva', $v[0]['last_name']);
        $this->assertEquals('ecfreitas@mail.com', $v[4]['email']);
        $this->assertEquals('11972653627', $v[10]['phone']);
    }

    public function test_atualiza_registro_de_usuario() {
        $gustavo = User::find(8);
        $this->assertEquals('Cesário', $gustavo['last_name']);
        $gustavo['last_name'] = 'Velozo';
        $gustavo->save();
        $velozo = User::find(8);
        $this->assertEquals('Velozo', $velozo['last_name']);
    }

    public function test_remove_registro_de_usuario() {
        $caique = User::find(11);
        $caique->delete();
        $caique = User::find(11);
        $this->assertNull($caique);
    }

    public function test_cadastra_usuario() {
        $udb = new UserDataBuilder();
        $row = $udb->getRow();
        User::create($row);
        $v = User::all();
        $vSize = sizeof($v) - 1;
        $this->assertEquals(11,$vSize);
        $usr = $v[$vSize];
        $this->assertEquals('e@mail.com', $usr['email']);
    }
}
