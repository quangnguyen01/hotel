<?php

namespace Database\Seeders;

use App\Enums\Role;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'name' => 'admin',
                'avatar' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692790208/testimonial-2_lpgdkl.jpg',
                'phone_number' => '0934383928',
                'role' => Role::ADMIN,
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
            ],
            [
                'email' => 'jameswatson@gmail.com',
                'name' => 'James Watson',
                'avatar' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692790208/testimonial-3_rqjr3k.jpg',
                'phone_number' => '0956565656',
                'role' => Role::USER,
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
            ],
            [
                'email' => 'jonathansara@gmail.com',
                'name' => 'Jonathan Sara',
                'avatar' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692790208/testimonial-4_u3sqd1.jpg',
                'phone_number' => '0934343434',
                'role' => Role::USER,
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
