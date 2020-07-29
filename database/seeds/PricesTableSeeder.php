<?php

use Illuminate\Database\Seeder;
use App\Models\Price;
class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $prices = [
        ['selling_price' => '3000','wholesale_price' => '2500','purchase_price' =>'2500','currency' => 'MMK'],
        ['selling_price' => '4000','wholesale_price' => '3500','purchase_price' =>'3000','currency' => 'MMK'],
        ['selling_price' => '5000','wholesale_price' => '4500','purchase_price' =>'4000','currency' => 'MMK'],
        ['selling_price' => '6000','wholesale_price' => '5500','purchase_price' =>'5000','currency' => 'MMK'],
        ['selling_price' => '7000','wholesale_price' => '6500','purchase_price' =>'6000','currency' => 'MMK'],
    ];
    public function run()
    {
        //
        foreach($this ->prices as $price){
            price::create([
                'selling_price'   => $price['selling_price'],
                'wholesale_price' => $price['wholesale_price'],
                'purchase_price'  => $price['wholesale_price'],
                'currency'        => $price['currency']
            ]);
        }

    }
}
