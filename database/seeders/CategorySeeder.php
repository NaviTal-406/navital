<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Rumah Sakit',
            'RSUD',
            'RS',
            'RSIA',
            'RSU',
            'RSUP',
            'RSKGM',
            'RSKB',
            'RSKG',
            'RSAU',
            'RSGM',
        ];

        foreach ($categories as $name) {
            $slug = Str::slug($name);
            Category::updateOrCreate(
                ['slug' => $slug],
                ['name' => $name]
            );

            echo "Inserted: $name with slug: $slug\n";
        }
    }
}
