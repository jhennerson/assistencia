<?php

namespace App\Helpers\DataBuilders;

class ProductDataBuilder {
    private $v = [
        ['name' => 'DCP-L5652DN', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Mono', 'image' => 'product2.jpg'],
        ['name' => 'ECOSYS M8124cidn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Color', 'image' => 'product12.jpg'],
        ['name' => 'imagePROGRAF TX-3000', 'manufacturer' => 'Canon', 'description' => 'Plotter Color', 'image' => 'product3.jpg'],
        ['name' => 'AccurioPrint C3070L', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional A3 Color', 'image' => 'product4.jpg'],
        ['name' => 'TK-5222Y', 'manufacturer' => 'Kyocera', 'description' => 'Toner Amarelo', 'image' => 'product5.jpg'],
        ['name' => 'Pixma Mega Tank G3100', 'manufacturer' => 'Canon', 'description' => 'Multifuncional Tanque de Tinta Color', 'image' => 'product6.jpg'],
        ['name' => 'imageRUNNER IR1643iF', 'manufacturer' => 'Canon', 'description' => 'Multifuncional Laser Mono', 'image' => 'product8.jpg'],
        ['name' => 'P-215II', 'manufacturer' => 'Canon', 'description' => 'Scanner de Mesa', 'image' => 'product9.jpg'],
        ['name' => 'FS-6525FMP', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono', 'image' => 'product1.jpg'],
        ['name' => 'ECOSYS M3145idn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono', 'image' => 'product13.jpg'],
        ['name' => 'Ecosys M2640IDW', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono', 'image' => 'product15.jpg'],
        ['name' => 'ECOSYS M3655idn', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono', 'image' => 'product16.jpg'],
        ['name' => 'DCP-1602 - Brother', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Mono', 'image' => 'product17.jpg'],
        ['name' => 'ACP C83hc', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional Laser Color', 'image' => 'product19.jpg'],
        ['name' => 'bizhub C300i', 'manufacturer' => 'Konica Minolta', 'description' => 'Multifuncional Laser Color', 'image' => 'product18.jpg'],
        ['name' => 'TASKalfa 4012i', 'manufacturer' => 'Kyocera', 'description' => 'Multifuncional Laser Mono', 'image' => 'product21.jpg'],
        ['name' => 'WorkForce WF-C21000', 'manufacturer' => 'Epson', 'description' => 'Multifuncional Inkjet Color A3', 'image' => 'product22.jpg'],
        ['name' => 'EcoTank M3180', 'manufacturer' => 'Epson', 'description' => 'Multifuncional Inkjet Mono Recarregável', 'image' => 'product23.jpg'],
        ['name' => 'MFC-L8610CDW', 'manufacturer' => 'Brother', 'description' => 'Multifuncional Laser Color', 'image' => 'product11.jpg'],
        ['name' => 'FS-1020MFP', 'manufacturer' => 'Kyocera', 'description' => 'Printer Laser Mono', 'image' => 'product14.jpg']
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
        $v = ['name' => 'MF-445', 'manufacturer' => 'Canon', 'description' => 'Multifuncional Laser Mono', 'image' => '___8c6e0dca58b658e3a9ce4280ee76a604.png'];
        return $v;
    }
}