<?php

namespace Database\Seeders;

use App\Enums\BookingStatus;
use App\Enums\RoomStatus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            [
                'id' => 1,
                'room_id' => 1,
                'name' => 'David Moyes',
                'email' => 'davidmoyes@gmail.com',
                'phone' => '309438389',
                'adult' => 2,
                'child' => 1,
                'check_in_date' => '2023-09-03',
                'check_in_time' => '08:00:00',
                'check_out_date' => '2023-09-05',
                'check_out_time' => '08:00:00',
                'status' => BookingStatus::CONFIRM,
                'special_request' => '',
                'unit_price' => 1700000,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'room_id' => 10,
                'name' => 'Jame Maddison',
                'email' => 'jamemaddison@gmail.com',
                'phone' => '3434345656',
                'adult' => 2,
                'child' => 2,
                'check_in_date' => '2023-09-03',
                'check_in_time' => '08:00:00',
                'check_out_date' => '2023-09-05',
                'check_out_time' => '08:00:00',
                'status' => BookingStatus::CONFIRM,
                'special_request' => '',
                'unit_price' => 1100000,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'room_id' => 5,
                'name' => 'Darwin Nunes',
                'email' => 'darwinnunes@gmail.com',
                'phone' => '456688543',
                'adult' => 1,
                'child' => 2,
                'check_in_date' => '2023-09-03',
                'check_in_time' => '08:00:00',
                'check_out_date' => '2023-09-05',
                'check_out_time' => '08:00:00',
                'status' => BookingStatus::CONFIRM,
                'special_request' => '',
                'unit_price' => 2200000,
                'created_at' => Carbon::now()
            ],
        ]);

        $bookings = DB::table('bookings')->get();
        foreach ($bookings as $data) {
            DB::table('rooms')->where('id', $data->room_id)
                ->update(['status' => RoomStatus::BOOKED]);
        }
    }
}
