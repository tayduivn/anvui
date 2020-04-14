<?php

namespace App\Model;

use App\Model\BaseModel;

class RecruitTrans extends BaseModel
{
    public $table       = "recruit_trans";
    public $primayKey   = "rt_id";
    public $incrementing = true;
    public $timestamps   = false;
    protected $dateFormat = 'U';

    function __construct() {
        parent::__construct();

    }
}