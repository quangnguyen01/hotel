<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'id' => 1,
                'name' => '202 bh4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781675/z4366478765216_3643b1cdedd93007d940fc27f7e8a753_oe2uoh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781674/z4366478767174_d133c406f7a167881a20ff86e293a02c_ruujfb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781673/z4366478761334_bbaa2b0e994ee0634cde2aaeb4281a20_sp8ume.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781673/z4366478748729_58c9b4310852e5d098da74ce459f1d92_jbyxhp.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781672/z4366478760743_5894cc631022cf4ec0a76fa52f199732_nawgnc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781672/z4366478757636_e1f318bbfe990676b56ecc0822603abc_gfcpal.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781672/z4366478716690_921140dc427497b62fd2f9b2acfa31c5_inldnh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781672/z4366478729374_c994562489d7717e77887d5a804135f8_tatwfi.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781671/z4366478728479_435cdb2cdbf8370ce61fe03f06a8afe9_e5spii.jpg',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '850000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => '301 - 1610',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781937/z4327630202054_981cd4a9561c6d90c800f2f3bada2552_aopqzb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781937/z4327630196366_dd8b279221edc31fcd8c973255257c5f_fs6awo.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781935/z4327630193429_3fe9a9d20cc6f365d9532643c8f92db7_rk0bw9.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781936/z4327630186310_a5d34c9efd61393a006ef9319b9ef2c9_iq6qjy.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781935/z4327630181899_70939e581d632e8f08e2ea3755e20efe_wxfmdz.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781935/z4327630191311_967071367f22683ab4fdb9e8081799a0_tsngqy.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781935/z4327630189570_aea27dba38bc4044bdbff006311b96df_t5zas2.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692781935/z4327630196017_315cc76a783c80f92bc7ce0e76a8c549_yiwblt.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '850000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => '301-0707',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782072/z4080395916791_90cf95691e2ad831c1723f2dcb50a546_czg1gh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782072/z4080395925037_96b326e3631194c72230b9bf36a6ede7_pyjzs1.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/z4080395915987_3aa76ae2ffb3b8ac418c42c6e380cacf_mynzej.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/z4080395895797_cca78f11831631a31e523364be99be5d_upq8g2.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/z4080395884774_d6693ae7aea68ad41be4dd73c39158b3_zbessm.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/z4080395903931_c137a33c0fd56286d1ffb980e0e75c50_cxihm1.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/z4080395907979_584076f865e531957179d2778c482da9_vvlgoj.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782071/341748413_605134624878531_900220634789754011_n_hctlxq.png,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '850000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => '302-BH4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782197/302.BH4_7_gtzaoi.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782197/302.BH4_8_vcwxwk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782197/302.BH4_9_pu5v2i.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_1_wtoyhc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_3_xcqple.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_4_bavfsk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_6_xuj1ae.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_2_jqzi47.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782196/302.BH4_5_o9sa1b.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '850000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => '401 0217',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782674/z4364145829275_3cab231a370f064b46ee5e66abb9fc96_nmdlzf.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782674/z4364145818919_e780f613844a06d0ff07cb323e9f13c8_u9vbmd.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782674/z4364145809731_0cc3919f2980deba23e05a543df01935_tzysmt.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782674/z4364145806904_4976ebf85dbb356f660e1bb841c2782e_1_i8xzdc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782674/z4364145790643_cf30623f768d1df6aaef8e5eab74ada3_r5vrvu.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782673/z4364145805790_6c0724b969b2119f986071ae0348a9fa_cszrdb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782673/z4364145797555_d829854ba4bba8d562cf9e2e49396989_pi4opr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782673/z4364145800345_55862d4acc65f229a38ee6a712cae6c3_1_odwqga.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782673/z4364145795299_3a4748f6c715824a48ebe5514b06f5f0_rfwczn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782673/z4364145787295_86f3eaa0897a9fbebf09009309b98dae_kvtpsu.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '1100000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => '401 0603',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782815/z4333400143779_ae6981ff34513a6f05b0d36c25296b68_hqslp6.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782815/z4333400143051_a55d30d9df621a389859c5b1998f0bca_smobba.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782815/z4333400138110_a701c7bdc266413d03404bfd63b4025d_xgqirq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782814/z4333400135373_f4607771e319c5f94085eaa268ab4bac_f9gw7z.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782814/z4333400135638_8c4bc9800cf84909336674a8e909795d_m5geic.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782814/z4333400127843_6d359c4dfc4446b19a969f1fdcf2a6b6_rdpl8j.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782814/z4333400122604_b4ac5348277ebec68510ee10623ab0c4_jyqche.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782814/z4333400131124_fbb397dd79205a86ddbda9c16f37d95d_pwotrn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400122047_9ff24eb0988cf63b5a5cb525e3eafc16_uvfuih.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400108116_8c39a526a0453c6ee6e6bfd9fec93a5a_jechpl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400116420_a0bc65e2edb2599c629e7479c37b1f7a_c8ruif.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400122502_ed2e6eeab613f82deb1abdeab78d18f0_wqafjn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400112772_d29906e97d50b4f50c574c5371bcdf0a_vpoukb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782813/z4333400110891_9d5487b18dcf833b61c550abe5635cc9_cqxkd9.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '1100000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name' => '401 1610',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782996/z4279743310352_213395946570de4d54d8edcb929f4050_n5fxfd.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743292067_7bb4e970da2063befcb784f6065e8668_zp2gay.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743300435_5ea00a5a6c139912235a4b5f0ab0c696_ujdt8j.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743288609_518cdc82ff012b2f14f8b5bd0f18b11b_rhfu1z.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743308323_da13586aa8bb8ad623c9c1b20176fc00_jn4wke.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743306622_921701413621c0cb5e22c8adb7cf333d_ebhdan.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692782995/z4279743296449_2e0528a01cf19f1f530c2278b3628378_r972ye.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '1100000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name' => '401 1909',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783137/318142802_2324863671025086_3826398289994906103_n_duhzvx.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/317608917_487032650161467_5733494449937150636_n_fgyo3n.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/317893251_1320754915363792_3082265448556471458_n_bfsitr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/317748206_1221451242107655_6658730305988549936_n_zxywhc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/317369448_465330952348910_1363221322760384108_n_dxihmj.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/269796443_448862769948707_3755538909200787040_n_iuiikh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/269623917_236442325175274_1536835273628327585_n_pzrgdl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/269772455_233336492316736_6202472103330346808_n_zjkgvc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/269773930_2292130390949447_2401591999648247379_n_ailzwt.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783136/269770050_458596105783298_8989129304239263219_n_z6yqx0.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '1100000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name' => '501 0325',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783628/z4239839556860_82500323eb2916e8a857a35ca21c0b56_qdofsr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783628/z4239839553408_445b1796ac82f16b144095270f89b560_xqbe8i.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783627/z4239839550008_f6f855ec9039597d5b68b99993e796dc_xvbqaa.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839544243_bdb18b7f59faa70c5a0b1de4944aae18_owkybl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839538928_f0a2986cfd682c566200c8a38211ee6e_zdtzyk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839540990_162a4ce031b3919548ec9abd989ae7ba_gy9ire.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839543695_a8c85f31c0898078c29ad98619940c50_x6fr3s.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839531078_479970c57eb0014cd5198b922f43c98b_cjsqfb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783626/z4239839538302_e15e03d8a825a4ecaf9b5e094cbcb104_czjakq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783625/z4239839478961_5a61b19d1f31765ead0a3416c3d54791_o2hf92.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783625/z4239839471671_513efda3e27b882df342f1fdf889241c_biga3v.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783625/z4239839470653_270d2d564dcf8e4b86c48708e6b6626e_epyql6.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783624/z4239839474574_5cae724c9e08d1c8f74afe217dccb465_jj6vqm.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783625/z4239839472894_2bd41705b987fd273acd4dfeb2b2c04d_g9hgii.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783624/z4239839481142_7fa2fb6cdb038f49d1e2d9aa2564a796_unojvx.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '1100000',
                'category_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name' => '401 0315',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783791/z4283391279219_94b28ecc4a40e6cf1e451ee295c8fd38_mhjktp.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783791/z4283391281935_1d5c949191c4b2986037c80fa7c69973_gznofr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783791/z4283391280560_b51c6b95ccf2ed750a6627564e9776ae_lcx4nv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391248668_b3e164ee0d9ce85ea0dc643d57456ba9_t81wvo.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391245849_82844ad05c6eec71caabb9d9d066b6bd_shmvpy.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391248159_a1fac405482e5ee2c57ba744ce3d51e7_u0jwtu.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391210984_de951527fe58e30f1edc97c3c45a883e_pmceqe.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391238670_6f924c9f8afcb0c0342718e07b7a6de6_bezaxe.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783790/z4283391243329_0c4c94c5788c620c0ebb2c21dc1d4769_o4ys15.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name' => '401 0508',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783942/z4177622137686_f7a455793d2c50a2bf7a94c41714c6f6_ub5vgv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783942/z4177622126187_b57340e0031f914190dfecf0b093cae6_nk23di.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622125456_96670dd241273137399275de737b7ae7_he0rgk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622106611_41fd1957acda4c868cb572cb38b4022b_p1w9ef.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622112020_4125fa81df9d6563d62ee3bde2869eac_dqg75x.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622101010_630ef7823dea22a229cc4182127b28d4_r8gprq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622112797_4e89454c9d7d1ee943d23e539115cc19_p4kmes.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692783941/z4177622116513_b6de828fbfb317221c0bee42d9b9992f_xpkfug.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name' => '401 0707',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784017/z4080266879030_d898bc5a8b0d82908e01d613678a2c90_zz6wvz.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784016/z4080267064911_0780a459b6fc1f2ae105425d61ad6363_fxusxe.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784016/z4080266847113_cb116b0e1d579573882d22616330d111_qnqoqc.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name' => '402 0508',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784112/z4424930283087_cea23eac34c78f06f88b7383dd569a37_oycomd.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784112/z4424930282964_9a38a8fa57f82740375152f352783bee_iuxwo6.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784112/z4424930275194_31fc75fd48ff3655c28031cad60b3aa1_xapw7x.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784112/z4424930271811_517136d6913ce9139731ba1494e7145d_f8qfhm.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4424930258743_c683f3be8ac852443919f713130f2ac7_wn9mv5.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4298477386069_652f79e20c15faaa70602ca97b0788c5_vguhjq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4298477383112_7d2981d6c4714bf230a0cf67ca43cad8_njnsjp.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4298477384184_b11665755a8992ba03d14be75913983a_xiztru.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4298477380816_2654566cb5b3549ba9ea20bbebf227e2_qkxglf.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784111/z4298477374559_771f3d798c0c62b5c163644a908fe043_p6ptr9.jpg,
                ',
                'description' => '',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name' => '403 0508',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784347/z4355267543718_92f34b6d96dab1d42e476381fa3dd230_ruxuyc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784347/z4355267549983_14df90a6642c4cdfb9bb67dd5203990b_mmi0bh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267530350_a88f0e0b3840861f8036286849a84eda_xmga58.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267540753_8f2dc4fd80b1e890946c5beced5b8ffb_yw7ayg.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267530246_ccaa5f99f8b16923103619af4c2fac70_v4naov.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267536530_d3cbdc385450dee4ca9d9440adf98993_tquqnk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267522343_f3bc59baab5a48e69941a4c7f100f0f3_jh5nvn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784346/z4355267524048_97e3060cb03ffeaa5297471fe4b02710_yrrrkj.jpg,
                ',
                'description' => '<body>
                <h2>K&iacute;ch thước Căn hộ&nbsp;</h2>
                <p>40 m&sup2;</p>
                <p><br></p>
                <div><br></div>
                <div>Giường thoải m&aacute;i, 8.8 &ndash; Dựa tr&ecirc;n 47 đ&aacute;nh gi&aacute;</div>
                <p>Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. The well-fitted kitchen has a stovetop, a refrigerator, kitchenware and a microwave. The apartment features soundproof walls, a seating area, a dining area, a wardrobe, as well as a flat-screen TV. The unit has 1 bed.</p>
                <div>
                    <p><br></p>
                    <h2>Trong nh&agrave; bếp ri&ecirc;ng của bạn:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                    </ul>
                    <p><br></p>
                    <h2>Trong ph&ograve;ng tắm:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ vệ sinh c&aacute; nh&acirc;n miễn ph&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Chậu rửa v&ecirc;̣ sinh (bidet)</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nh&agrave; vệ sinh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ocirc;̀n tắm hoặc Vòi sen</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Dép</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet chung</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Máy s&acirc;́y tóc</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Toilet phụ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Giấy vệ sinh</li>
                    </ul>
                    <p><br></p>
                    <h2>Hướng tầm nh&igrave;n:</h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tầm nh&igrave;n ra khung cảnh</li>
                    </ul>
                    <p><br></p>
                    <h2>Tiện nghi Căn hộ: </h2>
                    <p><br></p>
                    <ul>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn làm vi&ecirc;̣c</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV m&agrave;n h&igrave;nh phẳng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Truyền h&igrave;nh trả tiền</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ghế sofa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bàn ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; phơi quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khăn tắm</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Căn hộ ri&ecirc;ng trong t&ograve;a nh&agrave;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ti&ecirc;̣n nghi ủi</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ti&ecirc;́p khách</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ổ điện gần giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lò vi sóng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>TV</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ lạnh</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Kh&ocirc;ng g&acirc;y dị ứng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ra trải giường</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Bếp nấu</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Lối v&agrave;o ri&ecirc;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Đồ bếp</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p nhỏ</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Ấm đun nước điện</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>B&ecirc;́p</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>M&aacute;y điều h&ograve;a độc lập cho từng ph&ograve;ng</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Phòng thay qu&acirc;̀n áo</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Tủ hoặc ph&ograve;ng để quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Sản phẩm lau rửa</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Hệ thống c&aacute;ch &acirc;m</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Điều h&ograve;a kh&ocirc;ng kh&iacute;</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Khu vực ph&ograve;ng ăn</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Gi&aacute; treo quần &aacute;o</li>
                        <li><svg fill="" size="small" width="14" height="14">
                                <path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path>
                            </svg>Nước rửa tay</li>
                    </ul>
                </div>
                <div>
                    <h2>H&uacute;t thuốc:&nbsp;</h2>Kh&ocirc;ng h&uacute;t thuốc
                </div>
            </body>',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name' => '601 602 bh4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784488/z4434149243239_c1256ea320b7dda26b121b30485dd620_mpmyno.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784488/z4434149185127_5c1b5b98d1696d90a004f264b9c6b874_g2hbee.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784488/z4434149183180_a8104a27d4d007ccee25137b21f2ed7b_dpbott.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784488/z4434149174360_d86450b3ef6652cd486a41ea3cde5c3c_uer0eg.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692784488/z4434149187779_6c9faba0f2960f8784ca8032b3455f9a_buflrp.jpg,
                ',
                'description' => '',
                'price' => '550000',
                'category_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name' => '101 0508',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787976/z4450273672257_cf8545c8a97d157475abc8d102ad1cca_fbhv39.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273631419_8934b13ed2b77f470b624627bfc38973_lkxkbg.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273625710_20e39757d2d1402ee04e7de8d7b09546_kvcof6.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273651286_6f8fbff9875d3a609c88b1b9eff2de11_kplpsa.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273661988_3a2af8fada8b9e2ad5e2af03fc7e1feb_ntbmkv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273635919_a5d701085f81a6c458810004bbbfde91_pj1rlk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692787975/z4450273611972_9db5aa94bdeffeafc25936e72b17ca47_wl2pr8.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'name' => '101 0707',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788056/z4116633931484_208208e8a876b53ba0d6e60fb116ee13_y1y9gp.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788056/z4116633926892_61e6f6a9469d89b7e963e2d7a7d7383d_neudpt.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788056/z4116633916496_7a432c5f97d4f5547f5275cf763a6557_wynslz.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788055/z4116633910440_9a6e97dc96264caa1db6af5449b140c3_bhz0az.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633910353_dff62a7291996a7bc717d77922b7605e_nhvxsv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633907603_91cce6c58837dcbba59da3d2f97f1ad1_nm4rst.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633894875_ffd7ff9801fd0a6f51197797644f0bd6_esckny.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633883217_6357e81121f951aa12fa1c498d9abc93_l9mla9.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633897918_5d53672b02984fec28302ca785b7a7d2_i09iri.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788054/z4116633891164_b3bf352e65365d02cc9b7ccf920a5cc3_vx1vbb.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'name' => '102 0217',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788137/z4364233039780_64527a598850652d14f4d8797923c194_eowacc.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788136/z4364233020135_d3ffc93d68b1b35e8fac21ce880a2d02_xrwmkg.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788136/z4364233034334_1b194ef4ca2d3aa686cdba40d9b4e97f_fk3l7b.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788135/z4364233020418_04516c38cb39f9bec146baf82e4f8632_qwszrn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788135/z4364233026255_78ca2f7e2d8d306c4e3487b245d8d84a_vctafm.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788135/z4364233026410_336f1850cbb3f93667e450c8bd827464_p4x03b.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788134/z4364233015497_0accb747794a1a78fbb6851474c14569_pt41hn.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'name' => '102 0508',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269213482_ae764e92c68643a2ee611a0f939cb5d8_n7bka1.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269215028_96494f62910ae2d9e9bdd5af8e3120c6_inxjc0.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269198743_9dd95f244bbc7d86c687409ec143c3e5_ajoqml.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269228964_3b92f0bcef8f0f4babe208e845fd87b9_y7lzae.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269206973_031231152b0ede56e9681f0ee7d0c974_rtmxb3.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788245/z4450269226960_4b85ba39f380173fe86f7cdbd60dac64_erpgkd.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'name' => '201 07',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788313/z4391328490702_0356033ec1c697385154e6d06366fdb7_ed0yht.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788313/z4391328492720_8430418e6b26c0f7b3a2692586699171_omqrqb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788313/z4391328483036_e6795f69cc01ab1eeba790338b624c2c_vztjmm.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788312/z4391328476232_f5bf666355fec26c3bc1d7e66ae99b45_ozdctr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788312/z4391328477007_74970bef965226e3b6b02c98f9100e84_jdmmta.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788312/z4391328473901_88406722ad2ae26351503f6fda846630_evdbei.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788312/z4391328483230_776e020ca35cbb8b8e02640ed7cbc1cc_x7lgsl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788311/z4391328476065_548c04637ca84adc6c14e94b82d8a0f2_moom3a.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'name' => '201 BH4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360699607_c25dbbd28b599f8fd014db52171dae44_r1qhf4.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360716810_91669410ee44cdf2cb43d20ff0bb77d1_yp4ykr.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360705407_738dff5c8bdc63e1ba161d5f74981057_laipia.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360684976_b51bf818500b9fa050887f1f86a5a2e3_nyguwn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360679452_8d6b51dd3c09a438a8b64184769f57ca_nq9ehe.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788400/z4316360702343_11051a790f065719cff5b6f1bd8cdd90_fki1qz.jpg
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'name' => '202 0216',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788845/z4398697561995_04e9afba7af0eb87eb61e349b947730f_dssmsn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788843/z4398697362017_1608af404fc9699d4ab8df75093cff68_wqswgf.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788842/z4398697305216_a36883dc11cfd13eee3329e7b01344fa_zeehfb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788842/z4398697481263_f001339871c3fcb6f987fddd2bb8eea5_zgk63i.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788842/z4398697300094_6ec9e1f65564c538fc8e58459795fa09_o6x1wi.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788841/z4398697432273_8d3bf5cce867ade3f5774fc10b26dfd3_emanaf.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692788841/z4398697308061_fe584a04faba4c078d1a783e76248710_obpkgt.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 23,
                'name' => '202 302 0217',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789098/z4364221144939_3b64792c178e88907f724c657efd1b11_qxi8h2.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789097/z4364221152801_c982961489671e551c2b3a022f755988_frscvj.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789097/z4364221150188_19b29882c4c4ecf8681e74ce19ee79b9_zu2kks.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789097/z4364221147763_3fe25fcd31ad9ac2d9dd40241743717e_bkeqll.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221132822_64527a598850652d14f4d8797923c194_d35cfk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221122726_872bacab3c3f59ca30b7bb700f00501c_zeutaz.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221135510_0c6fb022921b6772d646abfe61efb94d_wxbbfn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221128407_a01127855d351addd10ec64746e84bfa_u6szru.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221120954_335abb646d9d4177ab9b8d7b92df443c_h0lnik.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789095/z4364221144121_1b194ef4ca2d3aa686cdba40d9b4e97f_mtxvls.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'name' => '202 Par',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789327/z4285410728452_ca5906c4b0bf2248e293de3ef78ad360_iado3c.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789327/z4285410727880_001765f45ae302f5b09eed6ea3222bfe_wrz1gv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410716141_77f0c193085678fe9df6fdecf0855f94_vq8m6j.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410720337_010896c33b347496ff3547e69c03d221_pxxjkl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410724394_ddd48c4783b8ddd59c5cbf4e4c93fa50_ytvdij.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410722537_9afcbb33ac12f9803b4ad08067afa02d_knoysk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410722796_ff8436b6c983700ddf73bd16dc95db79_saq6eb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789326/z4285410716455_754a3ec9112b105cad6a7e67bbdba654_x0nv1y.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'name' => '202 0420',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789386/z4116632534171_dbe28cb9e731cf1c4528a8ed506f8157_jbvioy.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789386/z4116632528773_925b74bfe6a68a83fcfc5a258eb54b23_vxajfb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632511755_8afe61ddfbabc94c084b841a42890104_cssayi.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632524849_09a942a074b2d2a02008ec38a6bc1de9_kzsuze.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632515139_7505a57b22f45cae3120575653b5f213_z8wbk2.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632516126_26f646efde5dc2747eada1981fe28ba3_e65zwh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632508317_c18b625a46a97e00de42faa8c61042eb_a8cnsl.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789384/z4116632505021_e8102e5d1aa14cee3faa6e4e69b06515_lqshmq.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'name' => '301 07',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789497/z4316313118297_a2bc83e65d37c4b9de5b0840f1520148_mtcyrb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789496/z4316313112241_a7f5582e1d3d4954b0bdd4c5329b4f36_lrw4e4.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789496/z4316313124707_0e433ebaf155fc5d8995082b48566287_ktqsjn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789496/z4316313094261_0b613f525da598a1a8aff83ca360b77d_qqo7zw.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789496/z4316313124414_f59444022619dd0e3004ca5f90283a52_cqh5hg.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789496/z4316313114272_781956585e759f80909b104e51b94060_qulo5u.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'name' => '301 0315',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789636/301.0315_8_ebsvsk.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789636/301.0315_9_rukagn.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789636/301.0315_7_dysqe0.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789636/301.0315_10_pzr1oj.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_2_jfltbh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_6_xezucy.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_3_a9mcjv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_1_wgkdhd.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_4_fbnfwv.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789635/301.0315_5_zizqpt.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 28,
                'name' => '302 0311',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030223782_1292c71a840a01e97504f244c5044fcd_ohwq02.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030285538_1d8b3bd857e4aa60b9ef9606dd23b900_qyhpmq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030230071_8fcbad29d716779c527d2b52f2cb91f6_ajlmuw.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030228789_07824039b4e633696c4c28b0b9528648_rnhvgx.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030273742_ecb31eaa2842fc8f739ce4ae33387b9c_nxoaz1.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789749/z4386030282967_7e5a3b7a28fe4abab241ce3918664dad_n7nihw.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'name' => '401 BH4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789872/z4274112195757_033ff4457b1a21a832200c718a6a45fd_k9azx9.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789872/z4274112186201_5d265fc7fd622a572284379686b5e219_fq4ajb.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789872/z4274112186063_c66a167bcd7c1090ebdb7ef3b3ae36a8_iwznii.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789872/z4274112190827_cbbaeb7dce816ad0a156316ac68ba995_lhsjbt.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789872/z4274112189409_353c8ca882d56b281a3f22a209cbda1d_brer30.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 30,
                'name' => '504 BH4',
                'images' => 'https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789953/z4392593425293_c7efa5254ddfd7e01f42b90af47542bf_iqmx2s.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789954/z4392593434782_6f83ab3079d07587f4b103cc64739b65_upu20j.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789953/z4392593433077_34df271adb34882322be609179276481_plhls5.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789953/z4392593426421_d1a650b1b62f940fc43aa11861e8718d_fjrvzq.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789953/z4392593425692_b13a3ee46fdc702b64cbcecce18af135_ajqe7t.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789952/z4392593395111_ef3513d1000ec417022ff7c76361b008_pcihuh.jpg,
                https://res.cloudinary.com/dn3bmj5ex/image/upload/v1692789952/z4392593424137_e3b2fd6dfe5004494bfebd0b00c713cb_y0shuq.jpg,
                ',
                'description' => '',
                'price' => '650000',
                'category_id' => 3,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
