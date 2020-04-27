@extends('template.layout')

@section('content')
<section class="software-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col--hidden-ipad">
                <div class="step">
                    <div id="toc">
                    </div>
                </div>  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col--12-ipad">
                <div class="software-page__content">
                    <h3 class="js_tock__mock">Phần mềm nhà xe của An Vui</h3>
                    <h2 class="page__header">Phần mềm nhà xe An Vui</h2>
                    
                    <div class="software-page__para">
                        <p>
                            Hệ thống Phần mềm quản lý tổng thể cho nhà xe được AN VUI phát triển trên nền tảng công nghệ tiên tiến, tạo dựng hệ sinh thái phong phú giúp cho nhà xe có thể nắm bắt toàn bộ mọi hoạt động. Những nhà xe ứng dụng sản phẩm của AN VUI đều tăng doanh thu bán vé từ 10% - 30% đồng thời tiết kiệm từ 5% - 10% chi phí hàng tháng do công tác quản lý khoa học mang lại.
                        </p>
                        <p>
                            Việc ứng dụng AN VUI đang trở thành một trong những lựa chọn tối ưu cho những nhà xe có quy mô lớn bởi vì AN VUI cung cấp cho nhà xe công cụ chủ động trong quản lý bảo mật toàn bộ thông tin hành khách đồng thời kiểm soát doanh thu và công nợ của các đại lý bán vé một cách khoa học.
                        </p>
                    </div>

                    <h3 class="js_tock__mock">Rủi ro và thách thức với các nhà xe truyền thống</h3>
                    <div class="software-page__para">
                        <h3>Trong thời đại công nghệ hiện nay, Nhà xe kinh doanh vận tải hành khách truyền thống đang đối mặt với khá nhiều rủi ro và thách thức</h3>
                        <p>
                            Hiện tại các hãng Taxi và xe ôm truyền thống đang gặp rất nhiều khó khăn do sự cạnh tranh mạnh mẽ từ các mô hình kinh doanh vận tải ứng dụng công nghệ thông tin như Uber, Grab để gọi xe trên smartphone, để đặt chuyến đi, đón trả khách theo định vị bản đồ, thanh toán trực tuyến (gọi chung là ứng dụng Công nghệ định vị Online). Trong thời gian tới đây, Ngành kinh doanh vận tải hành khách truyền thống chắc chắn sẽ bị cạnh tranh quyết liệt từ các mô hình kinh doanh vận tải có ứng dụng Công nghệ định vị Online. Đây là một thách thức lớn và hiện hữu đối với các Nhà xe truyền thống.
                        </p>
                        <p>
                            Thông thường để tăng khả năng cạnh tranh, quảng bá thương hiệu và xây dựng được một nhà xe uy tín chuyên nghiệp, có hệ thống quản lý chặt chẽ đáp ứng được các nhu cầu mở rộng kinh doanh… thì Nhà xe truyền thống phải đầu tư khá nhiều tiền bạc và thời gian cho hệ thống công nghệ thông tin, phần mềm quản lý. Một thực tế, nếu Nhà xe truyền thống không ứng dụng công nghệ định vị online hoặc đang sử dụng những công nghệ phần mềm không phù hợp thì sẽ bị tụt hậu, giảm sút hiệu quả kinh doanh, dần phải tự rút khỏi thị trường do mất thị trường, mất khách hàng.
                        </p>
                    </div>
                    <h3 class="js_tock__mock">Khó khăn và cách An Vui giải quyết cho các nhà xe</h3>
                    <div class="software-page__para">
                        <h3>Những khó khăn hiện các nhà xe đang phải đối mặt và AN VUI giúp nhà xe giải quyết khó khăn</h3>
                        <p>
                            Nhà xe hiện nay đang tốn rất nhiều tiền điện thoại cho việc liên lạc vì thiếu một phương pháp giao tiếp chuyên nghiệp. Để đón khách hoặc trả một món hàng nhận gửi lên xe tài xế phải gọi điện cho khách ít nhất là 2 đến 3 cuộc gọi. Sử dụng ANVUI sẽ giúp nhà xe tiết kiệm 80% chi phí gọi điện thoại. Với khả năng kết nối tài xế - phòng vé, Kết nối hành khách - tài xế và Kết nối hành khách - nhà vận tải… Tất cả đều được cập nhật thông tin liên tục. Lúc đó, sẽ không còn cảnh bạn phải trả lời hành khách thông tin cho từng chuyến đi? Bạn cũng sẽ không phải gọi điện thường xuyên hỏi xe có đầy khách không? Đã đi đến đâu rồi? …
                        </p>
                        <div class="software-page__para__quote">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="software-page__para__quote_text">
                                        <p>Dễ dàng nắm bắt <br> đầy đủ thông tin của khách hàng <br> kể cả khi xe chưa xuất bến!</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <img src="{{asset('imgs/software-img.png')}}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}">
                                </div>
                            </div>
                        </div>
                        <p>
                            Và sẽ thật tuyệt vời nếu xe chưa xuất bến mà bạn đã có đầy đủ thông tin của hành khách nhỉ? Bởi An Vui biết rằng Nhà xe đang rất khó khăn trong khâu kiểm tra bán vé có thể là thiếu thông tin, bán chồng vé, khó đối chiếu kiểm tra khi thu tiền nội bộ. AN VUI sẽ giúp cho nhà xe giải quyết những điều đó thật dễ dàng vì toàn bộ thông tin về vé, tiền thu cũng như thông tin về chuyến đi của hành khách đều được AN VUI tập hợp và gửi đến cho nhà quản lý một cách tự động.
                        </p>
                        <p>
                            Với số lượng xe lớn, số lượng giấy tờ công việc điều hành xe mà xử lý bằng phương pháp thủ công thường gây ra nhầm lẫn, thiếu xót và sinh ra nhiều mệt mỏi, làm cho nhân viên của bạn lúc nào cũng cảm thấy quá tải, căng thẳng mà không đem lại hiệu quả.. Đừng lo! hãy để AN VUI giúp bạn: từ việc in phơi vé, lập lệnh xuất bến, Gộp phơi , tách phơi, đón trả khách, lập báo cáo thống kê… Tất cả những việc đó bạn chỉ cần một lệnh, AN VUI sẽ cung cấp ngay tức khắc cho bạn.
                        </p>
                        
                        <div class="software-page__para__quote">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <img src="{{asset('imgs/software-img1.png')}}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="software-page__para__quote_text">
                                        <p><span>In phơi vé, lập lệnh xuất bến, gộp phơi,<br> tách phơi, đón trả khách, lập báo cáo thông kê...</span> 
                                        Chỉ cần 1 thao tác!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="software-page__para">
                        <h3>Còn vận tải hàng hóa ký gửi thì sao nhỉ?</h3>
                        <p>
                            Hiện nay, việc vận chuyển hàng hóa của khách hàng cũng là một điều mà AnVui biết rằng đang làm cho các nhà xe rất lo lắng, việc thất thoát gian lận, nhầm lẫn trong việc giao hàng, thậm chí gây tốn kém chi phí vì không tối ưu. Giờ đây, ngoài việc giúp bạn bán vé hành khách, AN VUI còn giúp quản lý toàn bộ quá trình chuyển phát hàng trên xe một cách chính xác, thông tin người gửi, người nhận, gửi đồ gì, kích thước bao nhiêu, phí gửi thu được, hàng đã lên xe chưa, hàng đã trả khách chưa…. tất cả đều được AN VUI tập hợp và báo cáo cho bạn.
                        </p>
                    </div>
                    <div class="software-page__para">
                        <h3>Ngoài giúp bạn quản lý nhà xe, AN Vui còn giúp Hành khách dễ dàng tìm được bạn.</h3>
                        <p>
                            Ngoài giúp bạn quản lý nhà xe, AN Vui còn giúp Hành khách dễ dàng tìm được bạn. Với xu hướng công nghệ hiện nay, hành khách đang thịnh hành xu hướng tìm kiếm và sử dụng dịch vụ của những nhà xe được đánh giá cao trên internet. Bạn có thấy tất cả những nhà xe chuyên nghiệp đều có website nhằm giúp hành khách có thể thuận tiện tìm kiếm - dễ dàng đặt vé - và liên hệ ngay lập tức. Điều đó làm cho nhà xe trở nên chuyên nghiệp hơn trong mắt khách hàng, nâng cao khả năng cạnh tranh, nhất là nhà xe sẽ không phải tranh giành hành khách với bất cứ nhà xe nào khác nữa bởi vì hành khách đã đặt vé của bạn, họ trả tiền trước cho bạn, và sẽ chỉ đến với bạn mà thôi. Tuy nhiên, thật buồn, không phải nhà xe nào cũng có thể tạo được một website cho mình. Vậy, Bạn đã có website của mình chưa? Nếu chưa, Đừng lo. Bởi AN VUI sẽ giúp bạn tạo 1 website cho riêng bạn: ở đó bạn có thể giới thiệu về nhà xe của mình, bạn có thể đưa ra thông tin các điểm dừng đỗ để khách dễ dàng tra cứu, AN VUI cũng sẽ giúp hành khách dễ dàng tìm ra website của bạn và tất nhiên, hành khách có thể đặt vé ngay trên website đó. 
                        </p>
                    </div>
                    <h3 class="js_tock__mock">Tăng doanh thu cùng An Vui</h3>
                    <div class="software-page__para">
                        <h3>AN VUI còn có một khả năng bán vé, tăng doanh thu giúp bạn!</h3>
                        <p>
                            Bởi AN VUI có một hệ thống website bán vé lớn nhất Việt Nam với hàng triệu lượt truy cập mỗi ngày để tìm kiếm những chuyến đi. Nếu khách hàng tìm kiếm chuyến đi phù hợp với lộ trình của bạn, AN VUI chắc chắn khách hàng sẽ nhìn thấy thông tin của bạn trên hệ thống của AN VUI. Từ đó, AN VUI có thể giúp bạn thúc đẩy doanh thu bán vé để đảm bảo rằng mỗi chuyến đi của bạn đều được phát huy tối đa công suất vận chuyển.
                        </p>
                    </div>

                    <h3 class="software-page__title">CÁC BƯỚC ĐẶT VÉ TRỰC TUYẾN</h3>
                    <div class="software-page__para__icons">
                        <div>
                            <div class="software-page__para__icons__img"><img src="{{ asset('imgs/icon/icon7.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}"></div>
                            <p>Tải app</p>
                        </div>
                        <div>
                            <div class="software-page__para__icons__img"><img src="{{ asset('imgs/icon/icon8.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}"></div>
                            <p>Đặt vé</p>
                        </div>
                        <div>
                            <div class="software-page__para__icons__img"><img src="{{ asset('imgs/icon/icon9.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}"></div>
                            <p>Thanh toán</p>
                        </div>
                        <div>
                            <div class="software-page__para__icons__img"><img src="{{ asset('imgs/icon/icon10.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}"></div>
                            <p>Nhận mã vé</p>
                        </div>
                        <div>
                            <div class="software-page__para__icons__img"><img src="{{ asset('imgs/icon/icon11.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}"></div>
                            <p>Lên xe</p>
                        </div>
                    </div>
                    <div class="software-page__para">
                        <p>Để biết thông tin chi tiết về phần mềm quản lý bán vé xe khách quý vị có thể  <a href="/" title="{{ $HEADER['metaTitle'] }}">Download thông tin giới thiệu về phần mềm</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection