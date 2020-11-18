@extends('template.layout')

@section('content')
<section class="news-page">
    <div class="container">
        <h3 class="page__header">Tin tức An Vui</h3>
        <style>
        .newNews__carousel {
            margin-bottom: 40px;
        }
        </style>
        <div id="js_newNews" class="newNews__carousel owl-carousel owl-theme">
            @for ($i = 0; $i < 5; $i++)
            <div class="item newNews__item">
                <div class="news-item__thumb" style="margin-bottom: 13px">
                    <a href="{{ $value->link }}" title="{{ $value['title'] }}"><img src="{{ $value['img'] }}" class="img-fluid" title="{{ $value['title'] }}" alt="{{ $value['title'] }}"></a>
                </div>
                <h2 class="news-item__title"><a href="{{ $value->link }}" title="{{ $value['title'] }}">{{ $value['title'] }}</a></h2>
                <div class="news-item__desc">
                    {{ !empty($value['desc']) ? $value['desc'] : $value['seo']['meta_desc'] }}
                </div>
                <p class="news-item__date">Ngày đăng: {{ $value['created_at_format'] }}</p>
            </div>
            @endfor
        </div>

        @foreach($data as $key => $value)
        <div class="news-item">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="news-item__thumb">
                        <a href="{{ $value->link }}" title="{{ $value['title'] }}"><img src="{{ $value['img'] }}" class="img-fluid" title="{{ $value['title'] }}" alt="{{ $value['title'] }}"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <h2 class="news-item__title"><a href="{{ $value->link }}" title="{{ $value['title'] }}">{{ $value['title'] }}</a></h2>
                    <div class="news-item__desc">
                        {{ !empty($value['desc']) ? $value['desc'] : $value['seo']['meta_desc'] }}
                    </div>
                    <p class="news-item__date">Ngày đăng: {{ $value['created_at_format'] }}</p>
                </div>    
            </div>
        </div>
        @endforeach

        <nav>
            {{ $data->links() }}
        </nav>
    </div>
</section>
@endsection