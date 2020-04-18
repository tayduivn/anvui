@extends('admin.templates.master')

@section('content')

<section class="newsCreate" id="js--moduleContent">
    <form action="{{ route('admin.recruit.store') }}" id="js--contentForm" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="content" class="d-none"></textarea>
        <input type="hidden" name="id" value="{{ $data['id'] ?? '' }}">
        <div class="form-group">
            <div class="row">
                <div class="col-7">
                    <input type="text" value="{{ $data['title'] ?? '' }}" name="title" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div id="js--editor__toolbar" class="aveditor__toolbar"></div>
                        <div id="js--editor" class="aveditor">{!! $data['content'] ?? '' !!}</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 mb-1"><label for="">Mức lương</label></div>
                <div class="col-3"><input type="number" name="salary_from" class="form-control" placeholder="Từ" value="{{ $data['salary_from'] ?? 0 }}"></div>
                <div class="col-3"><input type="number" name="salary_to" class="form-control" placeholder="Đến" value="{{ $data['salary_to'] ?? 0 }}"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 mb-1"><label for="">Thời gian</label></div>
                <div class="col-3"><input type="date" name="from" class="form-control" placeholder="Từ" value="{{ !empty($data['from']) ? date('Y-m-d', $data['from']) : '' }}"></div>
                <div class="col-3"><input type="date" name="to" class="form-control" placeholder="Đến" value="{{ !empty($data['to']) ? date('Y-m-d', $data['to']) : '' }}"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="" class=" mb-1">Địa điểm làm việc</label>
                    <input type="text" name="place" class="form-control" value="{{ $data['place'] ?? "" }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="" class=" mb-1">Loại thời gian</label>
                    <select name="time_type" class="form-control">
                        <option value="f">Full time</option>
                        <option value="p">Part time</option>
                        <option value="fp">Part time & Full time</option>
                    </select>  
                </div>
            </div>
        </div>
        
        <div class="newsCreate__seo">
            <div class="form-group">
                <div class="row">
                    <div class="col-9">
                        <div class="avcollapse card">
                            <div class="avcollapse__header" data-toggle="collapse" data-target="#newsCreate__seo__wrap">
                                SEO
                            </div>
                            <div class="avcollapse__body" id="newsCreate__seo__wrap">
                                @include('admin.templates.seo', ['metaTitle' => $data['seo']['meta_title'] ?? '', 'metaDesc' => $data['seo']['meta_desc'] ?? '', 'metaKeyword' => $data['seo']['meta_keyword'] ?? '',])
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="avcollapse card newsCreate__info">
                            <div class="avcollapse__header" data-toggle="collapse"
                                data-target="#newsCreate__info__setting_wrap">
                                Thông tin
                            </div>
                            <div class="avcollapse__body" id="newsCreate__info__setting_wrap">
                                <div class="mb-3">
                                    <div class="row">
                                        <b class="col-4">Ngày đăng:</b>
                                        <div class="col-8">
                                            {{ !empty($data['created_time']) ? date( 'd/m/Y' , $data['created_time']) : date('d/m/Y') }}
                                        </div>
                                    </div>
                                </div>
    
                                <div class="mb-3">
                                    <div class="row">
                                        <b class="col-4">Hiện/Ẩn:</b>
                                        <div class="col-8">
                                            @include('admin.templates.switch', ['status' => $data['status'] ?? 1])
                                        </div>
                                    </div>
                                </div>
    
                                <div class="mb-3">
                                    <div class="row">
                                        <b class="col-4">Ảnh:</b>
                                        <div class="col-6">
                                            @include('admin.templates.upload_single_image', ['uploadImage' => $data['img'] ?? ''])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsCreate__submit">
            <div class="form-group">
                <button type="submit" class="avbtn__submit avbtn__submit--save">Lưu</button>
                <a href="{{ route('admin.recruit.index') }}" class="d-inline-block"><button type="button" class="avbtn__submit avbtn__submit--cancel">Hủy</button></a>
            </div>
        </div>
    </form>
</section>

@endsection

@push('scripts')
<script>
    (function(){
        initEditor('#js--editor', '#js--editor__toolbar', "{{ route('media.upload') }}");
        $('#js--contentForm').submit(function(event){
            $(this).find('[name=content]').text( window.editor.getData() );
            $(this).submit();
        });
        initUpload('#js--upload');
    })();
</script>

@endpush