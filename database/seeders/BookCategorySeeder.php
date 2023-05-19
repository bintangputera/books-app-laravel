<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Novel',
            'Komik',
            'Majalah',
            'Kamus',
            'Manga',
            'Ensiklopedia',
            'Biografi',
            'Naskah',
        ];
        for($i = 0; $i < count($categories); $i++) {
            $category = new BookCategory();
            $category->category_name = $categories[$i];
            $category->save();
        }
    }
}
