<?php
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $categories =[
        ['name'=>'Slipper','image'=>'100.jpg','description'=>'good'],
        ['name'=>'Meat','image'=>'120.jpg','description'=>'very good'],
        ['name'=>'Umbrella','image'=>'130.jpg','description'=>'nice'],
    ];
    public function run()
    {
        //
        foreach($this->categories as $category){
            Category::create([
                'name'=>$category['name'],
                'image'=>$category['image'],
                'description'=>$category['description']
            ]);
        }
    }
}
