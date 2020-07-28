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



            // CÂY TRONG NHÀ
            [ 
               'name' => 'Tường Cây Xanh',
               'slug' => Str::of('Tường Cây Xanh')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/QH4JCrJoPTS1Ys9YsdJB11zjy1DH5QPn.jpg',
               'feature_image_name' => 'tuong-cay-xanh-1.jpg',
               'price' => '799000',
               'sale_price' => '15',
               'content_short' => 'Combo bao gồm lướt sắt sơn tĩnh điện, 3 chậu cây cảnh treo, miễn phí thi công, phù hợp để làm tường ban công, khoảng tường trống trong văn phòng, nhà',
               'content' => '<p>Ở 2 th&agrave;nh phố lớn Hồ Ch&iacute; Minh v&agrave; H&agrave; Nội th&igrave; mức độ &ocirc; nhiễm ng&agrave;y c&agrave;ng cao, số người d&acirc;n ở lại th&agrave;nh phố gia tăng rất nhiều, khiến mọi thứ trở n&ecirc;n trật trội, cạnh tranh nhau hơn, khiến con người lu&ocirc;n c&oacute; cảm gi&aacute;c bức bối, căng thẳng&nbsp;dễ dẫn đến t&igrave;nh trạng stress kh&eacute;o d&agrave;i, để giải quyết vấn đề đ&oacute; th&igrave; bạn cần c&oacute; kh&ocirc;ng gian v&agrave; thời gian thư gi&atilde;n gi&uacute;p mọi thứ trở lại&nbsp;c&acirc;n bằng. V&agrave;&nbsp;Web C&acirc;y Cảnh muốn&nbsp;đề cập một giải ph&aacute;p gi&uacute;p giải tỏa căng thẳng&nbsp;đ&oacute; l&agrave; &ldquo;<strong>Tường c&acirc;y xanh&quot;</strong></p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/tuong-cay-xanh.jpg" style="height:400px; width:400px" /></p>
               
               <h2>N&Ecirc;N L&Agrave;M BAO NHI&Ecirc;U TƯỜNG C&Acirc;Y XANH</h2>
               
               <p>T&ugrave;y theo mong muốn của kh&aacute;ch h&agrave;ng&nbsp;để c&oacute; tư vấn hợp l&yacute;, tuy nhi&ecirc;n thường sẽ c&oacute; 3 nhu cầu:</p>
               
               <p>&ndash; L&agrave;m Tường C&acirc;y Xanh&nbsp;cho ban c&ocirc;ng</p>
               
               <p>&ndash; L&agrave;m Tường C&acirc;y Xanh&nbsp;cho văn ph&ograve;ng</p>
               
               <p>&ndash; L&agrave;m Tường C&acirc;y Xanh cho spa, kh&aacute;ch sạn, qu&aacute;n c&agrave; ph&ecirc;</p>
               
               <p>Đối với ban c&ocirc;ng th&igrave; thường sẽ l&agrave;m từ 2m2 &ndash; 4m2 chi ph&iacute; l&agrave; từ 1.600.000 &ndash; 2.4000.000 VNĐ&nbsp;( gi&aacute;&nbsp;đ&atilde; bao gồm c&acirc;y&nbsp;)</p>
               
               <p>Đối với văn ph&ograve;ng, spa, kh&aacute;ch sạn, c&agrave; ph&ecirc;&hellip; thường sẽ l&agrave;m 4m2 &ndash; 6m2.</p>
               
               <p>Khung sẽ&nbsp;được l&agrave;m c&aacute;ch&nbsp;đất 50cm &ndash; 70cm với chiều cao tường c&acirc;y xanh sẽ dao&nbsp;động từ 2,5m đến 2,7m. 50cm &ndash; 70cm&nbsp;ở dưới n&ecirc;n trồng chậu c&acirc;y&nbsp;để nước c&oacute; rơi xuống kh&ocirc;ng rơi ra s&agrave;n.</p>
               
               <h2>HỖ TRỢ GIẢI PH&Aacute;P TƯỚI V&Agrave; LẮP ĐẶT C&Ugrave;NG TƯỜNG C&Acirc;Y XANH GI&Aacute; CHỈ 200K CHO 2M2</h2>
               
               <p>C&acirc;y treo, tường c&acirc;y xanh&hellip;C&oacute; ưu điểm gi&uacute;p tiết kiệm kh&ocirc;ng gian, trang tr&iacute; những mảng tường trống, gi&uacute;p kh&ocirc;ng gian xanh m&agrave; kh&ocirc;ng tốn nhiều diện t&iacute;ch, c&acirc;y cũng hạn chế được việc &uacute;ng nước do tưới nhiều, mưa. Tuy nhi&ecirc;n đa phần c&acirc;y lại chết v&igrave; kh&ocirc;, để khắc phục gi&uacute;p c&acirc;y lu&ocirc;n xanh tốt. Webcaycanh c&oacute; l&agrave;m th&ecirc;m giải ph&aacute;p tưới c&acirc;y gi&aacute; rẻ, gi&uacute;p c&acirc;y bạn lu&ocirc;n xanh tốt v&agrave; kh&ocirc;ng c&ograve;n lo ngại vấn đề tưới c&acirc;y.</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Tùng La Hán',
               'slug' => Str::of('Cây Tùng La Hán')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/hIXIPswbzgqfCq7k5JzwHiRj0yfP3dPV.jpg',
               'feature_image_name' => 'tung-la-han-1.jpg',
               'price' => '125000',
               'sale_price' => '5',
               'content_short' => 'Cây Tùng La Hán được tượng trưng cho chữ Thọ chính vì thế cây mang ý nghĩa phong thủy về sức khỏe. Cây thường được dùng để làm quà tặng, quà mừng thọ với ý nguyện mong gia chủ luôn mạnh khỏe và bình an.',
               'content' => '<p>C&acirc;y T&ugrave;ng La H&aacute;n c&oacute; 2 loại 1 loại l&aacute; ngắn v&agrave; 1 loại l&aacute; d&agrave;i. C&acirc;y c&oacute; t&ecirc;n khoa học l&agrave;: Podocarpus macrophyllus l&agrave; một lo&agrave;i c&acirc;y cảnh thuộc họ Th&ocirc;ng tre (Podocarpaceae) c&oacute; nguồn gốc từ Nhật Bản v&agrave; Trung Quốc thường được trồng l&agrave;m cảnh trong c&ocirc;ng vi&ecirc;n, đ&igrave;nh ch&ugrave;a, vườn nh&agrave;. V&igrave; l&aacute; c&acirc;y c&oacute; tuổi thọ kh&aacute; l&acirc;u, nếu ở điều kiện tốt trung b&igrave;nh 5 năm c&acirc;y mới thay l&aacute;.&nbsp;<strong>C&acirc;y T&ugrave;ng La H&aacute;n</strong>&nbsp;được tượng trưng cho chữ Thọ ch&iacute;nh v&igrave; thế c&acirc;y mang &yacute; nghĩa phong thủy về sức khỏe. C&acirc;y thường được d&ugrave;ng để l&agrave;m qu&agrave; tặng, qu&agrave; mừng thọ với &yacute; nguyện mong gia chủ lu&ocirc;n mạnh khỏe v&agrave; b&igrave;nh an.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/tung-la-han.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>T&ugrave;y v&agrave;o điều kiện nơi đặt c&acirc;y m&agrave; ta tưới nhiều hoặc &iacute;t nước, thường nếu để c&acirc;y T&ugrave;ng La H&aacute;n trong văn ph&ograve;ng 7 &ndash; 10 ng&agrave;y tưới 1 lần, mỗi lần chỉ đủ ẩm đất, tr&aacute;nh tưới nhiều c&acirc;y dễ bị &uacute;ng nước, c&oacute; thể d&ugrave;ng b&igrave;nh xịt hoặc khăn ẩm lau l&aacute; để biểu b&igrave; tr&ecirc;n l&aacute; kh&ocirc;ng bị b&iacute;.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p><strong>T&ugrave;ng La H&aacute;n</strong>&nbsp;chịu được cường độ &aacute;nh s&aacute;ng lớn, c&oacute; thể để c&acirc;y ngo&agrave;i trời, tuy nhi&ecirc;n c&acirc;y cũng c&oacute; thể tự th&iacute;ch nghi với điều kiện m&ocirc;i trường b&aacute;n r&acirc;m v&agrave; ph&ograve;ng m&aacute;y lạnh. Tr&aacute;nh để c&acirc;y ph&iacute;a sau cửa k&iacute;nh v&igrave; khi trời nắng gắt, &aacute;nh s&aacute;ng chiều qua cửa sẽ l&agrave;m c&acirc;y n&oacute;ng hơn, dẫn đến sốc nhiệt, mất nước h&eacute;o l&aacute;. N&ecirc;n phơi nắng cho c&acirc;y v&agrave;o l&uacute;c s&aacute;ng sớm v&agrave; chiều muộn, thi thoảng mang ra ngo&agrave;i trời để c&acirc;y được trao đổi với kh&ocirc;ng kh&iacute; b&ecirc;n ngo&agrave;i.</p>
               
               <h3><strong>GI&Oacute;</strong></h3>
               
               <p>Nếu bạn để &yacute; kỹ th&igrave;&nbsp;<strong>c&acirc;y T&ugrave;ng La H&aacute;n</strong>&nbsp;n&agrave;y trong tự nhi&ecirc;n thường được mọc ở tr&ecirc;n n&uacute;i, cường độ gi&oacute; lớn, n&ecirc;n yếu tố gi&oacute; sẽ gi&uacute;p cho l&aacute; c&acirc;y được d&agrave;y v&agrave; kh&iacute;t, nếu thiếu gi&oacute;, m&ocirc;i trường b&iacute; c&acirc;y sẽ bị thưa l&aacute; v&agrave; xấu.</p>
               
               <h3><strong>ĐẤT</strong></h3>
               
               <p>Đất trồng T&ugrave;ng La H&aacute;n kh&ocirc;ng cần c&oacute; qu&aacute; nhiều dưỡng chất nhưng đất phải tho&aacute;ng để vừa tạo độ tho&aacute;ng v&agrave; m&ugrave;n ta c&oacute; thể d&ugrave;ng tro trấu, sơ dừa, xi than, đ&aacute; perlife, xỉ than trộn v&agrave;o mới đất.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng hạt, triết c&agrave;nh, t&aacute;ch bụi.</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Lan Quân Tử',
               'slug' => Str::of('Cây Lan Quân Tử')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/bJzE8GQTAJdOIAGtEynzYEn5N8C9ynq2.jpg',
               'feature_image_name' => 'lan-quan-tu-1.jpg',
               'price' => '155000',
               'sale_price' => '10',
               'content_short' => 'Cây Lan Quân Tử được coi là cây vượng tài đối với người tuổi Mùi. Người cầm tinh con Dê không để ý chuyện tiền tài, cũng không ham muốn kiếm tiền nên họ ít khi cố gắng để làm việc, vì vậy đương nhiên không có khả năng phát tài. Bạn có thể đặt một chậu Lan Quân Tử tại góc bên phải của bức tường đối diện ghế sô-pha, để tăng vận quý nhân trợ giúp bạn trên con đường phát tài.',
               'content' => '<p><strong>C&acirc;y Lan Qu&acirc;n Tử</strong>&nbsp;được coi l&agrave; lo&agrave;i hoa sang trọng, kh&ocirc;ng những vậy trong phong thủy n&oacute; c&ograve;n mang đến sự danh gi&aacute; v&agrave; ph&uacute; qu&yacute; cho chủ nh&acirc;n. C&acirc;y được coi l&agrave; c&acirc;y vượng t&agrave;i đối với người tuổi M&ugrave;i. Người cầm tinh con D&ecirc; kh&ocirc;ng để &yacute; chuyện tiền t&agrave;i, cũng kh&ocirc;ng ham muốn kiếm tiền n&ecirc;n họ &iacute;t khi cố gắng để l&agrave;m việc, v&igrave; vậy đương nhi&ecirc;n kh&ocirc;ng c&oacute; khả năng ph&aacute;t t&agrave;i.&nbsp;Bạn c&oacute; thể đặt một chậu Lan Qu&acirc;n Tử tại g&oacute;c b&ecirc;n phải của bức tường đối diện ghế s&ocirc;-pha, để tăng vận qu&yacute; nh&acirc;n trợ gi&uacute;p bạn tr&ecirc;n con đường ph&aacute;t t&agrave;i.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/lan-quan-tu.jpg" style="height:267px; width:400px" /></p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp với Lan Qu&acirc;n Tử l&agrave; từ 15 độ&nbsp;C&nbsp;&ndash; 25 độ C ở nhiệt độ n&agrave;y c&acirc;y ph&aacute;t triển mạnh nhất đ&oacute; l&agrave; khung nhiệt độ trời m&ugrave;a xu&acirc;n, nếu nhiệt độ qu&aacute; n&oacute;ng hoặc qu&aacute; lạnh th&igrave; c&acirc;y sẽ nhưng ph&aacute;t triển v&agrave; chuyển sang trạng th&aacute;i ngủ đ&ocirc;ng ngừng hoạt động. N&ecirc;n nếu trời qu&aacute; n&oacute;ng hoặc lạnh th&igrave; ta n&ecirc;n mang c&acirc;y v&agrave;o nh&agrave;.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>Đất trồng th&iacute;ch hợp nhất phải l&agrave; đất chua, tho&aacute;ng kh&iacute;, gi&agrave;u dinh dưỡng, đất tốt nhất cho&nbsp;<em>c&acirc;y Lan Qu&acirc;n Tử</em>&nbsp;l&agrave; 6 m&ugrave;n, trấu hun + 2 l&aacute; kh&ocirc; mục +1 đất c&aacute;t + 1 ph&acirc;n hữu cơ. Hoặc đơn giản bạn c&oacute; thể trộn đất vườn với nhiều sơ dừa k&egrave;m th&ecirc;m 1 &iacute;t ph&acirc;n b&oacute;n trong đất l&agrave; được. Cần đảm bảo đất tho&aacute;ng v&agrave; nhiều dinh dưỡng để c&acirc;y ph&aacute;t triển tốt l&agrave; được.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&oacute; rất nhiều c&aacute;ch để nh&acirc;n giống&nbsp;<strong>Lan Qu&acirc;n Tử</strong>&nbsp;như t&aacute;ch nh&aacute;nh, trồng từ hạt&hellip;Kh&oacute; nhất l&agrave; trồng từ hạt v&agrave; dễ nhất l&agrave; t&aacute;ch nh&aacute;nh từ c&acirc;y mẹ.</p>
               
               <p>Trồng hoa Lan Qu&acirc;n Tử bằng c&aacute;ch gieo hạt. Trước khi gieo hạt cần phải chuẩn bị chậu, khay hoặc hố trồng trước. Sau đ&oacute; đến đất thường th&igrave; tốt nhất n&ecirc;n lấy lớp đất tơi xốp chứa m&ugrave;n l&aacute; c&acirc;y của bề mặt đất những khu rừng, sau đ&oacute; trộn th&ecirc;m 1/3 c&aacute;t sạch l&agrave; c&oacute; thể d&ugrave;ng được. Ng&acirc;m hạt giống v&agrave;o nước ấm từ 30 &ndash; 35&nbsp;đ&ocirc; C, trong v&ograve;ng nửa tiếng sau đ&oacute; để r&aacute;o l&agrave; c&oacute; thể đem đi trồng. Chậu hoa sau khi gieo hạt tốt nhất l&agrave; n&ecirc;n đặt ở nơi c&oacute; nhiệt độ từ 20-25&nbsp;độ C v&agrave; độ ẩm phải duy tr&igrave; mức khoảng 90%, sau 1-2 tuần hạt nảy mầm sẽ mọc rễ.</p>
               
               <p>Phương ph&aacute;p nh&acirc;n giống bằng c&aacute;ch t&aacute;ch&nbsp;nh&aacute;nh, thao t&aacute;c n&agrave;y kh&aacute; đơn giản m&agrave; t&iacute;nh di truyền lại tương đối ổn định, c&oacute; thể giữ được đặc t&iacute;nh của c&acirc;y mẹ.&nbsp;Khi ươm mầm, trước ti&ecirc;n sẽ nhổ c&acirc;y mẹ ra khỏi chậu, giũ sạch đất, t&igrave;m ra mầm phụ c&oacute; khả năng l&agrave;m c&acirc;y con, sau khi t&aacute;ch ra c&oacute; thể trồng trực tiếp l&ecirc;n chậu, n&ecirc;n trồng c&acirc;y tr&ecirc;n c&aacute;t sạch, sau khi trồng c&oacute; thể tưới một lần đẫm nước. Đợi khoảng 2 tuần sau, khi vết thương đ&atilde; l&agrave;nh mới trồng l&ecirc;n chậu đất, thường th&igrave; sau 1 &ndash; 2 th&aacute;ng c&acirc;y sẽ mọc rễ mới.</p>
               
               <h3>B&Oacute;N PH&Acirc;N</h3>
               
               <p>Để đảm bảo c&acirc;y ph&aacute;t triển tốt th&igrave; h&agrave;ng th&aacute;ng b&oacute;n ph&acirc;n điều độ bằng NPK 20-10-10 , hoặc ph&acirc;n vi sinh, ph&acirc;n tr&ugrave;n quế&hellip;Khi c&acirc;y xấu yếu c&oacute; thể h&ograve;a lo&atilde;ng ph&acirc;n NPK tưới v&agrave;o gốc c&acirc;y.</p>
               
               <h3>PH&Ograve;NG CHỐNG BỆNH THƯỜNG GẶP</h3>
               
               <p>Trồng&nbsp;<strong>c&acirc;y Lan qu&acirc;n tử</strong>&nbsp;thường gặp bệnh h&eacute;o rũ gốc, mốc trắng. Để ph&ograve;ng tr&aacute;nh ch&uacute;ng ta chỉ cần tưới dung dịch Carbendazim 50% pha lo&atilde;ng với tỉ lệ 1:500 tưới v&agrave;o gốc c&acirc;y hoặc v&ugrave;ng đất xung quanh.&nbsp;Ngo&agrave;i ra bệnh thối l&aacute;, bệnh th&aacute;n thư hay vỏ cứng. Nếu gặp trường hợp n&agrave;y th&igrave; cần cắt bỏ phần bị thối v&agrave; để ở nơi kh&ocirc; tho&aacute;ng. C&oacute; thể d&ugrave;ng Streptomycin, Oxytetracyline pha lo&atilde;ng với tỉ lệ 1:5000 phun hoặc b&ocirc;i l&ecirc;n nốt bệnh.</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Bàng Singapore',
               'slug' => Str::of('Cây Bàng Singapore')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/GKFs8ggWAknrp85zCoJXCbs4sIVUJiQu.jpg',
               'feature_image_name' => 'bang-sing-1.jpg',
               'price' => '499000',
               'sale_price' => '10',
               'content_short' => 'Cây Bàng Singapore phù hợp làm cây văn phòng, trang trí nội thất, cây trong nhà. Vị trí thích hợp để cây ở sảnh khách sạn, quầy thu ngân, hành lang, ban công, phòng sếp, phòng họp và làm quà tặng khai trương.',
               'content' => '<p><strong>C&acirc;y B&agrave;ng Singapore</strong>&nbsp;l&agrave; loại c&acirc;y nội thất đang được ưa chuộng nhất hiện nay, c&oacute; nguồn gốc từ phương T&acirc;y mới được du nhập v&agrave;o Việt Nam, bạn sẽ bắt gặp loại c&acirc;y n&agrave;y ở những nơi c&oacute; kh&ocirc;ng gian v&agrave; kiến tr&uacute;c hiện đại. Kh&ocirc;ng phải ngẫu nhi&ecirc;n m&agrave; c&acirc;y B&agrave;ng Singapore lại được ưa chuộng nhất hiện nay, m&agrave; v&igrave; những được điểm của n&oacute; rất ph&ugrave; hợp với kh&iacute; hậu nhiệt đới, ẩm gi&oacute; m&ugrave;a của nước ta, hơn nữa c&acirc;y sống tốt ở m&ocirc;i trường m&aacute;y lạnh, nơi c&oacute; &aacute;nh s&aacute;ng nhẹ v&agrave; đặc biệt n&oacute; l&agrave; loại c&acirc;y sống l&acirc;u năm. Với t&aacute;n l&aacute; lớn, tr&ograve;n v&agrave; đầy đặn xanh tốt quanh năm tượng trưng cho sự may mắn v&agrave; gi&agrave;u sang.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/bang-sing.jpg" style="height:533px; width:400px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>T&ugrave;y theo điều kiện ph&ograve;ng v&agrave; nơi bạn để c&acirc;y B&agrave;ng Singapore m&agrave; điều chỉnh lượng nước, thường nếu để ngo&agrave;i trời, như h&agrave;ng lang, trước sảng kh&aacute;ch sạn nơi c&oacute; gi&oacute; v&agrave; nắng nhiều th&igrave; khả năng bốc hơi của đất v&agrave; l&aacute; sẽ nhiều hơn th&igrave; ta c&oacute; thể tưới 1 tuần&nbsp; 2 -3 lần mỗi lần đủ ẩm bầu đất v&agrave; 1 tuần tưới 1 lần nếu để c&acirc;y trong ph&ograve;ng, trong nh&agrave; nơi m&aacute;t v&agrave; c&oacute; độ ẩm cao.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>V&igrave; c&acirc;y ưa b&oacute;ng m&aacute;t n&ecirc;n bạn chỉ cần đặt c&acirc;y nơi c&oacute; 1 hướng nắng như &aacute;nh s&aacute;ng buổi s&aacute;ng hoặc &aacute;nh nắng buổi chiều tr&aacute;nh &aacute;nh nắng gắt buổi trưa v&agrave;o trời m&ugrave;a h&egrave;. Nếu để trong ph&ograve;ng ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; &aacute;nh s&aacute;ng tự nhi&ecirc;n th&igrave; bạn n&ecirc;n để c&acirc;y dưới &aacute;nh đ&egrave;n để c&acirc;y kh&ocirc;ng bị thiếu s&aacute;ng.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp nhất đối với&nbsp;<em>c&acirc;y B&agrave;ng Singapore</em>&nbsp;l&agrave; từ 16 &ndash; 27&deg; C, nếu dưới 5&deg; C c&acirc;y c&oacute; thể chết v&agrave; rụng l&aacute;, nếu bạn để ngo&agrave;i trời v&agrave; m&ugrave;a lạnh th&igrave; n&ecirc;n mang c&acirc;y v&agrave;o nh&agrave;.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>Loại đất th&iacute;ch hợp nhất với c&acirc;y B&agrave;ng Sing l&agrave; loại đất c&oacute; độ m&ugrave;n cao, đất tơi xốp để đảm bảo trong qu&aacute; tr&igrave;nh tưới nhiều lần đất kh&ocirc;ng bị n&eacute;n v&agrave; b&iacute;. Để được loại đất th&iacute;ch hợp bạn c&oacute; thể trộn đất thịt, đất vườn với tro, trấu đun rồi, sơ dừa v&agrave; 1 &iacute;t xỉ than đun rồi đập vụn. Hoặc bạn c&oacute; thể mua đất tribat ngo&agrave;i tiệm loại đất m&agrave;u đen đ&atilde; được khử nấm v&agrave; vi sinh vật c&oacute; hại trộn với đ&aacute; perlite hay c&ograve;n gọi l&agrave; đ&aacute; tr&acirc;n ch&acirc;u để tạo độ xốp. Nếu trồng được 6 th&aacute;ng hoặc 1 năm thấy đất cằn, c&acirc;y c&oacute; hiện tượng thiếu chất bạn c&oacute; thể thay đất hoặc mua đạm về rắc dưới gốc l&agrave; được</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&aacute;ch nh&acirc;n giống tốt nhất v&agrave; tốt ưu l&agrave; triết c&agrave;nh để khi ra rễ ta cắt v&agrave; trồng xuống đất tỷ lệ th&agrave;nh c&ocirc;ng l&agrave; 100%, hoặc bạn c&oacute; thể nh&acirc;n giống bằng c&aacute;ch gi&acirc;m c&agrave;nh.</p>
               
               <h3>VỊ TR&Iacute; ĐẶT C&Acirc;Y</h3>
               
               <p>B&agrave;ng Singapore th&iacute;ch hợp để ở sảnh kh&aacute;ch sạn, quầy thu ng&acirc;n, ph&ograve;ng họp, ph&ograve;ng sếp, ph&ograve;ng kh&aacute;ch. Lưu &yacute; để c&acirc;y sống tốt n&ecirc;n để nơi cạnh cửa sổ, nơi c&oacute; &aacute;nh s&aacute;ng nhẹ, nếu để nơi ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; &aacute;nh s&aacute;ng tự nhi&ecirc;n th&igrave; bạn c&oacute; thể đặt dưới &aacute;nh điện</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Tùng Thơm',
               'slug' => Str::of('Cây Tùng Thơm')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/x2URHEaE0oU3tsVnIs1SdZkga94hrMyx.jpg',
               'feature_image_name' => 'tung-thon-1.jpg',
               'price' => '215000',
               'sale_price' => '0',
               'content_short' => 'Cây Tùng Thơm hay còn Tùng Hương, Tùng Chanh cây có mùi hương chanh nhẹ dễ chịu, màu sắc cây tươi sáng nhìn rất nổi bật phù hợp làm cây trang trí, để văn phòng, bàn lễ tân...',
               'content' => '<p>C&acirc;y T&ugrave;ng Thơm hay c&ograve;n c&aacute;i t&ecirc;n gọi kh&aacute;c l&agrave; T&ugrave;ng Hương, T&ugrave;ng Chanh. C&acirc;y c&oacute; t&ecirc;n khoa học&nbsp;Cupressus macrocarpa, thuộc họ T&ugrave;ng, trắc thuộc l&aacute; kim c&oacute; m&agrave;u xanh n&otilde;n chuối, c&acirc;y c&oacute; nguồn gốc từ ph&iacute;a Nam Ch&acirc;u Mỹ, được trồng nhiều ở c&aacute;c v&ugrave;ng n&uacute;i c&oacute; nhiệt độ ẩm thấp. Sau n&agrave;y c&acirc;y được đưa về Việt Nam v&agrave; trồng nhiều ở nơi c&oacute; kh&iacute; hậu m&aacute;t mẻ, để nh&acirc;n giống. Sau khi c&acirc;y cứng c&aacute;p th&igrave; được chuyển đến c&aacute;c nơi kh&aacute;c nhau để l&agrave;m c&acirc;y cảnh văn ph&ograve;ng, để b&agrave;n trang tr&iacute;.&nbsp;<strong>C&acirc;y T&ugrave;ng Thơm</strong>&nbsp;mang đến sự thoải m&aacute;i, sảng kho&aacute;i v&agrave; giảm stress gi&uacute;p gia chủ tập trung hơn trong c&ocirc;ng việc để đưa ra được những quyết định ch&iacute;nh x&aacute;c. C&acirc;y ph&ugrave; hợp để l&agrave;m trang tr&iacute; đ&ecirc;m noel, gi&aacute;ng sinh, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, văn ph&ograve;ng&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/tung-thom.jpg" style="height:480px; width:400px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>C&acirc;y c&oacute; nhu cầu nước giống với c&aacute;c loại&nbsp;<a href="https://webcaycanh.com/cay-canh-van-phong/" target="_blank">c&acirc;y cảnh văn ph&ograve;ng</a>&nbsp;kh&aacute;c. Một tuần tưới 2 lần mỗi lần tưới ẩm khoảng 1/2 đến 3/4 đất t&ugrave;y theo k&iacute;ch cỡ chậu. Chậu c&agrave;ng lớn th&igrave; khả năng giữ nước c&agrave;ng l&acirc;u v&agrave; ngược lại v&agrave; c&ograve;n t&ugrave;y thuộc độ ẩm của m&ocirc;i trường m&agrave; ta c&acirc;n đối nước kh&ocirc;ng để đất qu&aacute; ẩm hoặc qu&aacute; kh&ocirc;, nếu để c&acirc;y ngo&agrave;i trời ng&agrave;y n&agrave;o bạn cũng c&oacute; thể tưới.</p>
               
               <h3>&Aacute;NH S&Aacute;NG V&Agrave; NHIỆT ĐỘ</h3>
               
               <p>C&acirc;y c&oacute; thể sống được ở trong điều kiện thiếu s&aacute;ng, ở trong m&ocirc;i trường chỉ c&oacute; điện huỳnh quang, tuy nhi&ecirc;n để c&acirc;y đẹp m&agrave;u sắc tươi tắn bạn n&ecirc;n phơi nắng cho c&acirc;y mỗi ng&agrave;y khoảng 30 ph&uacute;t đến 1 tiếng. Hoặc khi ra về bạn mang c&acirc;y ra chỗ c&oacute; &aacute;nh s&aacute;ng, đến khi l&agrave;m bạn lại mang c&acirc;y v&agrave;o l&agrave; được, c&acirc;y ưa &aacute;nh s&aacute;ng nhẹ v&agrave;o buổi sớm v&agrave; chiều tối. Nhiệt độ th&iacute;ch hợp từ 21 &ndash; 26 độ C.</p>
               
               <p>Tuy nhi&ecirc;n tr&aacute;nh để c&acirc;y sốc nhiệt v&iacute; dụ đang ở ph&ograve;ng điều h&ograve;a lạnh nhiệt độ b&ecirc;n ngo&agrave;i v&agrave; b&ecirc;n trong lệch nhau đến 10 độ C bạn mang c&acirc;y ra ngo&agrave;i, như vậy rất dễ l&agrave;m c&acirc;y sốc nhiệt m&agrave; chết</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất th&iacute;ch hợp nhất cho c&acirc;y l&agrave; đất tơi xốp c&oacute; độ m&ugrave;n cao như đất c&oacute; nhiều th&agrave;nh phần sơ dừa, tro, trấu v&agrave; điều đặc biệt l&agrave; đất cũng phải c&oacute; độ tho&aacute;ng để rễ ph&aacute;t triển tốt v&agrave; tho&aacute;t nước để c&acirc;y khỏi bị &uacute;ng.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y được nh&acirc;n giống bằng hạt hoặc chiết c&agrave;nh, nếu nh&acirc;n giống bằng hạt th&igrave; khoảng 2 tuần sẽ nẩy mầm</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hoa Trạng Nguyên',
               'slug' => Str::of('Cây Hoa Trạng Nguyên')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/OcOTYaDvi7mf4ZAXvMRkBjqin72KdTZR.jpg',
               'feature_image_name' => 'trang-nguyen-1.jpg',
               'price' => '210000',
               'sale_price' => '0',
               'content_short' => 'Cây Hoa Trạng Nguyên có ý nghĩa phong thủy mang đến thành công, đỗ đạt và may mắn. Cây phù hợp làm cây cảnh văn phòng, quầy lễ tân, quầy thu ngân, cây cảnh để trước cửa nhà.',
               'content' => '<p>C&acirc;y Trạng Nguy&ecirc;n hay c&ograve;n c&oacute; t&ecirc;n gọi l&agrave; c&acirc;y Nhất Phẩm Hồng, c&acirc;y c&oacute; nguồn gốc ở miền nam Mexico, Trung Mỹ v&agrave; ch&acirc;u Phi. Với mầu đỏ nổi bật c&acirc;y được du nhập v&agrave; mang trồng l&agrave;m c&acirc;y cảnh ở nhiều quốc gia ở Hoa Kỳ n&oacute; c&oacute; t&ecirc;n&nbsp;Poinsettia, theo t&ecirc;n của Joel Roberts Poinsett, đại sứ Hoa Kỳ đầu ti&ecirc;n tại Mexico, l&agrave; người đ&atilde; đưa lo&agrave;i c&acirc;y n&agrave;y v&agrave;o Hoa Kỳ năm 1825. Tại Hoa Kỳ, trạng nguy&ecirc;n c&oacute; thể t&igrave;m thấy trong tự nhi&ecirc;n c&oacute; mọc hoang d&atilde; tại Hawaii v&agrave; Puerto Rico. C&aacute;c t&ecirc;n gọi trong c&aacute;c ng&ocirc;n ngữ kh&aacute;c l&agrave; Mexican flame leaf (l&aacute; lửa Mexico), Christmas star (sao N&ocirc; en), Winter rose (hồng m&ugrave;a đ&ocirc;ng), Noche Buena, hoa Ataturk (tại Thổ Nhĩ Kỳ), Pascua, 聖誕花 (th&aacute;nh đản hoa), 聖誕紅 (th&aacute;nh đản hồng) v.v&hellip;C&acirc;y ph&ugrave; hợp để l&agrave;m qu&agrave; tặng khai trương, c&acirc;y cảnh văn ph&ograve;ng, quầy lễ t&acirc;n, b&agrave;n thu ng&acirc;n, c&acirc;y Trạng Nguy&ecirc;n c&ograve;n thường để trước cửa nh&agrave; để đ&oacute;n may mắn v&agrave; th&agrave;nh c&ocirc;ng.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/trang-nguyen.jpg" style="height:279px; width:300px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C C&Acirc;Y TRẠNG NGUY&Ecirc;N</h2>
               
               <p>C&acirc;y chăm s&oacute;c kh&aacute; dễ d&agrave;ng nhất l&agrave; đối với m&ugrave;a mưa ở miền nam th&igrave; chỉ cần để c&acirc;y ở ngo&agrave;i trời tr&aacute;nh được &aacute;nh nắng gắt vậy l&agrave; đủ kh&ocirc;ng cần phải chăm s&oacute;c g&igrave; th&ecirc;m v&igrave; thường 1 &ndash; 2 ng&agrave;y trời lại mưa. C&ograve;n b&igrave;nh thường khi c&acirc;y Trạng Nguy&ecirc;n để ở trong nh&agrave; hoặc trước hi&ecirc;n c&oacute; m&aacute;i che mưa th&igrave; ta cần ch&uacute; &yacute; những điểm sau:</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ tốt cho c&acirc;y hoa trạng nguy&ecirc;n ph&aacute;t triển v&agrave; đẹp l&agrave; từ 16 độ C đến 22 độ C. Nếu nhiệt độ dưới 10 độ, l&aacute; rụng v&agrave; t&agrave;n lụi. Hoặc khi nhiệt độ tr&ecirc;n 25 độ C th&igrave; c&acirc;y hạn chế sinh trưởng, l&aacute; h&eacute;o &uacute;a v&agrave; chết.&nbsp;Do đ&oacute;, cần đặt c&acirc;y dưới nơi b&oacute;ng r&acirc;m v&agrave;o ban ng&agrave;y v&agrave; dưới &aacute;nh s&aacute;ng mặt trời v&agrave;o buổi s&aacute;ng. &Aacute;nh s&aacute;ng ảnh hưởng đến việc ra hoa của c&acirc;y rất nhiều. Để c&acirc;y ra hoa tốt v&agrave; c&aacute;c l&aacute; bắc c&oacute; m&agrave;u đẹp th&igrave; c&acirc;y cần c&oacute; thời gian d&agrave;i trong b&oacute;ng tối hơn s&aacute;ng.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Lu&ocirc;n giữ ẩm cho đất nhưng kh&ocirc;ng để đất ướt thường nếu c&acirc;y để ngo&agrave;i trời sẽ 2 ng&agrave;y tưới 1 lần v&agrave; đối với c&acirc;y trong nh&agrave; thời tiết kh&ocirc;ng n&oacute;ng v&agrave; kh&ocirc; hanh th&igrave; 1 tuần tưới 2 lần. ch&uacute; &yacute; tưới nhẹ ở gốc kh&ocirc;ng tưới sũng nước đễ dẫn đến thối c&acirc;y, chết c&acirc;y.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất ph&ugrave; hợp với c&acirc;y Trạng Nguy&ecirc;n l&agrave; loại đất c&oacute; nhiều chất dinh dưỡng nhưng tơi xốp v&agrave; tho&aacute;t nước tốt, c&oacute; thể trộn đất với tro, trấu v&agrave; xơ dừa để được loại đất ưa th&iacute;ch n&agrave;y.</p>
               
               <h3>PH&Acirc;N B&Oacute;N</h3>
               
               <p><strong>C&acirc;y Trạng Nguy&ecirc;n</strong>&nbsp;rất nhạy cảm với ph&acirc;n b&oacute;n, nếu b&oacute;n nhiều th&igrave; c&acirc;y dễ bị ch&aacute;y rễ, sốc thuốc v&igrave; vậy n&ecirc;n b&oacute;n &iacute;t v&agrave; b&oacute;ng theo định kỳ tr&aacute;nh b&oacute;n l&uacute;c trời nắng n&oacute;ng, b&oacute;n ph&acirc;n c&agrave;ng đầy đủ hoa c&agrave;ng đẹp, m&agrave;u sắc đậm, l&acirc;u t&agrave;n. Sử dụng loại ph&acirc;n NPK (20:20:20) tan b&oacute;n cho c&acirc;y. Định kỳ 1 th&aacute;ng b&oacute;n 1 lần.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng c&aacute;ch triết c&agrave;nh, trồng bằng hạt&hellip;</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây May Mắn Tài Lộc',
               'slug' => Str::of('Cây May Mắn Tài Lộc')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/rSRQdjVcjjPw9xW7YrL4Vjdla0squUCO.jpg',
               'feature_image_name' => 'may-man-tai-loc-1.jpg',
               'price' => '149000',
               'sale_price' => '5',
               'content_short' => 'Cây May Mắn Tài Lộc giúp cho gia chủ làm ăn thuận lợi, sáng suốt trong việc đưa ra những quyết định. Cây phù hợp làm quà tặng, cây để bàn, trang trí...',
               'content' => '<p><strong>C&acirc;y May Mắn</strong>&nbsp;hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave;&nbsp;<strong>c&acirc;y T&agrave;i Lộc</strong>&nbsp;l&agrave; một trong những c&acirc;y được d&acirc;n văn ph&ograve;ng đang rất ưa chuộng, v&igrave; chỉ cần nghe t&ecirc;n th&ocirc;i c&aacute;c bạn cũng đ&atilde; biết &yacute; nghĩa của loại c&acirc;y n&agrave;y. C&acirc;y mang đến may mắn v&agrave; t&agrave;i lộc cho gia chủ, c&acirc;y May Mắn T&agrave;i Lộc gi&uacute;p gia chủ lu&ocirc;n c&oacute; tinh thần thoải m&aacute;i để đưa ra những quyết định ch&iacute;nh x&aacute;c. C&acirc;y nhỏ xinh ph&ugrave; hợp để l&agrave;m c&acirc;y cảnh để b&agrave;n, qu&agrave; tặng, trang tr&iacute; c&aacute;c g&oacute;c nhỏ&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/may-man-tai-loc.jpg" style="height:200px; width:300px" /></p>
               
               <h3><strong>NHIỆT ĐỘ</strong></h3>
               
               <p>Nhiệt độ th&iacute;ch hợp để đ&acirc;y c&oacute; thể sống v&agrave; l&aacute; lu&ocirc;n tươi từ 15 &ndash; 28 độ C. Ở điều kiện nhiệt độ tr&ecirc;n 35 độ C c&acirc;y dễ bị kh&ocirc; h&eacute;o v&agrave; ch&aacute;y l&aacute;.</p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>N&ecirc;n để&nbsp;<strong>c&acirc;y May Mắn</strong>&nbsp;T&agrave;i Lộc ở nơi m&aacute;t c&oacute; &aacute;nh nắng nhẹ, kh&ocirc;ng để c&acirc;y ngo&agrave;i trời dưới &aacute;nh nắng buổi trưa m&ugrave;a h&egrave; m&agrave; kh&ocirc;ng che chắn. Ch&iacute;nh v&igrave; c&acirc;y để ở điều kiện m&aacute;t như điều kiện văn ph&ograve;ng, trong nh&agrave; n&ecirc;n chỉ cần cung cấp &iacute;t nước cho c&acirc;y khoảng 1 tuần tưới nước một lần mỗi lần đủ ẩm đất, hoặc 1 tuần tưới 2 lần mỗi lần ẩm 1/2 đất, kh&ocirc;ng n&ecirc;n tưới nhiều, để c&acirc;y dưới trời mưa dễ l&agrave;m &uacute;ng lớp cỏ v&agrave; dẫn tới hỏng c&acirc;y.</p>
               
               <h3><strong>ĐẤT</strong></h3>
               
               <p>Loại đất th&iacute;ch hợp để trồng c&acirc;y May Mắn T&agrave;i Lộc l&agrave; loại đất c&oacute; độ m&ugrave;n cao, khả năng giữ ẩm tốt v&agrave; tho&aacute;t nước nhanh. C&oacute; thể d&ugrave;ng đất tribat trộn với sơ dừa theo tỷ lệ 2:1 để tạo ra loại đất th&iacute;ch hợp nhất đối với c&acirc;y.</p>
               
               <h2>MỘT SỐ BỆNH THƯỜNG GẶP Ở C&Acirc;Y MAY MẮN T&Agrave;I LỘC</h2>
               
               <p>Bệnh c&acirc;y hay gặp nhất l&agrave; bệnh quả bị mốc, thối, hoặc h&eacute;o. Nguy&ecirc;n nh&acirc;n ch&iacute;nh l&agrave; do&nbsp;nước, nếu tưới qu&aacute; nhiều nước, nước kh&ocirc;ng tho&aacute;t được ra, đất bị ẩm l&acirc;u ng&agrave;y tạo ra m&ocirc;i trường l&yacute; tưởng để vi khuẩn ph&aacute;t triển dẫn tới t&igrave;nh trạng thối c&acirc;y. Nếu gặp phải t&igrave;nh trạng n&agrave;y th&igrave; nhanh ch&oacute;ng kịp thời cắt bỏ phần thối, phơi đất hoặc thay đất mới cho c&acirc;y.</p>
               
               <h2>C&Acirc;Y MAY MẮN T&Agrave;I LỘC SỐNG ĐƯỢC BAO NHI&Ecirc;U L&Acirc;U?</h2>
               
               <p>T&ugrave;y v&agrave;o điều kiện chăm s&oacute;c nhưng&nbsp;<strong>c&acirc;y May Mắn T&agrave;i Lộc</strong>&nbsp;c&oacute; tuổi thọ chừng 6 th&aacute;ng, lớp cỏ ph&iacute;a b&ecirc;n dưới c&acirc;y th&igrave; khoảng 3 th&aacute;ng sẽ mọc d&agrave;i, c&oacute; thể để nguy&ecirc;n như vậy hoặc bỏ lớp cỏ đ&oacute; đi v&agrave; gieo bằng lớp cỏ mới</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Tùng Bông Lai',
               'slug' => Str::of('Cây Tùng Bông Lai')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/XuEaf6MpgbQN2em3CX6udOKEel1Ftzql.jpg',
               'feature_image_name' => 'tung-bong-lai-1.jpg',
               'price' => '125000',
               'sale_price' => '10',
               'content_short' => 'Cây Tùng Bồng Lai để bàn mang ý nghĩa phong thủy nhiều tới sức khỏe, tài lộc, thịnh vượng, giữ tiền và giữ của cho người sở hữu. Cây phong thủy dành cho người tuổi Thân',
               'content' => '<p>C&acirc;y T&ugrave;ng Bồng Lai hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; T&ugrave;ng L&aacute; Văn Tr&uacute;c, T&ugrave;ng L&aacute; Thi&ecirc;n M&ocirc;n Đ&ocirc;ng. Đ&acirc;y l&agrave; giống c&acirc;y bản địa của v&ugrave;ng&nbsp;California-Mỹ. Nhưng c&acirc;y c&oacute; sức sống kh&aacute; m&atilde;nh liệt n&ecirc;n n&oacute; dễ d&agrave;ng th&iacute;ch nghi với điều kiện ở Việt Nam.&nbsp;<strong>C&acirc;y T&ugrave;ng Bồng Lai</strong>&nbsp;mang &yacute; nghĩa phong thủy nhiều tới sức khỏe, t&agrave;i lộc, thịnh vượng, giữ tiền v&agrave; giữ của cho người sở hữu. Đặc biệt với người cầm tinh con khỉ, c&oacute; được c&acirc;y n&agrave;y như c&oacute; qu&yacute; nh&acirc;n ph&ugrave; trợ, l&agrave;m ăn ph&aacute;t t&agrave;i&hellip;C&acirc;y T&ugrave;ng Bồng Lai nhỏ ph&ugrave; hợp để b&agrave;n, kệ s&aacute;ch, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/tung-bong-lai.jpg" style="height:300px; width:200px" /></p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ tốt nhất cho c&acirc;y T&ugrave;ng Bồng Lai l&agrave; trong khoảng 20&ordm;C &ndash; 30&ordm;C. C&acirc;y kh&oacute; sống v&agrave; c&oacute; khả năng chết khi kh&iacute; hậu&nbsp;lạnh dưới 0&ordm;C c&ograve;n khi n&oacute;ng tr&ecirc;n 40&ordm;C n&oacute; dễ bị một loại nấm t&ecirc;n l&agrave; Seiridium Cardinale. Khi bị nấm n&agrave;y, c&acirc;y sẽ kh&ocirc; đen chồi v&agrave; chết dần. Lo&agrave;i n&agrave;y ph&aacute;t triển khỏe khi đ&atilde; c&oacute; bộ rễ ổn định. Nếu trồng s&acirc;n vườn th&igrave; c&oacute; thể bạn kh&ocirc;ng cần tưới hoặc ph&acirc;n b&oacute;n m&agrave; chỉ cắt tỉa l&agrave; đủ.</p>
               
               <h3>NƯỚC</h3>
               
               <p>C&acirc;y T&ugrave;ng B&ocirc;ng Lai cũng được coi l&agrave; c&acirc;y cảnh văn ph&ograve;ng v&igrave; n&oacute; kh&aacute; ưa nước v&agrave; dễ sống, bạn n&ecirc;n tưới nước&nbsp;1 tuần một lần ở điều kiện b&igrave;nh thường. Khi thời tiết c&oacute; đổ ẩm cao, hay nắng n&oacute;ng th&igrave; c&oacute; thể tăng hoặc giảm. Mặc d&ugrave; c&acirc;y ưa ẩm nhưng kh&ocirc;ng n&ecirc;n để đất lu&ocirc;n ẩm như v&acirc;y sẽ tạo điều kiện tốt cho nấm v&agrave; c&aacute;ch sinh vật g&acirc;y hại cho c&acirc;y ph&aacute;t triển.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất l&yacute; tưởng l&agrave; loại giữ ẩm nhưng lại tho&aacute;t nước tốt. Nghe c&oacute; vẻ hơi mẫu thu&acirc;n v&agrave; loại đất n&agrave;y cũng được nhiều loại c&acirc;y th&iacute;ch. Nghĩa l&agrave; loại đất n&agrave;y chỉ giữ đất ở mức ẩm ẩm chứ kh&ocirc;ng xũng nước khi nỡ tưới qu&aacute; tay v&agrave; gi&uacute;p đất đỡ bay hơi nước. Để tho&aacute;t nước tốt bạn c&oacute; thể trộn đất với xỉ than đun rồi đập nhỏ s&agrave;ng bỏ lớp xỉ qu&aacute; vụn, để giữ ẩm tốt ta c&oacute; thể d&ugrave;ng chấu, sơ dừa, tro&hellip;Ngo&agrave;i ra bạn c&oacute; thể trộn th&ecirc;m ph&acirc;n b&ograve; kh&ocirc;, hoặc một số dưỡng chất để đất c&oacute; th&ecirc;m dinh dưỡng.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng c&aacute;ch triết c&agrave;nh, hạt hoặc t&aacute;ch c&acirc;y con từ c&acirc;y mẹ.</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hồng Môn',
               'slug' => Str::of('Cây Hồng Môn')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/f8mytobEmo89QMo7KjW4RVaDcmwj9vzq.jpg',
               'feature_image_name' => 'hong-mon-1.jpg',
               'price' => '135000',
               'sale_price' => '15',
               'content_short' => 'Cây Hồng Môn tượng trưng cho tình yêu và lòng hiếu khách, cây phù hợp để bày phòng khách, quầy lễ tân, nơi nhiều người thường xuyên qua lại, hoặc để trang trí nội thất đều rất hợp.',
               'content' => '<p>C&acirc;y Hồng M&ocirc;n&nbsp;c&oacute; nguy&ecirc;n xuất từ Colombia v&agrave; Ecuador. C&acirc;y Hồng M&ocirc;n (Anthurium) l&agrave; chi lớn nhất thuộc họ r&aacute;y Araceae với khoảng 600 &ndash; 800 ( c&oacute; thể &nbsp;1.000 )&nbsp;lo&agrave;i ph&acirc;n bố ở v&ugrave;ng Trung v&agrave; Nam Mỹ. Được ph&aacute;t hiện năm 1876 ở Colombia. Hồng M&ocirc;n c&ograve;n một số t&ecirc;n gọi kh&aacute;c như: M&ocirc;n Hồng, Vĩ Hoa Tr&ograve;n, Buồm Đỏ&hellip;<strong>C&acirc;y Hồng M&ocirc;n</strong>&nbsp;trong phong thủy tượng trưng cho t&igrave;nh y&ecirc;u , l&ograve;ng hiếu kh&aacute;ch. Ngo&agrave;i ra c&acirc;y rất ph&ugrave; hợp với người mệnh Hỏa v&agrave; mệnh Thổ, c&acirc;y sẽ mang đến t&agrave;i lộc v&agrave; may mắn cho những người bản mệnh n&agrave;y. C&acirc;y ph&ugrave; hợp l&agrave;m c&acirc;y để b&agrave;n, ph&ograve;ng kh&aacute;ch, quầy lễ t&acirc;n, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, c&aacute;c g&oacute;c nhỏ trong nh&agrave;. C&acirc;y c&oacute; t&aacute;c dụng thanh lọc kh&ocirc;ng kh&iacute;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/hong-mon.jpg" style="height:300px; width:300px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>Nước hay ch&iacute;nh l&agrave; độ ẩm của đất th&igrave; độ ẩm khoảng 70 &ndash; 80%, tương ứng mỗi lần tưới ẩm khoảng 3/4 chậu c&acirc;y, nếu thời tiết ẩm, lạnh c&oacute; thể 1 tuần tưới 1 lần, nếu thời tiết kh&ocirc;, n&oacute;ng th&igrave; 1 tuần tưới 2 lần. Nếu chậu bị kh&ocirc; c&acirc;y sẽ c&oacute; m&agrave;u l&aacute; nhạt, ủ rũ. Ngược lại nếu thừa nước th&igrave; c&acirc;y đễ bị thối do nhiễm bệnh, n&ecirc;n bạn đừng tưới nhiều qu&aacute;. Kh&ocirc; th&igrave; cần tưới th&ecirc;m nước l&agrave; được chứ ẩm thối rồi th&igrave; cứu c&acirc;y rất phức tạp.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp đối với&nbsp;<strong>c&acirc;y Hồng M&ocirc;n</strong>&nbsp;l&agrave; từ 15 &ndash; 30 độ C, nếu nhiệt độ thấp hơn 15 độ c th&igrave; c&acirc;y sẽ sinh trưởng v&agrave; ph&aacute;t triển chậm, c&ograve;n nếu tr&ecirc;n 30 độ c th&igrave; c&acirc;y bị v&agrave;ng l&aacute;, thối l&aacute;, thậm ch&iacute; l&agrave; chết.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>C&acirc;y Hồng M&ocirc;n ưa loại đất c&oacute; nhiều ph&ugrave; sa, tơi xốp, bạn c&oacute; thể trộn&nbsp;ph&acirc;n chuồng hoặc ph&acirc;n hữu cơ đ&atilde; được ủ hoai mục, trấu hun, xơ dừa&hellip;để tạo n&ecirc;n loại đất ưu th&iacute;ch gi&uacute;p c&acirc;y ph&aacute;t triển nhanh hơn.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y ph&aacute;t triển rất nhanh n&ecirc;n phương ph&aacute;p t&aacute;ch chiết c&acirc;y con từ c&acirc;y mẹ đem hiệu quả cao nhất, ngo&agrave;i ra bạn c&oacute; thể nh&acirc;n giống bằng phương ph&aacute;p nu&ocirc;i cấy m&ocirc; từ l&aacute;, hạt. Với c&aacute;c c&acirc;y con t&aacute;ch từ c&acirc;y mẹ phải sau trồng từ 4 th&aacute;ng trở l&ecirc;n v&agrave; phải c&oacute; &iacute;t nhất 3 &ndash; 4 l&aacute;. D&ugrave;ng dao sắc t&aacute;ch c&acirc;y con s&aacute;t gốc, lấy rễ b&egrave;o t&acirc;y b&oacute; lại ươm th&ecirc;m một thời gian cho ra rễ rồi mới trồng v&agrave;o chậu.</p>
               
               <h3>S&Acirc;U BỆNH</h3>
               
               <p><strong>C&acirc;y Hồng M&ocirc;n</strong>&nbsp;rất &iacute;t s&acirc;u bệnh thường c&oacute; một số bệnh thường gặp như thối củ, thối gốc thối th&acirc;n&hellip;Để c&aacute;c bệnh được hạn chế th&igrave; bạn n&ecirc;n cắt tỉa bớt l&aacute; gi&agrave;, l&agrave;m sạch cỏ trong chậu để tạo độ th&ocirc;ng tho&aacute;ng, duy tr&igrave; độ ẩm v&agrave; &aacute;nh s&aacute;ng th&iacute;ch hợp nhằm hạn chế nấm bệnh ph&aacute;t sinh, ph&aacute;t triển v&agrave; g&acirc;y hại</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Cau Tiểu Trâm',
               'slug' => Str::of('Cây Cau Tiểu Trâm')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/cesgQA1QiO6bHpPUARYGqIue2ri3svpt.jpg',
               'feature_image_name' => 'cau-tieu-tram-1.jpg',
               'price' => '69000',
               'sale_price' => '0',
               'content_short' => 'Cây Câu Tiểu Trâm hay còn gọi là cau may mắn, cây ưa mát không cần nhiều ánh sáng vẫn có thể phát triển, Cau Tiểu Trâm có khả năng hút các chất khí độc và lọc sạch không ý. Cây mang ý nghĩa may mắn và tài lộc trong phong thủy.',
               'content' => '<p>C&acirc;y Cau&nbsp;Tiểu Tr&acirc;m l&agrave; loại c&acirc;y ưa m&aacute;t v&agrave; y&ecirc;u cầu &aacute;nh s&aacute;ng kh&ocirc;ng nhiều, c&oacute; thể ph&aacute;t triển tốt m&agrave; chỉ cần &aacute;nh s&aacute;ng đ&egrave;n huỳnh quang, n&ecirc;n n&oacute;&nbsp;rất ph&ugrave; hợp l&agrave;m c&acirc;y để b&agrave;n,&nbsp;văn ph&ograve;ng, trong nh&agrave;&hellip;Hơn thế nữa ngo&agrave;i ra n&oacute; c&ograve;n gi&uacute;p lọc sạch c&aacute;c chất kh&iacute; độc, bụi bẩn trong kh&ocirc;ng kh&iacute; rất c&oacute; lợi cho sức khỏe. C&acirc;y mang &yacute; nghĩa phong thủy c&oacute; t&aacute;c dụng &aacute;n ngữ v&agrave; loại bỏ kh&iacute; xấu. Trồng một c&acirc;y cau tiểu tr&acirc;m trong nh&agrave; để khai th&ocirc;ng vượn kh&iacute;, mang lại may mắn t&agrave;i lộc cho gia chủ.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/cau-tieu-tram.jpg" style="height:300px; width:300px" /></p>
               
               <h3>TƯỚI NƯỚC:</h3>
               
               <p>Cũng thuộc loại c&acirc;y kh&aacute; ưa nước tuy nhi&ecirc;n cũng kh&ocirc;ng cần phải qu&aacute; nhiều v&igrave; đất ẩm l&agrave; m&ocirc;i trường l&yacute; tưởng để vi khuẩn v&agrave; nấm ph&aacute;t triển dễ g&acirc;y bệnh v&agrave; l&agrave; thối c&acirc;y. Tuy v&agrave;o điều kiện m&ocirc;i trường v&agrave; kh&iacute; hậu nếu m&ocirc;i trường kh&ocirc;, n&oacute;ng th&igrave; c&oacute; thể 1 &ndash; 2 ng&agrave;y tưới nước một lần. Nếu m&ocirc;i trường c&oacute; độ ẩm vừa phải, kh&ocirc;ng phải tho&aacute;t nước nhiều như ở trong nh&agrave;, văn ph&ograve;ng th&igrave; bạn c&oacute; thể tưới 2 &ndash; 3 lần/ tuần.&nbsp;Tưới nước đủ ẩm đất l&agrave; được.</p>
               
               <p>Trong nước th&igrave; mỗi 5 ng&agrave;y tiến h&agrave;nh thay nước v&agrave; cắt bỏ rễ hư ( nếu c&oacute; ), cho 1 giọt thủy canh v&agrave;o trong nước để nước c&oacute; th&ecirc;m dinh dưỡng cung cấp cho c&acirc;y.</p>
               
               <h3>ĐẤT TRỒNG:</h3>
               
               <p>Loại đất ưa th&iacute;ch với<strong>&nbsp;c&acirc;y Cau Tiểu Tr&acirc;m</strong>&nbsp;l&agrave; loại đất c&oacute; độ m&ugrave;n cao nhưng đất vẫn phải c&oacute; độ xốp để rễ c&oacute; thể ph&aacute;t triển tốt. Bạn c&oacute; thể mua loại đất tribat được b&aacute;n ở hầu hết c&aacute;c tiệm c&acirc;y loại đất n&agrave;y kh&aacute; ph&ugrave; hợp.</p>
               
               <h3>&Aacute;NH S&Aacute;NG:</h3>
               
               <p>C&acirc;y chỉ cần &iacute;t &aacute;nh s&aacute;ng kh&ocirc;ng cần nhiều, tuy nhi&ecirc;n thi thoảng bạn h&atilde;y cho n&oacute; ra nắng để đủ năng lượng cho c&acirc;y sinh sản chất diệp lục, như vậy c&acirc;y sẽ ph&aacute;t triển tốt hơn.</p>',
               'user_id' => '3',
               'category_id' => '2',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            
        ]);
    }
}
