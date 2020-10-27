@extends('template.layout')

@section('content')
<section class="intro-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col--hidden-ipad">
                <div class="step">
                    <div id="toc">
                    </div>
                </div>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col--12-ipad">
                <div class="intro-page__content">
                    <h3 class="js_tock__mock">Lời giới thiệu</h3>
                    <h2 class="page__header">Xin chào, chúng tôi là An Vui <b>!</b></h2>
                    <p><a href="">Công ty Công nghệ AN VUI</a> là doanh nghiệp Công nghệ tiên phong với đội ngũ nhân sự chuyên nghiệp và nhiệt huyết, luôn đi đầu trong công tác nghiên cứu và phát triển các ứng dụng trên nền tảng công nghệ mới giúp nhà vận tải quản lý và điều hành hiệu quả. </p>
                    <p>Vận tải luôn là lĩnh vực quan trọng đóng góp tỷ trọng không nhỏ vào GDP của đất nước. Thời gian vừa qua trước cuộc cách mạng công nghệ 4.0 ngành vận tải đang có những thay đổi rất lớn mang tính cách mạng. Một trong những sự kiện quan trọng đó là sự xâm nhập của mô hình taxi công nghệ từ nước ngoài vào Việt Nam tốc độ phát triển cao đang lấn lướt và tạo ra rất nhiều khó khăn cho mô hình Taxi truyền thống, đây là bài học lớn cho những doanh nghiệp vận tải chậm thay đổi và chậm áp dụng công nghệ.</p>
                    <p>Cuộc cách mạng công nghệ 4.0 đã tạo nên những luật chơi mới “Không phải doanh nghiệp lớn thắng doanh nghiệp nhỏ mà là doanh nghiệp nhanh sẽ thắng doanh nghiệp chậm”. Công nghệ cho phép kết nối theo thời gian thực, cắt giảm mọi chi phí không cần thiết, tăng cường quản lý và nâng cao chất lượng dịch vụ, tiếng nói của khách hàng ngày càng trở nên quan trọng hơn đối với sự phát triển của doanh nghiệp đặc biệt là doanh nghiệp vận tải.</p>
                    <p>Nhận thấy những nguy cơ tiềm ẩn có thể đẩy các doanh nghiệp vận tải trong nước gặp khó khăn nếu không được hỗ trợ một nền tảng công nghệ đủ mạnh giúp các nhà vận tải cải thiện công tác quản lý điều hành và mở rộng thị trường. AN VUI đã ra đời với Sứ mệnh đưa công nghệ vào phục vụ cho ngành vận tải giúp giữ vững thị phần nâng cao năng lực cạnh tranh và dịch chuyển từ một nhà vận tải truyền thống sang nhà vận tải công nghệ.</p>
                    <p>Các sản phẩm của AN VUI xây dựng sản phẩm trên nền tảng công nghệ tiên tiến của Google sử dụng trên nền dữ liệu lớn Bigdata và BigQuery. Các phân hệ phần mềm được tương tác với nhau theo thời gian thực..</p>
                    <p>Chúng tôi tự hào là đơn vị được Cộng đồng phát triển công nghệ Google trao giải nhất Đột phá sáng tạo năm 2015. ANVUI lọt TOP 17 Startup tiêu biểu của Việt Nam do báo vnexpress tổ chức năm 2016 AN VUI là doanh nghiệp Công nghệ vinh dự đã vượt qua 289 dự án lọt vào TOP 10 của Nhân Tài Đất Việt 2017. AN VUI luôn sẵn sàng là một đơn vị cung cấp giải pháp tổng thể giúp các nhà vận tải quản lý và điều hành hiệu quả hơn. Với mục tiêu mỗi chuyến đi an ngàn trái tim vui, để mỗi chuyến đi đều an toàn và vui vẻ.</p>
                    <h3 class="js_tock__mock">Lợi ích của An Vui</h3>
                    <h3 class="intro-page__title">Lợi ích của việc sử  dụng dịch vụ An Vui</h3>
                    <img src="imgs/intro1.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                    <h4 class="intro-page__sub">Các dịch vụ sản phẩm mà AN VUI cung cấp gồm</h4>
                    <p>- Phần mềm quản lý và điều hành bán vé thông minh </p>
                    <p>- Hệ thống website bán vé trực tuyến cho nhà xe </p>
                    <p>- Ứng dụng đặt vé và thanh toán trực tuyến cho điện thoại di động </p>
                    <p>- Ứng dụng đón trả khách và kiểm tra vé cho lái phụ xe </p>
                    <p>- Hệ thống thiết bị in vé và kiểm tra giám sát hành trình cho nhà xe </p>
                    <p>- Hệ thống chăm sóc khách hàng CRM cho nhà xe </p>
                    <p>- Hệ thống tổng đài chăm sóc khách hàng và đặt vé cho nhà xe </p>
                    <p>Với giải pháp quản trị điều hành tổng thể luôn giúp nhà xe kiểm soát mọi hoạt động của mình nhằm đưa ra những quyết định quan trọng trong việc mở rộng quy mô phát triển. Đặc biệt việc ứng dung AN VUI vào quản lý nhà xe có thể chuyển mình từ nhà xe truyền thống sang nhà xe công nghệ, giữ được thị phần với hệ thống chăm sóc khách hàng tốt hơn, yên tâm mở rộng quy mô mà không phải lo về quản lý...</p>

                    <h4 class="intro-page__sub">Lợi ích của nhà xe khi ứng dụng AN VUI vào quản lý </h4>
                    
                    <p>- Bán vé, đặt chỗ, thanh toán Online nhanh chóng và tiện dụng. </p>
                    <p>- Lái xe đón trả khách, nhận trả hàng hóa theo vị trí định vị trên bản đồ, đồng thời hành khách theo dõi để đón xe, nhận hàng cũng theo vị trí định vị xe trên bản đồ nên đảm bảo sự chính xác và tiết kiệm thời gian. </p>
                    <p>- Quản lý phơi vé tách, gộp phơi cho nhà xe đảm bảo chính xác và thuận tiện </p>
                    <p>- Quản lý thông tin hành khách, thông báo tự động cho hành khách về thông tin chuyến đi và nhận phản hồi chất lượng dịch vụ từ hành khách để nâng cao chất lượng phục vụ. </p>
                    <p>- Lập lịch trình chạy xe, phân công lịch chạy xe, chấm công, đánh giá lái xe… rõ ràng, hợp lí. </p>
                    <p>- Cung cấp đầy đủ hệ thống báo cáo và thống kê: nhật ký chạy xe, báo cáo doanh số bán vé, hệ thống báo cáo quản trị cho nhà xe…</p>
                    <h3 class="js_tock__mock">Đăng ký sử dụng</h3>
                    <h3 class="intro-page__title">Lợi ích mang lại cho khách hàng</h3>
                    <img src="imgs/intro2.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                    <p>Khi cần được trợ giúp xin gọi 1900 1911. Chúng tôi hân hạnh được phục vụ quý khách!</p>
                    <p>Nếu bạn là nhà xe muốn đăng ký dùng thử Phần mềm quản lý điều hành bán vé thông minh của AN VUI thì bạn có thể đăng ký để được tư vấn <a href="#modal--register"  data-toggle="modal">tại đây.</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection