<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::insert(array(
        array('id' => '1','name' => 'Spanish to English','slug' => 'spanish-to-english','description' => '<p>Spanish to English</p>','image' => 'null','meta_title' => 'dasd','meta_description' => 'Spanish to English','meta_keywords' => 'Spanish to English','total_view' => NULL,'impression' => NULL,'created_by' => '1','updated_by' => NULL,'created_at' => '2024-04-16 12:44:41','updated_at' => '2024-04-16 12:44:41','deleted_at' => NULL),
        array('id' => '2','name' => 'Spainsh To English','slug' => 'spainsh-to-english','description' => '<p>Spanish to English</p><p><br></p>','image' => 'null','meta_title' => 'Spanish to English','meta_description' => 'Spanish to English','meta_keywords' => 'Spanish to English','total_view' => NULL,'impression' => NULL,'created_by' => '1','updated_by' => NULL,'created_at' => '2024-04-16 12:45:33','updated_at' => '2024-04-16 12:45:33','deleted_at' => NULL)
        ));
    }
}