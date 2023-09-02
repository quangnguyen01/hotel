<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'id' => 1,
                'title' => 'Khu nghỉ dưỡng Premier Village Hạ Long Bay – “Ốc đảo xanh” bên bờ vịnh',
                'content' => '<p>Du lịch Vịnh Hạ Long đến nay đ&atilde; ph&aacute;t triển hơn rất nhiều so với trước kia. Hiện tại kh&ocirc;ng kh&oacute; để bạn c&oacute; thể t&igrave;m thấy một nơi lưu tr&uacute; ổn &aacute;p ở đ&acirc;y. Tuy nhi&ecirc;n, nếu bạn đang t&igrave;m một nơi kh&aacute;c lạ, chất lượng dịch vụ đẳng cấp 5 sao, sự ri&ecirc;ng tư tuyệt đối th&igrave;&nbsp;<strong>khu nghỉ dưỡng Premier Village Hạ Long Bay</strong>&nbsp;sẽ l&agrave; lựa chọn ho&agrave;n hảo d&agrave;nh cho bạn.</p>

<p><em><strong>Khu nghỉ dưỡng Premier Village Hạ Long Bay&nbsp;</strong></em>l&agrave; một khu nghỉ dưỡng 5 sao biệt lập nằm dọc theo b&atilde;i biển B&atilde;i Ch&aacute;y, tầm nh&igrave;n hướng trọn ra Vịnh Hạ Long. Được lấy cảm hứng từ những khu vườn nhiệt đới, nơi những h&agrave;ng cọ rợp b&oacute;ng, Premier Village Hạ Long Bay được v&iacute; như một &ldquo;ốc đảo xanh&rdquo; nằm b&ecirc;n vịnh.</p>

<p>Ngo&agrave;i Vịnh Hạ Long đ&atilde; qu&aacute; nổi tiếng, từ khu nghỉ dưỡng bạn c&oacute; thể dễ d&agrave;ng di chuyển đến c&aacute;c điểm vui chơi nổi tiếng kh&aacute;c ở Hạ Long như khu vui chơi giải tr&iacute; Sun World Hạ Long, quảng trường Mặt Trời,&hellip; thậm ch&iacute; bạn c&oacute; thể tản bộ dọc theo b&atilde;i biển B&atilde;i Ch&aacute;y tuyệt đẹp để tham gia v&agrave;o những hoạt động giải tr&iacute; buổi tối rất th&uacute; vị.</p>

<p>Premier Village Hạ Long Bay sở hữu 67 căn biệt thự ri&ecirc;ng biệt, mỗi căn biệt thự được thiết kế để h&ograve;a nhịp trọn vẹn với vẻ đẹp nhiệt đới tại vịnh biển, được trang bị đầy đủ c&aacute;c trang thiết bị tiện nghi để bạn c&oacute; cảm gi&aacute;c thoải m&aacute;i như đang ở ch&iacute;nh ng&ocirc;i nh&agrave; của m&igrave;nh.</p>

<p>C&aacute;c căn biệt thự sẽ c&oacute; từ một đến năm ph&ograve;ng ngủ ph&ugrave; hợp theo số lượng người trong nh&oacute;m kh&aacute;ch. C&oacute; ba dạng biệt thự l&agrave; view hướng vườn, biệt thự b&ecirc;n hồ v&agrave; biệt thự cao cấp view biển. Đặc biệt mỗi căn biệt thự đều c&oacute; hồ bơi ngo&agrave;i trời ri&ecirc;ng v&agrave; b&atilde;i cỏ để tổ chức c&aacute;c bữa tiệc BBQ ấm c&uacute;ng cho gia đ&igrave;nh hay nh&oacute;m bạn.</p>
',
                'author' => 'Du lịch Việt',
                'author_slogan' => 'Premier Village Hạ Long Bay còn là nơi tuyệt vời để bạn chăm sóc và cải thiện sức khỏe với dịch vụ Spa và phòng Gym. Bạn sẽ được nuông chiều mọi giác quan tại các phòng trị liệu, phòng xông hơi hay phòng sauna chất lượng, trải nghiệm cảm giác thư giãn độc đáo, hòa nhịp với âm điệu dịu dàng ở Plumeria Spa',
                'is_featured' => 0,
                'view' => 200,
                'images' => 'https://cdn3.ivivu.com/2022/08/Premier-Village-H%E1%BA%A1-Long-ivivu-10.jpg,
                https://cdn3.ivivu.com/2022/08/Premier-Village-H%E1%BA%A1-Long-ivivu-1.jpg,
                https://cdn3.ivivu.com/2022/08/Premier-Village-H%E1%BA%A1-Long-ivivu-2.jpg,',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'title' => 'Top 4 tour Tây Bắc tại iVIVU nổi bật trong mùa thu 2023',
                'content' => '<p><strong>1.&nbsp;</strong><a href="https://www.ivivu.com/du-lich/tour-tay-bac-3n2d-mu-cang-chai-ngoc-chien-ta-xua/1302?utm_source=blog_ivivu&amp;utm_medium=post_link&amp;utm_campaign=internal" target="_blank"><strong>Tour T&acirc;y Bắc 3N2Đ: M&ugrave; Cang Chải &ndash; Ngọc Chiến &ndash; T&agrave; X&ugrave;a</strong></a></p>

