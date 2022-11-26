<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Helpers\DataBuilders\ProductDataBuilder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $pdb = new ProductDataBuilder();
        $v = $pdb->getData();
        Product::insert($v);
        Product::factory(23)->create();
    }
}
