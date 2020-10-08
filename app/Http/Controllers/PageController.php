<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function pageSofwareIntro() {
        $header = [
            'meta_title' => "Phần mềm nhà xe An Vui",
        ];

        $this->setHeader($header);

        return view('pages.software');
    }

    public function hddt(Request $request,$u = null) {
        // $id = $request->all();
        $data = [];
        $listUser = [
			['id' => 'vip1', 'name' => 'Bà Phan Thị Thu Hiền, Phó tổng cục trưởng Tổng Cục Đường Bộ Việt Nam'],
			['id' => 'vip8', 'name' => 'Hội Doanh Nghiệp Vận Tải Hành Khách Công Cộng Bằng Xe Buýt Các Tỉnh Miền Bắc'],
			['id' => 'hh1', 'name' => 'Hội doanh nghiệp vận tải buýt miền bắc' ],
			['id' => 'hh2', 'name' => 'Hiệp hội doanh nghiệp tỉnh Tuyên Quang ' ],
			['id' => 'hh3', 'name' => 'Hiệp hôi vận tải ô tô Thái Nguyên' ],
			['id' => 'hh4', 'name' => 'Hiệp hội vận tải ô tô Việt Nam ' ],
			['id' => 'hh5', 'name' => 'Hiệp hội doanh nghiệp tỉnh Thái Nguyên' ],
			['id' => 'hh6', 'name' => 'Hiệp hội du lịch tỉnh Thái Nguyên ' ],
			['id' => 'vip5', 'name' => 'Anh Trần Quang Hưng, Phó Bí thư Thành đoàn Hà Nội'],
			[ 'id' => 1, 'name' =>	'Lãnh Đạo Tổng Cục Đường Bộ Việt Nam' ],
			[ 'id' => 2, 'name' =>	'Lãnh Đạo Vụ Vận Tải Tổng Cục Đường Bộ Việt Nam' ],
			[ 'id' => 3, 'name' =>	'Lãnh Đạo Vụ Vận Tải Bộ Giao Thông' ],
			[ 'id' => 4, 'name' =>	'Lãnh Đạo Vụ Pháp Chế Bộ Giao Thông' ],
			[ 'id' => 5, 'name' =>	'Lãnh Đạo Phòng Thương Mại Công Nghiệp Việt Nam VCCI' ],
			[ 'id' => 6, 'name' =>	'Lãnh Đạo Cục Cảnh Sát Giao Thông' ],
			[ 'id' => 7, 'name' =>	'Lãnh Đạo Ban Pháp Chế Phòng Thương Mại Công Nghiệp Việt Nam' ],
			[ 'id' => 8, 'name' =>	'Lãnh Đạo Bộ Khoa Học Công Nghệ' ],
			[ 'id' => 9, 'name' =>	'Hiệp Hội Vận Tải Ô Tô Việt Nam' ],
			[ 'id' => 10, 'name' =>	'Lãnh Đạo Tạp Chí Diễn Đàn Doanh Nghiệp VCCI' ],
			[ 'id' => 11, 'name' =>	'Lãnh Đạo Tòa Soạn Báo Giao Thông' ],
			[ 'id' => 12, 'name' =>	'Lãnh Đạo Ủy Ban An Toàn Giao Thông Quốc Gia' ],
			[ 'id' => 13, 'name' =>	'Anh Khuất Việt Hùng - Phó Ban An Toàn Giao Thông Quốc Gia' ],
			[ 'id' => 14, 'name' =>	'Lãnh Đạo Sở GTVT' ],
			[ 'id' => 15, 'name' =>	'Lãnh Đạo Phòng QLVT - Sở GTVT' ],
			[ 'id' => 16, 'name' =>	'Hiệp Hội Vận Tải Ô Tô Tỉnh Thái Nguyên' ],
			[ 'id' => 17, 'name' =>	'Thanh Tra Sở GTVT Tỉnh Thái Nguyên' ],
			[ 'id' => 18, 'name' =>	'Lãnh Đạo CA Tỉnh Thái Nguyên' ],
			[ 'id' => 19, 'name' =>	'Phòng CSGT CA Tỉnh Thái Nguyên' ],
			[ 'id' => 20, 'name' =>	'Lãnh Đạo Cục Thuế Tỉnh Thái Nguyên' ],
			[ 'id' => 21, 'name' =>	'Lãnh Đạo Chi Cục Thuế Tỉnh Thái Nguyên' ],
			[ 'id' => 22, 'name' =>	'Sở Thông Tin Truyền Thông Tỉnh Thái Nguyên' ],
			[ 'id' => 23, 'name' =>	'Báo Thái Nguyên' ],
			[ 'id' => 24, 'name' =>	'Đài Truyền Hình Thái Nguyên' ],
			[ 'id' => 25, 'name' =>	'Lãnh Đạo Sở GTVT Tỉnh Bắc Kạn' ],
			[ 'id' => 26, 'name' =>	'Phòng QLVT - Sở GTVT Bắc Kạn' ],
			[ 'id' => 27, 'name' =>	'Thanh Tra Sở GTVT Tỉnh Bắc Kạn' ],
			[ 'id' => 28, 'name' =>	'Lãnh Đạo Phòng CSGT Công An Tỉnh Bắc Kạn' ],
			[ 'id' => 29, 'name' =>	'Lãnh Đạo Sở GTVT Tuyên Quang' ],
			[ 'id' => 30, 'name' =>	'Phòng QLVT - Sở GTVT' ],
			[ 'id' => 31, 'name' =>	'Thanh Tra Sở GTVT Tỉnh Tuyên Quang' ],
			[ 'id' => 32, 'name' =>	'Lãnh Đạo CA Tỉnh Tuyên Quang' ],
			[ 'id' => 33, 'name' =>	'Phòng CSGT - CA Tỉnh Tuyên Quang' ],
			[ 'id' => 34, 'name' =>	'Lãnh Đạo Hiệp Hội DN Tỉnh Tuyên Quang' ],
			[ 'id' => 35, 'name' =>	'Lãnh Đạo Sở GTVT Hà Nội' ],
			[ 'id' => 36, 'name' =>	'Phòng QLVT - Sở GTVT Hà Nội' ],
			[ 'id' => 37, 'name' =>	'Thanh Tra Sở GTVT TP Hà Nội' ],
			[ 'id' => 38, 'name' =>	'Chỉ Huy Đội CSGT Số 03 Phòng CSGT Hà Nội' ],
			[ 'id' => 39, 'name' =>	'Chỉ Huy Đội CSGT Số 04 Phòng CSGT Hà Nội' ],
			[ 'id' => 40, 'name' =>	'Chỉ Huy Đội CSGT Số 06 Phòng CSGT Hà Nội' ],
			[ 'id' => 41, 'name' =>	'Lãnh Đạo Đội Thanh Tra Giao Thông Quận Cầu Giấy' ],
			[ 'id' => 42, 'name' =>	'Lãnh Đạo Đội Thanh Tra Giao Thông Quận Hai Bà Trưng' ],
			[ 'id' => 43, 'name' =>	'Lãnh Đạo Đội Thanh Tra Giao Thông Quận Thanh Xuân' ],
			[ 'id' => 44, 'name' =>	'Lãnh Đạo Cục CSGT Bộ Công An' ],
			[ 'id' => 45, 'name' =>	'Lãnh Đạo Phòng Hướng Dẫn Công Tác Tuần Tra Kiểm Soát Giao Thông Đường Bộ' ],
			[ 'id' => 46, 'name' =>	'Lãnh Đạo Bộ Giao Thông Vận Tải' ],
			[ 'id' => 47, 'name' =>	'Lãnh Đạo Vụ Vận Tải' ],
			[ 'id' => 48, 'name' =>	'Lãnh Đạo Vụ Pháp Chế' ],
			[ 'id' => 49, 'name' =>	'Lãnh Đạo Uỷ Ban An Toàn Giao Thông Quốc Gia' ],
			[ 'id' => 50, 'name' =>	'Lãnh Đạo Tổng Cục Đường Bộ Việt Nam' ],
			[ 'id' => 51, 'name' =>	'Ban Chấp Hành Hiệp Hội Vận Tải Ô Tô Việt Nam' ],
			[ 'id' => 52, 'name' =>	'Ban Chấp Hành Hội ATGT Việt Nam' ],
			[ 'id' => 53, 'name' =>	'Lãnh Đạo Phòng Thương Mại Công Nghiệp Việt Nam' ],
			[ 'id' => 54, 'name' =>	'Lãnh Đạo Ban Pháp Chế VCCI' ],
			[ 'id' => 55, 'name' =>	'Lãnh Đạo Tổng Cục Thuế' ],
			[ 'id' => 56, 'name' =>	'Tạp Chí Vận Tải Ô Tô Việt Nam' ],
			[ 'id' => 57, 'name' =>	'Ông Nguyễn Quý Đại - Tạp chí Opensky và Giao thông 24h' ],
			[ 'id' => 58, 'name' =>	'Anh Long - Giám Đốc Công Ty VTVCap' ],
			[ 'id' => 59, 'name' =>	'Ông Nguyễn Thanh Tùng - Tổng Giám đốc Công Ty Cổ Phần Interbus Lines' ],
			[ 'id' => 60, 'name' =>	'Ông Đoàn Thế Xuyên - Giám Đốc Công Ty TNHH Phúc Xuyên' ],
			[ 'id' => 61, 'name' =>	'Ông Nguyễn Thượng Hải - Giám Đốc Công Ty Cổ Phần Xe Khách Nam Hà Hải' ],
			[ 'id' => 62, 'name' =>	'Ông Nguyễn Tiến Dũng - Giám Đốc Công Ty TNHH Du Lịch & Vận Tải Vân Anh' ],
			[ 'id' => 63, 'name' =>	'Ông Khúc Hữu Thanh Hải - Giám Đốc Công Ty CP Vận Tải, Thương Mại Và Dịch Vụ Đất Cảng' ],
			[ 'id' => 64, 'name' =>	'Ông Lại Văn Thuần - Giám Đốc Công Ty TNHH TM & DV Vận Tải Phiệt Học' ],
			[ 'id' => 65, 'name' =>	'Ông Nguyễn Duy Ninh - CTHĐQT Công Ty Cổ Phần Ninh Quỳnh' ],
			[ 'id' => 66, 'name' =>	'Ông Nguyễn Minh Quốc - Giám Đốc Công Ty TNHH Thương Mại Nam Cường' ],
			[ 'id' => 67, 'name' =>	'Ông Nguyễn Hoàng Phú - Giám Đốc Công Ty TNHH Dịch Vụ Vận Tải Hoàng Phú' ],
			[ 'id' => 68, 'name' =>	'Ông Ngô Đức - Giám Đốc Công Ty TNHH Vân Đồn Xanh' ],
			[ 'id' => 69, 'name' =>	'Ông Trần Vương Long - Tổng Giám Đốc Công Ty Cổ Phần Beepro' ],
			[ 'id' => 70, 'name' =>	'Ông Lê Quang Huy - Giám Đốc Công Ty TNHH Vĩnh Quang' ],
			[ 'id' => 71, 'name' =>	'Ông Vũ Chính - Giám Đốc Công Ty Cổ Phần Đầu Tư Thương Mại Và Vận Tải Duy Khang' ],
			[ 'id' => 72, 'name' =>	'Ông Trần Hùng - Giám Đốc Công Ty TNHH DVTM Vận Tải Quốc Tuấn' ],
			[ 'id' => 73, 'name' =>	'Bà Hoàng Thị Yến - Giám Đốc Công Ty Cổ Phần Tập Đoàn Phúc Lộc Thọ' ],
			[ 'id' => 74, 'name' =>	'Ông Nguyễn Huy Toàn - Giám Đốc Công Ty Cổ Phần Vận Tải Và Thương Mại Văn Phúc' ],
			[ 'id' => 75, 'name' =>	'Bà Thái Thị Nhật - Giám Đốc Công Ty TNHH Vận Tải & Thương Mại Quốc Tê Bình Minh' ],
			[ 'id' => 76, 'name' =>	'Ông Đoàn Văn Dũng - Giám Đốc Công Ty Cổ Phần Du Thuyền Đông Dương' ],
			[ 'id' => 77, 'name' =>	'Ông Hoàng Mạnh Dũng - Giám Đốc Công Ty TNHH Hoa Dũng' ],
			[ 'id' => 78, 'name' =>	'Ông Vũ Văn Tuấn - Phó giám Đốc Công Ty Cổ Phần Hà Vy' ],
			[ 'id' => 79, 'name' =>	'Ông Vũ Hải Bình - Giám Đốc Công Ty TNHH TM Và DV Vận Tải Phú Bình' ],
			[ 'id' => 80, 'name' =>	'Ông Lê Khánh Hà, Trường Phòng Phóng Viên - Tạp Chí Điện Tử, Tạp Chí Giao Thông Vận Tải'],
			[ 'id' => 81, 'name' =>	'Ông Hoàng Đức Trung - Giám Đốc Quỹ VinaCapital Venture'],
			[ 'id' => 82, 'name' =>	'Đại diện VinaCapital Venture'],
		];

		if( $u ) {
            $data['id'] = $u;
			foreach ($listUser as $key => $value) {
				if($value['id'] == $u) {
					$data['user'] = $value;
				}
			}

		} else {
			$data['user'] = [
				'id' => 'xxx',
				'name' => 'Quý khách'
			];
		}

        return view('pages.le-cong-bo-hop-dong-dien-tu')->with([
            'data' => $data,
        ]);;
    }
}