<p>V&ugrave;ng đất T&acirc;y Bắc lu&ocirc;n l&agrave;m du kh&aacute;ch phải xi&ecirc;u l&ograve;ng bởi phong cảnh thi&ecirc;n nhi&ecirc;n tươi đẹp, con người th&acirc;n thiện c&ugrave;ng văn h&oacute;a gi&agrave;u bản sắc. Trong&nbsp;<strong>tour T&acirc;y Bắc</strong>&nbsp;3N2Đ, du kh&aacute;ch c&oacute; cơ hội kh&aacute;m ph&aacute; nhiều hơn v&ugrave;ng đất n&agrave;y, cụ thể như Mường L&ograve;, đ&egrave;o Khau Phạ, M&ugrave; Cang Chải, đồi M&oacute;ng Ngựa, T&agrave; X&ugrave;a&hellip; Đặc biệt m&ugrave;a thu l&agrave; thời điểm l&uacute;a ch&iacute;n ở M&ugrave; Cang Chải (Y&ecirc;n B&aacute;i), những thửa ruộng bậc thang v&agrave;ng &oacute;ng đẹp như tranh vẽ khiến ai đ&atilde; từng đặt ch&acirc;n đến đ&acirc;y đều thổn thức, nhung nhớ.</p>

<p><strong>2.&nbsp;</strong><a href="https://www.ivivu.com/du-lich/tour-tay-bac-5n4d-hcm-mu-cang-chai-sapa-mua-lua-chin/2459?utm_source=blog_ivivu&amp;utm_medium=post_link&amp;utm_campaign=internal" target="_blank"><strong>Tour T&acirc;y Bắc 5N4Đ: HCM &ndash; M&ugrave; Cang Chải &ndash; Sapa &ndash; M&ugrave;a L&uacute;a Ch&iacute;n</strong></a></p>

<p><strong><em>Tour T&acirc;y Bắc</em></strong>&nbsp;5N4Đ đưa bạn kh&aacute;m ph&aacute; v&ograve;ng cung T&acirc;y Bắc với những khung cảnh thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ của những c&aacute;nh rừng m&ecirc;nh m&ocirc;ng v&agrave; những ruộng bậc thang tuyệt đẹp, c&ugrave;ng n&eacute;t văn h&oacute;a đặc sắc của b&agrave; con c&aacute;c d&acirc;n tộc nơi đ&acirc;y. Du kh&aacute;ch sẽ được chi&ecirc;m ngưỡng c&aacute;nh đồng l&uacute;a nếp T&uacute; Lệ v&agrave; thưởng thức m&oacute;n cốm T&uacute; Lệ nổi tiếng. Tour cũng đưa bạn đến đ&egrave;o &Ocirc; Quy Hồ, được biết đến l&agrave; một trong số những cung đường đ&egrave;o hiểm trở bậc nhất v&ugrave;ng miền n&uacute;i ph&iacute;a Bắc Việt Nam.</p>

<p><strong>3.&nbsp;</strong><a href="https://www.ivivu.com/du-lich/tour-tay-bac-4n3d-moc-chau-son-la-dien-bien-lai-chau-sapa/1640?utm_source=blog_ivivu&amp;utm_medium=post_link&amp;utm_campaign=internal" target="_blank"><strong>Tour T&acirc;y Bắc 4N3Đ: Mộc Ch&acirc;u &ndash; Sơn La &ndash; Điện Bi&ecirc;n &ndash; Lai Ch&acirc;u &ndash; SaPa</strong></a></p>

