<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     private $brands = [
    			['name'=>'Umbrella','description'=>'This brand is very nice'],
    			['name'=>'AC','description'=>'this brand is good'],
    			['name'=>'Umbrella','description'=>'This brand is very nice'],
    			['name'=>'AC','description'=>'this brand is good'],
    			['name'=>'Umbrella','description'=>'This brand is very nice']
    ];
    public function run()
    {
        //
        foreach($this->brands as $brand)
        Brand::create([
        	'name'=>$brand['name'],
        	'description'=>$brand['description']
        ]);
    }
}
