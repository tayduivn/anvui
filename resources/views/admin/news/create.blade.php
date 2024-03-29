@extends('admin.templates.master')

@section('content')

<section class="newsCreate" id="js--moduleContent">
    <form action="{{ route('admin.news.store') }}" id="js--contentForm" method="POST" enctype="multipart/form-data">
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

        <div class="newsCreate__seo">
            <div class="form-group">
                <div class="row">
                    <div class="col-9">
                        <div class="avcollapse card">
                            <div class="avcollapse__header" data-toggle="collapse" data-target="#newsCreate__seo__wrap">
                                SEO
                            </div>
                            <div class="avcollapse__body collapse show" id="newsCreate__seo__wrap">
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
                            <div class="avcollapse__body collapse show" id="newsCreate__info__setting_wrap">
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
                <a href="{{ route('admin.news.index') }}" class="d-inline-block"><button  type="button" class="avbtn__submit avbtn__submit--cancel">Hủy</button></a>
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
        });
        initUpload('#js--upload');
    })();
</script>

@endpush