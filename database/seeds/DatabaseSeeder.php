<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // factory(App\Category::class)->create();
        $this->call(CategoriesTableSeeder::class);
        // factory(App\Price::class)->create();
        $this->call(PricesTableSeeder::class);
        // factory(App\Brand::class)->create();
         $this->call(BrandsTableSeeder::class);

    }
}
