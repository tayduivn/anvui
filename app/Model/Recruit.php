<?php

namespace App\Model;

use App\Model\BaseModel;
use App\Model\RecruitTrans;

class Recruit extends BaseModel
{
    public $table       = "recruit";
    public $primayKey   = "id";
    public $incrementing = true;
    public $timestamps   = true;
    protected $dateFormat = 'U';

    const PART_TIME = 'p';
    const FULL_TIME = 'f';
    const PART_FULL_TIME = 'fp';

    function __construct() {
        parent::__construct();

    }

    public function getRecruits($filter = []) {
        $model = $this::where('recruit_trans.lang', $this->lang);

        if( isset($filter['id']) ) {
            $model = $model->where('recruit.id', $filter['id']);
        }

        if( isset($filter['status']) ) {
            $model = $model->where('recruit.status', '1');
        }

        $model = $model->orderBy('id', 'DESC');
        return $model->join('recruit_trans', 'recruit.id', '=', 'recruit_trans.recruit_id');
    }


    public function removeRecruit($id) {
        $recruitTransModel = new RecruitTrans();
        
        $recruitTransModel->where('recruit_id', $id)->delete();
        
        return $this->where('id', $id)->delete();
    }
    
    public function updateRecruit($id, $params) {
        $recruitTransModel = new RecruitTrans();

        $dataUpdate = [
            'title' => $params['title'],
            'status' => $params['status'],
            'updated_at' => time(),
            'time_type' => $params['time_type'],
            'place' => $params['place'],
            'salary_from' => $params['salary_from'],
            'salary_to' => $params['salary_to'],
            'from' => $params['from'],
            'to' => $params['to'],
        ];
        
        isset($params['img']) ? $dataUpdate['img'] = $params['img'] : "";

        $this->where('id', $id)->update($dataUpdate);
            
        $seo = [
            'meta_title' => $params['meta_title'],
            'meta_desc' => $params['meta_desc'],
            'meta_keyword' => $params['meta_keyword'],
        ];

        $recruitTransModel->where('recruit_id', $id)->update([
            // 'title' => $params['title'],
            'content' => $params['content'],
            // 'desc' => $params['desc'],
            'lang' => $params['lang'],
            // 'seo' => json_encode($seo),
        ]);

        return true;
    }


    public function insertRecruit($params) {
        $recruitTransModel = new RecruitTrans();

        $dataInsert = [
            'status' => $params['status'],
            'title' => $params['title'],
            'created_at' => time(),
            'time_type' => $params['time_type'],
            'place' => $params['place'],
            'salary_from' => $params['salary_from'],
            'salary_to' => $params['salary_to'],
            'from' => $params['from'],
            'to' => $params['to'],
        ];

        isset($params['img']) ? $dataInsert['img'] = $params['img'] : "";

        $recuitId = $this->insertGetId($dataInsert);

        $seo = [
            'meta_title' => $params['meta_title'],
            'meta_desc' => $params['meta_desc'],
            'meta_keyword' => $params['meta_keyword'],
        ];

        if($recuitId) {
            return $recruitTransModel->insert([
                'recruit_id' => $params['recuitId'],
                'content' => $params['content'],
                // 'desc' => $params['desc'],
                'lang' => $params['lang'],
                // 'seo' => json_encode($seo),
            ]);
        }
        
        return false;
    }


    public function createContentFormatter($item, $route = 'recruit.detail', $dateFormat = 'd/m/Y') {
        $item = parent::createContentFormatter($item, $route, $dateFormat);

        $timeTypeText = [
            $this::PART_TIME => 'Part time',
            $this::FULL_TIME => 'Full time',
            $this::PART_FULL_TIME => 'Full time & Part time',
        ];

        $item->time_type_string = $timeTypeText[$item->time_type];

        if($item->salary_to <= 0) {
            $item->salary_string = "Thương lượng";
        } else {
            $item->salary_string = number_format($item->salary_from,0) . "đ - " . number_format($item->salary_to,0) . "đ";
        }

        return $item;
    }
}