<p>V&ugrave;ng n&uacute;i T&acirc;y Bắc đ&atilde; trở th&agrave;nh v&ugrave;ng đất với nhiều dấu ấn, bao gồm c&aacute;c tỉnh Ho&agrave; B&igrave;nh, Sơn La, Điện Bi&ecirc;n v&agrave; Lai Ch&acirc;u. Đ&acirc;y l&agrave; nơi sinh sống của đồng b&agrave;o d&acirc;n tộc thiểu số như Th&aacute;i, M&ocirc;ng, Dao&hellip; mang đến m&agrave;u sắc văn h&oacute;a độc đ&aacute;o. H&agrave;nh tr&igrave;nh li&ecirc;n tuyến trong&nbsp;<em>tour T&acirc;y Bắc&nbsp;</em>4N3Đ sẽ đưa bạn chi&ecirc;m ngưỡng th&aacute;c Dải Yếm, rừng th&ocirc;ng bản &Aacute;ng, đồi ch&egrave; h&igrave;nh tr&aacute;i tim, l&agrave;ng hoa cải, hoa mận tại cao nguy&ecirc;n Mộc Ch&acirc;u, th&aacute;c Bạc &ndash; một trong những th&aacute;c nước đẹp nhất Việt Nam. Ngo&agrave;i ra bạn cũng được t&igrave;m hiểu về phong tục, tập qu&aacute;n của đồng b&agrave;o người Th&aacute;i cũng như tham quan c&aacute;c di t&iacute;ch gắn liền với chiến thắng Điện Bi&ecirc;n Phủ.</p>

<p><strong>4.&nbsp;</strong><a href="https://www.ivivu.com/du-lich/tour-tay-bac-4n4d-cao-nguyen-ha-giang-moana-fansipan-xe-cabin-vip/1672?utm_source=blog_ivivu&amp;utm_medium=post_link&amp;utm_campaign=internal" target="_blank"><strong>Tour T&acirc;y Bắc 4N4Đ: Cao Nguy&ecirc;n H&agrave; Giang &ndash; Moana &ndash; Fansipan (Xe Cabin VIP)</strong></a></p>

<p>H&agrave;nh tr&igrave;nh tour T&acirc;y Bắc 4N4Đ đưa du kh&aacute;ch đến với mảnh đất địa đầu của tổ quốc, nơi c&oacute; khung cảnh thi&ecirc;n nhi&ecirc;n hoang sơ kỳ vĩ, nơi c&oacute; cao nguy&ecirc;n đ&aacute; Đồng Văn x&aacute;m xịt với đ&aacute; đủ h&igrave;nh th&ugrave;, nơi c&oacute; cung đường đ&egrave;o M&atilde; P&igrave; L&egrave;ng cheo leo. Tour c&ograve;n đưa bạn đến với Sapa, th&agrave;nh phố mờ sương cực l&atilde;ng mạn trong những &aacute;ng văn thơ, c&ugrave;ng với đ&oacute; l&agrave; những thửa ruộng bậc thang &ndash; tuyệt t&aacute;c của b&agrave;n tay con người cần mẫn. Đặc biệt du kh&aacute;ch c&ograve;n c&oacute; cơ hội chinh phục đỉnh Fansipan &ldquo;n&oacute;c nh&agrave; Đ&ocirc;ng Dương&rdquo;, nơi chứa đựng bao điều kỳ th&uacute;.</p>
',
                'author' => 'Du lịch Tây Bắc',
                'author_slogan' => 'Lạc vào biển mây tựa tiên cảnh ở Tà Xùa',
                'is_featured' => 0,
                'view' => 300,
                'images' => 'https://cdn3.ivivu.com/2023/08/tour-tay-bac-2023-ivivu-1.jpg,
                https://cdn3.ivivu.com/2023/08/tour-tay-bac-2023-ivivu-3.jpg,
                https://cdn3.ivivu.com/2023/08/th%C3%A1c-D%E1%BA%A3i-Y%E1%BA%BFm-ivivu.jpg,
                https://cdn3.ivivu.com/2023/08/tour-tay-bac-2023-ivivu-7.jpg,',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'title' => 'Đẳng cấp nghỉ dưỡng bên sông Sài Gòn tại Vinpearl Landmark 81 Autograph Collection',
                'content' => '<p>Du lịch Vịnh Hạ Long đến nay đ&atilde; ph&aacute;t triển hơn rất nhiều so với trước kia. Hiện tại kh&ocirc;ng kh&oacute; để bạn c&oacute; thể t&igrave;m thấy một nơi lưu tr&uacute; ổn &aacute;p ở đ&acirc;y. Tuy nhi&ecirc;n, nếu bạn đang t&igrave;m một nơi kh&aacute;c lạ, chất lượng dịch vụ đẳng cấp 5 sao, sự ri&ecirc;ng tư tuyệt đối th&igrave;&nbsp;<strong>khu nghỉ dưỡng Premier Village Hạ Long Bay</strong>&nbsp;sẽ l&agrave; lựa chọn ho&agrave;n hảo d&agrave;nh cho bạn.</p>

