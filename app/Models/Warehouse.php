<?php

namespace App\Models;

use App\Models\BaseModel;

class Warehouse extends BaseModel
{

    public $table = 'warehouses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'status'
    ];

    const LIST_STATUS = [
        "0" => "inactive",
        "1" => "active"
    ];
}
