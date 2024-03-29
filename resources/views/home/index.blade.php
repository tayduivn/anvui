@extends('template.layout')

@section('content')

<section class="whyneed">
    <div class="container">
        <h2 class="block__header">Hệ sinh thái <b><a href="{{ route('page.software') }}">quản trị toàn diện</a></b> dành cho nhà xe</h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col--hidden-ipad">
                <div class="whyneed__img">
                    <img src="{{ asset('imgs/img-home1.png') }}" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}" class="img-fluid">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col--12-ipad">
                <div class="wow slideInRight" data-wow-duration=".3s">
                    <div class="whyneed__param">
                        <h3>Tiết kiệm 3% - 5% Chi phí vận hành</h3>
                        <p>Phần mềm quản lý nhà xe giúp khách hàng quản lý dễ dàng doanh nghiệp của mình, tối ưu nguồn nhân lực, giảm thiểu chi phí vận hành</p>
                    </div>
                    <div class="whyneed__param">
                        <h3>Tăng trưởng 10% - 20% Doanh thu bán vé</h3>
                        <p>Nhà xe chủ động tạo các ưu đãi + chiến lược quảng cáo cho doanh nghiệp giúp gia tăng doanh thu của mình</p>
                    </div>
                    <div class="whyneed__param">
                        <h3>Giảm tải công việc & Quản lý khoa học</h3>
                        <p>Sử dụng phần mềm vào quản lý giúp công việc trở nên đơn giản hơn bao giờ hết</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

