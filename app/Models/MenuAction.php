<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuAction extends Model
{
    public $table = 'menu_actions';

    protected $fillable = [
        'menu_id',
        'action_id',
    ];
    
    public $timestamps = false;
}
