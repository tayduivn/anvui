<?php

namespace App\Model;

use App\Model\BaseModel;

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
        $model = $this::where('recruit_trans.lang', $this->lang)->where('recruit.status', '1');

        if( isset($filter['id']) ) {
            $model = $model->where('recruit.id', $filter['id']);
        }

        $model = $model->orderBy('id', 'DESC');
        return $model->join('recruit_trans', 'recruit.id', '=', 'recruit_trans.recruit_id');
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
