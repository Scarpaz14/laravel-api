<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Backend', 'Frontend', 'Full Stack',' DevOps'];

        foreach($categories as $category){
            $newCategories = new Category();
            $newCategories->name = $category;
            $newCategories->slug = Str::of($category)->slug('-');

            $newCategories->save();
        }
    }
}
