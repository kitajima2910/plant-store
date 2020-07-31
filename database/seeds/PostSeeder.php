<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'name' => 'Cách trồng và chăm sóc hoa hồng chuẩn nhất',
                'slug' => Str::of('Cách trồng và chăm sóc hoa hồng chuẩn nhất')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/1PCBDQlwr2Tb5KQQ5YkyhQY3KLfXL2q2.jpg',
                'feature_image_name' => 'download.jpg',
                'content' => '<p>Hoa hồng thuộc cây thân gỗ bụi lâu năm, có thể trồng quanh năm nhưng trồng v&agrave;o m&ugrave;a xu&acirc;n v&agrave; m&ugrave;a thu l&agrave; ph&ugrave; hợp nhất. B&ecirc;n cạnh đ&oacute; đ&acirc;y&nbsp;c&ograve;n l&agrave; biểu tượng của t&igrave;nh y&ecirc;u, l&agrave; sự vĩnh cửu của vẻ đẹp t&acirc;m hồn n&ecirc;n được rất nhiều người ưa chuộng.&nbsp;Tuy nhi&ecirc;n để trồng được một chậu hồng ra hoa đẹp kh&ocirc;ng phải điều đơn giản.&nbsp;Nếu c&oacute; kỹ&nbsp;thuật&nbsp;<em>trồng v&agrave; chăm s&oacute;c hoa hồng&nbsp;</em>tốt, c&acirc;y sẽ cho ra nhiều hoa với m&agrave;u sắc rực rỡ v&agrave; tươi tắn.</p>

                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cham-soc-hoa-hong.jpg" style="height:280px; width:400px" /></p>
                
                <h2>C&aacute;c bước chuẩn bị trước khi trồng hoa hồng</h2>
                
                <p>Chuẩn bị những vật dụng cần thiết l&agrave; kh&acirc;u rất quan trọng, l&agrave; tiền đề để c&oacute; một chậu hay một kh&oacute;m hoa hồng ra nhiều hoa v&agrave; ph&aacute;t triển tốt.</p>
                
                <h3><strong>Lựa chọn giống c&acirc;y hoa hồng</strong></h3>
                
                <p>C&oacute; rất nhiều c&aacute;ch để trồng hoa hồng trong đ&oacute; phổ biến nhất l&agrave; từ hạt, gi&acirc;m c&agrave;nh, t&aacute;ch bụi hay từ những c&acirc;y giống được ươm. Tuy nhi&ecirc;n n&ecirc;n&nbsp;chọn c&acirc;y con được chủ vườn ươm sẵn, đặc biệt l&agrave; những c&acirc;y mập mạp, tươi tốt, c&oacute; c&agrave;nh nhiều, l&aacute; nhiều v&igrave; tỉ lệ sống sẽ cao hơn v&agrave; kh&ocirc;ng tốn nhiều thời gian.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/phuong-pham-giam-canh.jpg" style="height:225px; width:400px" /></p>
                
                <h3><strong>L&agrave;m đất trước khi trồng hoa hồng</strong></h3>
                
                <p>Tuy hoa hồng l&agrave; c&acirc;y dễ sống, c&oacute; thể ph&aacute;t triển trong nhiều loại đất kh&aacute;c nhau, nhưng muốn&nbsp;<strong>chăm s&oacute;c hoa hồng</strong>&nbsp;ra nhiều hoa th&igrave; ta n&ecirc;n chọn trồng trong đất tơi xốp, c&oacute; độ tho&aacute;t nước tốt kh&ocirc;ng để nước tưới bị ứ đọng l&agrave;m hỏng rễ. Người trồng c&oacute; thể mua đất sẵn hoặc cũng c&oacute; thể trộn đất với ph&acirc;n hữu cơ đ&atilde; hoai mục như tr&ugrave;n quế, xơ dừa&hellip;</p>
                
                <h3><strong>Lựa chọn chậu cho c&acirc;y hoa hồng</strong></h3>
                
                <p>Sau khi chọn xong vị tr&iacute; trồng, tiếp đến bạn cần lưu &yacute; đến c&aacute;ch lựa chọn chậu. N&ecirc;n chọn chậu trồng ph&ugrave; hợp với độ tuổi v&agrave; k&iacute;ch thước của c&acirc;y hồng. Nếu đ&oacute; l&agrave; một c&acirc;y hồng trưởng th&agrave;nh, th&acirc;n c&acirc;y lớn, nhu cầu nước nhiều th&igrave; trồng trong một chậu lớn sẽ gi&uacute;p giữ ẩm l&acirc;u. C&ograve;n nếu chỉ để trồng những c&agrave;nh gi&acirc;m mới mọc rễ v&agrave; c&ograve;n yếu th&igrave; n&ecirc;n chọn chậu nhỏ, để kh&ocirc;ng bị ngậm nhiều nước sẽ khiến rễ c&acirc;y bị thối. L&yacute; tưởng nhất l&agrave; những chậu c&oacute; chiều cao 30cm, v&agrave; đường k&iacute;nh khoảng 40cm hoặc chậu men cỡ số 4.</p>
                
                <h3><strong>Vị tr&iacute; đặt c&acirc;y hoa hồng&nbsp;</strong></h3>
                
                <p>Hoa hồng l&agrave; loại c&acirc;y th&iacute;ch hợp sống trong điều kiện tho&aacute;ng gi&oacute; v&agrave; c&oacute; nhiều &aacute;nh nắng. Nh&agrave; ở c&aacute;c th&agrave;nh phố lớn hiện nay thường bị che khuất, thiếu &aacute;nh s&aacute;ng n&ecirc;n c&acirc;y dễ mắc bệnh, chất lượng hoa xấu, k&eacute;m năng suất. Do vậy bạn&nbsp;n&ecirc;n chọn nơi trồng c&acirc;y hoa hồng c&oacute; hướng nắng mặt trời chiếu buổi s&aacute;ng hay nắng chiếu xuy&ecirc;n,&nbsp;tr&aacute;nh &aacute;nh nắng gay gắt.</p>
                
                <h2>C&aacute;ch trồng c&acirc;y hoa hồng</h2>
                
                <p>Như c&aacute;c bạn đ&atilde; biết c&oacute; rất nhiều c&aacute;ch để trồng hoa hồng như trồng từ hạt, trồng bằng phương ph&aacute;p gi&acirc;m c&agrave;nh, t&aacute;ch bụi hay từ những c&acirc;y giống được ươm. Sau đ&acirc;y m&igrave;nh xin chia sẻ một trong những c&aacute;ch trồng đem lại hiệu quả cao v&agrave; dễ d&agrave;ng nhất, đ&oacute; l&agrave; trồng c&acirc;y hoa hồng bằng c&acirc;y giống được ươm sẵn. C&ugrave;ng bắt tay v&agrave;o thực hiện nh&eacute;.</p>
                
                <p>Đầu ti&ecirc;n h&atilde;y l&oacute;t dưới đ&aacute;y chậu một &iacute;t than củi kh&ocirc; hoặc sỏi để tho&aacute;t nước tốt, tạo độ th&ocirc;ng tho&aacute;ng tr&aacute;nh &uacute;ng rễ. sau đ&oacute; cho đất nhiều dưỡng chất đ&atilde; chuẩn bị v&agrave;o 2/3 chậu.</p>
                
                <p>Tiếp đến kho&eacute;t một lỗ ch&iacute;nh c&oacute; k&iacute;ch thước vừa với bầu đất của c&acirc;y v&agrave; đặt c&acirc;y v&agrave;o, phủ th&ecirc;m một lớp đất cao tầm 8/10 của chậu. Khi trồng c&acirc;y, d&ugrave;ng ng&oacute;n tay nhấn chặt để gốc kh&ocirc;ng bị lỏng. Để nơi tho&aacute;ng m&aacute;t 3-5 ng&agrave;y, tưới rất &iacute;t, chỉ cần giữ cho đất c&oacute; độ ẩm vừa phải. Sau đ&oacute; đem ra nắng v&agrave; tăng lượng nước tưới.</p>
                
                <p>Bạn c&oacute; thể cắm một c&aacute;i que ở giữa chậu mục đ&iacute;ch gi&uacute;p c&acirc;y đứng vững khi c&oacute; gi&oacute; to, tr&aacute;nh ảnh hưởng đến bộ rễ đang c&ograve;n non. Cẩn thận hơn th&igrave; cắm th&ecirc;m một v&agrave;i cọc ở xung quanh để bảo vệ c&acirc;y khỏi một số lo&agrave;i gặm nhấm như chuột.</p>
                
                <h2><strong>C&aacute;ch chăm s&oacute;c hoa hồng</strong></h2>
                
                <h3><strong>Ph&acirc;n b&oacute;n</strong></h3>
                
                <p>B&oacute;n ph&acirc;n cho c&acirc;y l&agrave; một phần kh&ocirc;ng thể thiếu trong qu&aacute; tr&igrave;nh <strong>trồng v&agrave; chăm s&oacute;c hoa hồng</strong>&nbsp;Sau khi trồng từ 3-5 ng&agrave;y phun ph&acirc;n b&oacute;n l&aacute; để gi&uacute;p c&acirc;y ph&aacute;t triển bộ rễ tốt gi&uacute;p hoa ra c&oacute; m&agrave;u sắc sống động. Từ 10-15 ng&agrave;y khi c&acirc;y ra rễ, ph&aacute;t ra l&aacute; non th&igrave; b&oacute;n bổ sung ph&acirc;n hạt Dynamic, ph&acirc;n dơi quanh gốc c&acirc;y rồi tưới nước gi&uacute;p c&acirc;y hấp thu tốt dinh dưỡng, sử dụng muỗng c&agrave; ph&ecirc; để định lượng ph&acirc;n b&oacute;n cho an to&agrave;n. Kết hợp xen kẽ định kỳ mỗi th&aacute;ng 1 lần đối với ph&acirc;n b&oacute;n l&aacute; v&agrave; b&oacute;n gốc. Tuyệt đối kh&ocirc;ng tưới ph&acirc;n l&ecirc;n hoa sẽ l&agrave;m hoa mau t&agrave;n.</p>
                
                <h3><strong>Tưới nước</strong></h3>
                
                <p>Hoa hồng l&agrave; c&acirc;y ưa nước n&ecirc;n&nbsp;cần bổ sung nước cho c&acirc;y đều đặn. Nguy&ecirc;n nh&acirc;n ch&iacute;nh của hiện tượng l&aacute; bị v&agrave;ng v&agrave; rụng l&agrave; do c&acirc;y bị thiếu nước. Bạn n&ecirc;n tưới c&acirc;y bằng v&ograve;i phun nhẹ tưới đều v&agrave;o buổi s&aacute;ng, v&agrave;o c&aacute;c ng&agrave;y nắng gắt n&ecirc;n tưới th&ecirc;m cho c&acirc;y v&agrave;o l&uacute;c chiều m&aacute;t nhưng kh&ocirc;ng qu&aacute; muộn, tr&aacute;nh trường hợp l&aacute; v&agrave; nụ c&ograve;n ướt qua đ&ecirc;m dễ tạo m&ocirc;i trường cho s&acirc;u bệnh ph&aacute;t triển. M&aacute;ch nhỏ với c&aacute;c bạn &rdquo; nước vo gạo &rdquo; cũng chứa rất nhiều chất dinh dưỡng c&oacute; lợi cho việc nu&ocirc;i dưỡng c&acirc;y.</p>
                
                <h3><strong>Cắt tỉa c&agrave;nh&nbsp;</strong></h3>
                
                <p>Khi c&acirc;y đ&atilde; ph&aacute;t triển tốt, nhiều c&agrave;nh v&agrave; nh&aacute;nh chen nhau, bạn n&ecirc;n thường xuy&ecirc;n cắt bỏ c&agrave;nh, l&aacute; hoa bị hư. Khi cắt cần cắt bấm ngọn&nbsp;</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/tia-canh.jpg" style="height:267px; width:400px" /></p>
                
                <h3><strong>Ph&ograve;ng trừ s&acirc;u bệnh g&acirc;y hại cho c&acirc;y hoa hồng</strong></h3>
                
                <p>Trồng trong điều kiện thiếu &aacute;nh s&aacute;ng, tưới nước qu&aacute; nhiều hay m&ocirc;i trường qu&aacute; ẩm đều l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y bệnh chủ yếu ở hoa hồng. C&aacute;c bệnh nấm c&acirc;y hay sự tấn c&ocirc;ng của những lo&agrave;i c&ocirc;n tr&ugrave;ng g&acirc;y hại sẽ khiến c&acirc;y suy kiệt dần. Một số th&ocirc;ng tin dưới đ&acirc;y sẽ gi&uacute;p bạn &rdquo; bắt mạch &rdquo; v&agrave; ngăn ngừa vườn hồng của bạn khỏi s&acirc;u bệnh.</p>
                
                <p><strong>Bệnh phấn trắng</strong></p>
                
                <p>Vị tr&iacute; thường thấy tr&ecirc;n c&aacute;c l&aacute; non, c&aacute;c l&aacute; b&aacute;nh tẻ, ch&uacute;ng ph&aacute;t triển rất nhanh l&agrave;m l&aacute; biến dạng, th&acirc;n kh&ocirc;, c&acirc;y chết, bạn c&oacute; thể d&ugrave;ng thuốc Score 250 ND hoặc Anvil 5 SC để chữa bệnh n&agrave;y cho c&acirc;y.</p>
                
                <p>Bệnh đốm đen</p>
                
                <p>Khi l&aacute; v&agrave;ng, rụng h&agrave;ng loạt, theo d&otilde;i thấy xuất hiện vết ở cả 2 mặt l&aacute; l&agrave; những biểu hiện của bệnh đốm đen. Thuốc đặc trị cho bệnh n&agrave;y ch&iacute;nh l&agrave;&nbsp;Daconil 500 SC, Đồng Oxyclorua 30 BTN, Anvil 5 SC.</p>
                
                <p>Bệnh gỉ sắt</p>
                
                <p>L&aacute; bị bệnh c&oacute; nốt lấm tấm v&agrave;ng cam, hoặc đỏ gạch như m&agrave;u của gỉ sắt, thuốc ph&ograve;ng trừ&nbsp;l&agrave; Kocide, Vimonyl 72 BTN, Daconil 500 SC.</p>
                
                <p>Rệp</p>
                
                <p>Căn bệnh phổ biến nhất của c&acirc;y h&ograve;a hồng l&agrave; rệp. Nhiệt độ 20 &ndash; 22 độ C, độ ẩm cao (75% &ndash; 80%) l&agrave; điều kiện l&yacute; tưởng để rệp ph&aacute;t triển, sinh s&ocirc;i nảy nở. Ch&uacute;ng c&oacute; m&agrave;u đỏ, xanh hoặc x&aacute;m, thường tập trung chủ yếu ở những mầm non, nụ hoa v&agrave; phần ngọn. Khi số lượng rệp xuất hiện chưa nhiều thay v&igrave; d&ugrave;ng thuốc Supaside 40 ND nồng độ 0,15%, Supathion, Thiodal để ti&ecirc;u diệt ch&uacute;ng, ta c&oacute; thể l&agrave;m theo c&aacute;ch sau, vừa hiệu quả lại, nguy&ecirc;n liệu dễ t&igrave;m, lại vừa tiết kiệm kinh tế: bạn d&ugrave;ng một miếng b&ocirc;ng, thấm nước v&agrave; ốp nhẹ v&agrave;o những vị tr&iacute; c&oacute; rệp, rệp sẽ bị d&iacute;nh v&agrave;o miếng b&ocirc;ng. Rất đơn giản phải kh&ocirc;ng ? H&atilde;y ki&ecirc;n tr&igrave; l&agrave;m li&ecirc;n tục 3-5 ng&agrave;y để sạch b&oacute;ng rệp nh&eacute;.</p>
                
                <h2>Lời kết</h2>
                
                <p>Th&uacute; chơi hoa hồng tao nh&atilde; m&agrave; cũng lắm c&ocirc;ng phu. Để c&oacute; được những kh&oacute;m hoa hồng ưng &yacute;, tỏa hương thơm ng&aacute;t khiến tinh thần sảng kho&aacute;i sau những giờ lao động mệt mỏi đ&ograve;i hỏi sự tỉ mỉ, chăm ch&uacute;t của người trồng. Hy vọng b&agrave;i viết n&agrave;y của plant-store&nbsp;sẽ gi&uacute;p c&aacute;c bạn hiểu th&ecirc;m về c&aacute;ch trồng, chăm s&oacute;c c&acirc;y hoa hồng v&agrave; ph&ograve;ng ngừa s&acirc;u bệnh để c&acirc;y kh&ocirc;ng những lu&ocirc;n xanh tốt m&agrave; c&ograve;n nở rộ quanh năm.</p>
                
                <p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => 'Bảng báo giá dịch vụ chăm sóc cây cảnh',
                'slug' => Str::of('Bảng báo giá dịch vụ chăm sóc cây cảnh')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/ts2dqml8i10lYkUjFyW8hAdjG4njoQZu.jpg',
                'feature_image_name' => 'bang-bao-gia.jpg',
                'content' => '<p>C&acirc;y xanh hiện&nbsp;đ&atilde; l&agrave; một phần kh&ocirc;ng thể thiếu&nbsp;đối với mỗi kh&ocirc;ng gian từ nh&agrave;&nbsp;ở cho&nbsp;đến văn ph&ograve;ng nhất l&agrave;&nbsp;đối với những th&agrave;nh phố&nbsp;đ&ocirc;ng&nbsp;đ&uacute;c như: Hồ Ch&iacute; Minh v&agrave; H&agrave; Nội. Tuy nhi&ecirc;n việc gi&uacute;p c&acirc;y sống v&agrave; ph&aacute;t triển tốt th&igrave; kh&ocirc;ng hề dễ, nhất l&agrave;&nbsp;đối với văn ph&ograve;ng c&oacute; nhiều c&acirc;y xanh, diện t&iacute;ch&nbsp;lớn.&nbsp;Để mọi việc trở n&ecirc;n dễ d&agrave;ng chỉ cần li&ecirc;n hệ tới dịch vụ chăm s&oacute;c c&acirc;y cảnh&nbsp;của&nbsp;<strong>Web C&acirc;y Cảnh.</strong></p>

                <p><strong><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/bang-bao-gia.jpg" style="height:233px; width:400px" /></strong></p>
                
                <h2>Bạn&nbsp;được g&igrave; khi thu&ecirc; b&ecirc;n&nbsp;Web C&acirc;y Cảnh chăm s&oacute;c?</h2>
                
                <p>&ndash; Kiểm tra&nbsp;định kỳ cho c&acirc;y h&agrave;ng tuần.</p>
                
                <p>&ndash; K&eacute;o d&agrave;i tuổi thọ&nbsp;cho c&acirc;y.</p>
                
                <p>&ndash; Bố tr&iacute; c&acirc;y ph&ugrave; hợp theo&nbsp;đặc&nbsp;điểm sống</p>
                
                <p>&ndash; Giữ c&acirc;y lu&ocirc;n tươi mới gồm: Vệ sinh&nbsp;l&aacute;, lau chậu, tưới nước, bỏ l&aacute; bị hư.</p>
                
                <p>&ndash; Bổ sung dưỡng chất cho&nbsp;đất khi c&acirc;y c&oacute; dấu hiệu thiếu chất.</p>
                
                <p>&ndash; Thay c&acirc;y bị hỏng, xấu với gi&aacute;&nbsp;ưu&nbsp;đ&atilde;i.</p>
                
                <p>&ndash; Gi&aacute; thu&ecirc; chăm s&oacute;c rẻ.</p>
                
                <h2>Một số c&acirc;u hỏi chăm s&oacute;c thường&nbsp;được kh&aacute;ch h&agrave;ng thắc mắc</h2>
                
                <h3><strong>C&acirc;u hỏi 1</strong>: C&acirc;y hỏng, chết c&oacute;&nbsp;được thay mới?</h3>
                
                <p>&ndash; Thu&ecirc; b&ecirc;n&nbsp;web c&acirc;y cảnh. C&acirc;y của bạn sẽ lu&ocirc;n&nbsp;được sạch l&aacute;, chậu c&acirc;y sạch sẽ, b&oacute;n ph&acirc;n định kỳ,&nbsp;c&acirc;y&nbsp;được k&eacute;o d&agrave;i tuổi thọ. Nếu c&acirc;y hỏng, xấu&nbsp;đơn vị muốn thay sẽ&nbsp;được giảm gi&aacute; 20% tiền c&acirc;y, miễn ph&iacute; c&ocirc;ng trồng v&agrave; vận chuyển (Nếu d&ugrave;ng g&oacute;i dịch vụ chăm s&oacute;c kh&ocirc;ng). C&ograve;n nếu qu&yacute; kh&aacute;ch h&agrave;ng d&ugrave;ng g&oacute;i dịch vụ chăm s&oacute;c c&acirc;y c&oacute; thay mới th&igrave; kh&ocirc;ng mất th&ecirc;m chi ph&iacute; n&agrave;o cả.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/tia-cay.jpg" style="height:307px; width:512px" /></p>
                
                <h3><strong>C&acirc;u hỏi 2:&nbsp;</strong>Quy tr&igrave;nh chăm s&oacute;c c&acirc;y như thế n&agrave;o?</h3>
                
                <p>&ndash; Nh&acirc;n vi&ecirc;n b&ecirc;n&nbsp;Web C&acirc;y Cảnh sẽ&nbsp;đến chăm s&oacute;c theo một ng&agrave;y cố&nbsp;định trong tuần,&nbsp;do b&ecirc;n kh&aacute;ch h&agrave;ng quyết&nbsp;định v&agrave; thống nhất c&ugrave;ng c&ocirc;ng ty TNHH&nbsp;Webcaycanh. Nh&acirc;n vi&ecirc;n sẽ&nbsp;đến lau l&aacute;, tưới c&acirc;y, b&oacute;n ph&acirc;n, dọn vệ sinh bồn c&acirc;y&hellip;Sau khi l&agrave;m xong sẽ&nbsp;được b&ecirc;n ph&iacute;a kh&aacute;ch h&agrave;ng kiểm tra v&agrave; c&oacute; bảng chấm c&ocirc;ng, khi kiểm tra mọi thứ&nbsp;đ&atilde;&nbsp;ổn th&igrave;&nbsp;đưa bảng chấm c&ocirc;ng cho nh&acirc;n vi&ecirc;n b&ecirc;n&nbsp;Web C&acirc;y Cảnh&nbsp;đ&aacute;nh dấu.</p>
                
                <h3><strong>C&acirc;u hỏi 3</strong>: B&ecirc;n&nbsp;Webcaycanh c&oacute; xuất h&oacute;a&nbsp;đơn&nbsp;đỏ?</h3>
                
                <p>&ndash; B&ecirc;n c&ocirc;ng ty&nbsp;Webcaycanh c&oacute; xuất h&oacute;a&nbsp;đơn&nbsp;đỏ v&agrave; xuất theo từng th&aacute;ng, từng qu&yacute;, từng năm t&ugrave;y theo nhu cầu kh&aacute;ch h&agrave;ng muốn xuất h&oacute;a&nbsp;đơn.</p>
                
                <h3><strong>C&acirc;u hỏi 4</strong>: Thanh to&aacute;n như thế n&agrave;o?</h3>
                
                <p>&ndash; Qu&yacute; kh&aacute;ch h&agrave;ng sẽ thanh to&aacute;n sau theo từng th&aacute;ng, từng qu&yacute;&hellip; T&ugrave;y theo qu&yacute; kh&aacute;ch h&agrave;ng</p>
                
                <h2>Bảng b&aacute;o gi&aacute; dịch vụ chăm s&oacute;c c&acirc;y cảnh</h2>
                
                <p>C&acirc;y nhỏ&nbsp;để b&agrave;n, treo, để gi&aacute; cao dưới 40cm:&nbsp;14.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>C&acirc;y&nbsp;để&nbsp;đất, dưới s&agrave;n cao tr&ecirc;n 40cm dưới 1m:&nbsp;49.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>C&acirc;y&nbsp;để&nbsp;đất, dưới s&agrave;n cao hơn 1m:&nbsp;59.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>Nếu l&agrave; vườn dưới&nbsp;đất&nbsp;sẽ&nbsp;được t&iacute;nh theo m2&nbsp;19.000 VNĐ/ 1 th&aacute;ng/ m2.</p>
                
                <h2>Bảng gi&aacute; dịch vụ chăm s&oacute;c c&acirc;y c&oacute; thay mới miễn ph&iacute;</h2>
                
                <p>C&acirc;y nhỏ&nbsp;để b&agrave;n, treo, để gi&aacute; cao dưới 40cm:&nbsp;49.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>C&acirc;y&nbsp;để&nbsp;đất, dưới s&agrave;n cao tr&ecirc;n 40cm dưới 1m:&nbsp;149.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>C&acirc;y&nbsp;để&nbsp;đất, dưới s&agrave;n cao hơn 1m:&nbsp;189.000 VNĐ/ 1 th&aacute;ng/ c&acirc;y.</p>
                
                <p>Gi&aacute; cơ bản l&agrave; thế c&ograve;n t&ugrave;y theo gi&aacute; trị của c&acirc;y,&nbsp;để biết ch&iacute;nh x&aacute;c gi&aacute; b&ecirc;n&nbsp;webcaycanh sẽ b&aacute;o gi&aacute; v&agrave; b&aacute;o lại cho b&ecirc;n qu&yacute; kh&aacute;ch h&agrave;ng.</p>
                
                <p>Nếu số lượng c&acirc;y nhiều&nbsp;Webcaycanh sẽ cho nh&acirc;n vi&ecirc;n&nbsp;đến khảo s&aacute;t v&agrave; b&aacute;o gi&aacute; lại sau, với số lượng lớn sẽ&nbsp;được giảm gi&aacute; t&ugrave;y theo số lượng c&acirc;y.</p>
                
                <p>Nếu&nbsp;đơn vị k&yacute; hợp&nbsp;đồng tr&ecirc;n 1 năm th&igrave; sẽ&nbsp;được thay c&acirc;y mới miễn ph&iacute; 1 lần&nbsp;v&agrave;o&nbsp;đầu năm mới&nbsp;với những c&acirc;y xấu v&agrave; hỏng. (kh&ocirc;ng&nbsp;&aacute;p dụng với c&acirc;y mua&nbsp;ở&nbsp;đơn vị kh&aacute;c)</p>
                
                <h2>Những lưu&nbsp;&yacute; khi sử dụng chăm s&oacute;c c&acirc;y</h2>
                
                <p>&ndash; C&acirc;y sẽ&nbsp;được tư vấn&nbsp;để chỗ ph&ugrave; hợp&nbsp;để c&acirc;y sống l&acirc;u, nếu qu&yacute; kh&aacute;ch h&agrave;ng kh&ocirc;ng theo&nbsp;&yacute; kiến v&agrave; b&ecirc;n&nbsp;webcaycanh cũng kh&ocirc;ng&nbsp;đồng&nbsp;&yacute; với nơi để c&acirc;y,&nbsp;th&igrave; vấn&nbsp;đề xảy ra với c&acirc;y kh&aacute;ch h&agrave;ng sẽ tự chịu tr&aacute;ch nhiệm (v&iacute; dụ c&acirc;y&nbsp;ưa s&aacute;ng lại&nbsp;để b&oacute;ng tối, c&acirc;y&nbsp;ưa m&aacute;t&nbsp;để chỗ nắng, để c&acirc;y chỗ cục n&oacute;ng điều h&ograve;a&hellip;)</p>
                
                <p>&ndash; Kh&ocirc;ng&nbsp;đổ c&aacute;c h&oacute;a chất, chất lạ, b&atilde; ch&egrave;, t&agrave;n thuốc, b&atilde; c&agrave; ph&ecirc;&hellip;.v&agrave;o gốc c&acirc;y khi kh&ocirc;ng&nbsp;được sự&nbsp;đồng&nbsp;&yacute; của b&ecirc;n&nbsp;Webcaycanh.</p>
                
                <p>Đơn gi&aacute; thu&ecirc; tối thiểu l&agrave;&nbsp;<strong>1.000.000</strong>&nbsp;VNĐ/th&aacute;ng &aacute;p dụng với c&aacute;c đơn vị muốn chăm s&oacute;c nhưng số lượng c&acirc;y &iacute;t.</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => 'Cách chọn đào tết kéo tài lộc đến gia đình bạn',
                'slug' => Str::of('Cách chọn đào tết kéo tài lộc đến gia đình bạn')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/mV11G0fmbkuQWkjMN2zsg9PPkGaPzmF1.jpg',
                'feature_image_name' => 'cach-chon-dao.jpg',
                'content' => '<p>Hoa hồng thuộc c&acirc;y th&acirc;n gỗ bụi l&acirc;u năm, c&oacute; thể trồng quanh năm nhưng trồng v&agrave;o m&ugrave;a xu&acirc;n v&agrave; m&ugrave;a thu l&agrave; ph&ugrave; hợp nhất. B&ecirc;n cạnh đ&oacute; đ&acirc;y&nbsp;c&ograve;n l&agrave; biểu tượng của t&igrave;nh y&ecirc;u, l&agrave; sự vĩnh cửu của vẻ đẹp t&acirc;m hồn n&ecirc;n được rất nhiều người ưa chuộng.&nbsp;Tuy nhi&ecirc;n để trồng được một chậu hồng ra hoa đẹp kh&ocirc;ng phải điều đơn giản.&nbsp;Nếu c&oacute; kỹ&nbsp;thuật&nbsp;<em>trồng v&agrave; chăm s&oacute;c hoa hồng&nbsp;</em>tốt, c&acirc;y sẽ cho ra nhiều hoa với m&agrave;u sắc rực rỡ v&agrave; tươi tắn.</p>

                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cham-soc-hoa-hong.jpg" style="height:280px; width:400px" /></p>
                
                <h2>C&aacute;c bước chuẩn bị trước khi trồng hoa hồng</h2>
                
                <p>Chuẩn bị những vật dụng cần thiết l&agrave; kh&acirc;u rất quan trọng, l&agrave; tiền đề để c&oacute; một chậu hay một kh&oacute;m hoa hồng ra nhiều hoa v&agrave; ph&aacute;t triển tốt.</p>
                
                <h3><strong>Lựa chọn giống c&acirc;y hoa hồng</strong></h3>
                
                <p>C&oacute; rất nhiều c&aacute;ch để trồng hoa hồng trong đ&oacute; phổ biến nhất l&agrave; từ hạt, gi&acirc;m c&agrave;nh, t&aacute;ch bụi hay từ những c&acirc;y giống được ươm. Tuy nhi&ecirc;n n&ecirc;n&nbsp;chọn c&acirc;y con được chủ vườn ươm sẵn, đặc biệt l&agrave; những c&acirc;y mập mạp, tươi tốt, c&oacute; c&agrave;nh nhiều, l&aacute; nhiều v&igrave; tỉ lệ sống sẽ cao hơn v&agrave; kh&ocirc;ng tốn nhiều thời gian.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/phuong-pham-giam-canh.jpg" style="height:225px; width:400px" /></p>
                
                <h3><strong>L&agrave;m đất trước khi trồng hoa hồng</strong></h3>
                
                <p>Tuy hoa hồng l&agrave; c&acirc;y dễ sống, c&oacute; thể ph&aacute;t triển trong nhiều loại đất kh&aacute;c nhau, nhưng muốn&nbsp;<strong>chăm s&oacute;c hoa hồng</strong>&nbsp;ra nhiều hoa th&igrave; ta n&ecirc;n chọn trồng trong đất tơi xốp, c&oacute; độ tho&aacute;t nước tốt kh&ocirc;ng để nước tưới bị ứ đọng l&agrave;m hỏng rễ. Người trồng c&oacute; thể mua đất sẵn hoặc cũng c&oacute; thể trộn đất với ph&acirc;n hữu cơ đ&atilde; hoai mục như tr&ugrave;n quế, xơ dừa&hellip;</p>
                
                <h3><strong>Lựa chọn chậu cho c&acirc;y hoa hồng</strong></h3>
                
                <p>Sau khi chọn xong vị tr&iacute; trồng, tiếp đến bạn cần lưu &yacute; đến c&aacute;ch lựa chọn chậu. N&ecirc;n chọn chậu trồng ph&ugrave; hợp với độ tuổi v&agrave; k&iacute;ch thước của c&acirc;y hồng. Nếu đ&oacute; l&agrave; một c&acirc;y hồng trưởng th&agrave;nh, th&acirc;n c&acirc;y lớn, nhu cầu nước nhiều th&igrave; trồng trong một chậu lớn sẽ gi&uacute;p giữ ẩm l&acirc;u. C&ograve;n nếu chỉ để trồng những c&agrave;nh gi&acirc;m mới mọc rễ v&agrave; c&ograve;n yếu th&igrave; n&ecirc;n chọn chậu nhỏ, để kh&ocirc;ng bị ngậm nhiều nước sẽ khiến rễ c&acirc;y bị thối. L&yacute; tưởng nhất l&agrave; những chậu c&oacute; chiều cao 30cm, v&agrave; đường k&iacute;nh khoảng 40cm hoặc chậu men cỡ số 4.</p>
                
                <h3><strong>Vị tr&iacute; đặt c&acirc;y hoa hồng&nbsp;</strong></h3>
                
                <p>Hoa hồng l&agrave; loại c&acirc;y th&iacute;ch hợp sống trong điều kiện tho&aacute;ng gi&oacute; v&agrave; c&oacute; nhiều &aacute;nh nắng. Nh&agrave; ở c&aacute;c th&agrave;nh phố lớn hiện nay thường bị che khuất, thiếu &aacute;nh s&aacute;ng n&ecirc;n c&acirc;y dễ mắc bệnh, chất lượng hoa xấu, k&eacute;m năng suất. Do vậy bạn&nbsp;n&ecirc;n chọn nơi trồng c&acirc;y hoa hồng c&oacute; hướng nắng mặt trời chiếu buổi s&aacute;ng hay nắng chiếu xuy&ecirc;n,&nbsp;tr&aacute;nh &aacute;nh nắng gay gắt.</p>
                
                <h2>C&aacute;ch trồng c&acirc;y hoa hồng</h2>
                
                <p>Như c&aacute;c bạn đ&atilde; biết c&oacute; rất nhiều c&aacute;ch để trồng hoa hồng như trồng từ hạt, trồng bằng phương ph&aacute;p gi&acirc;m c&agrave;nh, t&aacute;ch bụi hay từ những c&acirc;y giống được ươm. Sau đ&acirc;y m&igrave;nh xin chia sẻ một trong những c&aacute;ch trồng đem lại hiệu quả cao v&agrave; dễ d&agrave;ng nhất, đ&oacute; l&agrave; trồng c&acirc;y hoa hồng bằng c&acirc;y giống được ươm sẵn. C&ugrave;ng bắt tay v&agrave;o thực hiện nh&eacute;.</p>
                
                <p>Đầu ti&ecirc;n h&atilde;y l&oacute;t dưới đ&aacute;y chậu một &iacute;t than củi kh&ocirc; hoặc sỏi để tho&aacute;t nước tốt, tạo độ th&ocirc;ng tho&aacute;ng tr&aacute;nh &uacute;ng rễ. sau đ&oacute; cho đất nhiều dưỡng chất đ&atilde; chuẩn bị v&agrave;o 2/3 chậu.</p>
                
                <p>Tiếp đến kho&eacute;t một lỗ ch&iacute;nh c&oacute; k&iacute;ch thước vừa với bầu đất của c&acirc;y v&agrave; đặt c&acirc;y v&agrave;o, phủ th&ecirc;m một lớp đất cao tầm 8/10 của chậu. Khi trồng c&acirc;y, d&ugrave;ng ng&oacute;n tay nhấn chặt để gốc kh&ocirc;ng bị lỏng. Để nơi tho&aacute;ng m&aacute;t 3-5 ng&agrave;y, tưới rất &iacute;t, chỉ cần giữ cho đất c&oacute; độ ẩm vừa phải. Sau đ&oacute; đem ra nắng v&agrave; tăng lượng nước tưới.</p>
                
                <p>Bạn c&oacute; thể cắm một c&aacute;i que ở giữa chậu mục đ&iacute;ch gi&uacute;p c&acirc;y đứng vững khi c&oacute; gi&oacute; to, tr&aacute;nh ảnh hưởng đến bộ rễ đang c&ograve;n non. Cẩn thận hơn th&igrave; cắm th&ecirc;m một v&agrave;i cọc ở xung quanh để bảo vệ c&acirc;y khỏi một số lo&agrave;i gặm nhấm như chuột.</p>
                
                <h2><strong>C&aacute;ch chăm s&oacute;c hoa hồng</strong></h2>
                
                <h3><strong>Ph&acirc;n b&oacute;n</strong></h3>
                
                <p>B&oacute;n ph&acirc;n cho c&acirc;y l&agrave; một phần kh&ocirc;ng thể thiếu trong qu&aacute; tr&igrave;nh <strong>trồng v&agrave; chăm s&oacute;c hoa hồng</strong>&nbsp;Sau khi trồng từ 3-5 ng&agrave;y phun ph&acirc;n b&oacute;n l&aacute; để gi&uacute;p c&acirc;y ph&aacute;t triển bộ rễ tốt gi&uacute;p hoa ra c&oacute; m&agrave;u sắc sống động. Từ 10-15 ng&agrave;y khi c&acirc;y ra rễ, ph&aacute;t ra l&aacute; non th&igrave; b&oacute;n bổ sung ph&acirc;n hạt Dynamic, ph&acirc;n dơi quanh gốc c&acirc;y rồi tưới nước gi&uacute;p c&acirc;y hấp thu tốt dinh dưỡng, sử dụng muỗng c&agrave; ph&ecirc; để định lượng ph&acirc;n b&oacute;n cho an to&agrave;n. Kết hợp xen kẽ định kỳ mỗi th&aacute;ng 1 lần đối với ph&acirc;n b&oacute;n l&aacute; v&agrave; b&oacute;n gốc. Tuyệt đối kh&ocirc;ng tưới ph&acirc;n l&ecirc;n hoa sẽ l&agrave;m hoa mau t&agrave;n.</p>
                
                <h3><strong>Tưới nước</strong></h3>
                
                <p>Hoa hồng l&agrave; c&acirc;y ưa nước n&ecirc;n&nbsp;cần bổ sung nước cho c&acirc;y đều đặn. Nguy&ecirc;n nh&acirc;n ch&iacute;nh của hiện tượng l&aacute; bị v&agrave;ng v&agrave; rụng l&agrave; do c&acirc;y bị thiếu nước. Bạn n&ecirc;n tưới c&acirc;y bằng v&ograve;i phun nhẹ tưới đều v&agrave;o buổi s&aacute;ng, v&agrave;o c&aacute;c ng&agrave;y nắng gắt n&ecirc;n tưới th&ecirc;m cho c&acirc;y v&agrave;o l&uacute;c chiều m&aacute;t nhưng kh&ocirc;ng qu&aacute; muộn, tr&aacute;nh trường hợp l&aacute; v&agrave; nụ c&ograve;n ướt qua đ&ecirc;m dễ tạo m&ocirc;i trường cho s&acirc;u bệnh ph&aacute;t triển. M&aacute;ch nhỏ với c&aacute;c bạn &rdquo; nước vo gạo &rdquo; cũng chứa rất nhiều chất dinh dưỡng c&oacute; lợi cho việc nu&ocirc;i dưỡng c&acirc;y.</p>
                
                <h3><strong>Cắt tỉa c&agrave;nh&nbsp;</strong></h3>
                
                <p>Khi c&acirc;y đ&atilde; ph&aacute;t triển tốt, nhiều c&agrave;nh v&agrave; nh&aacute;nh chen nhau, bạn n&ecirc;n thường xuy&ecirc;n cắt bỏ c&agrave;nh, l&aacute; hoa bị hư. Khi cắt cần cắt bấm ngọn&nbsp;</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/tia-canh.jpg" style="height:267px; width:400px" /></p>
                
                <h3><strong>Ph&ograve;ng trừ s&acirc;u bệnh g&acirc;y hại cho c&acirc;y hoa hồng</strong></h3>
                
                <p>Trồng trong điều kiện thiếu &aacute;nh s&aacute;ng, tưới nước qu&aacute; nhiều hay m&ocirc;i trường qu&aacute; ẩm đều l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y bệnh chủ yếu ở hoa hồng. C&aacute;c bệnh nấm c&acirc;y hay sự tấn c&ocirc;ng của những lo&agrave;i c&ocirc;n tr&ugrave;ng g&acirc;y hại sẽ khiến c&acirc;y suy kiệt dần. Một số th&ocirc;ng tin dưới đ&acirc;y sẽ gi&uacute;p bạn &rdquo; bắt mạch &rdquo; v&agrave; ngăn ngừa vườn hồng của bạn khỏi s&acirc;u bệnh.</p>
                
                <p><strong>Bệnh phấn trắng</strong></p>
                
                <p>Vị tr&iacute; thường thấy tr&ecirc;n c&aacute;c l&aacute; non, c&aacute;c l&aacute; b&aacute;nh tẻ, ch&uacute;ng ph&aacute;t triển rất nhanh l&agrave;m l&aacute; biến dạng, th&acirc;n kh&ocirc;, c&acirc;y chết, bạn c&oacute; thể d&ugrave;ng thuốc Score 250 ND hoặc Anvil 5 SC để chữa bệnh n&agrave;y cho c&acirc;y.</p>
                
                <p>Bệnh đốm đen</p>
                
                <p>Khi l&aacute; v&agrave;ng, rụng h&agrave;ng loạt, theo d&otilde;i thấy xuất hiện vết ở cả 2 mặt l&aacute; l&agrave; những biểu hiện của bệnh đốm đen. Thuốc đặc trị cho bệnh n&agrave;y ch&iacute;nh l&agrave;&nbsp;Daconil 500 SC, Đồng Oxyclorua 30 BTN, Anvil 5 SC.</p>
                
                <p>Bệnh gỉ sắt</p>
                
                <p>L&aacute; bị bệnh c&oacute; nốt lấm tấm v&agrave;ng cam, hoặc đỏ gạch như m&agrave;u của gỉ sắt, thuốc ph&ograve;ng trừ&nbsp;l&agrave; Kocide, Vimonyl 72 BTN, Daconil 500 SC.</p>
                
                <p>Rệp</p>
                
                <p>Căn bệnh phổ biến nhất của c&acirc;y h&ograve;a hồng l&agrave; rệp. Nhiệt độ 20 &ndash; 22 độ C, độ ẩm cao (75% &ndash; 80%) l&agrave; điều kiện l&yacute; tưởng để rệp ph&aacute;t triển, sinh s&ocirc;i nảy nở. Ch&uacute;ng c&oacute; m&agrave;u đỏ, xanh hoặc x&aacute;m, thường tập trung chủ yếu ở những mầm non, nụ hoa v&agrave; phần ngọn. Khi số lượng rệp xuất hiện chưa nhiều thay v&igrave; d&ugrave;ng thuốc Supaside 40 ND nồng độ 0,15%, Supathion, Thiodal để ti&ecirc;u diệt ch&uacute;ng, ta c&oacute; thể l&agrave;m theo c&aacute;ch sau, vừa hiệu quả lại, nguy&ecirc;n liệu dễ t&igrave;m, lại vừa tiết kiệm kinh tế: bạn d&ugrave;ng một miếng b&ocirc;ng, thấm nước v&agrave; ốp nhẹ v&agrave;o những vị tr&iacute; c&oacute; rệp, rệp sẽ bị d&iacute;nh v&agrave;o miếng b&ocirc;ng. Rất đơn giản phải kh&ocirc;ng ? H&atilde;y ki&ecirc;n tr&igrave; l&agrave;m li&ecirc;n tục 3-5 ng&agrave;y để sạch b&oacute;ng rệp nh&eacute;.</p>
                
                <h2>Lời kết</h2>
                
                <p>Th&uacute; chơi hoa hồng tao nh&atilde; m&agrave; cũng lắm c&ocirc;ng phu. Để c&oacute; được những kh&oacute;m hoa hồng ưng &yacute;, tỏa hương thơm ng&aacute;t khiến tinh thần sảng kho&aacute;i sau những giờ lao động mệt mỏi đ&ograve;i hỏi sự tỉ mỉ, chăm ch&uacute;t của người trồng. Hy vọng b&agrave;i viết n&agrave;y của plant-store&nbsp;sẽ gi&uacute;p c&aacute;c bạn hiểu th&ecirc;m về c&aacute;ch trồng, chăm s&oacute;c c&acirc;y hoa hồng v&agrave; ph&ograve;ng ngừa s&acirc;u bệnh để c&acirc;y kh&ocirc;ng những lu&ocirc;n xanh tốt m&agrave; c&ograve;n nở rộ quanh năm.</p>
                
                <p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => 'Cách chọn quất chơi tết bền, đẹp và hợp phong thủy',
                'slug' => Str::of('Cách chọn quất chơi tết bền, đẹp và hợp phong thủy')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/vdEriSrTY7NVIGTPsFwEets1Grq5ciNt.jpg',
                'feature_image_name' => 'chon-quat.jpg',
                'content' => '<p>B&ecirc;n cạnh đ&agrave;o, quất l&agrave; một trong những c&acirc;y cảnh kh&ocirc;ng thể thiếu trong mỗi dịp tết. Quất l&agrave; biểu tượng của sự sung t&uacute;c, th&agrave;nh đạt, hạnh ph&uacute;c trong năm mới. Những kinh nghiệm dưới đ&acirc;y sẽ hướng dẫn c&aacute;c bạn&nbsp;<strong>c&aacute;ch chọn quất chơi tết</strong>&nbsp;vừa bền, đẹp lại hợp phong thủy nữa đ&oacute;. Bạn đừng bỏ qua để c&oacute; một chậu c&acirc;y cảnh ưng &yacute; trong dịp xu&acirc;n Canh T&yacute; n&agrave;y nh&eacute;.</p>

                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/quat-khong-gian-gia-dinh.jpg" style="height:267px; width:400px" /></p>
                
                <ol>
                    <li>
                    <h2><strong>Chia sẻ c&aacute;ch chọn quất chơi Tết chi tiết nhất</strong></h2>
                    </li>
                </ol>
                
                <p>Một c&agrave;nh quất cảnh được gọi là đẹp phải hội tụ đủ tứ qu&yacute; bao gồm: D&aacute;ng đẹp, quả đẹp v&agrave; đủ xanh v&agrave;ng, l&aacute; c&oacute; lộc non mơn mởn v&agrave; c&oacute; ch&uacute;t nụ hoa. Đ&acirc;y l&agrave; những yếu tố đ&aacute;nh gi&aacute; một c&acirc;y quất đẹp, hợp phong thủy v&agrave; xứng đ&aacute;ng để trưng diện trong mỗi dịp tết đến xu&acirc;n về.</p>
                
                <p>Để c&oacute; được một c&acirc;y quất ưng &yacute; trong dịp tết, bạn n&ecirc;n đến c&aacute;c vườn quất để tham khảo v&agrave; lựa chọn. T&ugrave;y v&agrave;o nhu cầu cũng như t&igrave;nh h&igrave;nh thị trường quất, gi&aacute; th&agrave;nh sẽ kh&aacute;c nhau.</p>
                
                <p>Ngo&agrave;i ra để chơi quất đ&uacute;ng dịp tết, bạn kh&ocirc;ng n&ecirc;n mua quất qu&aacute; sớm để tr&aacute;nh t&igrave;nh trạng đến ng&agrave;y tết quất đ&atilde; t&agrave;n v&agrave; kh&ocirc;ng c&ograve;n được như mong muốn.</p>
                
                <h3><strong><em>1.1. Chọn d&aacute;ng c&acirc;y quất</em></strong></h3>
                
                <p>D&aacute;ng l&agrave; phương của c&acirc;y (chiều dọc của th&acirc;n c&acirc;y) so với mặt phẳng nằm ngang hay so với mặt chậu.</p>
                
                <p>C&acirc;y quất c&oacute; c&aacute;c d&aacute;ng sau được nhiều người lựa chọn.:</p>
                
                <p>&ndash; D&aacute;ng trực: Đ&acirc;y l&agrave; c&acirc;y quất c&oacute; trục th&acirc;n c&acirc;y thẳng g&oacute;c với mặt đất, nếu nh&igrave;n tổng thể bạn sẽ thấy giữa ngọn v&agrave; gốc h&igrave;nh th&agrave;nh đường thẳng hoặc gần thẳng đứng.</p>
                
                <p>C&acirc;y quất c&oacute; h&igrave;nh d&aacute;ng n&agrave;y mang &yacute; nghĩa đ&oacute; l&agrave; sự hi&ecirc;n ngang, bất khuất, vượt qua mọi kh&oacute; khăn trong cuộc sống.</p>
                
                <p>&ndash; D&aacute;ng xi&ecirc;u/nghi&ecirc;ng hay c&ograve;n gọi l&agrave; d&aacute;ng t&agrave;. Đ&acirc;y l&agrave; d&aacute;ng m&agrave; th&acirc;n c&acirc;y hơi nghi&ecirc;ng so với phương nằm ngang khoảng 20 &ndash; 70 độ.</p>
                
                <p>C&acirc;y quất d&aacute;ng n&agrave;y l&agrave; biểu tượng của người phụ nữ mềm mại v&agrave; duy&ecirc;n d&aacute;ng, nh&atilde; nhặn. Kh&ocirc;ng những thế c&ograve;n thể hiện &yacute; ch&iacute; ki&ecirc;n cường, kh&oacute; khăn bao nhi&ecirc;u vẫn vượt qua v&agrave; vươn l&ecirc;n.</p>
                
                <p>&ndash; D&aacute;ng ho&agrave;nh: Đ&acirc;y l&agrave; d&aacute;ng m&agrave; c&acirc;y nằm ngang so với mặt chậu. Trong phong thủy, d&aacute;ng n&agrave;y thể hiện sự mềm mại, uyển chuyển, vượt qua mọi thử th&aacute;ch cũng như kh&oacute; khăn trong cuộc sống.</p>
                
                <p>&ndash; D&aacute;ng huyền l&agrave; d&aacute;ng l&agrave; c&acirc;y c&oacute; gốc trong chạu nhưng th&acirc;n c&acirc;y trườn qua m&eacute;p chậu v&agrave; đổ xuống dưới như d&ograve;ng th&aacute;c đổ. Ngọn c&acirc;y d&agrave;i hơn đ&aacute;y chậu v&agrave; c&oacute; xu hướng ng&oacute;c l&ecirc;n tr&ecirc;n.</p>
                
                <p>&Yacute; nghĩa của d&aacute;ng n&agrave;y đ&oacute; l&agrave; sự ki&ecirc;n tr&igrave;, nhẫn nại trước mọi b&atilde;o t&aacute;p phong ba của cuộc sống, lu&ocirc;n hướng tới tương lai ph&aacute;t triển.</p>
                
                <p>Để tạo d&aacute;ng cho c&acirc;y, t&ugrave;y v&agrave;o h&igrave;nh d&aacute;ng vốn c&oacute; của c&acirc;y, người trồng quất sẽ đưa ra h&igrave;nh d&aacute;ng n&agrave;o ph&ugrave; hợp nhất với c&acirc;y m&agrave; kh&ocirc;ng ảnh hưởng đến sự sinh trưởng về sau.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-quat.jpg" style="height:228px; width:400px" /></p>
                
                <h3><strong><em>1.2. C&aacute;ch chọn thế cho c&acirc;y quất</em></strong></h3>
                
                <p>Thế được hiểu l&agrave; nghệ thuật biểu đạt sự ẩn dụ, thể hiện tinh thần, tư tưởng theo truyền thống văn h&oacute;a m&agrave; người trồng quất muốn mang đến trong ch&iacute;nh sản phẩm của m&igrave;nh.</p>
                
                <p>&ndash; Thế long phượng vần vũ: Rồng v&agrave; phượng được xem l&agrave; biểu tượng cao qu&yacute; trong bộ Tứ Linh. Rồng l&agrave; biểu tượng cho người cha, người chồng, qu&acirc;n tử. Phượng l&agrave; biểu tượng của người vợ, người mẹ, người phụ nữ. Sự kết hợp n&agrave;y mang đến biểu tượng của hạnh ph&uacute;c lứa đ&ocirc;i, may mắn thịnh vượng trong c&ocirc;ng danh v&agrave; sự nghiệp.</p>
                
                <p>&ndash; Thế C&aacute; ch&eacute;p h&oacute;a rồng thể hiện cho sự thăng quan tiến chức, đỗ đạt trong thi cử học h&agrave;nh. Đồng thời mang đến may mắn, sung t&uacute;c tốt đẹp cho gia chủ.</p>
                
                <p>&ndash; Thế Phượng m&uacute;a đ&oacute;n xu&acirc;n sẽ c&oacute; c&agrave;nh thứ nhất uốn ra ph&iacute;a sau l&agrave;m đu&ocirc;i chim, hai c&agrave;nh tả hữu uốn th&agrave;nh c&aacute;nh chim đang m&uacute;a. Đ&acirc;y l&agrave; biểu tượng của t&igrave;nh y&ecirc;u, sự tươi mới, thay đổi t&iacute;ch cực trong cuộc sống.</p>
                
                <p>&ndash; Thế Tam Đa hay c&ograve;n gọi l&agrave; tam t&agrave;i, tam gi&aacute;o hay thi&ecirc;n, địa, nh&acirc;n. Thế n&agrave;y biểu tượng cho sự vĩnh cửu, sung t&uacute;c, hạnh ph&uacute;c, gi&agrave;u sang v&agrave; sống l&acirc;u.</p>
                
                <p>&ndash; Thế Ngũ Ph&uacute;c c&oacute; &yacute; nghĩa l&agrave; c&oacute; ph&uacute;c, tốt l&agrave;nh may mắn, c&oacute; lộc gi&agrave;u c&oacute;, nhiều t&agrave;i sản v&agrave; sống thọ.</p>
                
                <p>Để tạo thế đẹp sẽ được chủ vườn thực hiện v&agrave;o đầu th&aacute;ng 12 &acirc;m lịch. D&ugrave;ng d&acirc;y th&eacute;p nhỏ để điều chỉnh c&agrave;nh v&agrave;o vị tr&iacute; mong muốn, tạo ra những thế phong thủy đẹp. Sau đ&oacute; sẽ d&ugrave;ng cưa k&eacute;o cắt bỏ c&agrave;nh thừa để tạo thế cho c&acirc;y quất.</p>
                
                <h3><strong><em>1.3. Chọn l&aacute; quất</em></strong></h3>
                
                <p>L&aacute; của c&acirc;y quất khỏe mạnh sẽ c&oacute; m&agrave;u xanh đậm, cuống l&aacute; tươi v&agrave; khỏe. Khi chọn quất bạn n&ecirc;n lưu &yacute; điều n&agrave;y, tr&aacute;nh những c&acirc;y c&oacute; l&aacute; m&agrave;u v&agrave;ng hay bị h&eacute;o, như thế c&acirc;y sẽ kh&ocirc;ng được bền.</p>
                
                <h3><strong><em>1.4. Chọn quả quất</em></strong></h3>
                
                <p>C&acirc;y quất đẹp để chơi tết l&agrave; c&acirc;y quất c&oacute; cả quả xanh lẫn quả ch&iacute;n. Nếu bạn mong muốn đ&oacute;n nhiều t&agrave;i lộc, bạn c&oacute; thể chọn c&acirc;y c&oacute; nhiều quả xanh. Qu&agrave;nh quất ph&acirc;n bổ đều, t&aacute;n đều, quả to, tr&ograve;n đều v&agrave; căng mọng. Nếu quả bị h&eacute;o c&oacute; thể đ&oacute; l&agrave; quả được d&aacute;n v&agrave;o, một thời gian ngắn quả sẽ rụng, c&acirc;y rất xấu.</p>
                
                <h3><strong><em>1.5. K&iacute;ch thước của c&acirc;y quất</em></strong></h3>
                
                <p>T&ugrave;y v&agrave;o kh&ocirc;ng gian gia đ&igrave;nh bạn để lựa chọn k&iacute;ch thước c&acirc;y ph&ugrave; hợp. Bạn kh&ocirc;ng thể đặt một c&acirc;y quất to trong một kh&ocirc;ng gian chật hẹp phải kh&ocirc;ng, như vậy sẽ mất đi t&iacute;nh thẩm mỹ. V&igrave; vậy bạn n&ecirc;n c&acirc;n đối k&iacute;ch thước trước khi mua quất nh&eacute;.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/quat-khong-gian-gia-dinh.jpg" style="height:267px; width:400px" /></p>
                
                <h3><strong><em>1.6. Vầng đất</em></strong></h3>
                
                <p>Vầng đất dưới gốc c&acirc;y kh&ocirc;ng nhất thiết phải qu&aacute; to nhưng phải đảm bảo kh&ocirc;ng bị vỡ. Nếu kh&ocirc;ng, sức sống của rễ c&acirc;y sẽ bị ảnh hưởng nghi&ecirc;m trọng.</p>
                
                <p>Theo kinh nghiệm của những người chơi quất n&ecirc;n chọn những c&acirc;y c&ograve;n &ldquo;tơ&rdquo;. Tr&ecirc;n th&acirc;n c&acirc;y chưa c&oacute; c&aacute;c vết đồng t&acirc;m loang lổ, như vậy c&acirc;y c&ograve;n non chưa gi&agrave;. T&aacute;n c&acirc;y phải tr&ograve;n đều v&agrave; sai trĩu quả về c&aacute;c ph&iacute;a. Đẹp v&agrave; chơi bền hơn nữa l&agrave; những c&acirc;y c&oacute; nhiều lộc non, tươi, tr&ecirc;n đ&oacute; c&ograve;n c&oacute; đủ b&uacute;p, quả non, hoa v&agrave; nụ.</p>
                
                <ol>
                    <li>
                    <h2><strong>C&aacute;ch đặt c&acirc;y quất theo hướng</strong></h2>
                    </li>
                </ol>
                
                <p>Hướng l&agrave; một trng những yếu tố li&ecirc;n quan đến phong thủy, đặc biệt khi đặt chậu quất trong nh&agrave; v&agrave;o mỗi dịp tết. Vậy người mệnh n&agrave;o n&ecirc;n đặt hướng n&agrave;o sẽ tốt.</p>
                
                <p>Những người mệnh Hỏa n&ecirc;n đặt chậu mai theo hướng Đ&ocirc;ng, Nam, Bắc v&agrave; hướng Đ&ocirc;ng Nam.</p>
                
                <p>Người mệnh Thủy n&ecirc;n đặt mai theo hướng Đ&ocirc;ng, Bắc v&agrave; Đ&ocirc;ng Nam.</p>
                
                <p>Những người mệnh Mộc n&ecirc;n đặt mai theo hướng Đ&ocirc;ng, Nam v&agrave; Đ&ocirc;ng Nam sẽ mang lại t&agrave;i lộc, may mắn. Người mệnh Kim rất hợp với hướng T&acirc;y v&agrave; T&acirc;y Bắc.</p>
                
                <p>Người mệnh Thổ hợp hướng Nam, Đ&ocirc;ng Bắc, T&acirc;y Nam&hellip;</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => '3 loại cây được tặng trong dịp Noel',
                'slug' => Str::of('3 loại cây được tặng trong dịp Noel')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/3SfSJZhgsAF76M6D4qHwIysm7764xcHp.jpg',
                'feature_image_name' => 'cay-noel.jpg',
                'content' => '<p>C&oacute; lẽ hầu hết ch&uacute;ng ta&nbsp;đều biết&nbsp;đến ng&agrave;y lễ Gi&aacute;ng Sinh (Noel) nhưng về &yacute; nghĩa của n&oacute; th&igrave; kh&ocirc;ng phải ai cũng biết. Noel l&agrave; ng&agrave;y lễ kỷ niệm Ch&uacute;a Gi&ecirc;su được sinh ra, ở phương t&acirc;y v&agrave; những người d&acirc;n theo đạo th&igrave; đ&acirc;y c&ograve;n l&agrave; ng&agrave;y lễ của gia đ&igrave;nh, mọi thế hệ trong gia đ&igrave;nh c&ugrave;ng qu&acirc;y quần b&ecirc;n nhau v&agrave; trao tặng nhau những m&oacute;n qu&agrave;&nbsp;&yacute; nghĩa c&ugrave;ng những lời ch&uacute;c.</p>

                <p>Ngo&agrave;i ra Noel c&ograve;n l&agrave; một buổi lễ của trẻ em. V&agrave;o đ&ecirc;m Gi&aacute;ng Sinh những đứa trẻ tin rằng&nbsp;l&agrave; một đ&ecirc;m kỳ diệu m&agrave; mọi điều ước nguyện của ch&uacute;ng&nbsp;sẽ trở th&agrave;nh sự thật.&nbsp;Đối với giới trẻ hiện nay ng&agrave;y Noel cũng rất&nbsp;được ch&agrave;o&nbsp;đ&oacute;n, l&agrave; ng&agrave;y&nbsp;được&nbsp;đi chơi,&nbsp;sum họp với nhau. Tặng nhau những m&oacute;n qu&agrave; thể hiện t&igrave;nh y&ecirc;u thương.&nbsp;Ở b&agrave;i viết n&agrave;y&nbsp;Web C&acirc;y Cảnh sẽ giới thiệu&nbsp;3 loại c&acirc;y được tặng trong dịp Noel</p>
                
                <h2>Nguồn gốc của ng&agrave;y Lễ Gi&aacute;ng Sinh</h2>
                
                <p>Noel hay c&ograve;n gọi l&agrave; Lễ Gi&aacute;ng Sinh, N&ocirc;-en, Christmas, Xmas) l&agrave; một ng&agrave;y lễ kỷ niệm Ch&uacute;a Gi&ecirc;su được sinh ra. Theo niềm tin của phần lớn c&aacute;c t&iacute;n hữu Kit&ocirc; gi&aacute;o, Ch&uacute;a Gi&ecirc;su được sinh ra tại Bethlehem (B&ecirc;lem) thuộc xứ Judea (Giuđ&ecirc;a), thuộc Đế quốc La M&atilde; (ng&agrave;y nay l&agrave; 1 th&agrave;nh phố của Palestine) v&agrave;o khoảng giữa năm 7 TCN v&agrave; năm 2.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-noel.jpg" style="height:300px; width:400px" /></p>
                
                <p>Ng&agrave;y lễ gi&aacute;ng sinh được cử h&agrave;nh ch&iacute;nh thức v&agrave;o ng&agrave;y 25 th&aacute;ng 12 nhưng thường được mừng từ chiều tối ng&agrave;y 24 th&aacute;ng 12 bởi theo lịch Do Th&aacute;i, thời điểm t&iacute;nh bắt đầu một ng&agrave;y l&agrave; l&uacute;c ho&agrave;ng h&ocirc;n chứ kh&ocirc;ng phải nửa đ&ecirc;m. Lễ ch&iacute;nh thức ng&agrave;y 25 th&aacute;ng 12 được gọi l&agrave; &ldquo;lễ ch&iacute;nh ng&agrave;y&rdquo;, c&ograve;n lễ đ&ecirc;m 24 th&aacute;ng 12 gọi l&agrave; &ldquo;lễ vọng&rdquo; v&agrave; thường thu h&uacute;t nhiều người tham dự hơn. Nhiều gi&aacute;o hội Ch&iacute;nh thống gi&aacute;o Đ&ocirc;ng phương như ở Nga, Gruzia vẫn sử dụng lịch Julius để định ng&agrave;y n&agrave;y, cho n&ecirc;n lễ Gi&aacute;ng sinh của họ ứng với ng&agrave;y 7 th&aacute;ng 1 theo lịch Gregorius.</p>
                
                <h2>Những loại c&acirc;y&nbsp;được tặng l&agrave;m qu&agrave; Noel</h2>
                
                <p>Nhắc&nbsp;đến Noel th&igrave; c&oacute; lẽ mọi người sẽ nghĩ ngay&nbsp;đến c&acirc;y Th&ocirc;ng,&nbsp;&ocirc;ng gi&agrave; Noel v&agrave; những m&oacute;n qu&agrave;. Tuy nhi&ecirc;n c&acirc;y th&ocirc;ng th&igrave; kh&aacute; l&agrave; to kh&ocirc;ng c&oacute; loại&nbsp;c&acirc;y nhỏ&nbsp;để trang tr&iacute; ph&ugrave; hợp với kh&ocirc;ng gian trong nh&agrave; v&agrave; văn ph&ograve;ng. N&oacute;&nbsp;được thay thế bằng những loại c&acirc;y c&oacute; h&igrave;nh th&aacute;p tương&nbsp;đồng với c&acirc;y Th&ocirc;ng Noel như: C&acirc;y T&ugrave;ng Thơm, C&acirc;y T&ugrave;ng Th&aacute;p&hellip;</p>
                
                <h3>C&acirc;y T&ugrave;ng Thơm</h3>
                
                <p><strong>C&acirc;y T&ugrave;ng Thơm&nbsp;</strong>hay c&ograve;n c&aacute;i t&ecirc;n gọi kh&aacute;c l&agrave; T&ugrave;ng Hương, T&ugrave;ng Chanh. C&acirc;y c&oacute; t&ecirc;n khoa học&nbsp;Cupressus macrocarpa, thuộc họ T&ugrave;ng, trắc thuộc l&aacute; kim c&oacute; m&agrave;u xanh n&otilde;n chuối, c&acirc;y c&oacute; nguồn gốc từ ph&iacute;a Nam Ch&acirc;u Mỹ, được trồng nhiều ở c&aacute;c v&ugrave;ng n&uacute;i c&oacute; nhiệt độ ẩm thấp. Sau n&agrave;y c&acirc;y được đưa về Việt Nam v&agrave; trồng nhiều ở nơi c&oacute; kh&iacute; hậu m&aacute;t mẻ, để nh&acirc;n giống. Sau khi c&acirc;y cứng c&aacute;p th&igrave; được chuyển đến c&aacute;c nơi kh&aacute;c nhau để l&agrave;m c&acirc;y cảnh văn ph&ograve;ng, để b&agrave;n trang tr&iacute;.&nbsp;<strong>C&acirc;y T&ugrave;ng Thơm</strong>&nbsp;mang đến sự thoải m&aacute;i, sảng kho&aacute;i v&agrave; giảm stress gi&uacute;p gia chủ tập trung hơn trong c&ocirc;ng việc để đưa ra được những quyết định ch&iacute;nh x&aacute;c. C&acirc;y ph&ugrave; hợp để l&agrave;m trang tr&iacute; đ&ecirc;m noel, gi&aacute;ng sinh, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, văn ph&ograve;ng&hellip;</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-tung.jpg" style="height:533px; width:400px" /></p>
                
                <p>C&acirc;y T&ugrave;ng Thơm chỉ c&oacute; 2 cỡ, cỡ nhỏ cả chậu cao khoảng 50 &ndash; 60 cm, cỡ lớn từ 85 &ndash; 100 cm ph&ugrave; hợp&nbsp;để b&agrave;n, kệ tivi, trang tr&iacute; g&oacute;c nhỏ.</p>
                
                <h3>C&acirc;y Sơn T&ugrave;ng (T&ugrave;ng Th&aacute;p)</h3>
                
                <p>C&acirc;y Sơn T&ugrave;ng hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y T&ugrave;ng Th&aacute;p sống v&agrave; th&iacute;ch hợp với kh&iacute; hậu gi&oacute; m&ugrave;a&nbsp;ở Việt Nam n&ecirc;n&nbsp;được trồng kh&aacute; rộng r&atilde;i, thuộc loại c&acirc;y l&aacute; kim c&oacute; dạng h&igrave;nh th&aacute;p, l&aacute; c&acirc;y c&oacute; m&agrave;u xanh&nbsp;đậm kh&aacute; giống với c&acirc;y th&ocirc;ng Noel n&ecirc;n trong dịp Noel (gi&aacute;ng sinh) người ta hay mua c&acirc;y Sơn T&ugrave;ng&nbsp;để về trang tr&iacute; hay&nbsp;để l&agrave;m qu&agrave; tặng.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-son-tung.jpg" style="height:535px; width:400px" /></p>
                
                <p>C&acirc;y Sơn T&ugrave;ng c&oacute; rất nhiều k&iacute;ch cỡ dao&nbsp;động từ 50cm &ndash; 3m bạn c&oacute; thể chọn lựa chiều cao t&ugrave;y th&iacute;ch&nbsp;để l&agrave;m c&acirc;y trang tr&iacute; Noel v&agrave; qu&agrave; tặng.</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => '[Mẹo vặt] Không lo tưới nước cho cây vào ngày hè',
                'slug' => Str::of('[Mẹo vặt] Không lo tưới nước cho cây vào ngày hè')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/wxqPvtJxSiOYW7wsHSyOhF3cVr4rEZ4L.jpg',
                'feature_image_name' => 'meo-vat.jpg',
                'content' => '<p>Việc tưới nước vẫn lu&ocirc;n l&agrave; vấn&nbsp;đề nhức nhối với người chăm c&acirc;y, tưới nhiều qu&aacute; th&igrave; c&acirc;y chết v&igrave;&nbsp;&uacute;ng m&agrave; qu&ecirc;n tưới th&igrave; c&acirc;y h&eacute;o m&agrave; chết. Nhất l&agrave; v&agrave;o những ng&agrave;y h&egrave; bạn chỉ cần qu&ecirc;n tưới nước 2 -3 h&ocirc;m th&igrave; c&acirc;y&nbsp;đ&atilde; c&oacute; hiện tượng h&eacute;o, v&agrave; nếu c&oacute; c&ocirc;ng việc hoặc qu&ecirc;n&nbsp;đi 1 tuần th&igrave; chắc vườn rau của bạn&nbsp;đ&atilde; kh&ocirc;ng c&ograve;n c&acirc;y n&agrave;o sống s&oacute;t. Dưới&nbsp;đ&acirc;y m&igrave;nh sẽ gợi&nbsp;&yacute; cho bạn mẹo&nbsp;tưới nước rất khoa học kh&ocirc;ng lo&nbsp;đất&nbsp;ẩm qu&aacute; hay kh&ocirc; qu&aacute; v&agrave; bạn c&oacute;&nbsp;đi một v&agrave;i tuần cũng kh&ocirc;ng lo c&acirc;y chết.</p>

                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/meo-vat.jpg" style="height:535px; width:400px" /></p>
                
                <p>Bạn chỉ cần cắt 1 chai nhỏ&nbsp;đựng nước v&agrave; 1 nửa chai to&nbsp;&uacute;p b&ecirc;n tr&ecirc;n, thứ nhất tr&aacute;nh con vật, thứ 2 l&agrave; gi&uacute;p khuyến xạ&nbsp;&aacute;nh s&aacute;ng&nbsp;để nước bốc hơn nhiều hơn.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/meo-vat-1.jpg" style="height:380px; width:400px" /></p>
                
                <p>Phương ph&aacute;p n&agrave;y hay&nbsp;ở chỗ, trời n&oacute;ng nước sẽ bốc hơi nhiều hơn, trời m&aacute;t th&igrave; lượng nước bốc hơi&nbsp;sẽ giảm xuống v&agrave; nước sẽ ngựng tụ tr&ecirc;n th&agrave;nh b&igrave;nh v&agrave; ngấm từ từ xuống&nbsp;đất.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/meo-vat-2.jpg" style="height:533px; width:400px" /></p>
                
                <p>&nbsp;</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => 'Cách chăm sóc cây cảnh trong nhà',
                'slug' => Str::of('Cách chăm sóc cây cảnh trong nhà')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/a8rQsanPH3E7puA5oYuCPt2nuyF9VCig.jpg',
                'feature_image_name' => 'cham-soc-trong-nha.jpg',
                'content' => '<p>C&acirc;y cảnh đặt trong nh&agrave; sẽ c&oacute; c&aacute;ch chăm s&oacute;c kh&aacute;c với c&acirc;y cảnh đặt ngo&agrave;i trời hay trồng ở vườn. Bởi c&aacute;c yếu tố như &aacute;nh s&aacute;ng, độ ẩm sẽ kh&aacute;c nhau, v&igrave; vậy việc chăm s&oacute;c cũng sẽ cầu kỳ hơn. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chia sẻ tới c&aacute;c bạn c&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; để bạn tham khảo, gi&uacute;p c&acirc;y sinh trưởng v&agrave; ph&aacute;t triển tốt, chắc chắn sẽ rất hữu &iacute;ch cho bạn đ&oacute;.</p>

                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cham-soc-trong-nha.jpg" style="height:300px; width:400px" /></p>
                
                <ol>
                    <li>
                    <h2><strong>&Aacute;nh s&aacute;ng khi chăm s&oacute;c c&acirc;y cảnh trong nh&agrave;</strong></h2>
                    </li>
                </ol>
                
                <p>Để chăm s&oacute;c&nbsp;<a href="https://webcaycanh.com/cay-canh-trong-nha/"><strong>c&acirc;y cảnh trong nh&agrave;</strong></a>, yếu tố đầu ti&ecirc;n bạn cần lưu &yacute; đ&oacute; l&agrave; &aacute;nh s&aacute;ng. Vậy &aacute;nh s&aacute;ng n&agrave;o ph&ugrave; hợp để c&acirc;y ph&aacute;t triển. T&ugrave;y từng đặc điểm của mỗi loại c&acirc;y sẽ c&oacute; lượng &aacute;nh s&aacute;ng kh&aacute;c nhau. C&oacute; những loại c&acirc;y cảnh chịu được &aacute;nh s&aacute;ng thấp, nhưng c&oacute; những c&acirc;y cảnh cần &aacute;nh s&aacute;ng tự nhi&ecirc;n mới ph&aacute;t triển được.</p>
                
                <p>Tuy nhi&ecirc;n d&ugrave; l&agrave; những c&acirc;y c&oacute; khả năng chịu &aacute;nh s&aacute;ng thấp th&igrave; vẫn phải đảm bảo đầy đủ &aacute;nh s&aacute;ng cho c&acirc;y ph&aacute;t triển. Nếu bạn đặt c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch, bạn n&ecirc;n đảm bảo đặt c&acirc;y ở vị tr&iacute; c&oacute; khoảng 2 &ndash; 3 giờ c&oacute; &aacute;nh s&aacute;ng tự nhi&ecirc;n trong ph&ograve;ng. Hoặc bạn n&ecirc;n đặt c&acirc;y phơi nắng 2 &ndash; 3 giờ mỗi tuần để c&acirc;y ph&aacute;t triển tự nhi&ecirc;n.</p>
                
                <p>&Aacute;nh s&aacute;ng &lsquo;mạnh&rsquo; thường xuất hiện ở ph&iacute;a trước c&aacute;c cửa sổ hướng nam, cửa sổ lớn ở ph&iacute;a đ&ocirc;ng hoặc ph&iacute;a t&acirc;y kh&ocirc;ng bị cản trở. C&aacute;c cửa sổ nhỏ ở ph&iacute;a đ&ocirc;ng hoặc ph&iacute;a t&acirc;y kh&ocirc;ng c&oacute; g&igrave; cản trở cung cấp &aacute;nh s&aacute;ng &lsquo;trung b&igrave;nh&rsquo;. Cửa sổ ph&iacute;a bắc v&agrave; những cửa sổ c&oacute; k&iacute;nh mờ chỉ cung cấp &aacute;nh s&aacute;ng &lsquo;thấp&rsquo;. C&acirc;y của bạn sẽ chỉ nhận được &aacute;nh s&aacute;ng thấp nếu ch&uacute;ng c&aacute;ch hơn 2 m&eacute;t so với cửa sổ bất kỳ hướng n&agrave;o.</p>
                
                <p>Ngo&agrave;i ra, nhiều gia đ&igrave;nh c&ograve;n sử dụng th&ecirc;m &aacute;nh s&aacute;ng ph&aacute;t ra từ loại đ&egrave;n giống như &aacute;nh s&aacute;ng mặt trời n&ecirc;n c&acirc;y c&oacute; thể quang hợp được như m&ocirc;i trường b&ecirc;n ngo&agrave;i, c&acirc;y sẽ ph&aacute;t triển tốt hơn. Tuy nhi&ecirc;n nếu tận dụng được &aacute;nh s&aacute;ng tự nhi&ecirc;n sẽ tốt hơn so với &aacute;nh s&aacute;ng nh&acirc;n tạo, c&acirc;y quang hợp tốt, l&aacute; xanh v&agrave; sinh trưởng khỏe mạnh.</p>
                
                <h2><strong>Lượng nước cho c&acirc;y cảnh trong nh&agrave;</strong></h2>
                
                <p>Yếu tố thứ hai cần lưu &yacute; khi <strong>chăm s&oacute;c c&acirc;y cảnh trong nh&agrave;</strong>&nbsp;đ&oacute; l&agrave; lượng nước. Th&ocirc;ng thường với c&acirc;y trồng trong nh&agrave; kh&ocirc;ng n&ecirc;n tưới qu&aacute; nhiều nước. Khi n&agrave;o bạn thấy đất kh&ocirc; th&igrave; l&uacute;c đ&oacute; n&ecirc;n tưới nước l&agrave; được.</p>
                
                <p>Ngo&agrave;i ra khi tưới nước cho c&acirc;y, bạn n&ecirc;n d&ugrave;ng b&igrave;nh phun nước để phun cho c&acirc;y. V&agrave;o m&ugrave;a h&egrave; n&ecirc;n phun ng&agrave;y 2 lần, m&ugrave;a đ&ocirc;ng ng&agrave;y một lần để tăng cường độ ẩm, l&agrave;m sạch l&aacute;, c&oacute; lợi cho qu&aacute; tr&igrave;nh quang hợp của c&acirc;y, l&agrave;m c&acirc;y xanh tốt.</p>
                
                <p>T&ugrave;y v&agrave;o từng loại c&acirc;y c&oacute; khả năng chịu nước kh&aacute;c nhau, đồng thời lượng nước cũng kh&aacute;c nhau để c&acirc;y ph&aacute;t triển. Bạn c&oacute; thể chọn những chậu c&acirc;y ph&ugrave; hợp, c&oacute; thể d&ugrave;ng chậu c&acirc;y cảnh c&oacute; đĩa đệm b&ecirc;n dưới để dễ d&agrave;ng di chuyển v&agrave; khả năng tho&aacute;t nước tốt, kh&ocirc;ng bị chảy nước ra nh&agrave;.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cham-soc-trong-nha-2.jpg" style="height:267px; width:400px" /></p>
                
                <ol>
                    <li>
                    <h2><strong>B&oacute;n ph&acirc;n cho c&acirc;y</strong></h2>
                    </li>
                </ol>
                
                <p>Lượng ph&acirc;n b&oacute;n cho c&acirc;y cảnh khi trồng trong nh&agrave; ph&ugrave; hợp sẽ gi&uacute;p th&uacute;c đẩy qu&aacute; tr&igrave;nh ph&aacute;t triển của c&acirc;y. Nếu bạn b&oacute;n qu&aacute; nhiều ph&acirc;n, c&acirc;y nhanh ph&aacute;t triển, l&agrave;m mất d&aacute;ng v&agrave; ph&aacute; thế. Thậm ch&iacute; c&ograve;n l&agrave;m chết c&acirc;y.</p>
                
                <p>Nhưng nếu b&oacute;n qu&aacute; &iacute;t sẽ dẫn đến c&acirc;y thiếu dưỡng chất, kh&oacute; ph&aacute;t triển v&agrave; l&agrave;m chết c&agrave;nh. V&igrave; vậy, c&aacute;ch tốt nhất l&agrave; khoảng nửa th&aacute;ng b&oacute;n ph&acirc;n cho c&acirc;y một lần, tỉ lệ b&oacute;n 5% ph&acirc;n tổng hợp cho c&acirc;y. Ngo&agrave;i ra, d&ugrave;ng nước vo gạo để tưới c&acirc;y cũng c&oacute; t&aacute;c dụng rất tốt cho sự ph&aacute;t triển của c&acirc;y.</p>
                
                <p>C&acirc;y trồng trong nh&agrave; hạn chế sử dụng thuốc trừ s&acirc;u v&igrave; sẽ ảnh hưởng đến sức khỏe của ch&iacute;nh bạn. V&igrave; vậy nếu c&acirc;y c&oacute; biểu hiện của s&acirc;u bệnh, đầu ti&ecirc;n bạn n&ecirc;n d&ugrave;ng cồn để lau sạch l&aacute; v&agrave; gốc sau đ&oacute; mới sử dụng c&aacute;c loại thuốc hữu cơ để trừ s&acirc;u bệnh.</p>
                
                <p>Nếu c&acirc;y c&oacute; hiện tượng v&agrave;ng &uacute;a, kh&ocirc; h&eacute;o v&agrave; rụng l&aacute;&hellip; bạn cần c&oacute; biện ph&aacute;p chăm s&oacute;c kịp thời để c&acirc;y phục hồi lại sức sống. Kh&ocirc;ng n&ecirc;n cho c&acirc;y tiếp x&uacute;c với &aacute;nh s&aacute;ng mặt trời, g&acirc;y ảnh hưởng bất lợi đến c&agrave;nh, l&aacute; v&agrave; c&oacute; thể l&agrave;m chết c&acirc;y. V&igrave; vậy n&ecirc;n đặt c&acirc;y ở những nơi tho&aacute;ng m&aacute;t, trong l&agrave;nh v&agrave; tr&aacute;nh gi&oacute; mạnh.</p>
                
                <ol>
                    <li>
                    <h2><strong>Trồng lại c&acirc;y h&agrave;ng năm</strong></h2>
                    </li>
                </ol>
                
                <p>Trồng lại c&acirc;y h&agrave;ng năm cũng l&agrave; c&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; m&agrave; bạn n&ecirc;n lưu &yacute;. C&acirc;y được trồng lại bởi c&acirc;y đ&atilde; qu&aacute; to so với chậu, bạn n&ecirc;n trồng lại c&acirc;y &iacute;t nhất 1 lần/năm. Thời điểm th&iacute;ch hợp để trồng lại c&acirc;y đ&oacute; l&agrave; m&agrave;u xu&acirc;n hay đầu h&egrave;, l&uacute;c đ&oacute; thời tiết thuận lợi.</p>
                
                <p>Khi đưa c&acirc;y ra khỏi chậu, lắc mạnh để đất cũ rơi khỏi rễ. Nếu bầu rễ qu&aacute; chặt v&agrave; kh&ocirc;ng thể nhấc l&ecirc;n được, sử dụng một con dao lớn để l&aacute;ch v&agrave;o phần đất s&aacute;t th&agrave;nh chậu v&agrave; dưới đ&aacute;y chậu. Sau khi nhấc c&acirc;y ra, h&atilde;y th&ecirc;m đất mới v&agrave;o đ&aacute;y chậu. Đặt c&acirc;y trở lại v&agrave; th&ecirc;m đất mới xung quanh chậu. Mỗi loại c&acirc;y ph&ugrave; hợp với từng loại đất kh&aacute;c nhau, v&igrave; vậy bạn n&ecirc;n lưu &yacute; t&igrave;m hiểu trước khi sang chậu cho c&acirc;y nh&eacute;.</p>
                
                <p>C&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; kh&ocirc;ng kh&oacute;, bạn cần lưu &yacute; một số yếu tố tr&ecirc;n khi trồng nh&eacute;. Đảm bảo c&aacute;c yếu tố tr&ecirc;n, c&acirc;y sẽ ph&aacute;t triển tốt, kh&ocirc;ng bị s&acirc;u bệnh v&agrave; ph&aacute;t triển tươi tốt. Hi vọng những th&ocirc;ng tin tr&ecirc;n sẽ gi&uacute;p bạn c&oacute; th&ecirc;m kinh nghiệm khi trồng c&acirc;y trong cũng như biết th&ecirc;m được kinh nghiệm chăm s&oacute;c c&acirc;y trong gia đ&igrave;nh của m&igrave;nh.</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
            [
                'name' => 'Những cây hoa trồng trong nhà tăng thẩm mỹ cho ngôi nhà',
                'slug' => Str::of('Những cây hoa trồng trong nhà tăng thẩm mỹ cho ngôi nhà')->slug('-'),
                'feature_image_path' =>  '/public/uploads/posts/3/olOqvReOzmu9bZOL5MrIH8zRrTcw3lup.jpg',
                'feature_image_name' => 'cay-trong-nha.jpg',
                'content' => '<p>Trong nh&agrave; của bạn kh&ocirc;ng thể thiếu c&acirc;y xanh phải kh&ocirc;ng. C&acirc;y xanh mang đến kh&ocirc;ng gian sống trong l&agrave;nh, thư th&aacute;i v&agrave; thoải m&aacute;i. C&acirc;y xanh c&ograve;n gi&uacute;p trang tr&iacute; cho ng&ocirc;i nh&agrave; bạn th&ecirc;m phần đẹp v&agrave; thẩm mỹ. Trang tr&iacute; bằng c&acirc;y xanh cho ng&ocirc;i nh&agrave; l&agrave; một trong những phương ph&aacute;p tiết kiệm chi ph&iacute; nhất. Trong b&agrave;i viết n&agrave;y ch&uacute;ng t&ocirc;i sẽ chia sẻ tới c&aacute;c bạn những c&acirc;y hoa trồng trong nh&agrave; cực đẹp nh&eacute;.</p>

                <h2><strong>Trồng Hoa Oải Hương trong nh&agrave;</strong></h2>
                
                <p>C&acirc;y hoa đầu ti&ecirc;n bạn c&oacute; thể trồng trong nh&agrave; đ&oacute; l&agrave; Hoa Oải Hương. Hoa Oải Hương nhỏ nhắn xinh xắn kh&ocirc;ng mất nhiều diện t&iacute;ch, ph&ugrave; hợp với những ng&ocirc;i nh&agrave; c&oacute; diện t&iacute;ch trung b&igrave;nh. Những b&ocirc;ng Hoa Oải Hương c&oacute; m&ugrave;i thơm nhẹ tốt cho khứu gi&aacute;c của mỗi người.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-trong-nha.jpg" style="height:320px; width:400px" /></p>
                
                <p>Để đảm bảo t&iacute;nh thẩm mỹ, bạn n&ecirc;n chọn mua những c&acirc;y Hoa Oải Hương đ&atilde; nở ch&uacute;m ch&iacute;m hoa. Lo&agrave;i hoa n&agrave;y c&oacute; khả năng chịu hạn tốt, hoa sẽ nở to v&agrave; đẹp hơn khi đặt ở vị tr&iacute; c&oacute; nhiều &aacute;nh s&aacute;ng mặt trời. Để giữ Hoa Oải Hương được l&acirc;u, khi thấy những b&ocirc;ng hoa c&oacute; hiện tượng h&eacute;o, bạn n&ecirc;n ngắt bỏ để c&acirc;y tiếp tục nảy nở ra những b&ocirc;ng hoa mới đẹp hơn. Hoặc bạn c&oacute; thể để kh&ocirc; Hoa Oải Hương v&agrave; treo trong nh&agrave;, sẽ gi&uacute;p ng&ocirc;i nh&agrave; của bạn lu&ocirc;n c&oacute; m&ugrave;i thơm của hoa đ&oacute;. Đặc biệt, m&ugrave;i thơm tỏa ra từ Hoa Oải Hương sẽ gi&uacute;p bạn c&oacute; giấc ngủ ngon v&agrave; cải thiện sức khỏe rất nhiều đ&oacute;.</p>
                
                <h2><strong>Trồng C&acirc;y Kim Ng&acirc;n trong nh&agrave;</strong></h2>
                
                <p>C&acirc;y hoa thứ hai bạn c&oacute; thể trồng trong nh&agrave; đ&oacute; l&agrave; C&acirc;y Kim Ng&acirc;n. C&acirc;y Kim Ng&acirc;n ở đ&acirc;y l&agrave; dạng c&acirc;y leo c&oacute; hoa chứ kh&ocirc;ng phải C&acirc;y Kim Ng&acirc;n để b&agrave;n như bạn vẫn thường thấy.</p>
                
                <p>C&acirc;y Kim Ng&acirc;n leo rất th&iacute;ch hợp để trồng ở ban c&ocirc;ng hoặc s&acirc;n vườn. Hoa của C&acirc;y Kim Ng&acirc;n khi nở sẽ tỏa ra m&ugrave;i thơm hơi nồng n&agrave;n, nếu bạn dị ứng với m&ugrave;i hoa n&agrave;y th&igrave; n&ecirc;n xem lại nh&eacute;. Bạn c&oacute; thể trồng C&acirc;y Kim Ng&acirc;n v&agrave;o trong chậu, c&acirc;y nở hoa đặt trong nh&agrave; sẽ rất đẹp đ&oacute;.</p>
                
                <ol>
                    <li>
                    <h2><strong>C&acirc;y Sống Đời</strong></h2>
                    </li>
                </ol>
                
                <p>C&acirc;y Sống Đời c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y L&aacute; Bỏng. C&acirc;y Sống Đời c&oacute; nguồn gốc từ Madagascar v&agrave; rất th&iacute;ch hợp với kh&iacute; hậu ở Việt Nam. Đặc điểm của C&acirc;y Sống Đời đ&oacute; l&agrave; phần th&acirc;n l&agrave; l&aacute; t&iacute;ch nước n&ecirc;n chịu được kh&ocirc; hạn. Đặc biệt c&acirc;y c&oacute; t&aacute;c dụng điều h&ograve;a kh&ocirc;ng kh&iacute; trong nh&agrave; bạn. Khi trồng C&acirc;y Sống Đời, bạn n&ecirc;n tưới &iacute;t nước, đặt c&acirc;y ở những nơi đ&oacute;n nhiều &aacute;nh s&aacute;ng. Khi c&acirc;y ra hoa rất đẹp, v&igrave; vậy bạn c&oacute; thể đặt tr&ecirc;n b&agrave;n l&agrave;m việc hoặc trong ph&ograve;ng kh&aacute;ch đều được nh&eacute;.</p>
                
                <h2><strong>C&acirc;y Lan &Yacute;</strong></h2>
                
                <p>C&acirc;y Lan &Yacute; c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Bạch M&ocirc;n, C&acirc;y Huệ H&ograve;a B&igrave;nh, C&acirc;y Vĩ Hoa Trắng. Đ&acirc;y l&agrave; c&acirc;y của biểu tượng hạnh ph&uacute;c, niềm vui v&agrave; b&igrave;nh an. Nếu bạn trồng C&acirc;y Lan &Yacute; trong nh&agrave;, c&acirc;y n&agrave;y sẽ mang đến hạnh ph&uacute;c v&agrave; t&igrave;nh y&ecirc;u sẽ tr&agrave;n ngập khắp căn nh&agrave; đấy. Hơn thế nữa c&acirc;y Lan &Yacute; kh&ocirc;ng chỉ c&oacute; khả năng h&uacute;t ẩm, m&agrave; c&ograve;n c&acirc;n bằng kh&ocirc;ng kh&iacute; v&agrave; ti&ecirc;u diệt c&aacute;c tế b&agrave;o nấm mốc trong nh&agrave; nữa.</p>
                
                <p>C&acirc;y Lan &Yacute; kh&ocirc;ng qu&aacute; kh&oacute; khi chăm s&oacute;c v&agrave; trồng, th&iacute;ch hợp với kh&ocirc;ng kh&iacute; trong nh&agrave;. V&igrave; vậy bạn c&oacute; thể đặt một chậu C&acirc;y Lan &Yacute; tr&ecirc;n b&agrave;n l&agrave;m việc hoặc trong ph&ograve;ng kh&aacute;ch của gia đ&igrave;nh m&igrave;nh nh&eacute;.</p>
                
                <h2><strong>C&acirc;y Hoa Phong Lữ</strong></h2>
                
                <p>C&acirc;y Hoa Phong Lữ Thảo nhỏ nhắn th&iacute;ch hợp để trồng trong nh&agrave;, đặt tr&ecirc;n b&agrave;n uống nước ở ph&ograve;ng kh&aacute;ch, hoặc tr&ecirc;n b&agrave;n l&agrave;m việc đều được. M&ugrave;i thơm của C&acirc;y Hoa Phong Lữ Thảo c&oacute; độ lan tỏa rộng, v&igrave; vậy gi&uacute;p kh&ocirc;ng gian thư gi&atilde;n hơn rất nhiều.</p>
                
                <p>C&acirc;y Hoa Phong Lữ Thảo c&oacute; nhiều m&agrave;u sắc cho bạn lựa chọn để l&agrave;m đẹp cho nh&agrave; cửa như m&agrave;u đỏ tươi, m&agrave;u phớt hồng v&agrave; m&agrave;u trắng&hellip; Bạn c&oacute; thể trồng v&agrave;i chậu đặt trong nh&agrave; đều được nh&eacute;.</p>
                
                <p><img alt="" src="http://localhost/plant-store/public/uploads/blog-content/cay-trong-nha-2.jpg" style="height:400px; width:400px" /></p>
                
                <h2><strong>Trồng Hoa D&agrave;nh D&agrave;nh</strong></h2>
                
                <p>Hoa D&agrave;nh D&agrave;nh l&agrave; loại c&acirc;y kh&ocirc;ng kh&oacute; trồng. Chăm s&oacute;c Hoa D&agrave;nh D&agrave;nh, hoa sẽ nở tươi l&acirc;u v&agrave; xanh tốt. V&igrave; vậy bạn cần lưu &yacute; về đất, ph&acirc;n b&oacute;n cũng như lượng nước tưới cho c&acirc;y mỗi ng&agrave;y nh&eacute;. Hoa D&agrave;nh D&agrave;nh c&oacute; nhiều m&agrave;u, bạn c&oacute; thể chọn m&agrave;u ph&ugrave; hợp để đặt trong ph&ograve;ng của gia đ&igrave;nh m&igrave;nh nh&eacute;.</p>
                
                <p>Cuộc sống c&agrave;ng hiện đại, con người c&oacute; xu hướng gần gũi với thi&ecirc;n nhi&ecirc;n n&ecirc;n việc lựa chọn c&acirc;y xanh l&agrave;m vật trang tr&iacute; được nhiều gia đ&igrave;nh lựa chọn.</p>
                
                <p>Theo nhiều nghi&ecirc;n cứu cho thấy, cứ trong mỗi diện t&iacute;ch khoảng 30m2, n&ecirc;n c&oacute; &iacute;t nhất 2 chậu c&acirc;y xanh nhỏ. Trồng c&acirc;y trong nh&agrave; khiến cho kh&ocirc;ng gian h&agrave;i h&ograve;a, đẹp mắt, tạo cảm gi&aacute;c dễ chịu hơn khi nh&igrave;n v&agrave;o, cho d&ugrave; ng&ocirc;i nh&agrave; của bạn được thiết kế theo phong c&aacute;ch n&agrave;o.</p>
                
                <p>Ngo&agrave;i ra khi trồng c&acirc;y xanh, c&acirc;y hoa trong nh&agrave; sẽ c&oacute; t&aacute;c dụng thanh lọc kh&ocirc;ng kh&iacute; cực tốt, hấp thụ c&aacute;c chất &ocirc; nhiễm trong m&ocirc;i trường. Trồng c&acirc;y trong nh&agrave; c&ograve;n gi&uacute;p cải thiện t&acirc;m l&yacute; căng thẳng, giảm bớt &aacute;p lực cuộc sống v&agrave; c&ocirc;ng việc, giảm tiếng ồn, hạ nhiệt độ, tăng nồng độ O2 trong kh&ocirc;ng kh&iacute;, khiến cho m&ocirc;i trường sống v&agrave; l&agrave;m việc t&iacute;ch cực hơn.</p>
                
                <p>Về mặt phong thủy, nếu lựa chọn ph&ugrave; hợp với mệnh v&agrave; tuổi của gia chủ, c&acirc;y xanh c&ograve;n gi&uacute;p mang đến may mắn, t&agrave;i lộc đầy nh&agrave;, sức khỏe dồi d&agrave;o, tăng vận kh&iacute; cho người trong nh&agrave;.</p>
                
                <p>Những c&acirc;y hoa trồng trong nh&agrave; m&agrave; ch&uacute;ng t&ocirc;i gợi &yacute; tr&ecirc;n hi vọng c&aacute;c bạn sẽ lựa chọn được cho m&igrave;nh c&acirc;y cảnh ph&ugrave; hợp nh&eacute;</p>',
                'user_id' => '3',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),   
            ],
        ]);
    }
}
