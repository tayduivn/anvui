<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        
        $headerDefault = [
            'metaTitle' => 'ANVUI.VN - Startup công nghệ số hóa ngành vận tải hành khác',
            'metaDesc' => 'AN VUI là đơn vị Công nghệ đầu tiên tại Việt Nam xây dựng hệ thống phần mềm tổng thể cho ngành vận tải hành khách. Nhằm giúp các nhà vận tải chủ động trong quản lý, nâng cao năng lực cạnh tranh từ đó giữ vững thị phần và mở rộng quy mô.',
            'metaKeyword' => 'vận tải,phần mềm,phần mềm nhà xe',
            'img' => asset('imgs/img-home2.png')
        ];
        Config::set('HEADER', $headerDefault);
        View::share('HEADER', $headerDefault );
    }
}
