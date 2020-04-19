@extends('admin.templates.master')

@section('content')
<section class="dashBoard">
<div class="row">
    <div class="col-12 mb-3">
        <div class="listCV">
            <div class="avcollapse card">
                <div class="avcollapse__header" data-toggle="collapse" data-target="#listCV__body">
                    Danh sách CV
                </div>
                <div class="avcollapse__body collapse" id="listCV__body">
                    <table class="avdatatable table table-bordered">
                        <thead>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Ngày gửi</th>
                            <th>Tin tuyển dụng</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($data['forms'] as $key => $value)
                            <tr class="{{ $value->status == 1 ? 'viewed' : "" }}" title="{{ $value->status == 1 ? 'ĐÃ XEM' : "CHƯA XEM" }}" >
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ ($value->created_at) ? $value->created_at->format('d/m/Y') : "" }}</td>
                                <td>{{ $value->title }}</td>
                                <td>
                                    <a href="{{ route('recruit.preViewCV', ['id' => $value['id']]) . "/?redirect_to=" . asset($value->file) }}" target="_blank" class="action action--warning"><i class="fa fa-eye"></i></a>
                                    {{-- <form data-form-remove="{{$value['id']}}" id="formListCV{{$value['id']}}" action="{{ route('recruit.removeCV') }}" class="d-inline" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$value['id']}}" name="id">
                                        <button type="submit" form="formListCV{{$value['id']}}" data-action="remove" data-form-remove="{{$value['id']}}"
                                            class="action action--danger"><i class="fa fa-trash-o"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="listCompany">
            <div class="avcollapse card">
                <div class="avcollapse__header" data-toggle="collapse" data-target="#listCompany__body">
                    Danh sách nhà xe đăng ký
                </div>
                <div class="avcollapse__body collapse show" id="listCompany__body">
                    <table class="avdatatable table table-bordered">
                        <thead>
                            <th>STT</th>
                            <th>Người liên hệ</th>
                            <th>Nhà xe</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đăng ký</th>
                        </thead>
                        <tbody>
                            @foreach ($data['companies'] as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->user_name }}</td>
                                <td>{{ $value->company_name }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->address }}</td>
                                <td>{{ ($value->created_at) ? $value->created_at->format('d/m/Y') : "" }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection