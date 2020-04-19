<?php

namespace App\Model;

use App\Model\BaseModel;

class RecruitForm extends BaseModel
{
    public $table       = "recruit_form";
    public $primayKey   = "id";
    public $incrementing = true;
    public $timestamps   = true;
    protected $dateFormat = 'U';

    function __construct() {
        parent::__construct();
    }

    public function getRecruitsForm($filter = []) {
        $model = $this;

        if( isset($filter['recruit_id']) ) {
            $model = $model->where('recruit_id', $filter['recruit_id']);
        }

        if( isset($filter['status']) ) {
            $model = $model->where('status', '1');
        }

        $model = $model->orderBy('id', 'DESC');
        $model = $model->join('recruit', 'recruit.id', '=', 'recruit_form.recruit_id');
        // $model = $model->join('recruit_trans', 'recruit.id', '=', 'recruit_trans.recruit_id');
        $model = $model->select('recruit_form.*','recruit.title' );
        return $model; 
    } 
}
