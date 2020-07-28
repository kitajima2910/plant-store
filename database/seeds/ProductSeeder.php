<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('products')->insert([
            [ 
               'name' => 'Cây Đuôi Công',
               'slug' => Str::of('Cây Đuôi Công')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/dYFkcRlH4Xut3gQIS2EdCn3VCAZsXUsP.jpg',
               'feature_image_name' => 'duoi-cong-1.jpg',
               'price' => '159000',
               'final_price' => 143100,
               'sale_price' => '10',
               'content_short' => 'Với lá cây có màu sắc rất đặc biệt nên cây Đuôi Công cực kỳ phù hợp làm cây trang trí giúp tạo nên những không gian ấn tượng. Cây phù hợp để làm quà tặng, trang trí quán cà phê, trồng bồn, cây cảnh để bàn...',
               'content' => '<p>Nếu bạn đang cần t&igrave;m một loại c&acirc;y dễ sống, dễ chăm s&oacute;c, kh&ocirc;ng cần nhiều nắng v&agrave; đặc biệt l&agrave; phải nổi bật th&igrave; c&oacute; lẽ sự lựa chọn tuyệt vời đối với bạn l&agrave;&nbsp;<strong>c&acirc;y Đu&ocirc;i C&ocirc;ng</strong>. Vậy c&acirc;y c&oacute; những đặc điểm g&igrave; th&uacute; vị v&agrave; hấp dẫn mời c&aacute;c bạn cũng t&igrave;m hiểu ở b&agrave;i viết dưới đ&acirc;y.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/duoi-cong.jpg" style="height:400px; width:400px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>Thuộc v&agrave;o d&ograve;ng c&acirc;y th&iacute;ch ẩm, nếu tiếu nước l&agrave; c&acirc;y thường kh&ocirc;ng căng v&agrave; nhăn, nhưng vẫn c&oacute; thể chịu được hạn nhưng kh&ocirc;ng chịu được &uacute;ng l&acirc;u ng&agrave;y. V&igrave; thế t&ugrave;y theo điều kiện nơi đặt c&acirc;y m&agrave; ta tưới nước ph&ugrave; hợp, thường để trong nh&agrave; th&igrave; 1 tuần tưới 1 lần, trồng bồn ngo&agrave;i trời th&igrave; 1 tuần n&ecirc;n tưới 2 lần.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>C&acirc;y th&iacute;ch &aacute;nh nắng nhẹ, nơi đặt c&acirc;y ở m&ocirc;i trường b&aacute;n r&acirc;m như trong hi&ecirc;n nh&agrave;, ban c&ocirc;ng, cạnh cửa sổ. Tr&aacute;nh để c&acirc;y nơi n&oacute;ng v&agrave; &aacute;nh nắng gắt, v&igrave; bản l&aacute; kh&aacute; to n&ecirc;n sẽ mất nước rất nhanh dẫn đến t&igrave;nh trạng ch&aacute;y l&aacute;.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất ph&ugrave; hợp nhất cho c&acirc;y ph&aacute;t triển phải c&oacute; khả năng tho&aacute;t nước tốt, tho&aacute;ng kh&iacute; v&agrave; xốp. Đất cần giữ ẩm tốt v&agrave; đặc biệt nhiều dinh dưỡng. Bạn n&ecirc;n b&oacute;n ph&acirc;n thường xuy&ecirc;n hoặc thay đất định kỳ mỗi năm. Điều n&agrave;y gi&uacute;p c&acirc;y được bổ sung dinh dưỡng thường xuy&ecirc;n, tr&aacute;nh t&igrave;nh trạng qu&aacute; kh&ocirc; cằn.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&aacute;ch nh&acirc;n giống tốt nhất l&agrave; t&aacute;ch bụi, ngo&agrave;i ra c&acirc;y c&ograve;n c&oacute; thể nh&acirc;n giống bằng hạt</p>
               
               <p>&nbsp;</p>
               
               <h3>&nbsp;</h3>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hương Thảo',
               'slug' => Str::of('Cây Hương Thảo')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Nkd1YVDqHpRbUzP2dHGwXYalhu762kjH.jpg',
               'feature_image_name' => 'huong-thao-1.jpg',
               'price' => '125000',
               'final_price' => 125000,
               'sale_price' => '0',
               'content_short' => 'Cây Hương Thảo còn có tên gọi khác là Rosemary một loại cây có mùi thơm giúp tinh thần sảng khoái, đuổi được muỗi, và vừa có thể làm gia vị. Bạn sẽ thích ngay khi lần đầu được ngửi loại hương thơm từ cây phát ra.',
               'content' => '<p><strong>C&acirc;y Hương Thảo</strong>&nbsp;c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; Rosemary, T&acirc;y Dương Chổi, đ&ocirc;i khi người ta gọi Hương Thảo bằng c&aacute;i t&ecirc;n&nbsp;anthos, theo tiếng Hy Lạp cổ đại, c&oacute; nghĩa l&agrave; &ldquo;hoa&rdquo;. Đ&acirc;y l&agrave;&nbsp;một lo&agrave;i c&acirc;y bụi c&oacute; nguồn gốc từ Địa Trung Hải, ưa sống trong những khu vực c&oacute; kh&iacute; hậu nhiệt đới. C&acirc;y c&oacute; thể được d&ugrave;ng để trang tr&iacute; tr&ecirc;n b&agrave;n l&agrave;m việc, hay ngo&agrave;i ban c&ocirc;ng vừa mang lại n&eacute;t đẹp cho ng&ocirc;i nh&agrave; của bạn, vừa gi&uacute;p tinh thần thư th&aacute;i sảng kho&aacute;i lại mang &yacute; nghĩa phong thủy t&acirc;m linh rất tốt.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/huong-thao.jpg" style="height:400px; width:400px" /></p>
               
               <p>&nbsp;</p>
               
               <h3>ĐẤT</h3>
               
               <p>C&acirc;y hương thảo th&iacute;ch hợp trồng tr&ecirc;n đất s&eacute;t c&oacute; m&ugrave;n pha c&aacute;t, do bộ rễ của c&acirc;y kh&aacute; nhạy cảm n&ecirc;n đất trồng cần sự tho&aacute;t nước tốt v&agrave; tho&aacute;ng kh&iacute;. Đất c&agrave;ng c&oacute; t&iacute;nh kiềm cao, c&acirc;y hương thảo sẽ c&agrave;ng thơm. Nếu đất trồng của bạn c&oacute; t&iacute;nh axit cao, h&atilde;y trộn th&ecirc;m v&ocirc;i để trung h&ograve;a nh&eacute;.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>L&agrave; loại c&acirc;y ưa s&aacute;ng n&ecirc;n vị tr&iacute; đặt&nbsp;<strong>c&acirc;y Hương Thảo</strong>&nbsp;cũng rất quan trọng. Nơi trồng c&acirc;y c&oacute; &aacute;nh s&aacute;ng nhẹ vừa đủ l&agrave; tốt nhất, v&iacute; dụ như đặt ở cửa sổ c&oacute; &aacute;nh nắng buổi s&aacute;ng. Tr&aacute;nh đặt c&acirc;y trực tiếp dưới &aacute;nh s&aacute;ng mặt trời, đặc biệt l&agrave; nắng gắt v&agrave;o buổi trưa, l&aacute; c&acirc;y sẽ bị ch&aacute;y, teo dần. V&igrave; vậy, nếu bạn đặt c&acirc;y ngo&agrave;i trời cần ch&uacute; &yacute; che d&ugrave;ng lưới che đi 70% &aacute;nh nắng để giảm nhiệt khi thời tiết qu&aacute; n&oacute;ng.</p>
               
               <h3>NƯỚC</h3>
               
               <p>C&acirc;y Hương Thảo ưa ẩm vừa phải, nếu qu&aacute; ẩm sẽ khiến c&acirc;y bị thối l&aacute; v&agrave; &uacute;ng rễ dẫn đến chết c&acirc;y. V&igrave; vậy nếu c&acirc;y trồng ngo&agrave;i trời, bạn n&ecirc;n d&ugrave;ng b&igrave;nh phun tưới nước cho c&acirc;y để c&oacute; thể kiểm so&aacute;t được lượng nước. Tưới nước vừa ướt chậu v&agrave;o buổi s&aacute;ng l&agrave; th&iacute;ch hợp nhất. Nếu nắng gắt, bạn c&oacute; thể tưới th&ecirc;m 1 lần nữa v&agrave;o buổi chiều m&aacute;t để đảm bảo độ ẩm cho c&acirc;y. Nếu bạn để c&acirc;y trong nh&agrave;, chỉ n&ecirc;n tưới dưới gốc c&acirc;y, kh&ocirc;ng n&ecirc;n tưới l&ecirc;n l&aacute;.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>Rosemary l&agrave; lo&agrave;i c&acirc;y dễ sống dễ ph&aacute;t triển. Bạn c&oacute; thể chọn c&aacute;ch gi&acirc;m c&agrave;nh hoặc trồng c&acirc;y từ hạt để nh&acirc;n th&ecirc;m giống c&acirc;y trồng. Tuy nhi&ecirc;n, trồng c&acirc;y hương thảo bằng chiết c&agrave;nh sẽ đem lại hiệu quả cao hơn v&agrave; tiết kiệm thời gian sinh trưởng hơn so với việc ươm c&acirc;y từ hạt.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Dứa Cảnh Nến',
               'slug' => Str::of('Cây Dứa Cảnh Nến')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/7CvO3MSnEvS0FdtvgEOlMyyEkvYuTfKE.jpg',
               'feature_image_name' => 'dua-canh-nen-1.jpg',
               'price' => '130000',
               'sale_price' => '10',
               'final_price' => 117000,
               'content_short' => 'Cây Dứa Nến thuộc dòng cây thân cỏ, có thân giả được tạo bởi những bẹ lá chụm lại với nhau. Cây có tuổi thọ lâu đời, sống phụ sinh, là có hình lưỡi giáo, dài, nhọn dần về phía đầu, lá mền và quanh lá không có răng cưa, mặt lá nhẵn bóng và xanh tốt quanh năm',
               'content' => '<p><strong>C&acirc;y Dứa Cảnh Nến</strong>&nbsp;hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c như: C&acirc;y Phong Lộc Hoa, C&acirc;y Ng&ocirc;i Sao, C&acirc;y Dứa C&aacute;nh Sen&hellip;C&acirc;y c&oacute; t&ecirc;n khoa học l&agrave; Tillandsia imperalis thuộc họ thực vật Dứa Bromeliaceae c&oacute;&nbsp;nguồn gốc từ ch&acirc;u Mỹ, nhiều nhất l&agrave; c&aacute;c nước Mehico v&agrave; Equador. C&acirc;y được trồng rất phổ biến l&agrave;m c&acirc;y cảnh nội thất ở nước ta.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/dua-canh-nen.jpg" style="height:400px; width:400px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>T&ugrave;y v&agrave;o điều kiện thời tiết v&agrave; nơi đặt c&acirc;y m&agrave; ta c&oacute; c&aacute;ch tưới ph&ugrave; hợp, khi c&acirc;y thiếu nước l&aacute; c&oacute; biểu hiện mềm, l&aacute; hơi rủ. Trung b&igrave;nh thường tưới 1 -2 lần/tuần. Mỗi lần tưới đủ ẩm đất l&agrave; được, tr&aacute;nh để c&acirc;y &uacute;ng nước l&acirc;u ng&agrave;y.</p>
               
               <h3>&Aacute;NH S&Aacute;NG, NHIỆT&nbsp;ĐỘ</h3>
               
               <p>Th&iacute;ch nơi c&oacute; kh&iacute; hậu m&aacute;t v&agrave; tho&aacute;ng, tr&aacute;nh nắng gắt m&ugrave;a h&egrave;, th&iacute;ch nắng m&ugrave;a đ&ocirc;ng, nắng buổi sớm v&agrave; chiều muộn. Nhiệt độ th&iacute;ch hợp&nbsp;để c&acirc;y ph&aacute;t triển mạnh l&agrave;&nbsp;từ 18 đến 24 &deg;C.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>Loại&nbsp;đất&nbsp;ưa th&iacute;ch&nbsp;đối với c&acirc;y l&agrave;&nbsp;đất tho&aacute;ng c&oacute;&nbsp;độ m&ugrave;n cao, c&oacute; thể trộn&nbsp;đất thường với xỉ than&nbsp;đun rồi&nbsp;đập vụn, th&ecirc;m tro, trấu hun, sơ dừa, ph&acirc;n b&ograve;&hellip;Nếu c&acirc;y c&oacute; biểu hiện c&ograve;i cọc thiếu dinh dưỡng, ta c&oacute; thể thay đất cho c&acirc;y hoặc rắc ph&acirc;n đạm, npk&hellip;</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>Với&nbsp;đặc t&iacute;nh ph&aacute;t triển theo bụi th&igrave; c&aacute;ch nh&acirc;n giống tốt nhất&nbsp;đ&oacute; l&agrave; t&aacute;ch bụi.</p>
               
               <h3>VỊ TR&Iacute;&nbsp;ĐẶT C&Acirc;Y</h3>
               
               <p>N&ecirc;n&nbsp;đặt c&acirc;y&nbsp;ở ban c&ocirc;ng, cửa sổ,&nbsp;tho&aacute;ng gi&oacute; c&oacute; m&aacute;i che. Trong văn ph&ograve;ng n&ecirc;n&nbsp;để c&acirc;y dưới&nbsp;&aacute;nh&nbsp;điện huỳnh quang, nơi c&oacute; gi&oacute; lưu th&ocirc;ng, trước khi chuẩn bi về hoặc chiều tối nắng&nbsp;đỡ gắt th&igrave;&nbsp;để c&acirc;y ra ngo&agrave;i ph&iacute;a cửa sổ hoặc nơi c&oacute; &aacute;nh nắng buổi s&aacute;ng để&nbsp;<strong>c&acirc;y Dứa Cảnh Nến</strong>&nbsp;quang hợp tốt hơn, l&agrave; sẽ xanh v&agrave; khỏe hơn.</p>
               
               <h3>LƯU&nbsp;&Yacute;</h3>
               
               <p>&ndash; Kh&ocirc;ng n&ecirc;n ng&agrave;y n&agrave;o cũng tưới nước</p>
               
               <p>&ndash; Kh&ocirc;ng&nbsp;để c&acirc;y s&aacute;t&nbsp;cạnh cửa sổ k&iacute;nh c&oacute;&nbsp;&aacute;nh nắng buổi trưa chiếu v&agrave;o</p>
               
               <p>&ndash; Kh&ocirc;ng&nbsp;để nơi tối, b&iacute;</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Cỏ Lan Chi',
               'slug' => Str::of('Cây Cỏ Lan Chi')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/W1NdX47buwH974OKLJ8hvrkO5GJlECs2.jpg',
               'feature_image_name' => 'cay-co-lan-chi-1.jpg',
               'price' => '149000',
               'sale_price' => '5',
               'final_price' => 141550,
               'content_short' => 'Cây Cỏ Lan Chi hay còn gọi là cây Dây Nhện, cây Mẫu Tử...Cây có sọc trắng xanh nhìn rất bắt mắt và nổi bật, hợp làm cây phong thủy cho người mệnh Kim và Thủy. Cây Lan Chi phù hợp làm cây để bàn, cây trang trí nội thất, văn phòng, làm cây treo, tường cây',
               'content' => '<p>Cỏ C&acirc;y Lan Chi hay c&ograve;n một số t&ecirc;n gọi kh&aacute;c như: C&acirc;y D&acirc;y Nhện, cỏ Mẫu Tử, C&acirc;y Lục Thảo Trổ,&nbsp;Thảo Lan Chi, c&acirc;y c&oacute; t&ecirc;n khoa học l&agrave;:&nbsp;Chlorophytum comosum l&agrave; một lo&agrave;i thực vật lọc kh&iacute; thuộc họ Th&ugrave;a (Agavaceae), c&oacute; nguồn gốc từ ch&acirc;u Phi. Năm 1794 lo&agrave;i n&agrave;y được nh&agrave; tự nhi&ecirc;n học người Thụy Điển Carl Peter Thunberg m&ocirc; tả lần đầu ti&ecirc;n với t&ecirc;n gọi Anthericum comosum. Năm 1862 n&oacute; được m&ocirc; tả lại v&agrave; đặt v&agrave;o chi Lục thảo (Chlorophytum) như hiện tại bởi Henri Antoine Jacques. C&acirc;y Cỏ Lan Chi ph&ugrave; hợp l&agrave;m c&acirc;y treo tường, tường c&acirc;y, c&acirc;y nội thất, c&acirc;y trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, kệ tivi, c&acirc;y&nbsp;để b&agrave;n l&agrave;m việc&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/co-lan-chi.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>NƯỚC</strong>:</h3>
               
               <p>C&acirc;y c&oacute; phần dễ ph&igrave;nh ph&iacute;a dưới&nbsp;để trữ nước n&ecirc;n c&oacute; khả năng chịu hạn tốt, nhưng c&acirc;y cũng&nbsp;ưa m&aacute;t, ch&iacute;nh v&igrave; thế chỉ cần giữ&nbsp;đất hơi&nbsp;ẩm, kh&ocirc;ng n&ecirc;n tưới sũng nước cho c&acirc;y, tr&aacute;nh&nbsp;để&nbsp;<strong>Cỏ Lan Chi</strong>&nbsp;bị&nbsp;&uacute;ng nước nhiều ng&agrave;y dễ dẫn&nbsp;đến thối l&aacute; v&agrave; th&acirc;n. Nếu&nbsp;để c&acirc;y trong nh&agrave; th&igrave; chỉ cần tưới 1&nbsp;đến 2 lần trong tuần, với c&acirc;y&nbsp;để ngo&agrave;i trời th&igrave; bạn c&oacute; thể tưới nhiều hơn t&ugrave;y v&agrave;o&nbsp;điều kiện thời tiết, l&aacute; c&acirc;y mềm nghĩa l&agrave; c&acirc;y&nbsp;đang thiếu nước, l&aacute; cứng c&oacute; nghĩa l&agrave;&nbsp;đ&atilde;&nbsp;đủ nước, bạn c&oacute; thể nh&igrave;n v&agrave;o l&aacute;&nbsp;để&nbsp;điều chỉnh lượng nước tưới ph&ugrave; hợp.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong>:</h3>
               
               <p>C&acirc;y Cỏ Lan Chi&nbsp;ưa th&iacute;ch&nbsp;&aacute;nh s&aacute;ng b&aacute;n phần, n&ecirc;n&nbsp;để c&acirc;y tiếp x&uacute;c trực tiếp với&nbsp;&aacute;nh nắng buổi sớm v&agrave; chiều muộn, tr&aacute;nh&nbsp;để c&acirc;y tiếp x&uacute;c với&nbsp;&aacute;nh nắng gắt dễ khiến c&acirc;y bị ch&aacute;y l&aacute;. Nhiệt&nbsp;độ ph&ugrave; hợp 15 &ndash; 32&nbsp;độ C.</p>
               
               <h3><strong>ĐẤT</strong>:</h3>
               
               <p>C&acirc;y kh&ocirc;ng k&eacute;n&nbsp;đất c&oacute; thể sống&nbsp;được&nbsp;ở nhiều loại&nbsp;đất kh&aacute;c nhau, tuy nhi&ecirc;n loại&nbsp;đất th&iacute;ch hợp với c&acirc;y Cỏ Lan Chi l&agrave; loại&nbsp;đất tho&aacute;t nước tốt c&oacute; nhiều m&ugrave;n, c&oacute; thể trộn&nbsp;đất với tro, trấu, xỉ than, ph&acirc;n&nbsp;để ra loại&nbsp;đất&nbsp;ưu th&iacute;ch gi&uacute;p c&acirc;y ph&aacute;t triển nhanh hơn.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong>:</h3>
               
               <p><strong>&nbsp;</strong>C&acirc;y Cỏ Lan Chi nh&acirc;n giống tốt nhất bằng c&aacute;c t&aacute;ch bụi, hoặc t&aacute;ch c&acirc;y con khi&nbsp;đ&atilde; ra rễ.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hoa Sử Quân Tử',
               'slug' => Str::of('Cây Hoa Sử Quân Tử')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/6YHQQMzm0AaNiWVwZIBZdXBTFUVOH177.jpg',
               'feature_image_name' => 'cay-hoa-su-quan-tu-1.jpg',
               'price' => '219000',
               'sale_price' => '10',
               'final_price' => 197100,
               'content_short' => 'Cây hoa Sử Quân Tử có mùi thơm mát, dễ trồng và không phải chăm sóc nhiều, cây phù hợp làm cây ban công, cây leo giàn trước cửa...',
               'content' => '<p>C&acirc;y hoa Sử Qu&acirc;n Tử hay c&ograve;n gọi c&acirc;y hoa Giun l&agrave; một trong những loại c&acirc;y d&acirc;y leo c&oacute; hoa phổ biến&nbsp;ở nước ta. V&igrave; c&acirc;y c&oacute; sức sống m&atilde;nh liệt c&oacute; hoa thơm nhẹ, &iacute;t s&acirc;u bệnh v&agrave; c&ograve;n&nbsp;được lấy l&agrave;m thuốc n&ecirc;n hết sức an to&agrave;n. Nếu bạn đang muốn t&igrave;m loại c&acirc;y lấy b&oacute;ng m&aacute;t v&agrave; đẹp v&agrave;o m&ugrave;a h&egrave;, &iacute;t phải chăm s&oacute;c th&igrave; đ&acirc;y l&agrave; một sự lựa chọn tuyệt vời.&nbsp;<strong>C&acirc;y hoa Sử Qu&acirc;n Tử</strong>&nbsp;ph&ugrave; hợp l&agrave;m c&acirc;y ban c&ocirc;ng, c&acirc;y leo gi&agrave;n trước cửa&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/cay-hoa-su-quan-tu.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>Việc tưới nước chỉ quan trọng khi c&acirc;y c&ograve;n nhỏ, khi c&acirc;y hoa Sử Qu&acirc;n Tử&nbsp;thiếu nước l&aacute; c&oacute; hiện tượng h&eacute;o rũ, sờ l&aacute; mềm, đ&oacute; l&agrave; l&uacute;c bạn cần tưới nước. T&ugrave;y theo điều kiện m&ocirc;i trường c&oacute; thể m&ugrave;a h&egrave; ng&agrave;y n&agrave;o bạn tưới cũng được c&ograve;n đối với m&ugrave;a đ&ocirc;ng c&oacute; thể 1 tuần tưới 1 đến 2 lần.</p>
               
               <h3><strong>ĐẤT</strong></h3>
               
               <p>C&acirc;y c&oacute; thể trồng v&agrave; th&iacute;ch nghi với nhiều loại&nbsp;đất kh&aacute;c nhau, tuy nhi&ecirc;n loại&nbsp;đất tốt&nbsp;đối với&nbsp;<strong>c&acirc;y hoa Sử Qu&acirc;n Tử&nbsp;</strong>l&agrave;&nbsp;đất tho&aacute;t nước tốt c&oacute; nhiều chất dinh dưỡng.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>C&acirc;y hoa Sử Qu&acirc;n Tử&nbsp;c&oacute; thể nh&acirc;n giống bằng nhiều c&aacute;ch kh&aacute;c nhau, c&aacute;ch phổ biến nhất l&agrave; gi&acirc;m c&agrave;nh v&agrave; trồng bằng hạt.&nbsp;Nếu gieo bằng hạt th&igrave; sau khi phơi kh&ocirc; v&agrave; b&oacute;c vỏ, lấy hạt ng&acirc;m v&agrave;o nước ấm trong 6 giờ, rồi gieo v&agrave;o một chậu đất xốp, ẩm. Sau 1 th&aacute;ng hạt sẽ nảy mầm v&agrave; sau hai năm c&acirc;y đ&atilde; c&oacute; hoa. Nếu gi&acirc;m c&agrave;nh, th&igrave; bạn cần chọn những c&agrave;nh b&aacute;nh tẻ, to khỏe rồi cắt 1 đoạn d&agrave;i chừng 20cm, ng&acirc;m v&agrave;o nước khoảng 20 ph&uacute;t, sau đ&oacute; cắm nghi&ecirc;ng xuống đất nơi vườn ươm hay ngay ch&acirc;n h&agrave;ng r&agrave;o. Sau hơn 10 ng&agrave;y, c&agrave;nh gi&acirc;m sẽ b&eacute;n rễ, mọc mầm v&agrave; sau 1 năm đ&atilde; c&oacute; hoa.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Chuối Rẻ Quạt',
               'slug' => Str::of('Cây Chuối Rẻ Quạt')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Dbhm5Cu4Pg6EgaKU8ZKCOr7FPFYsIH5a.jpg',
               'feature_image_name' => 'chuoi-re-quat-1.jpg',
               'price' => '499000',
               'sale_price' => '15',
               'final_price' => 424150,
               'content_short' => 'Cây Chuối Rẻ Quạt là loại cây có lá to và xanh tốt quanh năm, cây phù hợp trồng biệt thự sân vườn, bể bơi, cây trồng trong nhà, cây trồng văn phòng, sản khách sạn, nhà hàng, quán cafe',
               'content' => '<p>C&acirc;y Chuối Rẻ Quạt hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave;&nbsp;c&acirc;y Chuối Quạt hay Chuối Cọ (danh ph&aacute;p hai phần: Ravenala madagascariensis) l&agrave; c&acirc;y thuộc họ Thi&ecirc;n điểu (Strelitziaceae), đặc hữu của Madagascar. Tuy nhi&ecirc;n n&oacute; kh&ocirc;ng phải l&agrave; chuối (họ Musaceae) v&agrave; cũng kh&ocirc;ng phải l&agrave; cọ (họ Arecaceae), c&acirc;y&nbsp;<strong>Chuối Rẻ Quạt</strong>&nbsp;l&agrave; lo&agrave;i duy nhất của chi Ravenala. Với l&aacute; to v&agrave; xanh quanh năm n&ecirc;n c&acirc;y&nbsp;được&nbsp;ưa th&iacute;ch&nbsp;để lựa chọn&nbsp;l&agrave;m c&acirc;y cảnh trong nh&agrave;, c&acirc;y nội thất, c&acirc;y&nbsp;để trang tr&iacute; shop, sản kh&aacute;ch sạn, bể bơi,&nbsp;qu&aacute;n cafe, s&acirc;n vườn biệt thự&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/chuoi-re-quat.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>C&acirc;y Chuối Rẻ Quạt c&oacute; khả năng t&iacute;ch nước&nbsp;ở th&acirc;n v&agrave; bẹ l&aacute;, n&ecirc;n c&acirc;y c&oacute; khả năng chịu hạn tốt nhưng kh&ocirc;ng chịu&nbsp;được&nbsp;&uacute;ng,&nbsp;đất&nbsp;ẩm l&acirc;u ng&agrave;y. Nếu trồng c&acirc;y&nbsp;ở trong nh&agrave;, văn ph&ograve;ng, chỉ cần tưới 1 tuần 1 lần, mỗi lần hơi&nbsp;ẩm&nbsp;đất l&agrave;&nbsp;được.</p>
               
               <h3><strong>ĐẤT</strong></h3>
               
               <p>Mặc d&ugrave; c&acirc;y c&oacute; thể sống&nbsp;được&nbsp;ở nhiều loại&nbsp;đất kh&aacute;c nhau, tuy nhi&ecirc;n loại&nbsp;đất&nbsp;ưa th&iacute;ch cho&nbsp;<strong>c&acirc;y Chuối Rẻ Quạt</strong>&nbsp;l&agrave; loại&nbsp;đất tơi xốp, tho&aacute;t nước tốt, c&oacute; nhiều chất dinh dưỡng.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>C&acirc;y c&oacute; sức sống kh&aacute; mạnh tốc&nbsp;độ ph&aacute;t triển nhanh v&igrave; vậy c&aacute;ch nh&acirc;n giống tốt nhất l&agrave; t&aacute;ch bụi, ngo&agrave;i ra th&igrave; c&acirc;y c&oacute; thể trồng&nbsp;được bằng hạt.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hạnh Phúc',
               'slug' => Str::of('Cây Hạnh Phúc')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/XaEYPsaNlQCLlkL880nFZfyb8733T4OO.jpg',
               'feature_image_name' => 'hanh-phuc-1.jpg',
               'price' => '155000',
               'sale_price' => '20',
               'final_price' => 124000,
               'content_short' => 'Cây Hạnh Phúc có ý nghĩa phong thủy mang đến hạnh phúc, đầm ấm cho gia chủ. Cây để làm kiểng có nhiều kích cỡ khác nhau để phù hợp cho gia chủ để bàn hay để dưới đất làm cây văn phòng, cây bày trước sảnh, hiên nhà. Cây phù hợp tặng khai trương, tân gia và tặng người thương.',
               'content' => '<p>C&acirc;y Hạnh Ph&uacute;c l&agrave; một trong những c&acirc;y được ưa chuộng&nbsp;ở Việt Nam nhưng t&agrave;i liệu về c&acirc;y n&agrave;y rất&nbsp;&iacute;t v&agrave; rất nhiều th&ocirc;ng tin tr&ecirc;n mạng&nbsp;đưa ra l&agrave; sai. Sau khi t&igrave;m hiểu một c&aacute;ch kỹ lưỡng th&igrave;&nbsp;&nbsp;đ&atilde; t&igrave;m ra&nbsp;được c&acirc;y c&oacute; t&ecirc;n khoa học ch&iacute;nh x&aacute;c l&agrave;: Heteropanax Chinensis l&agrave; chi thực vật c&oacute; hoa trong họ Araliaceae&nbsp;c&ograve;n gọi l&agrave; họ Nh&acirc;n S&acirc;m tương tự giống với c&acirc;y Ngũ Gia B&igrave;.&nbsp;<strong>C&acirc;y Hạnh Ph&uacute;c</strong>&nbsp;c&oacute;&nbsp;&yacute; nghĩa phong thủy mang&nbsp;đến hạnh ph&uacute;c,&nbsp;đầm ấm&nbsp;cho gia chủ. C&acirc;y&nbsp;để l&agrave;m kiểng c&oacute; nhiều k&iacute;ch cỡ kh&aacute;c nhau&nbsp;để ph&ugrave; hợp cho gia chủ&nbsp;để b&agrave;n hay&nbsp;để dưới&nbsp;đất l&agrave;m c&acirc;y văn ph&ograve;ng, c&acirc;y b&agrave;y trước sảnh, hi&ecirc;n nh&agrave;. C&acirc;y ph&ugrave; hợp tặng khai trương, t&acirc;n gia v&agrave; tặng người thương.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/hanh-phuc.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>T&ugrave;y v&agrave;o&nbsp;đều kiện m&ocirc;i trường&nbsp;đặt c&acirc;y m&agrave; ta c&acirc;n&nbsp;đối nước tưới, thường c&acirc;y Hạnh Ph&uacute;c để trong m&ocirc;i trường văn ph&ograve;ng th&igrave; 1 tuần ta tưới 1 lần hoặc ta&nbsp;để&nbsp;&yacute; khi&nbsp;đất chuyển sang kh&ocirc; th&igrave;&nbsp;để th&ecirc;m khoảng 2 &ndash; 3 ng&agrave;y cho&nbsp;đất kh&ocirc; hẳn rồi ta mới tưới tiếp mỗi lần chỉ cần tưới&nbsp;ẩm&nbsp;đất kh&ocirc;ng n&ecirc;n tưới qu&aacute; nhiều nước v&agrave; tưới nhiều lần c&acirc;y dễ bị&nbsp;&uacute;ng th&acirc;n.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG, NHIỆT&nbsp;ĐỘ</strong></h3>
               
               <p>Mặc d&ugrave; c&acirc;y c&oacute; thể sống&nbsp;ở&nbsp;điều kiện trong nh&agrave;, nhưng bản chất c&acirc;y Hạnh Ph&uacute;c rất th&iacute;ch nắng,&nbsp;&aacute;nh nắng buổi s&aacute;ng&nbsp;đến 8h v&agrave; sau 17h l&agrave;&nbsp;&aacute;nh nắng l&yacute; tưởng, hoặc d&ugrave;ng lưới che bớt 30%&nbsp;&aacute;nh s&aacute;ng khi&nbsp;để ngo&agrave;i trời, c&acirc;y&nbsp;để trong nh&agrave; n&ecirc;n&nbsp;để&nbsp;ở hi&ecirc;n, dưới b&oacute;ng&nbsp;điện, nơi tho&aacute;ng m&aacute;t.</p>
               
               <p>Nhiệt&nbsp;độ th&iacute;ch hợp&nbsp;để c&acirc;y ph&aacute;t triển l&agrave; từ 18 &ndash; 25&nbsp;đ&ocirc; C. Tr&aacute;nh&nbsp;để c&acirc;y&nbsp;ở nhiệt&nbsp;độ &gt;40&nbsp;độ C c&acirc;y sẽ bị h&eacute;o l&aacute;, th&acirc;n mất nước c&oacute; thể dẫn&nbsp;đến chết c&acirc;y.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng hạt, gi&acirc;m c&agrave;nh, hoặc triết c&agrave;nh&nbsp;đều&nbsp;được.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Búp Đa Đỏ',
               'slug' => Str::of('Cây Búp Đa Đỏ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/AzvIPh6YrlrSsLsS2e1Dv2eLnwG06klr.jpg',
               'feature_image_name' => 'bup-da-do-1.jpg',
               'price' => '125000',
               'sale_price' => '20',
               'final_price' => 100000,
               'content_short' => 'Cây Đa Búp Đỏ có ý nghĩa phong thủy mang đến cho gia chủ cuộc sống bình an và êm ấm. Ngoài ra cây còn có tác dụng hút được khói thuốc lá, các khí độc khác như: formaldehyde, carbon monoxide, hydrogen fluoride và một số chất gây ung thư ở thể hơi.',
               'content' => '<p>C&acirc;y Đa B&uacute;p Đỏ hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Đa Cao Su, C&acirc;y Đa Dai hay C&acirc;y Đa Ấn Độ. C&acirc;y rất dễ sống v&agrave; c&oacute; sức ph&aacute;t triển mạnh, c&acirc;y Đa B&uacute;p Đỏ&nbsp;c&oacute; &yacute; nghĩa phong thủy mang đến cho gia chủ cuộc sống b&igrave;nh an v&agrave; &ecirc;m ấm. Ngo&agrave;i ra c&acirc;y c&ograve;n c&oacute; khả năng h&uacute;t được kh&oacute;i thuốc l&aacute;, c&aacute;c kh&iacute; độc kh&aacute;c như: formaldehyde, carbon monoxide, hydrogen fluoride v&agrave; một số chất g&acirc;y ung thư ở thể hơi. C&acirc;y c&oacute; th&iacute;ch nghi nhanh với điều kiện m&ocirc;i trường v&igrave; thế c&acirc;y c&oacute; thể trồng được cả trong nh&agrave; lẫn ngo&agrave;i trời, hoặc m&ocirc;i trường b&aacute;n r&acirc;m l&agrave; l&uacute;c nắng, l&uacute;c m&aacute;t như ở hi&ecirc;n nh&agrave; v&agrave; cửa sổ. C&acirc;y ph&ugrave; hợp l&agrave;m qu&agrave; tặng, c&acirc;y để b&agrave;n, c&acirc;y văn ph&ograve;ng.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/bup-da-do.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>ĐẤT</strong></h3>
               
               <p>C&acirc;y th&iacute;ch loại đất c&oacute; m&ugrave;n giữ ẩm, loại đất n&agrave;y c&oacute; thể được tạo ra bằng sơ dừa, tro, trấu hun, nhưng vẫn n&ecirc;n trộn một số th&agrave;nh phần gi&uacute;p đất th&ocirc;ng tho&aacute;ng để dễ c&oacute; thể dễ ph&aacute;t triển, nước kh&ocirc;ng bị đọng qu&aacute; l&acirc;u để tr&aacute;nh t&igrave;nh trạng ở đất bị ph&aacute;t triển nấm. Hoặc nếu độ m&ugrave;n của đất cao ta n&ecirc;n tưới &iacute;t nước, chu kỳ tưới n&ecirc;n giảm bớt để đất thật kh&ocirc; rồi mới tưới tiếp.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>C&aacute;ch nh&acirc;n giống tốt nhất cho&nbsp;<strong>c&acirc;y Đa B&uacute;p Đỏ</strong>&nbsp;l&agrave; triết c&agrave;nh, tỷ lệ sống cao v&agrave; khả năng nh&acirc;n giống nhanh. Ngo&agrave;i ra ta c&oacute; thể sử dụng c&aacute;c phương ph&aacute;p kh&aacute;c, như gi&acirc;m c&agrave;nh, trồng hạt, t&aacute;ch bụi đều được.</p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C ĐA B&Uacute;P ĐỎ CHO NGƯỜI LƯỜI</h2>
               
               <p>Kh&ocirc;ng phải ai cũng l&agrave; chuy&ecirc;n gia, v&agrave; cũng kh&ocirc;ng c&oacute; thời gian để canh, để &yacute; c&acirc;y l&uacute;c n&agrave;o hết nước, n&ecirc;n tưới l&uacute;c n&agrave;o, l&uacute;c n&agrave;o th&igrave; b&ecirc; ra ngo&agrave;i, vậy c&oacute; c&aacute;ch chăm s&oacute;c dễ d&agrave;ng nhất v&agrave; c&acirc;y ph&aacute;t triển xanh tốt? C&acirc;u trả lời l&agrave; c&oacute;.</p>
               
               <p>&ndash; Nước: Bạn h&atilde;y để một chiếc đĩa nhỏ ở dưới đ&aacute;y chậu, ta chỉ cần đổ nước v&agrave;o c&aacute;i đĩa, th&igrave; đất chỉ bị ẩm lớp dưới, c&acirc;y vẫn đảm bảo được lượng nước m&agrave; kh&ocirc;ng sợ bị thối.</p>
               
               <p>&ndash; &Aacute;nh s&aacute;ng: C&acirc;y cũng kh&ocirc;ng th&iacute;ch nắng gắt, th&iacute;ch nắng nhẹ, v&agrave; gi&oacute;. C&oacute; thể mặc định cứ chủ nhật hoặc thứ 7 bạn mang n&oacute; ra ngo&agrave;i trời, để ở hi&ecirc;n, nơi c&oacute; điều kiện gi&oacute; v&agrave; c&oacute; m&aacute;i che để lỡ mưa to hoặc nắng qu&aacute; gắt c&acirc;y Đa B&uacute;p Đỏ c&oacute; thể tr&aacute;nh được.</p>
               
               <p>Bạn trồng c&acirc;y Đa B&uacute;p Đỏ l&agrave;m c&acirc;y cảnh văn ph&ograve;ng, c&acirc;y trồng trong nh&agrave; th&igrave; chỉ cần ch&uacute; &yacute; đến 2 yếu tố đ&oacute;, nếu đ&atilde; l&agrave;m tốt 2 yếu tố m&agrave; c&acirc;y vẫn c&oacute; hiện tượng lạ, th&igrave; h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i hoặc chuy&ecirc;n gia.</p>
               
               <h2>C&Acirc;Y ĐA B&Uacute;P ĐỎ PH&Ugrave; HỢP VỚI NGƯỜI N&Agrave;O?</h2>
               
               <p>C&acirc;y cối th&igrave; ai th&iacute;ch th&igrave; trồng th&ocirc;i, nếu bạn quan t&acirc;m nhiều đến phong thủy, về &yacute; nghĩa, về sức khỏe, th&igrave; ta c&oacute; thể tham khảo:</p>
               
               <p>&ndash; C&acirc;y Đa B&uacute;p Đỏ l&agrave;&nbsp; c&acirc;y phong thủy ph&ugrave; hợp với người mệnh Hỏa v&agrave; Mệnh Thổ</p>
               
               <p>&ndash; C&acirc;y c&oacute; &yacute; nghĩa:&nbsp;Mang đến cho gia chủ cuộc sống b&igrave;nh an v&agrave; &ecirc;m ấm</p>
               
               <p>&ndash; Sức khỏe:&nbsp;C&oacute; khả năng h&uacute;t được kh&oacute;i thuốc l&aacute;, c&aacute;c kh&iacute; độc kh&aacute;c như: formaldehyde, carbon monoxide, hydrogen fluoride v&agrave; một số chất g&acirc;y ung thư ở thể hơi.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Trầu Bà Đế Vương',
               'slug' => Str::of('Cây Trầu Bà Đế Vương')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/F5Q5tSYOGaMaq1osM6Vm8zIwAYY6ndQa.jpg',
               'feature_image_name' => 'trau-ba-de-vuong-1.jpg',
               'price' => '130000',
               'sale_price' => '15',
               'final_price' => 110500,
               'content_short' => 'Cây Trầu Bà Đế Vương Xanh an toàn, có sức sống tốt, phát triển nhanh, sống được trong điều kiện thiếu nắng như ở trong nhà, văn phòng. Chính vì vậy mà nó được nhân giống và phát triển rộng rãi trên nhiều quốc gia để làm cây cảnh trang trí. Cây Đế Vương Xanh mang ý nghĩa cho sự quyền lực và may mắn.',
               'content' => '<p>C&acirc;y Trầu B&agrave; Đế Vương Xanh hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; c&acirc;y Đế Vương Xanh (t&ecirc;n khoa học: Philodendron Imperial Green) l&agrave; một lo&agrave;i thực vật c&oacute; hoa trong họ R&aacute;y (Araceae). Nguồn gốc của c&acirc;y từ đảo Solomon, nguy&ecirc;n sinh ở Indonesia. V&igrave;&nbsp;<strong>c&acirc;y Trầu B&agrave; Đế Vương Xanh</strong>&nbsp;an to&agrave;n, c&oacute; sức sống tốt, ph&aacute;t triển nhanh, sống được trong điều kiện thiếu nắng như ở trong nh&agrave;, văn ph&ograve;ng. Ch&iacute;nh v&igrave; vậy m&agrave; n&oacute; được nh&acirc;n giống v&agrave; ph&aacute;t triển rộng r&atilde;i tr&ecirc;n nhiều quốc gia để l&agrave;m c&acirc;y cảnh trang tr&iacute;. C&acirc;y Đế Vương Xanh mang &yacute; nghĩa cho sự quyền lực v&agrave; may mắn.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/trau-ba-de-vuong.jpg" style="height:400px; width:400px" /></p>
               
               <h3>ĐẤT</h3>
               
               <p>C&acirc;y Trầu B&agrave; Đế Vương Xanh rất khỏe, n&ecirc;n c&oacute; thể sống được ở nhiều loại đất, nhưng loại đất th&iacute;ch hợp nhất l&agrave; loại tơi xốp, c&oacute; khả năng giữ ẩm, đổ m&ugrave;n cao, để c&oacute; loại đất n&agrave;y ta c&oacute; thể trộn đất với, trấu, xơ dừa, ph&acirc;n b&ograve;&hellip;</p>
               
               <h3>NƯỚC</h3>
               
               <p>T&ugrave;y v&agrave;o điều kiện thời tiết v&agrave; m&ocirc;i trường m&agrave; tưới c&acirc;y, thường nếu c&acirc;y nhỏ &iacute;t đất th&igrave; 4 &ndash; 5 ng&agrave;y tưới 1 lần, với c&acirc;y lớn c&oacute; nhiều đất, khả năng giữ nước l&acirc;u th&igrave; 7 &ndash; 10 ng&agrave;y mới tưới một lần, l&agrave; loại c&acirc;y tương đối ưa nước, nhưng cũng kh&ocirc;ng n&ecirc;n tưới nhiều, n&ecirc;n để đất kh&ocirc; hẳn rồi mới tưới tiếp, để tr&aacute;nh t&igrave;nh trạng, vi khuẩn ph&aacute;t triển.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>V&igrave; c&acirc;y c&oacute; sức sống m&atilde;nh liệt ph&aacute;t triển nhanh theo bụi, n&ecirc;n c&acirc;y thường được nh&acirc;n giống bằng c&aacute;c t&aacute;ch bụi l&agrave; phương ph&aacute;p tối ưu nhất.</p>
               
               <h3>T&Igrave;NH TRẠNG KH&Ocirc;NG TỐT HAY GẶP Ở C&Acirc;Y:</h3>
               
               <p><strong>Thường c&acirc;y c&oacute; hiện tượng c&ograve;i cọc v&agrave; thưa dần l&aacute;</strong>: L&agrave; do nơi để c&acirc;y b&iacute;, kh&ocirc;ng kh&iacute; kh&ocirc;. Để khắc phục điều n&agrave;y n&ecirc;n thi thoảng mang c&acirc;y ra ngo&agrave;i, nhất l&agrave; l&uacute;c trời mưa mang c&acirc;y ra ngo&agrave;i l&uacute;c n&agrave;y l&agrave; l&uacute;c c&acirc;y th&iacute;ch nhất, để c&acirc;y xanh tốt trở lại.</p>
               
               <p><strong>C&acirc;y Trầu B&agrave; Đế Vương Xanh bị v&agrave;ng l&aacute;</strong>: Nếu số lượng l&aacute; v&agrave;ng &iacute;t th&igrave; ta c&oacute; thể ngắt bỏ đi v&agrave; kh&ocirc;ng cần lo lắng, v&igrave; c&oacute; thể đ&oacute; l&agrave; l&aacute; gi&agrave;, hoặc khi thay đổi m&ocirc;i trường c&acirc;y rụng bớt để th&iacute;ch nghi. Nếu số lượng nhiều th&igrave; cần kiểm tra đất c&oacute; thể c&acirc;y đang bị &uacute;ng nước, cần bỏ c&acirc;y ra phơi kh&ocirc; v&agrave; thay đất mới.</p>
               
               <p><strong>C&acirc;y bị r&aacute;m l&aacute;:</strong>&nbsp;Thường l&agrave; do bị ch&aacute;y nắng, nghĩa l&agrave; nơi đ&oacute; đang qu&aacute; n&oacute;ng với c&acirc;y, cần chuyển c&acirc;y đến vị tr&iacute; m&aacute;t v&agrave; tho&aacute;ng hơn.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Trường Sinh',
               'slug' => Str::of('Cây Trường Sinh')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/I5CR8vu1ITKxMC7KcMHlQYI9iNQn7UKR.jpg',
               'feature_image_name' => 'truong-sinh-1.jpg',
               'price' => '125000',
               'sale_price' => '5',
               'final_price' => 118750,
               'content_short' => 'Cây Trường Sinh có tác dụng làm sạch không khí, hút các bụi bẩn và hấp thụ các chất độc hại như: Formandehit, cacbondioxit...Trong phong thủy cây mang đến sức khỏe, tiền tài, may mắn cho gia chủ. Phù hợp làm cây để bàn làm việc, phòng khách, quầy lễ tân, quà tặng...',
               'content' => '<p>Qua t&ecirc;n gọi&nbsp;<strong>C&acirc;y Trường Sinh</strong>&nbsp;ch&uacute;ng ta cũng đ&atilde; biết được n&oacute; l&agrave; loại c&acirc;y c&oacute; sức sống m&atilde;nh liệt, xanh tốt quanh năm, c&acirc;y&nbsp;kh&ocirc;ng chịu được nắng gắt ưa nơi m&aacute;t, c&oacute; &aacute;nh nắng nhẹ, ch&iacute;nh v&igrave; vậy c&acirc;y Trường Sinh rất th&iacute;ch hợp l&agrave;m c&acirc;y cảnh trong nh&agrave;, c&acirc;y cảnh để b&agrave;n l&agrave;m việc. C&acirc;y c&oacute; t&aacute;c dụng l&agrave;m sạch kh&ocirc;ng kh&iacute;, h&uacute;t c&aacute;c bụi bẩn v&agrave; hấp thụ c&aacute;c chất độc hại như: Formandehit, cacbondioxit&hellip;Trong phong thủy c&acirc;y mang đến sức khỏe, tiền t&agrave;i, may mắn cho gia chủ. C&acirc;y Trường Sinh đại diện cho mệnh Mộc, điều n&agrave;y c&oacute; nghĩa nếu bạn l&agrave; người mệnh Hỏa hoặc mệnh Mộc sẽ rất th&iacute;ch hợp với loại c&acirc;y n&agrave;y, n&oacute; sẽ mang đến cho gia đ&igrave;nh bạn nhiều điều tốt đẹp.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/truong-sinh.jpg" style="height:400px; width:400px" /></p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>Bạn c&oacute; thể trồng đất thịt n&oacute; vẫn sống nhưng để c&acirc;y Trường Sinh ph&aacute;t triển tốt ch&uacute;ng ta cần loại đất c&oacute; độ m&ugrave;n cao, đất tho&aacute;ng, độ ẩm trung b&igrave;nh, chất đất hơi chua để l&aacute; xanh để c&oacute; loại đất n&agrave;y th&igrave; ta n&ecirc;n trộn đất với c&aacute;c th&agrave;nh phần như: Trấu, trấu hun, sơ dừa, ph&acirc;n chuồng, đ&aacute; perlite&hellip;</p>
               
               <h3>NƯỚC</h3>
               
               <p>C&acirc;y thuộc loại l&aacute; bỏng mọng nước c&oacute; thể t&iacute;ch trữ nước ở th&acirc;n v&agrave; l&aacute;, ch&iacute;nh v&igrave; vậy nếu bạn để trong văn ph&ograve;ng chỉ cần 1 tuần tưới 1 lần, để ngo&agrave;i trời th&igrave; 1 tuần tưới 2 lần t&ugrave;y v&agrave;o điều kiện thời tiết, mỗi lần tưới đủ ẩm đất kh&ocirc;ng tưới nhiều. Kh&ocirc;ng tưới nhiều để đất ẩm l&acirc;u ng&agrave;y dễ dẫn tới t&igrave;nh trạng &uacute;ng, thối rễ v&agrave; v&agrave;ng l&aacute;.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Th&iacute;ch hợp với điều kiện b&aacute;n r&acirc;m nghĩa l&agrave; nơi c&oacute; &aacute;nh nắng &iacute;t như ở ph&iacute;a b&ecirc;n trong ban c&ocirc;ng, sau cửa sổ, giếng trời, ph&ograve;ng l&agrave;m việc, ph&ograve;ng kh&aacute;ch, nếu để&nbsp;<em>c&acirc;y Trường Sinh</em>&nbsp;ở ph&ograve;ng m&aacute;y lạnh th&igrave; tr&aacute;nh để c&acirc;y ngay ph&iacute;a dưới nơi điều h&ograve;a xả ra, sẽ khiến c&acirc;y mất nước nhanh m&agrave; kh&ocirc;ng kịp cho rễ h&uacute;t nước.</p>
               
               <p>Nếu kh&ocirc;ng c&oacute; điều kiện th&igrave; thi thoảng ban đ&ecirc;m bạn n&ecirc;n cho c&acirc;y ra ngo&agrave;i để trao đổi với kh&ocirc;ng kh&iacute; ngo&agrave;i trời để c&acirc;y lu&ocirc;n khỏe mạnh. Nếu bạn đang lựa chọn loại c&acirc;y dễ sống, &iacute;t phải chăm s&oacute;c l&agrave;m c&acirc;y để b&agrave;n&nbsp;th&igrave; Trường Sinh l&agrave; một trong những lựa chọn tối ưu.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp l&agrave; từ 18 &ndash; 30 độ C. Ở nhiệt độ thấp c&acirc;y sẽ ngừng ph&aacute;t triển m&agrave; c&oacute; thể rụng bớt l&aacute;, ở nhiệt độ cao c&acirc;y bị d&aacute;m l&aacute; v&agrave; c&oacute; thể chết.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y Trường Sinh c&oacute; thể nh&acirc;n giống bằng rất nhiều c&aacute;ch, từ hạt, t&aacute;ch bụi, gi&acirc;m c&agrave;nh, gi&acirc;m l&aacute;&hellip;</p>
               
               <h2>LƯU &Yacute; KHI CHĂM S&Oacute;C C&Acirc;Y TRƯỜNG SINH</h2>
               
               <p>&ndash; Kh&ocirc;ng n&ecirc;n tưới nước qu&aacute; nhiều.<br />
               &ndash; Thường xuy&ecirc;n lau l&aacute; để l&aacute; trao đổi tốt với m&ocirc;i trường v&agrave; nh&igrave;n đẹp hơn.</p>
               
               <p>&ndash; Loại bỏ c&aacute;c l&aacute; thối, gi&agrave;, v&agrave;ng ở ph&iacute;a gốc.</p>',
               'user_id' => '3',
               'category_id' => '1',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            
        ]);
    }
}
