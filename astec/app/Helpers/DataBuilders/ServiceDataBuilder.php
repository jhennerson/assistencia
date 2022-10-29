<?php

namespace App\Helpers\DataBuilders;

class ProductDataBuilder {
    private $v = [
        ['header' => 'Manutenção Preventiva', 'description' => 'Manutenção de rotina'],
        ['header' => 'Manutenção Corretiva', 'description' => 'Equipamento não está ligando'],
        ['header' => 'Revisão','description' => 'Revisão completa'],
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
}