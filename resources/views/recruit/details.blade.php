@extends('template.layout')

@section('content')
<section class="recruit-details">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="recruit-details__head">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <img src="{{ $data->img }}" title="{{ $data->title }}" class="img-fluid" alt="{{ $data->title }}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <h1>{{ $data->title }}</h1>
                            <p>Thời gian: {{ $data->time_type_string }}</p>
                            <p>Địa điểm: {{ $data->place }}</p>
                            <p>Mức lương: {{ $data->salary_string }}</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#modal--cv--reg">Gửi CV cho chúng tôi!</a>
                        </div>
                    </div>
                </div>
                <div class="recruit-details__content">
                    {!! $data->content !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        </div>
    </div>
</section>
@endsection