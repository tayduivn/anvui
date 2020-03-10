<?php

namespace App\Model;

use App\Model\BaseModel;

class NewsTrans extends BaseModel
{
    public $table       = "news_trans";
    public $primayKey   = "id";
    public $incrementing = true;
    public $timestamps   = true;
    protected $dateFormat = 'U';

    function __construct() {
        parent::__construct();
    }
}
