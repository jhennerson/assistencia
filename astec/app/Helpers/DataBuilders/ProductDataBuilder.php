<?php

namespace App\Helpers\DataBuilders;

class ProductDataBuilder {
    private $v = [
        ['name' => 'DCP-L5652DN', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'ECOSYS M8124cidn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Color'],
        ['name' => 'imagePROGRAF TX-3000', 'manufacturer' => 'Canon', 'description' => 'Plotter Color'],
        ['name' => 'AccurioPrint C3070L', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional A3 Color'],
        ['name' => 'TK-5222Y', 'manufacturer' => 'Kyocera', 'description' => 'Toner Amarelo'],
        ['name' => 'Pixma Mega Tank G3100', 'manufacturer' => 'Canon', 'description' => 'Multifuncional Tanque de Tinta Color'],
        ['name' => 'imageRUNNER IR1643iF', 'manufacturer' => 'Canon', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'P-215II', 'manufacturer' => 'Canon', 'description' => 'Scanner de Mesa'],
        ['name' => 'FS-6525FMP', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'ECOSYS M3145idn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'FS-1020MFP', 'manufacturer' => 'Kyocera', 'description' => 'Printer Laser Mono'],
        ['name' => 'Ecosys M2640IDW', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'ECOSYS M3655idn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'DCP-1602 - Brother', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'ACP C83hc', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional Laser Color'],
        ['name' => 'bizhub C300i', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional Laser Color'],
        ['name' => 'TASKalfa 4012i', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono'],
        ['name' => 'WorkForce WF-C21000', 'manufacturer' => 'Epson', 'description' => 'Multifuncional Inkjet Color A3'],
        ['name' => 'EcoTank M3180', 'manufacturer' => 'Epson', 'description' => 'Multifuncional Inkjet Mono Recarregável'],
        ['name' => 'MFC-L8610CDW', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Color']
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