<p><em><strong>Khu nghỉ dưỡng Premier Village Hạ Long Bay&nbsp;</strong></em>l&agrave; một khu nghỉ dưỡng 5 sao biệt lập nằm dọc theo b&atilde;i biển B&atilde;i Ch&aacute;y, tầm nh&igrave;n hướng trọn ra Vịnh Hạ Long. Được lấy cảm hứng từ những khu vườn nhiệt đới, nơi những h&agrave;ng cọ rợp b&oacute;ng, Premier Village Hạ Long Bay được v&iacute; như một &ldquo;ốc đảo xanh&rdquo; nằm b&ecirc;n vịnh.</p>

<p>Ngo&agrave;i Vịnh Hạ Long đ&atilde; qu&aacute; nổi tiếng, từ khu nghỉ dưỡng bạn c&oacute; thể dễ d&agrave;ng di chuyển đến c&aacute;c điểm vui chơi nổi tiếng kh&aacute;c ở Hạ Long như khu vui chơi giải tr&iacute; Sun World Hạ Long, quảng trường Mặt Trời,&hellip; thậm ch&iacute; bạn c&oacute; thể tản bộ dọc theo b&atilde;i biển B&atilde;i Ch&aacute;y tuyệt đẹp để tham gia v&agrave;o những hoạt động giải tr&iacute; buổi tối rất th&uacute; vị.</p>

<p>Premier Village Hạ Long Bay sở hữu 67 căn biệt thự ri&ecirc;ng biệt, mỗi căn biệt thự được thiết kế để h&ograve;a nhịp trọn vẹn với vẻ đẹp nhiệt đới tại vịnh biển, được trang bị đầy đủ c&aacute;c trang thiết bị tiện nghi để bạn c&oacute; cảm gi&aacute;c thoải m&aacute;i như đang ở ch&iacute;nh ng&ocirc;i nh&agrave; của m&igrave;nh.</p>

<p>C&aacute;c căn biệt thự sẽ c&oacute; từ một đến năm ph&ograve;ng ngủ ph&ugrave; hợp theo số lượng người trong nh&oacute;m kh&aacute;ch. C&oacute; ba dạng biệt thự l&agrave; view hướng vườn, biệt thự b&ecirc;n hồ v&agrave; biệt thự cao cấp view biển. Đặc biệt mỗi căn biệt thự đều c&oacute; hồ bơi ngo&agrave;i trời ri&ecirc;ng v&agrave; b&atilde;i cỏ để tổ chức c&aacute;c bữa tiệc BBQ ấm c&uacute;ng cho gia đ&igrave;nh hay nh&oacute;m bạn.</p>
',
                'author' => 'Vinpearl',
                'author_slogan' => 'Là khách sạn Autograph Collection đầu tiên của tập đoàn Marriott International, khách sạn Vinpearl Landmark 81 Autograph Collection Sài Gòn nằm trên tòa nhà cao nhất Việt Nam, mang đến kỳ nghỉ dưỡng sang trọng và đẳng cấp.',
                'is_featured' => 1,
                'view' => 500,
                'images' => 'https://cdn3.ivivu.com/2023/07/vinpearl-landmark-autograph-collection-ivivu-1.jpg,
                https://cdn3.ivivu.com/2023/07/vinpearl-landmark-autograph-collection-ivivu-2.jpg,
                https://cdn3.ivivu.com/2023/07/vinpearl-landmark-autograph-collection-ivivu-3.jpg,
                https://cdn3.ivivu.com/2023/07/Vinpearl-Landmark-81-Autograph-Collection-S%C3%A0i-G%C3%B2n-ivivu-5.jpg,
                https://cdn3.ivivu.com/2023/07/vinpearl-landmark-autograph-collection-ivivu-8.jpg,',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
