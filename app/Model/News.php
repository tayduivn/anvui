<?php

namespace App\Model;

use App\Model\BaseModel;
use App\Model\NewsTrans;

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
        $model = $this::where('news_trans.lang', $this->lang);

        if( isset($filter['status']) ) {
            $model = $model->where('status', $filter['status']);
        }

        if( isset($filter['id']) ) {
            $model = $model->where('news.id', $filter['id']);
        }
        $model = $model->orderBy('created_at', 'DESC');
        return $model->join('news_trans', 'news.id', '=', 'news_trans.news_id');
    }


    public function removeNews($id) {
        $newsTransModel = new NewsTrans();
        
        $newsTransModel->where('news_id', $id)->delete();
        
        return $this->where('id', $id)->delete();
    }


    public function updateNews($id, $params) {
        $newsTransModel = new NewsTrans();

        $dataUpdate = [
            'status' => $params['status'],
            'updated_at' => time(),
        ];
        
        isset($params['img']) ? $dataUpdate['img'] = $params['img'] : "";

        $this->where('id', $id)->update($dataUpdate);
            
        $seo = [
            'meta_title' => $params['meta_title'],
            'meta_desc' => $params['meta_desc'],
            'meta_keyword' => $params['meta_keyword'],
        ];

        $newsTransModel->where('news_id', $id)->update([
            'title' => $params['title'],
            'content' => $params['content'],
            // 'desc' => $params['desc'],
            'lang' => $params['lang'],
            'seo' => json_encode($seo),
        ]);

        return true;
    }


    public function insertNews($params) {
        $newsTransModel = new NewsTrans();

        isset($params['img']) ? $dataInsert['img'] = $params['img'] : "";
        $dataInsert['status'] = $params['status'];
        $dataInsert['created_at'] = time();

        $newsId = $this->insertGetId($dataInsert);
        
        $seo = [
            'meta_title' => $params['meta_title'],
            'meta_desc' => $params['meta_desc'],
            'meta_keyword' => $params['meta_keyword'],
        ];
        
        if($newsId) {
            $newsTransModel->insert([
                'title' => $params['title'],
                'news_id' => $newsId,
                'content' => $params['content'],
                // 'desc' => $params['desc'],
                'lang' => $params['lang'],
                'seo' => json_encode($seo),
            ]);

            return $newsId;
        }
        return false; 
    }

}
