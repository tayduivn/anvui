<?php

namespace App\Model;

use App\Model\BaseModel;

class RegisterUse extends BaseModel
{
    public $table       = "register_use";
    public $primayKey   = "id";
    public $incrementing = true;
    public $timestamps   = true;
    protected $dateFormat = 'U';

    function __construct() {
        parent::__construct();
    }
}
