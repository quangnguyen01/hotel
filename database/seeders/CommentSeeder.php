<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'id' => 1,
                'room_id' => 1,
                'user_id' => 2,
                'message' => 'Sạch sẽ, giá rẻ, nhân viên phục vụ tận tình, khá gần trung tâm',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'room_id' => 1,
                'user_id' => 2,
                'message' => 'Không gian yên tĩnh, nhân viên lễ phép chu đáo, phòng sạch sẽ đầy đủ tiện nghi. Nước nóng luôn có và có free 2 chai nước trong phòng. Nhân viên có hỗ trợ thêm về check in cũng như check out.',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'room_id' => 1,
                'user_id' => 3,
                'message' => 'Phòng sang trọng đẹp. Giá lại ưu dai, căn hộ trong khu vinhome rất đẹp, yên tĩnh cao cấp. Mình rất thích',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