<section class="whychose">
    <div class="container">
        <h2 class="block__header">Tại sao chọn An Vui <b>?</b></h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--12-ipad">
                <div class="whychose__content wow slideInLeft" data-wow-duration=".3s">
                    <p>Cuộc cách mạng công nghiệp lần thứ 4 (cách mạng công nghiệp 4.0) đang ảnh hưởng, tác động sâu sắc đến quốc gia, mỗi ngành, lĩnh vực, doanh nghiệp và người dân. Vì vậy, ngành GTVT cũng không nằm ngoài ảnh hưởng này.</p>
                    <p>Giờ đây không còn doanh nghiệp to thắng doanh nghiệp nhỏ mà là doanh nghiệp nhanh thắng doanh nghiệp chậm. Nếu thiếu tiền thì có thể đi vay, thiếu xe thì có thể đi thuê nhưng thiếu hành khách là thiếu tất cả. Chính vì thế việc ứng dụng công nghệ vào quản lý điều hành giúp doanh nghiệp vận tải tăng doanh thu, tiết kiệm chi phí và nâng cao năng lực cạnh tranh trong thời đại mới. Chúng tôi giúp bạn thực hiện điều đó!</p>
                    <a href="" class="btn--reg" data-toggle="modal" data-target="#modal--register">ĐĂNG KÝ TƯ VẤN</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--hidden-ipad">
                <div class="whychose__img">
                    <img src="{{ asset('imgs/img-home2.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="avecosystem">
    <div class="container">
        <h2 class="block__header">Hệ sinh thái phong phú của An Vui có gì <b>?</b></h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col--hidden-ipad">
                <div class="avecosystem__img">
                    <img src="{{ asset('imgs/img-home3.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                </div> 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col--12-ipad">
                <div class="avecosystem__content">
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon1"></div></div>
                        <div>
                            <h3>Ứng dụng cho đại lý bán vé</h3>
                            <p>Giúp nhà xe chủ động mở rộng các kênh đại lý bán vé online. Có thể phân cấp các mức hoa hồng khác nhau.</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon2"></div></div>
                        <div>
                            <h3>Website thương hiệu riêng cho nhà xe</h3>
                            <p>AN VUI giúp nhà xe có một website bán vé chuyên nghiệp mang thương hiệu riêng.</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon3"></div></div>
                        <div>
                            <h3>App đặt vé online mang thương hiệu riêng cho nhà xe</h3>
                            <p>Ứng dụng mang thương hiệu của nhà xe cho hành khách đặt vé và thanh toán online.</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon4"></div></div>
                        <div>
                            <h3>Ứng dụng đón trả khách cho lái phụ xe</h3>
                            <p>Lái phụ xe nhìn thấy vị trí khách đứng chờ, đón trả khách đúng điểm.</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon5"></div></div>
                        <div>
                            <h3>Phần mềm đặt vé tại phòng vé</h3>
                            <p>Bán vé và xuất vé cho hành khách, kết nối với tổng đài điện thoại để hiển thị tên, tuổi, địa chỉ và lịch sử đặt vé để chăm sóc khách hàng tốt hơn.</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon6"></div></div>
                        <div>
                            <h3>Báo cáo trực tuyến hỗ trợ điều hành</h3>
                            <p>Tiết kiệm thời gian và chi phí. Tự động tính toán và đưa ra các báo cáo về doanh thu, chi phí và hiệu quả kinh doanh.</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="custommer">
    <div class="container">
        <h2 class="block__header">Khách hàng tiêu biểu của An Vui</h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="js_custommer__carousel" class="custommer__carousel owl-carousel owl-theme">
                    <div class="item">
                        <a href="https://halan.vn/">
                            <img src="https://cdn.anvui.vn/uploadv2/web/36/3692/basicinformation/2020/04/03/05/37/1585892256_1585127434_logohalan.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://kumhosamco.com.vn">
                            <img src="https://kumhosamco.com.vn/wp-content/uploads/LOGO-KUMHO-web2.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://interbuslines.com/">
                            <img src="{{ asset('imgs/custommer/inter.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://xevulinh.com/">
                            <img src="{{ asset('imgs/custommer/vulinh.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('imgs/custommer/hptravel.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('imgs/custommer/anhhuydatcang.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custommerReview" style="margin-top: 80px">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="custommerReview">
                <h2>Khách hàng nói gì về An Vui <b>?</b></h2>
                <div id="js_custommerReview" class="custommerReview__carousel owl-carousel owl-theme">
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review2.png') }}" alt="">
                        <h3>Ông Nguyễn Mạnh Hà</h3>
                        <h4>Chủ tịch của Công ty Vận tải và du lịch Hà Lan đơn vị vận tải quy mô lớn nhất tại Tại Thái Nguyên</h4>
                        <h5><i> "Khi ứng dụng AN VUI  vào hoạt động quản lý và vận hành Hoạt động của Hà Lan trở nên minh bạch và thuận tiện. Đặc biệt việc ứng dụng hợp đồng điện tử do AN VUI cung cấp cho mảng xe hợp đồng của Hà lan đã mang lại sự thuận tiện giảm chi phí in ấn, lưu trữ và vận hành đáng kể cho Hà Lan."</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review1.png') }}" alt="">
                        <h3>Ông Nguyễn Thanh Tùng</h3>
                        <h4>Chủ tịch INTERBUS LINES</h4>
                        <h5><i> "Từ khi ứng dụng AN VUI vào quản lý và điều hành Interbus lines Doanh thu của Interbuslines tăng hơn 200% sau 2 năm ứng dụng. Đồng thời Inter buslines giờ có thể chủ động mở các đại lý phân phối vé tới hành khách giảm đi 1/2 số lượng lao động."</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review3.png') }}" alt="">
                        <h3>Ông Nguyễn Thượng Hải</h3>
                        <h4>Giám đốc Công ty Vận tải Hà Hải Thái Bình</h4>
                        <h5><i> "Chúng tôi đã sử dụng nhiều phần mềm của những đơn vị khác nhau nhưng cuối cùng lựa chọn AN VUI bởi AN VUI giúp chúng tôi tích hợp từ Tổng đài tự động, website đặt vé và hoạt động bán vé tại phòng vé tất cả trong 1 hệ thống duy nhất tiện dùng và không bị phức tạp liên hệ với nhiều bên."</i></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
