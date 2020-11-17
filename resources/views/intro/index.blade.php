@extends('template.layout')

@section('content')
<section class="introPage">
    <h2>Xin chào, chúng tôi là An Vui <b>!</b></h2>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p>
                    AN VUI là Startup công nghệ tiên phong phục vụ cho lĩnh vực vận tải. Với sứ mệnh số hoá ngành vận tải hành khách, giúp giữ vững thị phần, nâng cao năng lực cạnh tranh, giúp các nhà vận tải truyền thống chuyển dịch sang vận tải công nghệ, mang đến những hành trình đi an về vui cho Cộng đồng.  Hiện tại AN VUI đang có mặt tại Thị trường Việt Nam và hướng đến thị trường Đông Nam Á và Châu Á.
                </p>
            </div>
            <div class="col-xs-12 col-md-6">
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/957rPxhYNAw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-12">
                <p>Được thành lập từ năm 2015 và chính thức công bố sản phẩm nền tảng công nghệ tháng 7 năm 2017. Đến nay AN VUI đã phục vụ hàng trăm doanh nghiệp vận tải quy mô lớn trong cả nước Ứng dụng phần mềm của AN VUI vào quản lý và công cuộc chuyển đổi số cho doanh nghiệp.  AN VUI đã trở thành cầu nối cho các doanh nghiệp vận tải đưa nguồn công suất dư thừa của mình lên các sàn giao dịch vận tải nhằm tăng doanh thu và giảm chi phí vận hành. Mọi hoạt động của doanh nghiệp vận tải đều được tự động và xử lý khoa học trên nền tảng công nghệ mà AN VUI cung cấp.</p>
            </div>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="col-md-12">
                <div id="js_slideImage" class="slideImage__carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('imgs/banner1.svg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('imgs/banner2.svg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('imgs/banner3.svg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('imgs/banner3.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="col-12">
                <p>AN VUI lọt TOP 17 Startup tiêu biểu của Việt Nam do báo VnExpress tổ chức năm 2016. Sau đó, AN VUI tiếp tục là doanh nghiệp công nghệ vinh dự đã vượt qua 289 dự án lọt vào TOP 10 của Nhân Tài Đất Việt 2017. Là startup duy nhất của Việt Nam vượt qua cuộc thi Seedstars Competition tiến thẳng vào vòng Chung kết Châu Á, AN VUI đã xuất sắc được chọn trở thành 1 trong các đại diện Châu Á tham dự Seedstars World Competition, được tổ chức tại Lausanne, Switzerland.</p>
            </div>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="col-12">
                <div class="custommerReview">
                    <h2>Khách hàng nói gì về An Vui <b>?</b></h2>
                    <div id="js_custommerReview" class="custommerReview__carousel owl-carousel owl-theme">
                        <div class="item custommerReview__item">
                            <img src="{{ asset('imgs/review1.png') }}" alt="">
                            <h3>Ông Nguyễn Thanh Tùng</h3>
                            <h4>Chủ tịch INTERBUS LINES</h4>
                            <h5>Từ khi ứng dụng AN VUI vào quản lý và điều hành Interbuslines Doanh thu của Interbuslines tăng hơn 200% sau 2 năm ứng dụng. Đồng thời Inter buslines giờ có thể chủ động mở các đại lý phân phối vé tới hành khách giảm đi 1/2 số lượng lao động.</h5>
                        </div>
                        <div class="item custommerReview__item">
                            <img src="{{ asset('imgs/review2.png') }}" alt="">
                            <h3>Ông Nguyễn Mạnh Hà</h3>
                            <h4>Chủ tịch của Công ty Vận tải và du lịch Hà Lan đơn vị vận tải quy mô lớn nhất tại Tại Thái Nguyên</h4>
                            <h5>Khi ứng dụng AN VUI  vào hoạt động quản lý và vận hành Hoạt động của Hà Lan trở nên minh bạch và thuận tiện. Đặc biệt việc ứng dụng hợp đồng điện tử do AN VUI cung cấp cho mảng xe hợp đồng của Hà lan đã mang lại sự thuận tiện giảm chi phí in ấn, lưu trữ và vận hành đáng kể cho Hà Lan.</h5>
                        </div>
                        <div class="item custommerReview__item">
                            <img src="{{ asset('imgs/review3.png') }}" alt="">
                            <h3>Ông Nguyễn Thượng Hải</h3>
                            <h4>Giám đốc Công ty Vận tải Hà Hải Thái Bình</h4>
                            <h5>Chúng tôi đã sử dụng nhiều phần mềm của những đơn vị khác nhau nhưng cuối cùng lựa chọn AN VUI bởi AN VUI giúp chúng tôi tích hợp từ Tổng đài tự động, website đặt vé và hoạt động bán vé tại phòng vé tất cả trong 1 hệ thống duy nhất tiện dùng và không bị phức tạp liên hệ với nhiều bên.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-12">
                <p>Năm 2019 AN VUI lần đầu tiên nhận vốn đầu tư từ quỹ VinaCapital Ventures.  AN VUI đã có những bước tiến mạnh mẽ trở thành đơn vị số 1 tại Việt Nam cung cấp nền tảng công nghệ tổng thể cho doanh nghiệp vận tải. Hiện nay AN VUI tiếp tục đang gọi những vòng vốn tiếp theo để mở rộng quy mô  và hoàn chỉnh hệ sinh thái tổng thể cho ngành vận tải để mở rộng thị trường sang các nước Đông Nam Á.</p>
            </div>
        </div>
        <div class="row" style="margin-top: 80px">
            <div class="col-12">
                <div class="supporter">
                    <h2>Quỹ đầu tư vào AN VUI</h2>
                    <div id="js_supporter" class="supporter__carousel owl-carousel owl-theme">
                        <div class="item supporter__item">
                            <img src="{{ asset('imgs/supporter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    
</style>
{{-- <section class="intro-page">
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
</section> --}}
@endsection