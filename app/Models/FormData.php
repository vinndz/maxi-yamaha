<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_datas';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'instagram',
        'category',
        'type_motorcycle',
        'cost_estimation',
        'link',
        'image',
    ];

    
}
