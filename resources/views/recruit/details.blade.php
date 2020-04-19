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
                            <a href="javascript:;" data-toggle="modal" data-target="#modal__cv--reg">Gửi CV cho chúng tôi!</a>
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

<div class="modal modal--cv--reg" id="modal__cv--reg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="modal--cv--reg_form">
                        <form action="{{ route('recruit.sendCV') }}" method="POST" id="js-form--reg_cv" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="recruit_id" value="{{ $data->id }}">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label for="">Họ tên: <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label for="">Email: <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label for="">Số điện thoại: <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label for="">CV của bạn: <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        {{-- <label for="js--cvfile" type="button" class="btn d-inline-block btn-send-cv">
                                            Chọn file
                                        </label> --}}
                                        <input type="file" id="js--cvfile" name="cv" class="form-control"  accept="application/pdf">
                                        <i class="d-block">Yêu cầu file pdf</i>
                                        <label for="cv" id="cv-error" class="error"></label>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <button class="btn--reg" type="submit">Gửi thông tin </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
