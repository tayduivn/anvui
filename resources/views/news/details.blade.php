@extends('template.layout')

@section('content')
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="news-details__main">
                    <h1 class="news-details__title">{{ $data['title'] }}</h1>
                    <p class="news-details__date">Ngày đăng: {{ $data['created_at_format'] }}</p>
                    <div class="news-details__content">
                        {!! $data['content'] !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        </div>
    </div>
</section>

<section class="news-related">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="news-related__title">Các tin tức khác</h2>
                @foreach($newsRelated as $key => $value)
                <a href="{{ $value->link }}" title="{{ $value->title }}">{{ $value->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<style>
    .news-details__content img {
        max-width: 100%;
        height: auto;
    }
</style>


@endsection