<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    public function users(){
        return $this->hasManyThrough('\App\Models\User', '\App\Models\UsersTables', 'user_id', 'id');
    }
}
