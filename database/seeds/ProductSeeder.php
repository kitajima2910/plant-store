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
               'created_at' => '2020-01-19 15:49:30',
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
               'created_at' => '2020-02-09 15:49:30',
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
               'created_at' => '2020-03-03 15:49:30',
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
               'created_at' => '2020-04-04 15:49:30',
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
               'created_at' => '2020-05-05 15:49:30',
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
               'created_at' => '2020-06-06 15:49:30',
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
               'created_at' => '2020-07-07 15:49:30',
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
               'created_at' => '2020-08-09 15:49:30',
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
               'created_at' => '2020-09-19 15:49:30',
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
               'created_at' => '2020-12-29 15:49:30',
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
               'final_price' => 679150,
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
               'created_at' => '2020-02-09 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Tùng La Hán',
               'slug' => Str::of('Cây Tùng La Hán')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/hIXIPswbzgqfCq7k5JzwHiRj0yfP3dPV.jpg',
               'feature_image_name' => 'tung-la-han-1.jpg',
               'price' => '125000',
               'sale_price' => '5',
               'final_price' => 118750,
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
               'created_at' => '2020-03-23 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Lan Quân Tử',
               'slug' => Str::of('Cây Lan Quân Tử')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/bJzE8GQTAJdOIAGtEynzYEn5N8C9ynq2.jpg',
               'feature_image_name' => 'lan-quan-tu-1.jpg',
               'price' => '155000',
               'sale_price' => '10',
               'final_price' =>139000 ,
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
               'final_price' => 449100,
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
               'final_price' => 215000,
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
               'created_at' => '2020-01-09 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Hoa Trạng Nguyên',
               'slug' => Str::of('Cây Hoa Trạng Nguyên')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/OcOTYaDvi7mf4ZAXvMRkBjqin72KdTZR.jpg',
               'feature_image_name' => 'trang-nguyen-1.jpg',
               'price' => '210000',
               'sale_price' => '0',
               'final_price' => 210000,
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
               'final_price' => 141550,
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
               'final_price' => 112500,
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
               'final_price' =>114750 ,
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
               'final_price' => 69000,
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
            


            // CÂY ĐỂ BÀN 
            [ 
               'name' => 'Sen Đá Chuỗi Ngọc Đứng',
               'slug' => Str::of('Sen Đá Chuỗi Ngọc Đúng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/SD4j2K0phKvO9KCjOf0hHY0kmEQgKqgo.jpg',
               'feature_image_name' => 'chuoi-ngoc-dung-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Chuỗi Ngọc Đứng phù hợp với việc trang trí bàn làm việc, góc học tập. Cây có hình thù giống như ngọn đuốc tạo cho ta cảm giác cần phát phát triển, cần phải phấn đấu. Cây phù hợp làm quà tặng, trang trí các góc nhỏ như bàn làm việc, góc học tập, lan can cửa sổ, bàn cà phê....',
               'content' => '<p>C&acirc;y Sen Đ&aacute;&nbsp;Chuỗi Ngọc Đứng hay c&ograve;n gọi l&agrave; c&acirc;y chuỗi, l&agrave; một giống của lo&agrave;i Chuỗi ngọc (Sedum morganianum) hay c&ograve;n được gọi l&agrave; Đu&ocirc;i lừa (burro&rsquo;s tail or donkey tail). Đ&acirc;y l&agrave; một lo&agrave;i bản đại ở ph&iacute;a Bắc Mexico v&agrave; Honduras. Sedum morganianum ph&aacute;t triển tốt cả trong nh&agrave; v&agrave; ngo&agrave;i trời, điều kiện &aacute;nh s&aacute;ng tốt nhưng kh&ocirc;ng qu&aacute; n&oacute;ng. C&oacute; thể d&ugrave;ng để trang tr&iacute; cửa sổ, kh&ocirc;ng gian kh&aacute;ch sạn, qu&aacute;n c&agrave; ph&ecirc;.&nbsp;<strong>C&acirc;y Sen Đ&aacute; Chuỗi Ngọc Đứng&nbsp;</strong>c&oacute; thể để trang tr&iacute; b&agrave;n l&agrave;m việc, g&oacute;c học tập, để b&agrave;n&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/chuoi-ngoc-dung.jpg" style="height:400px; width:400px" /></p>
               
               <p>Đặc biệt ở điều kiện n&oacute;ng th&igrave; đất c&agrave;ng phải tho&aacute;ng như m&ugrave;a h&egrave; của miền Bắc v&agrave; miền Nam, v&igrave; nếu đất kh&ocirc;ng tho&aacute;ng đồng nghĩa giữ ẩm l&acirc;u hơn khi tưới nước, nước chưa kip kh&ocirc; th&igrave; đ&atilde; n&oacute; nắng gắt, khiến nhiệt độ của đất tăng, l&uacute;c đ&oacute; c&acirc;y sẽ bị vừa n&oacute;ng vừa lạnh v&igrave; hơi nước bốc ở dưới đất khiến C&acirc;y Sen Đ&aacute; Chuỗi Ngọc Đứng n&oacute;i ri&ecirc;ng v&agrave; c&aacute;c d&ograve;ng Sen Đ&aacute; kh&aacute;c n&oacute;i chung sẽ rất dễ sốc nhiệt thối v&agrave; chết.</p>
               
               <h3>NƯỚC</h3>
               
               <p>T&ugrave;y v&agrave; điều kiện kh&iacute; hậu mỗi m&ugrave;a v&agrave; nơi để c&acirc;y, tốt nhất l&agrave; ra n&ecirc;n tưới khoảng 1 lần trong tuần với c&acirc;y để trong nh&agrave;, 2 lần với c&acirc;y để ngo&agrave;i trời. Tưới l&uacute;c trời m&aacute;t, như chiều muộn, hoặc buổi s&aacute;ng rất sớm, nhưng n&ecirc;n tưới l&uacute;c chiều muộn l&agrave; tốt nhất, tr&aacute;nh c&acirc;y bị sốc nhiệt.</p>
               
               <h3>ĐIỀU KIỆN &Aacute;NH S&Aacute;NG</h3>
               
               <p>C&acirc;y ưa &aacute;nh s&aacute;ng nhưng kh&ocirc;ng chịu được c&aacute;c &aacute;nh nắng gắt, tuy nhi&ecirc;n tốt nhất th&igrave; để c&acirc;y ở nơi c&oacute; m&aacute;i che, tr&aacute;nh những l&uacute;c nắng n&oacute;ng giờ cao điểm v&agrave;o m&ugrave;a h&egrave;.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>Nh&acirc;n giống Sen Đ&aacute; Chuỗi Ngọc bằng gi&acirc;m c&agrave;nh, hoặc l&aacute;. M&ugrave;a thu cắt c&agrave;nh c&oacute; l&aacute; h&igrave;nh cầu, d&agrave;i khoảng 7-8cm, v&ugrave;i trong c&aacute;t, giữ nhiệt độ 15-22 0C, giữ ẩm, sau 20 ng&agrave;y ra rễ. Sau đ&oacute;, c&oacute; thể trồng c&acirc;y v&agrave;o chậu, mỗi chậu 3-5 c&acirc;y con.</p> ',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Thược Dược',
               'slug' => Str::of('Sen Đá Thược Dược')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/FULrQ1ZzUV5ipabPH67dnwmxgDuMU5Au.jpg',
               'feature_image_name' => 'sen-da-thuocduoc-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây sen đá thược dược ngoài ý nghĩa một tình yêu, tình bạn bền vững mãi với thời gian thì nó còn có ý nghĩa tình yêu của người là hạnh phúc của tôi. Cây dùng để trang trí tiểu cảnh, để bàn làm việc, bàn uống nước, bàn lễ tân, quán cà phê...',
               'content' => '<p>Sen Đ&aacute; thuộc c&acirc;y họ bỏng c&oacute; tất chả 393 lo&agrave;i kh&aacute;c nhau để ph&acirc;n biệt được từng loại th&igrave; c&oacute; lẽ bạn phải t&igrave;m hiểu kh&aacute; nhiều. Tuy nhi&ecirc;n&nbsp;nếu bạn đ&atilde; thấy hoa thược dược th&igrave; khi nh&igrave;n c&acirc;y sen đ&aacute; loại n&agrave;y bạn c&oacute; thể ph&aacute;t hiện ngay ra n&oacute;. N&oacute; c&oacute; l&aacute; giống như những c&aacute;nh hoa chỉ kh&aacute;c l&agrave; n&oacute; m&agrave;u xanh. Đ&oacute; ch&iacute;nh l&agrave;&nbsp;Sen Đ&aacute; Thược Dược</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/thuoc-duoc.jpg" style="height:400px; width:400px" /></p>
               
               <h3><strong>T&Iacute;NH T&Igrave;NH</strong></h3>
               
               <p>Hiền l&agrave;nh dễ thương, ăn g&igrave; cũng, cho sống thế n&agrave;o cũng được, n&oacute;i chung l&agrave; dễ nu&ocirc;i, nhưng để lớn nhanh th&igrave; cần phải ch&uacute; &yacute; v&agrave; chăm s&oacute;c như sau:</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>C&acirc;y th&iacute;ch nắng từ s&aacute;ng sớm đến 9 giờ hoặc được che dưới gi&agrave;n. Khi bạn thấy l&aacute; tr&ecirc;n c&acirc;y xanh xao, thưa thớt, c&ograve;i cọc nghĩa l&agrave; c&acirc;y thiếu nắng v&agrave; bạn n&ecirc;n cho c&acirc;y ra nắng 2 tiếng 1 ng&agrave;y, c&aacute;ch 3 ng&agrave;y lại tăng th&ecirc;m 1 tiếng cho đến khi bằng với &aacute;nh nắng cho ph&eacute;p để tr&aacute;nh hiện tượng sốc nhiệt, ch&aacute;y l&aacute;.</p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>Nếu c&acirc;y để ngo&agrave;i nắng gắt th&igrave; tưới 2 đến 3 lần/tuần. Đối với c&acirc;y kh&ocirc;ng cần nhiều nắng th&igrave; c&oacute; thể tưới 1 đến 2 lần/tuần. Tưới c&agrave;ng xa gốc c&acirc;y c&agrave;ng tốt, hạn chế để nước đọng lại tr&ecirc;n l&aacute;.</p>
               
               <h3><strong>ĐẤT TRỒNG</strong></h3>
               
               <p>Kh&ocirc;ng k&eacute;n đất, ph&ugrave; hợp với nhiều loại đất kh&aacute;ch nhau. Tuy nhi&ecirc;n loại đất tốt nhất l&agrave; loại đất c&oacute; khả năng tho&aacute;t nước tốt. C&aacute;c bạn c&oacute; thể d&ugrave;ng hỗn hợp tro trấu trộn với ph&acirc;n b&ograve; với tỉ lệ 1:1. Cũng c&oacute; thể d&ugrave;ng hỗn hợp c&aacute;c th&agrave;nh phần: tro, đất pha c&aacute;t, ph&acirc;n b&ograve;. Hoặc đơn giản hơn c&aacute;c bạn c&oacute; thể trộn c&aacute;t, sỏi, đất pha c&aacute;t v&agrave; ph&acirc;n. Điều quan trọng l&agrave; hỗn hợp đất n&agrave;y cần tho&aacute;t nước tốt để kh&ocirc;ng g&acirc;y ngập &uacute;ng c&acirc;y.</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Hồng Phấn',
               'slug' => Str::of('Sen Đá Hồng Phấn')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/XuA07Yu3ykokni7sIQh6hGtmoXX8Bpxa.jpg',
               'feature_image_name' => 'sen-da-hong-phan-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá hồng phấn có ý nghĩa cho một tình yêu và tình bạn bền vững mãi theo thời gian. Cây phù hợp để làm quà tặng, để bàn làm việc, trang trí quán cà phê, góc học tập...',
               'content' => '<p>Sen đ&aacute; hồng phấn l&agrave; loại sen đ&aacute; nh&igrave;n kh&aacute;c giống sen đ&aacute; đất về h&igrave;nh d&aacute;ng nhưng n&oacute; c&oacute; m&agrave;u xanh xẫm hơn v&agrave; tr&ecirc;n viền l&aacute; c&oacute; m&agrave;u kh&ocirc;ng, tr&ecirc;n l&aacute; th&igrave; c&oacute; một lớp phấn trắng mỏng c&oacute; lẽ ch&iacute;nh v&igrave; điều n&agrave;y m&agrave; n&oacute; c&oacute; t&ecirc;n gọi l&agrave; hồng phấn. Sen đ&aacute; hồng phấn c&oacute; &yacute; nghĩa cho một t&igrave;nh y&ecirc;u, t&igrave;nh bạn bền vững theo thời gian.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/hong-phan.jpg" style="height:400px; width:400px" /></p>
               
               <p>Ở ngo&agrave;i bắc th&igrave; sen đ&aacute; chưa được nhiều nhưng khả năng th&iacute;ch nghi cũng như m&ocirc;i trường ph&aacute;t triển của n&oacute; kh&ocirc;ng y&ecirc;u cầu cao. Nhưng để&nbsp;<em>sen đ&aacute; hồng&nbsp;phấn</em>&nbsp;ph&aacute;t triểu tốt nhất th&igrave; bạn c&oacute; thể ch&uacute; &yacute; 1 số đặc điểm sau.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Hầu như tất cả sen đ&aacute; đều cần rất nhiều &aacute;nh s&aacute;ng để ph&aacute;t triển, c&oacute; thể để nắng trực tiếp, tốt nhất l&agrave; che dưới gi&agrave;n che 30%.</p>
               
               <p>Trường hợp đặt trong văn ph&ograve;ng hoặc nơi &iacute;t nắng, th&igrave; 2 ng&agrave;y n&ecirc;n mang ra phơi nắng 1 lần (tầm 4-5 tiếng đồng hồ). Đặt trong m&aacute;t l&acirc;u ng&agrave;y sẽ c&oacute; hiện tượng l&aacute; mềm ra, thưa v&agrave; mỏng, n&ecirc;n ch&uacute; &yacute; cung cấp &aacute;nh s&aacute;ng đầy đủ cho c&acirc;y. C&acirc;y c&oacute; m&agrave;u sắc tưới hay kh&ocirc;ng phụ thuộc v&agrave;o &aacute;nh s&aacute;ng</p>
               
               <h3>NƯỚC TƯỚI</h3>
               
               <p>Nước m&aacute;y th&ocirc;ng thường. T&ugrave;y v&agrave;o thời tiết, m&ocirc;i trường v&agrave; đất trồng kh&aacute;c nhau m&agrave; ta tưới nước cho th&iacute;ch hợp, việc n&agrave;y đ&ograve;i hỏi một &iacute;t kinh nghiệm. Nhưng c&oacute; thể t&oacute;m gọn như sau:</p>
               
               <p>Đặt nơi ngo&agrave;i &aacute;nh s&aacute;ng trực tiếp hoặc che lưới: 4 &ndash; 6&nbsp;ng&agrave;y tưới nước 1 lần</p>
               
               <p>Đặt trong văn ph&ograve;ng: 1 tuần tưới 1 lần.</p>
               
               <p>Lượng nước tưới nhiều hay &iacute;t t&ugrave;y thuộc v&agrave;o loại chất trồng của&nbsp;<strong>sen đ&aacute; hồng phấn</strong>, v&iacute; dụ c&aacute;c loại đất tro trấu pha c&aacute;t tho&aacute;t nước nhanh th&igrave; thậm ch&iacute; 2&nbsp;ng&agrave;y tưới 1&nbsp;lần vẫn được. C&aacute;c loại đất thịt như đất đỏ, đất m&ugrave;n giữ nước tốt, c&oacute; thể 1,5&nbsp;tuần&nbsp;mới&nbsp;tưới 1 lần.</p>
               
               <p>Cầm chậu l&ecirc;n, tưới nước v&agrave;o đến khi n&agrave;o nặng hơn 1/2 so với ban đầu l&agrave; đủ.</p>
               
               <p>C&aacute;ch tốt nhất khi tới bạn hạn chế tưới thẳng v&agrave;o c&acirc;y m&agrave; chỉ tưới v&agrave;o bầu đất để n&oacute; ngấm từ từ, để tr&aacute;nh trường hợp nước đọng ở l&aacute; kh&ocirc;ng tho&aacute;t được.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p><strong>Sen đ&aacute; hồng phấn</strong>&nbsp;l&agrave; loại ưa nắng, tuy nhi&ecirc;n c&oacute; thể ph&aacute;t triển tốt ở khoảng nhiệt độ từ 15-35*C.&nbsp;Độ ẩm trong khoảng 30-70%&nbsp;<a href="https://webcaycanh.com/cay-canh-sen-da/">sen đ&aacute;</a>&nbsp;đều ph&aacute;t triển tốt.</p>
               
               <h3>PH&Acirc;N B&Oacute;N</h3>
               
               <p>Bạn c&oacute; thể bổ sung cho c&acirc;y ph&acirc;n b&ograve;, ph&acirc;n d&ecirc; hoặc c&aacute;c loại ph&acirc;n tan chậm, ph&acirc;n b&oacute;n qua l&aacute; h&agrave;ng th&aacute;ng. Để c&acirc;y sinh trưởng v&agrave; ph&aacute;t triển tốt, mỗi năm n&ecirc;n thay đất cho c&acirc;y từ 1-2 lần.</p>
               
               <h3>S&Acirc;U BỆNH G&Acirc;Y HẠI</h3>
               
               <p>Sen đ&aacute; hồng phấn&nbsp;tương đối &iacute;t s&acirc;u bệnh. C&aacute;c bệnh thường gặp l&agrave; rệp s&aacute;p, đốm l&aacute;&hellip; (c&oacute; thể ra c&aacute;c cửa hiệu thuốc bảo vệ thực vật mua thuốc về xịt). Thối nhũng do &uacute;ng nước hoặc nhiễm tr&ugrave;ng vết thương.</p>
               
               <p>C&aacute;c bạn h&atilde;y ch&uacute; &yacute; tới nước v&agrave; &aacute;nh s&aacute;ng hai yếu tố n&agrave;y rất quan trọng đối với sen đ&aacute; hồng phấn</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Viền Hồng',
               'slug' => Str::of('Sen Đá Viền Hồng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/yGrBYG5toMEcBM5BsAnKxdmvEHCL5hNP.jpg',
               'feature_image_name' => 'sen-da-vien-hong-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây sen đá viền hồng phù hợp với việc trang trí bàn làm việc, góc học tập, góc nhỏ trong gia đình. Cây bé thường chỉ cao từ 10 -20 cm, mang ý nghĩa cho tình yêu và tình bạn bền chặt.',
               'content' => '<p>C&acirc;y cảnh sen đ&aacute; viền hồng l&agrave; một trong những c&acirc;y cảnh thuộc họ&nbsp;thuốc bỏng ( Crassualaceae ). C&acirc;y c&oacute; nhiều c&aacute;nh nhỏ h&igrave;nh như c&aacute;nh hoa sen. C&acirc;y mang &yacute; nghĩa cho một t&igrave;nh y&ecirc;u, t&igrave;nh bạn b&agrave;n chặt, trọn đời vĩnh cửu theo thời gian. C&acirc;y d&ugrave;ng ph&ugrave; hợp để trang tr&iacute; b&agrave;n học, b&agrave;n l&agrave;m việc, kh&ocirc;ng gian nhỏ trong gia đ&igrave;nh&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/vien-hong.jpg" style="height:264px; width:300px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; VIỀN HỒNG</h2>
               
               <h3>NHIỆT ĐỘ, &Aacute;NH S&Aacute;NG</h3>
               
               <p>Sen đ&aacute; viền hồng l&agrave; một loại hoa ưa m&aacute;t. Nhiệt độ tốt nhất để trồng sen đ&aacute; l&agrave; từ 15 đến 35 độ. Hầu hết sen đ&aacute; đều cần &aacute;nh s&aacute;ng để ph&aacute;t triển. C&aacute;c bạn c&oacute; thể đặt chậu hoa sen đ&aacute; viền hồng ở nơi c&oacute; &aacute;nh s&aacute;ng trực tiếp. Tốt nhất n&ecirc;n che gi&agrave;n 30% cho sen đ&aacute; ph&aacute;t triển tốt. Tuy nhi&ecirc;n nếu nh&agrave; bạn kh&ocirc;ng c&oacute; đủ kh&ocirc;ng gian để đặt chậu hoa th&igrave; c&oacute; thể sử dụng chậu hoa Greenbo để trồng tr&ecirc;n ban c&ocirc;ng v&agrave; lan can.</p>
               
               <h3>TƯỚI NƯỚC</h3>
               
               <p>Chỉ n&ecirc;n d&ugrave;ng nước m&aacute;y hoặc nước giếng th&ocirc;ng thường để tưới cho <strong>sen đ&aacute; viền hồng</strong>. Tưới nước cho ngấm đủ xuống rễ c&acirc;y khoảng &frac34; chậu hoa, kh&ocirc;ng n&ecirc;n để nước đọng lại tr&ecirc;n l&aacute; sen nếu c&aacute;c bạn để c&acirc;y nơi nhiệt độ thấp dễ g&acirc;y &uacute;ng l&aacute;. T&ugrave;y thuộc v&agrave;o thời tiết c&oacute; thể tưới 2-4 lần/ng&agrave;y nếu thời tiết kh&ocirc;. Những ng&agrave;y mưa hoặc thời tiết m&aacute;t mẻ chỉ cần tưới 1-2 lần /tuần. Lượng nước tưới nhiều hay &iacute;t cũng t&ugrave;y thuộc v&agrave;o loại đất trồng. Đất thịt như đất ph&ugrave; sa, đất m&ugrave;n th&igrave; khả năng giữ nước tốt, tho&aacute;t nước k&eacute;m n&ecirc;n chỉ cần tưới nước 3-4 ng&agrave;y một lần.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>C&acirc;y cảnh&nbsp;sen đ&aacute; kh&ocirc;ng k&eacute;n đất, ph&ugrave; hợp với nhiều loại đất kh&aacute;ch nhau. Tuy nhi&ecirc;n loại đất tốt nhất&nbsp;l&agrave;&nbsp;loại đất c&oacute; khả năng tho&aacute;t nước tốt. C&aacute;c bạn c&oacute; thể d&ugrave;ng hỗn hợp tro trấu trộn với ph&acirc;n b&ograve; với tỉ lệ 1:1. Cũng c&oacute; thể d&ugrave;ng hỗn hợp c&aacute;c th&agrave;nh phần: tro, đất pha c&aacute;t, ph&acirc;n b&ograve;. Hoặc đơn giản hơn c&aacute;c bạn c&oacute; thể trộn c&aacute;t, sỏi, đất pha c&aacute;t v&agrave; ph&acirc;n. Điều quan trọng l&agrave; hỗn hợp đất n&agrave;y cần tho&aacute;t nước tốt để kh&ocirc;ng g&acirc;y ngập &uacute;ng c&acirc;y.</p>
               
               <h3>DINH DƯỠNG</h3>
               
               <p><strong>Sen đ&aacute; viền hồng</strong>&nbsp;cũng như xương rồng kh&ocirc;ng cần qu&aacute; nhiều chất dinh dưỡng. C&aacute;c bạn c&oacute; thể bổ sung th&ecirc;m cho chậu hoa sen đ&aacute; ph&acirc;n b&ograve;, ph&acirc;n d&ecirc; hoặc c&aacute;c loại ph&acirc;n tan chậm, ph&acirc;n b&oacute;n qua l&aacute; h&agrave;ng th&aacute;ng. Để c&acirc;y sinh trưởng v&agrave; ph&aacute;t triển tốt, mỗi năm n&ecirc;n thay đất cho c&acirc;y từ 1-2 lần.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&oacute; thể nh&acirc;n giống bằng c&aacute;ch gi&acirc;m v&agrave; t&aacute;ch c&acirc;y. Gi&acirc;m bằng l&aacute;, lấy l&aacute; đ&atilde; trưởng th&agrave;nh đặt ngang hay cắm nghi&ecirc;ng hỗn hợp đất trồng. giữ cho đất trồng lu&ocirc;n ẩm l&agrave; gốc l&aacute; c&oacute; thể ra rễ v&agrave; mọc th&agrave;nh c&acirc;y mới.Việc t&aacute;ch c&acirc;y con tiến h&agrave;nh khi đảo chậu, chọn cắt lấy chồi con b&ecirc;n cạnh rồi trồng v&agrave;o chậu kh&aacute;c.</p>
               
               <h3>BỆNH HẠI</h3>
               
               <p>Sen đ&aacute; viền hồng tương đối &iacute;t s&acirc;u bệnh. Một số bệnh thường gặp l&agrave; rệp s&aacute;p, đốm l&aacute;, c&oacute; thể ra hiệu thuốc bảo vệ thực vật mua thuốc về xịt. Ngo&agrave;i ra c&ograve;n c&oacute; bệnh thối nhũn do c&acirc;y bị &uacute;ng nước hoặc nhiễm tr&ugrave;ng vết thương. Để tr&aacute;nh điều n&agrave;y bạn h&atilde;y quan s&aacute;t l&agrave; của c&acirc;y sen viền hồng, nếu l&aacute; bị quắt kh&ocirc;ng mọng nước nghĩa l&agrave; n&oacute; đang thiếu nước v&agrave; ngược lại.</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Nhím Đen',
               'slug' => Str::of('Sen Đá Nhím Đen')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/SDORJqy6IzS7BULsF7idlBIstdyK71rQ.jpg',
               'feature_image_name' => 'sen-da-nhim-den-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Nhím Đen có hình thù khá thú vị và độc đáo vì thế nó phù hợp để trang trí bàn uống cà phê, bàn học, các ô nhỏ trên kệ hoặc các góc nhỏ, và làm quà tặng',
               'content' => '<p>C&acirc;y Sen Đ&aacute; Nh&iacute;m Đen l&agrave; d&ograve;ng Sen Đ&aacute; mới, chưa được nh&acirc;n giống nhiều ở Việt Nam do vậy c&acirc;y mặc d&ugrave; c&oacute; k&iacute;ch thước kh&ocirc;ng lớn nhưng gi&aacute; th&agrave;nh cao hơn c&aacute;c loại Sen Đ&aacute; phổ th&ocirc;ng kh&aacute;c,&nbsp;so với c&aacute;c loại Sen Đ&aacute; dạng đ&agrave;i th&igrave;&nbsp;<em>Nh&iacute;m Đen</em>&nbsp;kh&aacute; khỏe v&agrave; lạ mắt. C&acirc;y ph&ugrave; hợp cho người th&iacute;ch sưu tầm c&aacute;c giống Sen Đ&aacute;, về phong thủy c&acirc;y hợp với người mệnh Mộc, Thủy</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/nhim-den.jpg" style="height:267px; width:400px" /></p>
               
               <h3>NƯỚC</h3>
               
               <p>Lượng nước vẫn l&agrave; vấn đề kh&oacute; khăn nhất đối với <strong>Sen Đ&aacute;</strong>&nbsp;nếu tưới nhiều th&igrave; c&acirc;y rất dễ bị &uacute;ng v&agrave; thối, c&ograve;n tưới &iacute;t c&acirc;y chậm ph&aacute;t triển v&agrave; rễ tự rụng dần, c&aacute;ch tốt nhất l&agrave; khi bạn nh&igrave;n l&aacute; c&oacute; hiện tượng nhăn, l&aacute; c&acirc;y sờ thấy mềm th&igrave; n&oacute; đang thiếu nước, khi đ&oacute; bạn mới tưới th&igrave; l&agrave; tối ưu nhất để c&acirc;y kh&ocirc;ng lo chết v&igrave; thừa hay thiếu nước. C&ograve;n kh&ocirc;ng th&igrave; nếu bạn để c&acirc;y ngo&agrave;i trời, nơi tho&aacute;ng, kh&ocirc; th&igrave; 1 tuần tưới 2 lần, mỗi lần chỉ ẩm đất, n&ecirc;n nhớ chỉ ẩm chứ kh&ocirc;ng ướt, đối với c&acirc;y để văn ph&ograve;ng th&igrave; 7 -10 ng&agrave;y mới tưới 1 lượng nước nhỏ.</p>
               
               <h3>&Aacute;NH S&Aacute;NG, NHIỆT ĐỘ</h3>
               
               <p>C&acirc;y xanh th&igrave; c&acirc;y n&agrave;o cũng cần &aacute;nh s&aacute;ng để quang hợp, tuy nhi&ecirc;n th&igrave; đa phần c&aacute;c loại c&acirc;y đều kh&ocirc;ng cần lượng &aacute;nh s&aacute;ng qu&aacute; lớn, m&agrave; cần sự th&ocirc;ng tho&aacute;ng nhiều hơn, Sen Đ&aacute; Nh&iacute;m Đen c&oacute; thể chịu được nắng gắt, v&agrave; c&agrave;ng nắng hoặc c&agrave;ng lạnh th&igrave; c&aacute;nh l&aacute; sẽ c&agrave;ng đen, nhưng nếu nắng qu&aacute; l&aacute; c&acirc;y sẽ quắt kh&ocirc;ng được căng mọng, n&ecirc;n chỉ cần để&nbsp;<em>Sen Đ&aacute; Nh&iacute;m Đen</em>&nbsp;nơi tho&aacute;ng gi&oacute; v&agrave; c&oacute; &aacute;nh nắng nhẹ l&agrave; c&acirc;y cũng ph&aacute;t triển tốt. Nhiệt độ th&iacute;ch hợp l&agrave; từ 10 &ndash; 28 độ C.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất trồng với Sen Đ&aacute; vẫn l&agrave; loại đất tơi xốp, tho&aacute;ng, kh&ocirc;ng bị đọng nước l&acirc;u ng&agrave;y, nếu nhiều m&ugrave;n v&agrave; dưỡng chất c&agrave;ng tốt. Loại đất th&iacute;ch hợp bạn c&oacute; thể thể pha th&ecirc;m xỉ than đun rồi đập vụn, trấu hun, sơ dừa v&agrave; ph&acirc;n b&ograve;.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p><strong>C&acirc;y Sen Đ&aacute; Nh&iacute;m Đen</strong>&nbsp;ph&aacute;t triển kh&aacute; chậm ch&iacute;nh v&igrave; thế m&agrave; để được một c&acirc;y tầm 5 -8 cm cũng mất khoảng 4 -6 th&aacute;ng t&ugrave;y điều kiện thuận lợi hay kh&ocirc;ng, ch&iacute;nh v&igrave; thế c&aacute;ch tối ưu nhất để nh&acirc;n giống l&agrave; t&aacute;ch c&acirc;y con từ c&acirc;y mẹ, c&ograve;n c&acirc;y vẫn c&oacute; thể nh&acirc;n giống bằng l&aacute; nhưng thời gian để l&aacute; ra rễ v&agrave; nảy mầm c&oacute; thể h&agrave;ng th&aacute;ng.</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Đất Trắng',
               'slug' => Str::of('Sen Đá Đất Trắng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/1vXSwdyTva8VTFXV7Vc3fN5dog2dEdhw.png',
               'feature_image_name' => 'sen-da-dat-trang-1.png',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Đất Trắng phù hợp để bàn làm việc, bàn học, bàn cà phê, bàn uống nước...Vì cây có màu trắng đại điện cho mệnh kim chính vì thể cây phù hợp với người mệnh Kim và người mệnh Thủy giúp chiêu tài lộc cho những người mệnh này về phong thủy',
               'content' => '<p>C&acirc;y Sen Đ&aacute; Đất Trắng c&oacute; đặc điểm gần như giống ho&agrave;n to&agrave;n với c&acirc;y Sen Đ&aacute; Đất, c&oacute; điều c&acirc;y Sen Đ&aacute; Đất th&igrave; l&aacute; c&oacute; m&agrave;u xanh v&agrave; bao phủ l&agrave; một lớp phấn mỏng c&ograve;n&nbsp;<strong>Sen Đ&aacute; Đất Trắng</strong>&nbsp;l&aacute; c&oacute; m&agrave;u trắng v&agrave; cũng được bao phủ th&ecirc;m một lớp phấn mỏng m&agrave;u trắng n&ecirc;n nh&igrave;n l&aacute; c&oacute; m&agrave;u trắng rất mịn m&agrave;ng. V&igrave; c&acirc;y c&oacute; m&agrave;u trắng n&ecirc;n rất ph&ugrave; hợp với người mệnh kim v&agrave; mệnh thủy gi&uacute;p tăng t&agrave;i lộc cho những người ở bản mệnh n&agrave;y v&agrave; th&iacute;ch Sen Đ&aacute;. C&acirc;y ph&ugrave; hợp để trang tr&iacute; b&agrave;n l&agrave;m việc, b&agrave;n c&agrave; ph&ecirc;, quần thu ng&acirc;n&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/dat-trang.png" style="height:400px; width:400px" /></p>
               
               <p>C&aacute;ch chăm s&oacute;c loại sen đ&aacute; đất n&agrave;y kh&aacute; dễ d&agrave;ng v&agrave; kh&ocirc;ng c&oacute; g&igrave; đặc biệt hơn c&aacute;c loại sen đ&aacute; kh&aacute;c bị chỉ cần lưu &yacute; n&ecirc;n tr&aacute;nh tưới nước trực tiếp n&ecirc;n c&acirc;y v&igrave; l&aacute; c&acirc;y c&oacute; một lớp phấn mỏng, bạn c&oacute; thể phun sương hoặc tưới xung quang gốc, ở b&ecirc;n th&agrave;nh chậu để nước ngấm dần. Đa phần c&acirc;y &iacute;t khi bị chết v&igrave; hạn, thường chết v&igrave; bị &uacute;ng l&agrave; v&agrave;ng v&agrave; nhũn dần từ trong th&acirc;n ra, n&ecirc;n c&aacute;ch bạn ch&uacute; &yacute; l&uacute;c tưới cũng chỉ để đất hơi ẩm kh&ocirc;ng được để đất ướt.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>Ch&uacute;ng kh&ocirc;ng quen với thời tiết lạnh v&agrave; sẽ chết sớm nếu ở nơi c&oacute; nhiệt độ m&aacute;t như ngăn đ&aacute; tủ lạnh. Việc bạn sống ở nơi lạnh lẽo v&agrave; c&oacute; m&ugrave;a đ&ocirc;ng kh&ocirc;ng c&oacute; nghĩa l&agrave; bạn kh&ocirc;ng thể chăm nu&ocirc;i c&aacute;c lo&agrave;i c&acirc;y n&agrave;y. V&igrave; nhiệt độ c&acirc;y chịu được l&agrave; dưới 5 độ C</p>
               
               <p>Bạn c&oacute; thể giữ ch&uacute;ng khoẻ mạnh suốt những th&aacute;ng lạnh gi&aacute; bằng c&aacute;ch di chuyển ch&uacute;ng v&agrave;o trong nh&agrave;. Sau đ&oacute;, khi nỗi đe doạ mang t&ecirc;n băng gi&aacute; ấy đ&atilde; đi qua, dần dần chuyển ch&uacute;ng ra ngo&agrave;i v&agrave;o m&ugrave;a xu&acirc;n.</p>
               
               <p>V&agrave; đối với m&ugrave;a&nbsp;h&egrave; th&igrave;&nbsp;c&acirc;y kh&ocirc;ng chịu được tr&ecirc;n qu&aacute; 40 độ C, nếu trời n&oacute;ng th&igrave; bạn n&ecirc;n d&ugrave;ng lưới che bớt &aacute;nh nắng trực tiếp để c&acirc;y kh&ocirc;ng bị ch&aacute;y l&aacute; v&agrave; sống nhiệt.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Sen Đ&aacute; Đất Trắng v&agrave; nhiều loại sen đ&aacute; thuộc họ Echeveria kh&aacute;c, kh&ocirc;ng th&iacute;ch bị qu&aacute; ướt &aacute;t, m&agrave; ch&uacute;ng th&iacute;ch sự kh&ocirc;ng tho&aacute;ng v&agrave; m&aacute;t mẻ để đất hơi ẩm một ch&uacute;t để tạo điều kiện cho rễ l&agrave; tuyệt vời nhất. Đối với đa phần sen đ&aacute; th&igrave; bạn chỉ n&ecirc;n tưới 1 tuần/lần nếu để trong nh&agrave; thi thoảng đưa ra &aacute;nh s&aacute;ng v&agrave; 1 tuần/ 2 lần nếu để ngo&agrave;i trời, n&ecirc;n nhớ tr&aacute;nh để c&acirc;y dầm mưa v&agrave; mỗi lần tưới chỉ để đất ẩm ẩm nước vừa đủ để đất chuyển sang mầu sẫm hơn một ch&uacute;t l&agrave; được, nhiều nước c&acirc;y sẽ chết &uacute;ng m&agrave; chết.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Giống như ch&uacute;ng từng sống ở nơi đất mẹ tự nhi&ecirc;n,&nbsp;Sen Đ&aacute; Đất Trắng&nbsp;th&iacute;ch nắng ấm &aacute;p quanh năm suốt th&aacute;ng. Tuy nhi&ecirc;n, h&atilde;y cố gắng tr&aacute;nh hai thứ n&agrave;y: &aacute;nh nắng gắt gỏng ch&oacute;i lo&aacute;, v&agrave; &aacute;nh nắng v&agrave;o những trưa h&egrave; ch&aacute;y cả thịt da.</p>
               
               <p>Điều kiện tốt nhất l&agrave; d&ugrave;ng bạt trắng hoặc k&iacute;nh trong che mưa nhưng kh&ocirc;ng che nắng, tuy nhi&ecirc;n nếu như vậy sẽ l&agrave;m nhiệt độ ph&ograve;ng tăng l&ecirc;n v&igrave; vậy cần phải sự th&ocirc;ng tho&aacute;ng, nếu c&oacute; 2 yếu tố n&agrave;y: Nắng nhưng tho&aacute;ng m&aacute;t th&igrave; c&acirc;y ph&aacute;t triển rất nhanh v&agrave; kh&ocirc;ng sợ chết.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đối với lo&agrave;i c&acirc;y n&agrave;o cũng vậy đất cần th&ocirc;ng tho&aacute;ng v&agrave; c&oacute; dưỡng chất để dễ c&oacute; thể ph&aacute;t triển v&agrave; tho&aacute;t nước nhanh tr&aacute;nh t&igrave;nh trạng bị &uacute;ng. Một số loại c&acirc;y rễ khỏe ph&aacute;t triển mạnh th&igrave; ch&uacute;ng ta c&oacute; thể trồng bằng đất thịt nhưng đối với c&aacute;c loại Sen Đ&aacute; th&igrave; điều đ&oacute; l&agrave; kh&ocirc;ng n&ecirc;n, ta cần trộn v&agrave;o đất c&aacute;c th&agrave;nh phần gi&uacute;p đất tho&aacute;ng như: Xỉ than, sơ dừa, chấu đun. N&ecirc;n nhớ Sen Đ&aacute; Kh&ocirc;ng cần nhiều chất dinh dưỡng nhưng đất phải th&ocirc;ng tho&aacute;ng.</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Mặt Trăng',
               'slug' => Str::of('Sen Đá Mặt Trăng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/bBOXibgAsJeudMNHX1qhjjOKUvOBR9d7.jpg',
               'feature_image_name' => 'sen-da-mat-trang-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Mặt Trăng phù hợp với người mệnh kim và thổ giúp mang đến tiền tài và danh vọng. Cây phù hợp làm cây để bàn, trang trí quán cà phê, cửa sổ...',
               'content' => '<p>Sen Đ&aacute; Mặt Trăng c&oacute; độ d&agrave;i của c&aacute;nh, thứ tự c&aacute;c c&aacute;nh xếp kh&aacute; giống với Sen Đ&aacute; Kim l&agrave; loại sen đ&aacute; được nhiều người biết đến hơn&nbsp;<strong>Sen Đ&aacute; Mặt Trăng</strong>. C&acirc;y mang &yacute; nghĩa cho sự minh bạch, r&otilde; r&agrave;nh v&agrave; c&ocirc;ng minh. Sen Đ&aacute; Mặt Trăng ph&ugrave; hợp với người mệnh kim v&agrave; thổ gi&uacute;p mang đến tiền t&agrave;i v&agrave; danh vọng. C&acirc;y ph&ugrave; hợp l&agrave;m c&acirc;y để b&agrave;n, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, cửa sổ&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/mat-trang.jpg" style="height:300px; width:200px" /></p>
               
               <p>C&acirc;y ưa nắng nhẹ kh&ocirc;ng th&iacute;ch nước, n&ecirc;n cung cấp đủ nắng để c&acirc;y c&oacute; m&agrave;u sắc đẹp, khi để ở vị tr&iacute; ph&ugrave; hợp như trước hi&ecirc;n nh&agrave;, ban c&ocirc;ng c&oacute; m&aacute;i che th&igrave; gần như kh&ocirc;ng phải chăm s&oacute;c nhiều cho c&acirc;y.</p>
               
               <h3>NHIỆT ĐỘ, &Aacute;NH S&Aacute;NG</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp để&nbsp;<strong>Sen Đ&aacute; Mặt Trăng</strong>&nbsp;ph&aacute;t triển mạnh nhất l&agrave; từ 15 &ndash; 28 độ C, c&acirc;y sẽ&nbsp;chậm ph&aacute;t triển khi dưới 10 độ v&agrave; tr&ecirc;n 35 độ, c&oacute; thể chết ở 0 độ v&agrave; 40 độ C , ch&iacute;nh v&igrave; thể bạn n&ecirc;n tr&aacute;nh &aacute;nh s&aacute;ng buổi trưa m&ugrave;a h&egrave; ở Miền Bắc v&agrave; Miền Nam. C&acirc;y sen đ&aacute;&nbsp;th&iacute;ch &aacute;nh s&aacute;ng buổi sớm v&agrave; chiều muộn.</p>
               
               <h3>NƯỚC</h3>
               
               <p>C&acirc;y chỉ cần 1 tuần tưới nước một lần mỗi lần đủ ẩm đất, đa phần sẽ l&agrave; như vậy c&ograve;n t&ugrave;y theo điều kiện v&agrave; chất đất, kh&ocirc;ng gian đất. V&iacute; dụ đất &iacute;t v&agrave; kh&ocirc;ng giữ ẩm th&igrave; 1 tuần tưới c&oacute; thể tưới 2 -3 lần, nếu đất nhiều như trồng ở vườn th&igrave; c&oacute; thể cả th&aacute;ng bạn mới ph&aacute;t tưới v&igrave; c&acirc;y c&oacute; thể ph&aacute;t triển dễ v&agrave; h&uacute;t nước ở trong đất.</p>
               
               <p>Kh&ocirc;ng được tưới n&ecirc;n l&aacute; c&acirc;y đặc biệt l&agrave; c&acirc;y để trong văn ph&ograve;ng v&igrave; để trong văn ph&ograve;ng nước đọng trong l&otilde;i l&aacute; kh&ocirc;ng kh&ocirc; được dẫn đến thối l&aacute; v&agrave; chết c&acirc;y.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất ph&ugrave; hợp với c&acirc;y Sen Đ&aacute; Mặt Trăng l&agrave; loại tho&aacute;t nước như vẫn giữ ẩm hơi ẩm, bạn c&oacute; thể d&ugrave;ng sỉ than đun rồi đập vụn rồi d&ugrave;ng gi&aacute; lọc bỏ những hạt vụn trộn với đất theo tỷ lệ 2 : 1 hoặc trồng nguy&ecirc;n bằng sỉ than cũng được, bạn c&oacute; thể trộn th&ecirc;m cho đất c&aacute;c chất dinh dưỡng như ph&acirc;n b&ograve;, sơ dừa, tro&hellip;</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y nh&acirc;n giống được bằng rất nhiều h&igrave;nh thức như l&aacute;, hạt, gi&acirc;m c&agrave;nh khi c&acirc;y ph&aacute;t triển l&acirc;u c&oacute; nhiều c&agrave;nh&hellip;</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Bèo Viền Hồng',
               'slug' => Str::of('Sen Đá Bèo Viền Hồng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/rEHCoNeFN773RAq9J0KVk0XRoOA35zXn.jpg',
               'feature_image_name' => 'sen-da-beo-vien-hong-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Bèo Viền Hồng mang ý nghĩa cho một tình yêu, tình bạn vĩnh cửu bền vững mãi theo thời gian, nếu ai thích cây theo phong thủy thì cây phù hợp với người mệnh hỏa vì bản thân cây chỉ có 2 màu là màu xanh ( màu của mệnh mộc, mộc sinh hỏa ) và màu đỏ, hồng ( màu của mệnh hỏa hòa hợp ). Ngoài ra cây còn có tác dụng hút bức xạ máy tính. Cây phù hợp làm cây cảnh để bàn, trang trí quán cà phê, trang trí các góc nhỏ như kệ sách, quầy thu ngân...',
               'content' => '<p>Sen Đ&aacute; B&egrave;o Viền Hồng l&agrave; giống Sen Đ&aacute; mới, c&acirc;y c&oacute; vẻ đẹp kh&aacute; độc đ&aacute;o như được lai tạo từ nhiều d&ograve;ng Sen Đ&aacute; để tạo th&agrave;nh. C&acirc;y mang &yacute; nghĩa cho một t&igrave;nh y&ecirc;u, t&igrave;nh bạn vĩnh cửu bền vững m&atilde;i theo thời gian, nếu ai th&iacute;ch c&acirc;y theo phong thủy th&igrave; c&acirc;y ph&ugrave; hợp với người mệnh hỏa v&igrave; bản th&acirc;n&nbsp;<strong>Sen Đ&aacute; B&egrave;o Viền Hồng</strong>&nbsp;chỉ c&oacute; 2 m&agrave;u l&agrave; m&agrave;u xanh ( m&agrave;u của mệnh mộc, mộc sinh hỏa ) v&agrave; m&agrave;u đỏ, hồng ( m&agrave;u của mệnh hỏa h&ograve;a hợp ). Ngo&agrave;i ra c&acirc;y c&ograve;n c&oacute; t&aacute;c dụng h&uacute;t bức xạ m&aacute;y t&iacute;nh. C&acirc;y ph&ugrave; hợp l&agrave;m&nbsp;trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, trang tr&iacute; c&aacute;c g&oacute;c nhỏ như kệ s&aacute;ch, quầy thu ng&acirc;n&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/beo-vien-hong.jpg" style="height:238px; width:300px" /></p>
               
               <p>C&acirc;y c&oacute; c&aacute;ch chăm s&oacute;c tương tự như c&aacute;c loại <strong>Sen Đ&aacute;&nbsp;</strong>dạng đ&agrave;i kh&aacute;c, cần &iacute;t nước v&agrave; nhiều &aacute;nh s&aacute;ng, m&agrave;u sắc đẹp nhất khi trời lạnh v&agrave; khi thời tiết c&oacute; nhiệt độ ch&ecirc;nh lệch giữa buổi trưa v&agrave; buổi tối.</p>
               
               <h3>&Aacute;NH S&Aacute;NG, NHIỆT ĐỘ</h3>
               
               <p>Nhiệt độ th&iacute;ch hợp với Sen Đ&aacute; n&oacute;i chung v&agrave; Sen Đ&aacute; B&egrave;o Viền Hồng n&oacute;i ri&ecirc;ng l&agrave; khoảng nhiệt độ từ 15 &ndash; 28 độ C. Điều đ&oacute; c&oacute; nghĩa ta n&ecirc;n tr&aacute;nh &aacute;nh nắng buổi trưa trời m&ugrave;a h&egrave; bằng c&aacute;ch che chắn, l&agrave;m m&aacute;t v&agrave;o buổi trưa m&ugrave;a h&egrave; v&agrave; buổi đ&ecirc;m lạnh trời m&ugrave;a đ&ocirc;ng th&igrave; kh&ocirc;ng n&ecirc;n để c&acirc;y bị sương.</p>
               
               <p>C&acirc;y ưa th&iacute;ch &aacute;nh s&aacute;ng buổi sớm, chiều muộn, trời m&ugrave;a thu v&agrave; m&ugrave;a đ&ocirc;ng th&igrave; c&oacute; thể phơi nắng cả ng&agrave;y. Nếu bạn để trong văn ph&ograve;ng k&iacute;n th&igrave; trước khi về n&ecirc;n mang c&acirc;y ra ngo&agrave;i, để cạnh cửa sổ nơi c&oacute; gi&oacute; v&agrave; &aacute;nh s&aacute;ng buổi sớm chiều v&agrave;o, khi đến giờ l&agrave;m việc của ng&agrave;y h&ocirc;m sau th&igrave; bạn lại mang v&agrave;o.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Nước c&oacute; thể l&agrave; phần điều chỉnh kh&oacute; nhất đối với&nbsp;<strong><em>Sen Đ&aacute; Viền Hồng</em></strong>&nbsp;v&agrave; đ&acirc;y cũng ch&iacute;nh l&agrave; nguy&ecirc;n nh&acirc;n h&agrave;ng đầu dẫn đến c&acirc;y bị chết. C&acirc;y kh&ocirc;ng cần nhiều nước nếu để trong văn ph&ograve;ng 1 tuần bạn chỉ n&ecirc;n tưới 1 lần, tr&aacute;nh tưới b&ecirc;n tr&ecirc;n l&aacute; v&igrave; c&acirc;y thuộc dạng đ&agrave;i n&ecirc;n nước bị động dễ dẫn đến t&igrave;nh trạng thối l&aacute;, khi c&acirc;y đủ nước l&aacute; sẽ căng mọng v&agrave; cứng c&aacute;p. Nếu c&acirc;y thiếu nước hoặc rễ đang kh&ocirc;ng h&uacute;t được nước c&acirc;y c&oacute; biểu hiện l&aacute; mềm, mỏng. C&oacute; thể dựa v&agrave;o 2 biểu hiện đ&oacute; để bạn tưới nước hợp l&yacute; nhất cho c&acirc;y.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất đối với Sen Đ&aacute; Viền Hồng nếu tốt th&igrave; sẽ gi&uacute;p c&acirc;y ph&aacute;t triển mạnh v&agrave; nếu bạn c&oacute; tưới nhiều nước hay qu&ecirc;n tưới th&igrave; c&acirc;y vẫn c&oacute; thể sống, nghĩa l&agrave; đất gi&uacute;p c&acirc;y k&eacute;o d&agrave;i sức chịu đựng của Sen Đ&aacute;, loại đất ưa th&iacute;ch l&agrave; đất tho&aacute;t nước v&agrave; giữ ẩm c&oacute; nhiều chất dinh dưỡng.</p>
               
               <p>Để c&oacute; loại đất n&agrave;y bạn c&oacute; thể d&ugrave;ng xỉ than đun rồi đập vụn, sau đ&oacute; d&ugrave;ng gi&aacute; lọc những mảnh qu&aacute; vụn, trộn 2 phần xỉ với&nbsp;1 phần bao gồm đất v&agrave; chất dinh dưỡng, chất giữ ẩm cho đất như xơ dừa, chấu, tro, ph&acirc;n b&ograve;, thuốc chống nấm&hellip;</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng nhiều c&aacute;ch kh&aacute;c nhau như: bằng hạt, bằng l&aacute;, gi&acirc;m c&agrave;nh, t&aacute;ch c&acirc;y con&hellip;Tất cả phương ph&aacute;p đều c&oacute; thể &aacute;p dụng để nh&acirc;n giống&nbsp;<em>Sen Đ&aacute; B&egrave;o Viền Hồng</em></p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Mặt Nạ Lông',
               'slug' => Str::of('Sen Đá Mặt Nạ Lông')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/fvKKeJvSaK15gksrGBHPKl54rgyhbdYj.jpg',
               'feature_image_name' => 'sen-da-mat-na-long-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây sen đá Mặt Nạ Lông là một trong những giống mới được lai tạo khá giống với đá Mặt Nạ. Cây phù hợp để bàn làm việc, bàn học, các góc nhỏ, trang trí quán cà phê....',
               'content' => '<p>Để đa dạng hơn về c&aacute;c chủng loại sen đ&aacute; th&igrave; sen đ&aacute; ng&agrave;y c&agrave;ng được nh&acirc;n giống với nhiều chủng loại, hoặc được lấy giống th&ecirc;m ở b&ecirc;n nước ngo&agrave;i. Sen đ&aacute; Mặt Nạ L&ocirc;ng l&agrave; một phi&ecirc;n bản mới của&nbsp;<a href="https://webcaycanh.com/sen-da-mat-na/" target="_blank">s</a>en&nbsp;nh&igrave;n c&oacute; vẻ bề ngo&agrave;i bắt mắt hơn so với sen đ&aacute; cũ. C&acirc;y mang &yacute; nghĩa h&atilde;y sống thật với bản th&acirc;n. Ph&ugrave; hợp l&agrave;m c&acirc;y để b&agrave;n, trang tr&iacute; c&aacute;c g&oacute;c nhỏ.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/mat-na-long.jpg" style="height:400px; width:367px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; MẶT NẠ&nbsp;L&Ocirc;NG</h2>
               
               <p>V&igrave; c&acirc;y ph&aacute;t triển theo chiều cao v&agrave; kh&ocirc;ng phải dạng đ&agrave;i n&ecirc;n khả năng sống của sen đ&aacute; Mặt Lạ L&ocirc;ng rất khỏe, &iacute;t bị thối l&aacute; v&agrave; &uacute;ng nước.</p>
               
               <h3>NƯỚC</h3>
               
               <p>L&aacute; c&acirc;y c&oacute; khả năng t&iacute;ch trữ nước n&ecirc;n gi&uacute;p cho&nbsp;<em>sen đ&aacute; Mặt Lạ L&ocirc;ng</em>&nbsp;c&oacute; khả năng chịu hạn l&acirc;u ng&agrave;y, ch&iacute;nh v&igrave; thế kh&ocirc;ng cần tưới nhiều nước cho loại c&acirc;y n&agrave;y, thường 1 tuần l&agrave; đủ, nếu m&ocirc;i trường n&oacute;ng, kh&ocirc; th&igrave; c&oacute; thể 1 tuần tưới 2 lần để c&acirc;y c&oacute; đủ nước để ph&aacute;t triển, kh&ocirc;ng d&ugrave; n&oacute;ng 1 tuần tưới 1 lần c&acirc;y cũng vẫn sống được.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>&Aacute;nh s&aacute;ng nhiều th&igrave; lớp l&ocirc;ng sẽ d&agrave;y v&agrave; trắng hơn nh&igrave;n c&acirc;y sẽ đẹp hơn, v&igrave; thế bạn n&ecirc;n đảm bảo &aacute;nh s&aacute;ng cho sen đ&aacute; Mặt Nạ L&ocirc;ng nếu để văn ph&ograve;ng trước khi đi về n&ecirc;n để ra nơi c&oacute; nắng để n&oacute; c&oacute; thể đ&oacute;n được &aacute;nh nắng buổi s&aacute;ng. Tr&aacute;nh để c&acirc;y dưới &aacute;nh nắng gắt, nhiệt độ th&iacute;ch hợp l&agrave; từ 15 &ndash; 28 độ.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất trồng phải l&agrave; loại tho&aacute;t nước tốt kh&ocirc;ng bị ứa nước l&acirc;u ng&agrave;y dễ dẫn đến c&acirc;y bị thối, v&agrave; đất vẫn đủ dưỡng chất c&oacute; thể trộn đất với xỉ than đun rồi đập vụn với xơ dừa, tro, chấu v&agrave; ph&acirc;n b&ograve;.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng rất nhiều c&aacute;ch như: bằng hạt, l&aacute;, gi&acirc;m c&agrave;nh, t&aacute;ch bụi&hellip;</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Xương Rồng Thần Long',
               'slug' => Str::of('Xương Rồng Thần Long')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/uHG6smUazD1x8Taot9dNnGFFMxaYqHmV.jpg',
               'feature_image_name' => 'xuong-rong-than-long-1.jpg',
               'price' => '69000',
               'sale_price' => '0',
               'final_price' => 69000,
               'content_short' => 'Xương rồng Thần Long là một trong loại xương rồng có hoa rất đẹp, hoa to và có nhiều màu sắc khác nhau từ màu trắng, cam, đỏ, hồng...Cây trên 2 năm mới cho ra hoa. Có khả năng hút bức xạ máy tính. Cây mang ý nghĩa cho sự bảo vệ, phù hợp để bàn làm việc, bàn học, quán cà phê...',
               'content' => '<p>Xương rồng Thần Long l&agrave; một trong loại xương rồng c&oacute; hoa rất đẹp, hoa to v&agrave; c&oacute; nhiều m&agrave;u sắc kh&aacute;c nhau từ m&agrave;u trắng, cam, đỏ, hồng&hellip;C&acirc;y tr&ecirc;n 2 năm mới cho ra hoa. C&acirc;y mang &yacute; nghĩa cho sự bảo vệ, ph&ugrave; hợp để b&agrave;n l&agrave;m việc, b&agrave;n học, qu&aacute;n c&agrave; ph&ecirc;&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/than-long.jpg" style="height:271px; width:300px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C XƯƠNG RỒNG THẦN LONG</h2>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Xương rồng Thần Long để ph&aacute;t triển tốt th&igrave; cần c&oacute; nhiều &aacute;nh s&aacute;ng, nếu để ở m&ocirc;i trường trong nh&agrave; th&igrave; c&acirc;y vẫn sống tuy nhi&ecirc;n sẽ kh&ocirc;ng cho ra hoa, v&igrave; thế c&acirc;y cần nhiều &aacute;nh s&aacute;ng, th&iacute;ch &aacute;nh s&aacute;ng buổi sớm v&agrave; chiều muộn</p>
               
               <h3>NƯỚC</h3>
               
               <p>Nước kh&ocirc;ng qu&aacute; quan trọng với lo&agrave;i xương rồng, v&igrave; c&acirc;y c&oacute; khả năng trữ nước ở th&acirc;n, nghĩa l&agrave; chỉ cần cung cấp 1 lần th&igrave; c&acirc;y trữ nước trong th&acirc;n, c&oacute; thể nu&ocirc;i c&acirc;y cả th&aacute;ng, thường th&igrave; 1 tuần tưới nước một lần, hoặc khi n&agrave;o bạn thấy th&acirc;n n&oacute; nhẵn l&agrave; l&uacute;c n&oacute; đang thiếu nước th&igrave; khi đ&oacute; mới tưới để hạn chế được trường hợp tưới nhiều qu&aacute; m&agrave; c&acirc;y chết.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất với&nbsp;<em>xương rồng Thần Long</em>&nbsp;phải l&agrave; loại đất dễ tho&aacute;t nước, th&ocirc;ng tho&aacute;ng v&agrave; đủ dưỡng chất, bạn c&oacute; thể d&ugrave;ng đất c&oacute; trộn xỉ than đun rồi đập nhỏ, trộn với tro trấu, xơ dừa</p>
               
               <p>&nbsp;Nhiệt độ</p>
               
               <p>Trong tự nhi&ecirc;n hoang d&atilde;, c&acirc;y xương rồng v&agrave; c&acirc;y mọng nước c&oacute; thể tồn tại, chịu đựng trong khoảng nhiệt độ lớn, chừng 10&deg;C &ndash; 50&deg;C. Tuy nhi&ecirc;n, nhiệt độ th&iacute;ch hợp để c&acirc;y ph&aacute;t triển v&agrave;o khoảng 15&deg;C &ndash; 28&deg;C. Nhiệt độ qu&aacute; cao hoặc qu&aacute; thấp c&oacute; thể l&agrave;m cho c&acirc;y ngừng ph&aacute;t triển v&agrave; suy yếu.</p>',
               'user_id' => '3',
               'category_id' => '3',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],


            //CÂY CẢNH VĂN PHÒNG 
            [ 
               'name' => 'Cây Hoa Tigon',
               'slug' => Str::of('Cây Hoa Tigon')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/0VxVWhhRw0sypiyswfx8MF412yexFNoO.jpg',
               'feature_image_name' => 'hoa-tigon-1.jpg',
               'price' => '149000',
               'sale_price' => '10',
               'final_price' => 134100,
               'content_short' => 'Cây hoa Tigon có mùi thơm nhẹ, thân lá mền mại thích hợp với người thích trồng cây leo nhẹ nhàng. Cây phù hợp trồng cây che nắng sân, cổng, hàng rào và ban công',
               'content' => '<p>C&acirc;y Hoa Tigon hay c&ograve;n gọi c&acirc;y hoa Tr&aacute;i Tim, hoa Tim Vỡ&nbsp;l&agrave; một trong những loại d&acirc;y leo phổ biến dễ trồng v&agrave; kh&ocirc;ng phải chăm s&oacute;c nhiều, hoa c&oacute; m&ugrave;i hương nhẹ kh&ocirc;ng nồng, hoa ra quanh năm&nbsp;&iacute;t s&acirc;u bệnh, c&acirc;y Hoa Tigon lọc kh&ocirc;ng kh&iacute; rất&nbsp;tốt v&agrave; đặc biệt c&acirc;y c&ograve;n c&oacute; thể l&agrave;m thuốc n&ecirc;n ho&agrave;n to&agrave;n an to&agrave;n đối với gia đ&igrave;nh c&oacute; trẻ nhỏ th&iacute;ch nghịch. Nếu bạn th&iacute;ch sự nhẹ nh&agrave;ng, l&atilde;ng mạn v&agrave;&nbsp;đang cần t&igrave;m loại c&acirc;y trồng gi&agrave;n, h&agrave;ng r&agrave;o, c&acirc;y leo trước cổng&nbsp;th&igrave; c&acirc;y Hoa Tigon l&agrave; một sự lựa chọn tuyệt vời.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/hoa-tigon.jpg" style="height:400px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C C&Acirc;Y HOA TIGON</h2>
               
               <p>C&acirc;y Hoa Tigon c&oacute; khả năng sống v&agrave; th&iacute;ch nghi rất tốt với kh&iacute; hậu nhiệt&nbsp;đới&nbsp;ở nước ta, c&acirc;y chịu&nbsp;được hạn những cũng sống&nbsp;được&nbsp;ở nơi r&acirc;m m&aacute;t m&agrave; kh&ocirc;ng cần chăm s&oacute;c nhiều.</p>
               
               <p><em>&ndash;&nbsp;<strong>&Aacute;nh s&aacute;ng</strong>:&nbsp;</em>Chỉ cần lưu &yacute; l&uacute;c c&acirc;y non mới trồng th&igrave; bạn n&ecirc;n để c&acirc;y ở chỗ m&aacute;t tho&aacute;ng gi&oacute;, tr&aacute;nh nắng gắt buổi trưa l&agrave; được<em>,&nbsp;</em>c&ograve;n khi c&acirc;y trưởng th&agrave;nh th&igrave; kh&ocirc;ng quan trọng nắng mưa, tr&aacute;nh kh&ocirc;ng&nbsp;để ngập&nbsp;&uacute;ng l&acirc;u ng&agrave;y l&agrave;&nbsp;được<em>.</em></p>
               
               <p><em>&ndash;&nbsp;<strong>Tưới nướ</strong>c:&nbsp;</em>T&ugrave;y v&agrave;o điều kiện thời tiết nếu trời m&ugrave;a h&egrave; n&ecirc;n tưới<em>&nbsp;đ</em>ều đặn mỗi ng&agrave;y tưới nước 2 lần v&agrave;o s&aacute;ng sớm v&agrave; chiều tối để giữ đất ấm kh&ocirc;ng ướt. Khi khoảng được 1 th&aacute;ng, c&acirc;y&nbsp;đ&atilde; bắt đầu b&eacute;n rễ th&igrave; chỉ cần tưới nước một lần trong ng&agrave;y v&agrave; tưới với lượng vừa đủ để kh&ocirc;ng l&agrave;m &uacute;ng rễ c&acirc;y.</p>
               
               <p><em>&ndash;&nbsp;<strong>B&oacute;n ph&acirc;n</strong>:</em>&nbsp;Sau 10 ng&agrave;y, cần xới gốc v&agrave; l&agrave;m cỏ, l&agrave;m tơi đất quanh gốc c&acirc;y.&nbsp;B&ecirc;n cạnh đ&oacute; cũng kh&ocirc;ng qu&ecirc;n b&oacute;n ph&acirc;n th&uacute;c v&agrave; rải ph&acirc;n xung quanh gốc&nbsp;để c&acirc;y c&oacute; thể ph&aacute;t triển nhanh</p>
               
               <p><em>&ndash;&nbsp;<strong>Tỉa l&aacute;</strong>:&nbsp;</em>Tigon l&agrave; lo&agrave;i hoa nở gần như quanh năm. V&agrave;o m&ugrave;a kh&ocirc; hay đầu m&ugrave;a xu&acirc;n, n&ecirc;n tiến h&agrave;nh cắt tỉa l&aacute; gi&agrave; đi để tạo điều kiện cho l&aacute; non mọc&nbsp;ra nhiều, bởi th&ocirc;ng thường, l&aacute; gi&agrave; kh&ocirc;ng rụng c&ograve;n l&aacute; non mọc đ&egrave; l&ecirc;n l&aacute; kh&ocirc; sẽ khiến cho gi&agrave;n c&acirc;y bị d&agrave;y, nặng m&agrave; kh&ocirc;ng c&oacute; thẩm mỹ.</p>
               
               <p>&ndash;&nbsp;<em><strong>Đất trồng</strong></em>: C&acirc;y c&oacute; thể số ở nhiều loại đất kh&aacute;c nhau nhưng nếu muốn&nbsp;<strong>c&acirc;y Hoa Tigon</strong>&nbsp;ph&aacute;t triển tốt cần lưu &yacute;, đất phải nhiều m&ugrave;n, được xử l&yacute; s&acirc;u bệnh, nấm v&agrave; độ pH = 7. C&oacute; thể kết hợp đất trồng với tỉ lệ: 7 phần đất thịt, 2 phần r&aacute;c mục, 1 phần c&aacute;t + Nito, Photpho, Kali hoặc ph&acirc;n chuồng hoai mục 25%, đất m&agrave;u 50%, tro trấu 25%, ph&acirc;n v&ocirc; cơ 1%.</p>
               
               <p>&ndash;&nbsp;<em><strong>Nh&acirc;n Giống</strong></em>: C&acirc;y Hoa Tigon thường&nbsp;được nh&acirc;n giống bằng 2 phương ph&aacute;p ch&iacute;nh l&agrave; trồng bằng hạt hoặc gi&acirc;m c&agrave;nh.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Xương Rồng Gymo',
               'slug' => Str::of('Xương Rồng Gymo')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Na3ghUiLlzrjE3lmjjEbOFbrBQgG1qWm.jpg',
               'feature_image_name' => 'xuong-rong-gymo-1.jpg',
               'price' => '65000',
               'sale_price' => '15',
               'final_price' => 55250,
               'content_short' => 'Xương rồng Gymno ấn tượng với hoa đa màu sắc, hoa to và đẹp. Cây nhỏ xinh phù hợp để tặng quà, để bàn làm việc, trang trí quán cà phê...',
               'content' => '<p>C&acirc;y xương rồng Gymno c&oacute; t&ecirc;n đầy đủ l&agrave; Gymnocalycium l&agrave; một chi xương rồng Nam Mỹ. T&ecirc;n của chi Gymnocalycium (từ tiếng Hy Lạp, &ldquo;calyx trần trụi&rdquo;) chỉ nụ hoa kh&ocirc;ng c&oacute; l&ocirc;ng hoặc gai. L&agrave; họ xương rồng&nbsp;được nhiều người&nbsp;ưa th&iacute;ch v&igrave;&nbsp;đặc&nbsp;điểm&nbsp;ấn tượng l&agrave; hoa c&ograve;n to hơn cả c&acirc;y. C&acirc;y xương rồng Gymno ph&ugrave; hợp&nbsp;để b&agrave;n, ban c&ocirc;ng v&agrave; l&agrave;m qu&agrave; tặng sinh nhật, hoặc dịp lễ. Xương rồng trong tiếng T&acirc;y Ban Nha c&oacute; nghĩa l&agrave; &rdquo; h&atilde;y&nbsp;đến v&agrave; mang em&nbsp;đi &rdquo; khi người con g&aacute;i tặng cho người con trai như một lời nhắn về sự&nbsp;đồng&nbsp;&yacute; t&igrave;nh cảm của người con trai. Trong phong thủy c&acirc;y mang&nbsp;&yacute; nghĩa bảo vệ v&agrave; trừ t&agrave;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/xuong-rong-gymo.jpg" style="height:400px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C XƯƠNG RỒNG GYMNO</h2>
               
               <p>Tất cả lo&agrave;i xương rồng&nbsp;đều nổi tiếng với khả năng chịu hạn v&agrave; rất dễ chăm s&oacute;c.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Yếu tố kh&aacute; quan trọng với người chơi xương rồng, thường sai lầm khiến c&acirc;y chết l&agrave; tưới nước. C&acirc;y xương rồng gymno thường&nbsp;được&nbsp;đặt&nbsp;ở 2 m&ocirc;i trường: Văn ph&ograve;ng, trong nh&agrave; v&agrave;&nbsp;ở ngo&agrave;i trời. Nếu bạn&nbsp;để trong nh&agrave; v&agrave; văn ph&ograve;ng th&igrave; 2 tuần mới n&ecirc;n tưới 1 lần nếu như m&ocirc;i trường&nbsp;ở&nbsp;đ&oacute; kh&ocirc;ng qu&aacute; kh&ocirc;. C&ograve;n&nbsp;đối với c&acirc;y&nbsp;để bancol ngo&agrave;i trời th&igrave; n&ecirc;n c&oacute; m&aacute;i che v&agrave; 1 tuần tưới 1 lần. Ch&uacute;&nbsp;&yacute; mỗi lần tưới cũng chỉ cần&nbsp;tưới ẩm, tr&aacute;nh&nbsp;để c&acirc;y bị&nbsp;ẩm&nbsp;đất l&acirc;u ng&agrave;y.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất để trồng c&acirc;y xương rồng Gymno n&oacute;i ri&ecirc;ng v&agrave; xương rồng n&oacute;i chung th&igrave; cần loại&nbsp;đất tho&aacute;ng, kh&ocirc;ng giữ nước. Bạn c&oacute; thể trộn&nbsp;đất với xỉ than&nbsp;đun rồi&nbsp;đập vụn, trấu hun&nbsp;để&nbsp;đất c&oacute;&nbsp;độ tho&aacute;ng v&agrave; kh&ocirc;ng giữ nước.</p>
               
               <h3>&Aacute;NH S&Aacute;NG, NHIỆT&nbsp;ĐỘ</h3>
               
               <p>Điều kiện tốt l&agrave; n&ecirc;n cho c&acirc;y dưới&nbsp;&aacute;nh nắng khoảng 6 tiếng/ng&agrave;y, nếu bạn&nbsp;để trong văn ph&ograve;ng th&igrave; tưới&nbsp;&iacute;t nước nhưng c&acirc;y sẽ kh&oacute; ra hoa n&ecirc;n&nbsp;để trong văn ph&ograve;ng. Nhiệt&nbsp;độ th&iacute;ch hợp từ&nbsp;15&deg;C &ndash; 28&deg;C</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&aacute;ch phổ biến&nbsp;để nh&acirc;n giống xương rồng l&agrave; t&aacute;ch c&acirc;y con hoặc trồng từ hạt</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-09-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Xương Rồng Kim Thổ',
               'slug' => Str::of('Xương Rồng Kim Thổ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/T2kcLzlCc8ZfHtAM48EPbOCCPXEY9WLO.jpg',
               'feature_image_name' => 'xuong-rong-kim-tho-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Xương Rồng Kim Hổ có khả năng sống ở điều kiện khắc nhiệt, có khả năng hấp thụ bức xạ máy tính nên rất phù hợp để bàn máy tính, bàn làm việc, trang trí quán cà phê...',
               'content' => '<p>C&acirc;y xương rồng kim hổ thuộc họ: Xương rồng. T&ecirc;n khoa học: Echinocactus grusonii. Kim hổ gai trắng, hoặc nhiều gai. Nguồn gốc từ v&ugrave;ng sa mạc Mehico. Được ph&acirc;n bố tại c&aacute;c v&ugrave;ng sa mạc nhiệt đới kh&ocirc; n&oacute;ng. L&agrave; một trong những loại xương rồng c&oacute; khả năng ph&aacute;t triển bề ngang lớn nhất trong c&aacute;c lo&agrave;i xương rồng. C&acirc;y&nbsp;<strong>xương rồng kim hổ</strong>&nbsp;lớn ph&ugrave; hợp để trước cổng, trước cửa đề trừ t&agrave;, c&acirc;y nhỏ c&oacute; thể d&ugrave;ng để trang tr&iacute;, để b&agrave;n m&aacute;y t&iacute;nh để h&uacute;t bức xạ.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/xuong-rong-kim-tho.jpg" style="height:225px; width:300px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SƯƠNG RỒNG KIM HỔ</h2>
               
               <p>L&agrave; lo&agrave;i c&acirc;y c&oacute; nguồn gốc từ xa mạc n&ecirc;n xương rồng kim hổ rất dễ chăm s&oacute;c v&agrave; c&oacute; khả năng th&iacute;ch nghi tốt, c&oacute; thể trồng trong nh&agrave; lẫn ngo&agrave;i trời, c&acirc;y chịu được hạn, nhưng kh&ocirc;ng chịu được ẩm qu&aacute; l&acirc;u.</p>
               
               <h3>ĐẤT TRỒNG</h3>
               
               <p>V&igrave; kh&ocirc;ng chịu được ẩm l&acirc;u, do vậy loại&nbsp;<strong>đất tốt nhất với xương rồng kim hổ</strong>&nbsp;l&agrave; loại c&oacute; khả năng tho&aacute;t nước tốt m&agrave; vẫn c&oacute; nhiều dinh dưỡng, th&iacute;ch&nbsp;hợp với đất trồng pha c&aacute;t c&oacute; chứa chất v&ocirc;i, m&agrave;u mỡ.</p>
               
               <h3>&Aacute;NH S&Aacute;NG V&Agrave; NHIỆT ĐỘ</h3>
               
               <p>C&acirc;y ưa th&iacute;ch nơi c&oacute; đầy đủ &aacute;nh nắng, m&ugrave;a h&egrave; kỵ &aacute;nh nắng gắt chiếu trực tiếp buổi trưa, th&iacute;ch kh&iacute; hậu ấm, kh&ocirc;ng chịu được nhiệt độ dưới 8&nbsp;độ c.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Nước l&agrave; một trong những thứ kh&oacute; điều chỉnh với họ xương rồng, thường th&igrave; nếu để trong văn ph&ograve;ng th&igrave; bạn 1 tuần tưới 1 lần, c&ograve;n để ngoại thất th&igrave; tuần tưới 2 -3 lần t&ugrave;y theo thời tiết. Mỗi lần tưới ước lượng đủ để ẩm đất l&agrave; được.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>Để&nbsp;<strong>nh&acirc;n giống xương rồng kim hổ</strong>&nbsp;bạn c&oacute; thể d&ugrave;ng hạt, t&aacute;ch c&aacute;c c&acirc;y con mọc tr&ecirc;n c&acirc;y rồi để tr&ecirc;n đất.</p>
               
               <h2>XƯƠNG RỒNG KIM HỔ&nbsp;C&Oacute; 3 LOẠI</h2>
               
               <p>Loại nhỏ đường k&iacute;nh khoảng 6 -8 cm: 30k</p>
               
               <p>Loại to khoảng 10 cm: 70k</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-02-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Cung Điện Vàng',
               'slug' => Str::of('Cây Cung Điện Vàng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/E9xcSX0THSIuBIZL9MRu7huUIMhjPo04.jpg',
               'feature_image_name' => 'cung-dien-vang-1.jpg',
               'price' => '135000',
               'sale_price' => '20',
               'final_price' => 108000,
               'content_short' => 'Với màu sắc bắt mắt, dễ sống, ý nghĩa phong thủy đuổi tà mang đến may mắn, phù hợp với người mệnh kim và thủy mang đến tài lộc, thăng tiền. Cây phù hợp để bàn, làm quà, trang trí quán cà phê...',
               'content' => '<p>C&acirc;y Cung Điện V&agrave;ng hay c&ograve;n được gọi l&agrave; c&acirc;y Huy Ho&agrave;ng, Ho&agrave;ng Mai mini, c&acirc;y Cung Điện Ho&agrave;ng Hậu. C&acirc;y thuộc họ r&aacute;y tương đồng với c&aacute;c loại c&acirc;y như C&acirc;y Ngọc Ng&acirc;n, C&acirc;y Vạn Lộc&hellip;C&acirc;y Cung Điện V&agrave;ng c&oacute; m&agrave;u sắc l&aacute; rất bắt mắt n&ecirc;n hay được chọn l&agrave;m c&acirc;y văn ph&ograve;ng, c&acirc;y để b&agrave;n, c&acirc;y nội thất, c&acirc;y phong thủy v&agrave; c&acirc;y để văn ph&ograve;ng. C&acirc;y ph&ugrave; hợp phong thủy với người mệnh Kim v&agrave; Mệnh Thủy.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/cung-dien-vang.jpg" style="height:400px; width:400px" /></p>
               
               <h2>&Yacute; NGHĨA PHONG THỦY C&Acirc;Y CUNG&nbsp;ĐIỆN V&Agrave;NG</h2>
               
               <p>Với &yacute; nghĩa phong thủy trừ t&agrave;, xua đi những điều xấu, đem đến sự may mắn, tốt l&agrave;nh, thịnh vượng cho gia chủ. C&acirc;y Cung&nbsp;Điện V&agrave;ng thời xưa rất&nbsp;được&nbsp;ưa chuộng&nbsp;ở trong ho&agrave;ng cung. Ngo&agrave;i ra c&acirc;y rất ph&ugrave; hợp với người mệnh Thủy v&agrave; mệnh Kim gi&uacute;p mang&nbsp;đến t&agrave;i lộc v&agrave; sự thăng tiến.</p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C C&Acirc;Y CUNG&nbsp;ĐIỆN V&Agrave;NG</h2>
               
               <p>Thuộc họ r&aacute;y n&ecirc;n c&acirc;y rất dễ sống v&agrave; chăm s&oacute;c, c&oacute; thể sống&nbsp;được&nbsp;ở trong&nbsp;điều kiện thiếu s&aacute;ng, m&aacute;y lạnh.</p>
               
               <h3>NƯỚC</h3>
               
               <p>T&ugrave;y thuộc v&agrave;o&nbsp;điều kiện m&ocirc;i trường&nbsp;đặt c&acirc;y m&agrave; c&oacute; lượng nước tưới ph&ugrave; hợp,&nbsp;<strong>c&acirc;y Cung&nbsp;Điện V&agrave;ng</strong>&nbsp;thiếu nước th&igrave; l&aacute; sẽ mềm. Thường c&acirc;y&nbsp;để trong nh&agrave; th&igrave; 1 tuần tưới 1 lần, nếu&nbsp;để cạnh cửa sổ, nơi tho&aacute;ng gi&oacute; th&igrave; 1 tuần tưới 2 lần. Ngo&agrave;i ra c&aacute;c bạn c&oacute; thể tham khảo <strong>đĩa tự tưới</strong>&nbsp;chỉ cần&nbsp;đổ nước v&agrave;o&nbsp;đĩa, nước sẽ&nbsp;được tự h&uacute;t l&ecirc;n v&agrave; gi&uacute;p b&agrave;n, nơi&nbsp;đặt c&acirc;y&nbsp;được sạch sẽ.</p>
               
               <h3>&Aacute;NH S&Aacute;NG, NHIỆT&nbsp;ĐỘ</h3>
               
               <p>C&acirc;y th&iacute;ch hợp với&nbsp;điều kiện b&aacute;n r&acirc;m,&nbsp;ưa&nbsp;&aacute;nh s&aacute;ng buổi sớm v&agrave; chiều&nbsp;tối. Tr&aacute;nh&nbsp;để c&acirc;y nơi nắng gắt của buổi trưa trời&nbsp;m&ugrave;a h&egrave; dễ khiến c&acirc;y mất nước nhanh, bị ch&aacute;y l&aacute;. Nhiệt&nbsp;độ&nbsp;ưa th&iacute;ch từ 18 &ndash; 24&deg;C.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại&nbsp;đất&nbsp;ưa th&iacute;ch với c&acirc;y Cung&nbsp;Điện&nbsp;V&agrave;ng l&agrave; loại&nbsp;đất m&ugrave;n, tơi xốp, bạn c&oacute; thể trộn&nbsp;đất với sơ dừa, trấu hun&hellip;</p>
               
               <p>Đối với c&acirc;y Cung Điện V&agrave;ng&nbsp;trồng thủy sinh th&igrave; chỉ cần nhỏ 2 &ndash; 3 giọt chất dinh dưỡng một tuần v&agrave;o trong nước, khi thấy nước c&oacute; m&ugrave;i th&igrave; cần thay nước v&agrave; loại bỏ rễ thối.</p>
               
               <h3>B&Oacute;N PH&Acirc;N</h3>
               
               <p>Khi&nbsp;đất trồng hết chất dinh dưỡng c&acirc;y c&ograve;i cọc th&igrave; bạn c&oacute; thể mua&nbsp;đạm rắc th&ecirc;m dưới gốc, hoặc thay&nbsp;đất cho c&acirc;y.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&aacute;ch nh&acirc;n giống tốt nhất&nbsp;đối với c&acirc;y Cung&nbsp;Điện V&agrave;ng&nbsp;đ&oacute; l&agrave; t&aacute;ch bụi, ngo&agrave;i ra bạn c&oacute; thể trồng bằng hạt, hoặc gi&acirc;m c&agrave;nh.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-07-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Lan Ý Thủy Sinh',
               'slug' => Str::of('Cây Lan Ý Thủy Sinh')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/1QwPAmtei4we8D3pwfnWKktb7sgYqFtZ.jpg',
               'feature_image_name' => 'lan-y-thuy-sinh-1.jpg',
               'price' => '155000',
               'sale_price' => '5',
               'final_price' => 147250,
               'content_short' => 'Cây Lan Ý thủy sinh có tác dụng thanh lọc không khí, hấp thụ các chất gây ung thư như formaldehyde, benzen và trichloroethylene, ngoài ra nó còn có khả năng giúp hấp thụ các bức xạ nhân tạo phát ra từ máy tính, tivi, lò vi sóng, đồ hồ điện tử...Cây phù hợp để bàn làm việc, trang ý quán cà phê, bàn uống nước....',
               'content' => '<p>C&acirc;y Lan &Yacute; c&oacute; t&ecirc;n khoa học&nbsp;Spathiphyllum wallisii, thuộc họ&nbsp;Araceae, ngo&agrave;i ra Lan &Yacute; c&ograve;n c&aacute;c t&ecirc;n gọi kh&aacute;c như: Bạch M&ocirc;n, Vỹ Hoa Trắng, Huệ Hoa B&igrave;nh. C&oacute; lẽ ch&iacute;nh v&igrave; lo&agrave;i c&acirc;y n&agrave;y c&oacute; hoa trắng v&agrave; bền n&ecirc;n được đặt t&ecirc;n như vậy.&nbsp;<strong>C&acirc;y Lan &Yacute; thủy sinh</strong>&nbsp;c&ograve;n đứng đầu danh s&aacute;ch lo&agrave;i c&acirc;y lọc kh&ocirc;ng kh&iacute;, kh&ocirc;ng chỉ hấp thụ một số chất g&acirc;y ung thư như: formaldehyde, benzen v&agrave; trichloroethylene, n&oacute; c&ograve;n hấp thụ cả xylene v&agrave; toluene&nbsp;h&oacute;a chất t&igrave;m thấy trong dầu hỏa. Hơn thế nữa n&oacute; c&ograve;n hấp thụ năng lượng bức xạ nh&acirc;n tạo ph&aacute;t ra từ tivi, điện thoại, l&ograve; vi s&oacute;ng, m&aacute;y t&iacute;nh, đ&agrave;i, đồng hồ điện tử&hellip;C&acirc;y ph&ugrave; hợp để b&agrave;n l&agrave;m việc, b&agrave;n học, ph&ograve;ng kh&aacute;ch, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, b&agrave;n lễ t&acirc;n, c&aacute;c kh&ocirc;ng gian trống&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/lan-y-thuy-sinh.jpg" style="height:300px; width:250px" /></p>
               
               <p>Nhiều người lầm tưởng hoa của lan &yacute; l&agrave; phần mo bao quanh một c&aacute;i nhị nhưng thực chất, hoa của lan &yacute; ch&iacute;nh l&agrave; c&aacute;i nhị đ&oacute;, hoa nhỏ mọc th&agrave;nh cụm h&igrave;nh trụ cong m&agrave;u trắng ng&agrave; hoặc v&agrave;ng nhạt, b&ecirc;n ngo&agrave;i được bao quanh&nbsp; bởi mo l&aacute; h&igrave;nh gần giống tr&aacute;i tim, thường c&oacute; m&agrave;u trắng muốt hoặc pha lẫn ch&uacute;t xanh nhạt.</p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C LAN &Yacute;</h2>
               
               <p><em><strong>C&acirc;y Lan &Yacute; thủy sinh</strong></em>&nbsp;c&oacute; c&aacute;ch chăm s&oacute;c phải n&oacute;i l&agrave; cực cực dễ d&agrave;ng. V&igrave; lọc kh&iacute; v&agrave; h&uacute;t bụi tốt n&ecirc;n l&aacute; hay bị bẩn thi thoảng bạn c&oacute; thể d&ugrave;ng khăn ướt để lau l&aacute;.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>C&acirc;y Lan &Yacute; thủy sinh thuộc loại c&acirc;y cảnh văn ph&ograve;ng&nbsp;ch&iacute;nh v&igrave; thế n&oacute; c&oacute; thể sống được ở trong m&ocirc;i trường m&aacute;y lạnh, thiếu &aacute;nh s&aacute;ng chỉ cần &aacute;nh s&aacute;ng đ&egrave;n huỳnh quang cũng c&oacute; thể sống được, tuy nhi&ecirc;n thiếu nắng th&igrave; l&aacute; c&acirc;y sẽ kh&ocirc;ng xanh đậm m&agrave; sẽ nhạt dần t&ugrave;y theo mức độ thiếu s&aacute;ng tới đ&acirc;u. Tốt nhất l&agrave; n&ecirc;n để c&acirc;y Lan &Yacute; thủy sinh ở cửa sổ, h&agrave;nh lang những nơi c&oacute; &aacute;nh s&aacute;ng chiếu tới nhưng tr&aacute;nh được &aacute;nh nắng gắt, v&igrave; nếu để ở trời nắng gắt c&acirc;y dễ bị ch&aacute;y l&aacute; v&agrave; b&igrave;nh c&acirc;y lại l&agrave; thủy tinh khả năng hấp thụ sẽ cao hơn khiến nước n&oacute;ng dẫn tới chết c&acirc;y.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Kh&aacute;c so với việc trồng đất t&ugrave;y c&acirc;y Lan &Yacute; được trồng trong nước vấn đề nước đ&atilde; trở n&ecirc;n qu&aacute; dễ d&agrave;ng, chỉ khi n&agrave;o b&igrave;nh hết nước th&igrave; ta lại đổ đầy nước v&agrave;o trong b&igrave;nh l&agrave; được, nếu l&agrave; nước m&aacute;y th&igrave; n&ecirc;n để 1 ng&agrave;y cho bốc hết m&ugrave;i clo, v&agrave; khi đổ nước v&agrave;o b&igrave;nh bạn n&ecirc;n đổ qua, đổ lại để tạo kh&ocirc;ng kh&iacute; cho nước, khi nước đục l&agrave; c&oacute; thể do nhiều rễ bị thối, cần thay nước v&agrave; bỏ rễ thối đi l&agrave; được. Để c&acirc;y ph&aacute;t triển mạnh c&oacute; thể cho 1 v&agrave;i giọt dung dịch thủy sinh khi bạn thay nước mới.</p>
               
               <h3>NHIỆT ĐỘ</h3>
               
               <p>C&acirc;y l&agrave; lo&agrave;i hoa ưa b&oacute;ng m&aacute;t v&agrave; nhiệt độ kh&ocirc;ng qu&aacute; cao cũng kh&ocirc;ng qu&aacute; thấp, ch&iacute;nh v&igrave; vậy ở điều kiện ẩm ướt,&nbsp;<em>c&acirc;y Lan &Yacute; thủy sinh</em>&nbsp;sinh trưởng v&agrave; ph&aacute;t triển tốt nhất ở nhiệt độ 27 độ.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y Lan &yacute; l&agrave; lo&agrave;i c&acirc;y c&oacute; sức sống v&ocirc; c&ugrave;ng mạnh mẽ, chỉ việc t&aacute;ch một v&agrave;i c&acirc;y từ kh&oacute;m c&acirc;y lan &yacute; đang trồng đem đặt v&agrave;o chậu kh&aacute;c l&agrave; c&oacute; thể c&oacute; một chậu lan &yacute; ho&agrave;n to&agrave;n mới. Thường th&igrave; người ta nh&acirc;n giống lan &yacute; đ&uacute;ng v&agrave;o l&uacute;c thay chậu, thời điểm đ&oacute; thường diễn ra v&agrave;o m&ugrave;a xu&acirc;n, m&ugrave;a đầu ti&ecirc;n trong năm. Sau khi bụi đ&atilde; đủ lớn th&igrave; c&oacute; thể chuyển sang trồng bằng nước.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-06-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Cây Kim Ngân Thủy Sinh',
               'slug' => Str::of('Cây Kim Ngân Thủy Sinh')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/gb0iKuM0UfocNGnGIatRNcMaryMYy1Uk.jpg',
               'feature_image_name' => 'kim-ngan-thuy-sinh-2.jpg',
               'price' => '159000',
               'sale_price' => '10',
               'final_price' => 143100,
               'content_short' => 'Cây kim ngân thủy sinh hay còn có tên gọi khác là money tree ( cây tiền ) là một trong những cây số 1 về phong thủy. Cây phù hợp để bàn làm việc, văn phòng, trang trí quán cà phê, bàn lễ tân...',
               'content' => '<p>C&acirc;y kim ng&acirc;n thủy sinh hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave;&nbsp;money tree ( c&acirc;y tiền ) l&agrave; một trong những c&acirc;y số 1 về phong thủy. Mặc d&ugrave; c&oacute;&nbsp;xuất xứ từ Mexico, Brazill Nam Mỹ v&agrave; đầm lầy Trung Mỹ nhưng v&igrave; &yacute; nghĩa của&nbsp;<strong>c&acirc;y kim ng&acirc;n thủy sinh</strong>&nbsp;m&agrave; n&oacute; nhanh ch&oacute;ng được ph&aacute;t triển tại Việt Nam. V&agrave; một t&aacute;c dụng m&agrave; &iacute;t người biết đến l&agrave; n&oacute; c&oacute; thể đuổi được muỗi.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/kim-ngan-thuy-sinh.jpg" style="height:400px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C V&Agrave; &Yacute;&nbsp;NGHĨA PHONG THỦY CỦA KIM NG&Acirc;N</h2>
               
               <h3><strong>&Yacute; NGHĨA PHONG THỦY</strong></h3>
               
               <p>C&acirc;y gi&uacute;p mang lại nhiều tiền t&agrave;i, đồng thời g&igrave;n giữ t&agrave;i sản chặt chẽ.</p>
               
               <p><strong>C&aacute;ch chăm s&oacute;c:&nbsp;</strong>Kim ng&acirc;n th&iacute;ch nghi được ở mọi thời tiết n&oacute;ng &ndash; lạnh, c&oacute; thể trồng trực tiếp xuống đất, nước hoặc trong chậu. C&aacute;ch thức chăm s&oacute;c c&acirc;y Kim ng&acirc;n để trang tr&iacute; nội ngoại thất tương đối đơn giản v&agrave; dễ thực hiện.</p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p><strong>C&acirc;y kim ng&acirc;n thủy sinh</strong>&nbsp;chỉ cần 10 ng&agrave;y th&ecirc;m nước khi&nbsp;thay nước cho c&acirc;y n&ecirc;n thay bằng nước giếng hoặc nước m&aacute;y c&oacute; độ clo thấp hoặc để nước 1, 2 ng&agrave;y ngo&agrave;i trời để c&aacute;c chất tẩy rửa được bay hết. Khi cho nước v&agrave;o b&igrave;nh bạn n&ecirc;n đổ nước qua lại để tăng &ocirc; xi trong nước gi&uacute;p c&acirc;y ph&aacute;t triển tốt hơn.</p>
               
               <h3><strong>NHIỆT ĐỘ</strong></h3>
               
               <p>C&acirc;y sống được ở nhiệt độ từ 4&deg;C đến 40&deg;C ph&aacute;t triển th&iacute;ch hợp ở nhiệt độ 18&deg;C đến 26&deg;C.<br />
               Như vậy đối với c&acirc;y được trồng trong nh&agrave; hoặc trồng trong ph&ograve;ng lạnh c&acirc;y vẫn sinh trưởng b&igrave;nh thường. Tuy nhi&ecirc;n để c&acirc;y tồn tại l&acirc;u cần phải điều chỉnh nhiệt độ ph&ugrave; hợp.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>C&acirc;y đặt trong nh&agrave; với &aacute;nh s&aacute;ng của đ&egrave;n huỳnh quang th&igrave; c&acirc;y vẫn đ&aacute;p ứng được với điều kiện sinh trưởng v&agrave; ph&aacute;t triển. Tuy nhi&ecirc;n để c&acirc;y ph&aacute;t triển tốt, th&igrave;nh thoảng ta n&ecirc;n đưa c&acirc;y ra ngo&agrave;i trời dưới t&aacute;n c&acirc;y lớn với chu kỳ 10 ng&agrave;y/lần, như vậy c&acirc;y sẽ hấp thụ được &aacute;nh s&aacute;ng v&agrave; ph&aacute;t triển tốt hơn.</p>
               
               <p>C&acirc;y kim ng&acirc;n thủy sinh gi&aacute;:&nbsp;<strong>160.000</strong>&nbsp;<strong>VNĐ</strong>&nbsp;( Gi&aacute; chưa bao gồm b&igrave;nh thủy tinh ) v&agrave;&nbsp;<strong>205.000</strong>&nbsp;<strong>VNĐ</strong>&nbsp;( Gi&aacute; đ&atilde; bao gồm b&igrave;nh thủy tinh</p>
               
               <p>Ch&uacute; &yacute;: khi đổi nước, thay nước bạn chỉ cần đỏ mực nước đủ để cho tiếp x&uacute;c với rễ kh&ocirc;ng n&ecirc;n đổ ngập cả th&acirc;n.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá 3D',
               'slug' => Str::of('Sen Đá 3D')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/5SAI0sY7RpN9NMLTIxVX6uK1WCXOTVt1.jpg',
               'feature_image_name' => 'sen-da-3d-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá 3D mang ý nghĩa phong thủy cho một tình yêu và một tình bạn vĩnh cửu, không đổi thay theo thời gian. Cây phù hợp để bàn làm việc, trang trí góc học tập, quán cà phê... Cây có cách chăm sóc khá đơn giản.',
               'content' => '<p>Sen đ&aacute; 3D ph&aacute;t triển theo dạng đ&agrave;i, l&agrave; loại sen đ&aacute; c&oacute; những vạch đen ở viền l&aacute; v&agrave; giữa l&aacute;, ch&iacute;nh v&igrave; điều đ&oacute; m&agrave; khi ch&uacute;ng ta nh&igrave;n sẽ cảm gi&aacute;c được l&aacute; n&oacute; rất thật 3D chứ kh&ocirc;ng phải 2D như c&aacute;c loại kh&aacute;c khi nh&igrave;n. C&acirc;y mang &yacute; nghĩa phong thủy cho một t&igrave;nh y&ecirc;u v&agrave; một t&igrave;nh bạn vĩnh cửu, kh&ocirc;ng đổi thay theo thời gian. C&acirc;y sen đ&aacute; 3D ph&ugrave; hợp để b&agrave;n l&agrave;m việc, trang tr&iacute; g&oacute;c học tập, qu&aacute;n c&agrave; ph&ecirc;&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-3d.jpg" style="height:300px; width:225px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; 3D</h2>
               
               <p>C&aacute;c l&aacute; của sen đ&aacute; 3D mặc d&ugrave; mọc theo dạng đ&agrave;i nhưng kh&ocirc;ng đan kh&iacute;t v&agrave;o nhau như một số loại sen đ&aacute; hồng phấn, viền hồng, đất v&agrave; th&aacute;i n&ecirc;n cũng giảm được khả năng thối khi người chăm s&oacute;c kh&ocirc;ng biết m&agrave; tưới trực tiếp l&ecirc;n c&acirc;y.</p>
               
               <h3>TƯỚI NƯỚC</h3>
               
               <p>Kh&ocirc;ng kh&aacute;c g&igrave; với c&aacute;c loại sen đ&aacute; kh&aacute;c, sen đ&aacute; 3D cũng c&oacute; c&aacute;ch chăm s&oacute;c cũng rất đơn giản, một tuần chỉ cần tưới 1 lần nếu để trong văn ph&ograve;ng, m&ocirc;i trường ẩm, v&agrave; 1 tuần 2 lần với kh&ocirc;ng kh&iacute; kh&ocirc;, n&oacute;ng.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất dễ kiếm v&agrave; th&iacute;ch hợp với sen đ&aacute; 3D l&agrave; loại đất được trộn với xỉ than đun rồi đập nhỏ, trộn với đất, tro, chấu v&agrave; sơ dừa. Loại hỗn hợp n&agrave;y rất th&iacute;ch hợp với c&aacute;c loại sen đ&aacute; v&igrave; n&oacute; vừa tho&aacute;t nước nhanh m&agrave; vẫn đảm bảo chất dinh dưỡng cho c&acirc;y.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>&Aacute;nh s&aacute;ng lu&ocirc;n l&agrave; một phần kh&ocirc;ng thể thiếu đối với c&acirc;y trồng để g&oacute;p phần quan trọng trong qu&aacute; tr&igrave;nh quang hợp, tạo ra dinh dưỡng nu&ocirc;i c&acirc;y, đối với sen đ&aacute; &aacute;nh s&aacute;ng c&ograve;n tạo n&ecirc;n m&agrave;u sắc cho c&acirc;y, thường nếu để c&acirc;y trong văn ph&ograve;ng th&igrave; trước khi về bạn mang c&acirc;y ra ngo&agrave;i cửa sổ, h&agrave;ng lang sau đ&oacute; s&aacute;ng h&ocirc;m sau đi l&agrave;m bạn lại mang v&agrave;o ph&ograve;ng l&agrave;m việc. C&ograve;n nếu chăm s&oacute;c ở nh&agrave; th&igrave; để trong trời chỉ cần tr&aacute;nh &aacute;nh nắng buổi trưa m&ugrave;a h&egrave; v&agrave; mưa lớn l&agrave; được.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng hạt, l&aacute;, v&agrave; gi&acirc;m c&agrave;nh. V&igrave; thuộc họ bỏng n&ecirc;n c&acirc;y rất dễ nh&acirc;n giống, chỉ c&oacute; vấn đề l&agrave; thời tiết kh&ocirc;ng ph&ugrave; hợp th&igrave; c&acirc;y ph&aacute;t triển rất chậm.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-05-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Sedum Cơm',
               'slug' => Str::of('Sen Đá Sedum Cơm')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/WSwNpAZsdaEqpIHs5wyEkO6ODgRcOxt4.jpg',
               'feature_image_name' => 'se-dum-com-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen Đá Sedum Cơm nằm trong họ sedum là dòng có bông và lá rất nhỏ, phù hợp với những người yêu thích sự nhỏ nhắn, cây phù hợp để bàn làm việc và các góc nhỏ',
               'content' => '<p>Sen đ&aacute; Sedum Cơm nằm trong họ sedum l&agrave; d&ograve;ng c&oacute; b&ocirc;ng v&agrave; l&aacute; rất nhỏ, thường d&ugrave;ng để phối trong tiểu cảnh, hoặc d&agrave;nh cho những người th&iacute;ch c&aacute;c loại c&acirc;y nhỏ nhắn v&agrave; đ&aacute;ng y&ecirc;u. C&acirc;y ph&ugrave; hợp để b&agrave;n l&agrave;m việc, trang tr&iacute; qu&aacute;n, trồng tại c&aacute;c &ocirc; nhỏ ở cửa sổ, ban c&ocirc;ng&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sedum-com.jpg" style="height:300px; width:225px" /></p>
               
               <h3>TƯỚI NƯỚC</h3>
               
               <p>Trời m&ugrave;a lạnh hoặc để trong văn ph&ograve;ng k&iacute;n c&oacute; điều h&ograve;a th&igrave; 1 tuần chỉ n&ecirc;n tưới 1 lần, mỗi lần đủ ẩm đất l&agrave; được. Nếu để ngo&agrave;i trời th&igrave; n&ecirc;n che đi để tr&aacute;nh mưa v&agrave; 1 tuần c&oacute; thể tưới 2 lần, trời n&oacute;ng cũng c&oacute; thể tưới 2 lần t&ugrave;y theo điệu kiện đất v&agrave; c&acirc;y c&oacute; bị tho&aacute;t hơi nước kh&ocirc;ng để bạn c&oacute; thể tự căn chỉnh&nbsp;lượng nước.</p>
               
               <h3>ĐẤT</h3>
               
               <p>L&agrave; loại c&acirc;y nhỏ kh&ocirc;ng ưa được nước n&ecirc;n đất của Sedum Cơm phải xốp, c&oacute; khả năng tho&aacute;t nước tốt nhưng vẫn c&oacute; đủ dưỡng chất, bạn c&oacute; thể trộn đất với tro, chấu, sơ dừa th&ecirc;m xỉ than đu rồi đập nhỏ để tạo sự th&ocirc;ng tho&aacute;ng cho đất.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>C&acirc;y th&iacute;ch &aacute;nh s&aacute;ng của buổi sớm cũng như chiều tối, hoặc &aacute;nh s&aacute;ng trời m&ugrave;a đ&ocirc;ng v&agrave; thu, tr&aacute;nh để c&acirc;y giữa trời nắng gắt m&ugrave;a h&egrave; c&acirc;y dễ bị sốc nhiệt m&agrave; chết.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y sen đ&aacute; Sedum Cơm c&oacute; thể nh&acirc;n giống bằng l&aacute;, gi&acirc;m c&agrave;nh, t&aacute;ch bụi, c&aacute;ch tốt nhất l&agrave; t&aacute;ch bụi v&igrave; c&acirc;y tương đối nhỏ n&ecirc;n c&aacute;ch biện ph&aacute;p nh&acirc;n giống bằng l&aacute; v&agrave; cắt từng c&agrave;nh nhỏ hơi kh&oacute;&nbsp;</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-05-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Lục Bình',
               'slug' => Str::of('Sen Đá Lục Bình')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/PO0uVRibuRFpaMwSAThKNtjNYUZ7rMoA.jpg',
               'feature_image_name' => 'sen-da-luc-binh-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Lục Bình có màu xanh tươi mát mang đến cho không gian của bạn sự thoải mái, cây phù hợp để bàn, trang trí quán cà phê...Cây mang ý nghĩa giữ chặt những gì mình đạt được.',
               'content' => '<p>Sen đ&aacute; Lục B&igrave;nh l&agrave; một trong những giống mới từ b&ecirc;n nước ngo&agrave;i được đưa về Việt Nam, nay đ&atilde; được nh&acirc;n giống th&agrave;nh c&ocirc;ng, c&acirc;y c&oacute; m&agrave;u xanh tươi m&aacute;t c&aacute;nh mỏng mềnh, đem đến sự tươi m&aacute;t cho kh&ocirc;ng gian. C&acirc;y ph&ugrave; hợp với người mệnh mộc v&agrave; mệnh hỏa, với &yacute; nghĩa phong thủy giữ chắc những g&igrave; m&igrave;nh đ&atilde; đạt được.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-luc-binh.jpg" style="height:300px; width:277px" /></p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Những c&acirc;y sen đ&aacute; n&oacute;i chung thường loại c&oacute; m&agrave;u sắc như đỏ, đen, hồng l&agrave; những loại cần nhiều &aacute;nh s&aacute;ng để n&ecirc;n m&agrave;u, c&ograve;n những loại c&oacute; m&agrave;u xanh như sen đ&aacute; Lục B&igrave;nh, sen đ&aacute; Đất, sen đ&aacute; Th&aacute;i, sen đ&aacute; Xanh&hellip; Th&igrave; cần &iacute;t &aacute;nh s&aacute;ng hơn bạn chỉ cần để cửa sổ, ban c&ocirc;ng c&oacute; &aacute;nh s&aacute;ng nhẹ l&agrave; được. Nếu để trong nh&agrave; th&igrave; n&ecirc;n 2 &ndash; 3 ng&agrave;y mang ra ngo&agrave;i trời, đặc điểm của sen đ&aacute; l&agrave; cần th&ecirc;m cả sự th&ocirc;ng tho&aacute;ng y&ecirc;u tố n&agrave;y gi&uacute;p c&acirc;y kh&iacute;t l&aacute;.</p>
               
               <h3>NƯỚC</h3>
               
               <p>V&igrave; c&acirc;y l&aacute; kh&aacute; mỏng n&ecirc;n lượng nước trữ cũng kh&ocirc;ng được nhiều như một số loại sen đ&aacute; kh&aacute;c, tuy nhi&ecirc;n th&igrave; đ&atilde; thuộc họ sen đ&aacute; th&igrave; đều c&oacute; khả năng sinh tồn ở m&ocirc;i trường thiếu nước, n&ecirc;n bạn chỉ cần tưới 1 lần một tuần nếu để trong nh&agrave; v&agrave; 1 tuần tưới 2 lần nếu để ngo&agrave;i trời, hoặc nơi c&oacute; khả năng tho&aacute;t nước, bốc hơi nước, n&oacute;ng&hellip;</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất l&agrave; điều kh&aacute; quan trọng loại đất m&ugrave;n th&igrave; gi&uacute;p c&acirc;y ph&aacute;t triển nhanh, loại đất nhiều xỉ than th&igrave; gi&uacute;p tho&aacute;t nước tốt, n&ecirc;n tối ưu nhất l&agrave; bạn n&ecirc;n trộn 2 loại n&agrave;y với nhau c&ograve;n kh&ocirc;ng c&oacute; điều kiện bạn c&oacute; thể trồng nguy&ecirc;n bằng xỉ than đậm nhỏ lọc mịn, hoặc đất m&ugrave;n tribat b&aacute;n ngo&agrave;i tiệp, nhưng tuyệt đối kh&ocirc;ng n&ecirc;n trồng nguy&ecirc;n đất vườn đất vườn giữ nước rất l&acirc;u n&ecirc;n nếu kh&ocirc;ng ch&uacute; &yacute; c&acirc;y c&oacute; thể chết bất cứ l&uacute;c n&agrave;o.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y sen đ&aacute; Lục B&igrave;nh c&oacute; thể nh&acirc;n giống theo nhiều phương ph&aacute;p kh&aacute;c nhau như l&aacute;, gi&acirc;m c&agrave;nh, hạt đều được.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-02-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Ngọc Đuốc',
               'slug' => Str::of('Sen Đá Ngọc Đuốc')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/gnROi023XtMRDMcmg0nk8zYqbUR72W7s.jpg',
               'feature_image_name' => 'sen-da-ngoc-duoc-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá Ngọc Guốc là một trong những loại sen đá có hình dáng khá độc đáo, nếu bạn vặt 1 chiếc lá của cây ra rồi đặt xuống đất thì sẽ thấy nó giống như hình chiếc guốc chính vì vậy mà cây có tên là sen đá Ngọc Guốc, cây mang ý nghĩa cho một tình yêu và tình bạn vĩnh cửu, rất thích hợp dành cho những bạn thích sự độc đáo và mới lạ, cây phù hợp làm cây cảnh để bàn, tặng nhau trong các dịp sinh nhật…',
               'content' => '<p>Sen đ&aacute; Ngọc Guốc mang &yacute; nghĩa cho một t&igrave;nh y&ecirc;u v&agrave; t&igrave;nh bạn vĩnh cửu, rất th&iacute;ch hợp d&agrave;nh cho những bạn th&iacute;ch sự độc đ&aacute;o v&agrave; mới lạ, c&acirc;y ph&ugrave; hợp l&agrave;m c&acirc;y cảnh để b&agrave;n, tặng nhau trong c&aacute;c dịp sinh nhật...</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-ngoc-duoc.jpg" style="height:300px; width:300px" /></p>
               
               <h3>ĐẤT</h3>
               
               <p>Loại đất ph&ugrave; hợp trồng sen đ&aacute; Ngọc Guốc l&agrave; loại đất tơi xốp c&oacute; khả năng tho&aacute;t nước tốt, độ m&ugrave;n cao, nhất l&agrave; tr&ecirc;n bền mặt v&igrave; l&aacute; tiếp x&uacute;c s&aacute;t với đất nếu mặt tr&ecirc;n kh&ocirc;ng tho&aacute;t nước nhanh c&oacute; thể dẫn đến t&igrave;nh trạng l&aacute; bị ẩm l&acirc;u v&agrave; thối. Bạn c&oacute; thể mua loại đất tribat mặt tr&ecirc;n c&oacute; thể dải sỏi để dễ tho&aacute;t nước, hoặc lấy xỉ than tổ ong đun rồi đập vụn rồi trộn với tro.</p>
               
               <h3>NƯỚC</h3>
               
               <p>Chỉ cần 1 tuần bạn tưới nước 1 lần nếu để trong điều kiện &iacute;t bị mất nước v&agrave; thời tiết kh&ocirc;ng kh&ocirc; v&agrave; n&oacute;ng, c&ograve;n kh&ocirc;ng c&oacute; thể l&agrave; 2 -3 lần nếu bạn để c&acirc;y ngo&agrave;i trời v&agrave; t&ugrave;y theo thời tiết, c&aacute;ch tốt nhất bạn h&atilde;y nh&igrave;n l&aacute; để tưới nước khi n&agrave;o l&aacute; nhăn, quắt v&agrave; kh&ocirc;ng mọng th&igrave; l&agrave; đang thiếu nước c&ograve;n l&agrave; vẫn căng mọng th&igrave; kh&ocirc;ng cần tưới.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Sen đ&aacute; Ngọc Guốc cần &aacute;nh s&aacute;ng để c&oacute; thể ph&aacute;t triển v&agrave; đẹp nhưng chỉ cần &aacute;nh nắng buổi s&aacute;ng sớm hay l&uacute;c chiều muộn l&agrave; đủ, tr&aacute;nh &aacute;nh nắng buổi trưa m&ugrave;a h&egrave; để c&acirc;y kh&ocirc;ng bị sốc nhiệt m&agrave; chết, c&ograve;n m&ugrave;a thu v&agrave; đ&ocirc;ng th&igrave; bạn c&oacute; thể để thoải m&aacute;i.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>C&acirc;y c&oacute; thể nh&acirc;n giống bằng l&aacute;, gi&acirc;m c&agrave;nh hoặc trồng bằng hạt đều được.</p>
               
               <h3>PH&Acirc;N B&Oacute;N</h3>
               
               <p>Nếu để c&acirc;y ph&aacute;t triển nhanh bạn c&oacute; thể b&oacute;n th&ecirc;m loại ph&acirc;n tan chậm hoặc tr&ecirc;n th&ecirc;m v&agrave;o đất nhưng kh&ocirc;ng n&ecirc;n qu&aacute; nhiều, v&agrave; n&ecirc;n c&aacute;ch 3 &ndash; 6 th&aacute;ng mới b&oacute;n một lần tr&aacute;nh trường hợp l&agrave;m c&acirc;y sốc.</p>',
               'user_id' => '3',
               'category_id' => '4',
               'status' => '1',
               'created_at' => '2020-11-29 15:49:30',
               'updated_at' => Carbon::now(),   
            ],

            //CÂY CẢNH SEN ĐÁ
            [ 
               'name' => 'Cây Sen Đá Sedum Dạ Quang',
               'slug' => Str::of('Cây Sen Đá Sedum Dạ Quang')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/UzvF8lkEnH85TKWgcBzwQ5H9znrENTTP.jpg',
               'feature_image_name' => 'sedum-da-quang-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá sedum dạ quang phù để bàn, trang trí quá cà phê, góc học tập, trồng với tiểu cảnh, terrarium...Cây mang ý nghĩa cho một tình yêu, tình bạn vĩnh cửu không bao giờ phai nhòa dù có khó khăn như màn đêm bao phủ không còn thấy đường thì vẫn có người dẫn lỗi để có thể dễ dàng vượt qua.',
               'content' => '<p>Sedum dạ quang thuộc d&ograve;ng sedum l&agrave;&nbsp;d&ograve;ng bao gồm những c&acirc;y c&oacute; h&igrave;nh d&aacute;ng nhỏ x&iacute;u v&agrave; cực kỳ đ&aacute;ng y&ecirc;u. D&ograve;ng sedum cũng thuộc họ sen đ&aacute;, c&acirc;y mọc th&agrave;nh những bụi nhỏ c&oacute; h&igrave;nh d&aacute;ng dạng đ&agrave;i, m&agrave;u sắc s&aacute;ng nội bật nh&igrave;n rất bắt mắt. Ch&iacute;nh v&igrave; thế n&oacute; c&oacute; t&ecirc;n gọi l&agrave;&nbsp;<strong>sedum dạ quang</strong>.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sedum-da-quang.jpg" style="height:327px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; SEDUM DẠ QUANG</h2>
               
               <p>Sen đ&aacute; sedum dạ quang cũng thuộc họ sen đ&aacute;<strong>&nbsp;</strong>n&ecirc;n c&aacute;ch chăm s&oacute;c v&ocirc; c&ugrave;ng đơn giản v&agrave; dễ d&agrave;ng. Bạn chỉ cần lưu &yacute; một ch&uacute;t về &aacute;nh s&aacute;ng v&agrave; nước.</p>
               
               <h3>TƯỚI NƯỚC</h3>
               
               <p>Sen đ&aacute; Sedum dạ quang thuộc dạng đ&agrave;i v&agrave; c&oacute; khả năng trữ nước ở l&aacute; v&agrave; th&acirc;n, n&ecirc;n bạn kh&ocirc;ng cần tưới nước nhiều, chỉ cần một tuần tưới 1 lần, nếu thời tiết kh&ocirc; n&oacute;ng th&igrave; c&oacute; thể 2 lần. Hạn chế tưới trực tiếp n&ecirc;n l&aacute;, v&igrave; <strong>sedum dạ quang&nbsp;</strong>c&oacute; nhiều c&acirc;y v&agrave; lại dạng đ&agrave;i n&ecirc;n nước đọng tr&ecirc;n l&aacute; rất l&acirc;u kh&ocirc; dẫn đến thối l&aacute;.</p>
               
               <h3>ĐẤT</h3>
               
               <p>Đất trồng ph&ugrave; hợp với sedum dạ quang l&agrave; loại đất dễ tho&aacute;t nước v&agrave; c&oacute; độ m&ugrave;n cao, bạn c&oacute; thể trộn đất trồng với sơ dừa, tro, xỉ than đun rồi đập nhỏ để lấy sự th&ocirc;ng tho&aacute;ng cho đất c&oacute; thể trộn th&ecirc;m ph&acirc;n b&ograve; kh&ocirc; hoặc một số thuốc chống nấm mốc.</p>
               
               <h3>&Aacute;NH S&Aacute;NG</h3>
               
               <p>Sedum dạ quang ưa s&aacute;ng nhưng kh&ocirc;ng th&iacute;ch &aacute;nh s&aacute;ng qu&aacute; gắt v&agrave; nắng. N&ecirc;n che 30% &aacute;nh s&aacute;ng bằng lưới khi c&oacute; &aacute;nh nắng buổi trưa. C&acirc;y th&iacute;ch nhất &aacute;nh s&aacute;ng buổi sớm v&agrave; xế chiều.</p>
               
               <h3>NH&Acirc;N GIỐNG</h3>
               
               <p>V&igrave; c&acirc;y mọc dạng bụi n&ecirc;n bạn c&oacute; thể t&aacute;ch nhỏ ra trồng v&agrave;o khu đất rộng để nh&acirc;n giống, đ&oacute; l&agrave; c&aacute;ch nh&acirc;n giống an to&agrave;n v&agrave; tỷ lệ th&agrave;nh c&ocirc;ng cao. Ngo&agrave;i ra bạn c&oacute; thể nh&acirc;n giống bằng c&aacute;ch gi&acirc;m c&agrave;nh.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Đô Là Trắng',
               'slug' => Str::of('Sen Đá Đô Là Trắng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/9ZpbCGHNl0nVGpBnaTbX2517jcLrRD86.jpg',
               'feature_image_name' => 'sen-da-do-la-trang-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây Sen Đá Đô La Trắng có ý nghĩa mang đến tiền bạc cho gia chủ. Cây phù hợp để bàn làm việc, bàn học, trang trí quán cà phê, trồng kèm với các loại sen đá khác.',
               'content' => '<p>L&agrave; loại c&acirc;y c&oacute; sức sống kh&aacute; mạnh liệt, với những chiếc l&aacute; nhỏ h&igrave;nh tr&ograve;n, giữa l&aacute; thường c&oacute; m&agrave;u xanh b&ecirc;n ngo&agrave;i c&oacute; viền trắng, l&aacute; cứng c&aacute;p nh&igrave;n rất bắt mắt, th&acirc;n&nbsp;<strong>sen đ&aacute; đ&ocirc; l&aacute; trắng</strong>&nbsp;c&oacute; m&agrave;u đỏ thẫm, m&agrave; đen dần phần gốc khi c&acirc;y trưởng th&agrave;nh v&agrave; sống l&acirc;u năm. C&acirc;y c&oacute; &yacute; nghĩa mang đến tiền bạc cho gia chủ.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/do-la-trang.jpg" style="height:381px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; Đ&Ocirc; LA TRẮNG</h2>
               
               <p>L&agrave; loại c&acirc;y rất dễ sống 1 tuần bạn c&oacute; thể tưới nước 2 lần, v&agrave; bạn cũng c&oacute; thể tưới trực tiếp l&ecirc;n c&acirc;y, kh&ocirc;ng cần phải tưới ngấm ngược v&agrave; như c&aacute;c loại sen đ&aacute;&nbsp;kh&aacute;c. N&ecirc;n để c&acirc;y ở nơi c&oacute; &aacute;nh nắng buổi sớm, tuy nhi&ecirc;n c&acirc;y cũng c&oacute; thể chịu được &aacute;nh nắng gắt, bạn c&oacute; thể để c&acirc;y ngo&agrave;i trời với lượng &aacute;nh s&aacute;ng nhiều. Nếu để trong văn ph&ograve;ng hoặc nơi kh&ocirc;ng c&oacute; &aacute;nh nắng th&igrave; 2 ng&agrave;y bạn n&ecirc;n đem ra phơi nắng một lần để c&acirc;y c&oacute; m&agrave;u sắc đẹp v&agrave; tươi tắn.</p>
               
               <h3><strong>NHIỆT ĐỘ</strong></h3>
               
               <p>Nhiệt độ ph&ugrave; hợp l&agrave; từ 15 &ndash; 35 độ, nếu thời tiết xuống dưới 10 độ hoặc lớn hơn 40 độ th&igrave; bạn n&ecirc;n mang c&acirc;y v&agrave;o trong nh&agrave; để. Lạnh qu&aacute; th&igrave; c&oacute; thể thắp đ&egrave;n cho c&acirc;y.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>Bạn c&oacute; thể nh&acirc;n giống sen đ&aacute; đ&ocirc; la trắng bằng c&aacute;ch gi&acirc;m c&agrave;nh. Cắt c&aacute;c c&agrave;nh nhỏ phơi cho kh&ocirc;ng vết nhựa rồi cắm xuống đất, hoặc để nơi r&acirc;m m&aacute;t để mọc rễ rồi cắm xuống đất.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-12-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Nhung Viền Đỏ',
               'slug' => Str::of('Sen Đá Nhung Viền Đỏ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/Cd2VRIj4v4m4ekBlqSvKYrdQOgvBcTQ6.jpg',
               'feature_image_name' => 'sen-da-nhung-vien-do-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá nhung viền đỏ có lớp lông nhỏ và nhiều trên lá, sờ lá rất mượt và mền như nhung. Cây mang ý nghĩa một cuộc sống đầy đủ trong nhung gấm lụa là. Cây phù hợp để bàn làm việc, bàn học, trang trí quán cà phê, bàn tiếp khách, lễ tân..',
               'content' => '<p>Sen đ&aacute; nhung viền đỏ l&agrave; sản phẩm kh&aacute; giống với nhung viền đen, tuy nhi&ecirc;n th&igrave; nhung viền đỏ c&oacute; l&aacute; nhọn hơn v&agrave; l&aacute; b&eacute; hơn so với nhung viền đen. L&aacute; c&acirc;y cũng c&oacute; l&ocirc;ng m&agrave;u trắng nhưng nhỏ v&agrave; mịn hơn sen đ&aacute; nhung viền đen&nbsp;&nbsp;M&agrave;u đỏ đậm nhạt của l&aacute; thể hiện t&igrave;nh trạng c&acirc;y đủ nắng hay thiếu nắng. C&acirc;y mang &yacute; nghĩa một cuộc sống nhung gấm lụa l&agrave;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/nhung-vien-do.jpg" style="height:309px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; NHUNG VIỀN ĐỎ</h2>
               
               <p>L&aacute; của sen đ&aacute; nhung viền đỏ ch&iacute;nh l&agrave; giấy quỳ b&aacute;o hiệu t&igrave;nh trạng của c&acirc;y. Nếu c&acirc;y thiếu nước l&aacute; sẽ quắt v&agrave; kh&ocirc;ng được căng mọng, nếu c&acirc;y thiếu nắng viền đ&oacute; v&agrave; m&agrave;u l&aacute; sẽ nhạt dần v&agrave; rủ xuống gần mặt đất. Dựa v&agrave;o đ&acirc;y bạn c&oacute; thể điều chỉnh được nước v&agrave; &aacute;nh nắng cho&nbsp;<em><strong>sen đ&aacute; nhung viền đỏ</strong></em>.</p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>1 tuần bạn tưới nước một lần, kh&ocirc;ng tưới v&agrave;o c&acirc;y v&agrave; l&aacute; c&acirc;y, c&aacute;ch tưới tốt nhất l&agrave; ngấm ngược để chậu c&acirc;y v&agrave; bồn, khay nước c&oacute; mực nước bằng 1/3 chiều cao chậu để trong 40s th&igrave; nhấc ra, v&igrave; ở dưới đ&aacute;y chậu c&oacute; lỗ tho&aacute;t nước n&oacute; sẽ ngấm ngược nước ở dưới l&ecirc;n, sẽ đảm bảo đất kh&ocirc;ng bị ẩm qu&aacute;.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>Bạn để nơi c&oacute; &aacute;nh s&aacute;ng trực tiếp hoặc c&oacute; m&aacute;i che 30% l&agrave; tốt nhất, n&ecirc;n tr&aacute;nh để c&acirc;y&nbsp;<strong>sen đ&aacute; nhung viền đỏ</strong>&nbsp;v&agrave;o giữa trưa nắng, trời m&ugrave;a h&egrave; như vậy sẽ l&agrave;m c&acirc;y bị h&eacute;o. &Aacute;nh nắng rất tốt cho c&acirc;y, kh&ocirc;ng chỉ gi&uacute;p c&acirc;y quang hợp m&agrave; n&oacute; c&ograve;n tạo n&ecirc;n sắc đẹp cho l&aacute;, v&agrave; khử c&aacute;c nấm mốc ở đất trồng.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-12-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Lá Tim',
               'slug' => Str::of('Sen Đá Lá Tim')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/tkRp1s7s35lGrNeatznNHBYUMPDro1wN.jpg',
               'feature_image_name' => 'sen-da-la-tim-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây sen đá lá tim có lá dày, khi mọc lên tường mọc 2 lá một giống hệt hình trái tim có màu xanh xẫm nhìn cây rất cứng cáp và có sức sống.',
               'content' => '<p>Sen đ&aacute; l&aacute; tim biểu tượng cho t&igrave;nh y&ecirc;u vĩnh cửu. L&agrave; c&acirc;y thuộc họ bỏng mọng nước c&oacute; khả năng t&iacute;ch trữ nước trong l&aacute; để chịu nắng, kh&ocirc; k&eacute;o d&agrave;i cả th&aacute;ng, nhưng c&acirc;y lại kh&ocirc;ng chịu được ẩm ướt 4 -5 li&ecirc;n tiếp. C&acirc;y sen đ&aacute; l&aacute; tim c&oacute; l&aacute; d&agrave;y, khi mọc l&ecirc;n tường mọc 2 l&aacute; một giống hệt h&igrave;nh tr&aacute;i tim c&oacute; m&agrave;u xanh xẫm nh&igrave;n c&acirc;y rất cứng c&aacute;p v&agrave; c&oacute; sức sống.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-la-tim.jpg" style="height:264px; width:400px" /></p>
               
               <h2>CHĂM S&Oacute;C SEN Đ&Aacute; L&Aacute; TIM</h2>
               
               <p>Như m&igrave;nh đ&atilde;&nbsp;chia sẻ ở tr&ecirc;n th&igrave;&nbsp;<em><strong><a href="https://webcaycanh.com/sen-da-la-tim/">s</a>en đ&aacute; l&aacute; tim</strong></em>&nbsp;l&agrave; loại c&acirc;y mọng nước, giống như sương rồng c&oacute; khả năng t&iacute;ch trữ nước để c&oacute; thể chịu được kh&ocirc; hạn v&agrave; nắng n&oacute;ng, tuy nhi&ecirc;n n&oacute; lại kh&ocirc;ng chịu được c&aacute;i r&eacute;t v&agrave; mưa triền mi&ecirc;n. V&igrave; vậy điều kiện th&iacute;ch hợp nhất cho sen đ&aacute; l&aacute; tim l&agrave;:</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>Sen đ&aacute; l&aacute; tim cần &aacute;nh s&aacute;ng để quang hợp với n&oacute; cũng như <em>c&aacute;c loại sen đ&aacute;</em>&nbsp;kh&aacute;c th&iacute;ch &aacute;nh s&aacute;ng buổi sớm, c&oacute; thể chịu được &aacute;nh nắng trực tiếp nhưng kh&ocirc;ng n&ecirc;n để c&acirc;y ra &aacute;nh nắng qu&aacute; gắt như nắng m&ugrave;a h&egrave; buổi trưa. Nhiệt độ th&iacute;ch hợp l&agrave; 15 &ndash; 35 độ, vậy n&ecirc;n để c&acirc;y v&agrave;o chỗ c&oacute; m&aacute;i che nhưng vấn đảm bảo &aacute;nh s&aacute;ng như cửa sổ ban c&ocirc;ng, vừa c&oacute; &aacute;nh nắng m&agrave; tr&aacute;nh được mưa b&atilde;o.</p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>Đối với nước th&igrave; rất cần cho c&acirc;y để gi&uacute;p c&aacute;c chất kho&aacute;ng, dinh dưỡng ở đất vận chuyển từ rễ đưa l&ecirc;n nu&ocirc;i c&acirc;y, nhưng bản chỉ cần tưới 1 tuần/lần l&agrave; đủ nếu trời n&oacute;ng, thời tiết kh&ocirc; c&oacute; thể l&agrave; 2 lần.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Chuỗi Ngọc Bi',
               'slug' => Str::of('Sen Đá Chuỗi Ngọc Bi')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/wbovBh7bgzyILdbgUHyus2v4boWxrCxn.jpg',
               'feature_image_name' => 'sen-da-chuoi-ngoc-bi-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá chuỗi ngọc bi mang đến sự đầy đủ, lúc nào cũng căng tròn và mũn mĩn. Cây phù hợp để ở cửa sổ, hiên trước cửa nhà, sảnh khách sạn...',
               'content' => '<p>Mũm mĩn v&agrave; đầy đặn đ&oacute; l&agrave; 2 từ rất hợp l&yacute; v&agrave; ch&iacute;nh x&aacute;c để mi&ecirc;u tả sen đ&aacute; chuỗi ngọc bi. L&agrave; một trong những loại sen đ&aacute; khi lớn c&oacute; khả năng rủ xuống v&agrave; ra hoa, n&ecirc;n n&oacute; khiến nhiều người th&iacute;ch ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n. C&acirc;y ph&ugrave; hợp trồng trong chậu treo để ngo&agrave;i h&agrave;ng lang, cửa sổ, s&acirc;n&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/chuoi-ngoc-bi.jpg" style="height:550px; width:550px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>Một tuần bạn chỉ cần tưới nước một lần cho c&acirc;y để đam bảo sự sinh trưởng v&agrave; ph&aacute;t triển tốt.</p>
               
               <h3><strong>ĐẤT TRỒNG</strong></h3>
               
               <p>Loại tơi xốp dễ tho&aacute;t nước, c&oacute; thể bạn trộn th&ecirc;m với tro, chấu, m&ugrave;n để c&oacute; loại đất ưa th&iacute;ch cho sen đ&aacute; chuỗi ngọc bi.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>&Aacute;nh s&aacute;ng lu&ocirc;n rất cần đối với c&aacute;c loại c&acirc;y v&agrave; <strong><em>sen đ&aacute; chuỗi ngọc bi&nbsp;</em></strong>cũng kh&ocirc;ng l&agrave; ngoại lệ, n&oacute; th&iacute;ch &aacute;nh s&aacute;ng nhất l&agrave; &aacute;nh s&aacute;ng buổi sớm, nhưng n&ecirc;n tr&aacute;nh những nơi c&oacute; &aacute;nh nắng gắt như buổi trưa trời m&ugrave;a h&egrave; sẽ khiến c&acirc;y nhanh ch&oacute;ng kh&ocirc; h&eacute;o.</p>
               
               <h3><strong>NH&Acirc;N GIỐNG</strong></h3>
               
               <p>L&agrave; loại ph&aacute;t triển rất nhanh sen đ&aacute; chuỗi ngọc bi c&oacute; thể nh&acirc;n giống từ l&aacute; hoặc gi&acirc;m c&agrave;nh đều c&oacute; thể ph&aacute;t triển th&agrave;nh c&acirc;y.</p> ',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Móng Rồng Viền Trắng',
               'slug' => Str::of('Sen Đá Móng Rồng Viền Trắng')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/mWMSFOSrUvsVum1kZbcEv1X0Pur1J3oQ.jpg',
               'feature_image_name' => 'mong-rong-vien-trang-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá móng rồng viền trắng hay còn gọi là sen ngựa vằn, lá dài và nhọn ở đầu, mọc xung quanh trục, trên lá còn có các viền trắng nhỏ giống như chú ngựa vằn. Cây phù hợp để bàn làm viêc, bàn học, trang trí bàn cà phê...',
               'content' => '<p>Sen đ&aacute; m&oacute;ng rồng viền trắng hay c&ograve;n gọi l&agrave; sen ngựa vằn, l&aacute; d&agrave;i v&agrave; nhọn ở đầu, mọc xung quanh trục, tr&ecirc;n l&aacute; c&ograve;n c&oacute; c&aacute;c viền trắng nhỏ giống như ch&uacute; ngựa vằn. C&acirc;y c&oacute; hoa m&agrave;u nhưng kh&ocirc;ng nở to hoa mọc th&agrave;nh ch&ugrave;m mỗi hoa chỉ sống được tầm 2 ng&agrave;y nhưng ra li&ecirc;n tiếp nhau, hoa n&agrave;y t&agrave;n hoa kia lại nở suốt một m&ugrave;a. C&acirc;y mang&nbsp;&yacute; nghĩa&nbsp;cho&nbsp;sự bảo vệ v&agrave; che chở, c&acirc;y ph&ugrave; hợp để b&agrave;n l&agrave;m việc, b&agrave;n học, tiểu cảnh&hellip;</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/mong-rong-vien-trang.jpg" style="height:533px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; M&Oacute;NG RỒNG VIỀN TRẮNG</h2>
               
               <p><strong>Sen đ&aacute; m&oacute;ng rồng viền trắng&nbsp;</strong>cũng thuộc loại chăm s&oacute;c tương tự như xương rồng, n&oacute; cần nhiều &aacute;nh nắng, kh&ocirc;ng cần nhiều nước, n&ecirc;n bạn chăm s&oacute;c loại c&acirc;y sen đ&aacute; m&oacute;ng rồng viền trắng n&agrave;y rất đơn giản v&agrave; kh&ocirc;ng tốn qu&aacute; nhiều c&ocirc;ng sức, c&oacute; thể 1 tuần bạn chỉ cần tưới nước 1 lần.</p>
               
               <p>C&aacute;ch tưới nước tốt nhất cho sen đ&aacute;&nbsp;&nbsp;l&agrave; bạn tưới ở m&eacute;p chậu để nước ngấm v&agrave; c&acirc;y hoặc tưới theo c&aacute;ch ngấm ngược l&agrave; để chậu v&agrave;o khay c&oacute; mực nước cao bằng 1/3 chiều cao của chậu để trong 30s rồi nhấc ra. Bạn c&oacute; thể kiểm tra xem nước đ&atilde; ngấm v&agrave;o đất chưa ( v&igrave; c&oacute; thể n&oacute; bị tắc lỗ tho&aacute;t nước ở dưới đ&aacute;y nước kh&ocirc;ng ngấm được l&ecirc;n ) bằng c&aacute;ch d&ugrave;ng que tăm kh&ocirc; cắm v&agrave;o chậu.</p>
               
               <p>H&atilde;y nhớ cho n&oacute; tắm nắng thường xuy&ecirc;n. Nếu bạn để trong văn ph&ograve;ng th&igrave; 2 -3 ng&agrave;y n&ecirc;n cho c&acirc;y ra nắng một lần.</p>
               
               <p>Lưu &yacute;: Tr&aacute;nh ng&agrave;y n&agrave;o cũng tưới nước hoặc vảy nước l&ecirc;n l&aacute; v&igrave; l&aacute;&nbsp;<strong><em>m&oacute;ng rồng viền trắng</em></strong>&nbsp;ở kẽ nước rất kh&oacute; tho&aacute;t nước, để nước l&acirc;u trong đ&oacute; sẽ dẫn đến thối l&aacute;. Khi l&aacute; kh&ocirc;ng được căng mọc, h&eacute;o quắt l&agrave; biểu hiện thiếu nước. L&aacute; thưa m&agrave;u kh&ocirc;ng đẹp l&agrave; thiếu nắng v&agrave; thi&ecirc;u th&ocirc;ng tho&aacute;ng.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-09-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Thạch Bích Cánh Bướm',
               'slug' => Str::of('Sen Đá Thạch Bích Cánh Bướm')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/pwxeOvH9dOtG3qFIk0fuXIFz5WEiJjxg.jpg',
               'feature_image_name' => 'sen-da-thach-bich-canh-buom-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá thạch bích cánh bướm có ý nghĩa mạng đến sự giàu sang mà chung thủy. Cây phù để bàn làm việc, bàn học, tiểu cảnh...',
               'content' => '<p>Sen đ&aacute; thạch b&iacute;ch c&aacute;nh bướm l&agrave; c&acirc;y thuộc loại họ bỏng, c&acirc;y xanh tốt quanh năm, l&aacute; c&oacute; m&agrave;u xanh, nhẵn, b&oacute;ng, h&igrave;nh dạng giống c&aacute;nh bướm, viền l&aacute; c&oacute; m&agrave;u t&iacute;m, c&acirc;y thường ra hoa v&agrave;o m&ugrave;a xu&acirc;n hoặc cuối đ&ocirc;ng. Sen đ&aacute; thạch b&iacute;ch c&aacute;nh bướm mang đến t&agrave;i lộc, gi&agrave;u c&oacute; v&agrave; ph&uacute; qu&yacute;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-thach-bich-canh-buom.jpg" style="height:561px; width:480px" /></p>
               
               <h3><strong>NƯỚC</strong></h3>
               
               <p>Nước l&agrave; một trong những yếu tố kh&oacute; khăn v&agrave; kh&oacute; điều ch&iacute;nh nhất đối với tất cả loại sen đ&aacute;. Sen đ&aacute; hường l&agrave; loại mọng nước ch&uacute;ng kh&ocirc;ng cần qu&aacute; nhiều nước vẫn c&oacute; thể sống tốt. Bạn c&oacute; thể tưới trực tiếp v&agrave;o c&acirc;y sen đ&aacute; thạch b&iacute;ch c&aacute;nh bướm, nếu l&uacute;c c&oacute; hoa th&igrave; bạn n&ecirc;n bớt tưới v&agrave; kh&ocirc;ng tưới l&ecirc;n hoa. Ngo&agrave;i ra bạn c&oacute; thể tưới theo c&aacute;ch ngấm ngược, c&aacute;ch n&agrave;y l&agrave; c&aacute;ch tốt nhất v&agrave; &aacute;p dụng cho tất cả c&aacute;c loại sen đ&aacute;.</p>
               
               <h3><strong>C&Aacute;CH TƯỚI NƯỚC</strong></h3>
               
               <p>Bạn đặt chậu c&acirc;y v&agrave;o khay nước c&oacute; mực nước cao bằng 1/3 chiều cao chậu. Bạn để vậy trong 30s nhấc ra. Chỉ cần l&agrave;m thế 1 tuần/ lần l&agrave; c&acirc;y c&oacute; thể sống tốt. Nếu trời n&oacute;ng, kh&ocirc; bạn c&oacute; thể tưới tăng th&ecirc;m 1 lần l&agrave; 2 lần tr&ecirc;n tuần l&agrave; đủ.</p>
               
               <h3><strong>&Aacute;NH S&Aacute;NG</strong></h3>
               
               <p>&Aacute;nh s&aacute;ng quyết định mầu sắc của&nbsp;l&aacute; c&acirc;y m&agrave;u xanh đậm hay nhạt, viền l&aacute; c&oacute; mầu t&iacute;m hay hồng. Nếu c&acirc;y c&agrave;ng được tiếp x&uacute;c nhiều với &aacute;nh s&aacute;ng th&igrave; m&agrave;u l&aacute; c&agrave;ng đẹp.</p>
               
               <p>Đối với c&acirc;y để trong văn ph&ograve;ng 2 -3 ng&agrave;y bạn lại cho c&acirc;y tắm nắng 1 lần mỗi lần 8h nh&eacute;. Hoặc bạn c&oacute; thể l&agrave;m theo c&aacute;ch trước khi ra về để ở nơi c&oacute; &aacute;nh s&aacute;ng b&igrave;nh m&igrave;nh, v&agrave; s&aacute;ng mai đi l&agrave;m bạn lại đem c&acirc;y v&agrave;o. Tuy nhi&ecirc;n ch&uacute; &yacute; kh&ocirc;ng để c&acirc;y ở &aacute;nh nắng qu&aacute; gắt sẽ l&agrave;m ch&aacute;y l&agrave;, như nhưng thời điểm 12h trưa v&agrave; m&ugrave;a h&egrave;.</p>
               
               <h3><strong>ĐẤT TRỒNG</strong></h3>
               
               <p>Ngo&agrave;i loại đất chua l&agrave; kh&ocirc;ng th&iacute;ch hợp với sen đ&aacute; thạch b&iacute;ch th&igrave; tất cả đều ph&ugrave; hợp. Tuy nhi&ecirc;n nếu bạn trồng trong chậu th&igrave; diện t&iacute;ch chậu nhỏ n&ecirc;n cần nhiều dinh dưỡng hơn v&agrave; cần phải thay đất mỗi năm.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-10-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Tứ Phương',
               'slug' => Str::of('Sen Đá Tứ Phương')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/BAMEyDere3Vi2q4moxq3zVvTU7CzMv9h.jpg',
               'feature_image_name' => 'sen-da-tu-phuong-1.jpg',
               'price' => '29000',
               'sale_price' => '10',
               'final_price' => 26100,
               'content_short' => 'Sen đá tứ phương mang ý nghĩa dù bạn có ở bốn phương trời, hay ở đi đâu cũng sẽ được may mắn, cây phù hợp để bàn làm việc, quán cà phê, bàn học...Hoặc để làm tiểu cảnh',
               'content' => '<h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; TỨ&nbsp;PHƯƠNG</h2>

               <p><strong>&Aacute;nh s&aacute;ng</strong></p>
               
               <p><strong>Sen đ&aacute; tứ&nbsp;phương</strong>&nbsp;chăm s&oacute;c kh&aacute; dễ d&agrave;ng, c&acirc;y rất dễ sống, bạn cần cho c&acirc;y c&oacute; đủ nắng để c&oacute; m&agrave;u sắc đẹp v&agrave; xanh tốt, sen đ&aacute; tứ phương th&iacute;ch nhất l&agrave; &aacute;nh s&aacute;ng l&uacute;c sớm v&agrave; ho&agrave;ng h&ocirc;n.</p>
               
               <p><strong>Nước</strong></p>
               
               <p>Kh&ocirc;ng như c&aacute;c loại sen đ&aacute; kh&aacute;c loại sen đ&aacute; n&agrave;y bạn c&oacute; thể tưới trực tiếp l&ecirc;n c&acirc;y, c&aacute;ch tốt nhất l&agrave; để chậu v&agrave;o trong một khay nước c&oacute; mực nước bằng 1/3 chiều cao của chậu, để trong khay 30s rồi bạn nhấc chậu ra. 1 tuần bạn chị n&ecirc;n tưới nước 1 -2 lần mỗi lần tưới bạn thử nhấc chậu n&ecirc;n khi cảm nặng hơn 1/2 trọng lượng ban đầu l&agrave; được đối với c&aacute;c loại chứa c&acirc;y nhẹ, c&ograve;n chậu c&acirc;y nặng th&igrave; bạn tự cảm nhận hoặc d&ugrave;ng tăm cắm v&agrave;o đất để thử độ ẩm, vừa tưới xong th&igrave; ẩm 3/4 đất l&agrave; ok.</p>
               
               <p><strong>Đất</strong></p>
               
               <p>1 năm bạn n&ecirc;n thay đất một lần đất bạn c&oacute; thể mua ở ngo&agrave;i tiệm, nếu c&oacute; tro th&igrave; c&aacute;c bạn c&oacute; thể trộn th&ecirc;m v&agrave;o để đất đựng&nbsp;<strong>sen đ&aacute; tư phương</strong>&nbsp;dễ tho&aacute;t nước v&agrave; dễ c&acirc;y cũng dễ ph&aacute;t triển. Khi n&agrave;o rễ mọc xuống tận đ&aacute;y chậu trồi ra ngo&agrave;i lỗ tho&aacute;t nước l&uacute;c đ&oacute; bạn c&oacute; thể thay chậu kh&aacute;c to hơn</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-11-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Hàm Cá Sấu',
               'slug' => Str::of('Sen Đá Hàm Cá Sấu')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/FxqZLohveWHqOnbHoulgehAMlhiQuKis.jpg',
               'feature_image_name' => 'sen-da-ham-ca-sau-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Cây sen đá hàm cá sấu mang ý nghĩa con người luôn có điểm tốt điểm xấu, bạn đừng nên nhìn mà điểm xấu mà quên đi cái tốt, nhìn vào cái tốt để suy nghĩ tích cực để cuộc sống vui vẻ hơn. Cây phù hợp để ở bàn làm việc, góc học tập, trồng với tiểu cảnh, các góc riêng nhỏ.',
               'content' => '<p>L&agrave; một trong những loại sen đ&aacute; kh&aacute; gai g&oacute;c nh&igrave;n rất giống xương rồng, nhưng gai của n&oacute; lại rất mềm khi mọc trồi non l&ecirc;n nh&igrave;n như h&agrave;m con c&aacute; sấu, c&oacute; lẽ bạn mới nh&igrave;n kh&ocirc;ng th&iacute;ch n&oacute; đ&acirc;u nhưng khi n&oacute; ra hoa th&igrave; suy nghĩ của bạn sẽ ho&agrave;n to&agrave;n kh&aacute;c. C&acirc;y mang &yacute; nghĩa con người lu&ocirc;n c&oacute; điểm tốt điểm xấu, bạn đừng n&ecirc;n nh&igrave;n v&agrave;o c&aacute;i xấu m&agrave; qu&ecirc;n đi những việc l&agrave;m tốt trước đ&oacute;.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-ham-ca-sau.jpg" style="height:425px; width:640px" /></p>
               
               <h2>CHĂM S&Oacute;C SEN Đ&Aacute; H&Agrave;M C&Aacute; SẤU</h2>
               
               <p><strong>&Aacute;nh s&aacute;ng:</strong></p>
               
               <p>H&atilde;y đảm bảo&nbsp;<strong>&aacute;nh s&aacute;ng của sen đ&aacute; h&agrave;m c&aacute; sấu</strong>&nbsp;để c&acirc;y lu&ocirc;n c&oacute; m&agrave;u sắc tươi tắn v&agrave; nhiều l&aacute;, nếu thiếu nắng c&acirc;y sẽ nhạt m&agrave;u v&agrave; thưa l&aacute;.</p>
               
               <p>Nếu bạn để trong văn ph&ograve;ng th&igrave; 2 &ndash; 3 ng&agrave;y n&ecirc;n cho c&acirc;y ra ngo&agrave;i tắm nắng 8 tiếng. Hoặc trước khi ra về bạn mang c&acirc;y ra ngo&agrave;i cửa c&oacute; chỗ che chắn mưa, nhưng vẫn đảm bảo &aacute;nh s&aacute;ng buổi sớm c&oacute; thể chiếu v&agrave;o c&acirc;y, đến s&aacute;ng ng&agrave;y mai đi l&agrave;m lại mang c&acirc;y v&agrave;o.</p>
               
               <p>Đ&ocirc;i với những chỗ vẫn c&oacute; &aacute;nh nắng nhưng kh&ocirc;ng nhiều th&igrave; vẫn c&oacute; thể chập nhận được đối với sen đ&aacute; h&agrave;m c&aacute; sấu.</p>
               
               <p><strong>Nước:</strong></p>
               
               <p>Tưới nước cho c&acirc;y 1 -2 lần / tuần mỗi lần khoảng 1/2 lượng nước ngấm v&agrave;o bầu đất. C&aacute;c tốt nhất l&agrave; bạn cho c&acirc;y v&agrave;o chậu nước với mực nước 1/3 chậu rồi cho nước thấm ngược từ đ&aacute;y chậu l&ecirc;n l&agrave; tốt nhất khoảng 30s để trong chậu nước hoặc bạn tự cảm nhận điều n&agrave;y.</p>
               
               <p>Tưới bằng b&igrave;nh phun sương bạn c&oacute; thể tưới l&ecirc;n c&acirc;y ở vị tr&iacute; xa thay v&igrave; tưới trực tiếp v&agrave;o c&acirc;y, nếu kh&ocirc;ng c&oacute; b&igrave;nh ph&ugrave;n sương th&igrave; bạn h&atilde;y tưới ở ngo&agrave;i th&agrave;nh chậu để nước ngẫm dần v&agrave;o giữa</p>
               
               <p><strong>Nhiệt độ:</strong></p>
               
               <p>Nhiệt độ từ 15 &ndash; 35*c l&agrave; nhiệt độ th&iacute;ch hợp nhất cho&nbsp;<em>c&acirc;y sen đ&aacute; c&aacute; sấu.</em></p>
               
               <p><strong>Đất trồng:</strong></p>
               
               <p>C&oacute; thể 3 th&aacute;ng bạn n&ecirc;n bổ sung dinh dưỡng cho c&acirc;y v&agrave; 1 năm n&ecirc;n thay đất 1 lần, c&oacute; thể mua lu&ocirc;n đất ở cửa h&agrave;ng cho tiện</p>
               
               <p><strong>Nh&acirc;n giống:</strong></p>
               
               <p>C&acirc;y sen đ&aacute; c&aacute; sấu ph&aacute;t triển rất mạnh c&oacute; thể gi&acirc;m c&agrave;nh hoặc l&aacute; cũng c&oacute; thể l&ecirc;n c&acirc;y con</p>
               
               <p><strong>Ch&uacute; &yacute;:</strong></p>
               
               <p>C&acirc;y nhũn l&aacute; trong trường hợp l&aacute; chưa gi&agrave; th&igrave; c&oacute; nghĩa c&acirc;y đang bị &uacute;ng nước cần phải thay đất cho c&acirc;y, l&aacute; c&acirc;y kh&ocirc;ng căng nhăn nheo l&agrave; đ&atilde; thiếu nước, m&agrave;u sắc kh&ocirc;ng tươi l&aacute; thưa l&agrave; thiếu nắng. C&acirc;y thường chết v&igrave; l&yacute; do &uacute;ng nước n&ecirc;n c&aacute;c bạn ch&uacute; &yacute; lượng nước tưới nh&eacute;!</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-12-09 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
            [ 
               'name' => 'Sen Đá Mặt Nạ',
               'slug' => Str::of('Sen Đá Mặt Nạ')->slug('-'), 
               'feature_image_path' => '/public/uploads/products/3/kljF1oMMGRkP4MUTexlZwTatDT5ZtzCM.jpg',
               'feature_image_name' => 'sen-da-mat-na-1.jpg',
               'price' => '29000',
               'sale_price' => '0',
               'final_price' => 29000,
               'content_short' => 'Sen đá mặt nạ có ý nghĩa mong muốn người được nhận hoặc là tự bản thân tự nhủ với mình hãy luôn sống thật với cá tính và phong cách của mình. Cây thường phù hợp trồng thêm với tiểu cảnh hoặc cách cây sen đá khác.',
               'content' => '<p>Sen đ&aacute; mặt nạ c&oacute; t&ecirc;n khoa học l&agrave; Delosperma echinatum. Đ&acirc;y l&agrave; một lo&agrave;i c&acirc;y mộng nước, bản địa ở Nam Phi. Lo&agrave;i c&acirc;y n&agrave;y c&ograve;n c&oacute; t&ecirc;n tiếng Anh kh&aacute;c l&agrave; &lsquo;pickle plant&rsquo;. C&acirc;y c&oacute; một lớp gai nấm tấm nhỏ tr&ecirc;n l&aacute; v&agrave; th&acirc;n c&oacute; lẽ ch&iacute;nh v&igrave; l&yacute; do đ&oacute; m&agrave; n&oacute; c&oacute; t&ecirc;n l&agrave; sen đ&aacute; mặt nạ&nbsp;C&acirc;y mang &yacute; nghĩa h&atilde;y sống thật với bản th&acirc;n đừng sống với chiếc mặt nạ.</p>

               <p><img alt="" src="http://localhost/plant-store/public/uploads/img-content/sen-da-mat-na.jpg" style="height:428px; width:400px" /></p>
               
               <h2>C&Aacute;CH CHĂM S&Oacute;C SEN Đ&Aacute; MẶT LẠ</h2>
               
               <p>Cũng thuộc loại c&acirc;y bụi nếu được chăm s&oacute;c một c&aacute;ch tốt v&agrave; ph&ugrave; hợp c&acirc;y sẽ đẻ rất nhanh đến m&ugrave;a bạn c&oacute; thể thưởng thức c&aacute;i đẹp của những b&ocirc;ng hoa nhỏ s&iacute;u giữ một nền xanh thẫm.</p>
               
               <h3>1. ĐẤT TRỒNG</h3>
               
               <p>Đất trồng kh&aacute; quan trọng với tất cả loại c&acirc;y, nếu đất tốt th&igrave; bạn c&oacute; thể &iacute;t chăm s&oacute;c m&agrave; c&acirc;y vấn phất triển một c&aacute;ch b&igrave;nh thường.&nbsp;<strong>Sen đ&aacute; mặt nạ</strong>&nbsp;y&ecirc;u cầu loại đất trồng c&oacute; khả năng tho&aacute;t nước tốt, c&oacute; thể sử dụng c&aacute;c th&agrave;nh phần bao gồm: Sỉ Than, tro, đất pha c&aacute;t, ph&acirc;n b&ograve;, ph&acirc;n dynamic. Hoặc đơn giản hơn l&agrave; d&ugrave;ng hỗ hợp c&aacute;t, sỏi, đất pha c&aacute;t v&agrave; ph&acirc;n &hellip;t&ugrave;y vật liệu bạn c&oacute;, điều quan trọng l&agrave; hỗn hợp đất cần tho&aacute;t nước thật tốt.</p>
               
               <h3>2. TƯỚI NƯỚC</h3>
               
               <p>Nước tưới l&agrave; điều kiện rất quan trọng trong việc&nbsp;<em><strong>chăm s&oacute;c sen đ&aacute; mặt nạ</strong></em>, thừa nước hoặc bị &uacute;ng l&acirc;u ng&agrave;y c&acirc;y rễ bị thối, thiếu nước c&acirc;y c&oacute; biểu hiện l&aacute; nhăn, m&agrave;u sắc nhạt kh&ocirc;ng đẹp.</p>
               
               <p><strong>Loại nước tưới:</strong>&nbsp;c&oacute; thể sử dụng c&aacute;c loại nước c&oacute; độ PH trung b&igrave;nh 5,5-7 như nước mưa hay nước m&aacute;y để tưới</p>
               
               <p><strong>Lượng nước tưới</strong>: Tưới cho nước ngấm đủ xuống rễ c&acirc;y khoảng 3/4 chậu trồng, kh&ocirc;ng n&ecirc;n để nước đọng l&ecirc;n ngọn c&acirc;y nếu bạn để c&acirc;y nơi nhiệt độ thấp. Lượng nước tưới phụ thuộc độ th&ocirc;ng tho&aacute;ng, nhiệt độ nơi trồng, sự tho&aacute;t nước của đất trồng&hellip;. Để c&acirc;y ở nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t, nhiệt độ cao th&igrave; c&oacute; thể tưới nhiều v&agrave; ngược lại. Th&ocirc;ng thường thời gian tưới nước lại th&iacute;ch hợp l&agrave; từ 2-5 ng&agrave;y t&ugrave;y điều kiện m&ocirc;i trường, khi đất đ&atilde; kh&ocirc; ho&agrave;n to&agrave;n.</p>
               
               <p><strong>C&aacute;ch tưới</strong>: C&oacute; thể tưới trực tiếp từ tr&ecirc;n xuống, tưới c&agrave;ng gần m&eacute;p chậu c&agrave;ng tốt. Qu&yacute; kh&aacute;ch n&ecirc;n sử dụng phương ph&aacute;p tưới thẩm thấu ngược rất an to&agrave;n cho c&acirc;y như sau: D&ugrave;ng một chậu nước với &iacute;t nước trong đ&oacute;, sau đ&oacute; ng&acirc;m &frac14; chậu c&acirc;y v&agrave;o nước trong khoảng 2-3 ph&uacute;t cho nước thấm từ đ&aacute;y chậu l&ecirc;n. C&oacute; thể đặt chậu c&acirc;y l&ecirc;n một c&aacute;i khay th&iacute;ch hợp v&agrave; tưới nước v&agrave;o khay thay v&igrave; tưới l&ecirc;n c&acirc;y sẽ an to&agrave;n hơn. Nước sẽ thấm từ đ&aacute;y chậu l&ecirc;n rễ. khay c&oacute; chiều cao 0.5-2 cm t&ugrave;y thuộc chiều cao chậu trồng, kh&ocirc;ng cao qu&aacute; 1/3 chiều cao chậu.Khi n&agrave;o thấy kh&ocirc; hết nước th&igrave; 2-3 ng&agrave;y sau tưới tiếp. Hoặc c&oacute; thể d&ugrave;ng b&igrave;nh sịt xương để tưới cho c&acirc;y</p>
               
               <p>Số lần tưới: phụ thuộc v&agrave;o thời tiết, nếu thời tiết m&aacute;t mẻ hoặc mưa nhiều tưới 1-2 lần/ tuần, v&agrave; th&ecirc;m 1-2 lần/tuần nếu trời n&oacute;ng. N&ecirc;n quan s&aacute;t kỹ đất trồng kh&ocirc; hẳn ta mới tưới.</p>
               
               <h3>3. &Aacute;NH S&Aacute;NG V&Agrave; KH&Ocirc;NG KH&Iacute;</h3>
               
               <p><strong>Sen đ&aacute; mặt nạ</strong>&nbsp;ưa &aacute;nh s&aacute;ng dịu như v&agrave;o buổi s&aacute;ng đến l&uacute;c 9h&nbsp;v&agrave; kh&ocirc;ng kh&iacute; tho&aacute;ng m&aacute;t n&ecirc;n để c&acirc;y nơi c&oacute; đủ &aacute;nh s&aacute;ng v&agrave; tho&aacute;ng m&aacute;t c&acirc;y sẽ ph&aacute;t triển tốt nhất. Khi chăm s&oacute;c c&acirc;y qu&yacute; kh&aacute;ch n&ecirc;n quan s&aacute;t l&aacute; để biết c&acirc;y c&oacute; thiếu nắng hay kh&ocirc;ng, biểu hiện th&ocirc;ng thường của việc thiếu nắng l&agrave; l&aacute; c&acirc;y rủ xuống v&agrave; nhạt m&agrave;u đi.</p>',
               'user_id' => '3',
               'category_id' => '5',
               'status' => '1',
               'created_at' => '2020-12-19 15:49:30',
               'updated_at' => Carbon::now(),   
            ],
        ]);
    }
}
