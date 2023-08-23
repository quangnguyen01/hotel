<?php

namespace Database\Seeders;

use App\Enums\Role;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Bedroom',
                'image' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_4_bavfsk.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'ATTIC Room',
                'image' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4424930258743_c683f3be8ac852443919f713130f2ac7_wn9mv5.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Studio Room',
                'image' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789953/z4392593425293_c7efa5254ddfd7e01f42b90af47542bf_iqmx2s.jpg',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
