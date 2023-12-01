<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Front-end', 'Back-end', 'Full-stack'];

        foreach ($data as $type){
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Str::slug($type, '-');
            $new_type->save();
        }
    }
}
