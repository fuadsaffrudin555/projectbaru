<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Toyota', 'Honda', 'Suzuki', 'Nissan', 'BMW', 'Mercedec-Benz', 'Hyundai', 'KIA', 'Isuzu', 'Mitsubushi', 'Daihatsu', 'Mazda', 'Chevrolet'
        ];

        foreach ($data as $value){
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
