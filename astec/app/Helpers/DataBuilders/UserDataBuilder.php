<?php

namespace App\Helpers\DataBuilders;

class UserDataBuilder {
    private $v = [
        ['first_name' => 'Jhennerson', 'last_name' => 'Silva', 'email' => 'jbs@mail.com', 'cpf' => '12345678910', 'phone' => '11912345678'],
        ['first_name' => 'Lucas', 'last_name' => 'Santos', 'email' => 'bsolta@mail.com', 'cpf' => '82736472672', 'phone' => '11978376527'],
        ['first_name' => 'Leonardo', 'last_name' => 'Souza', 'email' => 'leo@mail.com', 'cpf' => '19239846273', 'phone' => '11978726547'],
        ['first_name' => 'Vinicius', 'last_name' => 'Araújo', 'email' => 'god@mail.com', 'cpf' => '82787365289', 'phone' => '11976253768'],
        ['first_name' => 'Emerson', 'last_name' => 'Freitas', 'email' => 'ecfreitas@mail.com', 'cpf' => '27361836251', 'phone' => '11962736472'],
        ['first_name' => 'Lucas', 'last_name' => 'Castagnacci', 'email' => 'lhcasta@mail.com', 'cpf' => '92875928702', 'phone' => '11909756278'],
        ['first_name' => 'Jhonatan', 'last_name' => 'Silva', 'email' => 'jow@mail.com', 'cpf' => '90298756273', 'phone' => '11978726549'],
        ['first_name' => 'Gustavo', 'last_name' => 'Cesário', 'email' => 'guga@mail.com', 'cpf' => '83716549271', 'phone' => '11972663528'],
        ['first_name' => 'Gabriel', 'last_name' => 'Souza', 'email' => 'bie@mail.com', 'cpf' => '92836647289', 'phone' => '11998276489'],
        ['first_name' => 'Pedro', 'last_name' => 'Pinheiro', 'email' => 'preds@mail.com', 'cpf' => '28173647282', 'phone' => '11972837625'],
        ['first_name' => 'Caique', 'last_name' => 'Silva', 'email' => 'pato@mail.com', 'cpf' => '27168392725', 'phone' => '11972653627']
    ];

    public function getData() {
        $now = date('Y-m-d H:i:s');
        $aux = [];

        foreach ($this->v as $row) {
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
            $aux[] = $row;
        }
        return $aux;
    }

    public function getRow() {
        $v = ['first_name' => 'Name', 'last_name' => 'Last', 'email' => 'e@mail.com', 'cpf' => '10987654321', 'phone' => '11987654321'];
        return $v;
    }
}