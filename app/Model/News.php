<?php

namespace App\Model;

use App\Model\BaseModel;

class News extends BaseModel
{
    public $table       = "news";
    public $primayKey   = "id";
    public $incrementing = true;
    public $timestamps   = true;
    protected $dateFormat = 'U';

    function __construct() {
        parent::__construct();
    }

    public function getNewses($filter = []) {
        $model = $this::where('news_trans.lang', $this->lang)->where('news.status', '1');

        if( isset($filter['id']) ) {
            $model = $model->where('news.id', $filter['id']);
        }
        $model = $model->orderBy('created_at', 'DESC');
        return $model->join('news_trans', 'news.id', '=', 'news_trans.news_id');
    }
}
