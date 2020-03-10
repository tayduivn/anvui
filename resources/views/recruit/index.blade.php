@extends('template.layout')

@section('content')
<section class="recruit">
    <div class="recruit__head">
        <div class="container">
            <h1>Tuyển dụng An Vui</h1>
            <p>Là Startup đã nhận vốn đầu tư nước ngoài, có định hướng và chiến lược rõ ràng tạo nên sản phẩm và dịch vụ mang tầm cỡ quốc tế. Môi trường làm việc trẻ, năng động và chia sẻ của AN VUI đang là nơi giúp các bạn trẻ trưởng thành nhanh chóng khi làm việc trong môi trường chuyên nghiệp và sáng tạo</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach($data as $value)
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="recruit-item">
                    <div class="recruit-item__thumb">
                        <a href="{{ $value->link }}" title="{{ $value->title }}"><img class="img-fluid" src="{{ $value->img }}" title="{{ $value->title }}" alt="{{ $value->title }}"></a>
                        <div class="recruit-item__thumb__content">
                            <h2><a href="{{ $value->link }}" title="{{ $value->title }}">{{ str_limit($value->title, 20, '...') }}</a></h2>
                        </div>
                    </div>
                    <div class="recruit-item__content">
                        <h2><a href="{{ $value->link }}" title="{{ $value->title }}">{{ $value->title }}</a></h2>
                        <p>Thời gian: {{ $value->time_type_string }} </p>
                        <p>Địa điểm: {{ $value->place }}</p>
                        <p>Mức lương: {{ $value->salary_string }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav>
                    {{ $data->links() }}
                </nav>
            </div>
            
        </div>
    </div>
</section>
@endsection